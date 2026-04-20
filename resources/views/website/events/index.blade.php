@extends('layouts.website')

@section('title', 'Global Summits & Business Events | MSMECCII')

@section('content')
<section class="pt-40 pb-24 bg-slate-50 relative overflow-hidden">
    <div class="container relative z-10">
        <div class="max-w-3xl mb-16 animate-on-scroll">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-6">
                <i class="fa-solid fa-calendar-days text-brand-primary text-xs"></i>
                <span class="text-brand-primary text-[10px] font-black tracking-widest uppercase">Official Event Calendar</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight mb-6">
                Upcoming <span class="text-brand-primary">Global Summits</span>
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($events as $event)
                <div class="group relative aspect-square rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 animate-on-scroll">
                    <!-- Background Image -->
                    <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}" 
                         alt="{{ $event->title }}"
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/60 to-transparent opacity-90 group-hover:opacity-100 transition-opacity"></div>

                    <!-- Content Info (All at bottom) -->
                        <div class="absolute transition-all duration-500 bottom-0 left-0 right-0 p-8 z-20">
                            <a href="{{ route('events.show', $event->slug) }}" class="block">
                                <h3 class="text-2xl font-black text-white leading-tight mb-2 group-hover:text-brand-accent transition-colors duration-300">
                                    {{ $event->title }}
                                </h3>
                            </a>

                            @if($event->short_description)
                                <p class="text-white/80 text-sm font-medium leading-relaxed mb-4 line-clamp-2">
                                    {{ $event->short_description }}
                                </p>
                            @endif

                            <!-- Location (Now under title and date) -->
                            <p class="text-slate-300 text-sm font-bold uppercase tracking-wider mb-6 flex items-center gap-2">
                                <i class="fa-solid fa-location-dot text-brand-accent/60"></i>
                                {{ $event->location ?: 'New Delhi, India' }}
                            </p>
                            
                            <!-- Date & Time (Now under title) -->
                            <div class="flex items-center justify-between gap-4 mb-3 border-l-2 border-brand-accent/40 pl-4 ml-1">
                                <div class="flex flex-col">
                                    <span class="text-xs font-black text-white uppercase tracking-widest leading-none mb-1">
                                        @if ($event->event_date)
                                            {{ $event->event_date->format('d') }} @if($event->end_date && $event->event_date->format('Y-m-d') !== $event->end_date->format('Y-m-d')) - {{ $event->end_date->format('d M Y') }} @endif
                                            @else
                                            {{ $event->event_date->format('d M, Y') }}
                                        @endif
                                    </span>
                                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">{{ $event->event_date->format('h:i A') }} Onwards</span>
                                </div>
                                <!-- Bottom Action -->
                                <div class="flex items-center justify-between transition-opacity duration-500">
                                    <a href="{{ route('events.show', $event->slug) }}" class="inline-flex items-center gap-2 text-black text-xs bg-brand-accent pr-4 pl-6 py-3 rounded-full font-black uppercase tracking-widest transition-all">
                                        View Details <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
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
