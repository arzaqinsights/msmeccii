@extends('layouts.website')

@section('title', 'Agro & Food Processing Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-orange-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-900 via-stone-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/agro-food-processing.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Agro & Food <span class="text-orange-400">Processing</span>
            </h1>
            <p class="text-xl md:text-2xl text-orange-100 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                Transforming Agriculture through Value-Added Manufacturing.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS AGRO & FOOD PROCESSING -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-orange-900 uppercase italic">From Farm to Plate</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Agro and Food Processing</strong> refers to the transformation of agricultural raw materials into value-added food, beverage, and industrial products through modern processing, preservation, packaging, and distribution systems.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        This sector acts as a vital bridge between agriculture and manufacturing, ensuring food security, reducing wastage, and delivering high-quality products to global markets.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $segments = [
                            ['icon' => 'cow', 'label' => 'Dairy Processing'],
                            ['icon' => 'apple-whole', 'label' => 'Fruit & Veg'],
                            ['icon' => 'wheat-awn', 'label' => 'Grain & Pulses'],
                            ['icon' => 'bottle-water', 'label' => 'Beverages'],
                        ];
                    @endphp
                    @foreach($segments as $seg)
                        <div class="p-6 bg-orange-50 border border-orange-100 rounded-2xl text-center group hover:bg-orange-600 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $seg['icon'] }} text-3xl mb-3 text-orange-400 group-hover:text-white"></i>
                            <p class="text-xs font-black uppercase tracking-tight">{{ $seg['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- KEY ACTIVITIES -->
            <div class="p-10 rounded-3xl bg-orange-900 font-serif italic text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <h3 class="text-2xl font-black mb-10 uppercase italic tracking-widest text-center">Key Processing Activities</h3>
                
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6 relative z-10">
                    @php
                        $activities = [
                            'Cleaning & Sorting',
                            'Milling & Grinding',
                            'Packaging & Preservation',
                            'Cold Storage & Logistics',
                            'Quality Testing & Distribution'
                        ];
                    @endphp
                    @foreach($activities as $index => $activity)
                        <div class="text-center group">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-4 font-black text-xl shadow-lg ring-4 ring-orange-800 group-hover:bg-orange-400 group-hover:text-orange-950 transition-all">
                                {{ $index + 1 }}
                            </div>
                            <p class="text-[10px] font-bold uppercase text-orange-200 leading-tight">{{ $activity }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- MARKET STATS -->
            <div class="grid md:grid-cols-2 gap-10">
                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-stone-800 to-stone-900 text-white shadow-2xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl text-orange-400">
                            <i class="fa-solid fa-earth-asia text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-stone-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$8 Trillion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Projected (2031)</span>
                            <span class="text-xl font-black text-white">$11 Trillion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Annual CAGR</span>
                            <span class="text-xl font-black text-orange-400">5% - 6%</span>
                        </li>
                    </ul>

                    <div class="mt-8 p-4 bg-white/5 rounded-xl border border-white/10">
                        <p class="text-[10px] text-stone-500 uppercase font-black mb-1">Total Companies</p>
                        <p class="text-lg font-bold">500,000+ Globally</p>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-orange-50 border border-orange-200 shadow-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-orange-200 rounded-xl text-orange-600">
                            <i class="fa-solid fa-tractor text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-stone-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-stone-600">
                        <li class="flex items-baseline justify-between border-b border-orange-200 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-stone-900">$600 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-orange-200 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Projected (2031)</span>
                            <span class="text-xl font-black text-stone-900">$1 Trillion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-orange-200 pb-2">
                            <span class="text-sm uppercase font-bold text-stone-400">Annual CAGR</span>
                            <span class="text-xl font-black text-orange-700">10% - 12%</span>
                        </li>
                    </ul>

                    <div class="mt-8 flex gap-4">
                        <div class="flex-1 p-3 bg-white rounded-xl border border-orange-100 shadow-sm">
                            <p class="text-[10px] text-stone-400 uppercase font-bold">Processed Units</p>
                            <p class="text-lg font-black text-orange-600">40,000+</p>
                        </div>
                        <div class="flex-1 p-3 bg-white rounded-xl border border-orange-100 shadow-sm">
                            <p class="text-[10px] text-stone-400 uppercase font-bold">Growth Stage</p>
                            <p class="text-lg font-black text-stone-700 uppercase">High Growth</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMPARISON -->
            <div class="overflow-x-auto rounded-3xl border border-orange-200 shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-orange-950 text-white">
                            <th class="p-6 uppercase text-sm tracking-widest font-black">Snapshot Parameter</th>
                            <th class="p-6 uppercase text-sm tracking-widest font-black text-center">Global Market</th>
                            <th class="p-6 uppercase text-sm tracking-widest font-black text-center">India Market</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-orange-50 italic">
                        <tr class="hover:bg-orange-50/50 transition-colors">
                            <td class="p-6 font-bold text-stone-500 uppercase text-xs">Market Stage</td>
                            <td class="p-6 text-center font-black text-stone-800">Mature / Expanding</td>
                            <td class="p-6 text-center font-black text-orange-700">High Growth</td>
                        </tr>
                        <tr class="hover:bg-orange-50/50 transition-colors">
                            <td class="p-6 font-bold text-stone-500 uppercase text-xs">Key Driver</td>
                            <td class="p-6 text-center text-stone-600 font-medium">Food Demand + Retail</td>
                            <td class="p-6 text-center text-stone-600 font-medium">Agriculture Base + Consumption</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-12">
                <div class="p-10 bg-stone-900 rounded-3xl text-white">
                    <h3 class="text-3xl font-black mb-8 uppercase italic border-b border-orange-600 pb-4">Global Outlook</h3>
                    <ul class="space-y-6">
                        @foreach([
                            'Increased automation in food manufacturing',
                            'Rising demand for plant-based and health foods',
                            'Expansion of sustainable and smart packaging',
                            'Strong investment in traceability and food-tech'
                        ] as $item)
                        <li class="flex items-center gap-4 text-sm font-bold uppercase tracking-tight text-orange-100">
                             <i class="fa-solid fa-circle-nodes text-orange-500 text-xl"></i> {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="p-10 bg-orange-50 rounded-3xl border border-orange-200">
                    <h3 class="text-3xl font-black mb-8 uppercase italic border-b border-orange-200 pb-4 text-orange-900">India Outlook</h3>
                    <ul class="space-y-6">
                        @foreach([
                            'Rapid growth in packaged & ready-to-eat segments',
                            'Strong export expansion in processed foods',
                            'Increased FDI and private equity investments',
                            'Rise in food-tech startups and processing clusters'
                        ] as $item)
                        <li class="flex items-center gap-4 text-sm font-bold uppercase tracking-tight text-orange-700">
                             <i class="fa-solid fa-arrow-trend-up text-xl"></i> {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- SEGMENTS GRID -->
            <div class="space-y-8">
                <h2 class="text-3xl font-black text-stone-900 uppercase italic text-center">Major Industry Segments</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach(['Dairy Processing', 'Fruits & Vegetables', 'Grain Milling & Cereals', 'Packaged Foods & Snacks', 'Beverage Manufacturing', 'Cold Storage & Logistics'] as $segm)
                    <div class="p-8 bg-white border border-stone-200 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all text-center">
                        <p class="text-xs font-black uppercase text-stone-400 mb-2">Category</p>
                        <p class="font-bold text-orange-900">{{ $segm }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h2 class="text-3xl font-extrabold text-stone-900 uppercase tracking-tight">Strategic Importance</h2>
                    <div class="space-y-4">
                        @foreach([
                            'Reduces post-harvest agricultural losses',
                            'Enhances farmer income and rural employment',
                            'Supports food security and exports',
                            'Boosts industrialization of agriculture',
                            'Drives value-added manufacturing demand'
                        ] as $imp)
                        <div class="flex items-center gap-4 p-4 bg-orange-50 border border-orange-100 rounded-2xl group hover:bg-orange-600 transition-colors">
                            <i class="fa-solid fa-check text-orange-600 group-hover:text-white"></i>
                            <span class="text-sm font-bold text-stone-700 uppercase group-hover:text-white">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-10 bg-orange-900 rounded-3xl text-white relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent"></div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black mb-6 uppercase italic text-orange-400">The Power of Agri-Tech</h4>
                        <p class="text-orange-100 leading-relaxed text-sm font-medium mb-8">
                            Agro and Food Processing is a strategic pillar of economic growth, connecting agriculture with manufacturing and retail. With strong policy support, India is set to become one of the largest agro-processing hubs globally.
                        </p>
                        <div class="flex items-center gap-4">
                             <div class="w-12 h-1 bg-orange-400"></div>
                             <p class="text-[10px] font-black uppercase tracking-widest">Sustainability & Quality First</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-orange-950 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-orange-500">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(249,115,22,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Drive the Agro-Manufacturing Revolution</h3>
                    <p class="text-xl text-orange-100 max-w-4xl mx-auto leading-relaxed mb-10">
                        Maximize agricultural value and optimize food supply chains. Join the mission to build world-class food processing clusters and advanced cold chain logistics.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-orange-900 font-black uppercase tracking-widest rounded-full hover:bg-orange-500 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Agro Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-orange-500"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
