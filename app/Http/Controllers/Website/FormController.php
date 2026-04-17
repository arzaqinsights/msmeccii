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
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
        ]);

        $user = Auth::user();

        // 2. Auto-Authentication Engine
        if (!$user) {
            $user = User::where('email', $request->email)->first();
            
            if (!$user) {
                $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'password' => Hash::make(Str::random(16)), // Secure throwaway, can trigger password reset later
                    'role' => 'user'
                ]);
            }
            // Log the user in to establish session
            Auth::login($user);
        }

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
            if ($submittedValue !== null && $submittedValue !== '') {
                // Determine if this field should be legally accessible
                $isAccessible = true;
                if ($field->depends_on) {
                    $parentValue = $dynamicData[$field->depends_on] ?? null;
                    if ($parentValue !== $field->depends_on_value) {
                        $isAccessible = false; // Dependency failed, ignore pricing
                    }
                }

                if ($isAccessible) {
                    $fieldBase = 0;
                    $fieldTax = 0;

                    // Option-specific pricing for dropdowns
                    if ($field->type === 'dropdown' && is_array($field->options)) {
                        foreach ($field->options as $opt) {
                            if (isset($opt['label']) && $opt['label'] === $submittedValue) {
                                $fieldBase = (float) ($opt['price'] ?? 0);
                                $fieldTax = $opt['price'] > 0 ? ($opt['price'] * (($opt['tax'] ?? 0) / 100)) : 0;
                                break;
                            }
                        }
                    } else {
                        // Standard field-level pricing
                        if ($field->base_amount > 0) {
                            $fieldBase = (float) $field->base_amount;
                            $fieldTax = $field->tax_percentage > 0 ? ($fieldBase * ($field->tax_percentage / 100)) : 0;
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

        // 4. Secure Submission Creation
        $submission = Submission::create([
            'user_id' => $user->id,
            'form_id' => $form->id,
            'data' => $dynamicData,
            'total_amount_paid' => $grandTotal,
            'payment_status' => $grandTotal > 0 ? 'pending' : 'completed'
        ]);

        // 5. Razorpay Order Creation
        if ($grandTotal > 0) {
            // Check Environment & Keys
            $keyId = env('RAZORPAY_KEY_ID');
            $keySecret = env('RAZORPAY_KEY_SECRET');

            if (app()->environment('local') && (!$keyId || !$keySecret)) {
                // In local environment without keys, we can simulate order creation for testing
                return response()->json([
                    'success' => true,
                    'is_paid' => true,
                    'is_test' => true, // Flag for frontend to skip actual Razorpay
                    'message' => 'Simulating payment in Local environment (Keys missing)',
                    'redirect' => route('forms.thank_you', ['submission' => $submission->id])
                ]);
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
                    'key' => env('RAZORPAY_KEY_ID'),
                    'name' => "MSMECCII",
                    'description' => "Payment for " . $form->name,
                    'user' => [
                        'name' => $user->first_name . ' ' . $user->last_name,
                        'email' => $user->email,
                        'contact' => $user->phone_number
                    ],
                    'redirect' => route('forms.thank_you', ['submission' => $submission->id])
                ]);
            } catch (\Exception $e) {
                if (app()->environment('local')) {
                     return response()->json(['success' => false, 'message' => 'Razorpay Error (Local): ' . $e->getMessage()], 500);
                }
                return response()->json(['success' => false, 'message' => 'Payment Gateway Error. Please try again later.'], 500);
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
}
