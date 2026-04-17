@extends('layouts.website')

@section('title', 'Garments Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-rose-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/garments.webp') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Garments Industry
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Stitching the future of global fashion through innovative manufacturing and style.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is Garments Industry?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>garments industry</strong> (apparel industry) involves the design, manufacturing, and distribution of ready-made clothing for men, women, and children.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        From everyday casuals and formal wear to high-fashion apparel and industrial clothing, this sector is a massive consumer-driven powerhouse that combines creative design with large-scale industrial manufacturing.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-rose-600 to-pink-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/garments.webp') }}" alt="Garments Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-rose-800 to-rose-950 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-shirt text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <ul class="space-y-4 text-rose-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 1.84 Trillion</span> 
                            <span class="text-rose-200">(2025 Market Value)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 2.54 Trillion</span> 
                            <span class="text-rose-200">(2033 Projection)</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-sm text-rose-200/80 leading-relaxed">Asia-Pacific holds <span class="text-white font-bold">40%+ share</span> of the global market and remains the dominant manufacturing hub.</p>

                    <h4 class="font-semibold mt-8 mb-4 text-rose-300 uppercase tracking-wider text-sm">Growth Drivers</h4>
                    <div class="grid grid-cols-2 gap-2">
                            <div class="text-[10px] uppercase font-bold text-rose-100 flex items-center gap-2">
                                <i class="fa-solid fa-bolt text-rose-400"></i> Fast Fashion
                            </div>
                            <div class="text-[10px] uppercase font-bold text-rose-100 flex items-center gap-2">
                                <i class="fa-solid fa-globe text-rose-400"></i> E-commerce
                            </div>
                            <div class="text-[10px] uppercase font-bold text-rose-100 flex items-center gap-2">
                                <i class="fa-solid fa-gem text-rose-400"></i> Luxury Segment
                            </div>
                            <div class="text-[10px] uppercase font-bold text-rose-100 flex items-center gap-2">
                                <i class="fa-solid fa-wallet text-rose-400"></i> Disposable Income
                            </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-rose-100 rounded-xl text-rose-600">
                            <i class="fa-solid fa-tags text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>
                    <p class="text-slate-600 mb-6 font-medium">Clothing accounts for <span class="text-rose-600 font-black">40% share</span> of India's textile market, supported by massive domestic demand and exports.</p>
                    
                    <h4 class="font-semibold mb-4 text-rose-600 uppercase tracking-wider text-sm">Manufacturing Hubs</h4>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(['Tiruppur', 'Bengaluru', 'Delhi NCR', 'Mumbai', 'Jaipur', 'Ludhiana'] as $city)
                            <span class="px-3 py-1 bg-white border border-slate-200 text-slate-600 text-xs font-bold rounded-full group hover:border-rose-400 hover:text-rose-600 transition-colors cursor-default">{{ $city }}</span>
                        @endforeach
                    </div>

                    <div class="p-4 bg-rose-50 rounded-2xl border border-rose-100">
                        <p class="text-[10px] font-black text-rose-600 uppercase mb-1">Export Performance</p>
                        <p class="text-lg font-bold text-slate-800">Top 6 Global Apparel Exporter</p>
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-rose-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-rose-600 text-3xl font-black group-hover:scale-110 transition-transform">8–10%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India Annual Growth</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-rose-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-rose-600 text-3xl font-black group-hover:scale-110 transition-transform">20,000</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Organized Units (India)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-rose-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-rose-600 text-3xl font-black group-hover:scale-110 transition-transform">1 Lakh+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">MSME Enterprises</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-rose-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-rose-600 text-3xl font-black group-hover:scale-110 transition-transform">40%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Textile Mkt Share</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/garments-details.jpg') }}" alt="Garments Details"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl">
                    <div class="absolute -bottom-6 -right-6 p-6 bg-rose-600 text-white rounded-2xl shadow-2xl hidden md:block">
                        <p class="text-3xl font-bold">1 Million+</p>
                        <p class="text-sm opacity-80 uppercase tracking-widest">Global Manufacturers</p>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Emerging Opportunities</h2>
                    <div class="grid gap-3">
                        @php
                            $opportunities = [
                                ['icon' => 'leaf', 'title' => 'Sustainable & Organic Clothing'],
                                ['icon' => 'gem', 'title' => 'Premium Fashion Brands'],
                                ['icon' => 'person-running', 'title' => 'Sportswear & Athleisure'],
                                ['icon' => 'microchip', 'title' => 'Technical & Functional Apparel'],
                                ['icon' => 'ship', 'title' => 'Export-Oriented Manufacturing'],
                                ['icon' => 'mobile-screen-button', 'title' => 'D2C Fashion & E-Commerce'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                        <div class="flex items-center gap-4 p-4 rounded-xl border border-slate-100 hover:bg-rose-50 hover:border-rose-200 hover:shadow-sm transition-all group">
                            <div class="w-12 h-12 flex items-center justify-center bg-rose-100 text-rose-600 rounded-lg group-hover:bg-rose-600 group-hover:text-white transition-colors">
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
                <div class="absolute top-0 right-0 w-80 h-80 bg-rose-500/10 rounded-full blur-3xl -mr-40 -mt-40"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4">India's Global Position</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India ranks among the Top 6 global apparel exporters, contributing significantly to fashion sourcing through advantages in cotton, knitwear, and ethical manufacturing.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-white/5 rounded-2xl border border-white/10">
                                <p class="text-[10px] font-black text-rose-500 uppercase">Strong Advantage</p>
                                <p class="text-sm font-bold">Cotton Garments</p>
                            </div>
                            <div class="p-4 bg-white/5 rounded-2xl border border-white/10">
                                <p class="text-[10px] font-black text-rose-500 uppercase">Export Niche</p>
                                <p class="text-sm font-bold">Ethnic Fashion</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-10 bg-rose-600 rounded-[3rem] text-center shadow-xl">
                        <i class="fa-solid fa-earth-asia text-5xl mb-6"></i>
                        <h4 class="text-3xl font-black mb-2 uppercase">Global Hub</h4>
                        <p class="text-sm opacity-90">Sourcing destination for the world's leading fashion brands.</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-rose-600 to-pink-700 text-white p-12 rounded-3xl text-center shadow-2xl relative group overflow-hidden">
                <div class="absolute inset-0 bg-black/10 transition-opacity opacity-0 group-hover:opacity-100 duration-500"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Why Garments Industry Matters</h3>
                    <p class="text-xl text-rose-50 max-w-4xl mx-auto leading-relaxed">
                        The garments sector is a key employment generator and economic driver, shaping global fashion innovation and retail growth. As a pillar of manufacturing and trade, its importance continues to grow with rising global sourcing opportunities.
                    </p>
                    <div class="mt-8">
                        <a href="" class="inline-flex items-center gap-2 px-10 py-5 bg-white text-rose-700 font-black uppercase tracking-widest rounded-full hover:bg-slate-900 hover:text-white transition-all duration-300 shadow-xl">
                            Join Fashion Revolution <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
