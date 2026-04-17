@extends('layouts.website')

@section('title', 'Upcoming Events & Awards - MSMECCII')

@section('content')

<!-- Header Section -->
<section class="py-24 bg-slate-900 border-b border-slate-800 pt-32">
    <div class="container mx-auto px-4 max-w-7xl relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/20 border border-brand-primary/30 mb-6">
            <span class="w-2 h-2 rounded-full bg-brand-primary animate-pulse"></span>
            <span class="text-brand-primary text-xs font-bold tracking-widest uppercase">Global Chambers</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">Events & <span class="text-brand-primary">Conferences</span></h1>
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto font-medium mb-12">
            Join MSMECCII for upcoming trade fairs, digital seminars, and massive networking opportunities shaping the future of global businesses.
        </p>
    </div>
</section>

<!-- Events Grid -->
<section class="py-20 bg-slate-50 min-h-screen">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($events as $event)
                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 group overflow-hidden flex flex-col">
                    <div class="h-56 w-full bg-slate-100 relative overflow-hidden">
                        @if($event->image)
                            <img src="{{ asset($event->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-slate-100">
                                <i class="fa-regular fa-calendar-check text-4xl text-slate-300"></i>
                            </div>
                        @endif
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg border border-white/20 shadow-sm text-xs font-black text-slate-800 flex items-center gap-2">
                            <i class="fa-regular fa-calendar text-brand-primary"></i>
                            @if($event->end_date)
                                {{ $event->event_date->format('M d') }} - {{ $event->end_date->format('M d, Y') }}
                            @else
                                {{ $event->event_date->format('M d, Y') }}
                            @endif
                        </div>
                        @if($event->design_style === 'featured')
                            <div class="absolute top-4 left-4 bg-brand-primary px-3 py-1.5 rounded-lg shadow-sm text-xs font-black text-white flex items-center gap-2 uppercase tracking-wide">
                                <i class="fa-solid fa-star text-white"></i> Featured
                            </div>
                        @endif
                    </div>
                    
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="text-xl font-black text-slate-900 group-hover:text-brand-primary transition-colors mb-3 line-clamp-2">
                            <a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a>
                        </h3>
                        <p class="text-sm font-medium text-slate-500 mb-6 flex-1 line-clamp-3">
                            {{ $event->description ?: 'Join us for this incredible event. Tap below to see the full details and registration links.' }}
                        </p>
                        
                        <div class="flex items-center gap-2 text-xs font-bold text-slate-400 uppercase tracking-wider mb-6">
                            <i class="fa-solid fa-location-dot"></i> {{ Str::limit($event->location, 30) ?: 'Location TBA' }}
                        </div>

                        <a href="{{ route('events.show', $event->slug) }}" class="block w-full bg-slate-50 hover:bg-brand-primary hover:text-white border border-slate-200 hover:border-brand-primary text-slate-700 text-center font-bold py-3 px-4 rounded-xl transition-all">
                            View Event Details
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-20 text-center">
                    <div class="w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-regular fa-calendar-xmark text-4xl text-slate-400"></i>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-2">No Upcoming Events</h3>
                    <p class="text-slate-500 font-medium">There are currently no published events scheduled. Check back soon!</p>
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
