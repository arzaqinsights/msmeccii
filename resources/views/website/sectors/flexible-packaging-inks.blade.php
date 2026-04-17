@extends('layouts.website')

@section('title', 'Flexible Packaging Inks Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-pink-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/packaging-inks-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Flexible Packaging <span class="text-pink-500">Inks</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Bringing color and life to modern packaging through high-performance ink technology.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">What are Flexible Packaging Inks?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Flexible Packaging Inks</strong> are specially formulated printing inks used for plastic films, laminates, and pouches.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        These inks provide vibrant graphics and branding visibility while maintaining resistance to heat, moisture, and chemicals—essential for food, pharmaceutical, and FMCG sectors.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-pink-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/packaging-inks-details.png') }}" alt="Packaging Inks Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
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
                            <span class="text-xl font-black text-white">$26 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2033)</span>
                            <span class="text-xl font-black text-white">$35 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-pink-400">5% – 7%</span>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <h4 class="font-semibold mb-4 text-slate-400 uppercase tracking-wider text-xs">Primary Region</h4>
                        <div class="flex items-center gap-2 px-4 py-2 bg-white/5 rounded-full border border-white/10 text-sm font-bold w-fit">
                            <i class="fa-solid fa-map-pin text-pink-500"></i> Asia-Pacific (Largest & Fastest)
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-pink-100 rounded-xl text-pink-600">
                            <i class="fa-solid fa-ink-roller text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Market value (2025)</p>
                            <p class="text-xl font-black text-pink-700">$1.5B+</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Projected CAGR</p>
                            <p class="text-xl font-black text-pink-700">9% - 11%</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase italic">Organized Mfgrs</span>
                            <span class="text-sm font-black text-slate-800">150+ Companies</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase italic">Status</span>
                            <span class="text-sm font-black text-pink-600 uppercase">High Export Demand</span>
                        </div>
                    </div>
                </div>

            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-pink-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-pink-600 text-3xl font-black group-hover:scale-110 transition-transform">3000+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Mfgrs</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-pink-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-pink-600 text-3xl font-black group-hover:scale-110 transition-transform">$30B+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Demand (2031)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-pink-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-pink-600 text-3xl font-black group-hover:scale-110 transition-transform">TOP 4</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India Global Rank</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-pink-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-pink-600 text-3xl font-black group-hover:scale-110 transition-transform">11%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India CAGR</div>
                </div>
            </div>

            <!-- MANUFACTURING HUBS -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(236,72,153,0.05),transparent)]"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 uppercase italic">Global Position</h3>
                        <p class="text-slate-400 leading-relaxed mb-8">
                            India is among the fastest-growing packaging ink consumption markets, with increasing domestic manufacturing of Gravure, Flexographic, and UV inks.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach(['USA', 'Germany', 'China', 'India', 'Japan', 'Italy'] as $country)
                                <div class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg text-xs font-bold text-slate-300 text-center uppercase tracking-tighter">
                                    {{ $country }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-8 bg-pink-600 rounded-2xl shadow-xl">
                        <h4 class="text-xl font-bold mb-6 uppercase tracking-wider underline underline-offset-8 decoration-pink-300">Major Indian Hubs</h4>
                        <div class="grid grid-cols-2 gap-3 text-xs font-black uppercase">
                            @foreach(['Mumbai', 'Ahmedabad', 'Delhi NCR', 'Hyderabad', 'Chennai', 'Pune'] as $hub)
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-circle-dot text-[8px]"></i> {{ $hub }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="order-2 md:order-1 space-y-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Future Tech Opportunities</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $items = [
                                ['icon' => 'leaf', 'title' => 'Low Migration Food Inks'],
                                ['icon' => 'droplet', 'title' => 'Water-Based Sustainable Inks'],
                                ['icon' => 'bolt', 'title' => 'UV/LED Curable Inks'],
                                ['icon' => 'gem', 'title' => 'Metallic & Matte Finishes'],
                                ['icon' => 'print', 'title' => 'Digital Print Compatible'],
                                ['icon' => 'truck-fast', 'title' => 'High-Speed Printing Inks'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-pink-200 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-pink-100 text-pink-600 rounded-lg group-hover:bg-pink-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight uppercase italic tracking-tighter">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="order-1 md:order-2 p-8 bg-slate-100 rounded-3xl border border-slate-200 shadow-sm relative overflow-hidden text-center">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6 text-slate-900 uppercase italic">Branding & Appeal</h3>
                        <p class="text-slate-500 leading-relaxed font-medium mb-8">
                            Modern packaging aesthetics rely on vibrant graphics for shelf appeal and consumer communication. Specialty inks enable premium presentation and regulatory compliance.
                        </p>
                        <div class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-slate-200 text-pink-600 font-black rounded-full shadow-sm uppercase tracking-widest text-xs">
                            <i class="fa-solid fa-star"></i> Enabling Packaging Excellence
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-pink-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(236,72,153,0.05),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">The Future of Packaging Inks</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Flexible packaging inks are essential to value-added packaging. As demand for sustainable and high-performance inks rises, MSMECCII supports manufacturers in adopting next-gen ink technologies for global markets.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-pink-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-slate-900 transition-all duration-300 shadow-xl group">
                        Explore Specialty Inks <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
