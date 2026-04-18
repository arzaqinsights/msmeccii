@extends('layouts.website')

@section('title', 'Terms & Conditions | MSMECCII')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-16 bg-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/20 to-transparent"></div>
    <div class="container relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6">Terms & <span class="text-brand-primary">Conditions</span></h1>
        <p class="text-slate-400 font-bold uppercase tracking-widest text-sm">Effective Date: 18.04.2026 | Last Updated: {{ date('F d, Y') }}</p>
    </div>
</section>

<!-- Content Section -->
<section class="py-24 bg-white">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            
            <div class="prose prose-slate prose-lg max-w-none">
                <div class="bg-slate-50 border border-slate-100 p-8 rounded-[2rem] mb-12">
                    <h2 class="text-2xl font-black text-slate-900 mb-4">1. Introduction</h2>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        Welcome to MSME Chamber of Commerce & Industry of India (MSMECCII). By accessing our website, registering for events, or making payments, you agree to comply with and be bound by these Terms & Conditions.
                    </p>
                </div>

                <div class="space-y-12">
                    <!-- Scope of Services -->
                    <section>
                        <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-primary text-white flex items-center justify-center text-sm">2</span>
                            Scope of Services
                        </h3>
                        <div class="bg-white border border-slate-100 p-6 rounded-2xl shadow-sm">
                            <p class="text-slate-600 mb-4 font-bold">MSMECCII provides:</p>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 list-none p-0">
                                @php
                                    $services = ['Conferences, Summits & Expos', 'Business Awards & Recognition Platforms', 'Membership Programs', 'Sponsorship & Partnership Opportunities', 'Networking & Business Facilitation Services'];
                                @endphp
                                @foreach($services as $service)
                                    <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                                        <i class="fa-solid fa-check-circle text-brand-primary"></i> {{ $service }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>

                    <!-- User Eligibility -->
                    <section>
                        <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-primary text-white flex items-center justify-center text-sm">3</span>
                            User Eligibility
                        </h3>
                        <ul class="space-y-3 text-slate-600 font-medium list-disc ml-6">
                            <li>You must be at least 18 years old.</li>
                            <li>Information provided must be accurate and complete.</li>
                            <li>MSMECCII reserves the right to refuse or cancel registrations at its discretion.</li>
                        </ul>
                    </section>

                    <!-- Event Registration -->
                    <section>
                        <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-primary text-white flex items-center justify-center text-sm">4</span>
                            Event Registration & Participation
                        </h3>
                        <ul class="space-y-3 text-slate-600 font-medium">
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-arrow-right text-brand-primary mt-1"></i>
                                <span>Registration is confirmed only after successful payment.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-arrow-right text-brand-primary mt-1"></i>
                                <span>Entry passes are non-transferable unless explicitly approved by the organizers.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="fa-solid fa-arrow-right text-brand-primary mt-1"></i>
                                <span>MSMECCII reserves the right to modify event schedules, speakers, or venue due to unforeseen circumstances.</span>
                            </li>
                        </ul>
                    </section>

                    <!-- Payments & Pricing -->
                    <section>
                        <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-primary text-white flex items-center justify-center text-sm">5</span>
                            Payments & Pricing
                        </h3>
                        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                            <p class="text-slate-600 font-medium leading-relaxed">
                                Prices are listed in INR for Indian customers. For Foreign customers, payment will be only in USD. Applicable taxes (GST) will be charged on all transactions. MSMECCII does not store your payment details; all transactions are processed securely through our authorized payment partners.
                            </p>
                        </div>
                    </section>

                    <!-- Cancellation & Refund -->
                    <section>
                        <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-brand-primary text-white flex items-center justify-center text-sm">6</span>
                            Cancellation & Refund Policy
                        </h3>
                        <p class="text-slate-600 font-medium mb-4">
                            Registrations once confirmed are generally non-refundable. Partial refunds may be allowed under specific conditions but are not mandatory. In case of event cancellation by MSMECCII, rescheduling options or credits for future events will be provided.
                        </p>
                    </section>

                    <!-- Grid Layout for remaining terms -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-8">
                        <div>
                            <h4 class="font-black text-slate-900 mb-3 uppercase tracking-wider text-sm">7. Sponsorship Terms</h4>
                            <p class="text-sm text-slate-500 font-medium">Sponsorship fees are non-refundable once confirmed. Deliverables will be provided as per the agreed proposal.</p>
                        </div>
                        <div>
                            <h4 class="font-black text-slate-900 mb-3 uppercase tracking-wider text-sm">8. Intellectual Property</h4>
                            <p class="text-sm text-slate-500 font-medium">All content, branding, and materials are the property of MSMECCII. Unauthorized use is strictly prohibited.</p>
                        </div>
                        <div>
                            <h4 class="font-black text-slate-900 mb-3 uppercase tracking-wider text-sm">9. User Conduct</h4>
                            <p class="text-sm text-slate-500 font-medium">Providing false information or disrupting event operations will lead to immediate removal and potential legal action.</p>
                        </div>
                        <div>
                            <h4 class="font-black text-slate-900 mb-3 uppercase tracking-wider text-sm">10. Limitation of Liability</h4>
                            <p class="text-sm text-slate-500 font-medium">MSMECCII shall not be liable for technical failures, payment gateway issues, or indirect losses.</p>
                        </div>
                    </div>

                    <!-- Contact Footer -->
                    <div class="mt-20 p-10 rounded-[3rem] bg-slate-900 text-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-brand-primary/10 to-transparent"></div>
                        <h3 class="text-2xl font-black text-white mb-4 relative z-10">Contact Legal Support</h3>
                        <p class="text-slate-400 mb-8 relative z-10 font-medium">For any queries regarding these terms, please contact our administration.</p>
                        <div class="flex flex-wrap justify-center gap-6 relative z-10">
                            <a href="mailto:ighosh.1457@gmail.com" class="text-brand-primary font-bold hover:underline">ighosh.1457@gmail.com</a>
                            <a href="mailto:ighosh.chairman@msmeccii.com" class="text-brand-primary font-bold hover:underline">ighosh.chairman@msmeccii.com</a>
                        </div>
                        <p class="text-slate-500 text-xs font-bold mt-8 uppercase tracking-widest">MSME Chamber of Commerce & Industry of India (MSMECCII)</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
