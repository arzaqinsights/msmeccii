@extends('layouts.website')

@section('title', 'FMCG Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-rose-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-rose-900 via-stone-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/fmcg-industry.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                FMCG <span class="text-rose-400">Industry</span>
            </h1>
            <p class="text-xl md:text-2xl text-rose-100 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                Powering Everyday Consumer Demand Across Global Markets.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS FMCG -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-rose-900 uppercase italic">Consumer Essentials</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Fast Moving Consumer Goods (FMCG)</strong> represent products that are sold quickly at relatively low cost and are consumed on a regular basis.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        These goods form an essential part of daily life and include packaged foods, beverages, personal care products, household care items, and other consumer essentials.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $categories = [
                            ['icon' => 'burger', 'label' => 'Food & Beverages'],
                            ['icon' => 'sparkles', 'label' => 'Personal Care'],
                            ['icon' => 'soap', 'label' => 'Household Care'],
                            ['icon' => 'kit-medical', 'label' => 'Health & Wellness'],
                        ];
                    @endphp
                    @foreach($categories as $cat)
                        <div class="p-6 bg-rose-50 border border-rose-100 rounded-2xl text-center group hover:bg-rose-900 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $cat['icon'] }} text-3xl mb-3 text-rose-400 group-hover:text-rose-300"></i>
                            <p class="text-[10px] font-black uppercase tracking-tight">{{ $cat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- MARKET LANDSCAPE -->
            <div class="p-10 rounded-3xl bg-rose-900 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl -mr-48 -mt-48"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-black mb-6 uppercase italic tracking-widest text-rose-300">Global Landscape</h3>
                        <p class="text-rose-100 mb-8 leading-relaxed">The FMCG industry is among the world's largest business sectors, driven by population growth, urbanization, and changing consumer lifestyles.</p>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-6 bg-white/5 border border-white/10 rounded-2xl">
                                <p class="text-[10px] font-black uppercase text-rose-400 mb-1">Market (2025)</p>
                                <p class="text-2xl font-black">$8T+</p>
                            </div>
                            <div class="p-6 bg-white/5 border border-white/10 rounded-2xl">
                                <p class="text-[10px] font-black uppercase text-rose-400 mb-1">Projected (2031)</p>
                                <p class="text-2xl font-black">$12T+</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-sm font-black uppercase tracking-widest mb-4">Global Growth Drivers</h4>
                        @foreach([
                            'Rising urban population & income',
                            'Expansion of organized retail',
                            'Direct-to-consumer (D2C) growth',
                            'Brand innovation & sustainability'
                        ] as $driver)
                            <div class="flex items-center gap-3 p-3 bg-white/5 border border-white/10 rounded-xl">
                                <i class="fa-solid fa-check text-rose-400"></i>
                                <span class="text-xs font-bold uppercase">{{ $driver }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- INDIA FMCG MARKET -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="space-y-6">
                    <h3 class="text-3xl font-black uppercase text-slate-900 italic">India: Rapid Consumption</h3>
                    <p class="text-slate-600 leading-relaxed font-serif">India is one of the fastest-growing FMCG markets globally, supported by strong domestic consumption and expanding retail infrastructure.</p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach([
                            ['label' => 'Market 2025', 'val' => '$220B+'],
                            ['label' => 'Forecast 2031', 'val' => '$500B+'],
                            ['label' => 'Growth Rate', 'val' => '16% CAGR'],
                            ['label' => 'Organized Brands', 'val' => '10,000+']
                        ] as $stat)
                            <div class="p-4 bg-rose-50 border border-rose-100 rounded-2xl">
                                <p class="text-[10px] font-black uppercase text-rose-400 mb-1">{{ $stat['label'] }}</p>
                                <p class="text-xl font-bold text-rose-900">{{ $stat['val'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-900 rounded-3xl text-white relative overflow-hidden group">
                     <div class="absolute inset-0 bg-rose-500/5"></div>
                     <h4 class="text-lg font-black text-rose-300 uppercase italic mb-6">India Growth Catalysts</h4>
                     <div class="space-y-4 relative z-10">
                        @foreach([
                            'Rising middle-class disposable income',
                            'Rapid rural market penetration',
                            'Expansion of e-commerce & Quick-commerce',
                            'Premiumization & lifestyle consumption'
                        ] as $cat)
                            <div class="flex items-start gap-3">
                                <i class="fa-solid fa-bolt text-rose-400 mt-1"></i>
                                <p class="text-xs font-bold uppercase text-slate-300 leading-normal">{{ $cat }}</p>
                            </div>
                        @endforeach
                     </div>
                </div>
            </div>

            <!-- EMERGING SEGMENTS -->
            <div class="space-y-8">
                <h2 class="text-3xl font-black text-slate-900 uppercase italic text-center">High-Growth Segments (2026-2031)</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    @foreach(['Health & Organic', 'Premium Foods', 'Eco-Friendly', 'Digital Brands', 'Personal Wellness', 'D2C Models'] as $seg)
                        <div class="p-6 bg-white border border-slate-200 rounded-2xl text-center shadow-sm hover:border-rose-500 hover:shadow-rose-100 hover:shadow-md transition-all">
                             <p class="text-[10px] font-black uppercase text-slate-500">{{ $seg }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="p-8 bg-rose-50 rounded-3xl border border-rose-100">
                    <h2 class="text-2xl font-black text-rose-900 uppercase tracking-tight mb-8">Strategic Importance</h2>
                    <div class="space-y-4">
                        @foreach([
                            'Drives consumer spending & economic activity',
                            'Supports large-scale employment generation',
                            'Boosts manufacturing & supply chain ecosystems',
                            'Encourages retail and logistics growth',
                            'Stable sector during economic fluctuations'
                        ] as $imp)
                        <div class="flex items-center gap-4 p-4 bg-white border border-rose-100 rounded-2xl">
                            <i class="fa-solid fa-check-double text-rose-500"></i>
                            <span class="text-xs font-bold uppercase text-slate-700 leading-tight">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="space-y-8">
                    <h3 class="text-3xl font-black uppercase text-slate-900 italic">Future Vision</h3>
                    <p class="text-slate-600 leading-relaxed font-medium">The future of FMCG will be shaped by smart packaging, AI-driven analytics, and omni-channel strategies.</p>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-6 bg-slate-900 text-white rounded-2xl">
                             <i class="fa-solid fa-microchip text-rose-400 text-2xl mb-3"></i>
                             <p class="text-[10px] font-black uppercase">AI Analytics</p>
                        </div>
                        <div class="p-6 bg-slate-900 text-white rounded-2xl">
                             <i class="fa-solid fa-leaf text-rose-400 text-2xl mb-3"></i>
                             <p class="text-[10px] font-black uppercase">Sustainable Pack</p>
                        </div>
                    </div>
                    <p class="text-xs text-slate-400 italic">India is expected to become one of the top 5 FMCG markets globally.</p>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-rose-950 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-rose-500">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(244,63,94,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Expand Your Consumer Reach</h3>
                    <p class="text-xl text-rose-100 max-w-4xl mx-auto leading-relaxed mb-10">
                        Scale your FMCG brand across expanding retail and e-commerce networks. Join the mission to build high-efficiency manufacturing and smart distribution ecosystems.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-rose-900 font-black uppercase tracking-widest rounded-full hover:bg-rose-500 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for FMCG Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-rose-500"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
