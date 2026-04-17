@extends('layouts.website')

@section('title', 'Healthcare Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/healthcare-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Healthcare <span class="text-blue-500">Industry</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Empowering public health through medical innovation, advanced diagnostics, and compassionate care.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">What is Healthcare Industry?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>Healthcare industry</strong> encompasses the prevention, diagnosis, treatment, and management of illnesses through medical services, hospitals, pharmaceuticals, and biotechnology.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It plays a vital role in improving quality of life, extending life expectancy, and supporting public health systems worldwide, serving as one of the most essential pillars of human development.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/healthcare-details.png') }}" alt="Healthcare Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-earth-americas text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market Overview</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$12-13 Trillion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2033)</span>
                            <span class="text-xl font-black text-white">$20 Trillion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-blue-400">7% – 9%</span>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <h4 class="font-semibold mb-4 text-slate-400 uppercase tracking-wider text-xs">Growth Drivers</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Aging Population', 'Chronic Diseases', 'Tech Innovation', 'Insurance Expansion'] as $driver)
                                <span class="px-3 py-1 bg-white/5 rounded-full text-xs font-bold border border-white/10 text-slate-300">{{ $driver }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-blue-100 rounded-xl text-blue-600">
                            <i class="fa-solid fa-hospital text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market Overview</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Market value (2025)</p>
                            <p class="text-xl font-black text-blue-700">$370B+</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Expected 2030</p>
                            <p class="text-xl font-black text-blue-700">$638B</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Growth Rate (CAGR)</span>
                            <span class="text-sm font-black text-blue-600">15% - 17%</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Status</span>
                            <span class="text-sm font-black text-slate-800 italic">One of the fastest-growing globally</span>
                        </div>
                    </div>
                </div>

            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">70,000+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Hospitals (India)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">6M+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Professionals (India)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">$16T+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Market (2031)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">16%+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India CAGR (2031)</div>
                </div>
            </div>

            <!-- GLOBAL POSITION -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_bottom_left,rgba(37,99,235,0.05),transparent)]"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 uppercase">India's Global Position</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India has established itself as a premier destination for affordable healthcare and pharmaceutical manufacturing.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10">
                                <p class="text-blue-400 font-bold mb-1 italic">Medical Tourism</p>
                                <p class="text-[10px] text-slate-400 uppercase tracking-tight">Global Destination</p>
                            </div>
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10">
                                <p class="text-blue-400 font-bold mb-1 italic">Pharma Hub</p>
                                <p class="text-[10px] text-slate-400 uppercase tracking-tight">Pharmacy of the World</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 bg-blue-600 rounded-2xl shadow-xl">
                        <h4 class="text-xl font-bold mb-4 uppercase">Major Hubs In India</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Delhi NCR', 'Mumbai', 'Bengaluru', 'Hyderabad', 'Chennai', 'Kolkata'] as $hub)
                                <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-bold border border-white/10">{{ $hub }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="order-2 md:order-1 space-y-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Emerging Opportunities</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $items = [
                                ['icon' => 'mobile-screen', 'title' => 'Telemedicine & Digital Health'],
                                ['icon' => 'stethoscope', 'title' => 'Medical Device Mfg'],
                                ['icon' => 'dna', 'title' => 'Biotech & Genomics'],
                                ['icon' => 'robot', 'title' => 'AI in Diagnostics'],
                                ['icon' => 'house-medical', 'title' => 'Home Healthcare'],
                                ['icon' => 'leaf', 'title' => 'Wellness & Prevention'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight uppercase font-serif italic">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="order-1 md:order-2 p-8 bg-slate-100 rounded-3xl border border-slate-200 shadow-sm relative overflow-hidden group">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6 text-slate-900 italic">Global Markets</h3>
                        <div class="flex flex-wrap gap-3">
                            @foreach(['USA', 'China', 'India', 'Germany', 'UK', 'Japan'] as $country)
                            <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full border border-slate-200 text-sm font-bold text-slate-600 group-hover:border-blue-300 transition-colors">
                                <i class="fa-solid fa-earth-americas text-blue-500"></i> {{ $country }}
                            </div>
                            @endforeach
                        </div>
                        <p class="mt-8 text-sm text-slate-500 leading-relaxed font-medium">Healthcare market expected to exceed <span class="text-blue-600 font-bold">$16 Trillion+</span> globally by 2031.</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-blue-600">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Why Healthcare Matters</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Healthcare is the foundation of economic progress, supporting healthier populations and stronger workforces. With increasing health awareness and digital transformation, it remains one of the most resilient industries globally.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-blue-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-blue-900 transition-all duration-300 shadow-xl group">
                        Register for Healthcare Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
