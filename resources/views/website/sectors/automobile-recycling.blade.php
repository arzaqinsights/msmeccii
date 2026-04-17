@extends('layouts.website')

@section('title', 'Automobile Recycling Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/automobile-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Automobile <span class="text-blue-400">Recycling</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed uppercase italic font-medium">
                Dismantling, Recovering, and Reprocessing End-of-Life Vehicles (ELVs).
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS AUTOMOBILE RECYCLING -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase italic">Circular Automotive Economy</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Automobile recycling</strong> is the systematic process of dismantling, recovering, and reprocessing materials from end-of-life vehicles (ELVs) including cars, trucks, buses, and two-wheelers.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        The process ensures that reusable parts and raw materials are extracted efficiently, reducing waste and supporting sustainable manufacturing across the global automotive supply chain.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $materials = [
                            ['icon' => 'industry', 'label' => 'Steel & Iron'],
                            ['icon' => 'cube', 'label' => 'Aluminium & Copper'],
                            ['icon' => 'box', 'label' => 'Plastics & Rubber'],
                            ['icon' => 'vial', 'label' => 'Fluids & Glass'],
                        ];
                    @endphp
                    @foreach($materials as $mat)
                        <div class="p-6 bg-slate-50 border border-slate-100 rounded-2xl text-center group hover:bg-slate-900 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $mat['icon'] }} text-3xl mb-3 text-slate-400 group-hover:text-blue-400"></i>
                            <p class="text-xs font-black uppercase tracking-tight">{{ $mat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- KEY PROCESSES -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <h3 class="text-2xl font-black mb-10 uppercase italic tracking-widest text-center">Key Recycling Processes</h3>
                
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6 relative z-10">
                    @php
                        $processes = [
                            'Vehicle Collection & Inspection',
                            'Depollution (Removal of Fluids)',
                            'Dismantling of Components',
                            'Shredding & Separation',
                            'Metal & Material Reprocessing'
                        ];
                    @endphp
                    @foreach($processes as $index => $process)
                        <div class="text-center">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 font-black text-xl shadow-lg ring-4 ring-blue-900">
                                {{ $index + 1 }}
                            </div>
                            <p class="text-xs font-bold uppercase text-slate-300 leading-tight">{{ $process }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- MARKET STATS -->
            <div class="grid md:grid-cols-2 gap-10">
                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-blue-500/20 rounded-xl text-blue-400">
                            <i class="fa-solid fa-earth-americas text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$85 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2031)</span>
                            <span class="text-xl font-black text-white">$140 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-blue-400">8%</span>
                        </li>
                    </ul>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                            <p class="text-[10px] text-slate-500 uppercase font-black mb-1">Total Facilities</p>
                            <p class="text-lg font-bold">20,000+</p>
                        </div>
                        <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                            <p class="text-[10px] text-slate-500 uppercase font-black mb-1">Key Markets</p>
                            <p class="text-sm font-bold">USA, EU, China</p>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-slate-200 rounded-xl text-slate-600">
                            <i class="fa-solid fa-flag-checkered text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-600">
                        <li class="flex items-baseline justify-between border-b border-slate-200 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-slate-900">$2.5 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-slate-200 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2031)</span>
                            <span class="text-xl font-black text-slate-900">$7 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-slate-200 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-blue-600">15%</span>
                        </li>
                    </ul>

                    <div class="mt-8 p-4 bg-blue-50 border border-blue-100 rounded-2xl">
                         <p class="text-[10px] font-black uppercase text-blue-400 mb-2 tracking-widest">Main Growth Driver</p>
                         <p class="text-sm font-bold text-slate-800 italic">Government Vehicle Scrappage Policy & Rising Scrap Steel Demand.</p>
                    </div>
                </div>
            </div>

            <!-- COMPARISON TABLE -->
            <div class="overflow-x-auto rounded-3xl border border-slate-200 shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900 text-white">
                            <th class="p-6 uppercase text-sm tracking-widest font-black">Parameter</th>
                            <th class="p-6 uppercase text-sm tracking-widest font-black text-center">Global Market</th>
                            <th class="p-6 uppercase text-sm tracking-widest font-black text-center">India Market</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 italic">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-6 font-bold text-slate-500 uppercase text-xs">Market Stage</td>
                            <td class="p-6 text-center font-black text-slate-800">Mature</td>
                            <td class="p-6 text-center font-black text-blue-600">Emerging / Fast Growing</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-6 font-bold text-slate-500 uppercase text-xs">Primary Driver</td>
                            <td class="p-6 text-center text-slate-600 font-medium">Sustainability + ELV Rules</td>
                            <td class="p-6 text-center text-slate-600 font-medium">Scrappage Policy + Steel Demand</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-3xl font-black mb-8 uppercase text-slate-900 italic border-l-8 border-slate-900 pl-6">Global Outlook</h3>
                    <div class="space-y-4">
                        @foreach([
                            'Strong investments in automated dismantling plants',
                            'Higher recycling efficiency through AI/robotics',
                            'Integration of EV battery recycling',
                            'OEM participation in recycling ecosystems'
                        ] as $item)
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                            <div class="w-2 h-2 rounded-full bg-slate-400"></div>
                            <span class="text-sm font-bold text-slate-700 uppercase tracking-tight">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h3 class="text-3xl font-black mb-8 uppercase text-slate-900 italic border-l-8 border-blue-600 pl-6">India Outlook</h3>
                    <div class="space-y-4">
                        @foreach([
                            'Significant increase in registered scrappage centers',
                            'Major investment from auto OEMs and recyclers',
                            'Development of formal recycling supply chain',
                            'Rising use of recycled auto parts in aftermarket'
                        ] as $item)
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-blue-50 border border-blue-100">
                            <div class="w-2 h-2 rounded-full bg-blue-400"></div>
                            <span class="text-sm font-bold text-slate-700 uppercase tracking-tight">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="p-8 bg-slate-900 rounded-3xl text-white relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-transparent opacity-50"></div>
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6 italic text-blue-400 uppercase tracking-widest">Strategic Importance</h3>
                        <ul class="space-y-4">
                            @foreach([
                                'Reduces industrial waste and landfill burden',
                                'Conserves natural resources and raw materials',
                                'Supports circular economy in manufacturing',
                                'Reduces carbon footprint of vehicle production',
                                'Creates jobs in dismantling and remanufacturing'
                            ] as $imp)
                                <li class="flex items-start gap-3">
                                    <i class="fa-solid fa-circle-check text-blue-400 mt-1"></i>
                                    <span class="text-slate-300 text-sm font-medium">{{ $imp }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="space-y-6">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Key Recovered Products</h2>
                    <div class="flex flex-wrap gap-3">
                        @foreach(['Ferrous Metals', 'Non-Ferrous Metals', 'Batteries', 'Tyres & Rubber', 'Spare Parts', 'Plastics', 'Automotive Fluids'] as $prod)
                            <span class="px-6 py-3 bg-slate-100 border border-slate-200 rounded-full text-xs font-black uppercase text-slate-600 hover:bg-slate-900 hover:text-white transition-all cursor-default shadow-sm">{{ $prod }}</span>
                        @endforeach
                    </div>
                    <div class="p-6 rounded-2xl border-2 border-dashed border-slate-200 bg-slate-50">
                        <p class="text-slate-500 text-sm leading-relaxed italic">
                            "With supportive government policies and increasing vehicle ownership, India is expected to become one of the leading high-growth automobile recycling markets globally in the next decade."
                        </p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-blue-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(59,130,246,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">The Future of Sustainable Mobility</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Explore opportunities in the automobile recycling ecosystem. From authorized scrappage centers to advanced metal recovery, join the mission to build a zero-waste automotive industry.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-slate-900 font-black uppercase tracking-widest rounded-full hover:bg-blue-400 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Recycling Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-blue-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
