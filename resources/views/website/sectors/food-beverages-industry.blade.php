@extends('layouts.website')

@section('title', 'Food & Beverages Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-30"
            style="background-image: url('{{ asset('images/sectors/rice.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Food & Beverages Industry
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Nourishing the world through innovation in processing, manufacturing, and sustainable food solutions.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is F&B Industry?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>Food & Beverages (F&B) industry</strong> encompasses the processing, manufacturing, packaging, and distribution of edible products for both consumer and industrial use.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        From packaged foods and dairy to snacks, bakery, and health foods, this sector is one of the most essential and fastest-growing industries globally, directly impacting health, nutrition, and global trade.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-orange-600 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/rice.png') }}" alt="Food & Beverages Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-orange-700 to-red-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-earth-world text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <ul class="space-y-4 text-orange-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 8.71 Trillion</span> 
                            <span class="text-orange-200">(2025 Value)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 14.72 Trillion</span> 
                            <span class="text-orange-200">(2034 Projection)</span>
                        </li>
                    </ul>

                    <h4 class="font-semibold mt-8 mb-4 text-orange-300 uppercase tracking-wider text-sm">Demand Drivers</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-users text-orange-400"></i> Rising Population
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-city text-orange-400"></i> Urbanization
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-ice-cream text-orange-400"></i> Convenience Food
                        </li>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-heart-pulse text-orange-400"></i> Wellness Trends
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-orange-100 rounded-xl text-orange-600">
                            <i class="fa-solid fa-bowl-food text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between items-end border-b pb-2">
                            <span class="text-slate-500 text-sm">2024 Market Size</span>
                            <span class="text-xl font-black text-slate-900">INR 30,498B</span>
                        </div>
                        <div class="flex justify-between items-end border-b pb-2">
                            <span class="text-slate-500 text-sm">2033 Projection</span>
                            <span class="text-xl font-black text-orange-600">INR 65,244B</span>
                        </div>
                    </div>

                    <h4 class="font-semibold mb-4 text-orange-600 uppercase tracking-wider text-sm">Major Hubs</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Mumbai', 'Delhi NCR', 'Bengaluru', 'Hyderabad', 'Pune', 'Ahmedabad'] as $city)
                            <span class="px-3 py-1 bg-white border border-slate-200 text-slate-600 text-xs font-bold rounded-full">{{ $city }}</span>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-orange-600 text-3xl font-black group-hover:scale-110 transition-transform">8.38%</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">India CAGR (2025-33)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-orange-600 text-3xl font-black group-hover:scale-110 transition-transform">50,000+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Organized Firms (India)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-orange-600 text-3xl font-black group-hover:scale-110 transition-transform">20L+</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">F&B MSMEs</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-orange-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-orange-600 text-3xl font-black group-hover:scale-110 transition-transform">32%</div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Share in Total Food Mkt</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/manufacturing.jpg') }}" alt="Food Industry Opportunities"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl grayscale hover:grayscale-0 transition-all duration-700">
                    <div class="absolute top-6 left-6 p-4 bg-white/90 backdrop-blur rounded-xl shadow-lg border border-orange-100">
                        <p class="text-xs font-bold text-orange-600 uppercase tracking-widest mb-1">Export Performance</p>
                        <p class="text-2xl font-black text-slate-900">$7.88B+</p>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Emerging Opportunities</h2>
                    <div class="space-y-3">
                        @php
                            $opportunities = [
                                ['icon' => 'leaf', 'title' => 'Organic & Health Foods'],
                                ['icon' => 'clock', 'title' => 'Ready-to-Eat / Ready-to-Cook'],
                                ['icon' => 'bottle-water', 'title' => 'Functional & Nutraceutical'],
                                ['icon' => 'cookie-bite', 'title' => 'Premium Packaged Snacks'],
                                ['icon' => 'seedling', 'title' => 'Plant-Based Foods'],
                                ['icon' => 'utensils', 'title' => 'Cloud Kitchen Brands'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:bg-white hover:border-orange-200 hover:shadow-lg transition-all group">
                            <div class="w-12 h-12 flex items-center justify-center bg-orange-100 text-orange-600 rounded-xl group-hover:bg-orange-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $item['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700">{{ $item['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- GLOBAL POSITION -->
            <div class="bg-slate-900 p-12 rounded-3xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_top_right,rgba(249,115,22,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <div class="text-center mb-12">
                        <h3 class="text-4xl font-black text-white mb-4">India's Global Standing</h3>
                        <p class="text-slate-400 max-w-2xl mx-auto">India ranks among the Top 5 countries globally in food production and consumption, emerging as a major manufacturing hub.</p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                        @foreach(['Dairy', 'Spices', 'Rice & Grains', 'Processed Foods', 'Packaged Snacks'] as $item)
                        <div class="p-4 bg-white/5 border border-white/10 rounded-2xl text-center">
                            <p class="text-white font-bold text-sm">{{ $item }}</p>
                            <p class="text-orange-500 text-[10px] uppercase font-bold tracking-widest mt-1">Major Producer</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-orange-500 to-red-600 text-white p-12 rounded-3xl text-center shadow-2xl group">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-3xl font-bold mb-6">Why F&B Industry Matters</h3>
                    <p class="text-xl text-orange-50 leading-relaxed mb-10">
                        The Food & Beverages sector is an essential pillar of the global economy, supporting agriculture, manufacturing, retail, and millions of jobs. With changing lifestyles and innovation in health-focused products, F&B continues to shape the future of consumer markets.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-orange-700 font-black uppercase tracking-widest rounded-full hover:bg-slate-900 hover:text-white transition-all duration-300 transform group-hover:scale-105 shadow-xl">
                        Partner with Us <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
