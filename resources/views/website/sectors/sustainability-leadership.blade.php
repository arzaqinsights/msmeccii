@extends('layouts.website')

@section('title', 'Sustainability Leadership')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-lime-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/sustainability-leadership.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Sustainability Leadership
            </h1>
            <p class="text-lg md:text-xl text-lime-300 font-semibold mb-2">Shaping the Future of Responsible Business</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Strategic vision, governance, and actions integrating environmental, social, and economic responsibility into core business operations.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Sustainability Leadership?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Sustainability Leadership</strong> refers to the strategic vision, governance, and actions taken by
                        organizations and leaders to integrate <strong>environmental, social, and economic responsibility</strong>
                        into core business operations, long-term planning, and decision-making.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It empowers businesses to achieve growth while ensuring <strong>responsible resource management,
                        social equity, and environmental stewardship</strong> for future generations.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/sustainability-leadership.jpg') }}" alt="Sustainability Leadership"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- WHY IT MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-lime-700 to-green-800 text-white shadow-lg min-h-[340px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Sustainability Leadership Matters</h3>
                    <p class="text-sm text-lime-100 mb-4">
                        In today's rapidly evolving global economy, sustainability leadership has become a
                        <strong>critical business imperative</strong> rather than an optional initiative.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Long-Term Competitive Advantage
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Stronger Brand Reputation
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Improved Investor Confidence
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Greater Customer Loyalty
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Enhanced Operational Efficiency
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Reduced Environmental and Business Risks
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/sustainability-leadership.jpg') }}" alt="Sustainability Importance"
                    class="w-full h-[340px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL LANDSCAPE -->
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-lime-600">90%+</h4>
                    <p class="text-sm text-slate-500 mt-1">Fortune 500 publishing ESG reports</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-lime-600">$30T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global ESG Investments</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-lime-600">#1</h4>
                    <p class="text-sm text-slate-500 mt-1">Boardroom Priority Worldwide</p>
                </div>
            </div>

            <!-- KEY DRIVERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Key Drivers of Sustainability Leadership</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-temperature-high text-red-600 text-xs"></i></div>
                            Climate Change Challenges
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-users text-blue-600 text-xs"></i></div>
                            Consumer Awareness
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-chart-line text-emerald-600 text-xs"></i></div>
                            Investor ESG Expectations
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gavel text-amber-600 text-xs"></i></div>
                            Government Regulations
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-link text-violet-600 text-xs"></i></div>
                            Supply Chain Transparency Requirements
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-gradient-to-br from-lime-600 to-green-700 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Why It Matters for Business</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold text-sm">1. Enhances Brand Value</h4>
                            <p class="text-xs text-lime-100">Attracts stronger customer trust, loyalty, and recognition.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm">2. Attracts Investors</h4>
                            <p class="text-xs text-lime-100">Investors prioritize companies with robust ESG performance.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm">3. Reduces Costs</h4>
                            <p class="text-xs text-lime-100">Efficient energy, water, and materials use lowers expenses.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm">4. Strengthens Risk Management</h4>
                            <p class="text-xs text-lime-100">Mitigates environmental, regulatory, and supply chain risks.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm">5. Drives Innovation</h4>
                            <p class="text-xs text-lime-100">Development of sustainable products, services, and technologies.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm">6. Ensures Future Readiness</h4>
                            <p class="text-xs text-lime-100">Long-term resilience in changing global markets.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CORE PILLARS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Core Pillars of Sustainability Leadership</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-leaf text-2xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Environmental Responsibility</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Carbon Reduction</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Renewable Energy Adoption</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Waste Management</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Resource Conservation</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-blue-50 border border-blue-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-users text-2xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Social Responsibility</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-blue-400 text-[5px]"></i> Employee Wellbeing</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-blue-400 text-[5px]"></i> Diversity & Inclusion</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-blue-400 text-[5px]"></i> Community Development</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-blue-400 text-[5px]"></i> Ethical Labor Practices</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-violet-50 border border-violet-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-landmark text-2xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Governance Excellence</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-violet-400 text-[5px]"></i> Transparent Reporting</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-violet-400 text-[5px]"></i> Ethical Business Conduct</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-violet-400 text-[5px]"></i> Compliance & Risk Oversight</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-violet-400 text-[5px]"></i> Stakeholder Accountability</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bullseye text-emerald-600 text-xs"></i></div>
                            Net Zero & Carbon Neutral Strategies
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-landmark text-blue-600 text-xs"></i></div>
                            ESG Integrated Corporate Governance
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-lime-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-truck text-lime-600 text-xs"></i></div>
                            Green Supply Chain Transformation
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-coins text-amber-600 text-xs"></i></div>
                            Sustainable Finance & Green Bonds
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-cyan-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-cyan-600 text-xs"></i></div>
                            Circular Economy Business Models
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-laptop-code text-violet-600 text-xs"></i></div>
                            Digital Sustainability Monitoring
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Business Opportunities</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations can unlock growth through:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-lightbulb text-brand-primary text-xs"></i></div>
                            Sustainable Innovation & Product Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-hand-holding-dollar text-brand-primary text-xs"></i></div>
                            Green Investment Attraction
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-gears text-brand-primary text-xs"></i></div>
                            Operational Efficiency Gains
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-handshake text-brand-primary text-xs"></i></div>
                            Stronger Stakeholder Relationships
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-globe text-brand-primary text-xs"></i></div>
                            Global Market Expansion
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/sustainability-leadership.jpg') }}" alt="Sustainability Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-lime-600 to-green-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Future of Sustainability Leadership</h3>
                    <p class="text-sm text-lime-100 mb-4">
                        Sustainability leadership is transforming from a compliance-driven function into a
                        <strong>strategic business growth driver</strong>. Forward-looking companies are embedding sustainability into:
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-chess text-lime-200"></i> Corporate Strategy
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-lightbulb text-lime-200"></i> Product Innovation
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-link text-lime-200"></i> Operations & Supply Chains
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-coins text-lime-200"></i> Investment Decisions
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-landmark text-lime-200"></i> Corporate Governance
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why Sustainability Leadership is the Future</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed mb-4">
                    Sustainability leadership is no longer a trend — it is the <strong>foundation of responsible,
                    resilient, and future-ready business success</strong> in the modern global economy.
                </p>
                <p class="text-base text-slate-400 max-w-2xl mx-auto">
                    Organizations that lead in sustainability today will <strong>shape the markets, industries,
                    and economies of tomorrow</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
