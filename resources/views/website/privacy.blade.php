@extends('layouts.website')

@section('title', 'Privacy Policy | MSMECCII')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-16 bg-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/20 to-transparent"></div>
    <div class="container relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6">Privacy <span class="text-brand-primary">Policy</span></h1>
        <p class="text-slate-400 font-bold uppercase tracking-widest text-sm">Effective Date: 18.04.2026 | Last Updated: {{ date('F d, Y') }}</p>
    </div>
</section>

<!-- Content Section -->
<section class="py-24 bg-white">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            
            <div class="prose prose-slate prose-lg max-w-none">
                <div class="bg-blue-50/50 border border-blue-100 p-8 rounded-[2.5rem] mb-12">
                    <h2 class="text-2xl font-black text-slate-900 mb-4">1. Introduction</h2>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        MSME Chamber of Commerce & Industry of India (MSMECCII) is committed to safeguarding the privacy of all its members, event participants, partners, and website visitors. This Privacy Policy explains how we collect, use, process, and protect your personal information when you interact with our platform.
                    </p>
                </div>

                <div class="space-y-16">
                    <!-- Scope of Policy -->
                    <section>
                        <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-primary text-white flex items-center justify-center text-sm shadow-lg shadow-brand-primary/20">2</span>
                            Scope of Policy
                        </h3>
                        <p class="text-slate-600 font-medium mb-6">This policy applies to all digital and physical interactions including:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @php
                                $scopes = ['Event registrations (Summits, Awards)', 'Sponsorship and partnership payments', 'Membership enrollments', 'Website usage & interactions'];
                            @endphp
                            @foreach($scopes as $scope)
                                <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 flex items-center gap-3">
                                    <i class="fa-solid fa-circle-check text-brand-primary"></i>
                                    <span class="text-sm font-bold text-slate-700">{{ $scope }}</span>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Information Collection -->
                    <section>
                        <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-primary text-white flex items-center justify-center text-sm shadow-lg shadow-brand-primary/20">3</span>
                            Information We Collect
                        </h3>
                        <div class="space-y-6">
                            <div class="bg-white border-l-4 border-brand-primary p-6 shadow-sm rounded-r-2xl">
                                <h4 class="font-black text-slate-900 mb-2">Personal Information</h4>
                                <p class="text-sm text-slate-500 font-medium">Full Name, Organization, Email Address, Mobile Number, Designation, and Billing Address.</p>
                            </div>
                            <div class="bg-white border-l-4 border-blue-500 p-6 shadow-sm rounded-r-2xl">
                                <h4 class="font-black text-slate-900 mb-2">Transaction Information</h4>
                                <p class="text-sm text-slate-500 font-medium">Payment amount and transaction IDs processed securely. <span class="text-brand-primary font-bold">We do NOT store card or banking credentials.</span></p>
                            </div>
                            <div class="bg-white border-l-4 border-emerald-500 p-6 shadow-sm rounded-r-2xl">
                                <h4 class="font-black text-slate-900 mb-2">Technical Information</h4>
                                <p class="text-sm text-slate-500 font-medium">IP address, browser type, cookies, and website usage patterns via analytics.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Purpose of Collection -->
                    <section>
                        <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-primary text-white flex items-center justify-center text-sm shadow-lg shadow-brand-primary/20">4</span>
                            Purpose of Data Collection
                        </h3>
                        <p class="text-slate-600 font-medium leading-relaxed">
                            We use your data to process registrations, issue GST invoices, facilitate networking matchmaking, and share event updates. Your data helps us ensure a seamless and personalized professional experience.
                        </p>
                    </section>

                    <!-- Payment Security -->
                    <section class="bg-slate-900 p-10 rounded-[2.5rem] text-white overflow-hidden relative">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-brand-primary/20 rounded-full blur-3xl"></div>
                        <h3 class="text-xl font-black mb-6 flex items-center gap-3 relative z-10">
                            <i class="fa-solid fa-shield-halved text-brand-primary"></i>
                            5. Payment Processing & Security
                        </h3>
                        <p class="text-slate-400 font-medium leading-relaxed relative z-10 mb-6">
                            All financial transactions are securely processed through our trusted payment gateway partners. Your payment data is encrypted and transactions comply with PCI-DSS standards. MSMECCII does not store sensitive financial details at any stage.
                        </p>
                        <div class="flex items-center gap-4 relative z-10">
                            <span class="px-4 py-2 bg-white/10 rounded-lg text-xs font-bold uppercase tracking-widest text-brand-primary border border-white/10">PCI-DSS Compliant</span>
                            <span class="px-4 py-2 bg-white/10 rounded-lg text-xs font-bold uppercase tracking-widest text-brand-primary border border-white/10">SSL Encrypted</span>
                        </div>
                    </section>

                    <!-- Rights & Contact -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-8">
                        <div class="p-8 bg-slate-50 rounded-3xl border border-slate-100">
                            <h4 class="font-black text-slate-900 mb-3 uppercase tracking-wider text-sm">9. Your Rights</h4>
                            <p class="text-sm text-slate-600 font-medium">You have the right to access, correct, or request deletion of your data. You may also opt-out of promotional communications at any time.</p>
                        </div>
                        <div class="p-8 bg-slate-50 rounded-3xl border border-slate-100">
                            <h4 class="font-black text-slate-900 mb-3 uppercase tracking-wider text-sm">13. Contact Info</h4>
                            <p class="text-sm text-slate-600 font-medium italic">ighosh.chairman@msmeccii.com</p>
                            <p class="text-sm text-slate-600 font-medium italic">ighosh.1457@gmail.com</p>
                        </div>
                    </div>

                    <!-- Compliance -->
                    <div class="mt-16 text-center border-t border-slate-100 pt-12">
                        <p class="text-slate-400 font-black uppercase tracking-[0.3em] text-[10px] mb-6">Legal & Compliance</p>
                        <div class="inline-flex flex-wrap justify-center gap-8">
                            <div class="text-center">
                                <span class="text-xs font-bold text-slate-400 block mb-1">GST Number</span>
                                <span class="text-sm font-black text-slate-900">07AAGTM3462J2ZB</span>
                            </div>
                            <div class="w-px h-10 bg-slate-200 hidden md:block"></div>
                            <div class="text-center">
                                <span class="text-xs font-bold text-slate-400 block mb-1">Entity Type</span>
                                <span class="text-sm font-black text-slate-900">Registered NGO (Govt of India)</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
