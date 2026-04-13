@extends('layouts.website')

@section('title', $event->title . ' - MSMECCII Event')

@section('content')

@if(empty($event->builder_content) || count($event->builder_content) === 0)
    <!-- Fallback Standard Layout -->
    <section class="py-24 bg-slate-50 min-h-screen pt-32">
        <div class="container mx-auto px-4 max-w-4xl">
            <h1 class="text-4xl font-black text-slate-900 mb-6">{{ $event->title }}</h1>
            @if($event->image)
                <img src="{{ asset($event->image) }}" class="w-full h-[400px] object-cover rounded-3xl mb-8 shadow-sm">
            @endif
            <div class="flex items-center gap-6 mb-8 text-slate-600 font-bold bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <span><i class="fa-regular fa-clock text-brand-primary"></i> {{ $event->event_date->format('F d, Y h:i A') }}</span>
                <span><i class="fa-solid fa-location-dot text-brand-primary"></i> {{ $event->location ?: 'Location TBD' }}</span>
            </div>
            <div class="prose prose-lg max-w-none text-slate-700">
                {{ $event->description }}
            </div>
        </div>
    </section>
@else
    <!-- Advanced Dynamic Native Builder Layout -->
    <div class="min-h-screen bg-slate-50">
        @foreach($event->builder_content as $block)
            
            <section class="{{ $block['padding'] ?? 'py-20' }} {{ $block['bg_color'] ?? 'bg-white' }} relative overflow-hidden">
                <div class="container mx-auto px-4 max-w-7xl relative z-10">

                    <!-- HERO TIMER BLOCK -->
                    @if($block['type'] === 'hero_timer')
                        <div class="flex flex-col lg:flex-row items-center gap-12 bg-white/5 backdrop-blur-sm rounded-3xl p-8 lg:p-12 border border-slate-200/50 shadow-xl"
                             @if(isset($block['content']['image_url'])) style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.9)), url('{{ asset($block['content']['image_url']) }}') center/cover;" @endif>
                             
                            <div class="w-full lg:w-1/2 {{ isset($block['content']['image_url']) ? 'text-white' : 'text-slate-900' }}">
                                <h1 class="text-4xl lg:text-6xl font-black mb-4">{{ $block['content']['title'] ?? 'Upcoming Event' }}</h1>
                                <p class="text-lg lg:text-xl font-medium opacity-80 mb-8">{{ $block['content']['subtitle'] ?? '' }}</p>
                                
                                <div class="flex items-center gap-4">
                                    @if(isset($block['content']['button_text']) && $block['content']['button_text'])
                                        <a href="{{ $block['content']['link_url'] ?? '#' }}" class="bg-brand-primary hover:bg-brand-primary-light text-white font-bold py-4 px-8 rounded-xl transition-all shadow-lg shadow-brand-primary/20">
                                            {{ $block['content']['button_text'] }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="w-full lg:w-1/2">
                                <!-- Alpine Countdown Engine -->
                                @if(!isset($block['content']['show_timer']) || $block['content']['show_timer'] === 'yes')
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
                                    class="grid grid-cols-4 gap-4 text-center">
                                    
                                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 shadow-[inset_0_0_20px_rgba(255,255,255,0.1)]">
                                        <span class="block text-4xl lg:text-6xl font-black text-brand-accent tracking-tighter" x-text="days">0</span>
                                        <span class="block text-xs font-bold uppercase tracking-widest {{ isset($block['content']['image_url']) ? 'text-slate-300' : 'text-slate-500' }} mt-2">Days</span>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 shadow-[inset_0_0_20px_rgba(255,255,255,0.1)]">
                                        <span class="block text-4xl lg:text-6xl font-black text-white tracking-tighter" x-text="hours">0</span>
                                        <span class="block text-xs font-bold uppercase tracking-widest {{ isset($block['content']['image_url']) ? 'text-slate-300' : 'text-slate-500' }} mt-2">Hours</span>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 shadow-[inset_0_0_20px_rgba(255,255,255,0.1)]">
                                        <span class="block text-4xl lg:text-6xl font-black text-white tracking-tighter" x-text="minutes">0</span>
                                        <span class="block text-xs font-bold uppercase tracking-widest {{ isset($block['content']['image_url']) ? 'text-slate-300' : 'text-slate-500' }} mt-2">Mins</span>
                                    </div>
                                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 shadow-[inset_0_0_20px_rgba(255,255,255,0.1)]">
                                        <span class="block text-4xl lg:text-6xl font-black text-white tracking-tighter" x-text="seconds">0</span>
                                        <span class="block text-xs font-bold uppercase tracking-widest {{ isset($block['content']['image_url']) ? 'text-slate-300' : 'text-slate-500' }} mt-2">Secs</span>
                                    </div>
                                </div>
                                @endif
                            </div>

                        </div>
                    @endif

                    <!-- SPLIT TEXT IMAGE BLOCK -->
                    @if($block['type'] === 'split_text_image')
                        <div class="flex flex-col {{ isset($block['direction']) && $block['direction'] === 'col' ? 'items-center text-center' : 'lg:flex-' . ($block['direction'] ?? 'row') }} gap-12 lg:gap-20 items-center">
                            
                            <!-- SubBlock Output Handling -->
                            <div class="w-full {{ isset($block['direction']) && $block['direction'] === 'col' ? 'max-w-4xl mx-auto' : 'lg:w-1/2' }} space-y-6">
                                @if(isset($block['content']['heading']))
                                    <h2 class="text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight">{{ $block['content']['heading'] }}</h2>
                                @endif
                                
                                @if(isset($block['content']['text']))
                                    <p class="text-lg text-slate-600 font-medium leading-relaxed">{{ $block['content']['text'] }}</p>
                                @endif

                                @if(isset($block['content']['btn_text']) && $block['content']['btn_text'])
                                    <a href="{{ $block['content']['btn_link'] ?? '#' }}" class="inline-block bg-slate-900 hover:bg-black text-white font-bold py-4 px-8 rounded-xl transition-all shadow-md mt-4">
                                        {{ $block['content']['btn_text'] }} <i class="fa-solid fa-arrow-right ml-2"></i>
                                    </a>
                                @endif
                            </div>

                            @if(isset($block['content']['image_url']))
                                <div class="w-full {{ isset($block['direction']) && $block['direction'] === 'col' ? 'max-w-4xl mx-auto' : 'lg:w-1/2' }}">
                                    <img src="{{ asset($block['content']['image_url']) }}" alt="Event Image" class="w-full rounded-[2rem] shadow-2xl object-cover h-[400px] lg:h-[500px]">
                                </div>
                            @endif
                        </div>
                    @endif

                </div>
            </section>
        @endforeach
    </div>
@endif

@endsection
