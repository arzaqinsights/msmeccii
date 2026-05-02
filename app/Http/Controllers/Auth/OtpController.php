<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtpController extends Controller
{
    public function showVerify()
    {
        if (Auth::user()->email_verified_at) {
            return redirect()->route('dashboard');
        }
        return view('auth.verify-otp');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'otp' => 'required|string|size:6',
        ]);

        $user = Auth::user();

        if ($user->otp_code === $request->otp && now()->lt($user->otp_expires_at)) {
            $user->email_verified_at = now();
            $user->otp_code = null;
            $user->otp_expires_at = null;
            $user->save();

            return redirect()->route('dashboard')->with('success', 'Email verified successfully!');
        }

        return back()->withErrors(['otp' => 'The provided OTP is invalid or has expired.']);
    }

    public function resend()
    {
        $user = Auth::user();
        $user->otp_code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        $user->otp_expires_at = now()->addMinutes(10);
        $user->save();

        $user->notify(new \App\Notifications\SendOtpNotification($user->otp_code));

        return back()->with('success', 'A new OTP has been sent to your email.');
    }
}
