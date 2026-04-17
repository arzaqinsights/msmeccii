<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use App\Models\Submission;

class RazorpayController extends Controller
{
    public function verify(Request $request)
    {
        $signature = $request->razorpay_signature;
        $orderId = $request->razorpay_order_id;
        $paymentId = $request->razorpay_payment_id;

        $api = new Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));

        try {
            $attributes = [
                'razorpay_order_id' => $orderId,
                'razorpay_payment_id' => $paymentId,
                'razorpay_signature' => $signature
            ];

            $api->utility->verifyPaymentSignature($attributes);
            
            // Payment success logic
            $payment = Payment::where('razorpay_order_id', $orderId)->firstOrFail();
            $payment->update([
                'razorpay_payment_id' => $paymentId,
                'razorpay_signature' => $signature,
                'status' => 'success'
            ]);

            $submission = $payment->submission;
            $submission->update(['payment_status' => 'completed']);

            return redirect()->route('join.forms.thank_you', ['submission' => $submission->id])
                           ->with('success', 'Payment successful and application submitted.');

        } catch (\Exception $e) {
            // Payment failed logic
            return redirect()->route('home')->with('error', 'Payment verification failed: ' . $e->getMessage());
        }
    }
}
