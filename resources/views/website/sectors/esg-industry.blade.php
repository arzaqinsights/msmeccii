@extends('layouts.website')

@section('title', 'ESG Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/esg-industry.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                ESG Industry Overview
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Strategic sustainability, ethical practices, and corporate governance driving long-term value and global impact.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is ESG?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Environmental, Social, and Governance (ESG)</strong> is a strategic framework used by companies, investors, and institutions to evaluate business sustainability and ethical practices.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It has become a global benchmark for measuring responsible business performance, environmental impact, social responsibility, and corporate governance standards, directly influencing investment attractiveness and future resilience.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/esg-industry.jpg') }}" alt="ESG Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-emerald-800 to-teal-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-globe text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <ul class="space-y-4 text-emerald-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 30 Trillion</span> 
                            <span class="text-emerald-100">managed assets in 2025</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 50 Trillion</span> 
                            <span class="text-emerald-100">projected by 2030</span>
                        </li>
                    </ul>

                    <h4 class="font-semibold mt-8 mb-4 text-emerald-300 uppercase tracking-wider text-sm">Key Drivers</h4>
                    <ul class="grid grid-cols-1 gap-3">
                        <li class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-circle-check text-emerald-400"></i> Sustainable business demand
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-circle-check text-emerald-400"></i> Government regulations
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-circle-check text-emerald-400"></i> Climate change concerns
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-circle-check text-emerald-400"></i> Transparency requirements
                        </li>
                    </ul>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-emerald-100 rounded-xl text-emerald-600">
                            <i class="fa-solid fa-flag text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>
                    <p class="text-slate-600 mb-6 font-medium">Rapidly growing investment and consulting market with increasing regulatory mandates.</p>

                    <div class="bg-white p-4 rounded-2xl mb-6 border border-emerald-100">
                        <h4 class="font-bold text-emerald-700 mb-1">BRSR Compliance</h4>
                        <p class="text-sm text-slate-500">Over Top 1000 listed Indian companies now required to comply with BRSR norms.</p>
                    </div>

                    <h4 class="font-semibold mb-4 text-emerald-600 uppercase tracking-wider text-sm">Adoption Sectors</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Manufacturing', 'Energy', 'FMCG', 'Banking & Finance', 'IT', 'Infrastructure'] as $tag)
                            <span class="px-3 py-1 bg-slate-200 text-slate-700 text-xs font-bold rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-emerald-200 transition-all duration-300 text-center">
                    <div class="mb-4 text-emerald-600 text-3xl font-black group-hover:scale-110 transition-transform">15%</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Global CAGR</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-emerald-200 transition-all duration-300 text-center">
                    <div class="mb-4 text-emerald-600 text-3xl font-black group-hover:scale-110 transition-transform">20%+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">India CAGR</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-emerald-200 transition-all duration-300 text-center">
                    <div class="mb-4 text-emerald-600 text-3xl font-black group-hover:scale-110 transition-transform">500+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">India Advisory Firms</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-emerald-200 transition-all duration-300 text-center">
                    <div class="mb-4 text-emerald-600 text-3xl font-black group-hover:scale-110 transition-transform">20K+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Global ESG Firms</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/esg-details.jpg') }}" alt="ESG Opportunities"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl">
                    <div class="absolute -bottom-6 -right-6 p-6 bg-emerald-600 text-white rounded-2xl shadow-2xl hidden md:block">
                        <p class="text-3xl font-bold">2026-31</p>
                        <p class="text-sm opacity-80 uppercase tracking-widest">Growth Forecast Period</p>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Emerging Opportunities</h2>
                    <div class="space-y-4">
                        @php
                            $opportunities = [
                                ['icon' => 'chart-line', 'title' => 'ESG Consulting & Reporting'],
                                ['icon' => 'leaf', 'title' => 'Carbon Accounting / Auditing'],
                                ['icon' => 'certificate', 'title' => 'Sustainability Certifications'],
                                ['icon' => 'hand-holding-dollar', 'title' => 'Green Finance Advisory'],
                                ['icon' => 'database', 'title' => 'ESG Data Analytics Platforms'],
                                ['icon' => 'scale-balanced', 'title' => 'Corporate Governance Advisory'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                            <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-emerald-50 border border-transparent hover:border-emerald-100 transition-all group">
                                <div class="w-12 h-12 flex items-center justify-center bg-emerald-100 text-emerald-600 rounded-lg group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                                    <i class="fa-solid fa-{{ $item['icon'] }}"></i>
                                </div>
                                <span class="font-bold text-slate-700 text-lg">{{ $item['title'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- GLOBAL POSITION -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4">India's Global ESG Position</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India is among the fastest-growing ESG adoption markets in Asia, emerging as a global hub for sustainable business transformation.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-xs text-slate-300 font-medium">UN SDGs Alignment</div>
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-xs text-slate-300 font-medium">GRI Standards</div>
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-xs text-slate-300 font-medium">Carbon Disclosure Project</div>
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-xs text-slate-300 font-medium">International Standards</div>
                        </div>
                    </div>
                    <div class="bg-white/5 p-8 rounded-2xl border border-white/10 text-center backdrop-blur-sm">
                        <i class="fa-solid fa-chart-area text-5xl text-emerald-500 mb-6"></i>
                        <h4 class="text-xl font-bold mb-2">Growth Forecast</h4>
                        <p class="text-sm text-slate-400">Global market expected to reach <span class="text-white font-bold">USD 50 Trillion</span> with India leading at <span class="text-emerald-400 font-bold">20%+ CAGR</span>.</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-emerald-600 to-teal-700 text-white p-12 rounded-3xl text-center shadow-2xl relative overflow-hidden group">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Why ESG Matters</h3>
                    <p class="text-xl text-emerald-50 max-w-4xl mx-auto leading-relaxed">
                        ESG has become a critical pillar of modern business strategy, influencing investor decisions, brand reputation, and regulatory compliance. Organizations with strong ESG performance are increasingly viewed as more resilient, responsible, and future-ready in today's global economy.
                    </p>
                    <div class="mt-8">
                        <a href="" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-emerald-700 font-black uppercase tracking-widest rounded-full hover:bg-black hover:text-white transition-all duration-300 shadow-xl">
                            Join the Movement <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
