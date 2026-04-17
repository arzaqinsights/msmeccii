@if(isset($featuredEvent) && $featuredEvent)
    <section class="py-24 bg-white relative">
        <div class="container">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row justify-between mb-6 gap-6 animate-on-scroll">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary border mb-4">
                        <span class="w-2 h-2 rounded-full bg-brand-light"></span>
                        <span class="text-brand-light text-xs font-bold tracking-widest uppercase">Upcoming Featured Event</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl max-w-xs md:max-w-none font-extrabold text-brand-primary leading-tight">
                        Our Upcoming <span class="text-brand-accent">Events</span>
                    </h2>
                </div>
                <div class="hidden md:flex items-center gap-4">
                    <a href="{{ route('events.index') }}" class="inline-flex items-center gap-2 text-brand-light bg-brand-primary border-2 border-slate-200 px-6 py-3 rounded-md font-bold hover:bg-slate-50 hover:text-slate-700 transition-all duration-300">
                        All Events <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="relative bg-slate-900 rounded-md overflow-hidden animate-on-scroll delay-100 flex flex-col lg:flex-row items-center border border-slate-800">
                <div class="w-full lg:w-1/2 p-10 lg:p-16 relative z-20">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-brand-light mb-4 leading-tight">{{ $featuredEvent->title }}</h2>
                    <p class="text-lg text-slate-300 mb-8 leading-relaxed">
                        {{ $featuredEvent->description ?: 'Join the industry leaders and change-makers at our latest upcoming featured event. Discover new opportunities, networking, and expert keynotes.' }}
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 border-t border-slate-800 pt-8 mt-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-brand-primary/20 flex items-center justify-center shrink-0">
                                <i class="fa-regular fa-clock text-brand-primary w-5 h-5"></i>
                            </div>
                            <div>
                                <h5 class="text-white font-bold text-sm uppercase tracking-wider mb-1">Date & Time</h5>
                                <p class="text-slate-400 font-medium">
                                    @if($featuredEvent->end_date)
                                        {{ $featuredEvent->event_date->format('M d') }} - {{ $featuredEvent->end_date->format('M d, Y') }}
                                    @else
                                        {{ $featuredEvent->event_date->format('F d, Y h:i A') }}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-location-dot text-blue-400 w-5 h-5"></i>
                            </div>
                            <div>
                                <h5 class="text-white font-bold text-sm uppercase tracking-wider mb-1">Location Base</h5>
                                <p class="text-slate-400 font-medium">{{ $featuredEvent->location ?: 'Virtual/TBA' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center gap-4">
                        <a href="{{ route('events.show', $featuredEvent->slug) }}" class="bg-brand-primary shrink-0 hover:bg-brand-primary-light w-full md:w-auto text-white px-8 py-4 rounded-xl font-bold transition-all shadow-lg shadow-brand-primary/20 group">
                            Event Details <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        
                        @if($featuredEvent->builder_content && count($featuredEvent->builder_content) > 0)
                            <div class="flex flex-col md:flex-row gap-3 w-full">
                                @foreach(array_slice($featuredEvent->builder_content, 0, 2) as $resource)
                                    <a href="{{ asset($resource['url']) }}" target="_blank" class="bg-white/10 hover:bg-white/20 text-white w-full md:w-auto px-8 py-4 rounded-xl font-bold transition-all border border-white/10 flex items-center">
                                        {{ $resource['title'] ?: 'View Resource' }}
                                    </a>
                                @endforeach
                            </div>
                        @elseif($featuredEvent->download_file)
                            <a href="{{ asset($featuredEvent->download_file) }}" target="_blank" class="bg-white/10 hover:bg-white/20 w-full md:w-auto text-white px-8 py-4 rounded-xl font-bold transition-all border border-white/10 inline-block mt-4">
                                {{ $featuredEvent->download_btn_text ?: 'View' }}
                            </a>
                        @endif
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2 h-full min-h-[400px] lg:absolute lg:right-0 lg:top-0 lg:bottom-0 bg-slate-800 flex items-center justify-center relative">
                    <!-- Background Cover -->
                    @if($featuredEvent->image)
                        <img src="{{ asset($featuredEvent->image) }}" class="absolute inset-0 w-full h-full object-cover opacity-30">
                    @else
                        <div class="absolute inset-0 bg-slate-800"></div>
                    @endif
                    
                    <div class="absolute inset-0 bg-linear-to-r from-slate-900 to-transparent lg:block hidden"></div>
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/50 to-transparent lg:hidden block"></div>

                    <!-- Centered Timer Injection -->
                    @if($featuredEvent->show_timer)
                        <div class="relative z-50 p-8">
                            <h4 class="text-center text-white font-black tracking-widest uppercase mb-6"><i class="fa-solid fa-hourglass-half text-brand-primary"></i> Countdown to Launch</h4>
                            
                            <div x-data="{
                                    target: new Date('{{ $featuredEvent->event_date->format('Y-m-d\TH:i:s') }}').getTime(),
                                    now: new Date().getTime(),
                                    get t() { return Math.max(0, this.target - this.now); },
                                    get days() { return Math.floor(this.t / (1000 * 60 * 60 * 24)); },
                                    get hours() { return Math.floor((this.t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); },
                                    get minutes() { return Math.floor((this.t % (1000 * 60 * 60)) / (1000 * 60)); },
                                    get seconds() { return Math.floor((this.t % (1000 * 60)) / 1000); }
                                }" 
                                x-init="setInterval(() => now = new Date().getTime(), 1000)" 
                                class="flex justify-center gap-4 md:gap-6 text-center">
                                
                                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-4 md:p-6 border border-white/20 shadow-2xl min-w-[80px]">
                                    <span class="block text-4xl md:text-6xl font-black text-white tracking-tighter shadow-sm" x-text="days">0</span>
                                    <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-300 mt-2">Days</span>
                                </div>
                                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-4 md:p-6 border border-white/20 shadow-2xl min-w-[80px]">
                                    <span class="block text-4xl md:text-6xl font-black text-white tracking-tighter shadow-sm" x-text="hours">0</span>
                                    <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-300 mt-2">Hours</span>
                                </div>
                                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-4 md:p-6 border border-white/20 shadow-2xl min-w-[80px]">
                                    <span class="block text-4xl md:text-6xl font-black text-white tracking-tighter shadow-sm" x-text="minutes">0</span>
                                    <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-300 mt-2">Mins</span>
                                </div>
                                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-4 md:p-6 border border-white/20 shadow-2xl min-w-[80px]">
                                    <span class="block text-4xl md:text-6xl font-black text-white tracking-tighter shadow-sm" x-text="seconds">0</span>
                                    <span class="block text-[10px] font-bold uppercase tracking-widest text-slate-300 mt-2">Secs</span>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>
@endif
