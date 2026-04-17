@extends('layouts.website')

@section('title', 'Pharmaceuticals Industry - Driving Global Health Innovation')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/pharma-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Pharmaceuticals <span class="text-blue-500">Industry</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Driving Global Health Innovation through advanced research, essential medicine, and high-tech manufacturing.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">Overview of Pharmaceuticals</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>pharmaceutical industry</strong> is one of the most research-driven and essential sectors globally, dedicated to the discovery, development, manufacturing, and distribution of medicines, vaccines, and biologics.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It plays a crucial role in disease prevention, treatment, and improving healthcare outcomes for billions of people worldwide, serving as a pillar of global public health.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/pharma-details.png') }}" alt="Pharmaceutical Industry"
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
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market Snapshot</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Size (2025)</span>
                            <span class="text-xl font-black text-white">$1.6 Trillion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2032)</span>
                            <span class="text-xl font-black text-white">$2.8 Trillion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Expected CAGR</span>
                            <span class="text-xl font-black text-blue-400">6% – 8%</span>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <h4 class="font-semibold mb-4 text-slate-400 uppercase tracking-wider text-xs">Major Global Markets</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['USA', 'China', 'Germany', 'Japan', 'UK', 'India'] as $market)
                                <span class="px-3 py-1 bg-white/5 rounded-full text-xs font-bold border border-white/10 text-slate-300">{{ $market }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-blue-100 rounded-xl text-blue-600">
                            <i class="fa-solid fa-industry text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Pharmacy of the World</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Market value (2025)</p>
                            <p class="text-xl font-black text-blue-700">$65B+</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Expected 2030</p>
                            <p class="text-xl font-black text-blue-700">$130B+</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Global Export Rank</span>
                            <span class="text-sm font-black text-slate-800">Top 3 by Volume</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Generic Supply</span>
                            <span class="text-sm font-black text-slate-800">20% of Global Supply</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Annual Growth</span>
                            <span class="text-sm font-black text-blue-600">10-12% CAGR</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- MANUFACTURING STRENGTH -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">3,000+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Pharma Companies</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">10,500+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Manufacturing Units</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">USFDA</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Max Plants outside USA</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">2.7M+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Professionals Employed</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="order-2 md:order-1 space-y-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Emerging Trends & Opportunities</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $items = [
                                ['icon' => 'dna', 'title' => 'Biotechnology & Biosimilars'],
                                ['icon' => 'robot', 'title' => 'AI in Drug Discovery'],
                                ['icon' => 'handshake', 'title' => 'Contract Mfg (CDMO)'],
                                ['icon' => 'microscope', 'title' => 'Precision Medicine'],
                                ['icon' => 'mobile-screen', 'title' => 'Digital Pharmacies'],
                                ['icon' => 'leaf', 'title' => 'Sustainable Mfg'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-blue-200 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="order-1 md:order-2 p-8 bg-slate-900 rounded-3xl text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6 italic text-blue-400">Global Advantage</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 shrink-0 mt-1">
                                    <i class="fa-solid fa-check text-[10px]"></i>
                                </div>
                                <p class="text-sm text-slate-300">Cost-effective manufacturing with global quality standards.</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 shrink-0 mt-1">
                                    <i class="fa-solid fa-check text-[10px]"></i>
                                </div>
                                <p class="text-sm text-slate-300">Highly skilled scientific and technical workforce.</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 shrink-0 mt-1">
                                    <i class="fa-solid fa-check text-[10px]"></i>
                                </div>
                                <p class="text-sm text-slate-300">Regulatory-compliant infrastructure (USFDA, EDQM).</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 shrink-0 mt-1">
                                    <i class="fa-solid fa-check text-[10px]"></i>
                                </div>
                                <p class="text-sm text-slate-300">Strong R&D capability and innovation ecosystem.</p>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-white/10">
                            <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Key Segments</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Generics', 'APIs', 'Vaccines', 'Biologics', 'Nutraceuticals'] as $seg)
                                    <span class="text-[10px] font-black px-2 py-1 bg-white/5 rounded border border-white/5">{{ $seg }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-blue-600">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Why Pharmaceuticals Matter</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        The pharmaceutical sector is fundamental to global public health, medical advancement, and economic development. It supports life-saving innovations and pandemic preparedness—making it a strategic industry for the future.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-blue-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-blue-900 transition-all duration-300 shadow-xl group">
                        Register for Industry Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
