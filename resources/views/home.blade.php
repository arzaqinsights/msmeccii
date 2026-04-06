@extends('layouts.app')

@section('content')

<!-- Dynamic Hero Slider Section -->
<section class="relative h-[90vh] min-h-[600px] w-full bg-slate-900 border-b-4 border-accent">
    <!-- Swiper Container -->
    <div class="swiper hero-swiper h-full w-full absolute inset-0">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/70 to-transparent z-10"></div>
                <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2025/05/ED3A9427-scaled.webp?fit=2560%2C1707&ssl=1" alt="Global Tex Trade Fair" class="w-full h-full object-cover">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/70 to-transparent z-10"></div>
                <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2025/01/N8A0028-scaled.jpg?fit=2560%2C1707&ssl=1" alt="MSME Networking" class="w-full h-full object-cover">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/70 to-transparent z-10"></div>
                <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2024/12/N8A0374-scaled.jpg?fit=2560%2C1707&ssl=1" alt="Chamber Event" class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination !mb-8"></div>
    </div>

    <!-- Hero Content Overlay -->
    <div class="absolute inset-0 z-20 flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl animate-on-scroll">
                <div class="inline-flex items-baseline gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    <span class="text-white text-xs font-bold tracking-widest uppercase">Global Business Network</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-[1.1] mb-6 drop-shadow-lg">
                    1st Edition Sustainable Global Tex Trade Fair Summit & Expo 2026
                </h1>
                
                <p class="text-base text-slate-200 mb-8 max-w-2xl leading-relaxed drop-shadow-md">
                    Supporting industries through integrated services in innovation, training, and policy advocacy. Focused on <span class="text-accent font-semibold">Textile, Garments, Leather, and Handicrafts</span>.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 mb-4">
                    <a href="#" class="bg-accent hover:bg-white text-slate-900 px-8 py-4 rounded-md font-bold text-lg text-center transition-all shadow-lg hover:shadow-accent/50 group flex items-center justify-center gap-2">
                        Join Membership <i data-feather="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#" class="bg-transparent border-2 border-white/60 hover:border-white hover:bg-white/10 text-white px-8 py-4 rounded-md font-bold text-lg text-center transition-all backdrop-blur-sm">
                        Award Nomination
                    </a>
                </div>
                
                <div class="mt-8 flex gap-8 border-t border-white/20 pt-6">
                    <div class="flex flex-col">
                        <span class="text-3xl font-bold text-white">50K+</span>
                        <span class="text-sm text-slate-300 font-medium tracking-wide">Enterprises Reached</span>
                    </div>
                    <div class="flex flex-col border-l border-white/20 pl-8">
                        <span class="text-3xl font-bold text-white">2019</span>
                        <span class="text-sm text-slate-300 font-medium tracking-wide">Established NGO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Event Countdown Section -->
<section class="bg-primary text-white py-12 border-b-4 border-accent relative overflow-hidden">
    <!-- Abstract background details -->
    <div class="absolute inset-0 z-0 opacity-10">
        <div class="absolute right-0 bottom-0 w-64 h-64 border-[40px] border-white rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="absolute left-10 top-10 w-32 h-32 bg-accent rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
            <!-- Event Info -->
            <div class="flex-1 text-center lg:text-left animate-on-scroll">
                <div class="inline-flex items-center gap-2 mb-3 bg-white/10 px-4 py-1.5 rounded-full border border-white/20">
                    <span class="w-2.5 h-2.5 rounded-full bg-accent animate-pulse"></span>
                    <span class="text-accent font-bold uppercase tracking-widest text-xs">Upcoming Highlight</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4 leading-tight">1st Edition Sustainable Global Tex Trade Fair Summit 2026</h2>
                <p class="text-primary-100 flex items-center justify-center lg:justify-start gap-2 text-lg">
                    <i data-feather="calendar" class="w-5 h-5 text-accent"></i> June 15-17, 2026 
                    <span class="mx-2 opacity-50">|</span> 
                    <i data-feather="map-pin" class="w-5 h-5 text-accent"></i> Pragati Maidan, New Delhi
                </p>
            </div>
            
            <!-- Countdown Timer -->
            <div class="flex gap-3 sm:gap-5 animate-on-scroll delay-100">
                <div class="flex flex-col items-center bg-white/10 backdrop-blur-md rounded-xl p-4 sm:p-5 border border-white/20 w-20 sm:w-24 shadow-lg">
                    <span id="countdown-days" class="text-3xl sm:text-4xl font-black text-white drop-shadow-md">00</span>
                    <span class="text-[10px] sm:text-xs font-bold text-accent uppercase tracking-widest mt-1">Days</span>
                </div>
                <div class="flex flex-col items-center bg-white/10 backdrop-blur-md rounded-xl p-4 sm:p-5 border border-white/20 w-20 sm:w-24 shadow-lg">
                    <span id="countdown-hours" class="text-3xl sm:text-4xl font-black text-white drop-shadow-md">00</span>
                    <span class="text-[10px] sm:text-xs font-bold text-accent uppercase tracking-widest mt-1">Hours</span>
                </div>
                <div class="flex flex-col items-center bg-white/10 backdrop-blur-md rounded-xl p-4 sm:p-5 border border-white/20 w-20 sm:w-24 shadow-lg">
                    <span id="countdown-minutes" class="text-3xl sm:text-4xl font-black text-white drop-shadow-md">00</span>
                    <span class="text-[10px] sm:text-xs font-bold text-accent uppercase tracking-widest mt-1">Mins</span>
                </div>
                <div class="flex flex-col items-center bg-white/10 backdrop-blur-md rounded-xl p-4 sm:p-5 border border-white/20 w-20 sm:w-24 shadow-lg">
                    <span id="countdown-seconds" class="text-3xl sm:text-4xl font-black text-white drop-shadow-md">00</span>
                    <span class="text-[10px] sm:text-xs font-bold text-accent uppercase tracking-widest mt-1">Secs</span>
                </div>
            </div>
            
            <!-- CTA -->
            <div class="animate-on-scroll delay-200 mt-4 lg:mt-0">
                <a href="#" class="bg-accent hover:bg-white text-primary-dark px-8 py-5 rounded-md font-bold text-lg text-center transition-all shadow-xl hover:shadow-accent/50 block whitespace-nowrap border border-green-400">
                    Register Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute -right-20 -top-20 w-96 h-96 bg-blue-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative animate-on-scroll">
                <div class="absolute -inset-4 bg-gradient-to-br from-primary/10 to-accent/10 rounded-2xl transform -rotate-2 z-0"></div>
                <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2024/12/IMG_8132-Copy-scaled.jpg?fit=2560%2C1707&ssl=1" alt="MSME Networking" class="relative z-10 w-full h-auto rounded-xl shadow-2xl border border-white">
                <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-xl shadow-xl z-20 hidden md:block border-b-4 border-accent">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary">
                            <i data-feather="shield"></i>
                        </div>
                        <div>
                            <p class="text-2xl font-black text-gray-900 leading-none mb-1">Non-Profit</p>
                            <p class="text-sm font-semibold text-gray-500 uppercase">Govt. Recognized</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="animate-on-scroll delay-200">
                <div class="inline-flex items-center gap-2 mb-4">
                    <div class="w-8 h-1 bg-accent"></div>
                    <span class="text-primary font-bold uppercase tracking-widest text-sm">About MSMECCII</span>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                    Fostering Global Business Networks & Partnerships
                </h2>
                <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
                    <p>
                        The <strong class="text-primary font-bold">MSME Chamber of Commerce and Industry of India (MSMECCII)</strong> is a non-profit NGO established in 2019. We operate as a premier global business network whose primary goal is to further the interests of the MSME sector.
                    </p>
                    <p>
                        We focus on supporting industries through integrated services encompassing innovation, academic publishing, advanced training, and robust policy advocacy. 
                    </p>
                    <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-primary">
                        <h4 class="font-bold text-gray-900 mb-2">Strategic Merger Announcement</h4>
                        <p class="text-base">We have successfully merged operations with <span class="font-semibold text-primary">Publishing Matters</span> to perfectly integrate enterprise outreach with global academic publishing standards.</p>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#" class="text-primary font-bold border-b-2 border-accent pb-1 hover:text-primary-dark transition-colors inline-flex items-center gap-2 group">
                        Read Our Full History <i data-feather="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Focused Sectors Section -->
<section class="py-24 bg-white border-t border-gray-100 relative overflow-hidden">
    <!-- Decorative faint background map/grid -->
    <div class="absolute inset-0 z-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
            <div class="inline-flex items-center gap-2 mb-4 justify-center">
                <div class="w-8 h-1 bg-accent"></div>
                <span class="text-primary font-bold uppercase tracking-widest text-sm">Areas of Excellence</span>
                <div class="w-8 h-1 bg-accent"></div>
            </div>
            <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-6">Our Focused Sectors</h2>
            <p class="text-xl text-gray-600">Representing the most vital and rapidly growing industries within the Indian macro-economy.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Sector 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group animate-on-scroll delay-100">
                <div class="h-48 w-full overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent z-10"></div>
                    <img src="{{ asset('images/sectors/textile.png') }}" alt="Textile, Jute & Leather" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 text-center relative z-20 -mt-12">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center text-primary group-hover:text-accent shadow-lg mb-4 transition-colors relative z-20">
                        <i data-feather="scissors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary transition-colors leading-tight">Textile, Jute & Leather</h3>
                </div>
            </div>

            <!-- Sector 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group animate-on-scroll delay-200">
                <div class="h-48 w-full overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent z-10"></div>
                    <img src="{{ asset('images/sectors/ewaste.png') }}" alt="E-Waste Recycling" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 text-center relative z-20 -mt-12">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center text-primary group-hover:text-accent shadow-lg mb-4 transition-colors relative z-20">
                        <i data-feather="cpu"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary transition-colors leading-tight">E-Waste Recycling</h3>
                </div>
            </div>

            <!-- Sector 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group animate-on-scroll delay-300">
                <div class="h-48 w-full overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent z-10"></div>
                    <img src="{{ asset('images/sectors/renewable.png') }}" alt="Renewable Energy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 text-center relative z-20 -mt-12">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center text-primary group-hover:text-accent shadow-lg mb-4 transition-colors relative z-20">
                        <i data-feather="sun"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary transition-colors leading-tight">Renewable Energy</h3>
                </div>
            </div>

            <!-- Sector 4 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group animate-on-scroll delay-100">
                <div class="h-48 w-full overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent z-10"></div>
                    <img src="{{ asset('images/sectors/rice.png') }}" alt="Rice Industry & Exports" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 text-center relative z-20 -mt-12">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center text-primary group-hover:text-accent shadow-lg mb-4 transition-colors relative z-20">
                        <i data-feather="globe"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary transition-colors leading-tight">Rice Industry & Exports</h3>
                </div>
            </div>

            <!-- Sector 5 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group animate-on-scroll delay-200">
                <div class="h-48 w-full overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent z-10"></div>
                    <img src="{{ asset('images/sectors/packaging.png') }}" alt="Flexible Packaging" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 text-center relative z-20 -mt-12">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center text-primary group-hover:text-accent shadow-lg mb-4 transition-colors relative z-20">
                        <i data-feather="box"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary transition-colors leading-tight">Flexible Packaging</h3>
                </div>
            </div>

            <!-- Sector 6 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group animate-on-scroll delay-300">
                <div class="h-48 w-full overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent z-10"></div>
                    <img src="{{ asset('images/sectors/plastic.png') }}" alt="Plastic Recycling" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 text-center relative z-20 -mt-12">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center text-primary group-hover:text-accent shadow-lg mb-4 transition-colors relative z-20">
                        <i data-feather="refresh-cw"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary transition-colors leading-tight">Plastic Recycling</h3>
                </div>
            </div>
        </div>
        
        <div class="mt-12 flex justify-center animate-on-scroll delay-400">
            <div class="inline-flex flex-wrap items-center justify-center gap-3 px-6 py-3 bg-gray-100 rounded-full text-sm font-medium text-gray-600">
                <span class="text-primary font-bold">Also operating in:</span>
                <span>Electric Vehicles</span> &bull; 
                <span>Water Conservation</span> &bull; 
                <span>Supply Chain</span>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
            <div class="inline-flex items-center gap-2 mb-4 justify-center">
                <div class="w-8 h-1 bg-accent"></div>
                <span class="text-primary font-bold uppercase tracking-widest text-sm">Core Divisions</span>
                <div class="w-8 h-1 bg-accent"></div>
            </div>
            <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-6">Our Integrated Services</h2>
            <p class="text-xl text-gray-600">Empowering entrepreneurs through dedicated execution of Government programs, structured networking, and extensive advocacy.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group animate-on-scroll delay-100">
                <div class="w-16 h-16 bg-blue-50 text-primary rounded-xl flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-primary-light group-hover:text-white transition-all shadow-inner">
                    <i data-feather="trending-up" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors">Promote</h3>
                <p class="text-gray-600 leading-relaxed mb-6">Executing targeted schemes and programs to help budding entrepreneurs establish and securely grow their operations.</p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group animate-on-scroll delay-200">
                <div class="w-16 h-16 bg-green-50 text-emerald-600 rounded-xl flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-emerald-500 group-hover:to-accent group-hover:text-white transition-all shadow-inner">
                    <i data-feather="radio" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-emerald-600 transition-colors">Awareness</h3>
                <p class="text-gray-600 leading-relaxed mb-6">Disseminating critical information regarding various government subsidies, programs, and changing business policies.</p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group animate-on-scroll delay-300">
                <div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-purple-600 group-hover:to-purple-400 group-hover:text-white transition-all shadow-inner">
                    <i data-feather="users" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors">Networking</h3>
                <p class="text-gray-600 leading-relaxed mb-6">Facilitating valuable global business connections, buyer-seller meets, and high-level regional networking summits.</p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group animate-on-scroll delay-100">
                <div class="w-16 h-16 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-orange-500 group-hover:to-orange-400 group-hover:text-white transition-all shadow-inner">
                    <i data-feather="file-text" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-orange-500 transition-colors">Market Updates</h3>
                <p class="text-gray-600 leading-relaxed mb-6">Providing an intelligent online platform for real-time market trends, trade data, and policy shift updates for members.</p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100/50 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group animate-on-scroll delay-200">
                <div class="w-16 h-16 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center mb-8 group-hover:bg-gradient-to-br group-hover:from-rose-600 group-hover:to-rose-400 group-hover:text-white transition-all shadow-inner">
                    <i data-feather="link" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-rose-600 transition-colors">Liasoning</h3>
                <p class="text-gray-600 leading-relaxed mb-6">Acting as an effective bridge between grassroots small businesses and mammoth institutional/bureaucratic bodies.</p>
            </div>

            <!-- Service 6 -->
            <div class="bg-primary text-white p-10 rounded-2xl shadow-lg border border-primary-dark hover:-translate-y-1 transition-transform animate-on-scroll delay-300 relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
                <h3 class="text-2xl font-bold text-white mb-4">Membership Benefits</h3>
                <ul class="space-y-4 text-primary-100 mb-8 relative z-10">
                    <li class="flex items-start gap-3"><i data-feather="check" class="w-5 h-5 text-accent shrink-0 mt-1"></i> Facility planning & support</li>
                    <li class="flex items-start gap-3"><i data-feather="check" class="w-5 h-5 text-accent shrink-0 mt-1"></i> Invites to VIP guest speaker events</li>
                    <li class="flex items-start gap-3"><i data-feather="check" class="w-5 h-5 text-accent shrink-0 mt-1"></i> Access to Global WhatsApp networking</li>
                    <li class="flex items-start gap-3"><i data-feather="check" class="w-5 h-5 text-accent shrink-0 mt-1"></i> Vital legal & grievance support</li>
                </ul>
                <a href="#" class="w-full block bg-accent hover:bg-white text-primary-dark px-6 py-3 rounded-md font-bold text-center transition-colors">Join Us Today</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="relative py-20 overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2025/01/N8A0028-scaled.jpg?fit=2560%2C1707&ssl=1" alt="Background" class="w-full h-full object-cover opacity-20 filter grayscale blur-[2px]">
    </div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 animate-on-scroll">
        <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Nominate for Excellence</h2>
        <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
            Recognize the outstanding achievements in your sector. Be a part of the prestigious MSMECCII Global Awards night.
        </p>
        <div class="flex justify-center gap-4">
            <a href="#" class="bg-white text-primary hover:bg-gray-50 px-8 py-4 rounded-full font-bold text-lg transition-transform hover:scale-105 shadow-xl">
                Submit Award Nomination
            </a>
        </div>
    </div>
</section>

@endsection
