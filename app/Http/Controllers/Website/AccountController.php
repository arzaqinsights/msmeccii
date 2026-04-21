<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function dashboard()
    {
        $submissions = collect();

        if (Auth::check()) {
            $submissions = Submission::where('user_id', Auth::id())
                ->with('form')
                ->latest()
                ->get();
        }

        return view('website.account.dashboard', compact('submissions'));
    }

    public function editProfile()
    {
        return view('website.account.profile');
    }

    public function updateProfile(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $validated['name'];
        $user->phone_number = $validated['phone_number'];
        $user->company_name = $validated['company_name'];
        $user->designation = $validated['designation'];
        $user->save();

        return back()->with('success', 'Profile identity updated successfully.');
    }

    public function security()
    {
        return view('website.account.security');
    }

    public function updateSecurity(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->password = \Illuminate\Support\Facades\Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Security password updated successfully.');
    }
}
