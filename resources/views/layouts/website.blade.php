<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'MSME Chamber of Commerce and Industy of India')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper CSS & JS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind Vite Directives & App JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Animation helper styles */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-100 {
            transition-delay: 100ms;
        }

        .delay-200 {
            transition-delay: 200ms;
        }

        .delay-300 {
            transition-delay: 300ms;
        }

        .delay-400 {
            transition-delay: 400ms;
        }
    </style>
</head>

<body class="font-sans text-gray-800 bg-white antialiased">

    <!-- Header Navigation -->
    <header class="sticky top-0 bg-brand-primary z-50 transition-all duration-300" x-data="{ megaOpen: false }">
        <!-- Top Bar -->
        <div class="bg-brand-light hidden md:block">
            <div class="flex py-1.5 container items-center justify-between">
                <div class="flex items-center gap-5">
                    <a href="tel:+919810690843" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                        <i class="fa-solid fa-phone text-brand-primary text-xs"></i>
                        <span class="text-brand-primary text-xs font-medium">+91-9810690843</span>
                    </a>
                    <a href="mailto:support@msmeccii.in" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                        <i class="fa-solid fa-envelope text-brand-primary text-xs"></i>
                        <span class="text-brand-primary text-xs font-medium">SUPPORT@MSMECCII.IN</span>
                    </a>
                </div>
                <div class="flex items-center gap-3">
                    <a href="" class="w-7 h-7 rounded-full bg-brand-primary/10 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all">
                        <i class="fa-brands fa-facebook-f text-brand-primary text-[10px] hover:text-white"></i>
                    </a>
                    <a href="" class="w-7 h-7 rounded-full bg-brand-primary/10 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all">
                        <i class="fa-brands fa-twitter text-brand-primary text-[10px]"></i>
                    </a>
                    <a href="" class="w-7 h-7 rounded-full bg-brand-primary/10 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all">
                        <i class="fa-brands fa-instagram text-brand-primary text-[10px]"></i>
                    </a>
                    <a href="" class="w-7 h-7 rounded-full bg-brand-primary/10 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all">
                        <i class="fa-brands fa-linkedin-in text-brand-primary text-[10px]"></i>
                    </a>
                    <a href="" class="w-7 h-7 rounded-full bg-brand-primary/10 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all">
                        <i class="fa-brands fa-youtube text-brand-primary text-[10px]"></i>
                    </a>
                    <a href="" class="w-7 h-7 rounded-full bg-brand-primary/10 flex items-center justify-center hover:bg-brand-primary hover:text-white transition-all">
                        <i class="fa-brands fa-whatsapp text-brand-primary text-[10px]"></i>
                    </a>
                    <div class="w-px h-5 bg-brand-primary/20 mx-1"></div>
                    <a href="{{ route('login') }}"
                        class="flex items-center gap-1.5 text-xs font-bold text-brand-primary hover:opacity-80 transition-opacity">
                        <i class="fa-solid fa-user text-brand-primary text-[10px]"></i> LOGIN
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Nav -->
        <div class="px-4 container">
            <div class="flex justify-between items-center h-[80px]">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="MSMECCII Logo"
                            class="h-12 md:h-14 w-auto shrink-0 object-contain">
                        <span
                            class="text-4xl xl:text-5xl hidden md:block font-black text-brand-light hover:text-white/90 transition-colors uppercase">MSMECCII</span>
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
                            'name' => 'ABOUT US',
                            'route' => 'about.what_is',
                            'active' => 'about',
                            'sub_menu' => [
                                ['name' => 'What is MSMECCII', 'route' => 'about.what_is', 'active' => 'about/what-is-msmeccii'],
                                ['name' => 'Global Chairman', 'route' => 'about.chairman', 'active' => 'about/chairman'],
                                ['name' => 'Core Leadership', 'route' => 'about.leadership', 'active' => 'about/leadership'],
                            ]
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
                            'name' => 'FOCUSED SECTORS',
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
                    ];
                @endphp

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center space-x-5 xl:space-x-7">
                    @foreach ($menu as $m)
                        @if(isset($m['mega']) && $m['mega'])
                            {{-- MEGA MENU trigger only --}}
                            <div @mouseenter="megaOpen = true" @mouseleave="setTimeout(() => { if(!$el.parentElement.querySelector('.mega-panel:hover')) megaOpen = false }, 80)">
                                <button onclick="event.preventDefault()"
                                    class="flex items-center gap-1.5 text-[13px] font-semibold text-brand-light hover:text-white transition-colors uppercase relative py-2 {{ request()->is($m['active'] . '*') ? 'after:content-[\'\'] after:absolute after:-bottom-0 after:left-0 after:w-full after:h-[3px] after:bg-brand-light after:rounded-full' : '' }}">
                                    {{ $m['name'] }}
                                    <i class="fa-solid fa-chevron-down text-[9px] opacity-70 transition-transform" :class="megaOpen ? 'rotate-180' : ''"></i>
                                </button>
                            </div>
                        @elseif(isset($m['sub_menu']))
                            {{-- Regular Dropdown --}}
                            <div class="relative group">
                                <button onclick="event.preventDefault()"
                                    class="flex items-center gap-1.5 text-[13px] font-semibold text-brand-light hover:text-white transition-colors uppercase relative py-2 {{ request()->is($m['active'] . '*') ? 'after:content-[\'\'] after:absolute after:-bottom-0 after:left-0 after:w-full after:h-[3px] after:bg-brand-light after:rounded-full' : '' }}">
                                    {{ $m['name'] }}
                                    <i class="fa-solid fa-chevron-down text-[9px] opacity-70 group-hover:rotate-180 transition-transform"></i>
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
                                class="text-[13px] font-semibold relative text-brand-light hover:text-white transition-colors uppercase py-2 {{ request()->is($m['active']) ? 'after:content-[\'\'] after:absolute after:-bottom-0 after:left-0 after:w-full after:h-[3px] after:bg-brand-light after:rounded-full' : '' }}">{{ $m['name'] }}</a>
                        @endif
                    @endforeach
                </nav>

                <!-- CTA Button -->
                <div class="hidden lg:flex items-center">
                    <a href="{{ route('register') }}"
                        class="bg-brand-light text-brand-primary px-5 py-2.5 rounded-lg font-bold text-sm transition-all shadow-sm hover:shadow-md hover:bg-white">
                        Register Now
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center">
                    <button id="menu-btn" onclick="toggleMobileMenu()" class="text-brand-light text-2xl cursor-pointer w-10 h-10 flex items-center justify-center rounded-lg hover:bg-white/10 transition-colors">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- MEGA MENU PANEL (outside nav, full-width under header) --}}
        <div class="mega-panel hidden lg:block"
            x-show="megaOpen"
            @mouseenter="megaOpen = true"
            @mouseleave="megaOpen = false"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            style="display: none;">
            <div class="bg-white shadow-2xl border-t-4 border-white/20">
                <div class="container py-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-bold text-slate-800">
                            <i class="fa-solid fa-industry text-brand-primary mr-2"></i>Focused Industry Sectors
                        </h3>
                        <a href="{{ route('sectors.index') }}" class="text-sm font-semibold text-brand-primary hover:underline flex items-center gap-1">
                            View All Sectors <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-6 gap-y-0.5">
                        @foreach(config('sectors.sectors') as $sector)
                            <a href="{{ route('sectors.show', $sector['slug']) }}"
                                class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-[13px] font-medium text-slate-600 hover:bg-brand-primary/5 hover:text-brand-primary transition-all group">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-primary/30 group-hover:bg-brand-primary group-hover:scale-125 transition-all shrink-0"></span>
                                {{ $sector['title'] }}
                            </a>
                        @endforeach
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
                <span class="text-white font-black text-lg tracking-wider">MENU</span>
                <button onclick="closeMenu()" class="text-white w-9 h-9 flex items-center justify-center rounded-lg hover:bg-white/10 transition-colors">
                    <i class="fa-solid fa-xmark text-xl"></i>
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
                        <div x-show="openSub === {{ $mIndex }}"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 max-h-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100"
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
                    Register Now
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
    <footer class="bg-slate-900 text-white pt-20 pb-8">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Branding Col -->
                <div>
                    <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2026/04/NEW-MSMECCII-LOGO-2-01-2.png"
                        alt="MSMECCII Logo"
                        class="h-16 w-auto object-contain bg-white/90 p-2 rounded-md mb-6 inline-block">
                    <p class="text-slate-400 leading-relaxed mb-6 text-sm">
                        A global business network and NGO established in 2019, dedicated to furthering the interests of
                        the MSME sector through innovation, training, and policy advocacy.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-300 hover:bg-accent hover:text-white transition-all"><i
                                data-feather="facebook" class="w-4 h-4"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-300 hover:bg-accent hover:text-white transition-all"><i
                                data-feather="twitter" class="w-4 h-4"></i></a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-300 hover:bg-accent hover:text-white transition-all"><i
                                data-feather="linkedin" class="w-4 h-4"></i></a>
                    </div>
                </div>

                <!-- Links Col 1 -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white uppercase tracking-wider text-sm">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> About Us
                            </a></li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Focused Sectors
                            </a></li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Membership
                            </a></li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Media Gallery
                            </a></li>
                    </ul>
                </div>

                <!-- Links Col 2 -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white uppercase tracking-wider text-sm">Activities</h3>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Award Nominations
                            </a></li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Upcoming Events
                            </a></li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Trade Fair Expo
                            </a></li>
                        <li><a href="#"
                                class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Connect & Network
                            </a></li>
                    </ul>
                </div>

                <!-- Contact Col -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white uppercase tracking-wider text-sm">Contact Us</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center shrink-0 border border-primary/30">
                                <i data-feather="map-pin" class="w-4 h-4 text-accent"></i>
                            </div>
                            <span class="text-slate-400 text-sm pt-2">India's MSME Headquarters<br>New Delhi,
                                India</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center shrink-0 border border-primary/30">
                                <i data-feather="mail" class="w-4 h-4 text-accent"></i>
                            </div>
                            <a href="mailto:info@msmecci.in"
                                class="text-slate-400 hover:text-white transition-colors text-sm">info@msmecci.in</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm">
                    &copy; {{ date('Y') }} MSME Chamber of Commerce and Industry of India. All rights reserved.
                </p>
                <div class="flex gap-4 text-sm text-slate-500">
                    <a href="/" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="/modern" class="hover:text-white transition-colors">Terms & Conditions</a>
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
</body>

</html>