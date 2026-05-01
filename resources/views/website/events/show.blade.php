@extends('layouts.website')

@section('title', $event->title . ' | MSMECCII Events')

@php
    // Fetch Wall of Excellence awards to show on the event page
    $excellenceAwards = \App\Models\ExcellenceAward::where('status', 'published')
        ->where('show_on_home', true)
        ->orderBy('order')
        ->take(3)
        ->get();
@endphp

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center pt-32 pb-24 overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-slate-900"></div>
        </div>

        <div class="container relative z-10">
            <div class="flex flex-col items-center gap-6 lg:gap-8">

                <div class="flex flex-col lg:flex-row gap-8 items-center justify-between">
                    <!-- Left Side Details -->
                    <div class="w-full lg:w-1/2 animate-on-scroll">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/20 border border-brand-accent mb-6">
                            <i class="fa-solid fa-trophy text-brand-accent text-xs"></i>
                        <span class="text-brand-accent text-[10px] font-black tracking-widest uppercase">Government Recognized • 350+ Awardees</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight mb-6">
                        {{ $event->title }}
                    </h1>

                    <p class="text-lg text-slate-300 mb-8 max-w-xl font-medium leading-relaxed">
                        Get nationally recognized for your business excellence. Join 350+ award-winning MSMEs across 26+ sectors. Backed by Padma Shri & Padma Bhushan advisory board members.
                    </p>

                    <div class="flex flex-wrap gap-6 items-center mb-10">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 shadow-xl">
                                <i class="fa-regular fa-clock text-brand-accent text-xl"></i>
                            </div>
                            <div>
                                <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-1">Start Date</span>
                                <span class="block text-sm font-bold text-white">{{ $event->event_date->format('d M, Y | h:i A') }}</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 shadow-xl">
                                <i class="fa-solid fa-location-dot text-brand-accent text-xl"></i>
                            </div>
                            <div>
                                <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-1">Location</span>
                                <span class="block text-sm font-bold text-white">{{ $event->location ?: 'New Delhi, India' }}</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Side Image -->
                <div class="w-full lg:w-1/2 animate-on-scroll relative mt-12 lg:mt-0">
                    <!-- Background decorative glow -->
                    <!-- <div class="absolute inset-0 bg-brand-primary/20 rounded-lg blur-3xl transform scale-105 translate-y-4"></div> -->

                    <div class="relative rounded-lg overflow-hidden border border-white/10">
                        <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}" alt="{{ $event->title }}" class="w-full h-auto object-cover transition-transform duration-700">
                        <!-- <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent pointer-events-none"></div> -->
                    </div>
                </div>
               </div>

                @if($event->show_timer)
                <div class="text-[10px] md:text-base w-full text-left lg:text-lg font-black text-brand-light uppercase tracking-widest"><i class="fa-solid fa-fire text-orange-500 mr-1"></i> Event Starts in</div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-lg p-6 md:p-10 inline-block w-full">
                        <div x-data="{
                            target: new Date('{{ $event->event_date->format('Y-m-d\TH:i:s') }}').getTime(),
                            now: new Date().getTime(),
                            get t() { return Math.max(0, this.target - this.now); },
                            get d() { return Math.floor(this.t / (1000*60*60*24)); },
                            get h() { return Math.floor((this.t % (1000*60*60*24)) / (1000*60*60)); },
                            get m() { return Math.floor((this.t % (1000*60*60)) / (1000*60)); },
                            get s() { return Math.floor((this.t % (1000*60)) / 1000); }
                        }" x-init="setInterval(() => now = new Date().getTime(), 1000)" class="flex justify-between text-center">
                            <div><span class="flex-1 flex flex-col md:flex-row md:justify-center items-center text-3xl md:text-5xl lg:text-8xl font-black text-brand-light" x-text="d">0</span><span class="text-xs md:text-base lg:text-lg font-black text-slate-500 uppercase tracking-widest">Days</span></div>
                            <div class="w-px h-10 md:h-15 lg:h-20 bg-white/10 my-auto"></div>
                            <div><span class="flex-1 flex flex-col md:flex-row md:justify-center items-center text-3xl md:text-5xl lg:text-8xl font-black text-brand-light" x-text="h">0</span><span class="text-xs md:text-base lg:text-lg font-black text-slate-500 uppercase tracking-widest">Hrs</span></div>
                            <div class="w-px h-10 md:h-15 lg:h-20 bg-white/10 my-auto"></div>
                            <div><span class="flex-1 flex flex-col md:flex-row md:justify-center items-center text-3xl md:text-5xl lg:text-8xl font-black text-brand-light" x-text="m">0</span><span class="text-xs md:text-base lg:text-lg font-black text-slate-500 uppercase tracking-widest">Min</span></div>
                            <div class="w-px h-10 md:h-15 lg:h-20 bg-white/10 my-auto"></div>
                            <div><span class="flex-1 flex flex-col md:flex-row md:justify-center items-center text-3xl md:text-5xl lg:text-8xl font-black text-brand-light" x-text="s">0</span><span class="text-xs md:text-base lg:text-lg font-black text-slate-500 uppercase tracking-widest">Sec</span></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Content Body -->
    <div class="bg-slate-50 py-16" 
         x-data="{ 
            activeSection: 'about',
            checkScroll() {
                const sections = ['about', 'highlights', 'excellence', 'gallery', 'testimonials', 'pricing', 'partners', 'faq', 'resources', 'venue'];
                for (const section of sections) {
                    const el = document.getElementById(section);
                    if (el) {
                        const rect = el.getBoundingClientRect();
                        if (rect.top <= 160 && rect.bottom >= 160) {
                            this.activeSection = section;
                            break;
                        }
                    }
                }
            }
         }"
         @scroll.window.throttle.50ms="checkScroll()">
        <div class="container overflow-visible">
            <div class="flex flex-col lg:flex-row gap-12 items-start relative">

                <!-- Left Sticky Sidebar (ElitePlus Style) -->
                <aside class="w-full hidden lg:block lg:w-1/4 sticky top-32 z-30">
                    <div class="bg-white rounded-lg border border-slate-100 overflow-hidden transform transition-all hover:scale-[1.02]">
                        <div class="bg-slate-900 p-6">
                            <h4 class="text-xs font-black text-white uppercase tracking-widest flex items-center gap-2">
                                 <span class="w-2 h-2 rounded-full bg-brand-accent animate-ping"></span> Quick Navigation
                            </h4>
                        </div>
                        <div class="p-2">
                            <nav class="space-y-1">
                                @php
                                    $navItems = [
                                        ['id' => 'about', 'label' => 'About Summit', 'icon' => 'fa-info-circle'],
                                        ['id' => 'highlights', 'label' => 'Why Join?', 'icon' => 'fa-star'],
                                        ['id' => 'excellence', 'label' => 'Wall of Excellence', 'icon' => 'fa-crown'],
                                        ['id' => 'gallery', 'label' => 'Past Highlights', 'icon' => 'fa-images'],
                                        ['id' => 'testimonials', 'label' => 'Success Stories', 'icon' => 'fa-comments'],
                                        ['id' => 'pricing', 'label' => 'Registration', 'icon' => 'fa-ticket'],
                                        ['id' => 'faq', 'label' => 'FAQ', 'icon' => 'fa-question-circle'],
                                        ['id' => 'resources', 'label' => 'Resources', 'icon' => 'fa-folder-open'],
                                        ['id' => 'venue', 'label' => 'Venue Info', 'icon' => 'fa-map-marker-alt'],
                                        ['id' => 'partners', 'label' => 'Sponsors', 'icon' => 'fa-handshake'],
                                    ];
                                @endphp

                                @foreach($navItems as $item)
                                    @php
                                        $showItem = false;
                                        if ($item['id'] === 'excellence') {
                                            $showItem = $excellenceAwards->count() > 0;
                                        } elseif (in_array($item['id'], ['gallery', 'testimonials'])) {
                                            $showItem = isset($event->builder_content[$item['id']]) && count($event->builder_content[$item['id']]) > 0;
                                        } else {
                                            $showItem = isset($event->builder_content[$item['id']]) && (!is_array($event->builder_content[$item['id']]) || count($event->builder_content[$item['id']]) > 0);
                                        }
                                    @endphp

                                    @if($showItem)
                                        <a href="#{{ $item['id'] }}" 
                                           @click="activeSection = '{{ $item['id'] }}'"
                                           :class="activeSection === '{{ $item['id'] }}' ? 'bg-brand-primary text-white' : 'text-slate-600 hover:bg-slate-50'"
                                           class="flex items-center justify-between p-4 rounded-lg text-[11px] font-black uppercase tracking-widest transition-all">
                                            <span class="flex items-center gap-3">
                                                <i class="fa-solid {{ $item['icon'] }} w-4 text-[12px]"></i>
                                                {{ $item['label'] }}
                                            </span>
                                            <i class="fa-solid fa-chevron-right text-[8px] opacity-30"></i>
                                        </a>
                                    @endif
                                @endforeach
                            </nav>
                        </div>
                        <div class="p-6 bg-slate-50 border-t border-slate-100">
                            <a href="{{ $event->builder_content['about']['registration_url'] ?? url('join') }}" target="_blank" class="block w-full bg-slate-900 hover:bg-black text-white text-center py-4 rounded-lg font-black text-xs uppercase tracking-widest shadow-xl transition-all">
                                 Register Now <i class="fa-solid fa-bolt ml-1 text-brand-accent"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Box / WhatsApp & Call CTA -->
                    <div class="mt-6 bg-slate-100 rounded-lg p-6 shadow-sm border border-slate-200 text-center">
                        <h5 class="text-[10px] font-black text-slate-800 uppercase tracking-widest mb-3">Prefer to Talk First?</h5>
                        <p class="text-xs text-slate-600 mb-4 font-medium">Our team can guide you through the nomination process.</p>
                        <div class="space-y-3">
                            <a href="https://wa.me/919810690843?text=Hi,%20I'm%20interested%20in%20the%20{{ urlencode($event->title) }}%20nomination." target="_blank" class="flex items-center justify-center gap-2 w-full bg-[#25D366] text-white hover:bg-[#1ebe5b] py-3 rounded-lg font-bold text-sm transition-colors shadow-sm">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Apply via WhatsApp
                            </a>
                            <a href="tel:+919810690843" class="flex items-center justify-center gap-2 w-full bg-slate-900 text-white hover:bg-black py-3 rounded-lg font-bold text-sm transition-colors shadow-sm">
                                <i class="fa-solid fa-phone"></i> Call Us Now
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content Sections -->
                <main class="w-full lg:w-3/4 space-y-12">

                    <!-- About Section -->
                    <div id="about" class="scroll-mt-36 bg-white rounded-lg p-8 md:p-10 shadow-sm border border-slate-100 animate-on-scroll">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 rounded-lg bg-brand-primary/10 flex items-center justify-center">
                                <i class="fa-solid fa-circle-info text-brand-primary text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-3xl font-black text-slate-900 tracking-tight">About The <span class="text-brand-primary">Summit</span></h2>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">{{ $event->builder_content['about']['subtitle'] ?? 'Transforming the Future' }}</p>
                            </div>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-medium leading-relaxed">
                            {!! nl2br(e($event->builder_content['about']['description'] ?? $event->description)) !!}
                        </div>

                        <!-- 4-Step Process -->
                        <div class="mt-12 border-t border-slate-100 pt-8">
                            <h4 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-6 text-center">How It Works</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="w-10 h-10 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-slate-500 font-bold mb-3">1</div>
                                    <p class="text-xs font-bold text-slate-700">Apply Online</p>
                                </div>
                                <div>
                                    <div class="w-10 h-10 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-slate-500 font-bold mb-3">2</div>
                                    <p class="text-xs font-bold text-slate-700">Expert Evaluation</p>
                                </div>
                                <div>
                                    <div class="w-10 h-10 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-slate-500 font-bold mb-3">3</div>
                                    <p class="text-xs font-bold text-slate-700">Shortlisting</p>
                                </div>
                                <div>
                                    <div class="w-10 h-10 mx-auto bg-brand-primary/10 rounded-full flex items-center justify-center text-brand-primary font-bold mb-3">4</div>
                                    <p class="text-xs font-bold text-brand-primary">Award Ceremony</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Highlights Section -->
                    @if(isset($event->builder_content['highlights']) && count($event->builder_content['highlights']) > 0)
                        <div id="highlights" class="scroll-mt-36 animate-on-scroll">
                            <div class="space-y-8">
                                @foreach($event->builder_content['highlights'] as $hl)
                                    <div class="animate-on-scroll">
                                        @if(($hl['title'] && $hl['title'] !== '') || ($hl['desc'] && $hl['desc'] !== ''))
                                            <div class="mb-6 p-8 bg-slate-50 rounded-lg border border-slate-100 shadow-sm relative overflow-hidden group">
                                                <div class="absolute top-0 right-0 w-40 h-40 bg-brand-primary/5 rounded-full blur-3xl -mr-20 -mt-20 group-hover:scale-150 transition-transform duration-700"></div>
                                                <div class="relative z-10">
                                                    <h4 class="text-2xl font-black uppercase tracking-tight text-slate-900 mb-4 flex items-center gap-3">
                                                        <span class="w-1.5 h-8 bg-brand-primary rounded-full"></span>
                                                        {{ $hl['title'] }}
                                                    </h4>
                                                    <div class="text-sm font-bold text-slate-500 leading-relaxed max-w-3xl prose-sm">
                                                        {!! nl2br(e($hl['desc'])) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            @if(isset($hl['pdf1_path']) && $hl['pdf1_path'])
                                                <div class="group bg-white rounded-lg p-5 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                                    <div class="aspect-video bg-slate-50 rounded-lg mb-4 overflow-hidden border border-slate-100 relative">
                                                        @if(isset($hl['pdf1_thumb']) && $hl['pdf1_thumb'])
                                                            <img src="{{ asset($hl['pdf1_thumb']) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                        @else
                                                            <div class="w-full h-full flex items-center justify-center bg-brand-primary/5">
                                                                <i class="fa-solid fa-file-pdf text-4xl text-brand-primary/20"></i>
                                                            </div>
                                                        @endif
                                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                                                            <a href="{{ asset($hl['pdf1_path']) }}" target="_blank" class="bg-white text-slate-900 px-5 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-brand-primary hover:text-white">
                                                                View Document <i class="fa-solid fa-up-right-from-square ml-1 text-[10px]"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <span class="block text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Attachment 01</span>
                                                            <h5 class="text-xs font-black text-slate-900 uppercase">{{ $hl['pdf1_name'] ?: 'Strategic Document' }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            @if(isset($hl['pdf2_path']) && $hl['pdf2_path'])
                                                <div class="group bg-white rounded-lg p-5 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                                    <div class="aspect-video bg-slate-50 rounded-lg mb-4 overflow-hidden border border-slate-100 relative">
                                                        @if(isset($hl['pdf2_thumb']) && $hl['pdf2_thumb'])
                                                            <img src="{{ asset($hl['pdf2_thumb']) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                        @else
                                                            <div class="w-full h-full flex items-center justify-center bg-brand-primary/5">
                                                                <i class="fa-solid fa-file-pdf text-4xl text-brand-primary/20"></i>
                                                            </div>
                                                        @endif
                                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                                                            <a href="{{ asset($hl['pdf2_path']) }}" target="_blank" class="bg-white text-slate-900 px-5 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-brand-primary hover:text-white">
                                                                View Document <i class="fa-solid fa-up-right-from-square ml-1 text-[10px]"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <span class="block text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Attachment 02</span>
                                                            <h5 class="text-xs font-black text-slate-900 uppercase">{{ $hl['pdf2_name'] ?: 'Resource Guide' }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Wall of Excellence Section -->
                    @if($excellenceAwards->count() > 0)
                        <div id="excellence" class="scroll-mt-36 bg-white rounded-lg p-8 md:p-10 shadow-sm border border-slate-100 animate-on-scroll">
                            <div class="flex items-center justify-between mb-8">
                                <div>
                                    <h2 class="text-3xl font-black text-slate-900 tracking-tight">Wall of <span class="text-brand-primary">Excellence</span></h2>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Join these recognized leaders</p>
                                </div>
                                <a href="{{ route('excellence.index') }}" class="hidden md:inline-flex items-center gap-2 text-brand-primary text-xs font-black uppercase tracking-widest hover:gap-3 transition-all">
                                    View All <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                @foreach($excellenceAwards as $award)
                                    <div class="group bg-slate-50 rounded-lg p-3 border border-slate-100 hover:shadow-lg transition-all">
                                        <div class="relative rounded-lg overflow-hidden aspect-[4/5] mb-4">
                                            <img src="{{ asset($award->award_image) }}" alt="{{ $award->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                                            <div class="absolute bottom-4 left-4 right-4">
                                                <p class="text-white font-black text-sm leading-tight">{{ $award->title }}</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 px-1 pb-1">
                                            @if($award->giver_image)
                                                <img src="{{ asset($award->giver_image) }}" class="w-8 h-8 rounded-full border border-slate-200 object-cover">
                                            @endif
                                            <div>
                                                <p class="text-[10px] font-black text-slate-900 leading-none mb-0.5">{{ $award->giver_name }}</p>
                                                <p class="text-[8px] font-bold text-slate-500 uppercase tracking-widest">{{ Str::limit($award->giver_designation, 25) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Dynamic Past Gallery Section -->
                    @if(isset($event->builder_content['gallery']) && count($event->builder_content['gallery']) > 0)
                        <div id="gallery" class="scroll-mt-36 bg-slate-50 rounded-lg p-8 md:p-10 shadow-sm border border-slate-100 animate-on-scroll">
                            <div class="mb-8">
                                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Past <span class="text-brand-primary">Highlights</span></h2>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Glimpses from previous editions</p>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                @foreach($event->builder_content['gallery'] as $media)
                                    <div class="relative aspect-video rounded-lg overflow-hidden border border-slate-200 group">
                                        @if(isset($media['type']) && $media['type'] === 'video')
                                            <video src="{{ asset($media['url']) }}" controls class="w-full h-full object-cover"></video>
                                        @else
                                            <img src="{{ asset($media['url']) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Dynamic Testimonials Section -->
                    @if(isset($event->builder_content['testimonials']) && count($event->builder_content['testimonials']) > 0)
                        <div id="testimonials" class="scroll-mt-36 bg-white rounded-lg p-8 md:p-10 shadow-sm border border-slate-100 animate-on-scroll">
                            <div class="mb-8">
                                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Success <span class="text-brand-primary">Stories</span></h2>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">What past participants say</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach($event->builder_content['testimonials'] as $testimonial)
                                    <div class="bg-slate-50 p-6 rounded-lg border border-slate-100 relative hover:shadow-md transition-shadow">
                                        <i class="fa-solid fa-quote-left text-3xl text-brand-primary/10 absolute top-4 right-4"></i>
                                        <p class="text-sm font-medium text-slate-600 mb-6 relative z-10 italic leading-relaxed">"{{ $testimonial['text'] }}"</p>
                                        <div class="flex items-center gap-3">
                                            @if(isset($testimonial['image']) && $testimonial['image'])
                                                <img src="{{ asset($testimonial['image']) }}" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                            @else
                                                <div class="w-10 h-10 rounded-full bg-brand-primary/10 flex items-center justify-center text-brand-primary font-bold">
                                                    {{ substr($testimonial['name'] ?? 'U', 0, 1) }}
                                                </div>
                                            @endif
                                            <div>
                                                <p class="text-xs font-black text-slate-900 uppercase">{{ $testimonial['name'] }}</p>
                                                <p class="text-[10px] font-bold text-slate-500 uppercase">{{ $testimonial['designation'] ?? '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Pricing Section (CRO Optimized) -->
                    @if(isset($event->builder_content['pricing']) && count($event->builder_content['pricing']) > 0)
                        <div id="pricing" class="scroll-mt-36 animate-on-scroll bg-slate-900 rounded-lg p-8 md:p-12 text-white relative overflow-hidden shadow-2xl">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary/20 rounded-full blur-3xl -mr-32 -mt-32"></div>

                            <div class="text-center mb-10 relative z-10">
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 mb-4 text-[10px] font-black uppercase tracking-widest">
                                    <i class="fa-solid fa-lock text-emerald-400"></i> Secure Checkout
                                </div>
                                <h2 class="text-3xl font-black text-white mb-2">Secure Your <span class="text-brand-accent">Nomination</span></h2>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Choose your access level</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative z-10">
                                @foreach($event->builder_content['pricing'] as $tier)
                                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-lg p-8 hover:border-brand-accent hover:bg-white/10 transition-all group relative overflow-hidden">
                                        @if(isset($tier['recommended']) && $tier['recommended'])
                                            <div class="absolute top-0 right-0 bg-brand-accent text-slate-900 text-[8px] font-black uppercase tracking-widest px-3 py-1 rounded-bl-lg">Most Popular</div>
                                        @endif

                                        <h4 class="text-xs font-black text-slate-300 uppercase tracking-widest mb-2">{{ $tier['type'] }}</h4>
                                        <div class="flex items-end gap-2 mb-4">
                                            <span class="text-xs font-bold text-brand-accent opacity-80 mb-2">{{ $tier['currency'] ?? 'INR' }}</span>
                                            <span class="text-4xl font-black text-white tracking-tighter">{{ $tier['price'] }}</span>
                                        </div>
                                        <div class="text-xs text-slate-300 font-medium mb-8 leading-relaxed">
                                            {{ $tier['desc'] }}
                                        </div>
                                        <a href="{{ $event->builder_content['about']['registration_url'] ?? url('join') }}" target="_blank" class="block w-full bg-brand-accent hover:bg-white text-slate-900 text-center py-3 rounded-lg font-black text-xs uppercase tracking-widest transition-all">
                                            Apply Now <i class="fa-solid fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-8 text-center text-[10px] font-bold text-slate-500 uppercase tracking-widest relative z-10 flex items-center justify-center gap-4">
                                <span><i class="fa-brands fa-cc-visa text-lg"></i></span>
                                <span><i class="fa-brands fa-cc-mastercard text-lg"></i></span>
                                <span><i class="fa-solid fa-building-columns text-lg"></i></span>
                                <span><i class="fa-solid fa-shield-halved"></i> 256-bit Encryption</span>
                            </div>
                        </div>
                    @endif

                    <!-- FAQ Section -->
                    @if(isset($event->builder_content['faq']) && count($event->builder_content['faq']) > 0)
                        <div id="faq" class="scroll-mt-36 bg-slate-50 rounded-lg p-8 md:p-10 border border-slate-100 animate-on-scroll">
                            <h2 class="text-3xl font-black text-slate-900 mb-10 text-center">Frequently <span class="text-brand-primary">Asked Questions</span></h2>
                            <div class="space-y-4 max-w-3xl mx-auto" x-data="{ openFaq: null }">
                                @foreach($event->builder_content['faq'] as $index => $q)
                                    <div class="bg-white rounded-lg border border-slate-100 overflow-hidden shadow-sm">
                                        <button @click="openFaq = openFaq === {{ $index }} ? null : {{ $index }}" class="w-full flex items-center justify-between p-5 text-left">
                                            <span class="text-sm font-black text-slate-900 leading-tight uppercase">{{ $q['q'] }}</span>
                                            <i class="fa-solid fa-chevron-down text-slate-300 transition-transform duration-300" :class="openFaq === {{ $index }} ? 'rotate-180 text-brand-primary' : ''"></i>
                                        </button>
                                        <div x-show="openFaq === {{ $index }}" x-collapse class="px-5 pb-5">
                                            <p class="text-sm font-bold text-slate-500 leading-relaxed border-t border-slate-50 pt-4">
                                                {{ $q['a'] }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Resources Section -->
                    @if(isset($event->builder_content['resources']) && count($event->builder_content['resources']) > 0)
                        <div id="resources" class="scroll-mt-36 animate-on-scroll">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-lg bg-brand-accent/10 flex items-center justify-center">
                                    <i class="fa-solid fa-folder-open text-brand-accent text-xl"></i>
                                </div>
                                <div>
                                    <h2 class="text-3xl font-black text-slate-900 tracking-tight">Summit <span class="text-brand-primary">Resources</span></h2>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Key documents and presentations</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                @foreach($event->builder_content['resources'] as $res)
                                    <a href="{{ asset($res['url']) }}" target="_blank" class="group bg-white rounded-lg border border-slate-200 overflow-hidden hover:border-brand-primary hover:shadow-xl transition-all duration-300 flex flex-col">
                                        <div class="relative aspect-video bg-slate-100 overflow-hidden border-b border-slate-100">
                                            @if(isset($res['thumbnail']) && $res['thumbnail'])
                                                <img src="{{ asset($res['thumbnail']) }}" alt="{{ $res['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                            @else
                                                <div class="w-full h-full flex flex-col items-center justify-center bg-slate-50 gap-2">
                                                    <i class="fa-solid fa-file-pdf text-4xl text-brand-primary/20"></i>
                                                    <span class="text-[8px] font-black text-slate-400 uppercase tracking-widest">Preview</span>
                                                </div>
                                            @endif
                                            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                                <span class="bg-white text-slate-900 px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all">
                                                    View File <i class="fa-solid fa-up-right-from-square ml-1 text-brand-primary"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-4 flex-1 flex flex-col justify-between">
                                            <h5 class="text-sm font-black text-slate-900 uppercase tracking-widest leading-snug group-hover:text-brand-primary transition-colors">
                                                {{ $res['title'] }}
                                            </h5>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Venue Section -->
                    @if(isset($event->builder_content['venue']['name']) && $event->builder_content['venue']['name'])
                        <div id="venue" class="scroll-mt-36 bg-white rounded-lg overflow-hidden shadow-sm border border-slate-100 animate-on-scroll">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                <div class="p-8 md:p-10">
                                    <i class="fa-solid fa-map-location-dot text-4xl text-brand-primary mb-6 block"></i>
                                    <h2 class="text-3xl font-black text-slate-900 mb-4">The <span class="text-brand-primary">Venue</span></h2>
                                    <h4 class="text-xl font-extrabold text-slate-800 mb-2">{{ $event->builder_content['venue']['name'] }}</h4>
                                    <p class="text-slate-500 font-bold text-sm leading-relaxed mb-8">{{ $event->builder_content['venue']['address'] }}</p>

                                    <a href="https://maps.google.com/?q={{ urlencode($event->builder_content['venue']['address']) }}" target="_blank" class="inline-flex items-center gap-2 text-brand-primary font-black text-xs uppercase hover:translate-x-1 transition-transform">
                                        Navigate on Maps <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="h-full bg-slate-100 relative min-h-[300px]">
                                     @if(isset($event->builder_content['venue']['image']) && $event->builder_content['venue']['image'])
                                        <img src="{{ asset($event->builder_content['venue']['image']) }}" class="w-full h-full object-cover">
                                     @else
                                        <div class="w-full h-full flex items-center justify-center bg-slate-900 overflow-hidden relative group">
                                            <div class="absolute inset-0 bg-brand-primary opacity-10 blur-3xl"></div>
                                            <div class="relative z-10 text-center p-8">
                                                <i class="fa-solid fa-building-circle-arrow-right text-6xl text-brand-primary mb-4 opacity-20"></i>
                                                <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.3em]">Venue Visual Pending</p>
                                            </div>
                                        </div>
                                     @endif
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Sponsors Section -->
                    @if(isset($event->builder_content['partners']) && count($event->builder_content['partners']) > 0)
                        <div id="partners" class="scroll-mt-36 bg-white rounded-lg py-12 shadow-sm border border-slate-100 animate-on-scroll overflow-hidden">
                            <div class="text-center mb-8 container">
                                <h2 class="text-3xl font-black text-slate-900 mb-2">Our <span class="text-brand-primary">Partners</span></h2>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Supported by global industry leaders</p>
                            </div>

                            <div class="relative mt-8">
                                <div class="absolute inset-y-0 left-0 w-24 bg-linear-to-r from-white to-transparent z-10"></div>
                                <div class="absolute inset-y-0 right-0 w-24 bg-linear-to-l from-white to-transparent z-10"></div>

                                <div class="flex gap-6 items-center animate-logo-slide whitespace-nowrap">
                                    @php 
                                        $slidingPartners = array_merge($event->builder_content['partners'], $event->builder_content['partners']); 
                                    @endphp

                                    @foreach($slidingPartners as $partner)
                                        <div class="flex-none bg-white rounded-lg p-6 border border-slate-50 shadow-xs flex flex-col items-center justify-center h-auto min-h-32 w-48 group transition-all">
                                            <img src="{{ asset($partner['logo']) }}" alt="{{ $partner['name'] }}" class="max-h-16 max-w-full object-contain transition-all duration-500">
                                            @if(isset($partner['name']) && $partner['name'])
                                                <p class="mt-3 text-[9px] font-black text-slate-900 uppercase tracking-widest text-center group-hover:text-brand-primary transition-colors">{{ $partner['name'] }}</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                </main>
            </div>
        </div>
    </div>

    @if(!auth()->check())
        <!-- Delayed Lead Capture Modal -->
        <div x-data="leadCapture()" x-init="init()" x-cloak>
            <!-- Backdrop -->
            <div x-show="open" x-transition.opacity.duration.500ms
                 class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm z-50 flex items-center justify-center p-4 pb-20"> <!-- Added pb-20 to avoid overlap with mobile bottom bar -->

                <!-- Modal Container -->
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                     x-transition:leave="transition ease-in duration-300"
                     x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                     x-transition:leave-end="opacity-0 translate-y-8 scale-95"
                     class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden relative">

                    <!-- Close Button (Subtle to discourage closing) -->
                    <button @click="open = false" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 transition-colors z-10">
                        <i class="fa-solid fa-times text-lg"></i>
                    </button>

                    <!-- Header -->
                    <div class="bg-slate-900 p-8 text-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 16px 16px;"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-brand-primary/20 rounded-full flex items-center justify-center mx-auto mb-4 border border-brand-primary/30 shadow-[0_0_15px_rgba(var(--color-brand-primary),0.5)]">
                                <i class="fa-solid fa-award text-2xl text-brand-primary"></i>
                            </div>
                            <h3 class="text-xl font-black text-white mb-2">Check Your Eligibility</h3>
                            <p class="text-xs font-medium text-slate-300">Only 10% of applicants reach the jury round. Let's see if your profile qualifies.</p>
                        </div>
                    </div>

                    <!-- Form Progress -->
                    <div class="h-1 w-full bg-slate-100">
                        <div class="h-full bg-brand-primary transition-all duration-500" :style="'width: ' + ((step / 4) * 100) + '%'"></div>
                    </div>

                    <!-- Form Body -->
                    <div class="p-8">
                        <form @submit.prevent="submitLead" class="space-y-6">

                            <!-- Step 1: Name -->
                            <div x-show="step === 1" x-transition:enter="transition ease-out duration-300 delay-100" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                                <label class="block text-sm font-black text-slate-800 mb-3">1. What is your full name?</label>
                                <input type="text" x-model="formData.name" placeholder="e.g. Indrajit Ghosh" class="w-full border-2 border-slate-200 rounded-xl p-4 focus:border-brand-primary focus:ring-0 outline-none font-bold text-slate-900 placeholder:text-slate-300 placeholder:font-medium transition-all" @keydown.enter.prevent="nextStep(1)">
                                <button type="button" @click="nextStep(1)" class="w-full mt-6 bg-slate-900 hover:bg-black text-white font-black py-4 rounded-xl transition-all shadow-lg text-sm uppercase tracking-widest flex items-center justify-center gap-2">
                                    Continue <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                            <!-- Step 2: Company -->
                            <div x-show="step === 2" style="display: none;" x-transition:enter="transition ease-out duration-300 delay-100" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                                <label class="block text-sm font-black text-slate-800 mb-3">2. Which organization do you represent?</label>
                                <input type="text" x-model="formData.company_name" placeholder="e.g. ABC Pvt. Ltd." class="w-full border-2 border-slate-200 rounded-xl p-4 focus:border-brand-primary focus:ring-0 outline-none font-bold text-slate-900 placeholder:text-slate-300 placeholder:font-medium transition-all" @keydown.enter.prevent="nextStep(2)">
                                <button type="button" @click="nextStep(2)" class="w-full mt-6 bg-slate-900 hover:bg-black text-white font-black py-4 rounded-xl transition-all shadow-lg text-sm uppercase tracking-widest flex items-center justify-center gap-2">
                                    Continue <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                            <!-- Step 3: Phone -->
                            <div x-show="step === 3" style="display: none;" x-transition:enter="transition ease-out duration-300 delay-100" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                                <label class="block text-sm font-black text-slate-800 mb-3">3. Where can our nomination team reach you?</label>
                                <input type="tel" x-model="formData.phone_number" placeholder="e.g. +91 9876543210" class="w-full border-2 border-slate-200 rounded-xl p-4 focus:border-brand-primary focus:ring-0 outline-none font-bold text-slate-900 placeholder:text-slate-300 placeholder:font-medium transition-all" @keydown.enter.prevent="nextStep(3)">
                                <button type="button" @click="nextStep(3)" class="w-full mt-6 bg-slate-900 hover:bg-black text-white font-black py-4 rounded-xl transition-all shadow-lg text-sm uppercase tracking-widest flex items-center justify-center gap-2">
                                    Continue <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                            <!-- Step 4: Email & Submit -->
                            <div x-show="step === 4" style="display: none;" x-transition:enter="transition ease-out duration-300 delay-100" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
                                <label class="block text-sm font-black text-slate-800 mb-3">4. Where should we send your VIP application link?</label>
                                <input type="email" x-model="formData.email" placeholder="e.g. you@company.com" class="w-full border-2 border-slate-200 rounded-xl p-4 focus:border-brand-primary focus:ring-0 outline-none font-bold text-slate-900 placeholder:text-slate-300 placeholder:font-medium transition-all" @keydown.enter.prevent="submitLead">

                                <div class="mt-4 flex items-center gap-2 justify-center text-[10px] font-bold text-slate-400 bg-slate-50 p-2 rounded-lg border border-slate-100">
                                    <i class="fa-solid fa-lock text-emerald-500"></i> We respect your privacy. 100% Secure.
                                </div>

                                <button type="submit" :disabled="loading" class="w-full mt-6 bg-brand-primary hover:bg-brand-primary-dark text-white font-black py-4 rounded-xl transition-all shadow-lg shadow-brand-primary/30 text-sm uppercase tracking-widest flex items-center justify-center gap-2 disabled:opacity-50">
                                    <i x-show="loading" class="fa-solid fa-circle-notch fa-spin"></i>
                                    <span x-text="loading ? 'Processing...' : 'Lock My Spot & Continue'"></span>
                                    <i x-show="!loading" class="fa-solid fa-bolt"></i>
                                </button>
                            </div>

                            <!-- Success State -->
                            <div x-show="step === 5" style="display: none;" class="text-center py-4" x-transition:enter="transition ease-out duration-300 delay-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fa-solid fa-check text-2xl text-emerald-500"></i>
                                </div>
                                <h4 class="text-lg font-black text-slate-900 mb-2">Profile Created!</h4>
                                <p class="text-xs font-medium text-slate-500 mb-6">Your details have been saved securely. You can now proceed to the nomination form.</p>
                                <a href="{{ $event->builder_content['about']['registration_url'] ?? url('join') }}" class="inline-block w-full bg-slate-900 hover:bg-black text-white font-black py-4 rounded-xl transition-all shadow-lg text-sm uppercase tracking-widest">
                                    Go to Nomination Form
                                </a>
                            </div>
                        </form>
                    </div>

                    <div x-show="step < 5" class="bg-slate-50 px-8 py-4 border-t border-slate-100 flex justify-between items-center text-xs font-bold text-slate-400">
                        <button type="button" @click="step--" x-show="step > 1" class="hover:text-slate-600 transition-colors">&larr; Back</button>
                        <span x-show="step === 1"></span>
                        <span>Step <span x-text="step"></span> of 4</span>
                    </div>
                </div>
            </div>
        </div>

        <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('leadCapture', () => ({
                open: false,
                step: 1,
                loading: false,
                formData: {
                    name: '',
                    company_name: '',
                    phone_number: '',
                    email: '',
                    _token: '{{ csrf_token() }}'
                },
                init() {
                    // Check if we've already shown it in this session to prevent annoyance
                    if (!sessionStorage.getItem('leadCaptured')) {
                        setTimeout(() => {
                            this.open = true;
                        }, 7000); // 7 second delay
                    }
                },
                nextStep(currentStep) {
                    // Simple Validation
                    if (currentStep === 1 && this.formData.name.length < 2) return alert('Please enter your full name.');
                    if (currentStep === 2 && this.formData.company_name.length < 2) return alert('Please enter your company name.');
                    if (currentStep === 3 && this.formData.phone_number.length < 6) return alert('Please enter a valid phone number.');

                    this.step = currentStep + 1;
                },
                async submitLead() {
                    if (this.formData.email.length < 5 || !this.formData.email.includes('@')) return alert('Please enter a valid email.');

                    this.loading = true;
                    try {
                        const response = await fetch('{{ route("quick.lead") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': this.formData._token
                            },
                            body: JSON.stringify(this.formData)
                        });

                        const result = await response.json();
                        if (result.success) {
                            this.step = 5;
                            sessionStorage.setItem('leadCaptured', 'true');
                        } else {
                            alert('Something went wrong. Please try again.');
                        }
                    } catch (error) {
                        console.error(error);
                        alert('Connection error. Please try again later.');
                    } finally {
                        this.loading = false;
                    }
                }
            }));
        });
        </script>
    @endif

    <!-- Mobile Sticky Contact Bar -->
    <div class="fixed bottom-0 left-0 right-0 p-3 bg-white border-t border-slate-200 shadow-[0_-10px_30px_rgba(0,0,0,0.1)] z-40 lg:hidden flex gap-3 pb-[calc(0.75rem+env(safe-area-inset-bottom))]">
        <a href="https://wa.me/919810690843?text=Hi,%20I'm%20interested%20in%20the%20{{ urlencode($event->title) }}%20nomination." target="_blank" class="flex-1 bg-[#25D366] text-white text-center py-3.5 rounded-lg font-black uppercase tracking-widest text-[10px] flex items-center justify-center gap-2 shadow-sm hover:bg-[#1ebe5b] transition-colors">
            <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp
        </a>
        <a href="tel:+919810690843" class="flex-1 bg-slate-900 text-white text-center py-3.5 rounded-lg font-black uppercase tracking-widest text-[10px] flex items-center justify-center gap-2 shadow-sm hover:bg-black transition-colors">
            <i class="fa-solid fa-phone text-sm"></i> Call Us
        </a>
    </div>

    <style>
        html { scroll-behavior: smooth; }
        [x-cloak] { display: none !important; }

        @keyframes logo-slide {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-logo-slide {
            display: flex;
            width: max-content;
            animation: logo-slide 30s linear infinite;
        }
        .animate-logo-slide:hover {
            animation-play-state: paused;
        }
    </style>
@endsection
