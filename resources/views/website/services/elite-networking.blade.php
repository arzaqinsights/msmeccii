@extends('layouts.website')

@section('title', 'Elite Networking & B2B Matchmaking - MSMECCII')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900/40 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-6 backdrop-blur-md">
                <i class="fa-solid fa-users-viewfinder text-indigo-400"></i>
                <span class="text-xs font-black uppercase tracking-widest text-indigo-300">Exclusive High-Value Connections</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black uppercase mb-6 tracking-tight leading-tight">
                Elite <span class="text-indigo-400">Networking</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic">
                Unlocking growth through strategic B2B matchmaking and professional synergy.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-24 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: THE POWER OF NETWORK -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8 animate-on-scroll">
                    <h2 class="text-4xl font-black text-slate-900 uppercase italic leading-tight border-l-8 border-indigo-600 pl-6">
                        Your Network IS <br> <span class="text-indigo-600 text-2xl">Your Net Worth</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        In the world of business, access is everything. MSMECCII's Elite Networking framework provides an unparalleled gateway to high-value collaborations. We facilitate strategic connections between MSMEs, global investors, and corporate giants through our exclusive core networking channels.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        @foreach(['Investors', 'CXOs', 'Strategists', 'Founders'] as $net)
                            <div class="px-6 py-3 bg-indigo-50 border border-indigo-100 rounded-full text-[10px] font-black uppercase tracking-widest text-indigo-600">
                                {{ $net }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" class="rounded-[3rem] shadow-2xl relative z-10 grayscale hover:grayscale-0 transition-all duration-700" alt="Networking Elite">
                    <div class="absolute -bottom-10 -right-10 w-72 h-72 bg-indigo-500/5 rounded-full blur-[100px]"></div>
                </div>
            </div>

            <!-- SECTION 2: THE ECOSYSTEM (CARDS WITH IMAGES) -->
            <div class="space-y-12">
                <div class="text-center max-w-3xl mx-auto">
                    <h3 class="text-3xl font-black uppercase italic text-slate-900 mb-6 tracking-tighter">Strategic Matchmaking Ecosystem</h3>
                    <p class="text-slate-500 font-medium italic">A multi-layered approach to building business synergy.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach([
                        ['t' => 'B2B Matchmaking', 'img' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=2074&auto=format&fit=crop', 'd' => 'Precise alignment with supply chain partners and distributors.'],
                        ['t' => 'Investor Pitching', 'img' => 'https://images.unsplash.com/photo-1600880212319-7834e53f12df?q=80&w=2070&auto=format&fit=crop', 'd' => 'Direct access to VCs and angel networks for MSME funding.'],
                        ['t' => 'CXO Masterminds', 'img' => 'https://images.unsplash.com/photo-1541746972996-4e0b0f43e01a?q=80&w=2070&auto=format&fit=crop', 'd' => 'Closed-door sessions with industry veterans for market wisdom.']
                    ] as $eco)
                    <div class="group relative h-[450px] overflow-hidden rounded-[3rem] shadow-lg border-b-[8px] border-indigo-600">
                        <img src="{{ $eco['img'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Networking Step">
                        <div class="absolute inset-0 bg-gradient-to-t from-indigo-950 via-slate-900/10 to-transparent"></div>
                        <div class="absolute bottom-10 left-10 right-10">
                            <h4 class="text-2xl font-black text-white mb-4 uppercase italic tracking-tight">{{ $eco['t'] }}</h4>
                            <p class="text-indigo-200 text-xs font-bold leading-relaxed opacity-80 group-hover:opacity-100 transition-opacity">{{ $eco['d'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: KEY DELIVERABLES -->
            <div class="p-16 rounded-[4rem] bg-indigo-600 text-white overflow-hidden relative shadow-3xl">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
                <div class="relative z-10 grid lg:grid-cols-2 gap-20 items-center">
                    <div class="space-y-8">
                        <h3 class="text-4xl font-black uppercase italic tracking-widest text-white/90">Deliverables</h3>
                        <div class="grid md:grid-cols-2 gap-8">
                            @foreach([
                                'Exclusive Directory Access',
                                '1-on-1 Mentorship Slots',
                                'Priority B2B Invitations',
                                'Trade Mission Delegations'
                            ] as $item)
                            <div class="flex items-center gap-4 group">
                                <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center group-hover:bg-white group-hover:text-indigo-600 transition-all">
                                    <i class="fa-solid fa-link text-sm uppercase"></i>
                                </div>
                                <span class="text-xs font-black uppercase tracking-tight">{{ $item }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <div class="p-10 bg-white/10 border border-white/20 rounded-[3rem] backdrop-blur-md">
                            <p class="text-3xl font-black text-white mb-4 italic leading-tight uppercase">5000+ Exclusive Memberships</p>
                            <p class="text-indigo-100 text-sm italic font-medium">Join the most influential network of CEOs, Government Liaisoning Officers, and MSME Founders in the country.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 text-white p-20 rounded-[5rem] text-center shadow-4xl overflow-hidden border-b-[20px] border-indigo-600 group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(79,70,229,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-12">
                    <h3 class="text-5xl md:text-7xl font-black mb-8 uppercase tracking-tight leading-[0.9]">Meet The <br> Right People</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic mb-12 opacity-80">
                        Stop knocking on closed doors. Leverage MSMECCII's authority to get a seat at the tables where decisions are made.
                    </p>
                    <a href="{{ route('register') }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-indigo-900 font-black uppercase tracking-[0.2em] rounded-full hover:bg-indigo-600 hover:text-white transition-all duration-700 shadow-4xl transform hover:scale-110">
                        Join Elite Network <i class="fa-solid fa-users text-indigo-400 group-hover:text-white transition-colors"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
