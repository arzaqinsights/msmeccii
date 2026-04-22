<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FormController extends Controller
{
    public function show($slug)
    {
        $form = Form::where('slug', $slug)
            ->where('status', 'published')
            ->with(['fields' => function($q) {
                $q->orderBy('order', 'asc');
            }])
            ->firstOrFail();

        return view('website.forms.show', compact('form'));
    }

    public function store(Request $request, $slug)
    {
        $form = Form::where('slug', $slug)->where('status', 'published')->firstOrFail();

        // 1. Fixed Authentication Field Validations
        $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'company_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'address' => 'required|string',
            'city' => 'required|string|max:255',
            'pincode' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'gstin' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();

        // 2. Auto-Authentication & Profile Sync Engine
        if (!$user) {
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $request->first_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'company_name' => $request->company_name,
                    'designation' => $request->designation,
                    'address' => $request->address,
                    'city' => $request->city,
                    'pincode' => $request->pincode,
                    'country' => $request->country,
                    'gstin' => $request->gstin,
                    'website' => $request->website,
                    'password' => Hash::make(Str::random(16)), 
                    'role' => 'user'
                ]);
            }
            Auth::login($user);
        }

        // Always sync the latest profile information
        $user->update([
            'name' => $request->first_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'company_name' => $request->company_name,
            'designation' => $request->designation,
            'address' => $request->address,
            'city' => $request->city,
            'pincode' => $request->pincode,
            'country' => $request->country,
            'gstin' => $request->gstin,
            'website' => $request->website,
        ]);

        // 3. Dynamic Field Processing & Security Filtering
        $dynamicData = $request->input('dynamic_fields', []);
        $totalAmount = 0;
        $totalTax = 0;
        $lineItems = [];

        // Secure Server-Side Dependency & Price verification
        foreach ($form->fields as $field) {
            $identifier = $field->field_identifier;
            
            // Check if field value was submitted
            $submittedValue = $dynamicData[$identifier] ?? null;

            // Handle file uploads dynamically
            if ($field->type === 'file' && $request->hasFile("dynamic_fields.{$identifier}")) {
                $file = $request->file("dynamic_fields.{$identifier}");
                $filename = time() . "_{$identifier}_" . $file->getClientOriginalName();
                $file->move(public_path('uploads/submissions'), $filename);
                $submittedValue = '/uploads/submissions/' . $filename;
                $dynamicData[$identifier] = $submittedValue; // Update payload path
            }

            // Price Calculation Engine
            if ($field->type === 'hidden_price' || ($submittedValue !== null && $submittedValue !== '')) {
                // Determine if this field should be legally accessible
                $isAccessible = true;
                if ($field->depends_on) {
                    $parentValue = $dynamicData[$field->depends_on] ?? null;
                    if ($field->depends_on_value !== '__MAPPED__' && $parentValue !== $field->depends_on_value) {
                        $isAccessible = false; // Standard dependency failed
                    } else if ($field->depends_on_value === '__MAPPED__' && (!$parentValue || !isset($field->options[$parentValue]))) {
                        $isAccessible = false; // Mapped dependency failed (parent has no options defined for this child)
                    }
                }

                if ($isAccessible) {
                    $fieldBase = 0;
                    $fieldTax = 0;

                    // Option-specific pricing for dropdowns
                    if ($field->type === 'dropdown' && is_array($field->options)) {
                        $lookupOptions = $field->options;

                        // NEW: Handle pricing for Mapped/Cascading dropdowns
                        if ($field->depends_on_value === '__MAPPED__') {
                            $parentValue = $dynamicData[$field->depends_on] ?? null;
                            $lookupOptions = $field->options[$parentValue] ?? [];
                        }

                        foreach ($lookupOptions as $opt) {
                            $optLabel = trim($opt['label'] ?? '');
                            if ($optLabel !== '' && strtolower($optLabel) === strtolower(trim($submittedValue))) {
                                $fieldBase = (float) ($opt['price'] ?? 0);
                                $fieldTax = $fieldBase > 0 ? ($fieldBase * ((float) ($opt['tax'] ?? 0) / 100)) : 0;
                                break;
                            }
                        }
                    } else {
                        // Standard field-level pricing
                        if ((float)$field->base_amount > 0) {
                            $fieldBase = (float) $field->base_amount;
                            
                            // NEW: Multiply price by quantity for number/range fields
                            if ($field->type === 'number') {
                                $qty = (float) ($submittedValue ?: 0);
                                $fieldBase = $fieldBase * $qty;
                            }

                            $fieldTax = (float)$field->tax_percentage > 0 ? ($fieldBase * ((float)$field->tax_percentage / 100)) : 0;
                        }
                    }

                    if ($fieldBase > 0) {
                        $totalAmount += $fieldBase;
                        $totalTax += $fieldTax;
                    }
                }
            }
        }

        $grandTotal = $totalAmount + $totalTax;

        // 5. Build Unified Submission Data (Standard + Dynamic)
        $labeledData = [
            'Full Name' => $request->first_name,
            'Email Address' => $request->email,
            'Phone Number' => $request->phone_number,
            'Company Name' => $request->company_name,
            'Designation' => $request->designation,
            'Office Address' => $request->address,
            'City' => $request->city,
            'Pin Code' => $request->pincode,
            'Country' => $request->country,
            'GSTIN' => $request->gstin,
            'Website' => $request->website,
        ];

        // Merge Dynamic Fields
        foreach ($dynamicData as $key => $value) {
            $field = $form->fields->where('field_identifier', $key)->first();
            $label = $field ? $field->label : $key;
            $labeledData[$label] = $value;
        }

        $paymentMethod = $request->input('payment_method', 'gateway');
        
        $submission = Submission::create([
            'user_id' => $user->id,
            'form_id' => $form->id,
            'data' => $labeledData,
            'total_amount_paid' => $grandTotal,
            'payment_status' => $grandTotal > 0 ? ($paymentMethod === 'manual' ? 'awaiting_verification' : 'pending') : 'completed',
            'payment_method' => $paymentMethod
        ]);

        // 5. Razorpay Order Creation
        if ($grandTotal > 0 && $paymentMethod === 'gateway') {
            $keyId = config('services.razorpay.key');
            $keySecret = config('services.razorpay.secret');

            if (!$keyId || !$keySecret) {
                return response()->json(['success' => false, 'message' => 'Payment gateway not configured.'], 500);
            }

            try {
                $api = new \Razorpay\Api\Api($keyId, $keySecret);
                $orderData = [
                    'receipt'         => 'rcpt_' . $submission->id,
                    'amount'          => round($grandTotal * 100), // in paise
                    'currency'        => 'INR',
                    'notes'           => [
                        'submission_id' => $submission->id,
                        'form_name'     => $form->name
                    ]
                ];
                $razorpayOrder = $api->order->create($orderData);
                
                // Create internal payment record
                \App\Models\Payment::create([
                    'user_id' => $user->id,
                    'submission_id' => $submission->id,
                    'razorpay_order_id' => $razorpayOrder['id'],
                    'amount' => round($grandTotal * 100),
                    'status' => 'pending'
                ]);

                return response()->json([
                    'success' => true,
                    'is_paid' => true,
                    'order_id' => $razorpayOrder['id'],
                    'amount' => round($grandTotal * 100),
                    'key' => $keyId,
                    'name' => "MSMECCII",
                    'description' => "Payment for " . $form->name,
                    'user' => [
                        'name' => $user->name,
                        'email' => $user->email,
                        'contact' => $user->phone_number
                    ],
                    'redirect' => route('join.forms.thank_you', ['submission' => $submission->id])
                ]);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Razorpay Error: ' . $e->getMessage()], 500);
            }
        }

        // Handle AJAX for free forms too
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'is_paid' => false,
                'redirect' => route('join.forms.thank_you', ['submission' => $submission->id])
            ]);
        }

        return redirect()->route('join.forms.thank_you', ['submission' => $submission->id]);
    }

    public function thankYou(Submission $submission)
    {
        return view('website.forms.thank_you', compact('submission'));
    }
}
