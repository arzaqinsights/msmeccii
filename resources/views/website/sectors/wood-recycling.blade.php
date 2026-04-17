@extends('layouts.website')

@section('title', 'Wood Recycling Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/wood-recycling-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Wood <span class="text-amber-500">Recycling</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Transforming timber waste into sustainable resources for a greener manufacturing future.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase italic tracking-tight">Forest Conservation Through Reuse</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Wood recycling</strong> is the process of collecting and reprocessing waste wood from construction, demolition, and furniture manufacturing into reusable industrial products.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        By converting wood waste into particle boards, mulch, and biomass fuel, this industry helps reduce landfill waste, lowers carbon emissions, and significantly minimizes the pressure on global forests.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-amber-600 to-amber-700 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/wood-recycling-hero.png') }}" alt="Wood Recycling Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl transition-all duration-700">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl text-amber-500">
                            <i class="fa-solid fa-earth-americas text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$20 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2033)</span>
                            <span class="text-xl font-black text-white">$30 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-amber-400">6% – 8%</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-[10px] text-slate-500 uppercase font-black tracking-widest leading-loosely">Rising sustainability mandates are driving global wood waste recovery investments.</p>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-amber-100 rounded-xl text-amber-600">
                            <i class="fa-solid fa-tree text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Growth Status</p>
                            <p class="text-xl font-black text-amber-700 uppercase">Emerging</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Projected CAGR</p>
                            <p class="text-xl font-black text-amber-700">12% - 15%</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Organized Players</span>
                            <span class="text-sm font-black text-slate-800">500+ Entities</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase italic">Primary Source</span>
                            <span class="text-sm font-black text-amber-600 uppercase">C&D Waste</span>
                        </div>
                    </div>
                </div>

            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-2 text-amber-600 text-3xl font-black group-hover:scale-110 transition-transform">20K+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Reprocessors</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-2 text-amber-600 text-3xl font-black group-hover:scale-110 transition-transform">$25B+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Demand (2031)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-2 text-amber-600 text-3xl font-black group-hover:scale-110 transition-transform">Millions</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Tons Waste (India)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-2 text-amber-600 text-3xl font-black group-hover:scale-110 transition-transform">LOW</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Carbon Footprint</div>
                </div>
            </div>

            <!-- HUB SECTION -->
            <div class="p-10 rounded-3xl bg-slate-100 border border-slate-200 relative overflow-hidden">
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 uppercase text-slate-900 italic">India's Recycling Hubs</h3>
                        <p class="text-slate-600 leading-relaxed mb-6 font-medium">
                            The demand for recycled wood is rapidly growing in organized sectors, particularly for plywood, MDF, and biomass energy applications.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Delhi NCR', 'Mumbai', 'Bengaluru', 'Pune', 'Ahmedabad', 'Chennai'] as $hub)
                                <span class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-600 shadow-sm">{{ $hub }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                         <div class="p-6 bg-white rounded-2xl border border-slate-200 text-center flex flex-col justify-center">
                            <i class="fa-solid fa-couch text-2xl text-amber-400 mb-2"></i>
                            <p class="text-[10px] font-black uppercase text-slate-400 mb-1">Key Segment</p>
                            <p class="text-sm font-bold text-slate-900">Furniture & Boards</p>
                         </div>
                         <div class="p-6 bg-white rounded-2xl border border-slate-200 text-center flex flex-col justify-center">
                            <i class="fa-solid fa-fire text-2xl text-amber-400 mb-2"></i>
                            <p class="text-[10px] font-black uppercase text-slate-400 mb-1">High Demand</p>
                            <p class="text-sm font-bold text-slate-900">Biomass Energy</p>
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
                                ['icon' => 'bolt', 'title' => 'Biomass Fuel / Pellets'],
                                ['icon' => 'layer-group', 'title' => 'Recycled Particle Boards'],
                                ['icon' => 'boxes-stacked', 'title' => 'Pallet Refurbishment'],
                                ['icon' => 'couch', 'title' => 'Sustainable Furniture'],
                                ['icon' => 'hammer', 'title' => 'Green Construction Mats'],
                                ['icon' => 'fire-flame-curved', 'title' => 'Waste-to-Energy'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-amber-200 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-amber-100 text-amber-600 rounded-lg group-hover:bg-amber-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight uppercase font-serif italic tracking-tighter">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-900 rounded-3xl text-white relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 via-transparent to-transparent opacity-50"></div>
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6 italic text-amber-400 uppercase">Circular Value</h3>
                        <p class="text-slate-300 leading-relaxed mb-8 font-medium">
                            Wood recycling reduces deforestation and creates sustainable alternatives for industrial applications. As global industries move toward greener manufacturing, wood recovery is vital.
                        </p>
                        <div class="flex items-center gap-4">
                             <div class="w-12 h-1 bg-amber-500"></div>
                             <p class="text-xs uppercase font-black tracking-widest text-slate-500">RESILIENT RECOVERY</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-amber-600">
                <div class="absolute inset-x-0 bottom-0 top-0 bg-[radial-gradient(circle_at_center,rgba(245,158,11,0.05),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight leading-tighter">Timber for the Tomorrow</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10 italic">
                        The woodworking industry is evolving. Discover how recycling wood waste can improve your ESG score while providing cost-effective raw materials for furniture and construction.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-amber-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-slate-900 transition-all duration-300 shadow-xl group">
                        Register for Wood Recovery <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-slate-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
