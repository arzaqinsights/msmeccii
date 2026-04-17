@extends('layouts.website')

@section('title', 'Decarbonization / Carbon Net Zero Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-emerald-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/decarbonization.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Carbon <span class="text-emerald-400">Net Zero</span>
            </h1>
            <p class="text-xl md:text-2xl text-emerald-100 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                Decarbonization: The Path to Global Industrial Sustainability.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS DECARBONIZATION -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-emerald-900 uppercase italic">Building a Zero-Emission Future</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Decarbonization</strong> refers to the process of reducing or eliminating carbon dioxide (CO₂) and greenhouse gas emissions from industrial, commercial, and societal activities.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        <strong>Carbon Net Zero</strong> is achieved when the amount of carbon emissions released into the atmosphere is balanced by the amount removed or offset, creating a neutral impact on the global climate.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $focusAreas = [
                            ['icon' => 'industry', 'label' => 'Industrial Emission'],
                            ['icon' => 'building', 'label' => 'Green Building'],
                            ['icon' => 'truck-fast', 'label' => 'Sustainable Transport'],
                            ['icon' => 'chart-line', 'label' => 'ESG Compliance'],
                        ];
                    @endphp
                    @foreach($focusAreas as $area)
                        <div class="p-6 bg-emerald-50 border border-emerald-100 rounded-2xl text-center group hover:bg-emerald-900 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $area['icon'] }} text-3xl mb-3 text-emerald-400 group-hover:text-emerald-300"></i>
                            <p class="text-xs font-black uppercase tracking-tight">{{ $area['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIES CARDS -->
            <div class="p-10 rounded-3xl bg-emerald-900 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <h3 class="text-2xl font-black mb-10 uppercase italic tracking-widest text-center">Decarbonization Strategies</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative z-10">
                    @php
                        $strategies = [
                            ['title' => 'Renewable Energy', 'desc' => 'Switching to solar, wind, and green energy sources.'],
                            ['title' => 'Energy Efficiency', 'desc' => 'Optimizing systems to reduce waste and consumption.'],
                            ['title' => 'CCUS Technology', 'desc' => 'Carbon Capture, Utilization & Storage initiatives.'],
                            ['title' => 'Green Hydrogen', 'desc' => 'Leveraging clean hydrogen for industrial processes.'],
                            ['title' => 'Sustainable Mfg.', 'desc' => 'Implementing eco-friendly manufacturing practices.'],
                            ['title' => 'Carbon Offsetting', 'desc' => 'Balancing emissions through credits and trading.'],
                        ];
                    @endphp
                    @foreach($strategies as $strat)
                        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all">
                            <h4 class="text-sm font-black uppercase text-emerald-400 mb-2">{{ $strat['title'] }}</h4>
                            <p class="text-xs font-medium text-emerald-100 leading-relaxed">{{ $strat['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- MARKET STATS -->
            <div class="grid md:grid-cols-2 gap-10">
                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl text-emerald-400">
                            <i class="fa-solid fa-earth-europe text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual Investment (2025)</span>
                            <span class="text-xl font-black text-white">$2 Trillion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Opportunity (2031)</span>
                            <span class="text-xl font-black text-white">$5 Trillion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-emerald-400">15% - 18%</span>
                        </li>
                    </ul>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                            <p class="text-[10px] text-slate-500 uppercase font-black mb-1">Global ESG Firms</p>
                            <p class="text-lg font-bold">50,000+</p>
                        </div>
                        <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                            <p class="text-[10px] text-slate-500 uppercase font-black mb-1">Key Driver</p>
                            <p class="text-xs font-bold uppercase">Paris Agreement</p>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-emerald-50 border border-emerald-200 shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-emerald-200 rounded-xl text-emerald-600">
                            <i class="fa-solid fa-leaf text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-600">
                        <li class="flex items-baseline justify-between border-b border-emerald-200 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-slate-900">$25 - 35B</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-emerald-200 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2031)</span>
                            <span class="text-xl font-black text-slate-900">$80 - 100B</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-emerald-200 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-emerald-700">18% - 22%</span>
                        </li>
                    </ul>

                    <div class="mt-8 bg-white p-4 rounded-xl border border-emerald-100 italic shadow-sm">
                         <p class="text-[10px] font-black uppercase text-emerald-400 mb-1">National Goal</p>
                         <p class="text-sm font-bold text-slate-700">Net Zero by 2070 commitment with aggressive renewable targets.</p>
                    </div>
                </div>
            </div>

            <!-- COMPARISON SNAPSHOT -->
            <div class="overflow-x-auto rounded-3xl border border-emerald-200 shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-emerald-950 text-white">
                            <th class="p-6 uppercase text-sm tracking-widest font-black">Snapshot Parameter</th>
                            <th class="p-6 uppercase text-sm tracking-widest font-black text-center">Global Market</th>
                            <th class="p-6 uppercase text-sm tracking-widest font-black text-center">India Market</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-emerald-50 italic">
                        <tr class="hover:bg-emerald-50/50 transition-colors">
                            <td class="p-6 font-bold text-slate-500 uppercase text-xs">Market Stage</td>
                            <td class="p-6 text-center font-black text-slate-800">Rapid Expansion</td>
                            <td class="p-6 text-center font-black text-emerald-700">High Growth Emerging</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition-colors">
                            <td class="p-6 font-bold text-slate-500 uppercase text-xs">Primary Driver</td>
                            <td class="p-6 text-center text-slate-600 font-medium">Climate Policy + ESG</td>
                            <td class="p-6 text-center text-slate-600 font-medium">Industrial Transition + Net Zero Goals</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-3xl font-black mb-8 uppercase text-slate-900 italic border-l-8 border-emerald-950 pl-6">Global Outlook</h3>
                    <ul class="space-y-3">
                        @foreach([
                            'Massive investment in green technologies',
                            'Rapid scaling of carbon capture & hydrogen',
                            'Growth in green finance and carbon markets',
                            'Mandatory ESG reporting in major economies'
                        ] as $item)
                        <li class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 font-bold text-slate-700 uppercase text-xs tracking-tight">
                            <div class="w-2 h-2 rounded-full bg-emerald-400"></div> {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="text-3xl font-black mb-8 uppercase text-slate-900 italic border-l-8 border-emerald-400 pl-6">India Outlook</h3>
                    <ul class="space-y-3">
                        @foreach([
                            'Decarbonization in steel, cement, and chemicals',
                            'Expansion of carbon trading frameworks',
                            'Growth in renewable integration & green mobility',
                            'Rising demand for carbon auditing & consulting'
                        ] as $item)
                        <li class="flex items-center gap-3 p-4 rounded-xl bg-emerald-50 border border-emerald-100 font-bold text-slate-700 uppercase text-xs tracking-tight">
                            <div class="w-2 h-2 rounded-full bg-emerald-600"></div> {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- KEY INDUSTRY SEGMENTS -->
            <div class="relative py-12 px-8 rounded-3xl bg-slate-900 text-white overflow-hidden">
                <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                <h3 class="text-3xl font-black mb-10 text-center uppercase tracking-widest italic relative z-10">Key Industry Segments</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 relative z-10">
                    @foreach(['Renewable Energy', 'Green Hydrogen', 'Energy Efficiency', 'Battery Systems', 'Carbon Trading', 'Carbon Capture', 'Sustainability Auditing', 'Green Finance'] as $segment)
                        <div class="p-4 bg-white/5 border border-white/10 rounded-xl text-center hover:bg-emerald-500 hover:text-white transition-all duration-300">
                             <p class="text-[10px] font-black uppercase tracking-tighter">{{ $segment }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Strategic Importance</h2>
                    <div class="space-y-4">
                        @foreach([
                            'Helps combat climate change and global warming',
                            'Supports national and international emission targets',
                            'Improves energy efficiency and cost savings',
                            'Enhances ESG and investor attractiveness',
                            'Future-proofs industries against regulations'
                        ] as $imp)
                        <div class="flex items-start gap-4">
                            <div class="mt-1 w-5 h-5 flex items-center justify-center bg-emerald-100 text-emerald-600 rounded-full shrink-0">
                                <i class="fa-solid fa-check text-[10px]"></i>
                            </div>
                            <p class="text-slate-600 text-sm font-medium">{{ $imp }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-emerald-50 rounded-3xl border border-emerald-100 relative group overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 text-emerald-100 rotate-12 transition-transform group-hover:rotate-0">
                        <i class="fa-solid fa-seedling text-9xl"></i>
                    </div>
                    <div class="relative z-10">
                        <h4 class="text-xl font-black text-emerald-900 uppercase italic mb-4">The Green Mandate</h4>
                        <p class="text-slate-600 leading-relaxed text-sm font-medium">
                            Decarbonization and Carbon Net Zero are becoming the foundation of future industrial and economic growth, transforming how businesses operate globally. India is positioned to become one of the world's fastest-growing decarbonization economies.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-emerald-950 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-emerald-500">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(52,211,153,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Join the Net Zero Revolution</h3>
                    <p class="text-xl text-emerald-100 max-w-4xl mx-auto leading-relaxed mb-10">
                        Lead the transition toward a sustainable industrial future. Explore carbon auditing, green energy integration, and ESG compliance solutions to achieve your decarbonization goals.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-emerald-900 font-black uppercase tracking-widest rounded-full hover:bg-emerald-400 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Sustainability Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-emerald-500"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
