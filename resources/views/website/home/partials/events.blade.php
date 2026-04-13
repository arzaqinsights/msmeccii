@if(isset($featuredEvent) && $featuredEvent)
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-4 max-w-7xl">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6 animate-on-scroll">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-500/10 border border-red-500/20 mb-4">
                        <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                        <span class="text-red-600 text-xs font-bold tracking-widest uppercase">Upcoming Featured Event</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900">
                        {{ $featuredEvent->title }}
                    </h2>
                </div>
                <a href="{{ route('events.index') }}" class="inline-flex items-center gap-2 bg-brand-primary text-white border-2 border-brand-primary px-6 py-3 rounded-md font-bold hover:bg-transparent hover:text-brand-primary transition-all duration-300">
                    Explore All Events
                    <i class="fa-regular fa-calendar ml-1"></i>
                </a>
            </div>

            <!-- Custom Event Page Builder Output natively injected! -->
            @if(is_array($featuredEvent->builder_content) && count($featuredEvent->builder_content) > 0)
                <div class="bg-slate-50 rounded-[3rem] overflow-hidden shadow-2xl animate-on-scroll delay-100">
                    @foreach($featuredEvent->builder_content as $block)
                        
                        <div class="{{ $block['padding'] ?? 'py-20' }} {{ $block['bg_color'] ?? 'bg-white' }} relative">
                            <div class="container mx-auto px-4 max-w-7xl relative z-10">

                                <!-- HERO TIMER BLOCK -->
                                @if($block['type'] === 'hero_timer')
                                    <div class="flex flex-col lg:flex-row items-center gap-12 bg-white/5 backdrop-blur-sm rounded-3xl p-8 lg:p-12 border border-slate-200/50 shadow-xl"
                                         @if(isset($block['content']['image_url'])) style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.9)), url('{{ asset($block['content']['image_url']) }}') center/cover;" @endif>
                                         
                                        <div class="w-full lg:w-1/2 {{ isset($block['content']['image_url']) ? 'text-white' : 'text-slate-900' }}">
                                            <h1 class="text-3xl lg:text-5xl font-black mb-4">{{ $block['content']['title'] ?? 'Upcoming Event' }}</h1>
                                            <p class="text-lg font-medium opacity-80 mb-8">{{ $block['content']['subtitle'] ?? '' }}</p>
                                            
                                            <div class="flex items-center gap-4">
                                                @if(isset($block['content']['button_text']) && $block['content']['button_text'])
                                                    <a href="{{ $block['content']['link_url'] ?? '#' }}" class="bg-brand-primary hover:bg-brand-primary-light text-white font-bold py-4 px-8 rounded-xl transition-all shadow-lg shadow-brand-primary/20">
                                                        {{ $block['content']['button_text'] }}
                                                    </a>
                                                @endif
                                                <a href="{{ route('events.show', $featuredEvent->slug) }}" class="border border-white/30 hover:bg-white/10 text-white font-bold py-4 px-8 rounded-xl transition-all">
                                                    Event Details
                                                </a>
                                            </div>
                                        </div>

                                        <div class="w-full lg:w-1/2">
                                            <!-- Alpine Countdown Engine -->
                                            @if(!isset($block['content']['show_timer']) || $block['content']['show_timer'] === 'yes')
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
                                                class="grid grid-cols-4 gap-4 text-center">
                                                
                                                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 shadow-[inset_0_0_20px_rgba(255,255,255,0.1)]">
                                                    <span class="block text-3xl lg:text-5xl font-black text-brand-accent tracking-tighter" x-text="days">0</span>
                                                    <span class="block text-[10px] font-bold uppercase tracking-widest {{ isset($block['content']['image_url']) ? 'text-slate-300' : 'text-slate-500' }} mt-2">Days</span>
                                                </div>
                                                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 shadow-[inset_0_0_20px_rgba(255,255,255,0.1)]">
                                                    <span class="block text-3xl lg:text-5xl font-black text-white tracking-tighter" x-text="hours">0</span>
                                                    <span class="block text-[10px] font-bold uppercase tracking-widest {{ isset($block['content']['image_url']) ? 'text-slate-300' : 'text-slate-500' }} mt-2">Hours</span>
                                                </div>
                                                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 shadow-[inset_0_0_20px_rgba(255,255,255,0.1)]">
                                                    <span class="block text-3xl lg:text-5xl font-black text-white tracking-tighter" x-text="minutes">0</span>
                                                    <span class="block text-[10px] font-bold uppercase tracking-widest {{ isset($block['content']['image_url']) ? 'text-slate-300' : 'text-slate-500' }} mt-2">Mins</span>
                                                </div>
                                                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/20 shadow-[inset_0_0_20px_rgba(255,255,255,0.1)]">
                                                    <span class="block text-3xl lg:text-5xl font-black text-white tracking-tighter" x-text="seconds">0</span>
                                                    <span class="block text-[10px] font-bold uppercase tracking-widest {{ isset($block['content']['image_url']) ? 'text-slate-300' : 'text-slate-500' }} mt-2">Secs</span>
                                                </div>
                                            </div>
                                            @endif
                                        </div>

                                    </div>
                                @endif

                                <!-- SPLIT TEXT IMAGE BLOCK -->
                                @if($block['type'] === 'split_text_image')
                                    <div class="flex flex-col {{ isset($block['direction']) && $block['direction'] === 'col' ? 'items-center text-center' : 'lg:flex-' . ($block['direction'] ?? 'row') }} gap-12 items-center">
                                        
                                        <div class="w-full {{ isset($block['direction']) && $block['direction'] === 'col' ? 'max-w-4xl mx-auto' : 'lg:w-1/2' }} space-y-6">
                                            @if(isset($block['content']['heading']))
                                                <h2 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight leading-tight">{{ $block['content']['heading'] }}</h2>
                                            @endif
                                            
                                            @if(isset($block['content']['text']))
                                                <p class="text-base text-slate-600 font-medium leading-relaxed">{{ $block['content']['text'] }}</p>
                                            @endif

                                            @if(isset($block['content']['btn_text']) && $block['content']['btn_text'])
                                                <a href="{{ $block['content']['btn_link'] ?? '#' }}" class="inline-block bg-slate-900 hover:bg-black text-white font-bold py-3 px-8 rounded-xl transition-all shadow-md mt-2">
                                                    {{ $block['content']['btn_text'] }} <i class="fa-solid fa-arrow-right ml-2"></i>
                                                </a>
                                            @endif
                                        </div>

                                        @if(isset($block['content']['image_url']))
                                            <div class="w-full {{ isset($block['direction']) && $block['direction'] === 'col' ? 'max-w-4xl mx-auto' : 'lg:w-1/2' }}">
                                                <img src="{{ asset($block['content']['image_url']) }}" alt="Event Media" class="w-full rounded-3xl shadow-xl object-cover h-[300px] lg:h-[400px]">
                                            </div>
                                        @endif
                                    </div>
                                @endif

                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Fallback Featured Event Card if Builder wasn't deliberately used -->
                <div class="relative bg-slate-900 rounded-[3rem] overflow-hidden shadow-2xl animate-on-scroll delay-100 flex flex-col lg:flex-row items-center border border-slate-800">
                    <div class="w-full lg:w-3/5 p-10 lg:p-16 relative z-20">
                        <h3 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight">
                            {{ $featuredEvent->title }}
                        </h3>
                        <p class="text-lg text-slate-300 mb-8 leading-relaxed max-w-xl">
                            {{ $featuredEvent->description ?: 'Join the industry leaders and change-makers at our latest upcoming featured event. Discover new opportunities, networking, and expert keynotes.' }}
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10 border-t border-slate-800 pt-8 mt-8">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-brand-primary/20 flex items-center justify-center shrink-0">
                                    <i class="fa-regular fa-calendar text-brand-primary w-5 h-5"></i>
                                </div>
                                <div>
                                    <h5 class="text-white font-bold text-sm uppercase tracking-wider mb-1">Date Sequence</h5>
                                    <p class="text-slate-400 font-medium">{{ $featuredEvent->event_date->format('F d, Y') }}</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-location-dot text-blue-400 w-5 h-5"></i>
                                </div>
                                <div>
                                    <h5 class="text-white font-bold text-sm uppercase tracking-wider mb-1">Location Map</h5>
                                    <p class="text-slate-400 font-medium">{{ $featuredEvent->location ?: 'Virtual/TBA' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4">
                            <a href="{{ route('events.show', $featuredEvent->slug) }}" class="bg-brand-primary hover:bg-brand-primary-light text-white px-8 py-4 rounded-xl font-bold transition-all shadow-lg shadow-brand-primary/20 group">
                                Standard Registration <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="w-full lg:w-2/5 h-full min-h-[400px] lg:absolute lg:right-0 lg:top-0 lg:bottom-0 bg-slate-800">
                        @if($featuredEvent->image)
                            <img src="{{ asset($featuredEvent->image) }}" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-700">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-slate-800/80">
                                <i class="fa-regular fa-calendar-check text-6xl text-slate-600"></i>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-linear-to-r from-slate-900 to-transparent lg:block hidden"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-transparent to-transparent lg:hidden block"></div>
                    </div>
                </div>
            @endif
            
        </div>
    </section>
@endif
