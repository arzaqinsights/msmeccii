@extends('layouts.website')

@section('title', 'AI for Industry - Transforming Every Sector')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-30"
            style="background-image: url('{{ asset('images/sectors/ai-for-industry.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-cyan-500/10 border border-cyan-500/20 rounded-full mb-6">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                <span class="text-cyan-300 text-xs font-black uppercase tracking-widest">Intelligent Systems Era</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                AI FOR <span class="text-cyan-400">INDUSTRY</span> SERIES
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed uppercase italic font-medium">
                Transforming Every Sector Through Intelligent Systems.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-20">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase italic border-l-8 border-cyan-500 pl-6">The Horizontal Capability Layer</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        Artificial Intelligence is no longer sector-specific—it is a <strong>horizontal capability layer</strong> transforming every major industry.
                    </p>
                    <p class="text-slate-600 leading-relaxed font-medium">
                        AI enabling Industry 4.0, where machines learn, predict failures, and optimize production in real time, driving intelligent, sustainable, and inclusive growth.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 animate-in fade-in slide-in-from-right duration-700">
                    @foreach(['Manufacturing', 'Sustainability', 'Agriculture', 'Healthcare'] as $idx => $svc)
                        <div class="p-6 bg-slate-50 border border-slate-100 rounded-2xl text-center group hover:bg-slate-900 hover:text-white transition-all duration-300 shadow-sm transition-transform hover:-translate-y-2">
                            <p class="text-xl font-black text-cyan-500 mb-2">0{{ $idx+1 }}</p>
                            <p class="text-[10px] font-black uppercase tracking-tight">{{ $svc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTOR FOCUS AREAS -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Manufacturing --}}
                <div class="p-8 bg-slate-50 border border-slate-200 rounded-3xl hover:shadow-xl transition-all border-t-4 border-t-cyan-500">
                    <h3 class="text-xl font-black text-slate-900 mb-4 uppercase italic">AI in Manufacturing</h3>
                    <p class="text-xs text-slate-500 mb-6 font-bold tracking-tight">Smart Factories | Predictive Intelligence</p>
                    <ul class="space-y-3 mb-6">
                        @foreach(['Predictive Maintenance', 'Quality Inspection', 'Demand Forecasting', 'Robotics & Automation'] as $item)
                            <li class="flex items-center gap-2 text-xs font-bold text-slate-600 uppercase">
                                <i class="fa-solid fa-microchip text-cyan-500"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-slate-200">
                        <p class="text-[10px] font-black text-cyan-600 uppercase tracking-widest leading-loose">Impact: 30-50% Downtime Reduction</p>
                    </div>
                </div>

                {{-- Sustainability --}}
                <div class="p-8 bg-slate-50 border border-slate-200 rounded-3xl hover:shadow-xl transition-all border-t-4 border-t-emerald-500">
                    <h3 class="text-xl font-black text-slate-900 mb-4 uppercase italic">AI in Sustainability</h3>
                    <p class="text-xs text-slate-500 mb-6 font-bold tracking-tight">Data-Driven Climate Action</p>
                    <ul class="space-y-3 mb-6">
                        @foreach(['Carbon Footprint Tracking', 'Energy Optimization', 'Recycling Automation', 'Climate Risk Modeling'] as $item)
                            <li class="flex items-center gap-2 text-xs font-bold text-slate-600 uppercase">
                                <i class="fa-solid fa-leaf text-emerald-500"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-slate-200">
                        <p class="text-[10px] font-black text-emerald-600 uppercase tracking-widest leading-loose">Accelerates Decarbonization</p>
                    </div>
                </div>

                {{-- Agriculture --}}
                <div class="p-8 bg-slate-50 border border-slate-200 rounded-3xl hover:shadow-xl transition-all border-t-4 border-t-orange-500">
                    <h3 class="text-xl font-black text-slate-900 mb-4 uppercase italic">AI in Agriculture</h3>
                    <p class="text-xs text-slate-500 mb-6 font-bold tracking-tight">Precision Farming | Yield Optimization</p>
                    <ul class="space-y-3 mb-6">
                        @foreach(['Crop Health Monitoring', 'Soil Analysis', 'Yield Prediction', 'Pest Detection'] as $item)
                            <li class="flex items-center gap-2 text-xs font-bold text-slate-600 uppercase">
                                <i class="fa-solid fa-seedling text-orange-500"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-slate-200">
                        <p class="text-[10px] font-black text-orange-600 uppercase tracking-widest leading-loose">Increased Productivity</p>
                    </div>
                </div>

                {{-- Healthcare --}}
                <div class="p-8 bg-slate-50 border border-slate-200 rounded-3xl hover:shadow-xl transition-all border-t-4 border-t-blue-500">
                    <h3 class="text-xl font-black text-slate-900 mb-4 uppercase italic">AI in Healthcare</h3>
                    <p class="text-xs text-slate-500 mb-6 font-bold tracking-tight">Intelligent Diagnostics</p>
                    <ul class="space-y-3 mb-6">
                        @foreach(['Medical Imaging', 'Drug Discovery', 'Virtual Assistants', 'Predictive Analytics'] as $item)
                            <li class="flex items-center gap-2 text-xs font-bold text-slate-600 uppercase">
                                <i class="fa-solid fa-heart-pulse text-blue-500"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-slate-200">
                        <p class="text-[10px] font-black text-blue-600 uppercase tracking-widest leading-loose">Better Patient Outcomes</p>
                    </div>
                </div>

                {{-- FMCG & Retail --}}
                <div class="p-8 bg-slate-50 border border-slate-200 rounded-3xl hover:shadow-xl transition-all border-t-4 border-t-pink-500">
                    <h3 class="text-xl font-black text-slate-900 mb-4 uppercase italic">AI in Retail</h3>
                    <p class="text-xs text-slate-500 mb-6 font-bold tracking-tight">Consumer Intelligence</p>
                    <ul class="space-y-3 mb-6">
                        @foreach(['Demand Forecasting', 'Hyper-Personalization', 'Smart Pricing', 'Inventory Optimization'] as $item)
                            <li class="flex items-center gap-2 text-xs font-bold text-slate-600 uppercase">
                                <i class="fa-solid fa-cart-shopping text-pink-500"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-slate-200">
                        <p class="text-[10px] font-black text-pink-600 uppercase tracking-widest leading-loose">Increased Sales & Margins</p>
                    </div>
                </div>

                {{-- Cyber Security --}}
                <div class="p-8 bg-slate-50 border border-slate-200 rounded-3xl hover:shadow-xl transition-all border-t-4 border-t-indigo-500">
                    <h3 class="text-xl font-black text-slate-900 mb-4 uppercase italic">AI in Cyber Security</h3>
                    <p class="text-xs text-slate-500 mb-6 font-bold tracking-tight">Intelligent Threat Detection</p>
                    <ul class="space-y-3 mb-6">
                        @foreach(['Real-Time Detection', 'Behavioral Analytics', 'Fraud Prevention', 'Risk Assessment'] as $item)
                            <li class="flex items-center gap-2 text-xs font-bold text-slate-600 uppercase">
                                <i class="fa-solid fa-shield-halved text-indigo-500"></i> {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-slate-200">
                        <p class="text-[10px] font-black text-indigo-600 uppercase tracking-widest leading-loose">Stronger Data Protection</p>
                    </div>
                </div>
            </div>

            <!-- INVESTOR SNAPSHOT -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white relative overflow-hidden shadow-xl">
                <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-black mb-6 uppercase italic tracking-widest text-cyan-400">Investor Snapshot</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed italic text-lg">Why AI is the #1 Investment Opportunity of the Decade.</p>
                        
                        <div class="space-y-4">
                            @foreach([
                                'Fastest-growing global tech sector',
                                'Cross-industry adoption (100% applicability)',
                                'High ROI through efficiency & automation',
                                'Strong government & corporate backing'
                            ] as $hl)
                                <div class="flex items-center gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-cyan-500"></div>
                                    <span class="text-xs font-bold uppercase text-slate-300">{{ $hl }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        @foreach(['Generative AI', 'AI SaaS', 'AI Infrastructure', 'Industry Solutions'] as $tag)
                            <div class="p-6 bg-white/5 border border-white/10 rounded-2xl text-center shadow-lg group hover:bg-cyan-500 hover:text-white transition-all">
                                <p class="text-[10px] font-black uppercase tracking-widest">{{ $tag }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- GLOBAL AI SUMMIT (CONCEPT) -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tight italic">Global AI Summit</h2>
                    <div class="p-6 bg-cyan-50 border border-cyan-100 rounded-3xl border-l-[10px] border-l-cyan-600">
                        <p class="text-xs font-black uppercase text-cyan-700 mb-2">Concept Theme (MSMECCII Ready)</p>
                        <p class="text-xl font-black text-slate-900 leading-tight">"AI for Viksit Bharat 2047: Driving Intelligent, Sustainable & Inclusive Growth"</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach(['Global Leaders', 'Policy Makers', 'Startup Founders', 'Academic Experts'] as $spk)
                             <div class="px-4 py-3 bg-slate-900 text-white text-[10px] font-black uppercase rounded-xl text-center">{{ $spk }}</div>
                        @endforeach
                    </div>
                </div>

                <div class="p-8 bg-slate-950 rounded-[40px] text-white relative group overflow-hidden shadow-2xl border-b-8 border-cyan-500">
                    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                    <div class="relative z-10">
                        <h4 class="text-2xl font-black mb-6 uppercase italic text-cyan-400">Conference Tracks</h4>
                        <div class="space-y-3">
                            @foreach([
                                'AI in Manufacturing & Industry 4.0',
                                'AI for Sustainability & Net Zero',
                                'AI in Healthcare & Life Sciences',
                                'AI in Agriculture & Food Security',
                                'Finance, Cybersecurity & Governance',
                                'Generative AI & Future of Work'
                            ] as $track)
                            <div class="flex items-center gap-4 group">
                                <div class="w-2 h-2 rounded-full bg-cyan-500"></div>
                                <p class="text-[11px] font-bold uppercase text-slate-300 tracking-tight">{{ $track }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-950 text-white p-12 md:p-16 rounded-[40px] text-center shadow-2xl overflow-hidden border-b-4 border-cyan-500">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(6,182,212,0.1),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight font-serif italic">Structural Shift in Industry</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10">
                        AI is not just a technology wave—it is a structural shift in how economies function and industries operate. Empower your industrial future with intelligent systems today.
                    </p>
                    <a href="" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-slate-900 font-black uppercase tracking-widest rounded-full hover:bg-cyan-500 hover:text-white transition-all duration-300 shadow-xl group">
                        Register for AI Training & Support <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform text-cyan-400"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
