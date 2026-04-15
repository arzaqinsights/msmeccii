<!-- Why Choose MSMECCII -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-1/2 right-0 w-[500px] h-[500px] bg-brand-primary/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>

    <div class="container relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-6">
                <i class="fa-solid fa-star text-brand-primary text-xs"></i>
                <span class="text-brand-primary text-xs font-bold tracking-widest uppercase">Why Choose Us</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">
                Why <span class="text-brand-primary">50,000+</span> Enterprises Trust MSMECCII
            </h2>
            <p class="text-slate-500 text-lg leading-relaxed">
                We go beyond traditional chambers — delivering real value, real connections, and real recognition to India's growing businesses.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $reasons = [
                    ['icon' => 'fa-solid fa-trophy', 'color' => 'amber-500', 'bg' => 'amber-50', 'title' => 'National Awards', 'desc' => 'Get recognized with prestigious National Business Excellence Awards across 26+ industry categories.'],
                    ['icon' => 'fa-solid fa-earth-americas', 'color' => 'blue-500', 'bg' => 'blue-50', 'title' => 'Global Reach', 'desc' => 'Access international trade opportunities, delegations, and business partnerships across 40+ countries.'],
                    ['icon' => 'fa-solid fa-graduation-cap', 'color' => 'purple-500', 'bg' => 'purple-50', 'title' => 'Training & Skill', 'desc' => 'Participate in skill development programs, industry webinars, and capacity building workshops.'],
                    ['icon' => 'fa-solid fa-building-columns', 'color' => 'green-600', 'bg' => 'green-50', 'title' => 'Policy Advocacy', 'desc' => 'Your voice in government — we actively advocate for MSME-friendly policies at state and central levels.'],
                ];
            @endphp

            @foreach($reasons as $idx => $r)
            <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group animate-on-scroll {{ $idx > 0 ? 'delay-' . min($idx, 3) . '00' : '' }}">
                <div class="w-14 h-14 rounded-2xl bg-{{ $r['bg'] }} flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="{{ $r['icon'] }} text-{{ $r['color'] }} text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $r['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $r['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
