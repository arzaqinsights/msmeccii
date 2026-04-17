<!-- MSMECCII Core Pillars of Service -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-[120px] -mr-96 -mt-96">
    </div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-accent/5 rounded-full blur-[120px] -ml-64 -mb-64">
    </div>

    <div class="container relative z-10">
        <div class="mb-20 animate-on-scroll">
            <!-- Section Header -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-10">
                <div class="max-w-3xl">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary border shadow-sm mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-light animate-pulse"></span>
                        <span class="text-white text-xs font-bold uppercase">Core Pillars</span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black text-brand-primary leading-[1.1] mb-6">
                        Our Specialized <br> <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-accent">Service
                            Framework</span>
                    </h2>
                </div>

                <div class="hidden lg:block">
                    <div class="flex items-center gap-4 p-6 bg-white rounded-2xl border">
                        <div
                            class="w-12 h-12 bg-brand-primary rounded-2xl flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-users-gear text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Industry Support
                            </p>
                            <p class="text-sm font-bold text-slate-900">Registered Members 5000+</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-slate-500 text-lg leading-relaxed font-medium">
                Empowering MSMEs through strategic initiatives, industry advocacy, and growth-driven solutions designed
                to foster global competitiveness.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $services = [
                    [
                        'icon' => 'chart-line',
                        'accent' => 'brand-primary',
                        'title' => 'Strategic Promotion',
                        'desc' => 'Supporting our members in strategic planning and accelerating business growth through targeted promotional initiatives and global market exposure.'
                    ],
                    [
                        'icon' => 'bullhorn',
                        'accent' => 'blue-400',
                        'title' => 'Global Awareness',
                        'desc' => 'Organizing high-profile events and providing exclusive platforms for small businesses as esteemed guest speakers and elite industry panelists.'
                    ],
                    [
                        'icon' => 'people-group',
                        'accent' => 'indigo-400',
                        'title' => 'Elite Networking',
                        'desc' => 'Facilitating global connections and high-value collaborations through our exclusive core networking channels and strategic B2B matchmaking.'
                    ],
                    [
                        'icon' => 'chart-pie',
                        'accent' => 'amber-400',
                        'title' => 'Market Intelligence',
                        'desc' => 'Delivering real-time data, industry trends, and data-driven insights to keep you ahead of the market curve in a rapidly changing economy.'
                    ],
                    [
                        'icon' => 'file-contract',
                        'accent' => 'rose-400',
                        'title' => 'Policy Advocacy',
                        'desc' => 'Providing instant access to critical government notifications and actively advocating for favorable MSME policies at the highest levels.'
                    ],
                    [
                        'icon' => 'scale-balanced',
                        'accent' => 'emerald-400',
                        'title' => 'Legal & Liasoning',
                        'desc' => 'Offering specialized legal support and essential government liasoning services tailored specifically for our members business security.'
                    ],
                ];
            @endphp

            @foreach($services as $idx => $svc)
                <div class="group relative bg-white p-10 rounded-2xl border shadow-sm hover:shadow-xl transition-all duration-500 animate-on-scroll"
                    style="transition-delay: {{ $idx * 100 }}ms">

                    <!-- Icon Plate -->
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 rounded-xl bg-slate-100 text-slate-400 group-hover:text-white mb-8 group-hover:scale-110 group-hover:bg-brand-primary group-hover:border-brand-primary transition-all duration-500 shadow-sm">
                        <i
                            class="fa-solid fa-{{ $svc['icon'] }} text-2xl transition-colors duration-500"></i>
                    </div>

                    <!-- Content -->
                    <h3
                        class="text-2xl font-black text-brand-primary mb-4 tracking-tight group-hover:translate-x-1 transition-transform">
                        {{ $svc['title'] }}
                    </h3>
                    <p class="text-slate-500 leading-relaxed text-sm font-medium mb-8">
                        {{ $svc['desc'] }}
                    </p>

                    <!-- Action Link -->
                    <a href="#"
                        class="inline-flex items-center gap-2 text-sm font-black uppercase tracking-widest text-slate-400 group-hover:text-brand-accent transition-colors">
                        Learn More <i
                            class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-2"></i>
                    </a>

                    <!-- Corner Accent -->
                    <div class="absolute bottom-4 right-4 opacity-10 transition-opacity">
                        <i class="fa-solid fa-{{ $svc['icon'] }} text-[80px] text-slate-900"></i>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Section Footer -->
        <div
            class="mt-20 p-8 rounded-2xl bg-brand-primary text-white relative overflow-hidden animate-on-scroll">
            <div
                class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]">
            </div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center backdrop-blur-md">
                        <i class="fa-solid fa-handshake-angle text-3xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold">Ready to Elevate Your Business?</h4>
                        <p class="text-white/60 text-sm">Join the largest chamber of commerce for MSMEs in India.</p>
                    </div>
                </div>
                <a href="{{ route('register') }}"
                    class="px-10 py-5 bg-brand-accent text-brand-primary font-black uppercase text-sm tracking-widest rounded-full hover:bg-white hover:text-brand-primary transition-all shadow-xl">
                    Get Started Now
                </a>
            </div>
        </div>
    </div>
</section>