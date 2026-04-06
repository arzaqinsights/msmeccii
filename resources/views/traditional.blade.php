@extends('layouts.app')

@section('content')

<!-- Traditional Hero Slider Section -->
<section class="relative w-full bg-slate-900 border-b-8 border-primary">
    <div class="relative h-[70vh] min-h-[500px] w-full">
        <!-- Swiper Container -->
        <div class="swiper hero-swiper h-full w-full absolute inset-0">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-slate-900/80 z-10"></div>
                    <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2025/05/ED3A9427-scaled.webp?fit=2560%2C1707&ssl=1" class="w-full h-full object-cover grayscale">
                </div>
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-slate-900/80 z-10"></div>
                    <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2025/01/N8A0028-scaled.jpg?fit=2560%2C1707&ssl=1" class="w-full h-full object-cover grayscale">
                </div>
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-slate-900/80 z-10"></div>
                    <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2024/12/N8A0374-scaled.jpg?fit=2560%2C1707&ssl=1" class="w-full h-full object-cover grayscale">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination !mb-4"></div>
        </div>

        <!-- Hero Content Overlay -->
        <div class="absolute inset-0 z-20 flex items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full border-l-4 border-accent pl-8">
                <div class="animate-on-scroll">
                    <span class="text-accent text-sm font-bold tracking-widest uppercase mb-4 block">Official Organization Portal</span>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white leading-tight mb-6 max-w-4xl">
                        1st Edition Sustainable Global Tex Trade Fair Summit & Expo 2026
                    </h1>
                    
                    <p class="text-lg text-gray-300 mb-8 max-w-2xl font-serif">
                        Supporting industries through integrated services in innovation, training, and policy advocacy. Focused on Textile, Garments, Leather, and Handicrafts.
                    </p>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="bg-primary hover:bg-primary-dark text-white px-8 py-3 font-semibold text-sm uppercase tracking-wide border border-primary transition-colors">
                            Join Membership Form
                        </a>
                        <a href="#" class="bg-transparent hover:bg-white hover:text-primary text-white border border-white px-8 py-3 font-semibold text-sm uppercase tracking-wide transition-colors">
                            Award Nomination Form
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Event Countdown Section (Traditional) -->
<section class="bg-gray-100 border-b border-gray-300 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border-2 border-primary p-6 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
            <!-- Event Info -->
            <div class="flex-1 animate-on-scroll">
                <span class="text-red-700 font-bold uppercase tracking-wider text-xs block mb-1">Important Highlight</span>
                <h2 class="text-2xl font-serif font-bold text-gray-900 mb-2">Sustainable Global Tex Trade Fair 2026</h2>
                <p class="text-gray-600 flex items-center gap-2 text-sm font-serif">
                    <i data-feather="calendar" class="w-4 h-4 text-primary"></i> June 15-17, 2026 
                    <span class="mx-2">|</span> 
                    <i data-feather="map-pin" class="w-4 h-4 text-primary"></i> Pragati Maidan, New Delhi
                </p>
            </div>
            
            <!-- Countdown Timer -->
            <div class="flex gap-2 animate-on-scroll delay-100">
                <div class="flex flex-col items-center bg-gray-50 border border-gray-300 p-3 min-w-[70px]">
                    <span id="countdown-days" class="text-2xl font-bold text-primary font-serif">00</span>
                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mt-1">Days</span>
                </div>
                <div class="flex flex-col items-center bg-gray-50 border border-gray-300 p-3 min-w-[70px]">
                    <span id="countdown-hours" class="text-2xl font-bold text-primary font-serif">00</span>
                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mt-1">Hours</span>
                </div>
                <div class="flex flex-col items-center bg-gray-50 border border-gray-300 p-3 min-w-[70px]">
                    <span id="countdown-minutes" class="text-2xl font-bold text-primary font-serif">00</span>
                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mt-1">Mins</span>
                </div>
                <div class="flex flex-col items-center bg-gray-50 border border-gray-300 p-3 min-w-[70px]">
                    <span id="countdown-seconds" class="text-2xl font-bold text-primary font-serif">00</span>
                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mt-1">Secs</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="py-16 bg-white border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="animate-on-scroll border-t-4 border-primary pt-6">
                <h2 class="text-3xl font-serif font-bold text-gray-900 mb-6 relative pb-4 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-16 after:h-1 after:bg-accent">
                    Organization History & Overview
                </h2>
                <div class="space-y-4 text-base text-gray-700 font-serif leading-relaxed text-justify">
                    <p>
                        The <strong class="text-primary font-bold">MSME Chamber of Commerce and Industry of India (MSMECCII)</strong> is a non-profit NGO established in 2019. We operate as a premier global business network whose primary goal is to further the interests of the MSME sector.
                    </p>
                    <p>
                        We focus on supporting industries through integrated services encompassing innovation, academic publishing, advanced training, and robust policy advocacy. 
                    </p>
                    <div class="bg-gray-100 border border-gray-300 p-6 mt-6">
                        <h4 class="font-bold text-gray-900 mb-2 uppercase text-sm tracking-wider">Strategic Merger Notice</h4>
                        <p class="text-sm">We have successfully merged operations with <span class="font-bold">Publishing Matters</span> to integrate enterprise outreach with global academic publishing standards.</p>
                    </div>
                </div>
            </div>
            
            <div class="relative animate-on-scroll delay-200">
                <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2024/12/IMG_8132-Copy-scaled.jpg?fit=2560%2C1707&ssl=1" alt="MSME Networking" class="w-full h-auto border-8 border-gray-100 shadow-md grayscale hover:grayscale-0 transition-all duration-500">
            </div>
        </div>
    </div>
</section>

<!-- Focused Sectors - Traditional -->
<section class="py-16 bg-gray-50 border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-3xl font-serif font-bold text-gray-900 uppercase tracking-widest border-y-2 border-gray-300 py-4 inline-block">Divisional Focus Areas</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Sector 1 -->
            <div class="bg-white border border-gray-300 p-0 overflow-hidden group animate-on-scroll delay-100 flex items-center">
                <div class="w-1/3 aspect-square border-r border-gray-300">
                    <img src="{{ asset('images/sectors/textile.png') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all">
                </div>
                <div class="p-4 w-2/3">
                    <h3 class="font-serif font-bold text-primary group-hover:text-accent transition-colors">Textile, Jute & Leather</h3>
                </div>
            </div>

            <!-- Sector 2 -->
            <div class="bg-white border border-gray-300 p-0 overflow-hidden group animate-on-scroll delay-200 flex items-center">
                <div class="w-1/3 aspect-square border-r border-gray-300">
                    <img src="{{ asset('images/sectors/ewaste.png') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all">
                </div>
                <div class="p-4 w-2/3">
                    <h3 class="font-serif font-bold text-primary group-hover:text-accent transition-colors">E-Waste Recycling</h3>
                </div>
            </div>

            <!-- Sector 3 -->
            <div class="bg-white border border-gray-300 p-0 overflow-hidden group animate-on-scroll delay-300 flex items-center">
                <div class="w-1/3 aspect-square border-r border-gray-300">
                    <img src="{{ asset('images/sectors/renewable.png') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all">
                </div>
                <div class="p-4 w-2/3">
                    <h3 class="font-serif font-bold text-primary group-hover:text-accent transition-colors">Renewable Energy</h3>
                </div>
            </div>

             <!-- Sector 4 -->
            <div class="bg-white border border-gray-300 p-0 overflow-hidden group animate-on-scroll delay-100 flex items-center">
                <div class="w-1/3 aspect-square border-r border-gray-300">
                    <img src="{{ asset('images/sectors/rice.png') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all">
                </div>
                <div class="p-4 w-2/3">
                    <h3 class="font-serif font-bold text-primary group-hover:text-accent transition-colors">Rice Industry & Exports</h3>
                </div>
            </div>

             <!-- Sector 5 -->
            <div class="bg-white border border-gray-300 p-0 overflow-hidden group animate-on-scroll delay-200 flex items-center">
                <div class="w-1/3 aspect-square border-r border-gray-300">
                    <img src="{{ asset('images/sectors/packaging.png') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all">
                </div>
                <div class="p-4 w-2/3">
                    <h3 class="font-serif font-bold text-primary group-hover:text-accent transition-colors">Flexible Packaging</h3>
                </div>
            </div>

             <!-- Sector 6 -->
            <div class="bg-white border border-gray-300 p-0 overflow-hidden group animate-on-scroll delay-300 flex items-center">
                <div class="w-1/3 aspect-square border-r border-gray-300">
                    <img src="{{ asset('images/sectors/plastic.png') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all">
                </div>
                <div class="p-4 w-2/3">
                    <h3 class="font-serif font-bold text-primary group-hover:text-accent transition-colors">Plastic Recycling</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services -->
<section class="py-16 bg-white border-b border-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-serif font-bold text-gray-900 mb-10 border-l-4 border-primary pl-4 animate-on-scroll">Administrative Services Provided</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 gap-x-12">
            <!-- Service rows with borders -->
            <div class="flex gap-4 items-start border-b border-gray-200 pb-8 animate-on-scroll">
                <div class="bg-primary text-white p-3 shadow-sm shrink-0">
                    <i data-feather="trending-up"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-gray-900 mb-2 uppercase">I. Promotion</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Executing targeted schemes to help entrepreneurs establish and securely grow operations.</p>
                </div>
            </div>

            <div class="flex gap-4 items-start border-b border-gray-200 pb-8 animate-on-scroll">
                <div class="bg-primary text-white p-3 shadow-sm shrink-0">
                    <i data-feather="radio"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-gray-900 mb-2 uppercase">II. Awareness Output</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Disseminating critical information regarding subsidies, programs, and changing business policies.</p>
                </div>
            </div>

            <div class="flex gap-4 items-start border-b border-gray-200 pb-8 animate-on-scroll">
                <div class="bg-primary text-white p-3 shadow-sm shrink-0">
                    <i data-feather="users"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-gray-900 mb-2 uppercase">III. Formal Networking</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Facilitating valuable global business connections, buyer-seller meets, and high-level regional summits.</p>
                </div>
            </div>

            <div class="flex gap-4 items-start border-b border-gray-200 pb-8 animate-on-scroll">
                <div class="bg-primary text-white p-3 shadow-sm shrink-0">
                    <i data-feather="file-text"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-gray-900 mb-2 uppercase">IV. Market & Policy Updates</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Providing intelligence for real-time market trends, trade data, and policy shift updates for members.</p>
                </div>
            </div>
            
            <div class="flex gap-4 items-start border-b border-gray-200 pb-8 animate-on-scroll">
                <div class="bg-primary text-white p-3 shadow-sm shrink-0">
                    <i data-feather="briefcase"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-gray-900 mb-2 uppercase">V. Bureaucratic Liasoning</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Acting as an effective bridge between grassroots businesses and mammoth institutional bodies.</p>
                </div>
            </div>
            
            <div class="flex gap-4 items-start bg-gray-100 p-6 border border-gray-300 animate-on-scroll">
                <div class="bg-accent text-white p-3 shadow-sm shrink-0">
                    <i data-feather="award"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-gray-900 mb-2 uppercase">VI. Member Entitlements</h3>
                    <ul class="text-gray-600 text-sm leading-relaxed space-y-2 mb-4 list-disc list-inside">
                        <li>Facility planning support</li>
                        <li>Priority VIP event invitations</li>
                        <li>Legal & grievance advocacy</li>
                    </ul>
                    <a href="#" class="text-xs font-bold uppercase text-primary hover:underline flex items-center gap-1">Apply for Status <i data-feather="chevron-right" class="w-3 h-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="bg-primary text-white py-16 border-b-8 border-accent">
    <div class="max-w-4xl mx-auto px-4 text-center animate-on-scroll">
        <h2 class="text-3xl font-serif font-bold mb-4 uppercase tracking-widest">Call for Nominations</h2>
        <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
        <p class="text-md text-gray-300 mb-8 max-w-2xl mx-auto font-serif leading-relaxed">
            Officially recognize the outstanding achievements in your national sector. Submit your formal documentation for the prestigious MSMECCII Global Awards adjudication.
        </p>
        <a href="#" class="bg-white text-primary hover:bg-gray-100 px-8 py-3 font-bold uppercase text-sm tracking-wide shadow-sm transition-colors border border-transparent">
            Submit Nomination Papers
        </a>
    </div>
</section>

@endsection
