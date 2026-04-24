<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'MSME Chamber of Commerce and Industry of India')</title>
    <meta name="description"
        content="@yield('meta_description', 'MSMECCII - The global MSME Chamber of Commerce and Industry of India. Supporting 50,000+ enterprises across 26+ sectors.')">

    <!-- DNS Prefetch & Preconnect for speed -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Critical CSS: Fonts (swap to prevent FOIT) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet">
    </noscript>

    <!-- Font Awesome (deferred) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />

    <!-- Swiper CSS (deferred) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" media="print"
        onload="this.media='all'" />

    <!-- Swiper JS (deferred) -->
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Tailwind Vite Directives & App JS (includes Alpine.js + Turbo) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Analytics (GA4) — async, non-blocking -->
    @if(config('services.google.analytics_id'))
        <script async
            src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', '{{ config('services.google.analytics_id') }}');
        </script>
    @endif
</head>

<body class="font-sans text-gray-800 bg-white antialiased">

    <!-- Header Navigation
    <div class="bg-brand-light hidden md:block">
        <div class="flex py-1.5 container items-center justify-between">
            <div class="flex items-center gap-5">
                    @if($site['phone_1'] ?? false)
                        <a href="tel:{{ $site['phone_1'] }}" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                            <i class="fa-solid fa-phone text-brand-primary text-xs"></i>
                            <span class="text-brand-primary text-xs font-medium">{{ $site['phone_1'] }}</span>
                        </a>
                    @endif
                    @if($site['email_1'] ?? false)
                        <a href="mailto:{{ $site['email_1'] }}" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                            <i class="fa-solid fa-envelope text-brand-primary text-xs"></i>
                            <span class="text-brand-primary text-xs font-medium">{{ $site['email_1'] }}</span>
                        </a>
                    @endif
            </div>
            <div class="flex items-center gap-3">
                @if($site['facebook_url'] ?? false)
                    <a href="{{ $site['facebook_url'] }}" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                @endif
                @if($site['twitter_url'] ?? false)
                    <a href="{{ $site['twitter_url'] }}" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                @endif
                @if($site['instagram_url'] ?? false)
                    <a href="{{ $site['instagram_url'] }}" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                @endif
                @if($site['linkedin_url'] ?? false)
                    <a href="{{ $site['linkedin_url'] }}" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                @endif
                @if($site['youtube_url'] ?? false)
                    <a href="{{ $site['youtube_url'] }}" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                @endif
                @if($site['whatsapp_url'] ?? false)
                    <a href="{{ $site['whatsapp_url'] }}" target="_blank"
                        class="text-brand-primary hover:text-brand-accent transition-colors duration-300">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                @endif
            </div>
        </div>
    </div> -->

    <header x-data="{ scrolled: false, megaOpen: false }" x-on:scroll.window="scrolled = window.pageYOffset > 50" :class="(scrolled || megaOpen) ? 'bg-linear-to-r from-brand-primary to-brand-primary-dark shadow-xl' : ''" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">

        <!-- Main Nav -->
        <div class="px-4 container">
            <div class="flex justify-between items-center h-[80px]">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="MSMECCII Logo"
                            class="h-14 w-auto shrink-0 object-contain">
                        <span
                            class="text-5xl hidden md:block font-black text-brand-light hover:text-white/90 transition-colors uppercase">MSMECCII</span>
                    </a>
                </div>

                @php
                    $menu = [
                        [
                            'name' => 'HOME',
                            'route' => 'home',
                            'active' => '/'
                        ],
                        [
                            'name' => 'ABOUT',
                            'route' => 'about.what_is',
                            'active' => 'about',
                            'sub_menu' => array_merge([
                                ['name' => 'What is MSMECCII', 'route' => 'about.what_is', 'active' => 'about/what-is-msmeccii'],
                                ['name' => 'Global Chairman', 'route' => 'about.chairman', 'active' => 'about/chairman'],
                            ], \App\Models\TeamPage::where('status', true)->orderBy('order')->get()->map(function($page) {
                                return [
                                    'name' => $page->title,
                                    'route' => 'about.team_page',
                                    'slug' => $page->slug,
                                    'active' => 'about/' . $page->slug
                                ];
                            })->toArray())
                        ],
                        [
                            'name' => 'JOIN US',
                            'route' => 'join.index',
                            'active' => 'join',
                            'sub_menu' => \App\Models\Form::where('status', 'published')->get()->map(function ($form) {
                                return [
                                    'name' => $form->name,
                                    'route' => 'join.forms.show',
                                    'slug' => $form->slug,
                                    'active' => 'join/application/' . $form->slug
                                ];
                            })->toArray()
                        ],
                        [
                            'name' => 'SECTORS',
                            'route' => 'sectors.index',
                            'active' => 'sectors',
                            'mega' => true,
                            'sub_menu' => config('sectors.sectors')
                        ],
                        [
                            'name' => 'EVENTS & AWARDS',
                            'route' => 'events.index',
                            'active' => 'events'
                        ],
                        [
                            'name' => 'BLOG & NEWS',
                            'route' => 'blog.index',
                            'active' => 'blog'
                        ],
                        [
                            'name' => 'GALLERY',
                            'route' => 'gallery',
                            'active' => 'gallery'
                        ],
                    ];
                @endphp

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center space-x-5 xl:space-x-7">
                    @foreach ($menu as $m)
                        @if(isset($m['mega']) && $m['mega'])
                            {{-- MEGA MENU trigger only --}}
                            <div class="relative" @mouseenter="megaOpen = true" @mouseleave="megaOpen = false">
                                <button onclick="event.preventDefault()"
                                    class="flex items-center gap-1.5 text-[13px] font-semibold hover:text-brand-accent transition-colors uppercase relative py-2 {{ request()->is($m['active'] . '*') ? 'text-brand-accent' : 'text-brand-light' }}">
                                    {{ $m['name'] }}
                                    <i class="fa-solid fa-chevron-down text-[9px] opacity-70 transition-transform"
                                        :class="megaOpen ? 'rotate-180' : ''"></i>
                                </button>
                            </div>
                        @elseif(isset($m['sub_menu']))
                            {{-- Regular Dropdown --}}
                            <div class="relative group">
                                <button onclick="event.preventDefault()"
                                    class="flex items-center gap-1.5 text-[13px] font-semibold hover:text-brand-accent transition-colors uppercase relative py-2 {{ request()->is($m['active'] . '*') ? 'text-brand-accent' : 'text-brand-light' }}">
                                    {{ $m['name'] }}
                                    <i
                                        class="fa-solid fa-chevron-down text-[9px] opacity-70 group-hover:rotate-180 transition-transform"></i>
                                </button>
                                <div
                                    class="absolute top-full left-0 mt-4 w-60 bg-white rounded-xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-3 group-hover:translate-y-0 z-50 overflow-hidden border border-slate-100">
                                    <div class="py-1.5">
                                        @foreach($m['sub_menu'] as $sub)
                                            <a href="{{ isset($sub['slug']) ? route($sub['route'], $sub['slug']) : route($sub['route']) }}"
                                                class="flex items-center gap-2.5 px-4 py-2.5 text-[13px] font-medium text-slate-600 hover:bg-brand-primary/5 hover:text-brand-primary transition-colors">
                                                <span class="w-1 h-1 rounded-full bg-brand-primary/30"></span>
                                                {{ $sub['name'] ?? $sub['title'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{ route($m['route']) }}"
                                class="text-sm font-semibold relative hover:text-brand-accent transition-colors uppercase py-2 {{ request()->is($m['active']) ? 'text-brand-accent' : 'text-brand-light' }}">{{ $m['name'] }}</a>
                        @endif
                    @endforeach

                    <!-- CTA Button -->
                    <div class="hidden lg:flex items-center">
                        <a href="{{ route('register') }}"
                            class="bg-brand-light text-brand-primary px-5 py-2.5 rounded-sm font-bold text-sm transition-all shadow-sm hover:shadow-md hover:bg-white">
                            Login/Register
                        </a>
                    </div>
                </nav>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center">
                    <button id="menu-btn" onclick="toggleMobileMenu()"
                        class="text-brand-light text-3xl cursor-pointer flex items-center justify-center rounded-lg hover:bg-white/10 transition-colors">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- MEGA MENU PANEL (outside nav, full-width under header) --}}
        <div class="mega-panel hidden lg:block" x-show="megaOpen" @mouseenter="megaOpen = true"
            @mouseleave.debounce.300ms="megaOpen = false" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2" style="display: none;">
            <div class="bg-white shadow-2xl border-t-4 border-white/20">
                <div class="container py-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-bold text-slate-800">
                            <i class="fa-solid fa-industry text-brand-primary mr-2"></i>Focused Industry Sectors
                        </h3>
                        <a href="{{ route('sectors.index') }}"
                            class="text-sm font-semibold text-brand-primary hover:underline flex items-center gap-1">
                            View All Sectors <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                    <div class="max-h-[65vh] overflow-y-auto pr-2">
                        <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                            @php
                                $numb = 0;
                                // Split exactly 15 items per vertical list
                                $chunks = array_chunk(config('sectors.sectors'), 14);
                            @endphp

                            @foreach($chunks as $chunk)
                                <div class="flex flex-col gap-1">
                                    @foreach($chunk as $sector)
                                        @php $numb++; @endphp
                                        <a href="{{ route('sectors.show', $sector['slug']) }}"
                                            class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium text-slate-600 hover:bg-brand-primary/5 hover:text-brand-primary transition-all group">
                                            <span class="text-brand-primary/60 font-black w-6 shrink-0">{{ $numb }}.</span>
                                            <span class="leading-tight">{{ $sector['title'] }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="bg-white transform translate-x-full transition-all duration-300 ease-in-out fixed w-[85%] max-w-sm h-dvh right-0 top-0 z-[60] overflow-y-auto pb-20 shadow-[-10px_0_30px_rgba(0,0,0,0.15)]"
            x-data="{ openSub: null }">
            <!-- Mobile Header -->
            <div class="p-5 flex justify-between items-center bg-brand-primary sticky top-0 z-10">
                <span class="text-white font-black text-xl tracking-wider">MENU</span>
                <button onclick="closeMenu()"
                    class="text-white w-9 h-9 flex items-center justify-center rounded-lg hover:bg-white/10 transition-colors">
                    <i class="fa-solid fa-xmark text-3xl"></i>
                </button>
            </div>

            @foreach ($menu as $mIndex => $m)
                @if(isset($m['sub_menu']))
                    <div class="border-b border-slate-100">
                        {{-- Accordion toggle --}}
                        <button @click="openSub === {{ $mIndex }} ? openSub = null : openSub = {{ $mIndex }}"
                            class="flex justify-between items-center w-full px-5 py-4 text-sm font-bold text-slate-800 hover:text-brand-primary transition-colors">
                            {{ $m['name'] }}
                            <i class="fa-solid fa-chevron-down text-[10px] opacity-50 transition-transform duration-200"
                                :class="openSub === {{ $mIndex }} ? 'rotate-180' : ''"></i>
                        </button>
                        {{-- Collapsible items --}}
                        <div x-show="openSub === {{ $mIndex }}" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 max-h-0"
                            class="bg-slate-50 border-t border-slate-100 {{ isset($m['mega']) ? 'max-h-[50vh] overflow-y-auto' : '' }}"
                            style="display: none;">
                            @foreach($m['sub_menu'] as $sub)
                                <a href="{{ isset($sub['slug']) ? route(isset($m['mega']) ? 'sectors.show' : $sub['route'], $sub['slug']) : route($sub['route']) }}"
                                    class="flex items-center gap-2 px-7 py-2.5 text-[13px] font-medium text-slate-600 hover:text-brand-primary hover:bg-slate-100 transition-colors">
                                    <span class="w-1 h-1 rounded-full bg-brand-primary/40 shrink-0"></span>
                                    {{ $sub['name'] ?? $sub['title'] }}
                                </a>
                            @endforeach
                            @if(isset($m['mega']))
                                <a href="{{ route('sectors.index') }}"
                                    class="flex items-center gap-2 px-7 py-3 text-[13px] font-bold text-brand-primary bg-brand-primary/5 border-t border-slate-100">
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i> View All Sectors
                                </a>
                            @endif
                        </div>
                    </div>
                @else
                    <a href="{{ route($m['route']) }}"
                        class="block px-5 py-4 border-b border-slate-100 text-sm font-bold text-slate-800 hover:text-brand-primary transition-colors">{{ $m['name'] }}</a>
                @endif
            @endforeach

            <!-- Mobile CTA -->
            <div class="p-5">
                <a href="{{ route('register') }}"
                    class="block w-full text-center bg-brand-primary text-white py-3 rounded-lg font-bold text-sm hover:bg-brand-primary/90 transition-colors">
                    Login / Register
                </a>
            </div>
        </div>

        <!-- Mobile overlay -->
        <div id="mobile-overlay" onclick="closeMenu()" class="fixed inset-0 bg-black/40 z-[55] hidden"></div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-brand-light text-slate-500 pt-20 pb-0">
        <div class="container">

            <!-- Top Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <!-- Branding -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="MSMECCII Logo"
                            class="h-12 w-auto object-contain bg-brand-primary p-1.5 rounded-lg">
                        <span class="text-4xl font-black tracking-wider text-brand-primary">MSMECCII</span>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-6 text-sm">
                        A global business network and NGO established in 2019, dedicated to furthering the interests of
                        MSMEs through innovation, training, awards, and policy advocacy.
                    </p>
                    <div class="flex gap-3">
                        @if($site['facebook_url'] ?? false)
                            <a href="{{ $site['facebook_url'] }}" target="_blank"
                                class="w-9 h-9 rounded-lg bg-brand-primary hover:bg-brand-primary flex items-center justify-center text-slate-100 hover:text-white transition-all">
                                <i class="fa-brands fa-facebook-f text-sm"></i>
                            </a>
                        @endif
                        @if($site['twitter_url'] ?? false)
                            <a href="{{ $site['twitter_url'] }}" target="_blank"
                                class="w-9 h-9 rounded-lg bg-brand-primary hover:bg-brand-primary flex items-center justify-center text-slate-100 hover:text-white transition-all">
                                <i class="fa-brands fa-twitter text-sm"></i>
                            </a>
                        @endif
                        @if($site['linkedin_url'] ?? false)
                            <a href="{{ $site['linkedin_url'] }}" target="_blank"
                                class="w-9 h-9 rounded-lg bg-brand-primary hover:bg-brand-primary flex items-center justify-center text-slate-100 hover:text-white transition-all">
                                <i class="fa-brands fa-linkedin-in text-sm"></i>
                            </a>
                        @endif
                        @if($site['instagram_url'] ?? false)
                            <a href="{{ $site['instagram_url'] }}" target="_blank"
                                class="w-9 h-9 rounded-lg bg-brand-primary hover:bg-brand-primary flex items-center justify-center text-slate-100 hover:text-white transition-all">
                                <i class="fa-brands fa-instagram text-sm"></i>
                            </a>
                        @endif
                        @if($site['youtube_url'] ?? false)
                            <a href="{{ $site['youtube_url'] }}" target="_blank"
                                class="w-9 h-9 rounded-lg bg-brand-primary hover:bg-brand-primary flex items-center justify-center text-slate-100 hover:text-white transition-all">
                                <i class="fa-brands fa-youtube text-sm"></i>
                            </a>
                        @endif
                        @if($site['whatsapp_url'] ?? false)
                            <a href="{{ $site['whatsapp_url'] }}" target="_blank"
                                class="w-9 h-9 rounded-lg bg-brand-primary hover:bg-brand-primary flex items-center justify-center text-slate-100 hover:text-white transition-all">
                                <i class="fa-brands fa-whatsapp text-sm"></i>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-bold mb-6 text-brand-primary uppercase tracking-widest">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about.what_is') }}"
                                class="text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2 text-sm">
                                <span class="w-1 h-1 rounded-full bg-brand-primary/50"></span> About MSMECCII
                            </a></li>
                        <li><a href="{{ route('sectors.index') }}"
                                class="text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2 text-sm">
                                <span class="w-1 h-1 rounded-full bg-brand-primary/50"></span> Focused Sectors
                            </a></li>
                        <li><a href="{{ route('join.index') }}"
                                class="text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2 text-sm">
                                <span class="w-1 h-1 rounded-full bg-brand-primary/50"></span> Join / Membership
                            </a></li>
                        <li><a href="{{ route('about.leadership') }}"
                                class="text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2 text-sm">
                                <span class="w-1 h-1 rounded-full bg-brand-primary/50"></span> Core Leadership
                            </a></li>
                    </ul>
                </div>

                <!-- Activities -->
                <div>
                    <h3 class="text-sm font-bold mb-6 text-brand-primary uppercase tracking-widest">Activities</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('events.index') }}"
                                class="text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2 text-sm">
                                <span class="w-1 h-1 rounded-full bg-brand-primary/50"></span> Events & Awards
                            </a></li>
                        <li><a href="{{ route('register') }}"
                                class="text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2 text-sm">
                                <span class="w-1 h-1 rounded-full bg-brand-primary/50"></span> Register Now
                            </a></li>
                        <li><a href="{{ route('about.chairman') }}"
                                class="text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2 text-sm">
                                <span class="w-1 h-1 rounded-full bg-brand-primary/50"></span> Chairman's Message
                            </a></li>
                        <li><a href="{{ route('sectors.index') }}"
                                class="text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2 text-sm">
                                <span class="w-1 h-1 rounded-full bg-brand-primary/50"></span> Trade & Expo
                            </a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-bold mb-6 text-brand-primary uppercase tracking-widest">Contact Us</h3>
                    <ul class="space-y-4">
                        @if($site['address'] ?? false)
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-9 h-9 rounded-lg bg-brand-primary/20 flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="fa-solid fa-location-dot text-brand-primary text-sm"></i>
                                </div>
                                <span
                                    class="text-slate-400 text-sm leading-relaxed">{!! nl2br(e($site['address'])) !!}</span>
                            </li>
                        @endif
                        @foreach(['phone_1', 'phone_2', 'phone_3'] as $pk)
                            @if($site[$pk] ?? false)
                                <li class="flex items-center gap-3">
                                    <div
                                        class="w-9 h-9 rounded-lg bg-brand-primary/20 flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-phone text-brand-primary text-sm"></i>
                                    </div>
                                    <a href="tel:{{ $site[$pk] }}"
                                        class="text-slate-400 hover:text-white transition-colors text-sm">{{ $site[$pk] }}</a>
                                </li>
                            @endif
                        @endforeach
                        @foreach(['email_1', 'email_2'] as $ek)
                            @if($site[$ek] ?? false)
                                <li class="flex items-center gap-3">
                                    <div
                                        class="w-9 h-9 rounded-lg bg-brand-primary/20 flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-envelope text-brand-primary text-sm"></i>
                                    </div>
                                    <a href="mailto:{{ $site[$ek] }}"
                                        class="text-slate-400 hover:text-white transition-colors text-sm">{{ $site[$ek] }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-slate-300 py-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm">
                    &copy; {{ date('Y') }} MSME Chamber of Commerce and Industry of India. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm text-slate-500">
                    <a href="{{ route('privacy') }}" class="hover:text-brand-primary transition-colors">Privacy
                        Policy</a>
                    <a href="{{ route('terms') }}" class="hover:text-brand-primary transition-colors">Terms &
                        Conditions</a>
                </div>
            </div>

        </div>
    </footer>
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('mobile-overlay');

            // SHOW
            menu.classList.remove('translate-x-full');
            menu.classList.add('translate-x-0');
            overlay.classList.remove('hidden');

            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            const menu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('mobile-overlay');

            menu.classList.remove('translate-x-0');
            menu.classList.add('translate-x-full');
            overlay.classList.add('hidden');

            // Restore body scroll
            document.body.style.overflow = '';
        }
    </script>
    <!-- Yield dynamic scripts -->
    @yield('scripts')
    <!-- Floating Help Button -->
    <div x-data="{ open: false }" class="fixed bottom-8 right-8 z-50 flex flex-col items-end gap-4">
        <!-- Sub Buttons -->
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-10 scale-90"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-10 scale-90" class="flex flex-col gap-3 mb-2">

            <!-- WhatsApp -->
            @if(isset($site['whatsapp_url']) && $site['whatsapp_url'])
                <a href="{{ $site['whatsapp_url'] }}" target="_blank" class="group flex items-center gap-3">
                    <span
                        class="bg-white px-3 py-1.5 rounded-lg shadow-xl text-[10px] font-black uppercase tracking-widest text-slate-600 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap border border-slate-100">WhatsApp
                        Us</span>
                    <div
                        class="w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition-all hover:scale-110">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                    </div>
                </a>
            @endif

            <!-- Email -->
            @if(isset($site['email_1']) && $site['email_1'])
                <a href="mailto:{{ $site['email_1'] }}" class="group flex items-center gap-3">
                    <span
                        class="bg-white px-3 py-1.5 rounded-lg shadow-xl text-[10px] font-black uppercase tracking-widest text-slate-600 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap border border-slate-100">Send
                        Email</span>
                    <div
                        class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-blue-600 transition-all hover:scale-110">
                        <i class="fa-solid fa-envelope text-lg"></i>
                    </div>
                </a>
            @endif

            <!-- Phone -->
            @if(isset($site['phone_1']) && $site['phone_1'])
                <a href="tel:{{ $site['phone_1'] }}" class="group flex items-center gap-3">
                    <span
                        class="bg-white px-3 py-1.5 rounded-lg shadow-xl text-[10px] font-black uppercase tracking-widest text-slate-600 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap border border-slate-100">Call
                        Support</span>
                    <div
                        class="w-12 h-12 bg-slate-900 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-black transition-all hover:scale-110">
                        <i class="fa-solid fa-phone text-lg"></i>
                    </div>
                </a>
            @endif
        </div>

        <!-- Main Toggle Button -->
        <button @click="open = !open" :class="open ? 'bg-red-500 scale-90' : 'bg-brand-primary'"
            class="w-16 h-16 rounded-full flex items-center justify-center text-white shadow-2xl transition-all duration-300 hover:scale-105 active:scale-95 group relative overflow-hidden">
            <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>

            <template x-if="!open">
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-headset text-2xl mb-0.5"></i>
                    <span class="text-[8px] font-black uppercase tracking-tighter">Help</span>
                </div>
            </template>

            <template x-if="open">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </template>

            <!-- Pulse Effect (only when closed) -->
            <div x-show="!open" class="absolute inset-0 rounded-full bg-brand-primary animate-ping opacity-20 -z-10">
            </div>
        </button>
    </div>

    @stack('scripts')
</body>

</html>