@extends('layouts.website')

@section('title', 'Aluminium Recycling Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-700 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/non-ferrous-scrap-recycling.jpeg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Aluminium <span class="text-slate-400">Recycling</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                One of the most sustainable metals in the world—infinitely recyclable without loss of quality.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase italic">Circular Metal Economy</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Aluminium recycling</strong> is the process of collecting and melting scrap aluminium from beverage cans, automotive parts, and industrial waste to create new products.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        Recycling aluminium saves up to <strong>95% of the energy</strong> required for primary production and reduces carbon emissions significantly, making it a cornerstone of modern circular economy strategies.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-slate-400 to-slate-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/non-ferrous-scrap-recycling.jpeg') }}" alt="Aluminium Recycling Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl grayscale hover:grayscale-0 transition-all duration-700">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl text-slate-400">
                            <i class="fa-solid fa-earth-europe text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$100 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2033)</span>
                            <span class="text-xl font-black text-white">$140 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-slate-400">6% – 8%</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-[10px] text-slate-500 uppercase font-black tracking-widest">More than 75% of all aluminium ever produced is still in use today.</p>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-slate-200 rounded-xl text-slate-600">
                            <i class="fa-solid fa-recycle text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Market value (Annual)</p>
                            <p class="text-xl font-black text-slate-700">$15B+</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Annual Consumption</p>
                            <p class="text-xl font-black text-slate-700">4M Tons</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Projected CAGR</span>
                            <span class="text-sm font-black text-slate-800">10% - 12%</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase italic">Organized Recyclers</span>
                            <span class="text-sm font-black text-slate-600">1,500+ Entities</span>
                        </div>
                    </div>
                </div>

            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-2 text-slate-600 text-3xl font-black group-hover:scale-110 transition-transform">95%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Energy Saved vs Primary</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-2 text-slate-600 text-3xl font-black group-hover:scale-110 transition-transform">$120B+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Market (2031)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-2 text-slate-600 text-3xl font-black group-hover:scale-110 transition-transform">TOP 5</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Consumer Rank</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-2 text-slate-600 text-3xl font-black group-hover:scale-110 transition-transform">25K+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Businesses</div>
                </div>
            </div>

            <!-- HUB SECTION -->
            <div class="p-10 rounded-3xl bg-slate-100 border border-slate-200 relative overflow-hidden">
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 uppercase text-slate-900 italic">India's Scrap Hubs</h3>
                        <p class="text-slate-600 leading-relaxed mb-6 font-medium">
                            India is emerging as a major market for secondary aluminium manufacturing, with rising domestic demand from auto and EV sectors.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Gujarat', 'Maharashtra', 'Delhi NCR', 'Tamil Nadu', 'Karnataka'] as $hub)
                                <span class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-600 shadow-sm">{{ $hub }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                         <div class="p-6 bg-white rounded-2xl border border-slate-200 text-center flex flex-col justify-center">
                            <i class="fa-solid fa-car text-2xl text-slate-400 mb-2"></i>
                            <p class="text-[10px] font-black uppercase text-slate-400 mb-1">Heavy Demand</p>
                            <p class="text-sm font-bold text-slate-900">Automotive & EV</p>
                         </div>
                         <div class="p-6 bg-white rounded-2xl border border-slate-200 text-center flex flex-col justify-center">
                            <i class="fa-solid fa-beer-mug-empty text-2xl text-slate-400 mb-2"></i>
                            <p class="text-[10px] font-black uppercase text-slate-400 mb-1">Rising Trend</p>
                            <p class="text-sm font-bold text-slate-900">Beverage Cans</p>
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
                                ['icon' => 'beer-mug-empty', 'title' => 'Beverage Can Recycling'],
                                ['icon' => 'car-side', 'title' => 'Automotive Scrap Recovery'],
                                ['icon' => 'cube', 'title' => 'Secondary Ingot Production'],
                                ['icon' => 'box-open', 'title' => 'Sustainable Packaging Meta'],
                                ['icon' => 'building', 'title' => 'Green Building Supply'],
                                ['icon' => 'industry', 'title' => 'Industrial Scrap Solutions'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-slate-300 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-slate-200 text-slate-600 rounded-lg group-hover:bg-slate-900 group-hover:text-white transition-all">
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
                        <h3 class="text-2xl font-bold mb-6 italic text-slate-400 uppercase">Sustainability Matters</h3>
                        <p class="text-slate-300 leading-relaxed mb-8">
                            Aluminium recycling reduces mining costs and environmental impact. As demand for lightweight, sustainable materials increases, aluminium is the cornerstone of circular manufacturing.
                        </p>
                        <div class="flex items-center gap-4">
                             <div class="w-12 h-1 bg-slate-400"></div>
                             <p class="text-xs uppercase font-black tracking-widest text-slate-500">INFINITELY RECYCLABLE</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-slate-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(148,163,184,0.05),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">The Future is Secondary Aluminium</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Join the circular economy transition. Explore secondary aluminium production, scrap aggregation, and industrial recycling solutions to build a cleaner manufacturing future.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-slate-900 font-black uppercase tracking-widest rounded-full hover:bg-slate-200 transition-all duration-300 shadow-xl group">
                        Register for Recycling Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-slate-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
