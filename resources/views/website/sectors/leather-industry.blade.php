@extends('layouts.website')

@section('title', 'Leather Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-stone-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/leather.webp') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Leather Industry
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Upholding craftsmanship and luxury through the timeless art of premium leather manufacturing.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is Leather Industry?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>leather industry</strong> is one of the world's oldest and most prestigious manufacturing sectors, transforming hides and skins into high-value durable goods.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Renowned for durability, flexibility, and luxury, finished leather is the primary material for premium footwear, handbags, automotive interiors, and upscale fashion accessories globally.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-stone-600 to-amber-900 rounded-2xl blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/leather.webp') }}" alt="Leather Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-stone-800 to-amber-950 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-earth-europe text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <ul class="space-y-4 text-stone-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 430 Billion</span> 
                            <span class="text-stone-300">(2026 Est. Market Value)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 648 Billion</span> 
                            <span class="text-stone-300">(2035 Projection)</span>
                        </li>
                    </ul>

                    <h4 class="font-semibold mt-8 mb-4 text-amber-300 uppercase tracking-wider text-sm">Growth Drivers</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-[11px] font-bold text-stone-100">
                            <i class="fa-solid fa-gem text-amber-400"></i> Luxury Fashion
                        </div>
                        <div class="flex items-center gap-2 text-[11px] font-bold text-stone-100">
                            <i class="fa-solid fa-car text-amber-400"></i> Automotive Interior
                        </div>
                        <div class="flex items-center gap-2 text-[11px] font-bold text-stone-100">
                            <i class="fa-solid fa-socks text-amber-400"></i> Premium Footwear
                        </div>
                        <div class="flex items-center gap-2 text-[11px] font-bold text-stone-100">
                            <i class="fa-solid fa-shop text-amber-400"></i> Global E-Commerce
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-stone-100 rounded-xl text-stone-600">
                            <i class="fa-solid fa-shield-halved text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>

                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="text-3xl font-black text-stone-700">$25B+</span>
                        <span class="text-xs font-bold text-slate-400 uppercase">Projected by 2030</span>
                    </div>

                    <h4 class="font-semibold mb-3 text-stone-600 uppercase tracking-wider text-sm">Manufacturing Hubs</h4>
                    <div class="grid grid-cols-3 gap-2 mb-6">
                        @foreach(['Kanpur', 'Agra', 'Chennai', 'Kolkata', 'Delhi', 'Mumbai'] as $hub)
                            <div class="px-2 py-1 bg-white border border-slate-200 text-[10px] font-bold text-slate-500 rounded text-center">{{ $hub }}</div>
                        @endforeach
                    </div>

                    <div class="p-4 bg-stone-900 text-white rounded-2xl flex items-center justify-between">
                        <div>
                            <p class="text-[10px] font-bold text-amber-400 uppercase">Employment</p>
                            <p class="text-xl font-black">5 Million+</p>
                        </div>
                        <i class="fa-solid fa-users text-2xl opacity-30"></i>
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-stone-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-stone-600 text-3xl font-black group-hover:scale-110 transition-transform">~7.7%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India CAGR</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-stone-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-stone-600 text-3xl font-black group-hover:scale-110 transition-transform">Top 5</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Producer Rank</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-stone-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-stone-600 text-3xl font-black group-hover:scale-110 transition-transform">20K+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Leather MSMEs</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-stone-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-stone-600 text-3xl font-black group-hover:scale-110 transition-transform">6%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Market Share</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/leather-details.jpg') }}" alt="Leather Details"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl border-8 border-slate-50">
                    <div class="absolute inset-0 rounded-3xl bg-amber-900/10 pointer-events-none"></div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Emerging Opportunities</h2>
                    <div class="space-y-3">
                        @php
                            $opportunities = [
                                ['icon' => 'vest', 'title' => 'Premium Leather Fashion Products'],
                                ['icon' => 'bag-shopping', 'title' => 'Luxury Handbags & Accessories'],
                                ['icon' => 'shoe-prints', 'title' => 'Footwear Manufacturing'],
                                ['icon' => 'car-seat', 'title' => 'Automotive Leather Upholstery'],
                                ['icon' => 'leaf', 'title' => 'Sustainable / Eco-Tanned Leather'],
                                ['icon' => 'recycle', 'title' => 'Vegan & Alternative Leather'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                            <div class="flex items-center gap-4 p-4 rounded-xl border border-slate-100 hover:bg-stone-50 hover:border-stone-200 transition-all group">
                                <div class="w-12 h-12 flex items-center justify-center bg-stone-100 text-stone-600 rounded-lg group-hover:bg-amber-900 group-hover:text-white transition-colors">
                                    <i class="fa-solid fa-{{ $item['icon'] }}"></i>
                                </div>
                                <span class="font-bold text-slate-700 text-lg">{{ $item['title'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- GLOBAL POSITION -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute bottom-0 left-0 w-80 h-80 bg-amber-500/5 rounded-full blur-3xl -ml-40 -mb-40"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4">India's Global Position</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India is among the Top 5 leather producers in the world, renowned for its footwear, saddlery, and garment manufacturing exports.
                        </p>
                        <div class="grid grid-cols-2 gap-x-6 gap-y-3">
                            @foreach(['Leather Footwear', 'Saddlery & Harness', 'Finished Leather', 'Leather Garments'] as $cat)
                                <div class="flex items-center gap-3 text-xs font-bold text-amber-500/80">
                                    <i class="fa-solid fa-check text-[8px]"></i> {{ $cat }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 bg-amber-500 blur-3xl opacity-10"></div>
                        <div class="relative bg-white/5 border border-white/10 p-8 rounded-full aspect-square flex flex-col items-center justify-center text-center">
                            <h4 class="text-4xl font-black text-amber-500">6%</h4>
                            <p class="text-[10px] uppercase font-bold tracking-widest text-slate-400">Global Share</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div class="bg-stone-900 text-white p-12 rounded-3xl text-center shadow-2xl relative overflow-hidden group border border-amber-900/30">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Why Leather Industry Matters</h3>
                    <p class="text-xl text-stone-300 max-w-4xl mx-auto leading-relaxed">
                        The leather industry is a crucial generator of employment and exports, sitting at the intersection of fashion, manufacturing, and luxury retail. Its role in the global value-added manufacturing ecosystem continues to grow with rising demand for premium goods.
                    </p>
                    <div class="mt-8">
                        <a href="" class="inline-flex items-center gap-2 px-10 py-5 bg-amber-700 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-stone-900 transition-all duration-300 shadow-xl">
                            Register with Leather Council <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
