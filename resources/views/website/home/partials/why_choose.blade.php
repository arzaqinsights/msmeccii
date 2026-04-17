<!-- Why Choose MSMECCII -->
<section class="py-24 bg-white relative overflow-hidden">
    <div
        class="absolute top-1/2 right-0 w-[500px] h-[500px] bg-brand-primary/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl">
    </div>

    <div class="container relative z-10">
        <div class="text-left max-w-3xl mb-16 animate-on-scroll">
            <div
                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary border border-brand-primary/20 mb-6">
                <i class="fa-solid fa-star text-white text-xs"></i>
                <span class="text-white text-xs font-bold tracking-widest uppercase">Why Choose Us</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">
                Why <span class="text-brand-primary">200K</span> Enterprises Trust MSMECCII
            </h2>
            <p class="text-slate-500 font-semibold text-lg leading-relaxed">
                We go beyond traditional chambers — delivering real value, real connections, and real recognition to
                India's growing businesses.
            </p>
        </div>

        @php
            $reasons = [
                [
                    'icon' => 'fa-solid fa-trophy',
                    'color' => 'text-amber-500',
                    'bg' => 'bg-amber-50',
                    'title' => 'National Business Recognition',
                    'desc' => 'Gain credibility and visibility through India’s most trusted MSME awards platform.',
                    'points' => [
                        '26+ Industry Categories',
                        'Vigyan Bhavan Recognition',
                        'Government-Level Exposure'
                    ]
                ],
                [
                    'icon' => 'fa-solid fa-earth-americas',
                    'color' => 'text-blue-500',
                    'bg' => 'bg-blue-50',
                    'title' => 'Global Expansion Opportunities',
                    'desc' => 'Expand beyond borders with real international business access.',
                    'points' => [
                        '40+ Countries Network',
                        'Trade Delegations',
                        'Export Assistance'
                    ]
                ],
                [
                    'icon' => 'fa-solid fa-graduation-cap',
                    'color' => 'text-purple-500',
                    'bg' => 'bg-purple-50',
                    'title' => 'Skill & Growth Programs',
                    'desc' => 'Upgrade your business capabilities with industry-focused learning.',
                    'points' => [
                        'Workshops & Webinars',
                        'Leadership Training',
                        'Startup Mentorship'
                    ]
                ],
                [
                    'icon' => 'fa-solid fa-building-columns',
                    'color' => 'text-green-600',
                    'bg' => 'bg-green-50',
                    'title' => 'Strong Policy Advocacy',
                    'desc' => 'We represent your voice directly to policymakers.',
                    'points' => [
                        'Government Representation',
                        'MSME Policy Influence',
                        'Regulatory Support'
                    ]
                ],
            ];
        @endphp


        <div class="space-y-6">

            {{-- Row 1 --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

                {{-- Big Card (3/4) --}}
                <div
                    class="lg:col-span-3 rounded-3xl p-10 bg-gradient-to-br from-amber-50 to-white border hover:shadow-xl transition-all group">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-amber-100 flex items-center justify-center">
                            <i class="{{ $reasons[0]['icon'] }} {{ $reasons[0]['color'] }} text-2xl"></i>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">{{ $reasons[0]['title'] }}</h3>
                            <p class="text-slate-600 mb-5">{{ $reasons[0]['desc'] }}</p>

                            <ul class="grid grid-cols-2 gap-3">
                                @foreach($reasons[0]['points'] as $point)
                                    <li class="text-sm text-slate-700 flex items-center gap-2">
                                        <i class="fa-solid fa-check text-amber-500 text-xs"></i> {{ $point }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Small Card (1/4) --}}
                <div class="rounded-3xl p-6 bg-blue-50 border hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center mb-4">
                        <i class="{{ $reasons[1]['icon'] }} {{ $reasons[1]['color'] }}"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">{{ $reasons[1]['title'] }}</h3>
                    <p class="text-sm text-slate-600">{{ $reasons[1]['desc'] }}</p>
                </div>

            </div>


            {{-- Row 2 --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

                {{-- Small Card (1/4) --}}
                <div class="rounded-3xl p-6 bg-purple-50 border hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center mb-4">
                        <i class="{{ $reasons[2]['icon'] }} {{ $reasons[2]['color'] }}"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">{{ $reasons[2]['title'] }}</h3>
                    <p class="text-sm text-slate-600">{{ $reasons[2]['desc'] }}</p>
                </div>

                {{-- Big Card (3/4) --}}
                <div
                    class="lg:col-span-3 rounded-3xl p-10 bg-gradient-to-br from-green-50 to-white border hover:shadow-xl transition-all group">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center">
                            <i class="{{ $reasons[3]['icon'] }} {{ $reasons[3]['color'] }} text-2xl"></i>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">{{ $reasons[3]['title'] }}</h3>
                            <p class="text-slate-600 mb-5">{{ $reasons[3]['desc'] }}</p>

                            <ul class="grid grid-cols-2 gap-3">
                                @foreach($reasons[3]['points'] as $point)
                                    <li class="text-sm text-slate-700 flex items-center gap-2">
                                        <i class="fa-solid fa-check text-green-500 text-xs"></i> {{ $point }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>