@extends('layouts.website')

@section('title', $event->title . ' | MSMECCII Events')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[60vh] flex items-center pt-32 pb-24 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0">
        <img src="{{ $event->image ? asset($event->image) : asset('images/event-placeholder.jpg') }}" alt="{{ $event->title }}" class="w-full h-full object-cover opacity-30 scale-105 blur-sm">
        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
    </div>

    <div class="container relative z-10">
        <div class="max-w-4xl animate-on-scroll">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/20 border border-brand-primary/30 mb-6">
                <i class="fa-solid fa-calendar-star text-brand-primary text-xs"></i>
                <span class="text-brand-primary text-[10px] font-black tracking-widest uppercase">Official Global Summit</span>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-black text-white leading-tight mb-8">
                {{ $event->title }}
            </h1>

            <div class="flex flex-wrap gap-6 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 shadow-xl">
                        <i class="fa-regular fa-clock text-brand-accent text-xl"></i>
                    </div>
                    <div>
                        <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-1">Start Date</span>
                        <span class="block text-sm font-bold text-white">{{ $event->event_date->format('d M, Y | h:i A') }}</span>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 shadow-xl">
                        <i class="fa-solid fa-location-dot text-brand-accent text-xl"></i>
                    </div>
                    <div>
                        <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-1">Location</span>
                        <span class="block text-sm font-bold text-white">{{ $event->location ?: 'New Delhi, India' }}</span>
                    </div>
                </div>
            </div>

            @if($event->show_timer)
                <div class="mt-12 bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-6 inline-block shadow-2xl">
                    <div x-data="{
                        target: new Date('{{ $event->event_date->format('Y-m-d\TH:i:s') }}').getTime(),
                        now: new Date().getTime(),
                        get t() { return Math.max(0, this.target - this.now); },
                        get d() { return Math.floor(this.t / (1000*60*60*24)); },
                        get h() { return Math.floor((this.t % (1000*60*60*24)) / (1000*60*60)); },
                        get m() { return Math.floor((this.t % (1000*60*60)) / (1000*60)); },
                        get s() { return Math.floor((this.t % (1000*60)) / 1000); }
                    }" x-init="setInterval(() => now = new Date().getTime(), 1000)" class="flex gap-6 text-center">
                        <div><span class="block text-3xl font-black text-brand-accent" x-text="d">0</span><span class="text-[9px] font-black text-slate-500 uppercase tracking-widest">Days</span></div>
                        <div class="w-px h-10 bg-white/10 my-auto"></div>
                        <div><span class="block text-3xl font-black text-brand-accent" x-text="h">0</span><span class="text-[9px] font-black text-slate-500 uppercase tracking-widest">Hrs</span></div>
                        <div class="w-px h-10 bg-white/10 my-auto"></div>
                        <div><span class="block text-3xl font-black text-brand-accent" x-text="m">0</span><span class="text-[9px] font-black text-slate-500 uppercase tracking-widest">Min</span></div>
                        <div class="w-px h-10 bg-white/10 my-auto"></div>
                        <div><span class="block text-3xl font-black text-brand-accent" x-text="s">0</span><span class="text-[9px] font-black text-slate-500 uppercase tracking-widest">Sec</span></div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- Content Body -->
<div class="bg-slate-50 py-16" x-data="{ activeSection: 'about' }">
    <div class="container overflow-visible">
        <div class="flex flex-col lg:flex-row gap-12 items-start relative">
            
            <!-- Left Sticky Sidebar (ElitePlus Style) -->
            <aside class="w-full lg:w-1/4 sticky top-32 z-30">
                <div class="bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden transform transition-all hover:scale-[1.02]">
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
                                    ['id' => 'pricing', 'label' => 'Registration', 'icon' => 'fa-ticket'],
                                    ['id' => 'venue', 'label' => 'Venue Info', 'icon' => 'fa-map-marker-alt'],
                                    ['id' => 'partners', 'label' => 'Sponsors', 'icon' => 'fa-handshake'],
                                    ['id' => 'faq', 'label' => 'FAQ', 'icon' => 'fa-question-circle'],
                                    ['id' => 'resources', 'label' => 'Resources', 'icon' => 'fa-folder-open'],
                                ];
                            @endphp

                            @foreach($navItems as $item)
                                @if(isset($event->builder_content[$item['id']]) && (!is_array($event->builder_content[$item['id']]) || count($event->builder_content[$item['id']]) > 0))
                                    <a href="#{{ $item['id'] }}" 
                                       @click="activeSection = '{{ $item['id'] }}'"
                                       :class="activeSection === '{{ $item['id'] }}' ? 'bg-brand-primary text-white shadow-xl shadow-brand-primary/20' : 'text-slate-600 hover:bg-slate-50'"
                                       class="flex items-center justify-between p-4 rounded-2xl text-[11px] font-black uppercase tracking-widest transition-all">
                                        <span class="flex items-center gap-3">
                                            <i class="fa-solid {{ $item['icon'] }} w-4"></i>
                                            {{ $item['label'] }}
                                        </span>
                                        <i class="fa-solid fa-chevron-right text-[8px] opacity-30"></i>
                                    </a>
                                @endif
                            @endforeach
                        </nav>
                    </div>
                    <div class="p-6 bg-slate-50 border-t border-slate-100">
                        <a href="#pricing" class="block w-full bg-slate-900 hover:bg-black text-white text-center py-4 rounded-2xl font-black text-xs uppercase tracking-widest shadow-xl transition-all">
                             Register Now <i class="fa-solid fa-bolt ml-1 text-brand-accent"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Box -->
                <div class="mt-6 bg-linear-to-br from-brand-primary to-brand-primary-light rounded-3xl p-6 text-white shadow-xl shadow-brand-primary/20">
                    <h5 class="text-[10px] font-black uppercase tracking-widest mb-4 border-b border-white/20 pb-2">Queries & Support</h5>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-xs font-bold">
                            <i class="fa-solid fa-envelope opacity-50"></i>
                            <a href="mailto:{{ $event->builder_content['about']['email'] ?? 'events@msmeccii.in' }}" class="hover:underline">events@msmeccii.in</a>
                        </div>
                        <div class="flex items-center gap-3 text-xs font-bold">
                            <i class="fa-solid fa-phone opacity-50"></i>
                            <span>+91-9810690843</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content Sections -->
            <main class="w-full lg:w-3/4 space-y-16">
                
                <!-- About Section -->
                <div id="about" class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-sm border border-slate-100 animate-on-scroll">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 rounded-2xl bg-brand-primary/10 flex items-center justify-center">
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
                </div>

                <!-- Highlights Section -->
                @if(isset($event->builder_content['highlights']) && count($event->builder_content['highlights']) > 0)
                <div id="highlights" class="animate-on-scroll">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-black text-slate-900 mb-2">Why Should You <span class="text-brand-primary">Attend?</span></h2>
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-widest">Key takeaways and strategic advantages</p>
                    </div>
                    <div class="space-y-16">
                        @foreach($event->builder_content['highlights'] as $hl)
                            <div class="animate-on-scroll">
                                <!-- Highlight Header (Conditional) -->
                                @if(($hl['title'] && $hl['title'] !== '') || ($hl['desc'] && $hl['desc'] !== ''))
                                    <div class="mb-8 p-8 bg-slate-900 rounded-[2.5rem] text-white shadow-2xl relative overflow-hidden group">
                                        <div class="absolute top-0 right-0 w-32 h-32 bg-brand-primary/20 rounded-full blur-3xl -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                                        <div class="relative z-10">
                                            <h4 class="text-2xl font-black uppercase tracking-tight mb-2">{{ $hl['title'] }}</h4>
                                            <p class="text-sm font-medium text-slate-400 leading-relaxed max-w-2xl">{{ $hl['desc'] }}</p>
                                        </div>
                                    </div>
                                @endif

                                <!-- PDF Cards Grid -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <!-- PDF 1 Card -->
                                    @if(isset($hl['pdf1_path']) && $hl['pdf1_path'])
                                        <div class="group bg-white rounded-[2rem] p-6 border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">
                                            <div class="aspect-video bg-slate-50 rounded-2xl mb-5 overflow-hidden border border-slate-100 relative">
                                                @if(isset($hl['pdf1_thumb']) && $hl['pdf1_thumb'])
                                                    <img src="{{ asset($hl['pdf1_thumb']) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center bg-brand-primary/5">
                                                        <i class="fa-solid fa-file-pdf text-5xl text-brand-primary/20"></i>
                                                    </div>
                                                @endif
                                                <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                                                    <a href="{{ asset($hl['pdf1_path']) }}" target="_blank" class="bg-white text-slate-900 px-6 py-2.5 rounded-full text-xs font-black uppercase tracking-widest shadow-2xl transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 hover:bg-brand-primary hover:text-white">
                                                        View Document <i class="fa-solid fa-up-right-from-square ml-2 text-[10px]"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Attachment 01</span>
                                                    <h5 class="text-sm font-black text-slate-900 uppercase">Strategic Document</h5>
                                                </div>
                                                <a href="{{ asset($hl['pdf1_path']) }}" target="_blank" class="w-10 h-10 rounded-full bg-brand-primary/10 text-brand-primary flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all">
                                                    <i class="fa-solid fa-download text-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- PDF 2 Card -->
                                    @if(isset($hl['pdf2_path']) && $hl['pdf2_path'])
                                        <div class="group bg-white rounded-[2rem] p-6 border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">
                                            <div class="aspect-video bg-slate-50 rounded-2xl mb-5 overflow-hidden border border-slate-100 relative">
                                                @if(isset($hl['pdf2_thumb']) && $hl['pdf2_thumb'])
                                                    <img src="{{ asset($hl['pdf2_thumb']) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                @else
                                                    <div class="w-full h-full flex items-center justify-center bg-brand-primary/5">
                                                        <i class="fa-solid fa-file-pdf text-5xl text-brand-primary/20"></i>
                                                    </div>
                                                @endif
                                                <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                                                    <a href="{{ asset($hl['pdf2_path']) }}" target="_blank" class="bg-white text-slate-900 px-6 py-2.5 rounded-full text-xs font-black uppercase tracking-widest shadow-2xl transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 hover:bg-brand-primary hover:text-white">
                                                        View Document <i class="fa-solid fa-up-right-from-square ml-2 text-[10px]"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Attachment 02</span>
                                                    <h5 class="text-sm font-black text-slate-900 uppercase">Resource Guide</h5>
                                                </div>
                                                <a href="{{ asset($hl['pdf2_path']) }}" target="_blank" class="w-10 h-10 rounded-full bg-brand-primary/10 text-brand-primary flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all">
                                                    <i class="fa-solid fa-download text-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Pricing Section -->
                @if(isset($event->builder_content['pricing']) && count($event->builder_content['pricing']) > 0)
                <div id="pricing" class="animate-on-scroll bg-slate-900 rounded-[3rem] p-12 text-white relative overflow-hidden shadow-2xl">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary/20 rounded-full blur-3xl -mr-32 -mt-32"></div>
                    
                    <div class="text-center mb-12 relative z-10">
                        <h2 class="text-3xl font-black text-white mb-2">Summit <span class="text-brand-accent">Investment</span></h2>
                        <p class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Choose your access level</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-10">
                        @foreach($event->builder_content['pricing'] as $tier)
                            <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-[2.5rem] p-10 hover:border-brand-accent transition-all group">
                                <h4 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-2">{{ $tier['type'] }}</h4>
                                <div class="flex items-end gap-2 mb-6">
                                    <span class="text-sm font-bold text-brand-accent opacity-60 mb-2">{{ $tier['currency'] ?? 'INR' }}</span>
                                    <span class="text-5xl font-black text-white tracking-tighter">{{ $tier['price'] }}</span>
                                    <span class="text-[10px] font-bold text-slate-500 mb-2 uppercase">/ Person</span>
                                </div>
                                <div class="text-[11px] text-slate-400 font-medium mb-8 leading-relaxed">
                                    {{ $tier['desc'] }}
                                </div>
                                <a href="https://rzp.io/l/msmeccii" target="_blank" class="block w-full bg-brand-accent hover:bg-white text-slate-900 text-center py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all">
                                    Buy Pass <i class="fa-solid fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Venue Section -->
                @if(isset($event->builder_content['venue']['name']) && $event->builder_content['venue']['name'])
                <div id="venue" class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-slate-100 animate-on-scroll">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-12">
                            <i class="fa-solid fa-map-location-dot text-4xl text-brand-primary mb-6 block"></i>
                            <h2 class="text-3xl font-black text-slate-900 mb-4">The <span class="text-brand-primary">Venue</span></h2>
                            <h4 class="text-xl font-extrabold text-slate-800 mb-2">{{ $event->builder_content['venue']['name'] }}</h4>
                            <p class="text-slate-500 font-bold text-sm leading-relaxed mb-8">{{ $event->builder_content['venue']['address'] }}</p>
                            
                            <a href="https://maps.google.com/?q={{ urlencode($event->builder_content['venue']['address']) }}" target="_blank" class="inline-flex items-center gap-2 text-brand-primary font-black text-xs uppercase hover:translate-x-1 transition-transform">
                                Navigate on Maps <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="min-h-[300px] bg-slate-100">
                             @if(isset($event->builder_content['venue']['map_url']) && str_contains($event->builder_content['venue']['map_url'], 'google.com/maps/embed'))
                                <iframe src="{{ $event->builder_content['venue']['map_url'] }}" class="w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>
                             @else
                                <div class="w-full h-full flex items-center justify-center bg-slate-800 text-white italic text-xs">
                                    Map visualization coming soon.
                                </div>
                             @endif
                        </div>
                    </div>
                </div>
                @endif

                <!-- Sponsors Section -->
                @if(isset($event->builder_content['partners']) && count($event->builder_content['partners']) > 0)
                <div id="partners" class="animate-on-scroll">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-black text-slate-900 mb-2">Our <span class="text-brand-primary">Partners</span></h2>
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-widest">Supported by global industry leaders</p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                        @foreach($event->builder_content['partners'] as $partner)
                            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center justify-center h-28 group hover:-translate-y-1 transition-all">
                                <img src="{{ asset($partner['logo']) }}" alt="{{ $partner['name'] }}" class="max-h-full max-w-full grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- FAQ Section -->
                @if(isset($event->builder_content['faq']) && count($event->builder_content['faq']) > 0)
                <div id="faq" class="animate-on-scroll">
                    <h2 class="text-3xl font-black text-slate-900 mb-12 text-center">Frequently <span class="text-brand-primary">Asked Questions</span></h2>
                    <div class="space-y-4 max-w-3xl mx-auto" x-data="{ openFaq: null }">
                        @foreach($event->builder_content['faq'] as $index => $q)
                            <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm">
                                <button @click="openFaq = openFaq === {{ $index }} ? null : {{ $index }}" class="w-full flex items-center justify-between p-6 text-left">
                                    <span class="text-sm font-black text-slate-900 leading-tight uppercase">{{ $q['q'] }}</span>
                                    <i class="fa-solid fa-chevron-down text-slate-300 transition-transform duration-300" :class="openFaq === {{ $index }} ? 'rotate-180 text-brand-primary' : ''"></i>
                                </button>
                                <div x-show="openFaq === {{ $index }}" x-collapse class="px-6 pb-6">
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
                <div id="resources" class="animate-on-scroll">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center">
                            <i class="fa-solid fa-folder-open text-brand-accent text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-3xl font-black text-slate-900 tracking-tight">Summit <span class="text-brand-primary">Resources</span></h2>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Key documents and presentations</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                        @foreach($event->builder_content['resources'] as $res)
                            <a href="{{ asset($res['url']) }}" target="_blank" class="group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:border-brand-primary hover:shadow-2xl transition-all duration-300 flex flex-col">
                                <!-- Image Part -->
                                <div class="relative aspect-video bg-slate-100 overflow-hidden border-b border-slate-100">
                                    @if(isset($res['thumbnail']) && $res['thumbnail'])
                                        <img src="{{ asset($res['thumbnail']) }}" alt="{{ $res['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full flex flex-col items-center justify-center bg-slate-50 gap-2">
                                            <i class="fa-solid fa-file-pdf text-4xl text-brand-primary/20"></i>
                                            <span class="text-[8px] font-black text-slate-400 uppercase tracking-widest">Document Preview</span>
                                        </div>
                                    @endif
                                    
                                    <!-- Action Indicator Overlay -->
                                    <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <span class="bg-white text-slate-900 px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all">
                                            View File <i class="fa-solid fa-up-right-from-square ml-1 text-brand-primary"></i>
                                        </span>
                                    </div>
                                </div>

                                <!-- Text Part -->
                                <div class="p-4 flex-1 flex flex-col justify-between">
                                    <h5 class="text-base font-black text-slate-900 uppercase tracking-widest leading-snug group-hover:text-brand-primary transition-colors">
                                        {{ $res['title'] }}
                                    </h5>
                                    
                                    <div class="mt-4 flex items-center justify-between text-slate-400">
                                        <span class="text-[9px] font-bold uppercase">Click to open</span>
                                        <i class="fa-solid fa-circle-arrow-right text-brand-primary transform group-hover:translate-x-1 transition-transform"></i>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                @endif

            </main>
        </div>
    </div>
</div>

<style>
    html { scroll-behavior: smooth; }
    [x-cloak] { display: none !important; }
</style>
@endsection
