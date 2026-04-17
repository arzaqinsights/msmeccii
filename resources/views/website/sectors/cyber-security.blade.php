@extends('layouts.website')

@section('title', 'Cyber Security Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/cyber-security.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Cyber <span class="text-cyan-400">Security</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                Protecting the Digital World Through Advanced Security Solutions.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- WHAT IS CYBER SECURITY -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase italic border-l-8 border-cyan-500 pl-6">Digital Shield</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        In today's digital-first economy, <strong>Cyber Security</strong> has become one of the most critical industries globally, safeguarding organizations, governments, and individuals against cyber threats, data breaches, and digital fraud.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        As businesses shift toward cloud, AI, and digital platforms, cybersecurity has evolved from a simple IT requirement into a core strategic business necessity.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @php
                        $protected = [
                            ['icon' => 'server', 'label' => 'Networks & Servers'],
                            ['icon' => 'cloud-shield', 'label' => 'Cloud Infrastructure'],
                            ['icon' => 'database', 'label' => 'Intellectual Property'],
                            ['icon' => 'user-lock', 'label' => 'Customer Privacy'],
                        ];
                    @endphp
                    @foreach($protected as $p)
                        <div class="p-6 bg-slate-50 border border-slate-100 rounded-2xl text-center group hover:bg-slate-900 hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-{{ $p['icon'] }} text-3xl mb-3 text-cyan-500 group-hover:text-cyan-400"></i>
                            <p class="text-[10px] font-black uppercase tracking-tight">{{ $p['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- GLOBAL MARKET LANDSCAPE -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-black mb-6 uppercase italic tracking-widest text-cyan-400">Global Landscape</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed">Cyber Security is among the fastest-growing technology sectors worldwide, driven by global digital transformation and increasing cybercrime.</p>
                        
                        <div class="space-y-4">
                            @foreach([
                                'Rising cyber-attacks & ransomware',
                                'Expansion of cloud & remote work',
                                'Growth in AI, IoT & 5G infrastructure',
                                'Increasing data privacy regulations'
                            ] as $driver)
                                <div class="flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-cyan-500"></div>
                                    <span class="text-xs font-bold uppercase text-slate-300">{{ $driver }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center">
                            <p class="text-[10px] font-black uppercase text-slate-500 mb-2">Market Value (2025)</p>
                            <p class="text-3xl font-black text-white">$250B+</p>
                        </div>
                        <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center">
                            <p class="text-[10px] font-black uppercase text-slate-500 mb-2">Projected (2031)</p>
                            <p class="text-3xl font-black text-cyan-400">$500B+</p>
                        </div>
                        <div class="col-span-2 p-4 bg-cyan-500/10 border border-cyan-500/20 rounded-xl text-center">
                             <p class="text-sm font-black uppercase tracking-widest">12% - 15% Annual CAGR</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="order-2 md:order-1 grid grid-cols-2 gap-4">
                    <div class="p-8 bg-slate-50 border border-slate-200 rounded-3xl text-center shadow-lg">
                        <p class="text-[10px] font-black uppercase text-slate-400 mb-2">India Size (2025)</p>
                        <p class="text-2xl font-black text-slate-900">$8 - 10B</p>
                    </div>
                    <div class="p-8 bg-cyan-50 border border-cyan-200 rounded-3xl text-center shadow-lg">
                        <p class="text-[10px] font-black uppercase text-cyan-600 mb-2">Growth Rate</p>
                        <p class="text-2xl font-black text-cyan-900">20% CAGR</p>
                    </div>
                    <div class="col-span-2 p-8 bg-slate-900 text-white rounded-3xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-black uppercase tracking-widest text-cyan-400">Total Startups</span>
                            <span class="text-xl font-bold">3,500+</span>
                        </div>
                        <div class="h-1 bg-white/10 rounded-full overflow-hidden">
                            <div class="w-2/3 h-full bg-cyan-500"></div>
                        </div>
                        <p class="mt-4 text-[10px] text-slate-400 uppercase font-medium">BENGALURU • HYDERABAD • PUNE • NCR</p>
                    </div>
                </div>

                <div class="order-1 md:order-2 space-y-6">
                    <h3 class="text-3xl font-black uppercase text-slate-900 italic">India Cyber Ecosystem</h3>
                    <p class="text-slate-600 leading-relaxed font-serif">India is emerging as one of the most promising cybersecurity markets due to rapid digital adoption and rising enterprise awareness.</p>
                    <div class="space-y-3">
                        @foreach([
                            'Digital India initiatives',
                            'UPI / FinTech system expansion',
                            'Smart Cities & GovTech digitization',
                            'Enterprise cloud migration'
                        ] as $cat)
                        <div class="flex items-center gap-3 p-3 bg-slate-50 border border-slate-100 rounded-xl">
                            <i class="fa-solid fa-bolt text-cyan-500"></i>
                            <span class="text-xs font-bold uppercase text-slate-700">{{ $cat }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- HIGH GROWTH SEGMENTS -->
            <div class="p-12 rounded-3xl bg-slate-50 border border-slate-200">
                <h3 class="text-3xl font-black mb-10 text-center uppercase italic tracking-tighter">High-Growth Segments (2026-2031)</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach(['Cloud Security', 'AI Threat Detection', 'Endpoint Protection', 'Network Security', 'Ethical Hacking', 'Cyber Risk Mgmt', 'Managed Services', 'Privacy Compliance'] as $seg)
                        <div class="p-6 bg-white border border-slate-200 rounded-2xl text-center hover:border-cyan-500 hover:shadow-xl transition-all group">
                             <p class="text-xs font-black uppercase text-slate-600 group-hover:text-cyan-600 transition-colors">{{ $seg }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="grid gap-6">
                    <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tight">Strategic Importance</h2>
                    <div class="space-y-4">
                        @foreach([
                            'Protects critical digital infrastructure',
                            'Prevents financial & reputational losses',
                            'Secures customer trust and privacy',
                            'Enables safe digital transformation',
                            'Supports national security & defense'
                        ] as $imp)
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-900 text-white group hover:bg-cyan-500 transition-colors">
                            <i class="fa-solid fa-shield-halved text-cyan-400 group-hover:text-white"></i>
                            <span class="text-sm font-bold uppercase tracking-tight">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-900 rounded-3xl text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-cyan-500/5"></div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black mb-6 uppercase italic text-cyan-400">Future Landscape</h4>
                        <p class="text-slate-300 leading-relaxed text-sm font-medium mb-8">
                            With cybercrime projected to become one of the world's largest economic threats, Cyber Security is no longer optional—it is foundational to every modern organization. India is positioned to become a global innovation hub.
                        </p>
                        <div class="flex flex-wrap gap-2">
                             @foreach(['AI-FIRST', 'ZERO TRUST', 'QUANTUM-SECURE', 'SOVEREIGN CLOUD'] as $tag)
                                <span class="px-3 py-1 bg-white/10 rounded-lg text-[10px] font-black uppercase text-cyan-400 border border-cyan-500/20">{{ $tag }}</span>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-950 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-cyan-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(6,182,212,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Safeguard Your Digital Assets</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        Stay ahead of evolving digital threats. Explore cybersecurity frameworks, ethical hacking support, and AI-driven security solutions to protect your business ecosystem.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-slate-900 font-black uppercase tracking-widest rounded-full hover:bg-cyan-500 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for Security Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-cyan-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
