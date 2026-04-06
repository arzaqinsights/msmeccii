<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSMECCI | @yield('title', 'Empowering Businesses')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    
    <!-- Swiper CSS & JS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
    </style>
</head>
<body class="font-sans text-gray-800 bg-white antialiased">

    <!-- Glassmorphic Header Navigation -->
    <header class="sticky top-0 bg-white/80 backdrop-blur-md shadow-sm z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-[88px]">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex flex-col">
                        <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2026/04/NEW-MSMECCII-LOGO-2-01-2.png" alt="MSMECCII Logo" class="h-16 w-auto object-contain drop-shadow-sm">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex space-x-6 xl:space-x-8">
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors uppercase tracking-wider">Home</a>
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors uppercase tracking-wider">About Us</a>
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors uppercase tracking-wider">Join Us</a>
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors uppercase tracking-wider">Focused Sectors</a>
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors uppercase tracking-wider">Events</a>
                    <a href="#" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors uppercase tracking-wider">Contact</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden lg:flex items-center">
                    <a href="#" class="bg-gradient-to-r from-primary to-primary-light hover:shadow-lg hover:-translate-y-0.5 text-white px-6 py-2.5 rounded-md font-semibold transition-all shadow-sm">
                        Award Nomination
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-primary hover:text-primary-dark focus:outline-none bg-gray-100 p-2 rounded-md">
                        <i data-feather="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white/95 backdrop-blur-md border-t border-gray-100 shadow-xl absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md">Home</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md">About Us</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md">Join Us</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md">Focused Sectors</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md">Events & Awards</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md">Contact</a>
                <a href="#" class="block w-full text-center mt-4 bg-primary text-white px-3 py-3 rounded-md font-medium">Award Nomination</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white pt-20 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Branding Col -->
                <div>
                    <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2026/04/NEW-MSMECCII-LOGO-2-01-2.png" alt="MSMECCII Logo" class="h-16 w-auto object-contain bg-white/90 p-2 rounded-md mb-6 inline-block">
                    <p class="text-slate-400 leading-relaxed mb-6 text-sm">
                        A global business network and NGO established in 2019, dedicated to furthering the interests of the MSME sector through innovation, training, and policy advocacy.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-300 hover:bg-accent hover:text-white transition-all"><i data-feather="facebook" class="w-4 h-4"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-300 hover:bg-accent hover:text-white transition-all"><i data-feather="twitter" class="w-4 h-4"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-300 hover:bg-accent hover:text-white transition-all"><i data-feather="linkedin" class="w-4 h-4"></i></a>
                    </div>
                </div>

                <!-- Links Col 1 -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white uppercase tracking-wider text-sm">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-accent"></div> About Us</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Focused Sectors</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Membership</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Media Gallery</a></li>
                    </ul>
                </div>

                <!-- Links Col 2 -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white uppercase tracking-wider text-sm">Activities</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Award Nominations</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Upcoming Events</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Trade Fair Expo</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-accent transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-accent"></div> Connect & Network</a></li>
                    </ul>
                </div>

                <!-- Contact Col -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white uppercase tracking-wider text-sm">Contact Us</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center shrink-0 border border-primary/30">
                                <i data-feather="map-pin" class="w-4 h-4 text-accent"></i>
                            </div>
                            <span class="text-slate-400 text-sm pt-2">India's MSME Headquarters<br>New Delhi, India</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center shrink-0 border border-primary/30">
                                <i data-feather="mail" class="w-4 h-4 text-accent"></i>
                            </div>
                            <a href="mailto:info@msmecci.in" class="text-slate-400 hover:text-white transition-colors text-sm">info@msmecci.in</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm">
                    &copy; {{ date('Y') }} MSME Chamber of Commerce and Industry of India. All rights reserved.
                </p>
                <div class="flex gap-4 text-sm text-slate-500">
                    <a href="/" class="hover:text-white transition-colors">Main Theme</a>
                    <a href="/modern" class="hover:text-white transition-colors">Modern Theme</a>
                    <a href="/traditional" class="hover:text-white transition-colors">Classic Theme</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
