@extends('layouts.website')

@section('title', 'Global Summits & Business Events | MSMECCII')

@section('content')
    <section class="pt-40 pb-24 bg-slate-50 relative overflow-hidden">
        <div class="container relative z-10">
            <div class="max-w-3xl mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-6">
                    <i class="fa-solid fa-calendar-days text-brand-primary text-xs"></i>
                    <span class="text-brand-primary text-[10px] font-black tracking-widest uppercase">Official Event
                        Calendar</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight mb-6">
                    Upcoming <span class="text-brand-primary">Global Summits</span>
                </h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($events as $event)
                        <div class="group bg-white rounded-lg overflow-hidden border shadow-sm hover:shadow-2xl hover:shadow-slate-200 transition-all duration-500 animate-on-scroll flex flex-col h-full"
                            style="transition-delay: {{ $loop->index * 150 }}ms">

                            <!-- Image Area -->
                            <div class="relative aspect-video overflow-hidden shrink-0">
                                <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}"
                                    alt="{{ $event->title }}"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000">

                                <!-- Category Badge -->
                                <div class="absolute top-4 right-4 z-20">
                                    <span
                                        class="bg-slate-900/90 backdrop-blur-md text-white text-[9px] font-black uppercase tracking-widest px-4 py-2 rounded-lg border border-white/10">
                                        {{ $event->design_style === 'featured' ? '★ Featured' : 'Summit' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Details Area -->
                            <div class="p-6 flex flex-col grow">
                                <a href="{{ route('events.show', $event->slug) }}" class="block mb-4 grow">
                                    <h3
                                        class="text-2xl font-black text-slate-900 leading-tight group-hover:text-brand-primary transition-colors line-clamp-2">
                                        {{ $event->title }}
                                    </h3>
                                </a>

                                @if($event->short_description)
                                    <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-2 font-medium">
                                        {{ $event->short_description }}
                                    </p>
                                @endif

                                <!-- Structured Info (Date & Time Together) -->
                                <div class="grid grid-cols-1 gap-6">
                                    <div class="flex items-center gap-4 group/item">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-brand-primary flex items-center justify-center text-white transition-colors border border-slate-100 shrink-0">
                                            <i class="fa-regular fa-calendar-check text-sm"></i>
                                        </div>
                                        <div>
                                            <p
                                                class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-2">
                                                Event Schedule</p>
                                            <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                                                <span
                                                    class="text-sm font-black text-slate-800 uppercase tracking-wider">@if($event->end_date)
                                                        {{ $event->event_date->format('d') }} -
                                                        {{ $event->end_date->format('d M, Y') }}
                                                        {{ $event->event_date->format('h:i A') }}
                                                    @else
                                                        {{ $event->event_date->format('d M, Y h:i A') }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4 group/item">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-brand-primary flex items-center justify-center text-white transition-colors border border-slate-100 shrink-0">
                                            <i class="fa-solid fa-location-dot text-sm"></i>
                                        </div>
                                        <div>
                                            <p
                                                class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-2">
                                                Event Venue</p>
                                            <p class="text-xs font-bold text-slate-700 uppercase tracking-wider"> {{
                    $event->location ?: 'New Delhi, India' }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Footer -->
                                <div class="mt-10 flex items-center justify-between gap-4">
                                    <a href="{{ route('events.show', $event->slug) }}"
                                        class="grow bg-brand-accent hover:bg-brand-primary text-black hover:text-white text-center py-3 border rounded-md text-sm font-black uppercase tracking-widest transition-all">
                                        Register Now
                                    </a>
                                    <a href="{{ route('events.show', $event->slug) }}"
                                        class="w-11 h-11 rounded-md border flex items-center justify-center text-slate-400 hover:border-brand-primary hover:text-brand-primary transition-all">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                @empty
                    <div class="col-span-full py-24 text-center">
                        <i class="fa-solid fa-calendar-circle-exclamation text-slate-200 text-6xl mb-6 block"></i>
                        <h3 class="text-2xl font-black text-slate-400">No Upcoming Events Found</h3>
                    </div>
                @endforelse
            </div>

            @if($events->hasPages())
                <div class="mt-16 flex justify-center">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection