@extends('layouts.website')

@section('title', 'Oil & Gas Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/oil-gas-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Oil & <span class="text-orange-500">Gas</span> Industry
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                The global energy cornerstone, powering industries, transportation, and households worldwide.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">Energy Backbone</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>Oil & Gas industry</strong> involves the exploration, extraction, and refining of petroleum, natural gas, LNG, and other hydrocarbon resources.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Despite the rise of renewables, these resources continue to dominate the global energy mix and play a crucial role in ensuring energy security and industrial productivity across the globe.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-orange-600 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/oil-gas-hero.png') }}" alt="Oil & Gas Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl transition-transform duration-700 group-hover:scale-[1.02]">
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
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$5.3 Trillion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2032)</span>
                            <span class="text-xl font-black text-white">$15 Trillion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-orange-400">~16%</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-xs text-slate-500 italic">Asia-Pacific accounts for over 35% of the global market share.</p>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-orange-100 rounded-xl text-orange-600">
                            <i class="fa-solid fa-gas-pump text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Market value (2026)</p>
                            <p class="text-xl font-black text-orange-700">$24.42B</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Expected 2031</p>
                            <p class="text-xl font-black text-orange-700">$31.24B</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Global Rank (Cons.)</span>
                            <span class="text-sm font-black text-slate-800">3rd Largest globally</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Operational Refineries</span>
                            <span class="text-sm font-black text-orange-600">23 Active Units</span>
                        </div>
                    </div>
                </div>

            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-orange-600 text-3xl font-black group-hover:scale-110 transition-transform">5.99M</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India Barrels/Day (2026)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-orange-600 text-3xl font-black group-hover:scale-110 transition-transform">500+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Major Cos (India)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-orange-600 text-3xl font-black group-hover:scale-110 transition-transform">35%+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">APAC Global Share</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-orange-600 text-3xl font-black group-hover:scale-110 transition-transform">10K+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Ancillary Players</div>
                </div>
            </div>

            <!-- HUB SECTION -->
            <div class="p-10 rounded-3xl bg-slate-100 border border-slate-200 relative overflow-hidden">
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 uppercase text-slate-900">India: A Refining Hub</h3>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            India is one of the largest refining hubs in Asia, processing around 5.6 million barrels per day through 23 operational refineries.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Mumbai', 'Gujarat', 'Assam', 'Andhra Pradesh', 'Tamil Nadu', 'Delhi NCR'] as $hub)
                                <span class="px-4 py-2 bg-white border border-slate-200 rounded-full text-xs font-bold text-slate-600">{{ $hub }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-6 bg-white rounded-2xl shadow-sm border border-slate-100 text-center">
                            <p class="text-3xl font-black text-orange-600 mb-1">90%</p>
                            <p class="text-xs text-slate-400 uppercase font-black">Crude Imports</p>
                        </div>
                        <div class="p-6 bg-white rounded-2xl shadow-sm border border-slate-100 text-center">
                            <p class="text-3xl font-black text-orange-600 mb-1">Top 5</p>
                            <p class="text-xs text-slate-400 uppercase font-black">Global Consumer</p>
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
                                ['icon' => 'truck-moving', 'title' => 'LNG Infra Development'],
                                ['icon' => 'diagram-project', 'title' => 'Gas Pipeline Expansion'],
                                ['icon' => 'industry', 'title' => 'Petrochemical Manufacturing'],
                                ['icon' => 'building-shield', 'title' => 'Refinery Expansion'],
                                ['icon' => 'ship', 'title' => 'Offshore Exploration'],
                                ['icon' => 'leaf', 'title' => 'Hydrogen Integration'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-orange-200 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-orange-100 text-orange-600 rounded-lg group-hover:bg-orange-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight uppercase italic tracking-tighter">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-900 rounded-3xl text-white relative overflow-hidden">
                    <h3 class="text-2xl font-bold mb-6 italic text-orange-400">Essential Energy Mix</h3>
                    <p class="text-slate-300 leading-relaxed mb-6 font-medium">
                        Oil & Gas remain a cornerstone of global development, powering transportation, industries, and households. MSMECCII connects ancillary suppliers with major EPC and refinery players.
                    </p>
                    <div class="flex items-center gap-4">
                         <div class="w-12 h-1 bg-orange-500"></div>
                         <p class="text-xs uppercase font-black tracking-widest text-slate-500">RESILIENT INDUSTRY</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-orange-600">
                <div class="absolute inset-x-0 bottom-0 top-0 bg-[radial-gradient(circle_at_center,rgba(249,115,22,0.05),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Empowering Global Energy</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        The industrial ecosystem depends on stable energy supplies. Explore opportunities in refinery services, equipment supply, and pipeline infrastructure within the vibrant Oil & Gas sector.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-orange-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-slate-900 transition-all duration-300 shadow-xl group">
                        Register for Energy Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
