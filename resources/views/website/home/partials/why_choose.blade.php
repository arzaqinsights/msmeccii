<!-- Why Choose MSMECCII -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-1/4 -left-20 w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-3xl opacity-50">
    </div>
    <div class="absolute bottom-1/4 -right-20 w-[500px] h-[500px] bg-blue-500/5 rounded-full blur-3xl opacity-50"></div>

    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-left flex flex-col md:flex-row items-center justify-between mb-20 animate-on-scroll">
            <div>
                <div
                    class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary border border-brand-primary/20 mb-6">
                    <i class="fa-solid fa-shield text-white text-xs"></i>
                    <span class="text-white text-xs font-bold tracking-widest uppercase">Why Choose Us</span>
                </div>
                <h2 class="text-4xl max-w-3xl md:text-5xl font-extrabold text-slate-900 mb-6 leading-tight">
                    Why <span class="text-brand-primary">100K+</span> Enterprises Trust <span
                        class="text-brand-accent">MSMECCII</span>
                </h2>
            </div>
            <p class="text-slate-500 max-w-2xl font-semibold text-lg leading-relaxed">
                Connect, grow, and transform with India's most powerful business ecosystem. We provide the tools,
                network, and recognition your enterprise needs to scale globally.
            </p>
        </div>

        @php
            $reasons = [
                [
                    'icon' => 'fa-solid fa-network-wired',
                    'color' => 'text-blue-600',
                    'bg' => 'bg-blue-50',
                    'title' => '1. Strong National & Global Business Network',
                    'desc' => 'Connects businesses across India and globally, enabling partnerships, collaborations, and market expansion through a powerful ecosystem of industry leaders and experts.',
                    'points' => ['Global Partnerships', 'Industry Collaborations', 'Expert Network']
                ],
                [
                    'icon' => 'fa-solid fa-building-shield',
                    'color' => 'text-amber-600',
                    'bg' => 'bg-amber-50',
                    'title' => '2. Trusted Representation',
                    'desc' => 'Acts as a bridge between businesses and government bodies for policy support.'
                ],
                [
                    'icon' => 'fa-solid fa-chart-line',
                    'color' => 'text-green-600',
                    'bg' => 'bg-green-50',
                    'title' => '3. End-to-End Business Growth Platform',
                    'desc' => 'From startups to corporates, we provide comprehensive support tools for modernization.',
                    'points' => [
                        'Funding & Financial Access',
                        'Market Expansion & Exports',
                        'Digital Transformation',
                        'Skill Development & Training'
                    ]
                ],
                [
                    'icon' => 'fa-solid fa-microphone-lines',
                    'color' => 'text-purple-600',
                    'bg' => 'bg-purple-50',
                    'title' => '4. High-Impact Events',
                    'desc' => 'Large-scale conferences and summits in recycling, EV, and renewable energy.'
                ],
                [
                    'icon' => 'fa-solid fa-medal',
                    'color' => 'text-indigo-600',
                    'bg' => 'bg-indigo-50',
                    'title' => '5. Recognition & Credibility Through Awards',
                    'desc' => 'Prestigious national awards help businesses build brand credibility, industry reputation, and leadership positioning across India.',
                    'points' => ['Brand Credibility', 'Industry Reputation', 'Leadership Positioning']
                ],
                [
                    'icon' => 'fa-solid fa-user-tie',
                    'color' => 'text-slate-700',
                    'bg' => 'bg-slate-100',
                    'title' => '6. Global Advisory Board',
                    'desc' => 'Guided by Padma Shri, Padma Bhushan, and global experts for mentorship.'
                ],
                [
                    'icon' => 'fa-solid fa-layer-group',
                    'color' => 'text-rose-600',
                    'bg' => 'bg-rose-50',
                    'title' => '7. Multi-Sector Expertise (50+ Industries)',
                    'desc' => 'From manufacturing to sustainability, we operate across diverse sectors—making it a one-stop platform for cross-industry innovation.',
                    'points' => ['Cross-Industry Growth', 'Industry Innovation', 'Operational Expertise']
                ],
                [
                    'icon' => 'fa-solid fa-rocket',
                    'color' => 'text-orange-600',
                    'bg' => 'bg-orange-50',
                    'title' => '8. Focus on MSMEs',
                    'desc' => 'Empowering MSMEs with knowledge, networking, and opportunities.'
                ],
                [
                    'icon' => 'fa-solid fa-certificate',
                    'color' => 'text-cyan-600',
                    'bg' => 'bg-cyan-50',
                    'title' => '9. Global Partnerships & Certifications',
                    'desc' => 'Collaborations with international organizations help Indian industries upgrade to world-class standards and expand into international markets.',
                    'points' => ['World-Class Standards', 'Export Certifications', 'Global Market Entry']
                ],
                [
                    'icon' => 'fa-solid fa-leaf',
                    'color' => 'text-green-600',
                    'bg' => 'bg-green-50',
                    'title' => '10. Sustainability Impact',
                    'desc' => 'Promoting circular economy, women empowerment, and social initiatives.'
                ],
            ];
        @endphp

        <div class="space-y-8">
            {{-- Row 1: 1 (Big) + 2 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div
                    class="lg:col-span-3 rounded-2xl p-10 bg-gradient-to-br from-blue-50/50 to-white border border-blue-300 hover:shadow-2xl hover:shadow-blue-500/10 transition-all group animate-on-scroll">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div
                            class="w-20 h-20 shrink-0 rounded-2xl bg-white shadow-lg flex items-center justify-center border border-blue-100 group-hover:scale-110 transition-transform">
                            <i class="{{ $reasons[0]['icon'] }} {{ $reasons[0]['color'] }} text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $reasons[0]['title'] }}</h3>
                            <p class="text-slate-600 font-medium text-lg leading-relaxed mb-6">{{ $reasons[0]['desc'] }}
                            </p>
                            <div class="flex flex-wrap gap-3">
                                @foreach($reasons[0]['points'] as $point)
                                    <span
                                        class="px-4 py-1.5 bg-white rounded-full text-xs font-bold text-blue-700 border border-blue-200 shadow-sm flex items-center gap-2">
                                        <i class="fa-solid fa-circle-check text-[10px]"></i> {{ $point }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-2xl p-8 {{ $reasons[1]['bg'] }} border border-amber-300 hover:shadow-xl transition-all animate-on-scroll delay-100 flex flex-col justify-between">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[1]['icon'] }} {{ $reasons[1]['color'] }} text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-slate-900 mb-2 leading-tight">{{ $reasons[1]['title'] }}</h3>
                        <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ $reasons[1]['desc'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Row 2: 3 (Big) + 4 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div
                    class="lg:col-span-3 lg:order-2 rounded-2xl p-10 bg-gradient-to-br from-emerald-50/50 to-white border border-emerald-300 hover:shadow-2xl hover:shadow-emerald-500/10 transition-all group animate-on-scroll">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div
                            class="w-20 h-20 shrink-0 rounded-2xl bg-white shadow-lg flex items-center justify-center border border-emerald-100 group-hover:scale-110 transition-transform font-black">
                            <i class="{{ $reasons[2]['icon'] }} {{ $reasons[2]['color'] }} text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $reasons[2]['title'] }}</h3>
                            <p class="text-slate-600 font-medium text-lg leading-relaxed mb-6">{{ $reasons[2]['desc'] }}
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($reasons[2]['points'] as $point)
                                    <div
                                        class="flex items-center gap-3 bg-white/50 p-3 rounded-xl border border-emerald-100">
                                        <div
                                            class="w-6 h-6 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[10px]">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span class="text-sm font-bold text-slate-700">{{ $point }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:order-1 rounded-2xl p-8 {{ $reasons[3]['bg'] }} border border-purple-300 hover:shadow-xl transition-all animate-on-scroll delay-100 flex flex-col justify-between">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[3]['icon'] }} {{ $reasons[3]['color'] }} text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-slate-900 mb-2 leading-tight">{{ $reasons[3]['title'] }}</h3>
                        <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ $reasons[3]['desc'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Row 3: 5 (Big) + 6 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div
                    class="lg:col-span-3 rounded-2xl p-10 bg-gradient-to-br from-indigo-50/50 to-white border border-indigo-300 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all group animate-on-scroll">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div
                            class="w-20 h-20 shrink-0 rounded-2xl bg-white shadow-lg flex items-center justify-center border border-indigo-100 group-hover:scale-110 transition-transform">
                            <i class="{{ $reasons[4]['icon'] }} {{ $reasons[4]['color'] }} text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $reasons[4]['title'] }}</h3>
                            <p class="text-slate-600 font-medium text-lg leading-relaxed mb-6">{{ $reasons[4]['desc'] }}
                            </p>
                            <div class="flex flex-wrap gap-4">
                                @foreach($reasons[4]['points'] as $point)
                                    <span
                                        class="px-5 py-2 bg-indigo-600 text-white rounded-xl text-xs font-black uppercase tracking-widest shadow-md">
                                        {{ $point }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-2xl p-8 {{ $reasons[5]['bg'] }} border border-slate-300 hover:shadow-xl transition-all animate-on-scroll delay-100 flex flex-col justify-between">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[5]['icon'] }} {{ $reasons[5]['color'] }} text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-slate-900 mb-2 leading-tight">{{ $reasons[5]['title'] }}</h3>
                        <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ $reasons[5]['desc'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Row 4: 7 (Big) + 8 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div
                    class="lg:col-span-3 lg:order-2 rounded-2xl p-10 bg-gradient-to-br from-rose-50/50 to-white border border-rose-300 hover:shadow-2xl hover:shadow-rose-500/10 transition-all group animate-on-scroll">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div
                            class="w-20 h-20 shrink-0 rounded-2xl bg-white shadow-lg flex items-center justify-center border border-rose-100 group-hover:scale-110 transition-transform">
                            <i class="{{ $reasons[6]['icon'] }} {{ $reasons[6]['color'] }} text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $reasons[6]['title'] }}</h3>
                            <p class="text-slate-600 font-medium text-lg leading-relaxed mb-6">{{ $reasons[6]['desc'] }}
                            </p>
                            <div class="flex flex-wrap gap-3">
                                @foreach($reasons[6]['points'] as $point)
                                    <span
                                        class="px-4 py-2 bg-rose-50 text-rose-700 rounded-lg text-xs font-bold border border-rose-100">
                                        # {{ $point }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:order-1 rounded-2xl p-8 {{ $reasons[7]['bg'] }} border border-orange-300 hover:shadow-xl transition-all animate-on-scroll delay-100 flex flex-col justify-between">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[7]['icon'] }} {{ $reasons[7]['color'] }} text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-slate-900 mb-2 leading-tight">{{ $reasons[7]['title'] }}</h3>
                        <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ $reasons[7]['desc'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Row 5: 9 (Big) + 10 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div
                    class="lg:col-span-3 rounded-2xl p-10 bg-gradient-to-br from-cyan-50/50 to-white border border-cyan-300 hover:shadow-2xl hover:shadow-cyan-500/10 transition-all group animate-on-scroll">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div
                            class="w-20 h-20 shrink-0 rounded-2xl bg-white shadow-lg flex items-center justify-center border border-cyan-100 group-hover:scale-110 transition-transform">
                            <i class="{{ $reasons[8]['icon'] }} {{ $reasons[8]['color'] }} text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-slate-900 mb-4">{{ $reasons[8]['title'] }}</h3>
                            <p class="text-slate-600 font-medium text-lg leading-relaxed mb-6">{{ $reasons[8]['desc'] }}
                            </p>
                            <div class="flex flex-wrap gap-3">
                                @foreach($reasons[8]['points'] as $point)
                                    <div
                                        class="flex items-center gap-2 px-3 py-1.5 bg-cyan-100/30 text-cyan-800 rounded-lg text-[11px] font-black uppercase tracking-wider">
                                        <i class="fa-solid fa-check-double text-cyan-600"></i> {{ $point }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-2xl p-8 {{ $reasons[9]['bg'] }} border border-green-300 hover:shadow-xl transition-all animate-on-scroll delay-100 flex flex-col justify-between">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[9]['icon'] }} {{ $reasons[9]['color'] }} text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-slate-900 mb-2 leading-tight">{{ $reasons[9]['title'] }}</h3>
                        <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ $reasons[9]['desc'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Powerful Closing Statement -->
        <div class="mt-20 p-10 rounded-2xl bg-brand-primary relative overflow-hidden text-center animate-on-scroll">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-primary/20 via-transparent to-brand-accent/20">
            </div>
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-brand-primary/20 rounded-full blur-3xl"></div>
            <p class="relative z-10 text-2xl md:text-3xl font-black text-white leading-tight max-w-5xl mx-auto">
                "MSMECCII is not just a chamber—it is a growth partner, global connector, and catalyst for India's
                industrial transformation."
            </p>
        </div>

    </div>
</section>