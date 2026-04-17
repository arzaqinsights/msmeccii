@extends('layouts.website')

@section('title', 'Paper Recycling Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-stone-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-stone-800 via-stone-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/paper-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Paper <span class="text-amber-400">Recycling</span>
            </h1>
            <p class="text-xl md:text-2xl text-stone-300 max-w-3xl mx-auto leading-relaxed uppercase italic font-medium">
                Turning waste paper and cardboard into sustainable raw materials.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS PAPER RECYCLING -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-stone-900 uppercase italic">Circular Fiber Solutions</h2>
                    <p class="text-stone-600 leading-relaxed mb-4 text-lg">
                        <strong>Paper recycling</strong> is the process of collecting, sorting, processing, and converting waste paper, cardboard, and used paper products into reusable raw materials for manufacturing new paper-based products.
                    </p>
                    <p class="text-stone-600 leading-relaxed font-medium">
                        It helps conserve natural resources, reduce landfill waste, and significantly lower the environmental impact compared to virgin paper production.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $uses = [
                            ['icon' => 'box-open', 'label' => 'Packaging Boxes'],
                            ['icon' => 'file-lines', 'label' => 'Writing Paper'],
                            ['icon' => 'scroll', 'label' => 'Tissue & Hygiene'],
                            ['icon' => 'bag-shopping', 'label' => 'Paper Bags'],
                        ];
                    @endphp
                    @foreach($uses as $use)
                        <div class="p-6 bg-stone-50 border border-stone-100 rounded-2xl text-center group hover:bg-stone-900 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $use['icon'] }} text-3xl mb-3 text-stone-400 group-hover:text-amber-400"></i>
                            <p class="text-xs font-black uppercase tracking-tight">{{ $use['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- KEY PROCESSES -->
            <div class="p-10 rounded-3xl bg-stone-900 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-amber-500/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <h3 class="text-2xl font-black mb-10 uppercase italic tracking-widest text-center">Key Recycling Processes</h3>
                
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6 relative z-10">
                    @php
                        $processes = [
                            'Collection & Segregation',
                            'Shredding & Pulping',
                            'Cleaning & De-Inking',
                            'Refining & Bleaching',
                            'Re-Manufacturing'
                        ];
                    @endphp
                    @foreach($processes as $index => $process)
                        <div class="text-center">
                            <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-4 font-black text-xl shadow-lg ring-4 ring-stone-900">
                                {{ $index + 1 }}
                            </div>
                            <p class="text-xs font-bold uppercase text-stone-300 leading-tight">{{ $process }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- MARKET STATS -->
            <div class="grid md:grid-cols-2 gap-10">
                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-stone-800 to-stone-900 text-white shadow-2xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl text-amber-400">
                            <i class="fa-solid fa-earth-europe text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-stone-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$48 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Projected (2031)</span>
                            <span class="text-xl font-black text-white">$72 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Annual CAGR</span>
                            <span class="text-xl font-black text-amber-400">7%</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-[10px] text-stone-500 uppercase font-black tracking-widest">Driven by Rising global packaging demand & E-commerce growth.</p>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-stone-50 border border-stone-200 shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-stone-200 rounded-xl text-stone-600">
                            <i class="fa-solid fa-industry text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-stone-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-stone-600">
                        <li class="flex items-baseline justify-between border-b border-stone-200 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-stone-900">$3.5 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-stone-200 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Projected (2031)</span>
                            <span class="text-xl font-black text-stone-900">$8 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-stone-200 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Annual CAGR</span>
                            <span class="text-xl font-black text-stone-800">10% - 12%</span>
                        </li>
                    </ul>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                         <div class="bg-white p-3 rounded-xl border border-stone-100 shadow-sm">
                            <p class="text-[10px] text-stone-400 uppercase font-bold">Paper Mills</p>
                            <p class="text-sm font-black text-stone-700">850+</p>
                         </div>
                         <div class="bg-white p-3 rounded-xl border border-stone-100 shadow-sm">
                            <p class="text-[10px] text-stone-400 uppercase font-bold">Growth Stage</p>
                            <p class="text-sm font-black text-stone-700 uppercase">High Growth</p>
                         </div>
                    </div>
                </div>
            </div>

            <!-- COMPARISON SNAPSHOT -->
            <div class="overflow-x-auto rounded-3xl border border-stone-200 shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-stone-900 text-white">
                            <th class="p-6 uppercase text-sm tracking-widest font-black">Snapshot Parameter</th>
                            <th class="p-6 uppercase text-sm tracking-widest font-black text-center">Global Market</th>
                            <th class="p-6 uppercase text-sm tracking-widest font-black text-center">India Market</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 italic">
                        <tr class="hover:bg-stone-50 transition-colors">
                            <td class="p-6 font-bold text-stone-500 uppercase text-xs">Market Stage</td>
                            <td class="p-6 text-center font-black text-stone-800">Mature</td>
                            <td class="p-6 text-center font-black text-stone-800">High Growth</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition-colors">
                            <td class="p-6 font-bold text-stone-500 uppercase text-xs">Primary Driver</td>
                            <td class="p-6 text-center text-stone-600 font-medium">Sustainable Packaging</td>
                            <td class="p-6 text-center text-stone-600 font-medium">Packaging + Plastic Replacement</td>
                        </tr>
                        <tr class="hover:bg-stone-50 transition-colors">
                            <td class="p-6 font-bold text-stone-500 uppercase text-xs">Recycling Facilities</td>
                            <td class="p-6 text-center text-stone-600 font-medium">10,000+ Globally</td>
                            <td class="p-6 text-center text-stone-600 font-medium">850+ Paper Mills</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <h2 class="text-3xl font-extrabold text-stone-900 uppercase tracking-tight">Global Outlook</h2>
                    <div class="grid gap-4">
                        @foreach([
                            'Increased use of recycled fiber in packaging',
                            'Growth in automated paper sorting technologies',
                            'Rising global focus on eco-friendly packaging',
                            'Expansion of closed-loop packaging systems'
                        ] as $outlook)
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-stone-50 border border-stone-100 hover:border-stone-300 transition-all">
                            <div class="w-8 h-8 flex items-center justify-center bg-stone-200 text-stone-600 rounded-lg">
                                <i class="fa-solid fa-chevron-right text-xs"></i>
                            </div>
                            <span class="font-bold text-stone-700 text-xs uppercase tracking-tight">{{ $outlook }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="space-y-6">
                    <h2 class="text-3xl font-extrabold text-stone-900 uppercase tracking-tight">India Outlook</h2>
                    <div class="grid gap-4">
                        @foreach([
                            'Major increase in kraft paper and duplex board demand',
                            'Expansion of organized recycling networks',
                            'Rising domestic production by recycled mills',
                            'Increased import substitution through local recycling'
                        ] as $outlook)
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-amber-50 border border-amber-100 hover:border-amber-300 transition-all">
                            <div class="w-8 h-8 flex items-center justify-center bg-amber-200 text-amber-700 rounded-lg">
                                <i class="fa-solid fa-arrow-up text-xs"></i>
                            </div>
                            <span class="font-bold text-stone-700 text-xs uppercase tracking-tight">{{ $outlook }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="p-10 rounded-3xl bg-amber-50 border border-amber-100 relative overflow-hidden">
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-6 uppercase text-stone-900 italic">Strategic Importance</h3>
                        <div class="space-y-4">
                            @foreach([
                                'Saves trees and reduces deforestation',
                                'Conserves water and energy in production',
                                'Lowers landfill waste burden',
                                'Reduces carbon footprint of paper manufacturing',
                                'Supports sustainable packaging ecosystem'
                            ] as $imp)
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-check text-amber-600"></i>
                                <span class="text-sm font-bold text-stone-700 uppercase tracking-tight">{{ $imp }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="relative">
                        <div class="p-8 bg-stone-900 rounded-2xl text-white shadow-2xl">
                            <h4 class="text-xl font-bold mb-4 italic text-amber-400 uppercase tracking-widest">Key Recycled Products</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Corrugated Boxes', 'Printing Paper', 'Tissue Products', 'Paperboard', 'Paper Bags', 'Cartons'] as $prod)
                                    <span class="px-3 py-1 bg-white/10 rounded-lg text-[10px] font-black uppercase text-stone-300 border border-white/5">{{ $prod }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-stone-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-amber-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(245,158,11,0.05),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Build a Sustainable Packaging Future</h3>
                    <p class="text-xl text-stone-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Join the transition from single-use plastics to circular fiber solutions. Explore recycling infrastructure, waste collection networks, and sustainable paper manufacturing.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-stone-900 font-black uppercase tracking-widest rounded-full hover:bg-amber-500 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Paper Recycling Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-amber-600"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
