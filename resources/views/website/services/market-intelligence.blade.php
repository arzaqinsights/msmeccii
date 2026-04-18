@extends('layouts.website')

@section('title', 'Market Intelligence & Data Analytics - MSMECCII')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-900/40 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('https://images.unsplash.com/photo-1551288049-bb848a55a178?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-6 backdrop-blur-md">
                <i class="fa-solid fa-chart-line text-amber-500"></i>
                <span class="text-xs font-black uppercase tracking-widest text-amber-300">Data-Driven Industrial Insights</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black uppercase mb-6 tracking-tight leading-tight">
                Market <span class="text-amber-500">Intelligence</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic">
                Empowering decisions with real-time data and predictive industry trends.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-24 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: THE DATA EDGE -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8 animate-on-scroll">
                    <h2 class="text-4xl font-black text-slate-900 uppercase italic leading-tight border-l-8 border-amber-600 pl-6">
                        Information is Power <br> <span class="text-amber-600 text-2xl">Precision is Growth</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        In a rapidly changing global economy, guessing is a liability. MSMECCII's Market Intelligence service provides our members with <strong>Real-Time Data Visualization</strong> and comprehensive industry reports. We decode complex market signals into actionable business strategies, keeping you ahead of the competitive curve.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-6 bg-amber-50 rounded-2xl border border-amber-100 italic font-bold text-slate-700 text-xs">
                            <i class="fa-solid fa-microchip text-amber-600 mb-2 block text-xl"></i>
                            AI-POWERED ANALYTICS
                        </div>
                        <div class="p-6 bg-slate-900 text-white rounded-2xl italic font-bold text-xs shadow-xl">
                            <i class="fa-solid fa-file-invoice-dollar text-amber-500 mb-2 block text-xl"></i>
                            PRICE VOLATILITY TOOLS
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1551288049-bb848a55a178?q=80&w=2070&auto=format&fit=crop" class="rounded-[3rem] shadow-2xl relative z-10 hover:shadow-amber-500/20 transition-all duration-700" alt="Data Intelligence">
                    <div class="absolute -top-10 -left-10 w-64 h-64 bg-amber-500/5 rounded-full blur-[100px]"></div>
                </div>
            </div>

            <!-- SECTION 2: INTELLIGENCE PORTFOLIO (GRID WITH IMAGES) -->
            <div class="space-y-12">
                <div class="text-center max-w-3xl mx-auto">
                    <h3 class="text-3xl font-black uppercase italic text-slate-900 mb-6 tracking-tighter">Comprehensive Analytics Portfolio</h3>
                    <p class="text-slate-500 font-medium italic">Decoding the future through historical and predictive modeling.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach([
                        ['t' => 'Export Market Audits', 'img' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop', 'd' => 'Detailed analysis of global demand for your specific products.'],
                        ['t' => 'Supply Chain Diagnostics', 'img' => 'https://images.unsplash.com/photo-1586528116311-ad86df6254c1?q=80&w=2070&auto=format&fit=crop', 'd' => 'Identifying bottlenecks and cost-saving lanes in logistics.'],
                        ['t' => 'Consumer behavior', 'img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop', 'd' => 'Psychographic mapping of your target consumer segments.']
                    ] as $port)
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-slate-900 h-[400px] shadow-lg">
                        <img src="{{ $port['img'] }}" class="w-full h-full object-cover group-hover:scale-110 grayscale group-hover:grayscale-0 transition-all duration-1000 opacity-60 group-hover:opacity-100" alt="Intelligence Step">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/20 to-transparent"></div>
                        <div class="absolute bottom-10 left-10 right-10">
                            <h4 class="text-2xl font-black text-amber-500 mb-4 uppercase italic tracking-tight">{{ $port['t'] }}</h4>
                            <p class="text-white/80 text-[10px] font-bold leading-relaxed uppercase tracking-widest">{{ $port['d'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: TECH STACK -->
            <div class="bg-amber-100 p-16 rounded-[4rem] relative overflow-hidden text-center space-y-12 shadow-inner border border-amber-200">
                <h3 class="text-4xl font-black uppercase italic tracking-widest text-slate-900">The Intelligence Engine</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    @foreach([
                        ['icon' => 'database', 'title' => 'Big Data Archiving'],
                        ['icon' => 'brain', 'title' => 'Predictive AI'],
                        ['icon' => 'satellite', 'title' => 'Real-Time Feeds'],
                        ['icon' => 'magnifying-glass-chart', 'title' => 'Macro Audits']
                    ] as $tech)
                    <div class="p-8 bg-white/80 backdrop-blur rounded-3xl shadow-sm hover:-translate-y-2 transition-transform border border-white">
                        <i class="fa-solid fa-{{ $tech['icon'] }} text-3xl mb-4 text-amber-600"></i>
                        <p class="text-xs font-black uppercase text-slate-800 tracking-tighter">{{ $tech['title'] }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="max-w-3xl mx-auto pt-10">
                    <p class="text-slate-600 text-lg font-serif italic">"Stay ahead because we study the trends before they become headlines."</p>
                </div>
            </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 text-white p-20 rounded-[5rem] text-center shadow-4xl overflow-hidden border-b-[20px] border-amber-600 group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(245,158,11,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-12 text-center">
                    <h3 class="text-5xl md:text-7xl font-black mb-8 uppercase tracking-tight leading-[0.9]">Stop Guessing. <br> Start Growing.</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic mb-12 opacity-80">
                        The market doesn't wait for clarity. Get the data you need to make confident, aggressive expansion moves today.
                    </p>
                    <a href="{{ route('forms.show', ['slug' => 'join-us']) }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-900 font-black uppercase tracking-[0.2em] rounded-full hover:bg-amber-600 hover:text-white transition-all duration-700 shadow-4xl transform hover:scale-110">
                        Request Market Audit <i class="fa-solid fa-arrow-right-long text-amber-500"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
