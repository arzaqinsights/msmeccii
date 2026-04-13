@extends('layouts.auth')

@section('title', 'Create New Password')
@section('auth_image', 'login_bg.png')
@section('hero_title', 'Secure Account Recovery.')
@section('hero_subtitle', 'Set a strong new password to regain access to your enterprise dashboard.')

@section('content')
    <div class="mb-10">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Create New Password</h2>
        <p class="text-slate-500">Ensure your new password differs from previous ones for maximum security.</p>
    </div>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-bold text-slate-800 mb-2">Registered Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fa-regular fa-envelope text-slate-400"></i>
                </div>
                <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus readonly 
                    class="form-input w-full pl-11 pr-4 py-3.5 bg-white/40 border border-white/30 rounded-xl text-slate-600 cursor-not-allowed font-medium shadow-sm backdrop-blur-sm">
            </div>
            @error('email')
                <p class="mt-2 text-sm text-red-600 font-bold flex items-center gap-1"><i class="fa-solid fa-circle-exclamation text-xs"></i> {{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-bold text-slate-800 mb-2">New Password</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fa-solid fa-lock text-slate-400"></i>
                </div>
                <input id="password" type="password" name="password" required 
                    class="form-input w-full pl-11 pr-4 py-3.5 bg-white/60 focus:bg-white border @error('password') border-red-400 ring-red-100 focus:border-red-500 @else border-white/50 focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-xl text-slate-900 transition-all outline-none ring-4 ring-transparent placeholder-slate-400 font-medium shadow-sm backdrop-blur-sm">
            </div>
            @error('password')
                <p class="mt-2 text-sm text-red-600 font-bold flex items-center gap-1"><i class="fa-solid fa-circle-exclamation text-xs"></i> {{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-bold text-slate-800 mb-2">Confirm New Password</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fa-solid fa-check-double text-slate-400"></i>
                </div>
                <input id="password_confirmation" type="password" name="password_confirmation" required 
                    class="form-input w-full pl-11 pr-4 py-3.5 bg-white/60 focus:bg-white border border-white/50 focus:border-brand-primary rounded-xl text-slate-900 transition-all outline-none focus:ring-4 focus:ring-brand-primary/20 font-medium shadow-sm backdrop-blur-sm">
            </div>
        </div>

        <button type="submit" class="w-full bg-slate-900 hover:bg-brand-primary text-white font-bold py-3.5 px-4 rounded-lg transition-all shadow-lg hover:shadow-brand-primary/40 mt-6">
            Reset Password
        </button>
    </form>
@endsection
