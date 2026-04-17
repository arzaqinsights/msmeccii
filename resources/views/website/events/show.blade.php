@extends('layouts.website')

@section('title', $event->title . ' - MSMECCII Event')

@section('content')

<section class="py-24 bg-slate-50 min-h-screen pt-32 relative">
    <div class="container mx-auto px-4 max-w-5xl relative z-10">
        
        <!-- Header Image -->
        @if($event->image)
            <div class="w-full h-[400px] md:h-[500px] mb-12 rounded-[2rem] overflow-hidden shadow-2xl relative">
                <img src="{{ asset($event->image) }}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 via-transparent to-transparent"></div>
            </div>
        @endif

        <div class="flex flex-col lg:flex-row gap-12">
            
            <div class="w-full lg:w-2/3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-4 text-brand-primary text-xs font-bold tracking-widest uppercase">
                    <i class="fa-solid fa-microphone-lines"></i> Official Event
                </div>
                
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 leading-tight">{{ $event->title }}</h1>
                
                <div class="flex flex-wrap items-center gap-6 mb-10 text-slate-600 font-bold bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-brand-primary/10 flex items-center justify-center text-brand-primary">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div>
                            <span class="block text-[10px] text-slate-400 uppercase tracking-widest leading-none mb-1">Date & Time</span>
                            <span class="text-sm">
                                @if($event->end_date)
                                    {{ $event->event_date->format('M d, Y') }} - {{ $event->end_date->format('M d, Y') }}
                                    <span class="text-slate-400 ml-1">({{ $event->event_date->format('h:i A') }})</span>
                                @else
                                    {{ $event->event_date->format('F d, Y - h:i A') }}
                                @endif
                            </span>
                        </div>
                    </div>
                    
                    <div class="w-px h-10 bg-slate-200 hidden md:block"></div>

                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-500">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <span class="block text-[10px] text-slate-400 uppercase tracking-widest leading-none mb-1">Location</span>
                            <span class="text-sm">{{ $event->location ?: 'Virtual / To Be Announced' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="prose prose-lg max-w-none text-slate-700 font-medium leading-relaxed mb-12">
                    {{ $event->description }}
                </div>
                
                @if($event->builder_content && count($event->builder_content) > 0)
                    <div class="bg-indigo-50 border border-indigo-100 rounded-2xl p-8 mb-12 shadow-sm">
                        <h3 class="text-lg font-black text-indigo-900 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-paperclip"></i>
                            Official Event Resources
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($event->builder_content as $resource)
                                @if(!empty($resource['url']))
                                    <div class="bg-white p-4 rounded-xl border border-indigo-100 flex items-center justify-between group hover:border-brand-primary transition-all">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-indigo-50 flex items-center justify-center text-indigo-600 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </div>
                                            <div>
                                                <p class="text-sm font-black text-slate-900 leading-tight">{{ $resource['title'] ?: 'Resource File' }}</p>
                                                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Attachment</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset($resource['url']) }}" target="_blank" class="text-indigo-600 hover:text-brand-primary font-bold text-xs flex items-center gap-1">
                                            View <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @elseif($event->download_file)
                    <div class="bg-indigo-50 border border-indigo-100 rounded-2xl p-8 mb-12 flex items-center justify-between shadow-sm">
                        <div>
                            <h3 class="text-lg font-black text-indigo-900 mb-1">Attached Event Resources</h3>
                            <p class="text-sm text-indigo-700 font-medium">View the official brochure or resources for this event.</p>
                        </div>
                        <a href="{{ asset($event->download_file) }}" target="_blank" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl font-bold transition-all shadow-md flex items-center gap-2">
                            <i class="fa-solid fa-eye"></i> {{ $event->download_btn_text ?: 'View Resource' }}
                        </a>
                    </div>
                @endif
            </div>

            <!-- Sidebar / Timer -->
            <div class="w-full lg:w-1/3">
                <div class="sticky top-32 space-y-6">
                    
                    @if($event->show_timer)
                        <div class="bg-slate-900 rounded-3xl p-8 shadow-xl border border-slate-800 text-center relative overflow-hidden">
                            <!-- Background gradient -->
                            <div class="absolute inset-0 bg-linear-to-br from-brand-primary/20 to-transparent"></div>
                            
                            <h4 class="text-white font-black tracking-widest uppercase mb-6 relative z-10"><i class="fa-solid fa-hourglass-half text-brand-primary"></i> Live Countdown</h4>
                            
                            <div x-data="{
                                    target: new Date('{{ $event->event_date->format('Y-m-d\TH:i:s') }}').getTime(),
                                    now: new Date().getTime(),
                                    get t() { return Math.max(0, this.target - this.now); },
                                    get days() { return Math.floor(this.t / (1000 * 60 * 60 * 24)); },
                                    get hours() { return Math.floor((this.t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); },
                                    get minutes() { return Math.floor((this.t % (1000 * 60 * 60)) / (1000 * 60)); },
                                    get seconds() { return Math.floor((this.t % (1000 * 60)) / 1000); }
                                }" 
                                x-init="setInterval(() => now = new Date().getTime(), 1000)" 
                                class="grid grid-cols-2 gap-4 relative z-10">
                                
                                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20">
                                    <span class="block text-3xl font-black text-white tracking-tighter" x-text="days">0</span>
                                    <span class="block text-[10px] font-bold uppercase tracking-widest text-brand-primary mt-1">Days</span>
                                </div>
                                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20">
                                    <span class="block text-3xl font-black text-white tracking-tighter" x-text="hours">0</span>
                                    <span class="block text-[10px] font-bold uppercase tracking-widest text-blue-400 mt-1">Hours</span>
                                </div>
                                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20">
                                    <span class="block text-3xl font-black text-white tracking-tighter" x-text="minutes">0</span>
                                    <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-300 mt-1">Mins</span>
                                </div>
                                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20">
                                    <span class="block text-3xl font-black text-white tracking-tighter" x-text="seconds">0</span>
                                    <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-300 mt-1">Secs</span>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200">
                        <h4 class="text-slate-900 font-black tracking-widest uppercase mb-4 text-center">Interested?</h4>
                        <a href="{{ route('join.index') }}" class="block w-full bg-brand-primary hover:bg-brand-primary-light text-white text-center font-bold py-4 rounded-xl shadow-lg shadow-brand-primary/20 transition-all">
                            Register & Join
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
