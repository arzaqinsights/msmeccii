@extends('layouts.website')

@section('title', 'Tourism Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-sky-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-sky-900 via-blue-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/tourism-industry.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Tourism <span class="text-sky-400">Industry</span>
            </h1>
            <p class="text-xl md:text-2xl text-sky-100 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                Connecting Cultures, Economies, and Experiences Across the Globe.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS TOURISM -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-sky-900 uppercase italic">Cultural Diplomacy</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Tourism</strong> is one of the world's most influential economic sectors, driving cultural exchange, employment generation, and international connectivity.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        As a major contributor to global GDP, tourism supports a broad ecosystem of industries including hospitality, aviation, travel technology, and local commerce, redefining how people explore the world.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $segments = [
                            ['icon' => 'umbrella-beach', 'label' => 'Leisure & Holiday'],
                            ['icon' => 'briefcase', 'label' => 'Business & Corporate'],
                            ['icon' => 'heart-pulse', 'label' => 'Medical & Wellness'],
                            ['icon' => 'mountain-sun', 'label' => 'Adventure & Eco'],
                        ];
                    @endphp
                    @foreach($segments as $p)
                        <div class="p-6 bg-sky-50 border border-sky-100 rounded-2xl text-center group hover:bg-sky-950 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $p['icon'] }} text-3xl mb-3 text-sky-500 group-hover:text-sky-400"></i>
                            <p class="text-[10px] font-black uppercase tracking-tight">{{ $p['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- GLOBAL MARKET LANDSCAPE -->
            <div class="p-10 rounded-3xl bg-sky-950 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-black mb-6 uppercase italic tracking-widest text-sky-400">Global Snapshot</h3>
                        <p class="text-sky-200 mb-8 leading-relaxed italic">Tourism continues to be one of the largest and most resilient global industries, fueled by urbanization and globalization.</p>
                        
                        <div class="space-y-4">
                            @foreach([
                                'Rising International Travel Demand',
                                'Budget Airlines & Connectivity Growth',
                                'Digital Booking & TravelTech Platforms',
                                'Expansion of Luxury Tourism'
                            ] as $driver)
                                <div class="flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-sky-400"></div>
                                    <span class="text-xs font-bold uppercase text-sky-200">{{ $driver }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center transform hover:scale-105 transition-transform">
                            <p class="text-[10px] font-black uppercase text-sky-500 mb-2">Market (2025)</p>
                            <p class="text-3xl font-black text-white">$11T+</p>
                        </div>
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center transform hover:scale-105 transition-transform">
                            <p class="text-[10px] font-black uppercase text-sky-500 mb-2">Projected (2031)</p>
                            <p class="text-3xl font-black text-sky-400">$16T+</p>
                        </div>
                        <div class="col-span-2 p-4 bg-sky-500/10 border border-sky-500/20 rounded-xl text-center">
                             <p class="text-sm font-black uppercase tracking-widest">6% - 8% Annual CAGR</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-10">
                    <h3 class="text-3xl font-black uppercase text-slate-900 italic border-l-8 border-sky-900 pl-6">India's Rising Appeal</h3>
                    <p class="text-slate-600 leading-relaxed font-serif">India is among the fastest-growing tourism destinations globally, leveraging its natural landscapes, spiritual diversity, and medical leadership.</p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="p-6 bg-sky-50 rounded-3xl border border-sky-100 shadow-sm relative overflow-hidden group">
                            <div class="absolute inset-0 bg-sky-500/5 group-hover:scale-110 transition-transform"></div>
                            <p class="relative z-10 text-[10px] font-black uppercase text-sky-400 mb-1">Market 2025</p>
                            <p class="relative z-10 text-2xl font-black text-slate-900">$280B+</p>
                        </div>
                        <div class="p-6 bg-sky-900 text-white rounded-3xl border border-sky-800 shadow-sm relative overflow-hidden group">
                            <i class="fa-solid fa-plane-up absolute -right-4 -bottom-4 text-7xl opacity-10 group-hover:translate-x-2 group-hover:-translate-y-2 transition-transform"></i>
                            <p class="relative z-10 text-[10px] font-black uppercase text-sky-400 mb-1">Projected 2031</p>
                            <p class="relative z-10 text-2xl font-black">$500B+</p>
                        </div>
                    </div>

                    <div class="bg-slate-50 p-6 rounded-3xl border border-slate-200">
                        <h4 class="text-xs font-black uppercase text-slate-400 mb-4 tracking-widest">India Growth Catalysts</h4>
                        <div class="flex flex-wrap gap-2">
                             @foreach(['Incredible India Campaigns', 'Domestic Air Connectivity', 'Medical Tourism Leadership', 'Heritage Tourism Growth', 'Luxury Hospitality'] as $tag)
                                <span class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-[10px] font-bold uppercase text-slate-600 shadow-sm">{{ $tag }}</span>
                             @endforeach
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['label' => 'Hospitality Units', 'val' => '50,000+'],
                        ['label' => 'Global Hubs', 'val' => 'Top 10'],
                        ['label' => 'Growth Rate', 'val' => '11% CAGR'],
                        ['label' => 'Active MSMEs', 'val' => '25,000+']
                    ] as $stat)
                        <div class="p-8 bg-white border border-slate-100 rounded-3xl text-center shadow-xl hover:-translate-y-2 transition-all">
                             <p class="text-[10px] font-black uppercase text-sky-400 mb-2">{{ $stat['label'] }}</p>
                             <p class="text-2xl font-black text-slate-900">{{ $stat['val'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- EMERGING TRENDS -->
            <div class="p-12 rounded-[50px] bg-slate-50 border border-slate-200 shadow-inner">
                <h3 class="text-3xl font-black mb-12 text-center uppercase italic tracking-tighter">Fastest-Growing Segments</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach([
                        ['icon' => 'leaf', 'title' => 'Eco Tourism'],
                        ['icon' => 'spa', 'title' => 'Wellness Retreats'],
                        ['icon' => 'gem', 'title' => 'Luxury Experiences'],
                        ['icon' => 'building-columns', 'title' => 'Cultural Tourism'],
                        ['icon' => 'handshake', 'title' => 'MICE Events'],
                        ['icon' => 'mobile-screen-button', 'title' => 'TravelTech']
                    ] as $trend)
                        <div class="p-8 bg-white border border-slate-200 rounded-[30px] text-center group hover:bg-sky-900 transition-all duration-500">
                             <div class="w-12 h-12 bg-sky-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-sky-500 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $trend['icon'] }} text-xl text-sky-500 group-hover:text-white"></i>
                             </div>
                             <p class="text-xs font-black uppercase text-slate-600 group-hover:text-white transition-colors">{{ $trend['title'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="p-8 bg-sky-950 rounded-[40px] text-white relative group overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 bg-blue-500/5"></div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black mb-6 uppercase italic text-sky-400">Future of Exploration</h4>
                        <p class="text-sky-100 leading-relaxed text-sm font-medium mb-8">
                            Technology-driven planning, eco-conscious travel, and immersive experiential journeys will redefine how people explore destinations. India is expected to leverage its diversity to emerge as a global leader.
                        </p>
                        <ul class="space-y-3">
                            @foreach([
                                'Employment Generation (Massive scale)',
                                'Foreign Exchange Earnings booster',
                                'MSME & Local Economy support',
                                'Cultural Preservation & Branding'
                            ] as $imp)
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-circle-check text-sky-500"></i>
                                    <span class="text-[11px] font-black uppercase tracking-tight text-sky-200">{{ $imp }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="space-y-8">
                    <h2 class="text-4xl font-black text-slate-900 uppercase tracking-tight italic">Economic Catalyst</h2>
                    <p class="text-slate-600 leading-relaxed font-medium capitalize">Tourism is more than travel—it is a catalyst for economic prosperity, cultural diplomacy, and social development across nations.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-6 bg-slate-900 text-white rounded-3xl text-center">
                            <p class="text-[10px] font-black uppercase text-sky-400 mb-1">Global Scale</p>
                            <p class="text-sm font-bold">11T+ Global Ecosystem</p>
                        </div>
                        <div class="p-6 bg-slate-100 border border-slate-200 rounded-3xl text-center">
                            <p class="text-[10px] font-black uppercase text-slate-400 mb-1">India Scale</p>
                            <p class="text-sm font-bold text-slate-900">280B+ Industrial Base</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-sky-950 text-white p-12 md:p-16 rounded-[40px] text-center shadow-2xl overflow-hidden border-b-4 border-sky-500">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(6,182,212,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Lead the Travel Transformation</h3>
                    <p class="text-xl text-sky-200 max-w-4xl mx-auto leading-relaxed mb-10">
                        Capitalize on the global tourism expansion. Join the ecosystem of travel innovators, luxury hospitality providers, and eco-tourism pioneers to redefine the future of exploration.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-sky-900 font-black uppercase tracking-widest rounded-full hover:bg-sky-500 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Tourism Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-sky-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
