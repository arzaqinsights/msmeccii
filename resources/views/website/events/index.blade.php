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
                <div class="group relative aspect-4/3 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 animate-on-scroll">
                    <!-- Background Image -->
                    <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}" 
                         alt="{{ $event->title }}"
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/60 to-transparent opacity-90 group-hover:opacity-100 transition-opacity"></div>

                    <!-- Content Info (All at bottom) -->
                    <div class="absolute bottom-0 left-0 right-0 p-8 z-20">
                        <h3 class="text-2xl font-black text-white leading-tight mb-4 group-hover:text-brand-accent transition-colors duration-300">
                            {{ $event->title }}
                        </h3>
                        
                        <!-- Date & Time Info -->
                        <div class="flex flex-col gap-1 mb-3 border-l-2 border-brand-accent pl-4">
                            <span class="text-[10px] font-black text-white uppercase tracking-widest">
                                {{ $event->event_date->format('d M, Y') }} 
                                @if($event->end_date && $event->event_date->format('Y-m-d') !== $event->end_date->format('Y-m-d')) 
                                    - {{ $event->end_date->format('d M') }} 
                                @endif
                            </span>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">{{ $event->event_date->format('h:i A') }} IST</span>
                        </div>

                        <!-- Location Info -->
                        <p class="text-slate-300 text-[10px] font-bold uppercase tracking-wider mb-6 flex items-center gap-2 pl-4">
                            <i class="fa-solid fa-location-dot text-brand-accent/60"></i>
                            {{ $event->location ?: 'New Delhi, India' }}
                        </p>

                        <!-- Action -->
                        <div class="mt-4 pt-5 border-t border-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <a href="{{ route('events.show', $event->slug) }}" class="inline-flex items-center gap-2 text-white text-[9px] font-black uppercase tracking-widest hover:text-brand-accent">
                                View Full Details <i class="fa-solid fa-arrow-right-long text-brand-accent"></i>
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
