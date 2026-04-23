@if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container relative z-10">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-16 gap-6 animate-on-scroll">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-rose-500/5 border border-rose-500/10 mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span>
                        <span class="text-slate-900 text-[10px] font-black tracking-widest uppercase">Upcoming Events</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight">
                        Global Summit <span class="text-brand-primary">Events</span>
                    </h2>
                    <p class="text-slate-600 mt-4">Join us for the most anticipated business events of the year. Connect with industry leaders, discover new opportunities, and be part of the conversation that matters.</p>
                </div>
                <div class="hidden md:block text-right">
                    <a href="{{ route('events.index') }}" class="text-sm font-semibold text-white bg-brand-primary p-4 rounded-md transition-all">
                        View All Events <i class="fa-solid fa-arrow-right-long ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($upcomingEvents as $event)
                    <div class="group relative aspect-4/6 md:aspect-4/5 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 animate-on-scroll" style="transition-delay: {{ $loop->index * 100 }}ms">
                        <!-- Background Image -->
                        <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}" 
                             alt="{{ $event->title }}"
                             class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000">
                        
                        <!-- Rich Gradient Overlay (Taller gradient for more text at bottom) -->
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/80 to-transparent opacity-90 group-hover:opacity-100 transition-opacity"></div>

                        <!-- Status Badge (Top Right) -->
                        <div class="absolute top-5 right-5 z-20">
                            <span class="bg-white/10 backdrop-blur-md border border-white/20 text-white text-[8px] font-black uppercase tracking-widest px-3 py-1.5 rounded-full">
                                {{ $event->design_style === 'featured' ? 'Featured' : 'Summit' }}
                            </span>
                        </div>

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
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-3 border-l-2 border-brand-accent/40 pl-4 ml-1">
                                <div class="flex flex-col">
                                    <span class="text-base font-black text-white uppercase tracking-widest leading-none mb-1">
                                        @if ($event->event_date)
                                            {{ $event->event_date->format('d') }} @if($event->end_date && $event->event_date->format('Y-m-d') !== $event->end_date->format('Y-m-d')) - {{ $event->end_date->format('d M Y') }} @endif
                                            @else
                                            {{ $event->event_date->format('d M, Y') }}
                                        @endif
                                    </span>
                                    <span class="text-sm font-bold text-slate-400 uppercase tracking-widest">{{ $event->event_date->format('h:i A') }} Onwards</span>
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
                @endforeach
            </div>
        </div>
    </section>
@endif
