@extends('layouts.website')

@section('title', 'Chemicals & Petrochemicals Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/chemicals-petrochemicals-industry.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Chemicals & <span class="text-indigo-400">Petrochemicals</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                The Backbone of Modern Manufacturing & Industrial Transformation.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase italic border-l-8 border-indigo-600 pl-6">Industrial Foundation</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        From everyday consumer products to advanced industrial applications, the <strong>Chemicals & Petrochemicals sector</strong> forms the invisible foundation of the global economy.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        It powers industries ranging from agriculture and healthcare to automotive, construction, packaging, and energy, transforming raw materials into thousands of value-added products.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $segments = [
                            ['icon' => 'flask-vial', 'label' => 'Basic Chemicals'],
                            ['icon' => 'oil-well', 'label' => 'Petrochemicals'],
                            ['icon' => 'vial-circle-check', 'label' => 'Specialty Chemicals'],
                            ['icon' => 'clover', 'label' => 'Agrochemicals'],
                        ];
                    @endphp
                    @foreach($segments as $s)
                        <div class="p-6 bg-slate-50 border border-slate-100 rounded-2xl text-center group hover:bg-slate-900 hover:text-white transition-all duration-300 shadow-sm">
                            <i class="fa-solid fa-{{ $s['icon'] }} text-3xl mb-3 text-indigo-500 group-hover:text-indigo-400 font-black"></i>
                            <p class="text-[10px] font-black uppercase tracking-tight">{{ $s['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- SNAPSHOT -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white relative overflow-hidden shadow-xl">
                <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-black mb-6 uppercase italic tracking-widest text-indigo-400">Industry Snapshot</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed italic">Structural transformation driven by sustainability, innovation, and global supply chain realignment.</p>
                        
                        <div class="space-y-4">
                            @foreach([
                                'Global Market Size (2025): USD 5.5T+',
                                'Projected Market Size (2031): USD 7.5T+',
                                'Expected Growth Rate: ~5–6% CAGR',
                                'India Market Outlook (2031): USD 400B'
                            ] as $stat)
                                <div class="flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-indigo-500"></div>
                                    <span class="text-xs font-bold uppercase text-slate-300">{{ $stat }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center shadow-lg">
                            <p class="text-[10px] font-black uppercase text-slate-500 mb-2">India (2025)</p>
                            <p class="text-3xl font-black text-white">$220B+</p>
                        </div>
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center shadow-lg">
                            <p class="text-[10px] font-black uppercase text-slate-500 mb-2">India (2031)</p>
                            <p class="text-3xl font-black text-indigo-400">$400B</p>
                        </div>
                        <div class="col-span-2 p-4 bg-indigo-600/10 border border-indigo-600/20 rounded-xl text-center shadow-inner">
                             <p class="text-sm font-black uppercase tracking-widest text-indigo-100">Rising Sector Momentum</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MANUFACTURING ERA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 grid grid-cols-2 gap-4">
                    @foreach([
                        ['t' => 'Basic Chemicals', 'd' => 'Industrial Chemicals'],
                        ['t' => 'Petrochemicals', 'd' => 'Polymers & Olefins'],
                        ['t' => 'Specialty Chemicals', 'd' => 'Adhesives & Coatings'],
                        ['t' => 'Agrochemicals', 'd' => 'Fertilizers & Protection'],
                    ] as $idx => $pill)
                    <div class="p-6 bg-slate-50 border border-slate-200 rounded-3xl text-center shadow hover:shadow-lg transition-all">
                        <p class="text-[10px] font-black uppercase text-indigo-600 mb-2">Segment 0{{ $idx + 1 }}</p>
                        <p class="text-lg font-black text-slate-900 leading-tight italic uppercase">{{ $pill['t'] }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="order-1 md:order-2 space-y-6">
                    <h3 class="text-3xl font-black uppercase text-slate-900 italic">India: A Global Hub</h3>
                    <p class="text-slate-600 leading-relaxed font-serif">India is emerging as a strategic alternative in global supply chains, fueled by competitive manufacturing and domestic demand.</p>
                    <div class="space-y-4">
                        @foreach([
                            'Competitive manufacturing costs',
                            'Strong domestic demand across sectors',
                            'Government PLI schemes & clusters',
                            'China+1 diversification strategy'
                        ] as $item)
                        <div class="flex items-center gap-4 group">
                            <div class="w-2 h-2 rounded-full bg-indigo-500 group-hover:scale-150 transition-transform"></div>
                            <p class="text-sm font-bold uppercase text-slate-700 tracking-tight transition-transform group-hover:translate-x-2">{{ $item }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- ECOSYSTEM GRID -->
            <div class="p-12 rounded-[50px] bg-slate-50 border border-slate-200 shadow-inner">
                <h3 class="text-3xl font-black mb-10 text-center uppercase italic tracking-tighter">Industry Connectivity</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    @foreach(['Packaging & FMCG', 'Agriculture', 'Automotive', 'Construction', 'Healthcare', 'Textiles'] as $eco)
                        <div class="p-6 bg-white border border-slate-200 rounded-2xl text-center group hover:border-indigo-500 hover:shadow-xl transition-all">
                             <p class="text-xs font-black uppercase text-slate-600 group-hover:text-indigo-600 transition-colors">{{ $eco }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tight italic">Strategic Significance</h2>
                    <div class="space-y-4">
                        @foreach([
                            'Core input provider for nearly all manufacturing',
                            'Drives industrial growth & export competitiveness',
                            'Enables material & product innovation',
                            'Supports sustainability & advanced materials',
                            'Significant contribution to GDP & employment'
                        ] as $imp)
                        <div class="flex items-center gap-4 p-4 rounded-xl border-l-4 border-indigo-500 bg-slate-50 hover:bg-white hover:shadow-md transition-all">
                            <i class="fa-solid fa-check text-indigo-400 font-black"></i>
                            <span class="text-sm font-bold uppercase tracking-tight text-slate-900">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-900 rounded-3xl text-white relative group overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black mb-6 uppercase italic text-indigo-400">The Transition Ahead</h4>
                        <p class="text-slate-300 leading-relaxed text-sm font-medium mb-8">
                            Low-carbon technologies, hydrogen feedstocks, and green chemicals will define the next decade of industrial transformation.
                        </p>
                        <div class="flex flex-wrap gap-2">
                             @foreach(['GREEN CHEM', 'ESG FOCUS', 'HYDROGEN', 'CIRCULAR'] as $tag)
                                <span class="px-3 py-1 bg-white/10 rounded-lg text-[10px] font-black uppercase text-indigo-300 border border-indigo-500/20">{{ $tag }}</span>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-950 text-white p-12 md:p-16 rounded-[40px] text-center shadow-2xl overflow-hidden border-b-4 border-indigo-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(79,70,229,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight font-serif italic">Industrial Civilization Foundation</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        India stands at a pivotal point to become a global leader in chemical manufacturing and exports. Join the mission to shape the future of industrial manufacturing.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-slate-900 font-black uppercase tracking-widest rounded-full hover:bg-indigo-500 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Chemical Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-indigo-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
