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

        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

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

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $razorpaySignature = $request->header('X-Razorpay-Signature');
        $webhookSecret = config('services.razorpay.webhook_secret');

        try {
            $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
            $api->utility->verifyWebhookSignature($payload, $razorpaySignature, $webhookSecret);

            $data = json_decode($payload, true);

            if ($data['event'] === 'payment.captured' || $data['event'] === 'order.paid') {
                $orderId = $data['payload']['payment']['entity']['order_id'] ?? $data['payload']['order']['entity']['id'];
                $paymentId = $data['payload']['payment']['entity']['id'];

                $payment = Payment::where('razorpay_order_id', $orderId)->first();

                if ($payment && $payment->status !== 'success') {
                    $payment->update([
                        'razorpay_payment_id' => $paymentId,
                        'status' => 'success'
                    ]);

                    $submission = $payment->submission;
                    $submission->update(['payment_status' => 'completed']);
                }
            }

            return response()->json(['status' => 'ok']);
        } catch (\Exception $e) {
            \Log::error('Razorpay Webhook Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
