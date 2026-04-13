@extends('layouts.auth')

@section('title', 'Sign In')
@section('auth_image', 'login_bg.png')
@section('hero_title', 'Secure Business Portal')

@section('content')
    <div class="mb-10 text-center">
        <h2 class="text-3xl font-black text-slate-900 mb-2 tracking-tight">Welcome Back</h2>
        <p class="text-slate-600 font-medium">Please enter your enterprise credentials.</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-bold text-slate-800 mb-2">Business Email</label>
            <div class="relative">
                <!-- Glassy translucent input -->
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 
                    class="form-input w-full p-3 border @error('email') border-red-400 ring-red-100 focus:border-red-500 @else focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none ring-4 ring-transparent placeholder-slate-400 font-medium shadow-sm" 
                    placeholder="director@company.com">
            </div>
            @error('email')
                <p class="mt-2 text-sm text-red-600 font-bold flex items-center gap-1"><i class="fa-solid fa-circle-exclamation text-xs"></i> {{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <div class="flex justify-between items-center mb-2">
                <label for="password" class="block text-sm font-bold text-slate-800">Password</label>
                <a href="{{ route('password.request') }}" class="text-xs font-bold text-brand-primary hover:text-brand-primary-dark transition-colors">Forgot Password?</a>
            </div>
            <div class="relative">
                <input id="password" type="password" name="password" required 
                    class="form-input w-full p-3 border @error('password') border-red-400 ring-red-100 focus:border-red-500 @else focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none ring-4 ring-transparent placeholder-slate-400 font-medium shadow-sm" 
                    placeholder="••••••••">
            </div>
            @error('password')
                <p class="mt-2 text-sm text-red-600 font-bold flex items-center gap-1"><i class="fa-solid fa-circle-exclamation text-xs"></i> {{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center pt-2">
            <input id="remember" type="checkbox" name="remember" class="w-4 h-4 text-brand-primary bg-white/80 border-slate-300 rounded focus:ring-brand-primary focus:ring-2 cursor-pointer transition-colors shadow-sm">
            <label for="remember" class="ml-2 text-sm font-bold text-slate-700 cursor-pointer">Keep me securely logged in</label>
        </div>

        <button type="submit" class="w-full bg-slate-900 hover:bg-brand-primary text-white font-bold py-4 px-4 rounded-xl transition-all shadow-xl hover:shadow-brand-primary/40 flex items-center justify-center gap-2 group mt-8">
            Access Dashboard
            <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
        </button>

        <div class="mt-8 pt-6 border-t border-slate-200/50 text-center">
            <p class="text-sm text-slate-600 font-medium">
                Don't have a membership yet? 
                <a href="{{ route('register') }}" class="font-black text-brand-primary hover:text-brand-primary-dark transition-colors tracking-wide ml-1">REGISTER COMPANY</a>
            </p>
        </div>
    </form>
@endsection
