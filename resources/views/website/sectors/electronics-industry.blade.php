@extends('layouts.website')

@section('title', 'Electronics Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/electronics-industry.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Electronics <span class="text-blue-400">Industry</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                Empowering the Modern World Through Innovation and Smart Technology.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS ELECTRONICS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase italic border-l-8 border-blue-600 pl-6">Foundation of the Digital Age</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>Electronics industry</strong> is one of the most transformative sectors, driving technological advancement, digital connectivity, and modern lifestyle convenience.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        From semiconductors to smart devices, electronics power nearly every aspect of contemporary life, industrial manufacturing, and global communication networks.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $segments = [
                            ['icon' => 'microchip', 'label' => 'Semiconductors'],
                            ['icon' => 'mobile-screen', 'label' => 'Consumer Electronics'],
                            ['icon' => 'robot', 'label' => 'Industrial Automation'],
                            ['icon' => 'satellite-dish', 'label' => 'Communication Tech'],
                        ];
                    @endphp
                    @foreach($segments as $s)
                        <div class="p-6 bg-slate-50 border border-slate-100 rounded-2xl text-center group hover:bg-slate-900 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $s['icon'] }} text-3xl mb-3 text-blue-500 group-hover:text-blue-400 font-black"></i>
                            <p class="text-[10px] font-black uppercase tracking-tight">{{ $s['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- GLOBAL MARKET LANDSCAPE -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-black mb-6 uppercase italic tracking-widest text-blue-400">Global Industry Snapshot</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed italic">The electronics sector remains one of the world's fastest-evolving industries, fueled by AI integration and automation.</p>
                        
                        <div class="space-y-4">
                            @foreach([
                                'Expansion of Artificial Intelligence & IoT',
                                'Rising Smartphone & Smart Device Penetration',
                                'Industrial Automation & Robotics Adoption',
                                'Increasing Digital Infrastructure Investments'
                            ] as $driver)
                                <div class="flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                                    <span class="text-xs font-bold uppercase text-slate-300">{{ $driver }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center shadow-xl">
                            <p class="text-[10px] font-black uppercase text-slate-500 mb-2">Market (2025)</p>
                            <p class="text-3xl font-black text-white">$5T+</p>
                        </div>
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center shadow-xl">
                            <p class="text-[10px] font-black uppercase text-slate-500 mb-2">Projected (2031)</p>
                            <p class="text-3xl font-black text-blue-400">$8T+</p>
                        </div>
                        <div class="col-span-2 p-4 bg-blue-600/10 border border-blue-600/20 rounded-xl text-center">
                             <p class="text-sm font-black uppercase tracking-widest text-blue-100">7% - 9% Expected CAGR</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 grid grid-cols-2 gap-4">
                    <div class="p-8 bg-slate-50 border border-slate-200 rounded-3xl text-center shadow-lg transform hover:-translate-y-1 transition-all">
                        <p class="text-[10px] font-black uppercase text-slate-400 mb-2">India Size (2025)</p>
                        <p class="text-2xl font-black text-slate-900">$180B+</p>
                    </div>
                    <div class="p-8 bg-blue-50 border border-blue-200 rounded-3xl text-center shadow-lg transform hover:-translate-y-1 transition-all">
                        <p class="text-[10px] font-black uppercase text-blue-600 mb-2">Projected (2031)</p>
                        <p class="text-2xl font-black text-blue-900">$400B+</p>
                    </div>
                    <div class="col-span-2 p-8 bg-slate-900 text-white rounded-3xl relative overflow-hidden group">
                        <div class="absolute inset-0 bg-blue-500/5 group-hover:scale-110 transition-transform"></div>
                        <div class="relative z-10">
                            <h4 class="text-xs font-black uppercase tracking-widest text-blue-300 mb-4">India Growth Catalysts</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Make in India & PLI Schemes', 'Semiconductor Mission', 'Smartphone Demand', 'Digital Economy Growth'] as $cat)
                                    <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-lg text-[10px] font-black uppercase text-slate-200">{{ $cat }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 md:order-2 space-y-6">
                    <h3 class="text-3xl font-black uppercase text-slate-900 italic">India's Manufacturing Era</h3>
                    <p class="text-slate-600 leading-relaxed font-serif">India is rapidly emerging as a global electronics manufacturing hub, supported by domestic demand and government-led initiatives.</p>
                    <div class="space-y-4">
                        @foreach([
                            '20,000+ Electronics Manufacturing Units',
                            'Major Hubs: Bengaluru, Noida, Chennai, Hyderabad',
                            'Aggressive 16% CAGR anticipated by 2031',
                            'Massive investments in Semiconductor Fabs'
                        ] as $item)
                        <div class="flex items-center gap-4 group">
                            <div class="w-2 h-2 rounded-full bg-blue-500 group-hover:scale-150 transition-transform"></div>
                            <p class="text-sm font-bold uppercase text-slate-700 tracking-tight transition-transform group-hover:translate-x-2">{{ $item }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- HIGH POTENTIAL SEGMENTS -->
            <div class="p-12 rounded-[50px] bg-slate-50 border border-slate-200 shadow-inner">
                <h3 class="text-3xl font-black mb-10 text-center uppercase italic tracking-tighter">High-Potential Segments</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach(['Artificial Intelligence Devices', 'Wearable Technology', 'Smart Home Automation', 'EV Electronics', 'Semiconductor Mfg.', 'Industrial IoT Systems', '5G / Telecom Hardware', 'Intelligent Sensors'] as $seg)
                        <div class="p-6 bg-white border border-slate-200 rounded-2xl text-center group hover:border-blue-500 hover:shadow-xl transition-all">
                             <p class="text-xs font-black uppercase text-slate-600 group-hover:text-blue-600 transition-colors">{{ $seg }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tight italic">Why Electronics Matter</h2>
                    <div class="space-y-4">
                        @foreach([
                            'Drives technological innovation and modernization',
                            'Powers industrial productivity and automation',
                            'Enables global digital transformation',
                            'Supports healthcare, mobility, and infrastructure',
                            'Creates large-scale manufacturing opportunities'
                        ] as $imp)
                        <div class="flex items-center gap-4 p-4 rounded-xl border-l-4 border-blue-500 bg-slate-50 hover:bg-white hover:shadow-md transition-all">
                            <i class="fa-solid fa-bolt-lightning text-blue-400"></i>
                            <span class="text-sm font-bold uppercase tracking-tight text-slate-900">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-900 rounded-3xl text-white relative group overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black mb-6 uppercase italic text-blue-400">The Road Ahead</h4>
                        <p class="text-slate-300 leading-relaxed text-sm font-medium mb-8">
                            The future of electronics will be defined by innovation, miniaturization, sustainability, and intelligent connectivity. As the world moves toward smart cities and AI-driven ecosystems, electronics will remain at the heart of development.
                        </p>
                        <div class="flex flex-wrap gap-2">
                             @foreach(['AI-DRIVEN', 'SMART CITIES', 'EV TECH', '5G ECOSYSTEM'] as $tag)
                                <span class="px-3 py-1 bg-white/10 rounded-lg text-[10px] font-black uppercase text-blue-300 border border-blue-500/20">{{ $tag }}</span>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-950 text-white p-12 md:p-16 rounded-[40px] text-center shadow-2xl overflow-hidden border-b-4 border-blue-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(59,130,246,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight font-serif">Foundation of the Digital Age</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Empower your business with next-gen electronic manufacturing and IoT solutions. Join the mission to build a smart, connected, and technologically advanced industrial future.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-slate-900 font-black uppercase tracking-widest rounded-full hover:bg-blue-500 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Electronics Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-blue-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
