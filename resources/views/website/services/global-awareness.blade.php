@extends('layouts.website')

@section('title', 'Global Awareness & Thought Leadership - MSMECCII')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/40 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('https://images.unsplash.com/photo-1540575861501-7ad05823c28b?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-6 backdrop-blur-md">
                <i class="fa-solid fa-microphone-lines text-blue-400"></i>
                <span class="text-xs font-black uppercase tracking-widest text-blue-300">Authority on a Global Scale</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black uppercase mb-6 tracking-tight leading-tight">
                Global <span class="text-blue-400">Awareness</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic">
                Bridging the gap between MSMEs and the international stage of excellence.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-24 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: THE VISION -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=2070&auto=format&fit=crop" class="rounded-[3rem] shadow-2xl relative z-10" alt="Global Conference">
                    <div class="absolute -top-8 -right-8 w-64 h-64 bg-blue-500/5 rounded-full blur-3xl"></div>
                </div>
                <div class="space-y-8 animate-on-scroll order-1 lg:order-2">
                    <h2 class="text-4xl font-black text-slate-900 uppercase italic leading-tight border-l-8 border-blue-600 pl-6">
                        Command The <br> <span class="text-blue-600 text-2xl">International Spotlight</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        Visibility is the first step toward universal leadership. MSMECCII provides exclusive, high-impact platforms for small businesses to transition from local players to <strong>Global Industry Thought Leaders</strong>. We don't just organize events; we curate moments of pure industry authority.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="p-6 bg-blue-50 rounded-2xl border border-blue-100">
                            <p class="text-2xl font-black text-blue-900 mb-2">50+</p>
                            <p class="text-[10px] font-black uppercase text-slate-500">Annual Global Summits</p>
                        </div>
                        <div class="p-6 bg-blue-50 rounded-2xl border border-blue-100">
                            <p class="text-2xl font-black text-blue-900 mb-2">10k+</p>
                            <p class="text-[10px] font-black uppercase text-slate-500">International Attendees</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: ENGAGEMENT MODULES -->
            <div class="text-center space-y-12">
                <h3 class="text-4xl font-black uppercase italic text-slate-900">Platforms for Every Ambition</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach([
                        ['t' => 'Elite Keynotes', 'd' => 'Represent your sector as a guest speaker alongside global CEOs.', 'icon' => 'chalkboard-user'],
                        ['t' => 'Industry Panels', 'd' => 'Engage in decisive dialogues with policy makers and market experts.', 'icon' => 'people-line'],
                        ['t' => 'B2B Exhibitions', 'd' => 'Showcase your innovations at world-class industrial trade expos.', 'icon' => 'award']
                    ] as $mod)
                    <div class="p-10 bg-slate-50 rounded-[2.5rem] border border-slate-100 group hover:bg-slate-900 hover:text-white transition-all duration-500">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center text-white mb-6 mx-auto shadow-lg group-hover:scale-110 transition-all">
                             <i class="fa-solid fa-{{ $mod['icon'] }} text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold mb-4 uppercase italic">{{ $mod['t'] }}</h4>
                        <p class="text-slate-500 text-xs font-medium leading-relaxed group-hover:text-slate-400">{{ $mod['d'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: RECENT IMPACT (GALLERY STYLE) -->
             <div class="space-y-12">
                <div class="flex flex-col md:flex-row justify-between items-end gap-6">
                    <h3 class="text-3xl font-black uppercase italic text-slate-900 leading-tight">Global Footprint <br> <span class="text-blue-600">In Action</span></h3>
                    <p class="text-slate-500 text-sm max-w-sm font-medium">Moments of collaboration and leadership across our international summit locations.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach([
                        ['img' => 'https://images.unsplash.com/photo-1591115765373-520b7a21769b?q=80&w=2070&auto=format&fit=crop', 'loc' => 'Dubai Expo'],
                        ['img' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2069&auto=format&fit=crop', 'loc' => 'New Delhi Summit'],
                        ['img' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=2012&auto=format&fit=crop', 'loc' => 'Singapore Tech'],
                        ['img' => 'https://images.unsplash.com/photo-1527529482837-4698179dc6ce?q=80&w=2070&auto=format&fit=crop', 'loc' => 'London B2B Forum']
                    ] as $img)
                    <div class="h-64 relative rounded-2xl overflow-hidden group">
                        <img src="{{ $img['img'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-1000" alt="Summit Location">
                        <div class="absolute inset-0 bg-slate-900/40 group-hover:bg-blue-900/20 transition-all"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="px-3 py-1 bg-white text-[10px] font-black uppercase tracking-widest text-slate-900 rounded-md italic shadow-lg">{{ $img['loc'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
             </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 text-white p-20 rounded-[4rem] text-center shadow-2xl overflow-hidden border-b-8 border-blue-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(59,130,246,0.1),transparent)]"></div>
                <div class="relative z-10 space-y-8">
                    <h3 class="text-4xl md:text-5xl font-black mb-6 uppercase tracking-tight leading-tight">Step Into The <br> Global Arena</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic opacity-80 mb-12">
                        Your business is ready for the world. But is the world ready for you? Let MSMECCII build your authority at the next prestigious summit.
                    </p>
                    <a href="{{ route('join.index') }}" class="inline-flex items-center gap-4 px-12 py-6 bg-blue-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-blue-900 transition-all duration-500 shadow-2xl transform hover:scale-105">
                        Claim Your Speaker Slot <i class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-4"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
