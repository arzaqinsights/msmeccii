@extends('layouts.auth')

@section('title', 'Reset Password')
@section('auth_image', 'login_bg.png')
@section('hero_title', 'Secure Account Recovery.')
@section('hero_subtitle', 'Follow our secure protocol to regain access to your enterprise dashboard.')

@section('content')
    <div class="mb-10">
        <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Forgot Password?</h2>
        <p class="text-slate-500">No problem. Enter your business email address and we will email you a secure password reset link.</p>
    </div>

    @if (session('status'))
        <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded-r-md">
            <p class="text-sm font-medium text-green-700">{{ session('status') }}</p>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-bold text-slate-800 mb-2">Registered Email</label>
            <div class="relative">
                <!-- Glassy translucent input -->
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 
                    class="form-input w-full p-3 border @error('email') border-red-400 ring-red-100 focus:border-red-500 @else focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none ring-4 ring-transparent placeholder-slate-400 font-medium" 
                    placeholder="director@company.com">
            </div>
            @error('email')
                <p class="mt-2 text-sm text-red-600 font-bold flex items-center gap-1"><i class="fa-solid fa-circle-exclamation text-xs"></i> {{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full bg-slate-900 hover:bg-brand-primary text-white font-bold py-3.5 px-4 rounded-lg transition-all shadow-lg hover:shadow-brand-primary/40 flex items-center justify-center gap-2 group">
            Email Password Reset Link
            <i class="fa-solid fa-paper-plane text-sm group-hover:-translate-y-1 group-hover:translate-x-1 transition-transform"></i>
        </button>

        <p class="text-center text-sm text-slate-600 mt-8">
            Remember your credentials? 
            <a href="{{ route('login') }}" class="font-bold text-brand-primary hover:text-brand-primary-dark transition-colors">Back to Sign In</a>
        </p>
    </form>
@endsection
