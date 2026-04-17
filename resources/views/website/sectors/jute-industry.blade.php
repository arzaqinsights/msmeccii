@extends('layouts.website')

@section('title', 'Jute Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/rice.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Jute Industry
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Empowering the future through the "Golden Fiber"—the world's most sustainable and versatile natural
                material.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is Jute?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Jute</strong> is a natural, soft, and shiny fiber popularly known as the <strong>"Golden
                            Fiber"</strong> due to its golden-brown color and immense economic value.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It is one of the most affordable and eco-friendly natural fibers in the world. Fully biodegradable
                        and renewable, jute is used globally for high-strength packaging, sustainable fashion, industrial
                        geotextiles, and modern home décor.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-yellow-600 to-amber-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000">
                    </div>
                    <img src="{{ asset('images/sectors/rice.png') }}" alt="Jute Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div
                    class="p-8 rounded-3xl bg-gradient-to-br from-yellow-800 to-amber-950 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-leaf text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <ul class="space-y-4 text-yellow-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 3.0 Billion</span>
                            <span class="text-yellow-200">(2025 Market Value)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 5.2 Billion</span>
                            <span class="text-yellow-200">(2033–35 Projection)</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-sm text-yellow-200/80 leading-relaxed">Asia-Pacific dominates the global industry
                        with <span class="text-white font-bold">~39.5%+ share</span>, led by traditional manufacturing hubs.
                    </p>

                    <h4 class="font-semibold mt-8 mb-4 text-yellow-300 uppercase tracking-wider text-sm">Demand Drivers</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="text-[10px] uppercase font-bold text-yellow-100 flex items-center gap-2">
                            <i class="fa-solid fa-ban text-yellow-400"></i> Plastic Bans
                        </div>
                        <div class="text-[10px] uppercase font-bold text-yellow-100 flex items-center gap-2">
                            <i class="fa-solid fa-box text-yellow-400"></i> Sustainable Packing
                        </div>
                        <div class="text-[10px] uppercase font-bold text-yellow-100 flex items-center gap-2">
                            <i class="fa-solid fa-shirt text-yellow-400"></i> Eco-Fashion
                        </div>
                        <div class="text-[10px] uppercase font-bold text-yellow-100 flex items-center gap-2">
                            <i class="fa-solid fa-seedling text-yellow-400"></i> Agriculture
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div
                    class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-yellow-100 rounded-xl text-yellow-600">
                            <i class="fa-solid fa-flag text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>
                    <p class="text-slate-600 mb-6 font-medium">India is the <strong>largest producer of jute
                            globally</strong>, contributing nearly <span class="text-yellow-600 font-black">60% of world raw
                            jute supply</span>.</p>

                    <h4 class="font-semibold mb-4 text-yellow-600 uppercase tracking-wider text-sm">Major Producing States
                    </h4>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(['West Bengal', 'Bihar', 'Assam', 'Odisha', 'Meghalaya'] as $state)
                            <span
                                class="px-3 py-1 bg-white border border-slate-200 text-slate-600 text-xs font-bold rounded-full transition-all duration-300 hover:border-yellow-400 hover:text-yellow-600">{{ $state }}</span>
                        @endforeach
                    </div>

                    <div class="p-4 bg-yellow-50 rounded-2xl border border-yellow-100">
                        <p class="text-[10px] font-black text-yellow-700 uppercase mb-1">Export Performance (2024-25)</p>
                        <p class="text-xl font-black text-slate-800">USD 1.04 Billion</p>
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div
                    class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-yellow-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-yellow-600 text-3xl font-black group-hover:scale-110 transition-transform">~7.3%
                    </div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India CAGR</div>
                </div>
                <div
                    class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-yellow-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-yellow-600 text-3xl font-black group-hover:scale-110 transition-transform">60%
                    </div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Output Share</div>
                </div>
                <div
                    class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-yellow-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-yellow-600 text-3xl font-black group-hover:scale-110 transition-transform">80
                        major</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Jute Mills in India</div>
                </div>
                <div
                    class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-yellow-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-yellow-600 text-3xl font-black group-hover:scale-110 transition-transform">90%+
                    </div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India-BD Global Output
                    </div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/handicraft.webp') }}" alt="Jute Industry Opportunities"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl">
                    <div
                        class="absolute -bottom-6 -right-6 p-6 bg-yellow-600 text-white rounded-2xl shadow-2xl hidden md:block">
                        <p class="text-3xl font-bold">#1</p>
                        <p class="text-sm opacity-80 uppercase tracking-widest">Global Raw Jute Producer</p>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Emerging Opportunities</h2>
                    <div class="grid gap-4">
                        @php
                            $opportunities = [
                                ['icon' => 'bag-shopping', 'title' => 'Eco-Friendly Packaging Bags'],
                                ['icon' => 'bullhorn', 'title' => 'Promotional Jute Bags'],
                                ['icon' => 'bridge', 'title' => 'Geotextiles for Infrastructure'],
                                ['icon' => 'car', 'title' => 'Automotive Jute Composites'],
                                ['icon' => 'vest', 'title' => 'Sustainable Fashion & Lifestyle'],
                                ['icon' => 'couch', 'title' => 'Home Furnishing & Interior'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                            <div
                                class="flex items-center gap-4 p-4 rounded-xl border border-slate-100 hover:bg-yellow-50 hover:border-yellow-200 hover:shadow-sm transition-all group">
                                <div
                                    class="w-12 h-12 flex items-center justify-center bg-yellow-100 text-yellow-600 rounded-lg group-hover:bg-yellow-600 group-hover:text-white transition-colors">
                                    <i class="fa-solid fa-{{ $item['icon'] }}"></i>
                                </div>
                                <span class="font-bold text-slate-700 text-lg">{{ $item['title'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- GLOBAL RECOGNITION -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute top-0 right-0 w-80 h-80 bg-yellow-500/5 rounded-full blur-3xl -mr-40 -mt-40"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4">India's Global Standing</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India stands as a global leader in the "Golden Fiber" industry, providing sustainable
                            alternatives to plastic and supporting the livelihoods of millions.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-sm font-bold text-yellow-500">
                                <i class="fa-solid fa-circle-check text-[10px]"></i> #1 Producer of Raw Jute Worldwide
                            </li>
                            <li class="flex items-center gap-3 text-sm font-bold text-yellow-500">
                                <i class="fa-solid fa-circle-check text-[10px]"></i> #1 Exporter in Sacks & Fiber Categories
                            </li>
                        </ul>
                    </div>
                    <div class="p-10 bg-yellow-600 rounded-[3rem] text-center shadow-xl border-4 border-white/10">
                        <i class="fa-solid fa-recycle text-5xl mb-6 text-white"></i>
                        <h4 class="text-3xl font-black mb-2 uppercase text-white">Sustainability</h4>
                        <p class="text-sm text-yellow-50">Leading the world's transition to a plastic-free future.</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div
                class="bg-gradient-to-br from-yellow-600 to-amber-700 text-white p-12 rounded-3xl text-center shadow-2xl relative overflow-hidden group">
                <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-500"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Why Jute Industry Matters</h3>
                    <p class="text-xl text-yellow-50 max-w-4xl mx-auto leading-relaxed">
                        Jute is one of the most sustainable fibers in the world, offering biodegradability and a low carbon
                        footprint. As we shift toward green manufacturing, jute is becoming a critical material in the
                        future of global exports and packaging.
                    </p>
                    <div class="mt-8">
                        <a href=""
                            class="inline-flex items-center gap-2 px-10 py-5 bg-white text-yellow-700 font-black uppercase tracking-widest rounded-full hover:bg-slate-900 hover:text-white transition-all duration-300 shadow-xl">
                            Support Green Manufacturing <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection