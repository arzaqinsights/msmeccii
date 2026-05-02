<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'company_name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:50'],
            'industry_sector' => ['required', 'string', 'max:100'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'company_name' => $validated['company_name'],
            'designation' => $validated['designation'],
            'phone_number' => $validated['phone_number'],
            'industry_sector' => $validated['industry_sector'],
            'membership_status' => 'pending',
            'otp_code' => str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT),
            'otp_expires_at' => now()->addMinutes(10),
        ]);

        $user->notify(new \App\Notifications\SendOtpNotification($user->otp_code));

        Auth::login($user);

        return redirect()->route('otp.verify')->with('success', 'Registration successful. Please verify your email with the OTP sent.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function quickLeadCapture(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user) {
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make(\Illuminate\Support\Str::random(16)),
                'company_name' => $validated['company_name'],
                'phone_number' => $validated['phone_number'],
                'designation' => 'Not Provided',
                'industry_sector' => 'Not Provided',
                'membership_status' => 'pending',
                'requires_password_setup' => true,
            ]);

            // Optional: Send welcome mail here too if desired
            $token = app('auth.password.broker')->createToken($user);
            $user->notify(new \App\Notifications\WelcomeAndSetupPassword($token));
        }

        // Always log them in to make the subsequent form frictionless
        Auth::login($user);

        return response()->json(['success' => true]);
    }
}
