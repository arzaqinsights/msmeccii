@extends('layouts.auth')

@section('title', 'Verify Email')
@section('auth_image', 'register_bg.png')
@section('hero_title', 'Almost There.')
@section('hero_subtitle', 'We need to verify your enterprise identity before granting full access to the chamber services.')

@section('content')
    <div class="text-center">
        <div class="w-20 h-20 bg-brand-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fa-regular fa-envelope-open text-4xl text-brand-primary"></i>
        </div>
        
        <h2 class="text-3xl font-extrabold text-slate-900 mb-4">Verify Your Email</h2>
        <p class="text-slate-600 mb-8 leading-relaxed">
            Thank you for registering your enterprise! Before getting started, could you verify your email address by clicking on the secure link we just emailed to you?
        </p>

        @if (session('message'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-md mb-6 inline-block">
                {{ session('message') }}
            </div>
        @endif

        <p class="text-sm text-slate-500 mb-4">Didn't receive the email? Check your spam folder or request a new one.</p>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="w-full bg-brand-primary hover:bg-brand-primary-dark text-white font-bold py-3.5 px-4 rounded-lg transition-all shadow-lg hover:shadow-brand-primary/40 flex items-center justify-center gap-2 group">
                Resend Verification Email
                <i class="fa-solid fa-rotate-right text-sm group-hover:rotate-180 transition-transform duration-500"></i>
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-8 pt-6 border-t border-slate-200">
            @csrf
            <button type="submit" class="text-slate-500 hover:text-red-500 text-sm font-semibold transition-colors flex items-center justify-center gap-2 w-full">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Edit Email / Log Out
            </button>
        </form>
    </div>
@endsection
