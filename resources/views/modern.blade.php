@extends('layouts.app')

@section('content')

<!-- Modern Hero Slider Section -->
<section class="p-4 sm:p-6 lg:p-8 bg-gray-50">
    <div class="relative h-[85vh] min-h-[600px] w-full bg-slate-900 rounded-[3rem] overflow-hidden shadow-2xl border-4 border-white">
        <!-- Swiper Container -->
        <div class="swiper hero-swiper h-full w-full absolute inset-0">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent z-10 mix-blend-multiply"></div>
                    <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2025/05/ED3A9427-scaled.webp?fit=2560%2C1707&ssl=1" alt="Global Tex Trade Fair" class="w-full h-full object-cover">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent z-10 mix-blend-multiply"></div>
                    <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2025/01/N8A0028-scaled.jpg?fit=2560%2C1707&ssl=1" alt="MSME Networking" class="w-full h-full object-cover">
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/50 to-transparent z-10 mix-blend-multiply"></div>
                    <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2024/12/N8A0374-scaled.jpg?fit=2560%2C1707&ssl=1" alt="Chamber Event" class="w-full h-full object-cover">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination !mb-8"></div>
        </div>

        <!-- Hero Content Overlay -->
        <div class="absolute inset-0 z-20 flex items-center">
            <div class="max-w-7xl mx-auto px-8 sm:px-12 lg:px-16 w-full">
                <div class="max-w-3xl animate-on-scroll">
                    <div class="inline-flex items-baseline gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/30 mb-8 shadow-xl">
                        <span class="w-2.5 h-2.5 rounded-full bg-accent animate-pulse"></span>
                        <span class="text-white text-xs font-bold tracking-widest uppercase">Global Business Network</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white leading-[1.1] mb-8 drop-shadow-2xl tracking-tight">
                        1st Edition Sustainable <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-green-300">Global Tex</span> Trade Fair
                    </h1>
                    
                    <p class="text-xl text-slate-200 mb-10 max-w-2xl leading-relaxed drop-shadow-md font-light">
                        Supporting industries through integrated services in innovation, training, and policy advocacy. Focused on Textile, Garments, Leather, and Handicrafts.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 mb-4">
                        <a href="#" class="bg-gradient-to-r from-accent to-green-400 hover:from-white hover:to-white text-slate-900 px-8 py-4 rounded-full font-bold text-lg text-center transition-all shadow-lg hover:shadow-accent/50 hover:-translate-y-1 group flex items-center justify-center gap-2">
                            Join Membership <i data-feather="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="#" class="bg-white/10 backdrop-blur-md border border-white/40 hover:bg-white/20 text-white px-8 py-4 rounded-full font-bold text-lg text-center transition-all shadow-lg hover:-translate-y-1">
                            Award Nomination
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Event Countdown Section (Modern) -->
<section class="max-w-6xl mx-auto px-4 relative z-30 -mt-20 sm:-mt-24 mb-24">
    <div class="bg-gradient-to-br from-primary to-primary-light text-white rounded-[2rem] p-8 sm:p-12 shadow-2xl border border-white/20 backdrop-blur-xl">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
            <!-- Event Info -->
            <div class="flex-1 text-center lg:text-left animate-on-scroll">
                <div class="inline-flex items-center gap-2 mb-4 bg-white/10 px-4 py-1.5 rounded-full">
                    <span class="w-2.5 h-2.5 rounded-full bg-accent animate-pulse"></span>
                    <span class="text-accent font-bold uppercase tracking-widest text-xs">Upcoming Highlight</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold mb-4 leading-tight tracking-tight">Sustainable Global Tex Trade Fair 2026</h2>
                <p class="text-primary-100 flex items-center justify-center lg:justify-start gap-2 text-lg">
                    <i data-feather="calendar" class="w-5 h-5 opacity-70"></i> June 15-17, 2026 
                    <span class="mx-2 opacity-50">|</span> 
                    <i data-feather="map-pin" class="w-5 h-5 opacity-70"></i> Pragati Maidan, New Delhi
                </p>
            </div>
            
            <!-- Countdown Timer -->
            <div class="flex gap-3 sm:gap-4 animate-on-scroll delay-100">
                <div class="flex flex-col items-center bg-slate-900/40 backdrop-blur-xl rounded-[1.5rem] p-4 sm:p-6 border border-white/10 min-w-[80px] shadow-inner">
                    <span id="countdown-days" class="text-3xl sm:text-4xl font-black text-white">00</span>
                    <span class="text-[10px] sm:text-xs font-bold text-accent uppercase tracking-widest mt-2">Days</span>
                </div>
                <div class="flex flex-col items-center bg-slate-900/40 backdrop-blur-xl rounded-[1.5rem] p-4 sm:p-6 border border-white/10 min-w-[80px] shadow-inner">
                    <span id="countdown-hours" class="text-3xl sm:text-4xl font-black text-white">00</span>
                    <span class="text-[10px] sm:text-xs font-bold text-accent uppercase tracking-widest mt-2">Hours</span>
                </div>
                <div class="flex flex-col items-center bg-slate-900/40 backdrop-blur-xl rounded-[1.5rem] p-4 sm:p-6 border border-white/10 min-w-[80px] shadow-inner">
                    <span id="countdown-minutes" class="text-3xl sm:text-4xl font-black text-white">00</span>
                    <span class="text-[10px] sm:text-xs font-bold text-accent uppercase tracking-widest mt-2">Mins</span>
                </div>
                <div class="flex flex-col items-center bg-slate-900/40 backdrop-blur-xl rounded-[1.5rem] p-4 sm:p-6 border border-white/10 min-w-[80px] shadow-inner">
                    <span id="countdown-seconds" class="text-3xl sm:text-4xl font-black text-white">00</span>
                    <span class="text-[10px] sm:text-xs font-bold text-accent uppercase tracking-widest mt-2">Secs</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="py-12 bg-gray-50 relative overflow-hidden">
    <div class="absolute -right-40 -top-40 w-[600px] h-[600px] bg-gradient-to-br from-blue-100 to-green-100 rounded-full blur-3xl opacity-60"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="relative animate-on-scroll">
                <div class="absolute -inset-6 bg-gradient-to-tr from-accent/30 to-primary/30 rounded-[3rem] transform -rotate-3 scale-105 z-0"></div>
                <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2024/12/IMG_8132-Copy-scaled.jpg?fit=2560%2C1707&ssl=1" alt="MSME Networking" class="relative z-10 w-full h-auto rounded-[2.5rem] shadow-2xl border-4 border-white">
                <div class="absolute -bottom-8 -right-8 bg-white/90 backdrop-blur-xl p-8 rounded-[2rem] shadow-2xl z-20 hidden md:block border border-white">
                    <h3 class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent mb-1">2019</h3>
                    <p class="text-sm font-bold text-gray-500 uppercase tracking-widest">Established NGO</p>
                </div>
            </div>
            
            <div class="animate-on-scroll delay-200">
                <span class="text-accent font-bold uppercase tracking-widest text-sm mb-4 block">Fostering Global Partnerships</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight tracking-tight">
                    The Premier Global Business Network
                </h2>
                <div class="space-y-6 text-lg text-gray-600 font-light leading-relaxed">
                    <p>
                        The <strong class="text-primary font-bold">MSME Chamber of Commerce and Industry of India (MSMECCII)</strong> is a non-profit NGO. We operate as a modern, forward-thinking network focusing on the robust growth of the MSME sector.
                    </p>
                    <p>
                        We support industries through integrated services encompassing innovation, academic publishing, advanced training, and policy advocacy. 
                    </p>
                    <div class="bg-white p-8 rounded-[2rem] shadow-lg border border-gray-100 relative overflow-hidden group">
                        <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-primary to-accent"></div>
                        <h4 class="font-bold text-gray-900 mb-2">Strategic Merger Announcement</h4>
                        <p class="text-base">We have successfully merged operations with <span class="font-bold text-primary">Publishing Matters</span> to perfectly integrate enterprise outreach with global academic publishing standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Focused Sectors (Image Cards) - Modern -->
<section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20 animate-on-scroll">
            <span class="text-accent font-bold uppercase tracking-widest text-sm mb-4 block">Areas of Excellence</span>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight">Focusing on the Future</h2>
            <p class="text-xl text-gray-500 font-light">Representing the most vital, rapidly growing, and sustainable industries.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Sector 1 -->
            <div class="group relative rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 animate-on-scroll delay-100">
                <div class="aspect-[4/3] w-full">
                    <img src="{{ asset('images/sectors/textile.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                </div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30 transform group-hover:-translate-y-2 transition-transform">
                        <i data-feather="scissors"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform">Textile, Jute & Leather</h3>
                </div>
            </div>

            <!-- Sector 2 -->
            <div class="group relative rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 animate-on-scroll delay-200">
                <div class="aspect-[4/3] w-full">
                    <img src="{{ asset('images/sectors/ewaste.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                </div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30 transform group-hover:-translate-y-2 transition-transform">
                        <i data-feather="cpu"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform">E-Waste Recycling</h3>
                </div>
            </div>

            <!-- Sector 3 -->
            <div class="group relative rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 animate-on-scroll delay-300">
                <div class="aspect-[4/3] w-full">
                    <img src="{{ asset('images/sectors/renewable.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                </div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30 transform group-hover:-translate-y-2 transition-transform">
                        <i data-feather="sun"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform">Renewable Energy</h3>
                </div>
            </div>
            
            <!-- Sector 4 -->
            <div class="group relative rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 animate-on-scroll delay-100">
                <div class="aspect-[4/3] w-full">
                    <img src="{{ asset('images/sectors/rice.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                </div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30 transform group-hover:-translate-y-2 transition-transform">
                        <i data-feather="globe"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform">Rice Industry & Exports</h3>
                </div>
            </div>

            <!-- Sector 5 -->
            <div class="group relative rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 animate-on-scroll delay-200">
                <div class="aspect-[4/3] w-full">
                    <img src="{{ asset('images/sectors/packaging.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                </div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30 transform group-hover:-translate-y-2 transition-transform">
                        <i data-feather="box"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform">Flexible Packaging</h3>
                </div>
            </div>

            <!-- Sector 6 -->
            <div class="group relative rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 animate-on-scroll delay-300">
                <div class="aspect-[4/3] w-full">
                    <img src="{{ asset('images/sectors/plastic.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                </div>
                <div class="absolute inset-0 p-8 flex flex-col justify-end">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30 transform group-hover:-translate-y-2 transition-transform">
                        <i data-feather="refresh-cw"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2 transform group-hover:-translate-y-2 transition-transform">Plastic Recycling</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section - Modern -->
<section class="py-24 bg-gray-50 rounded-t-[3rem] mt-12 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight">Our Integrated Services</h2>
            <p class="text-xl text-gray-500 font-light">Empowering entrepreneurs through dedicated execution and structured networking.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Cards with hover effects -->
            <div class="bg-white transition-all hover:bg-gradient-to-br hover:from-primary hover:to-primary-light group p-10 rounded-[2.5rem] hover:-translate-y-2 shadow-md hover:shadow-2xl border border-gray-100 animate-on-scroll delay-100">
                <div class="w-16 h-16 bg-blue-50 text-primary group-hover:bg-white/20 group-hover:text-white rounded-2xl flex items-center justify-center mb-8 transition-colors">
                    <i data-feather="trending-up" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-white mb-4 transition-colors">Promote</h3>
                <p class="text-gray-500 group-hover:text-blue-50 transition-colors font-light">Executing targeted schemes to help entrepreneurs establish and securely grow operations.</p>
            </div>

            <div class="bg-white transition-all hover:bg-gradient-to-br hover:from-emerald-500 hover:to-emerald-600 group p-10 rounded-[2.5rem] hover:-translate-y-2 shadow-md hover:shadow-2xl border border-gray-100 animate-on-scroll delay-200">
                <div class="w-16 h-16 bg-green-50 text-emerald-600 group-hover:bg-white/20 group-hover:text-white rounded-2xl flex items-center justify-center mb-8 transition-colors">
                    <i data-feather="radio" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-white mb-4 transition-colors">Awareness</h3>
                <p class="text-gray-500 group-hover:text-green-50 transition-colors font-light">Disseminating critical information regarding subsidies, programs, and policies.</p>
            </div>

            <div class="bg-white transition-all hover:bg-gradient-to-br hover:from-purple-500 hover:to-purple-600 group p-10 rounded-[2.5rem] hover:-translate-y-2 shadow-md hover:shadow-2xl border border-gray-100 animate-on-scroll delay-300">
                <div class="w-16 h-16 bg-purple-50 text-purple-600 group-hover:bg-white/20 group-hover:text-white rounded-2xl flex items-center justify-center mb-8 transition-colors">
                    <i data-feather="users" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-white mb-4 transition-colors">Networking</h3>
                <p class="text-gray-500 group-hover:text-purple-50 transition-colors font-light">Facilitating valuable global connections, buyer-seller meets, and networking summits.</p>
            </div>
            
            <div class="bg-white transition-all hover:bg-gradient-to-br hover:from-orange-500 hover:to-orange-600 group p-10 rounded-[2.5rem] hover:-translate-y-2 shadow-md hover:shadow-2xl border border-gray-100 animate-on-scroll delay-100">
                <div class="w-16 h-16 bg-orange-50 text-orange-600 group-hover:bg-white/20 group-hover:text-white rounded-2xl flex items-center justify-center mb-8 transition-colors">
                    <i data-feather="file-text" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-white mb-4 transition-colors">Market Updates</h3>
                <p class="text-gray-500 group-hover:text-orange-50 transition-colors font-light">Providing intelligent platforms for real-time market trends, trade data, and policy updates.</p>
            </div>
            
            <div class="bg-white transition-all hover:bg-gradient-to-br hover:from-rose-500 hover:to-rose-600 group p-10 rounded-[2.5rem] hover:-translate-y-2 shadow-md hover:shadow-2xl border border-gray-100 animate-on-scroll delay-200">
                <div class="w-16 h-16 bg-rose-50 text-rose-600 group-hover:bg-white/20 group-hover:text-white rounded-2xl flex items-center justify-center mb-8 transition-colors">
                    <i data-feather="link" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-white mb-4 transition-colors">Liasoning</h3>
                <p class="text-gray-500 group-hover:text-rose-50 transition-colors font-light">Acting as a bridge between grassroots businesses and large institutional bodies.</p>
            </div>
            
            <!-- Highlight Box -->
            <div class="bg-gradient-to-br from-primary to-primary-dark text-white p-10 rounded-[2.5rem] shadow-xl animate-on-scroll delay-300 relative overflow-hidden group hover:scale-105 transition-transform">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-accent/30 rounded-full blur-2xl"></div>
                <h3 class="text-2xl font-bold text-white mb-6">Membership Benefits</h3>
                <ul class="space-y-4 text-primary-100 mb-8 relative z-10 font-light">
                    <li class="flex items-center gap-3"><i data-feather="check-circle" class="w-5 h-5 text-accent"></i> Facility planning & support</li>
                    <li class="flex items-center gap-3"><i data-feather="check-circle" class="w-5 h-5 text-accent"></i> Invites to VIP guest events</li>
                    <li class="flex items-center gap-3"><i data-feather="check-circle" class="w-5 h-5 text-accent"></i> Global WhatsApp access</li>
                    <li class="flex items-center gap-3"><i data-feather="check-circle" class="w-5 h-5 text-accent"></i> Vital legal advocacy</li>
                </ul>
                <a href="#" class="w-full block bg-accent hover:bg-white text-primary-dark px-6 py-4 rounded-xl font-bold text-center transition-colors shadow-lg">Join Us Today</a>
            </div>
        </div>
    </div>
</section>

<!-- Modern CTA -->
<section class="py-24 bg-slate-900 relative mt-10 rounded-[3rem] mx-4 sm:mx-8 mb-8 overflow-hidden shadow-2xl">
    <div class="absolute inset-0 z-0">
        <img src="https://i0.wp.com/msmeccii.in/wp-content/uploads/2025/01/N8A0028-scaled.jpg?fit=2560%2C1707&ssl=1" alt="Background" class="w-full h-full object-cover opacity-20 transform scale-110 filter blur-sm">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent"></div>
    </div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10 animate-on-scroll">
        <h2 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">Nominate for Excellence</h2>
        <p class="text-xl text-slate-300 font-light mb-10 max-w-2xl mx-auto">
            Recognize the outstanding achievements in your sector. Be a part of the prestigious MSMECCII Global Awards night.
        </p>
        <a href="#" class="inline-block bg-white text-primary px-10 py-5 rounded-full font-bold text-lg transition-transform hover:scale-105 shadow-2xl hover:shadow-white/20">
            Submit Award Nomination
        </a>
    </div>
</section>

@endsection
