@extends('layouts.website')

@section('title', 'Cigarette Butts Recycling Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-x-0 inset-y-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/circular-economy.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-tighter">
                Cigarette Butts <span class="text-indigo-400">Recycling</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Tackling the world's most littered waste through innovative fiber recovery and material science.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">A Niche Impact Industry</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Cigarette butt recycling</strong> is the process of converting discarded filters and tobacco waste into industrial stuffing, paper pulp, and plastic alternatives.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        Since filters are made of <strong>cellulose acetate plastic</strong>, they are non-biodegradable and contribute significantly to microplastic pollution. Structured recycling prevents environmental contamination and supports the circular economy.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/circular-economy.jpg') }}" alt="Cigarette Waste Recycling"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl transition-all duration-700">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl text-indigo-400">
                            <i class="fa-solid fa-earth-americas text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Impact</h3>
                    </div>
                    
                    <ul class="space-y-6 text-slate-300">
                        <li class="flex items-baseline gap-4 border-b border-white/10 pb-4">
                            <span class="text-2xl font-black text-indigo-400">4.5T</span>
                            <span class="text-sm font-medium">Butts discarded annually into the environment.</span>
                        </li>
                        <li class="flex items-baseline gap-4 border-b border-white/10 pb-4">
                            <span class="text-2xl font-black text-indigo-400">12%</span>
                            <span class="text-sm font-medium">Of aquatic litter consists of cigarette waste.</span>
                        </li>
                    </ul>

                    <div class="mt-8 flex gap-2">
                         <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] font-bold uppercase">USA</span>
                         <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] font-bold uppercase">UK</span>
                         <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] font-bold uppercase">Canada</span>
                         <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-[10px] font-bold uppercase">Australia</span>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-indigo-100 rounded-xl text-indigo-600">
                            <i class="fa-solid fa-industry text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Ecosystem</h3>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8 text-center">
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-black tracking-tight mb-1">Annual Generation</p>
                            <p class="text-xl font-black text-indigo-700">100B+</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                            <p class="text-[10px] text-slate-400 uppercase font-black tracking-tight mb-1">Growth (CAGR)</p>
                            <p class="text-xl font-black text-indigo-700">15% - 20%</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase">Organized Startups</span>
                            <span class="text-sm font-black text-slate-800">10-20 Pioneers</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-slate-100">
                            <span class="text-xs font-bold text-slate-500 uppercase italic">Hub Preference</span>
                            <span class="text-sm font-black text-indigo-600 uppercase tracking-tighter">NCR & Major Metros</span>
                        </div>
                    </div>
                </div>

            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-1 text-slate-900 text-3xl font-black">100+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Global Initiatives</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-1 text-slate-900 text-3xl font-black">NASCENT</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Sector Stage</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-1 text-slate-900 text-3xl font-black">HIGH</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">ESG Impact</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 text-center">
                    <div class="mb-1 text-slate-900 text-3xl font-black">TOP ITEM</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Litter Rank</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="order-2 md:order-1 space-y-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Startup Opportunities</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $items = [
                                ['icon' => 'trash-can-arrow-up', 'title' => 'Smart Disposal Bins'],
                                ['icon' => 'recycle', 'title' => 'Filter Fiber Recycling'],
                                ['icon' => 'bolt-lightning', 'title' => 'Waste-to-Energy Apps'],
                                ['icon' => 'handshake-angle', 'title' => 'ESG / CSR Programs'],
                                ['icon' => 'building-circle-check', 'title' => 'Municipal Contracts'],
                                ['icon' => 'hotel', 'title' => 'Hospitality Partnerships'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-3 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-indigo-300 hover:bg-white transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-indigo-100 text-indigo-600 rounded-lg group-hover:bg-indigo-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight uppercase font-serif italic tracking-tighter">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-100 rounded-3xl border border-slate-200 relative overflow-hidden group">
                    <h3 class="text-2xl font-bold mb-6 italic text-slate-900 uppercase">Environmental Urgency</h3>
                    <p class="text-slate-600 leading-relaxed mb-8">
                        Discarded filters leach toxic chemicals and microplastics into soil and water systems. Structuring this waste stream is a critical priority for smart cities and eco-focused organizations.
                    </p>
                    <div class="flex items-center gap-4">
                         <div class="w-12 h-1 bg-indigo-600"></div>
                         <p class="text-xs uppercase font-black tracking-widest text-slate-400">Combat Pollution</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-indigo-600">
                <div class="absolute inset-x-0 bottom-0 top-0 bg-[radial-gradient(circle_at_center,rgba(99,102,241,0.05),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Small Waste, Big Solution</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10 font-medium italic">
                        Cigarette butt recycling is emerging as a high-impact segment within environmental services. Register with MSMECCII to explore technology partnerships and waste collection infrastructure projects.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-indigo-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-slate-900 transition-all duration-300 shadow-xl group">
                        Explore Recycling Projects <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-slate-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
