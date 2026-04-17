@extends('layouts.website')

@section('title', 'Flexible Packaging Adhesives Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/packaging-adhesives-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Flexible Packaging <span class="text-amber-500">Adhesives</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                The invisible strength behind multilayer high-performance packaging structures.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">What are Packaging Adhesives?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Flexible Packaging Adhesives</strong> are specialized bonding materials used in manufacturing multilayer structures like laminates and pouches.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        These adhesives bond materials like plastic films, foil, and paper to create durable, lightweight packaging for food, pharmaceuticals, and FMCG sectors, ensuring barrier protection and shelf-life enhancement.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-amber-600 to-orange-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/packaging-adhesives-hero.png') }}" alt="Packaging Adhesives Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl transition-transform duration-700 group-hover:scale-[1.02]">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-earth-americas text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$8 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2033)</span>
                            <span class="text-xl font-black text-white">$12 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-amber-400">6% – 8%</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-xs text-slate-500 italic">Asia-Pacific dominates the market due to rapid packaging manufacturing growth.</p>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-amber-100 rounded-xl text-amber-600">
                            <i class="fa-solid fa-fill-drip text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Market value (2025)</p>
                            <p class="text-xl font-black text-amber-700">$1B+</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Projected CAGR</p>
                            <p class="text-xl font-black text-amber-700">12%</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Organized Manufacturers</span>
                            <span class="text-sm font-black text-slate-800">200+ Companies</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Ancillary Players</span>
                            <span class="text-sm font-black text-amber-600 uppercase">5000+ Converters</span>
                        </div>
                    </div>
                </div>

            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-amber-600 text-3xl font-black group-hover:scale-110 transition-transform">5000+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Mfgrs</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-amber-600 text-3xl font-black group-hover:scale-110 transition-transform">$10B+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Demand (2031)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-amber-600 text-3xl font-black group-hover:scale-110 transition-transform">6%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global CAGR</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-amber-600 text-3xl font-black group-hover:scale-110 transition-transform">Hub</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India Position</div>
                </div>
            </div>

            <!-- MANUFACTURING HUBS -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(245,158,11,0.05),transparent)]"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 uppercase italic">Global Position</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India is among the fastest-growing packaging materials markets, emerging as a major manufacturing hub for films, adhesives, and laminates.
                        </p>
                        <div class="flex flex-wrap gap-2 text-[10px] font-black uppercase text-slate-400">
                             Major Producers: USA, China, Germany, India, Japan, South Korea
                        </div>
                    </div>
                    <div class="p-8 bg-amber-600 rounded-2xl shadow-xl">
                        <h4 class="text-xl font-bold mb-6 uppercase tracking-wider underline underline-offset-8 decoration-amber-300">Indian Manufacturing Hubs</h4>
                        <div class="grid grid-cols-3 gap-3 text-[10px] font-black uppercase">
                            @foreach(['Mumbai', 'Ahmedabad', 'Delhi NCR', 'Hyderabad', 'Pune', 'Chennai'] as $hub)
                                <div class="p-2 bg-white/10 rounded-lg border border-white/10 text-center">
                                    {{ $hub }}
                                </div>
                            @endforeach
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
                                ['icon' => 'ban', 'title' => 'Solvent-Free Adhesives'],
                                ['icon' => 'droplet', 'title' => 'Water-Based Adhesives'],
                                ['icon' => 'shield', 'title' => 'High Barrier Lamination'],
                                ['icon' => 'temperature-high', 'title' => 'Retort Packaging'],
                                ['icon' => 'leaf', 'title' => 'Bio-Based Adhesives'],
                                ['icon' => 'bolt', 'title' => 'High-Speed Line Adhesives'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-amber-200 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-amber-100 text-amber-600 rounded-lg group-hover:bg-amber-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight uppercase italic tracking-tighter">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-900 rounded-3xl text-white relative overflow-hidden">
                    <h3 class="text-2xl font-bold mb-6 italic text-amber-400">Why Adhesives Matter</h3>
                    <p class="text-slate-300 leading-relaxed mb-6">
                        Flexible packaging adhesives enable strength, barrier protection, durability, and shelf-life enhancement. As demand for lightweight and sustainable packaging increases, these bonding materials are critical to innovation.
                    </p>
                    <div class="flex items-center gap-4 text-xs font-black uppercase tracking-widest">
                        <span class="px-4 py-2 bg-amber-500 text-black rounded-lg">Performance</span>
                        <span class="px-4 py-2 bg-slate-700 text-white rounded-lg">Sustainability</span>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-amber-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(245,158,11,0.05),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Bonding the Future</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Adhesives are the invisible strength of the packaging industry. MSMECCII facilitates industry transition towards solvent-free and water-based sustainable bonding solutions.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-amber-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-slate-900 transition-all duration-300 shadow-xl group">
                        Discover Sustainable Adhesives <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
