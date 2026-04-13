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

                if ($isAccessible && $field->base_amount > 0) {
                    $base = $field->base_amount;
                    $tax = $field->tax_percentage > 0 ? ($base * ($field->tax_percentage / 100)) : 0;
                    
                    $totalAmount += $base;
                    $totalTax += $tax;
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

        // 5. Payment Gateway Redirect Logic
        if ($grandTotal > 0) {
            // Placeholder: Here you would integrate Razorpay/Stripe Redirect 
            // For now, auto-complete if no gateway is implemented.
            // return redirect()->route('payment.checkout', $submission->id);
            $submission->update(['payment_status' => 'completed']);
        }

        return redirect()->route('join.index')->with('success', $form->thank_you_message ?? 'Application successfully submitted.');
    }
}
