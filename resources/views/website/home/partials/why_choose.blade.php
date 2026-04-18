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
                    'title' => 'Strong National & Global Business Network',
                    'desc' => 'Connects businesses across India and globally, enabling partnerships, collaborations, and market expansion through a powerful ecosystem of industry leaders and experts.',
                    'points' => ['Global Partnerships', 'Industry Collaborations', 'Expert Network']
                ],
                [
                    'icon' => 'fa-solid fa-building-shield',
                    'color' => 'text-amber-600',
                    'title' => 'Trusted Representation',
                    'desc' => 'Acts as a bridge between businesses and government bodies for policy support.'
                ],
                [
                    'icon' => 'fa-solid fa-chart-line',
                    'color' => 'text-green-600',
                    'title' => 'End-to-End Business Growth Platform',
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
                    'title' => 'High-Impact Events',
                    'desc' => 'Large-scale conferences and summits in recycling, EV, and renewable energy.'
                ],
                [
                    'icon' => 'fa-solid fa-medal',
                    'color' => 'text-indigo-600',
                    'title' => 'Recognition & Credibility Through Awards',
                    'desc' => 'Prestigious national awards help businesses build brand credibility, industry reputation, and leadership positioning across India.',
                    'points' => ['Brand Credibility', 'Industry Reputation', 'Leadership Positioning']
                ],
                [
                    'icon' => 'fa-solid fa-user-tie',
                    'color' => 'text-slate-700',
                    'title' => 'Global Advisory Board',
                    'desc' => 'Guided by Padma Shri, Padma Bhushan, and global experts for mentorship.'
                ],
                [
                    'icon' => 'fa-solid fa-layer-group',
                    'color' => 'text-rose-600',
                    'title' => 'Multi-Sector Expertise (50+ Industries)',
                    'desc' => 'From manufacturing to sustainability, we operate across diverse sectors—making it a one-stop platform for cross-industry innovation.',
                    'points' => ['Cross-Industry Growth', 'Industry Innovation', 'Operational Expertise']
                ],
                [
                    'icon' => 'fa-solid fa-rocket',
                    'color' => 'text-orange-600',
                    'title' => 'Focus on MSMEs',
                    'desc' => 'Empowering MSMEs with knowledge, networking, and opportunities.'
                ],
                [
                    'icon' => 'fa-solid fa-certificate',
                    'color' => 'text-cyan-600',
                    'title' => 'Global Partnerships & Certifications',
                    'desc' => 'Collaborations with international organizations help Indian industries upgrade to world-class standards and expand into international markets.',
                    'points' => ['World-Class Standards', 'Export Certifications', 'Global Market Entry']
                ],
                [
                    'icon' => 'fa-solid fa-leaf',
                    'color' => 'text-green-600',
                    'title' => 'Sustainability Impact',
                    'desc' => 'Promoting circular economy, women empowerment, and social initiatives.'
                ],
            ];
        @endphp

        <div class="space-y-8">
            {{-- Unified Card Style Functions --}}
            @php
                $bigCardClass = "lg:col-span-3 rounded-2xl p-10 bg-brand-primary border border-white/10 hover:shadow-2xl hover:shadow-brand-primary/20 transition-all group animate-on-scroll relative overflow-hidden";
                $smallCardClass = "rounded-2xl p-8 bg-brand-primary border border-white/10 hover:shadow-xl transition-all animate-on-scroll flex flex-col justify-between relative overflow-hidden";
                $numberCircle = "absolute -top-2 -right-2 w-16 h-16 bg-white/10 border border-white/20 rounded-full flex items-center justify-center text-white font-black text-xl backdrop-blur-sm group-hover:bg-white group-hover:text-brand-primary transition-all";
                $iconBox = "w-16 h-16 shrink-0 rounded-2xl bg-white shadow-lg flex items-center justify-center group-hover:scale-110 transition-transform mb-6";
                $titleClass = "text-xl md:text-2xl font-black text-white mb-4";
                $descClass = "text-slate-200 font-medium leading-relaxed mb-6";
            @endphp

            {{-- Row 1: 1 (Big) + 2 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="{{ $bigCardClass }}">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div class="{{ $iconBox }}">
                            <i class="{{ $reasons[0]['icon'] }} {{ $reasons[0]['color'] }} text-2xl"></i>
                    </div>
                        <div>
                            <h3 class="{{ $titleClass }}">{{ $reasons[0]['title'] }}</h3>
                            <p class="{{ $descClass }}">{{ $reasons[0]['desc'] }}</p>
                            <div class="flex flex-wrap gap-2">
                            @foreach($reasons[0]['points'] as $point)
                                    <span
                                        class="px-3 py-1 bg-white/10 rounded-lg text-[10px] font-bold text-white border border-white/5 uppercase tracking-tighter italic">
                                    {{ $point }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
                <div class="{{ $smallCardClass }}">
                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[1]['icon'] }} {{ $reasons[1]['color'] }} text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white mb-2 leading-tight">{{ $reasons[1]['title'] }}</h3>
                        <p class="text-xs text-slate-300 font-medium leading-relaxed">{{ $reasons[1]['desc'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Row 2: 3 (Big) + 4 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="{{ $bigCardClass }} lg:order-2">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div class="{{ $iconBox }}">
                            <i class="{{ $reasons[2]['icon'] }} {{ $reasons[2]['color'] }} text-2xl"></i>
                    </div>
                        <div>
                            <h3 class="{{ $titleClass }}">{{ $reasons[2]['title'] }}</h3>
                            <p class="{{ $descClass }}">{{ $reasons[2]['desc'] }}</p>
                            <div class="grid grid-cols-2 gap-3">
                        @foreach($reasons[2]['points'] as $point)
                                    <div class="flex items-center gap-2 bg-white/5 p-2 rounded-xl border border-white/5">
                                        <i class="fa-solid fa-check text-emerald-400 text-[10px]"></i>
                                        <span
                                            class="text-[10px] font-bold text-slate-100 uppercase italic">{{ $point }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="{{ $smallCardClass }} lg:order-1">
                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[3]['icon'] }} {{ $reasons[3]['color'] }} text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white mb-2 leading-tight">{{ $reasons[3]['title'] }}</h3>
                        <p class="text-xs text-slate-300 font-medium leading-relaxed">{{ $reasons[3]['desc'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Row 3: 5 (Big) + 6 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="{{ $bigCardClass }}">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div class="{{ $iconBox }}">
                            <i class="{{ $reasons[4]['icon'] }} {{ $reasons[4]['color'] }} text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="{{ $titleClass }}">{{ $reasons[4]['title'] }}</h3>
                            <p class="{{ $descClass }}">{{ $reasons[4]['desc'] }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($reasons[4]['points'] as $point)
                                    <span
                                        class="px-3 py-1 bg-emerald-500 text-white rounded-lg text-[10px] font-black uppercase tracking-tighter italic">
                                        {{ $point }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="{{ $smallCardClass }}">
                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[5]['icon'] }} {{ $reasons[5]['color'] }} text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white mb-2 leading-tight">{{ $reasons[5]['title'] }}</h3>
                        <p class="text-xs text-slate-300 font-medium leading-relaxed">{{ $reasons[5]['desc'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Row 4: 7 (Big) + 8 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="{{ $bigCardClass }} lg:order-2">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div class="{{ $iconBox }}">
                            <i class="{{ $reasons[6]['icon'] }} {{ $reasons[6]['color'] }} text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="{{ $titleClass }}">{{ $reasons[6]['title'] }}</h3>
                            <p class="{{ $descClass }}">{{ $reasons[6]['desc'] }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($reasons[6]['points'] as $point)
                                    <span
                                        class="px-3 py-1 bg-white/10 rounded-lg text-[10px] font-bold text-white border border-white/5 italic">
                                        # {{ $point }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
                <div class="{{ $smallCardClass }} lg:order-1">
                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[7]['icon'] }} {{ $reasons[7]['color'] }} text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white mb-2 leading-tight">{{ $reasons[7]['title'] }}</h3>
                        <p class="text-xs text-slate-300 font-medium leading-relaxed">{{ $reasons[7]['desc'] }}</p>
                    </div>
                </div>
            </div>

            {{-- Row 5: 9 (Big) + 10 (Small) --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="{{ $bigCardClass }}">
                    <div class="flex flex-col md:flex-row items-start gap-8">
                        <div class="{{ $iconBox }}">
                            <i class="{{ $reasons[8]['icon'] }} {{ $reasons[8]['color'] }} text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="{{ $titleClass }}">{{ $reasons[8]['title'] }}</h3>
                            <p class="{{ $descClass }}">{{ $reasons[8]['desc'] }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($reasons[8]['points'] as $point)
                                    <div
                                        class="flex items-center gap-1 px-2 py-1 bg-white/10 text-white rounded-lg text-[9px] font-black uppercase italic tracking-tighter">
                                        <i class="fa-solid fa-star text-amber-400"></i> {{ $point }}
                                </div>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>
                <div class="{{ $smallCardClass }}">
                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center mb-6 shadow-sm">
                        <i class="{{ $reasons[9]['icon'] }} {{ $reasons[9]['color'] }} text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white mb-2 leading-tight">{{ $reasons[9]['title'] }}</h3>
                        <p class="text-xs text-slate-300 font-medium leading-relaxed">{{ $reasons[9]['desc'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Powerful Closing Statement -->
        <div class="mt-14 p-10 rounded-2xl relative overflow-hidden text-center animate-on-scroll">
            <p class="relative z-10 text-3xl md:text-6xl font-black text-brand-primary leading-tight mx-auto">
                "MSMECCII is not just a chamber—it is a growth partner, global connector, and catalyst for India's
                industrial transformation."
                </p>
        </div>

    </div>
</section>