@extends('layouts.website')

@section('title', 'Import & Export Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-indigo-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-blue-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/import-export.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Import <span class="text-blue-400">&</span> Export
            </h1>
            <p class="text-xl md:text-2xl text-indigo-100 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                Driving Global Trade and International Business Expansion.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS IMPORT & EXPORT -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-indigo-900 uppercase italic">Backbone of Global Commerce</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Import and Export</strong> enable countries, businesses, and industries to exchange goods and services across international borders, connecting manufacturers with global consumers.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        It plays a vital role in supporting economic development and industrial growth while facilitating trade across key sectors such as manufacturing, agriculture, and pharmaceuticals.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $sectors = [
                            ['icon' => 'industry', 'label' => 'Industrial Goods'],
                            ['icon' => 'wheat-awn', 'label' => 'Agriculture'],
                            ['icon' => 'pills', 'label' => 'Pharmaceuticals'],
                            ['icon' => 'microchip', 'label' => 'Electronics'],
                        ];
                    @endphp
                    @foreach($sectors as $sec)
                        <div class="p-6 bg-indigo-50 border border-indigo-100 rounded-2xl text-center group hover:bg-indigo-900 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $sec['icon'] }} text-3xl mb-3 text-indigo-500 group-hover:text-blue-400"></i>
                            <p class="text-[10px] font-black uppercase tracking-tight">{{ $sec['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- TRADE STATISTICS -->
            <div class="p-10 rounded-3xl bg-indigo-900 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-black mb-6 uppercase italic tracking-widest text-blue-300">Global Trade Value</h3>
                        <p class="text-indigo-100 mb-8 leading-relaxed italic">International trade continues to be one of the largest contributors to global GDP and economic activity.</p>
                        
                        <div class="space-y-4">
                            @foreach([
                                'Globalization of businesses',
                                'Rising cross-border e-commerce',
                                'Trade agreements & free zones',
                                'Digital trade marketplaces'
                            ] as $driver)
                                <div class="flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                                    <span class="text-xs font-bold uppercase text-indigo-200">{{ $driver }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center">
                            <p class="text-[10px] font-black uppercase text-indigo-400 mb-2">Total Value (2025)</p>
                            <p class="text-3xl font-black text-white">$33T+</p>
                        </div>
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center">
                            <p class="text-[10px] font-black uppercase text-indigo-400 mb-2">Value (2031)</p>
                            <p class="text-3xl font-black text-blue-400">$45T+</p>
                        </div>
                        <div class="col-span-2 p-4 bg-blue-500/10 border border-blue-500/20 rounded-xl text-center">
                             <p class="text-sm font-black uppercase tracking-widest text-blue-100 font-serif">6% - 8% Annual CAGR</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INDIA TRADE MARKET -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="order-2 md:order-1 grid grid-cols-2 gap-4">
                    <div class="p-8 bg-indigo-50 border border-indigo-200 rounded-3xl text-center shadow-lg transform hover:-translate-y-1 transition-all">
                        <p class="text-[10px] font-black uppercase text-indigo-400 mb-2">India Volume (2025)</p>
                        <p class="text-2xl font-black text-indigo-900">$1.7 Trillion</p>
                    </div>
                    <div class="p-8 bg-blue-50 border border-blue-200 rounded-3xl text-center shadow-lg transform hover:-translate-y-1 transition-all">
                        <p class="text-[10px] font-black uppercase text-blue-600 mb-2">Volume (2031)</p>
                        <p class="text-2xl font-black text-blue-900">$3 Trillion</p>
                    </div>
                    <div class="col-span-2 p-10 bg-indigo-900 text-white rounded-3xl">
                        <h4 class="text-xs font-black uppercase tracking-widest text-blue-300 mb-6">Growth Catalysts</h4>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach(['Make in India', 'PLI Schemes', 'Global FTAs', 'Logistics Infra'] as $cat)
                                <div class="p-3 bg-white/5 border border-white/10 rounded-xl text-center">
                                    <p class="text-[10px] font-bold uppercase">{{ $cat }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="order-1 md:order-2 space-y-6">
                    <h3 class="text-3xl font-black uppercase text-indigo-900 italic">India's Global Footprint</h3>
                    <p class="text-slate-600 leading-relaxed font-serif">India is among the fastest-growing global trading economies and a key player in international commerce through massive industrial expansion.</p>
                    <div class="space-y-4">
                        @foreach([
                            '150,000+ Active Exporters/Importers',
                            'Strategic Export Hubs across all major ports',
                            'Rising manufacturing ecosystem expansion'
                        ] as $item)
                        <div class="flex items-center gap-4">
                            <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                            <p class="text-sm font-bold uppercase text-slate-700 tracking-tight transition-transform hover:translate-x-2">{{ $item }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- EMERGING SEGMENTS -->
            <div class="p-12 rounded-3xl bg-indigo-50 border border-indigo-200 shadow-inner">
                <h3 class="text-3xl font-black mb-10 text-center uppercase italic tracking-tighter">High-Growth Segments (2026-2031)</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach(['E-commerce Trade', 'Export Consulting', 'Freight Forwarding', 'Supply Chain Tech', 'Trade Compliance', 'Customs Solutions', 'Warehousing', 'Digital Logistics'] as $seg)
                        <div class="p-6 bg-white border border-indigo-200 rounded-2xl text-center group hover:bg-indigo-900 hover:border-indigo-900 transition-all">
                             <p class="text-xs font-black uppercase text-indigo-400 group-hover:text-white transition-colors">{{ $seg }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h2 class="text-3xl font-black text-indigo-900 uppercase tracking-tight italic">Strategic Importance</h2>
                    <div class="space-y-4">
                        @foreach([
                            'Enhances global economic development',
                            'Expands market reach for businesses',
                            'Generates foreign exchange earnings',
                            'Strengthens industrial competitiveness',
                            'Creates employment in logistics & manufacturing'
                        ] as $imp)
                        <div class="flex items-center gap-4 p-4 rounded-xl border-l-4 border-indigo-500 bg-indigo-50">
                            <i class="fa-solid fa-earth-africa text-indigo-400"></i>
                            <span class="text-sm font-bold uppercase tracking-tight text-indigo-900">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-indigo-900 rounded-3xl text-white relative group overflow-hidden shadow-2xl">
                    <div class="absolute top-0 right-0 p-4 opacity-5 pointer-events-none transition-transform group-hover:scale-110">
                        <i class="fa-solid fa-ship text-9xl"></i>
                    </div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black mb-6 uppercase italic text-blue-400">Future of Trade</h4>
                        <p class="text-indigo-100 leading-relaxed text-sm font-medium mb-8">
                            The future of global trade is being reshaped by AI-based trade intelligence, blockchain supply chains, and green logistics. India is poised to be among the top 3 global trade economies.
                        </p>
                        <div class="flex flex-wrap gap-2">
                             @foreach(['AI-TRADE', 'BLOCKCHAIN', 'GREEN LOGISTICS', 'STAMRT PORTS'] as $tag)
                                <span class="px-3 py-1 bg-white/10 rounded-lg text-[10px] font-black uppercase text-blue-300 border border-blue-500/20">{{ $tag }}</span>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-indigo-950 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-indigo-500">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(99,102,241,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight font-serif">Expand Your Global Outreach</h3>
                    <p class="text-xl text-indigo-100 max-w-4xl mx-auto leading-relaxed mb-10">
                        Bridge the gap between domestic production and international demand. Join the ecosystem of global traders and export-quality manufacturers to lead the next era of international commerce.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-indigo-900 font-black uppercase tracking-widest rounded-full hover:bg-blue-600 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Trade Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-indigo-500"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
