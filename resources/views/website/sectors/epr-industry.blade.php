@extends('layouts.website')

@section('title', 'EPR Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/waste-management.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                EPR Industry Overview
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Transforming waste management through Extended Producer Responsibility and circular economy adoption.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is EPR?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Extended Producer Responsibility (EPR)</strong> is an environmental policy framework holding manufacturers, importers, and brand owners responsible for the entire life cycle of their products.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        By shifting waste management responsibility from municipalities to producers, EPR incentivizes sustainable product design and ensures efficient collection, recycling, and disposal of materials like plastics, electronics, and batteries.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/waste-management.jpg') }}" alt="EPR Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-blue-800 to-indigo-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-earth-americas text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <p class="text-blue-100 mb-6">Stricter regulations across Europe, Asia, and North America are driving massive investments in compliance ecosystems.</p>
                    
                    <ul class="space-y-4 text-blue-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 48.10 Billion</span> 
                            <span class="text-blue-200">(2025) Plastic Waste Mgt</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 59.31 Billion</span> 
                            <span class="text-blue-200">(2031) Projected</span>
                        </li>
                    </ul>

                    <h4 class="font-semibold mt-8 mb-4 text-blue-300 uppercase tracking-wider text-sm">Market Drivers</h4>
                    <ul class="grid grid-cols-1 gap-2">
                        <li class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check text-blue-400"></i> Double-digit CAGR expected
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check text-blue-400"></i> Mandatory recycling targets
                        </li>
                        <li class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check text-blue-400"></i> Circular economy transition
                        </li>
                    </ul>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-blue-100 rounded-xl text-blue-600">
                            <i class="fa-solid fa-landmark-flag text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-blue-50">
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-tight">Market Size 2025</p>
                            <p class="text-xl font-black text-blue-700">$982M</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-blue-50">
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-tight">Projected 2030</p>
                            <p class="text-xl font-black text-blue-700">$1.67B</p>
                        </div>
                    </div>

                    <h4 class="font-semibold mb-4 text-blue-600 uppercase tracking-wider text-sm">Waste Streams Covered</h4>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach(['Plastic Packaging', 'E-Waste', 'Battery Waste', 'Waste Tyres', 'Used Oil', 'Hazardous Waste'] as $stream)
                            <div class="flex items-center gap-2 text-xs font-bold text-slate-600 p-2 bg-white rounded-lg border border-slate-100">
                                <i class="fa-solid fa-recycle text-blue-500"></i> {{ $stream }}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">15-20%</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">India CAGR</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">1000+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">India Compliance Agencies</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">10K+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Global Providers</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">$59B+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Global Market (2031)</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/plastic-recycling.jpeg') }}" alt="EPR Opportunities"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl">
                    <div class="absolute -bottom-6 -left-6 p-6 bg-blue-600 text-white rounded-2xl shadow-2xl hidden md:block">
                        <p class="text-3xl font-bold">CPCB</p>
                        <p class="text-sm opacity-80 uppercase tracking-widest">Enforcement Authority</p>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Emerging Opportunities</h2>
                    <div class="grid gap-4">
                        @php
                            $opportunities = [
                                ['icon' => 'user-shield', 'title' => 'EPR Compliance Consulting'],
                                ['icon' => 'money-bill-transfer', 'title' => 'Plastic Credit Trading'],
                                ['icon' => 'truck-ramp-box', 'title' => 'Waste Collection & Aggregation'],
                                ['icon' => 'industry', 'title' => 'Recycling Infrastructure'],
                                ['icon' => 'magnifying-glass-chart', 'title' => 'Circular Economy Advisory'],
                                ['icon' => 'microchip', 'title' => 'Waste Traceability Platforms'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                        <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-blue-50 border border-transparent hover:border-blue-100 transition-all group">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-colors">
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
                <div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl -mr-40 -mb-40"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4">India's Global Position</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India is among the fastest-growing regulated circular economy markets globally, implementing structured EPR frameworks across multiple waste categories simultaneously.
                        </p>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400">
                                    <i class="fa-solid fa-arrow-trend-up text-sm"></i>
                                </div>
                                <span class="text-sm text-slate-300">Fastest-growing regulated market</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400">
                                    <i class="fa-solid fa-shield-halved text-sm"></i>
                                </div>
                                <span class="text-sm text-slate-300">Stricter CPCB enforcement</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400">
                                    <i class="fa-solid fa-file-invoice-dollar text-sm"></i>
                                </div>
                                <span class="text-sm text-slate-300">Digitized EPR certificate systems</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-600/10 p-8 rounded-3xl border border-blue-500/20 backdrop-blur-sm">
                        <h4 class="text-xl font-bold mb-4">India Active Markets</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-white/5 rounded-full text-xs text-blue-300 font-bold border border-white/10">Germany</span>
                            <span class="px-3 py-1 bg-white/5 rounded-full text-xs text-blue-300 font-bold border border-white/10">UK</span>
                            <span class="px-3 py-1 bg-white/5 rounded-full text-xs text-blue-300 font-bold border border-white/10">USA</span>
                            <span class="px-3 py-1 bg-blue-500 text-white rounded-full text-xs font-black">India</span>
                            <span class="px-3 py-1 bg-white/5 rounded-full text-xs text-blue-300 font-bold border border-white/10">Japan</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div class="bg-slate-900 border-2 border-blue-500/30 text-white p-12 rounded-3xl text-center shadow-2xl relative overflow-hidden">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Why EPR Industry Matters</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed">
                        EPR is transforming waste management into a structured, accountable, and scalable ecosystem. As sustainability regulations tighten, EPR is emerging as a critical pillar of modern environmental governance and circular economy development.
                    </p>
                    <div class="mt-8">
                        <a href="" class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-blue-900 transition-all duration-300 shadow-xl">
                            Register for EPR Compliance <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
