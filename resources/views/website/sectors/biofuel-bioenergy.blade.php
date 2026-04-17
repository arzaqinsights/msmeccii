@extends('layouts.website')

@section('title', 'Biofuel / Bio Energy Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-green-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/biofuel.jpeg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Biofuel & <span class="text-green-500">Bio Energy</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Powering Tomorrow with Nature through sustainable alternatives to fossil fuels.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">Sustainable Energy Solutions</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Biofuel and Bio Energy</strong> refer to renewable energy sources derived from biological materials such as agricultural residue, biomass, vegetable oils, and organic waste.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        As the world shifts towards carbon neutrality, these fuels provide a critical alternative for power generation, transportation, and industrial heating, significantly reducing greenhouse gas emissions.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/biofuel.jpeg') }}" alt="Biofuel Industry"
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
                            <span class="text-sm uppercase font-bold text-slate-400">Biofuel Market (2025)</span>
                            <span class="text-xl font-black text-white">$180 Billion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Bioenergy Market</span>
                            <span class="text-xl font-black text-white">$350 Billion+</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Annual CAGR</span>
                            <span class="text-xl font-black text-green-400">7% – 10%</span>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <h4 class="font-semibold mb-4 text-slate-400 uppercase tracking-wider text-xs">Growth Drivers</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Carbon Neutrality', 'Blending Mandates', 'Clean Energy Demand', 'SAF'] as $driver)
                                <span class="px-3 py-1 bg-white/5 rounded-full text-xs font-bold border border-white/10 text-slate-300">{{ $driver }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-green-100 rounded-xl text-green-600">
                            <i class="fa-solid fa-industry text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Market value (2025)</p>
                            <p class="text-xl font-black text-green-700">₹60K Cr+</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Target by 2031</p>
                            <p class="text-xl font-black text-green-700">₹1.5L Cr+</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Ethanol Blending Target</span>
                            <span class="text-sm font-black text-slate-800">20%+</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Projected CAGR</span>
                            <span class="text-sm font-black text-green-600">15-20%</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-green-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-green-600 text-3xl font-black group-hover:scale-110 transition-transform">$180B</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Biofuel</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-green-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-green-600 text-3xl font-black group-hover:scale-110 transition-transform">700+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Ethanol Plants</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-green-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-green-600 text-3xl font-black group-hover:scale-110 transition-transform">15-20%</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India CAGR</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-green-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-green-600 text-3xl font-black group-hover:scale-110 transition-transform">TOP Hub</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Energy Security</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="order-2 md:order-1 space-y-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">High Potential Segments</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $items = [
                                ['icon' => 'flask', 'title' => 'Ethanol Distilleries'],
                                ['icon' => 'gas-pump', 'title' => 'Biodiesel Plants'],
                                ['icon' => 'cubes', 'title' => 'Biomass Pellets'],
                                ['icon' => 'bolt', 'title' => 'Waste-to-Energy'],
                                ['icon' => 'plane', 'title' => 'Aviation Biofuel'],
                                ['icon' => 'fire-flame-curved', 'title' => 'Bio-CNG Infra'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-green-200 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-green-100 text-green-600 rounded-lg group-hover:bg-green-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="order-1 md:order-2 p-8 bg-slate-900 rounded-3xl text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6 italic text-green-400">Emerging Trends (2026–2031)</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center text-green-400 shrink-0 mt-1">
                                    <i class="fa-solid fa-bolt text-[10px]"></i>
                                </div>
                                <p class="text-sm text-slate-300">2G / 3G Ethanol Plants development.</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center text-green-400 shrink-0 mt-1">
                                    <i class="fa-solid fa-plane text-[10px]"></i>
                                </div>
                                <p class="text-sm text-slate-300">Sustainable Aviation Fuel (SAF) adoption.</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center text-green-400 shrink-0 mt-1">
                                    <i class="fa-solid fa-droplet text-[10px]"></i>
                                </div>
                                <p class="text-sm text-slate-300">Green Methanol and Bio-Hydrogen production.</p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-6 h-6 rounded-full bg-green-500/20 flex items-center justify-center text-green-400 shrink-0 mt-1">
                                    <i class="fa-solid fa-recycle text-[10px]"></i>
                                </div>
                                <p class="text-sm text-slate-300">Waste-to-Biofuel Refineries expansion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-green-600">
                <div class="absolute top-0 right-0 w-64 h-64 bg-green-600/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">The Bio Energy Revolution</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Biofuel and bio energy are powering the transition from fossil fuels to sustainable energy. With India's 20%+ ethanol blending target, the sector represents one of the most significant clean energy opportunities of our time.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-green-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-slate-900 transition-all duration-300 shadow-xl group">
                        Join the Energy Transition <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
