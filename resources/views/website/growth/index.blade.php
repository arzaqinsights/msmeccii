@extends('layouts.website')

@section('title', 'Conference Growth & Statistics')

@section('content')
    <!-- Hero -->
    <section class="relative pt-32 pb-20 bg-brand-primary overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        <div class="container relative z-10 text-center">
            <nav class="flex justify-center mb-6 text-white/50 text-[10px] font-bold uppercase tracking-[0.2em] gap-3 items-center">
                <a href="{{ route('home') }}" class="hover:text-brand-accent transition-colors">Home</a>
                <i class="fa-solid fa-chevron-right text-[8px] opacity-30"></i>
                <span class="text-white">Growth & Statistics</span>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-5 tracking-tight px-4">
                Conference <span class="text-brand-accent italic">Growth</span>
            </h1>
            <p class="text-lg text-white/70 font-medium max-w-2xl mx-auto leading-relaxed px-4">
                Tracking our trajectory from conceptual roots to global business excellence.
            </p>
        </div>
    </section>

    <!-- SECTION 1: CONFERENCES -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="container">
            <div class="text-center mb-16 px-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-primary/5 text-primary rounded-full text-[10px] font-black uppercase tracking-widest mb-4 border border-brand-primary/10">
                    <span class="w-1.5 h-1.5 bg-brand-accent rounded-full animate-pulse"></span>
                    Primary Metrics
                </div>
                <h2 class="text-3xl md:text-5xl font-black text-brand-primary uppercase tracking-tight mb-4 leading-none">
                    Conference <span class="text-brand-accent italic">Journey</span>
                </h2>
                <div class="w-16 h-1.5 bg-brand-accent mx-auto rounded-full"></div>
            </div>

            <!-- Dynamic Staircase (Delegates) -->
            <div class="flex items-end justify-center gap-3 md:gap-8 px-4 mb-24" style="min-height: 450px;">
                @php 
                    // Calculate relative heights based on actual values
                    $maxVal = $delegates->max(function($d) { 
                        return (int) preg_replace('/[^0-9]/', '', $d->value); 
                    }) ?: 1;
                @endphp
                @foreach($delegates as $index => $stat)
                    @php
                        $numericVal = (int) preg_replace('/[^0-9]/', '', $stat->value);
                        $percent = ($numericVal / $maxVal) * 100;
                        // Min height 20%, max scale to 400px container
                        $h = max(20, $percent); 
                    @endphp
                    <div class="flex-1 flex flex-col items-center group">
                        <div class="mb-4 text-center">
                            <span class="text-2xl md:text-4xl font-black text-brand-primary/20 group-hover:text-brand-accent transition-colors duration-500">{{ $stat->year }}</span>
                        </div>
                        <div class="w-full relative overflow-hidden shadow-2xl group-hover:-translate-y-2 transition-all duration-500 border border-brand-primary/5"
                             style="height: {{ ($h / 100) * 400 }}px; background: linear-gradient(180deg, var(--color-brand-primary) 0%, #1a3a66 100%);">
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-1 md:p-3">
                                <div class="text-xl md:text-3xl font-black text-white leading-none tabular-nums tracking-tighter">{{ $stat->value }}</div>
                                <div class="text-[7px] md:text-[9px] font-bold text-brand-accent/90 uppercase tracking-widest mt-2 border-t border-white/10 pt-1.5">{{ $stat->label ?: 'Delegates' }}</div>
                            </div>
                            <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCI+PGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMC41IiBmaWxsPSIjZmZmZmZmIi8+PC9zdmc+')]"></div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Conference Sub-tables -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
                <!-- Speakers Table -->
                <div class="bg-slate-50 rounded-2xl p-8 md:p-12 border border-slate-100 shadow-sm relative overflow-hidden group">
                     <div class="absolute top-0 right-0 p-8 text-brand-primary/5 text-6xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-microphone-lines"></i>
                     </div>
                     <h3 class="text-2xl font-black text-brand-primary uppercase mb-8 flex items-center gap-3">
                        Speakers 
                        <span class="text-[9px] font-bold text-slate-400 normal-case tracking-normal">( in 8 Parallel Halls )</span>
                     </h3>
                     <div class="space-y-3">
                        @php $latestSpeakerYear = $speakers->max('year'); @endphp
                        @foreach($speakers as $stat)
                            <div class="flex items-center justify-between p-4 {{ $stat->year == $latestSpeakerYear ? 'bg-brand-primary text-white scale-105 rounded-2xl shadow-xl' : 'bg-white rounded-2xl' }} transition-all">
                                <span class="font-black {{ $stat->year == $latestSpeakerYear ? 'text-white' : 'text-slate-400' }} tracking-widest text-sm">{{ $stat->year }}</span>
                                <span class="font-black text-2xl tracking-tighter">{{ $stat->value }}</span>
                            </div>
                        @endforeach
                     </div>
                </div>

                <!-- Excellence Table -->
                <div class="bg-slate-50 rounded-2xl p-8 md:p-12 border border-slate-100 shadow-sm relative overflow-hidden group">
                     <div class="absolute top-0 right-0 p-8 text-brand-primary/5 text-6xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-award"></i>
                     </div>
                     <h3 class="text-2xl font-black text-brand-primary uppercase mb-8 flex items-center gap-3">
                        Excellence 
                        <span class="text-[9px] font-bold text-slate-400 normal-case tracking-normal">( In 74 Sectors )</span>
                     </h3>
                     <div class="space-y-3">
                        @php $latestExcellenceYear = $excellence->max('year'); @endphp
                        @foreach($excellence as $stat)
                            <div class="flex items-center justify-between p-4 {{ $stat->year == $latestExcellenceYear ? 'bg-brand-primary text-white scale-105 rounded-2xl shadow-xl' : 'bg-white rounded-2xl' }} transition-all">
                                <span class="font-black {{ $stat->year == $latestExcellenceYear ? 'text-white' : 'text-slate-400' }} tracking-widest text-sm">{{ $stat->year }}</span>
                                <span class="font-black text-2xl tracking-tighter">{{ $stat->value }}</span>
                            </div>
                        @endforeach
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: EXCELLENCE AWARDS -->
    <section class="py-24 bg-brand-primary relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-20 bg-white clip-path-slant"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIj48cmVjdCB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW9wYWNpdHk9IjAuMDUiLz48L3N2Zz4=')]"></div>

        <div class="container relative z-10">
            <div class="text-center mb-16 px-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 text-brand-accent rounded-full text-[10px] font-black uppercase tracking-widest mb-4 border border-white/10">
                    Recognition & Honor
                </div>
                <h2 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight mb-4 leading-none">
                   National business Excellence <span class="text-brand-accent italic">Awards</span>
                </h2>
                <div class="w-16 h-1.5 bg-brand-accent mx-auto rounded-full"></div>
            </div>

            @foreach($awards as $awardTitle => $awardStats)
                <div class="mb-20 px-4">
                    <div class="bg-white/5 backdrop-blur-md rounded-2xl p-8 md:p-20 border border-white/10 shadow-2xl relative overflow-hidden">
                        <div class="absolute -top-12 -right-12 w-48 h-48 bg-brand-accent opacity-5 rounded-full blur-3xl"></div>
                        
                        <div class="text-center mb-16 relative">
                            <h4 class="text-2xl md:text-4xl font-black text-white underline decoration-brand-accent decoration-8 underline-offset-4 mb-4 tracking-tighter italic">"{{ $awardTitle }}"</h4>
                            <p class="text-white/50 text-sm font-bold uppercase tracking-widest">Global Honor Statistics</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                            @foreach($awardStats as $stat)
                                <div class="bg-white rounded-2xl p-10 text-center shadow-lg hover:translate-y-[-10px] transition-transform duration-500 border border-slate-100 flex flex-col justify-center min-h-[220px]">
                                    <div class="text-4xl md:text-6xl font-black text-brand-primary mb-3 tabular-nums tracking-tighter">{{ $stat->value }}</div>
                                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] leading-tight px-4">{{ $stat->label ?: $stat->category }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Footer Quote -->
            <div class="text-center mt-20 px-4">
                <p class="text-white/40 text-[10px] font-black uppercase tracking-[0.5em] italic">
                    ( Including Start Up & MSME, Middle Industries, Corporate Organisation )
                </p>
            </div>
        </div>
    </section>

    <!-- Admin CTA -->
    @if(Auth::check() && Auth::user()->role === 'admin')
        <a href="{{ route('admin.growth.index') }}" class="fixed bottom-8 right-8 z-[100] bg-brand-primary text-white p-4 rounded-2xl shadow-2xl hover:scale-110 transition-transform group flex items-center gap-3 border border-white/20">
            <i class="fa-solid fa-gear group-hover:rotate-90 transition-transform"></i>
            <span class="font-bold text-sm pr-2">Manage Stats</span>
        </a>
    @endif

    <style>
        .clip-path-slant {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 0);
        }
    </style>
@endsection
