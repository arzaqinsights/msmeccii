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

    <!-- Glassmorphic Header Navigation -->
    <header class="sticky top-0 bg-brand-primary z-50 transition-all duration-300">
        <div class="bg-brand-light hidden md:block">
            <div class="flex py-1 container items-center justify-between">
                <div class="flex items-center gap-4">
                    <a href="tel:+919810690843" class="flex items-center gap-2">
                        <i class="fa-solid fa-phone text-brand-primary"></i>
                        <span class="text-brand-primary text-sm">+91-9810690843</span>
                    </a>
                    <a href="mailto:supprt@msmeccii.in" class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope text-brand-primary"></i>
                        <span class="text-brand-primary text-sm">SUPPORT@MSMECCII.IN</span>
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <a href="" class="flex items-center gap-2">
                        <i class="fa-brands fa-facebook-f text-brand-primary"></i>
                    </a>
                    <a href="" class="flex items-center gap-2">
                        <i class="fa-brands fa-twitter text-brand-primary"></i>
                    </a>
                    <a href="" class="flex items-center gap-2">
                        <i class="fa-brands fa-instagram text-brand-primary"></i>
                    </a>
                    <a href="" class="flex items-center gap-2">
                        <i class="fa-brands fa-linkedin-in text-brand-primary"></i>
                    </a>
                    <a href="" class="flex items-center gap-2">
                        <i class="fa-brands fa-youtube text-brand-primary"></i>
                    </a>
                    <a href="" class="flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-brand-primary"></i>
                    </a>
                    <a href="{{ route('login') }}"
                        class="flex items-center gap-2 pl-2 border-l text-sm text-brand-primary">LOGIN
                        <i class="fa-solid fa-user text-brand-primary"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="px-4 container">
            <div class="flex justify-between items-center h-[88px]">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="MSMECCII Logo"
                            class="h-14 md:h-16 w-auto shrink-0 object-contain">
                        <span
                            class="text-5xl hidden md:block font-black text-brand-light hover:text-brand-primary transition-colors uppercase mb-1">MSMECCII</span>
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
                            'route' => 'about.what_is', // Base route
                            'active' => 'about', // Prefix matching
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
                            'sub_menu' => config('sectors.sectors')
                        ],
                        [
                            'name' => 'EVENTS & AWARDS',
                            'route' => 'events.index',
                            'active' => 'events'
                        ],
                        // [
                        //     'name' => 'CONTACT',
                        //     'route' => 'contact',
                        //     'active' => 'contact'
                        // ],
                    ];
                @endphp
                <!-- Desktop Menu -->
                <nav class="hidden lg:flex space-x-6 xl:space-x-8">
                    @foreach ($menu as $m)
                        @if(isset($m['sub_menu']))
                            <div class="relative group">
                                <button href="{{ route($m['route']) }}" @if($m['sub_menu']) onclick="event.preventDefault()"
                                @endif
                                    class="flex items-center gap-1.5 text-sm font-semibold text-brand-light transition-colors uppercase {{ request()->is($m['active'] . '*') ? 'before:content-[\'\'] before:absolute before:-bottom-2 before:left-0 before:w-full before:h-1 before:bg-brand-light' : '' }}">
                                    {{ $m['name'] }}
                                    <i
                                        class="fa-solid fa-chevron-down text-[10px] opacity-70 group-hover:rotate-180 transition-transform"></i>
                                </button>
                                <!-- Dropdown -->
                                <div
                                    class="absolute top-full left-0 mt-6 w-64 bg-white rounded-lg shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-3 group-hover:translate-y-0 z-50 overflow-hidden border border-slate-100">
                                    <div class="py-2">
                                        @foreach($m['sub_menu'] as $sub)
                                            <a href="{{ isset($sub['slug']) ? route($sub['route'], $sub['slug']) : route($sub['route']) }}"
                                                class="block px-5 py-3 text-sm font-semibold text-slate-700 hover:bg-brand-primary/5 hover:text-brand-primary transition-colors border-l-2 border-transparent hover:border-brand-primary">
                                                {{ $sub['name'] ?? $sub['title'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{ route($m['route']) }}"
                                class="text-sm font-semibold relative text-brand-light transition-colors uppercase {{ request()->is($m['active']) ? 'before:content-[\'\'] before:absolute before:-bottom-2 before:left-0 before:w-full before:h-1 before:bg-brand-light' : '' }}">{{ $m['name'] }}</a>
                        @endif
                    @endforeach
                </nav>

                <!-- CTA Button -->
                <div class="hidden lg:flex items-center">
                    <a href="{{ route('register') }}"
                        class="bg-brand-light text-brand-primary px-4 py-2.5 rounded-sm font-semibold transition-all shadow-sm">
                        Register Now
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center">
                    <button id="menu-btn" onclick="toggleMobileMenu()" class="text-brand-light text-3xl cursor-pointer">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu"
            class="bg-brand-light transform translate-x-full transition-all duration-300 ease-in-out fixed w-3/4 h-dvh right-0 top-0 z-51 overflow-y-auto pb-20 shadow-[-10px_0_30px_rgba(0,0,0,0.1)]">
            <div class="p-6 border-b border-brand-primary/10 flex justify-between items-center bg-brand-primary">
                <span class="text-white font-black text-xl tracking-wider">MENU</span>
                <button onclick="closeMenu()" class="text-white">
                    <i class="fa-solid fa-xmark text-2xl"></i>
                </button>
            </div>
            @foreach ($menu as $m)
                @if(isset($m['sub_menu']))
                    <div class="border-b border-slate-100">
                        <button href="{{ route($m['route']) }}" @if($m['sub_menu']) onclick="event.preventDefault()" @endif
                            class="flex justify-between items-center p-4 text-base font-bold text-slate-800 hover:text-brand-primary transition-colors">
                            {{ $m['name'] }}
                            <i class="fa-solid fa-chevron-down text-xs opacity-50"></i>
                        </button>
                        <div class="bg-slate-50 border-t border-slate-100">
                            @foreach($m['sub_menu'] as $sub)
                                <a href="{{ isset($sub['slug']) ? route($sub['route'], $sub['slug']) : route($sub['route']) }}"
                                    class="block px-8 py-3 text-sm font-medium text-slate-600 hover:text-brand-primary hover:bg-slate-100 transition-colors">
                                    <i class="fa-solid fa-angle-right text-[10px] mr-2 text-brand-accent"></i> {{ $sub['name'] ?? $sub['title'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ route($m['route']) }}"
                        class="block p-4 border-b border-slate-100 text-base font-bold text-slate-800 hover:text-brand-primary transition-colors">{{ $m['name'] }}</a>
                @endif
            @endforeach
        </div>
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

            if (menu.classList.contains('hidden')) {
                // SHOW
                menu.classList.remove('hidden');

                setTimeout(() => {
                    menu.classList.remove('translate-x-full');
                    menu.classList.add('translate-x-0');
                }, 10);

                // Add outside click listener
                document.addEventListener('click', handleOutsideClick);

            } else {
                closeMenu();
            }
        }

        function closeMenu() {
            const menu = document.getElementById('mobile-menu');

            menu.classList.remove('translate-x-0');
            menu.classList.add('translate-x-full');

            setTimeout(() => {
                menu.classList.add('hidden');
            }, 300);

            document.removeEventListener('click', handleOutsideClick);
        }

        function handleOutsideClick(e) {
            const menu = document.getElementById('mobile-menu');
            const toggleBtn = document.getElementById('menu-btn'); // apna button id set karo

            if (!menu.contains(e.target) && !toggleBtn.contains(e.target)) {
                closeMenu();
            }
        }
    </script>
</body>

</html>