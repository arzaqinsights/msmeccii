@extends('layouts.website')

@section('title', 'Commerce & Industry Sector')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-40 shadow-inner"
            style="background-image: url('{{ asset('images/sectors/commerce-industry-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Commerce & <span class="text-indigo-400">Industry</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed italic font-medium">
                "Empowering Trade. Enabling Industry. Accelerating Growth."<br>
                <span class="text-lg opacity-80 mt-2 block font-normal not-italic">Your Gateway to Business Expansion & Global Opportunities</span>
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">Driving MSMEs Towards Global Competitiveness</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>Commerce & Industry</strong> sector of MSMECCII acts as a strategic bridge between businesses, government, and global markets.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It is dedicated to strengthening India's MSME ecosystem by enabling trade, fostering industrial growth, and supporting entrepreneurship at all levels.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/commerce-industry-details.png') }}" alt="Commerce & Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- KEY FOCUS AREAS & SERVICES -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- Focus Areas -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-bullseye text-2xl text-indigo-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Key Focus Areas</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="border-b border-white/10 pb-3">
                            <span class="block text-indigo-400 font-bold uppercase text-sm mb-1">Business Growth & Expansion</span>
                            <span class="text-sm">Supporting MSMEs in scaling operations, market linkage, and industry-specific growth strategies.</span>
                        </li>
                        <li class="border-b border-white/10 pb-3">
                            <span class="block text-indigo-400 font-bold uppercase text-sm mb-1">Trade & Export Promotion</span>
                            <span class="text-sm">Facilitating import-export opportunities and connecting businesses with global buyers.</span>
                        </li>
                        <li class="border-b border-white/10 pb-3">
                            <span class="block text-indigo-400 font-bold uppercase text-sm mb-1">Policy Advocacy</span>
                            <span class="text-sm">Acting as a voice of MSMEs to policymakers and supporting ease of doing business.</span>
                        </li>
                        <li class="border-b border-white/10 pb-3">
                            <span class="block text-indigo-400 font-bold uppercase text-sm mb-1">Industrial Development</span>
                            <span class="text-sm">Promoting manufacturing, smart infrastructure, and "Make in India" initiatives.</span>
                        </li>
                        <li class="pb-1">
                            <span class="block text-indigo-400 font-bold uppercase text-sm mb-1">Investment & Funding</span>
                            <span class="text-sm">Connecting startups with investors, VC, and private equity funding schemes.</span>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-indigo-100 rounded-xl text-indigo-600">
                            <i class="fa-solid fa-handshake text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Key Services Offered</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg border border-slate-100 shadow-sm transition-all hover:border-indigo-200">
                            <i class="fa-solid fa-network-wired text-indigo-500"></i>
                            <span class="text-sm font-bold text-slate-700 uppercase">Business Networking Forums & Meets</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg border border-slate-100 shadow-sm transition-all hover:border-indigo-200">
                            <i class="fa-solid fa-plane-departure text-indigo-500"></i>
                            <span class="text-sm font-bold text-slate-700 uppercase">International Trade Fairs & Delegations</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg border border-slate-100 shadow-sm transition-all hover:border-indigo-200">
                            <i class="fa-solid fa-users-gear text-indigo-500"></i>
                            <span class="text-sm font-bold text-slate-700 uppercase">Policy Roundtables & Consultations</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg border border-slate-100 shadow-sm transition-all hover:border-indigo-200">
                            <i class="fa-solid fa-trophy text-indigo-500"></i>
                            <span class="text-sm font-bold text-slate-700 uppercase">Awards & Recognition Platforms</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg border border-slate-100 shadow-sm transition-all hover:border-indigo-200">
                            <i class="fa-solid fa-graduation-cap text-indigo-500"></i>
                            <span class="text-sm font-bold text-slate-700 uppercase">Skill Development & Capacity Building</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- INDUSTRIES COVERED -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_bottom_left,rgba(99,102,241,0.05),transparent)]"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4 uppercase italic tracking-wide">Diverse Industries Covered</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            Our Commerce & Industry domain connects multiple high-growth sectors, ensuring comprehensive growth strategies across the national economy.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-center">
                                <p class="text-indigo-400 font-bold mb-1 italic">Multi-Sector</p>
                                <p class="text-[10px] text-slate-400 uppercase tracking-tight">Ecosystem Integration</p>
                            </div>
                            <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-center">
                                <p class="text-indigo-400 font-bold mb-1 italic">Make In India</p>
                                <p class="text-[10px] text-slate-400 uppercase tracking-tight">Self Reliant Economy</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach(['Manufacturing & Engineering', 'FMCG & Retail', 'Chemicals & Petro', 'Textile & Apparel', 'Renewable Energy', 'IT & Digital', 'Agriculture & Food', 'Logistics & Supply'] as $ind)
                        <div class="flex items-center gap-2 px-3 py-2 bg-indigo-900/40 rounded-lg border border-indigo-500/20 text-xs font-bold text-indigo-100 hover:bg-indigo-600 transition-colors">
                            <i class="fa-solid fa-check text-indigo-400"></i> {{ $ind }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- WHY JOIN -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="order-2 md:order-1 space-y-6">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Why Join This Platform?</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-4">
                        @php
                            $items = [
                                ['icon' => 'globe', 'title' => 'Connection to 100K+ business network'],
                                ['icon' => 'building-columns', 'title' => 'Direct connect with government & policymakers'],
                                ['icon' => 'ship', 'title' => 'Opportunities for global trade expansion'],
                                ['icon' => 'medal', 'title' => 'Recognition through national awards platforms'],
                                ['icon' => 'calendar-check', 'title' => 'Participation in high-impact industry events & expos'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-indigo-200 hover:bg-white transition-all group shadow-sm">
                            <div class="w-12 h-12 flex shrink-0 items-center justify-center bg-indigo-100 text-indigo-600 rounded-lg group-hover:bg-indigo-600 group-hover:text-white transition-all shadow-sm">
                                <i class="fa-solid fa-{{ $i['icon'] }} text-lg"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm leading-tight uppercase">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="order-1 md:order-2 p-10 bg-indigo-50 rounded-3xl border border-indigo-100 shadow-sm relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-500/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                    <div class="relative z-10 text-center">
                        <div class="w-20 h-20 mx-auto bg-white rounded-2xl flex items-center justify-center shadow-lg mb-6 text-indigo-600">
                            <i class="fa-solid fa-rocket text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 italic uppercase">Accelerate Your Journey</h3>
                        <p class="text-sm text-slate-600 leading-relaxed font-medium mb-8">
                            Whether you are a startup seeking investment, or an established enterprise looking for global export opportunities, the Commerce & Industry wing is your dedicated partner.
                        </p>
                        <a href="{{ route('join.index') }}" class="inline-flex w-full items-center justify-center p-4 bg-indigo-600 text-white font-black uppercase tracking-widest rounded-xl hover:bg-indigo-700 transition-all shadow-md group/btn">
                            Become a Member <i class="fa-solid fa-arrow-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-indigo-600">
                <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight leading-loose">Collaborate. Execute. Succeed.</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10 italic uppercase font-black">
                        Take your business to the next level with MSMECCII. Connect with global leaders, shape policies, and drive industrial growth.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-indigo-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-indigo-900 transition-all duration-300 shadow-xl group">
                        Get In Touch <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
