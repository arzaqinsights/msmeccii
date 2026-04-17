@extends('layouts.website')

@section('title', 'Information Technology Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/it-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Information <span class="text-indigo-400">Technology</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                The backbone of the digital economy, enabling innovation, efficiency, and global connectivity.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">What is Information Technology?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Information Technology (IT)</strong> refers to the use of computers, software, networks, and cloud systems to process, manage, and secure information.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        The IT industry powers digital transformation across all sectors—from healthcare to finance—through AI, automation, and cybersecurity solutions, making it the most dynamic industry globally.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/it-details.png') }}" alt="IT Industry"
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
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global IT Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$10 Trillion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2033)</span>
                            <span class="text-xl font-black text-white">$15 Trillion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-indigo-400">8% – 10%</span>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <h4 class="font-semibold mb-4 text-slate-400 uppercase tracking-wider text-xs">Growth Drivers</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['AI Adoption', 'Cloud Migration', 'Cybersecurity', 'Data Analytics'] as $driver)
                                <span class="px-3 py-1 bg-white/5 rounded-full text-xs font-bold border border-white/10 text-slate-300">{{ $driver }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-indigo-100 rounded-xl text-indigo-600">
                            <i class="fa-solid fa-code text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian IT Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Market value (2025)</p>
                            <p class="text-xl font-black text-indigo-700">$250B+</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Expected 2030</p>
                            <p class="text-xl font-black text-indigo-700">$500B</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Growth Rate (CAGR)</span>
                            <span class="text-sm font-black text-indigo-600">12% - 15%</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Global Share</span>
                            <span class="text-sm font-black text-slate-800 italic">55%+ Outsourcing Market</span>
                        </div>
                    </div>
                </div>

            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-indigo-600 text-3xl font-black group-hover:scale-110 transition-transform">100K+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">IT Companies (India)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-indigo-600 text-3xl font-black group-hover:scale-110 transition-transform">5M+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Professionals (India)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-indigo-600 text-3xl font-black group-hover:scale-110 transition-transform">$12T+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Market (2031)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-indigo-600 text-3xl font-black group-hover:scale-110 transition-transform">15%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India CAGR (2031)</div>
                </div>
            </div>

            <!-- GLOBAL POSITION -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_bottom_left,rgba(99,102,241,0.05),transparent)]"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 uppercase italic">Global Outsourcing Leader</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India contributes over 55% share of the global outsourcing market, recognized for software development and digital engineering.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-center">
                                <p class="text-indigo-400 font-bold mb-1 italic">#1</p>
                                <p class="text-[10px] text-slate-400 uppercase tracking-tight">Outsourcing Destination</p>
                            </div>
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-center">
                                <p class="text-indigo-400 font-bold mb-1 italic">World Class</p>
                                <p class="text-[10px] text-slate-400 uppercase tracking-tight">Digital Talent</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 bg-indigo-600 rounded-2xl shadow-xl">
                        <h4 class="text-xl font-bold mb-4 uppercase">Major IT Hubs In India</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Bengaluru', 'Hyderabad', 'Pune', 'Chennai', 'Mumbai', 'Delhi NCR'] as $hub)
                                <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-bold border border-white/10">{{ $hub }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="order-2 md:order-1 space-y-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Emerging Tech Frontiers</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $items = [
                                ['icon' => 'brain', 'title' => 'AI & Machine Learning'],
                                ['icon' => 'shield-halved', 'title' => 'Cybersecurity Solutions'],
                                ['icon' => 'cloud', 'title' => 'Cloud Computing Services'],
                                ['icon' => 'cubes', 'title' => 'Blockchain Development'],
                                ['icon' => 'chart-pie', 'title' => 'Data Analytics & BI'],
                                ['icon' => 'robot', 'title' => 'IoT & Smart Automation'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-indigo-200 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-indigo-100 text-indigo-600 rounded-lg group-hover:bg-indigo-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight uppercase font-serif italic">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="order-1 md:order-2 p-8 bg-slate-100 rounded-3xl border border-slate-200 shadow-sm relative overflow-hidden group">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6 text-slate-900 italic">Major Markets</h3>
                        <div class="flex flex-wrap gap-3">
                            @foreach(['USA', 'India', 'China', 'Germany', 'UK', 'Japan'] as $country)
                            <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full border border-slate-200 text-sm font-bold text-slate-600 group-hover:border-indigo-300 transition-colors">
                                <i class="fa-solid fa-globe text-indigo-500"></i> {{ $country }}
                            </div>
                            @endforeach
                        </div>
                        <p class="mt-8 text-sm text-slate-500 leading-relaxed font-medium">Global IT market expected to exceed <span class="text-indigo-600 font-bold">$12 Trillion+</span> globally by 2031.</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-indigo-600">
                <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight leading-loose">Innovate. Scale. Transform.</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10 italic uppercase font-black">
                        IT is the backbone of the digital economy. As industries worldwide embrace automation, IT continues to be the most future-ready and high-growth industry globally.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-indigo-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-indigo-900 transition-all duration-300 shadow-xl group">
                        Upskill with IT Resources <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
