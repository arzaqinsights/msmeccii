<section class="py-24 bg-slate-900 relative overflow-hidden">
    <!-- Grid Pattern -->
    <div class="absolute inset-0 z-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9IiNmZmZmZmYiLz48L3N2Zz4=')] bg-repeat"></div>

    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 mb-6">
                <i class="fa-solid fa-cubes text-brand-accent text-xs"></i>
                <span class="text-white text-xs font-bold tracking-widest uppercase">What We Do</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
                Our Core Pillars of <span class="text-brand-accent">Service</span>
            </h2>
            <p class="text-slate-400 text-lg leading-relaxed">
                We empower MSMEs through a comprehensive suite of strategic services designed to elevate and scale your business operations globally.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $services = [
                    ['icon' => 'fa-solid fa-chart-line', 'color' => 'brand-accent', 'bg' => 'brand-accent/20', 'title' => 'Promote', 'desc' => 'Supporting our members in strategic planning and accelerating business growth through targeted promotional initiatives and market exposure.'],
                    ['icon' => 'fa-solid fa-bullhorn', 'color' => 'blue-400', 'bg' => 'blue-500/20', 'title' => 'Awareness', 'desc' => 'Organizing high-profile events and providing exclusive platforms for small businesses as esteemed guest speakers and panelists.'],
                    ['icon' => 'fa-solid fa-people-group', 'color' => 'purple-400', 'bg' => 'purple-500/20', 'title' => 'Networking', 'desc' => 'Facilitating global connections and collaborations through our exclusive core networking channels and B2B matchmaking.'],
                    ['icon' => 'fa-solid fa-chart-pie', 'color' => 'yellow-400', 'bg' => 'yellow-500/20', 'title' => 'Market Updates', 'desc' => 'Delivering real-time intelligence, industry trends, and data-driven insights to keep you ahead of the market curve.'],
                    ['icon' => 'fa-solid fa-file-contract', 'color' => 'red-400', 'bg' => 'red-500/20', 'title' => 'Policy Updates', 'desc' => 'Providing instant access to critical government notifications/schemes and actively advocating for favorable MSME policies.'],
                    ['icon' => 'fa-solid fa-scale-balanced', 'color' => 'green-400', 'bg' => 'green-500/20', 'title' => 'Liasoning & Law', 'desc' => 'Offering specialized legal support and essential liasoning services tailored specifically for our members\' business needs.'],
                ];
            @endphp

            @foreach($services as $idx => $svc)
            <div class="bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition-all duration-300 group hover:-translate-y-1 animate-on-scroll {{ $idx > 0 ? 'delay-' . min($idx, 4) . '00' : '' }}">
                <div class="w-14 h-14 bg-{{ $svc['bg'] }} rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="{{ $svc['icon'] }} text-{{ $svc['color'] }} text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $svc['title'] }}</h3>
                <p class="text-slate-400 leading-relaxed text-sm">{{ $svc['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
