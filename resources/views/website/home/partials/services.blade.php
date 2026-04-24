<!-- MSMECCII Core Pillars of Service -->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-[120px] -mr-96 -mt-96">
    </div>

    <div class="container relative z-10">
        <div class="mb-16 animate-on-scroll">
            <!-- Section Header -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-10">
                <div class="max-w-3xl">
                    <!-- <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary border shadow-sm mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-light animate-pulse"></span>
                        <span class="text-white text-xs font-bold uppercase">Core Pillars</span>
                    </div> -->
                    <h2 class="text-4xl md:text-5xl xl:text-6xl font-black text-slate-900 leading-[1.1] mb-6">
                        Our Specialized <br> Service <span class="text-brand-primary">Framework</span>
                    </h2>
                    <p class="text-slate-500 text-lg leading-relaxed font-medium">
                        Empowering MSMEs through strategic initiatives, industry advocacy, and growth-driven solutions designed
                        to foster global competitiveness.
                    </p>
                </div>

                <div class="hidden lg:flex flex-col gap-4">
                    <div class="flex items-center gap-4 p-6 bg-white rounded-md border">
                        <div
                            class="w-12 h-12 bg-brand-primary rounded-md flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-users-gear text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Industry Support
                            </p>
                            <p class="text-sm font-bold text-slate-900">Members 5000+</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-6 bg-white rounded-md border">
                        <div
                            class="w-12 h-12 bg-brand-primary rounded-md flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-globe text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                Global Presence
                            </p>
                            <p class="text-sm font-bold text-slate-900">30+ Countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Grid — Top 3 -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $services = [
                    [
                        'slug' => 'strategic-promotion',
                        'image' => 'images/services/strategic-promotion.jpg',
                        'icon' => 'chart-line',
                        'accent' => 'brand-primary',
                        'title' => 'Strategic Promotion',
                        'desc' => 'Supporting members in strategic planning and accelerating business growth through promotional initiatives.'
                    ],
                    [
                        'slug' => 'global-awareness',
                        'image' => 'images/services/global-awareness.jpg',
                        'icon' => 'bullhorn',
                        'accent' => 'blue-400',
                        'title' => 'Global Awareness',
                        'desc' => 'Organizing high-profile events and providing exclusive platforms for small businesses as panelists.'
                    ],
                    [
                        'slug' => 'elite-networking',
                        'image' => 'images/services/elite-networking.jpg',
                        'icon' => 'people-group',
                        'accent' => 'indigo-400',
                        'title' => 'Elite Networking',
                        'desc' => 'Facilitating global connections and high-value collaborations through our exclusive core channels.'
                    ],
                    [
                        'slug' => 'market-intelligence',
                        'image' => 'images/services/market-intelligence.jpg',
                        'icon' => 'chart-pie',
                        'accent' => 'amber-400',
                        'title' => 'Market Intelligence',
                        'desc' => 'Delivering real-time data and data-driven insights to keep you ahead of the market curve.'
                    ],
                    [
                        'slug' => 'policy-advocacy',
                        'image' => 'images/sectors/csr.jpg',
                        'icon' => 'file-contract',
                        'accent' => 'rose-400',
                        'title' => 'Policy Advocacy',
                        'desc' => 'Instant access to government notifications and advocating for favorable MSME policies.'
                    ],
                    [
                        'slug' => 'legal-liasoning',
                        'image' => 'images/sectors/sustainability-leadership.jpg',
                        'icon' => 'scale-balanced',
                        'accent' => 'emerald-400',
                        'title' => 'Legal & Liasoning',
                        'desc' => 'Specialized legal support and government liasoning tailored for business security.'
                    ],
                ];
            @endphp

            @foreach($services as $idx => $svc)
                <a href="{{ url('services/'.$svc['slug']) }}" class="group relative bg-white rounded-lg block overflow-visible border transition-all duration-500 animate-on-scroll"
                    style="transition-delay: {{ $idx * 100 }}ms">
                    
                    <!-- Card Top: Image -->
                    <div class="h-56 relative overflow-hidden rounded-t-lg">
                        <img src="{{ asset($svc['image']) }}" alt="{{ $svc['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60"></div>
                    </div>

                    <!-- Floating Icon -->
                    <div class="absolute top-[200px] left-8 w-14 h-14 bg-white rounded-md flex items-center justify-center text-brand-primary z-20 transition-all duration-500 group-hover:-translate-y-2 group-hover:bg-brand-primary group-hover:text-white border border-slate-100">
                        <i class="fa-solid fa-{{ $svc['icon'] }} text-xl"></i>
                    </div>

                    <!-- Card Bottom: Content -->
                    <div class="p-8 pt-12 relative z-10">
                        <h3 class="text-xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-brand-primary transition-colors uppercase rounded-2xl">
                            {{ $svc['title'] }}
                        </h3>
                        <p class="text-slate-500 leading-relaxed text-sm font-medium mb-8">
                            {{ $svc['desc'] }}
                        </p>

                        <!-- Action Marker -->
                        <div class="flex items-center justify-between border-t pt-6">
                            <span class="inline-flex items-center gap-2 text-[10px] font-black uppercase tracking-widest text-slate-400 group-hover:text-brand-primary transition-colors">
                                View Service <i class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-2"></i>
                            </span>
                            <span class="text-[10px] font-black text-slate-200 uppercase tracking-tighter group-hover:text-brand-primary/20 transition-colors">CORE // 0{{ $idx + 1 }}</span>
                        </div>
                    </div>

                    <!-- Subtle Decorative Background -->
                    <div class="absolute inset-0 bg-brand-primary/0 group-hover:bg-brand-primary/[0.02] pointer-events-none transition-colors duration-500 rounded-2xl"></div>
                </a>
            @endforeach
        </div>

        <!-- Section Footer with View All CTA -->
        <div class="mt-16 p-8 rounded-lg bg-brand-primary text-white relative overflow-hidden animate-on-scroll">
            <div
                class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]">
            </div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center backdrop-blur-md">
                        <i class="fa-solid fa-handshake-angle text-3xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold">Explore All Our Core Services</h4>
                        <p class="text-white/60 text-sm">6 specialized pillars designed to accelerate your business growth.</p>
                    </div>
                </div>
                <a href="{{ route('register') }}"
                    class="px-10 py-5 bg-brand-accent text-brand-primary font-black uppercase text-sm tracking-widest rounded-full hover:bg-white hover:text-brand-primary transition-all">
                    Get Started Now
                </a>
            </div>
        </div>
    </div>
</section>