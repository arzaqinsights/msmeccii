@extends('layouts.website')

@section('title', 'Start-Up Ecosystem')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-fuchsia-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/start-up-ecosystem.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Start-Up Ecosystem
            </h1>
            <p class="text-lg md:text-xl text-fuchsia-300 font-semibold mb-2">Innovation, Disruption & Growth</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Entrepreneurial ventures developing innovative products, services, and technologies with scalable models and high growth potential.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What are Start-Ups?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Start-Ups</strong> are newly established entrepreneurial ventures designed to develop
                        <strong>innovative products, services, or technologies</strong> with scalable business models
                        and high growth potential.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        They are driven by <strong>innovation, technology, disruption, and market transformation</strong>,
                        often addressing emerging challenges and creating new opportunities across industries.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/start-up-ecosystem.jpg') }}" alt="Start-Up Ecosystem"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- WHY STARTUPS MATTER -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-fuchsia-700 to-purple-800 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Start-Ups Matter</h3>
                    <p class="text-sm text-fuchsia-100 mb-4">
                        Start-ups play a vital role in driving economic growth, technological advancement,
                        job creation, and industry transformation.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i>
                            Innovation & Disruption
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i>
                            Employment Generation
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i>
                            Economic Development
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i>
                            Investment Attraction
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i>
                            Technology Advancement
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i>
                            Global Competitiveness
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/start-up-ecosystem.jpg') }}" alt="Start-Up Importance"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL STATS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-fuchsia-600">150M+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Start-Ups</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-fuchsia-600">50M/yr</h4>
                    <p class="text-sm text-slate-500 mt-1">New Start-Ups Annually</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-fuchsia-600">$300B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Annual Funding</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-fuchsia-600">100+</h4>
                    <p class="text-sm text-slate-500 mt-1">Indian Unicorns</p>
                </div>
            </div>

            <!-- GLOBAL HUBS + INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-fuchsia-600 to-purple-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Start-Up Landscape</h3>
                    <p class="text-sm text-fuchsia-100 mb-4">
                        Over <strong>150 Million+</strong> startups globally, with <strong>$300B+</strong> in annual funding.
                    </p>

                    <h4 class="font-semibold mb-2">Key Global Innovation Hubs</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm"><i class="fa-solid fa-map-pin text-fuchsia-200 text-xs"></i> United States</div>
                        <div class="flex items-center gap-2 text-sm"><i class="fa-solid fa-map-pin text-fuchsia-200 text-xs"></i> United Kingdom</div>
                        <div class="flex items-center gap-2 text-sm"><i class="fa-solid fa-map-pin text-fuchsia-200 text-xs"></i> Germany</div>
                        <div class="flex items-center gap-2 text-sm"><i class="fa-solid fa-map-pin text-fuchsia-200 text-xs"></i> Singapore</div>
                        <div class="flex items-center gap-2 text-sm"><i class="fa-solid fa-map-pin text-fuchsia-200 text-xs"></i> Israel</div>
                        <div class="flex items-center gap-2 text-sm"><i class="fa-solid fa-map-pin text-fuchsia-200 text-xs"></i> UAE</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India's Start-Up Ecosystem</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>🏆 <strong>3rd Largest</strong> Start-Up Ecosystem in the World</li>
                        <li>📋 Over <strong>1,50,000+</strong> DPIIT Recognized Start-Ups</li>
                        <li>🦄 Home to <strong>100+ Unicorns</strong></li>
                        <li>💰 Projected to exceed <strong>USD 1 Trillion</strong> valuation by 2030</li>
                    </ul>
                </div>

            </div>

            <!-- KEY GROWTH SECTORS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Growth Sectors for Start-Ups</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-violet-50 border border-violet-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-microchip text-2xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Technology & Digital</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-violet-400 text-[5px]"></i> AI / Machine Learning</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-violet-400 text-[5px]"></i> SaaS / Cloud Computing</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-violet-400 text-[5px]"></i> Cybersecurity</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-violet-400 text-[5px]"></i> Blockchain</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-leaf text-2xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Sustainability & Green</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Clean Energy</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Waste Management</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> EV & Mobility</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Circular Economy</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-blue-50 border border-blue-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-briefcase text-2xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Consumer & Business</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-blue-400 text-[5px]"></i> E-Commerce</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-blue-400 text-[5px]"></i> FinTech</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-blue-400 text-[5px]"></i> EdTech</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-blue-400 text-[5px]"></i> HealthTech</li>
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
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-emerald-600 text-xs"></i></div>
                            Sustainable & Green Start-Ups
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-brain text-violet-600 text-xs"></i></div>
                            Deep Tech & AI Innovation
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-temperature-high text-sky-600 text-xs"></i></div>
                            Climate-Tech Ventures
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-amber-600 text-xs"></i></div>
                            Industry 4.0 Automation Start-Ups
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-seedling text-green-600 text-xs"></i></div>
                            Rural & Agri-Tech Expansion
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-venus text-rose-600 text-xs"></i></div>
                            Women-Led Entrepreneurship
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Opportunities for Entrepreneurs</h3>
                    <p class="text-sm text-slate-600 mb-4">Start-up ecosystem provides immense opportunities in:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-lightbulb text-brand-primary text-xs"></i></div>
                            Innovation Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-hand-holding-dollar text-brand-primary text-xs"></i></div>
                            Venture Funding & Angel Investment
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-handshake text-brand-primary text-xs"></i></div>
                            Strategic Partnerships
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-globe text-brand-primary text-xs"></i></div>
                            Global Market Expansion
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-rocket text-brand-primary text-xs"></i></div>
                            Technology Commercialization
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-users text-brand-primary text-xs"></i></div>
                            Employment Creation
                        </div>
                    </div>
                </div>

            </div>

            <!-- MAJOR INDIAN STARTUP CITIES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-3 text-center">Major Start-Up Cities in India</h2>
                <p class="text-center text-sm text-slate-500 mb-8 max-w-2xl mx-auto">
                    India is the 3rd largest startup ecosystem globally, with major entrepreneurial hubs across metropolitan and emerging cities.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                    <!-- Bengaluru -->
                    <div class="p-5 rounded-2xl bg-fuchsia-50 border border-fuchsia-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-fuchsia-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-fuchsia-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-slate-800">Bengaluru</h4>
                                <p class="text-[10px] text-fuchsia-600 font-semibold">Silicon Valley of India</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-fuchsia-100 text-fuchsia-700">IT/SaaS</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-fuchsia-100 text-fuchsia-700">AI</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-fuchsia-100 text-fuchsia-700">FinTech</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-fuchsia-100 text-fuchsia-700">Deep Tech</span>
                        </div>
                    </div>

                    <!-- Delhi NCR -->
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-slate-800">Delhi NCR</h4>
                                <p class="text-[10px] text-blue-600 font-semibold">Funding & Innovation Hub</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-blue-100 text-blue-700">E-Commerce</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-blue-100 text-blue-700">FinTech</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-blue-100 text-blue-700">Logistics</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-blue-100 text-blue-700">EdTech</span>
                        </div>
                    </div>

                    <!-- Mumbai -->
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-amber-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-slate-800">Mumbai</h4>
                                <p class="text-[10px] text-amber-600 font-semibold">Financial Capital</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-amber-100 text-amber-700">FinTech</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-amber-100 text-amber-700">D2C</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-amber-100 text-amber-700">Media</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-amber-100 text-amber-700">Retail</span>
                        </div>
                    </div>

                    <!-- Hyderabad -->
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-violet-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-violet-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-slate-800">Hyderabad</h4>
                                <p class="text-[10px] text-violet-600 font-semibold">Tech & Innovation</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-violet-100 text-violet-700">IT</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-violet-100 text-violet-700">Life Sciences</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-violet-100 text-violet-700">AI</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-violet-100 text-violet-700">Enterprise</span>
                        </div>
                    </div>

                    <!-- Pune -->
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-emerald-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-slate-800">Pune</h4>
                                <p class="text-[10px] text-emerald-600 font-semibold">Engineering & Product</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-700">SaaS</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-700">Auto Tech</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-700">Mfg</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-700">EdTech</span>
                        </div>
                    </div>

                    <!-- Chennai -->
                    <div class="p-5 rounded-2xl bg-rose-50 border border-rose-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-rose-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-rose-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-slate-800">Chennai</h4>
                                <p class="text-[10px] text-rose-600 font-semibold">Industrial & SaaS</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-rose-100 text-rose-700">SaaS</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-rose-100 text-rose-700">Mobility</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-rose-100 text-rose-700">Mfg Tech</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-rose-100 text-rose-700">Deep Tech</span>
                        </div>
                    </div>

                    <!-- Ahmedabad -->
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-orange-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-slate-800">Ahmedabad</h4>
                                <p class="text-[10px] text-orange-600 font-semibold">Industrial Innovation</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-orange-100 text-orange-700">Mfg</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-orange-100 text-orange-700">Industrial</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-orange-100 text-orange-700">Textile</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-orange-100 text-orange-700">FinTech</span>
                        </div>
                    </div>

                    <!-- Kolkata -->
                    <div class="p-5 rounded-2xl bg-sky-50 border border-sky-200">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-map-pin text-sky-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm text-slate-800">Kolkata</h4>
                                <p class="text-[10px] text-sky-600 font-semibold">Eastern Innovation</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-sky-100 text-sky-700">EdTech</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-sky-100 text-sky-700">Logistics</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-sky-100 text-sky-700">Food</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-sky-100 text-sky-700">Media</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- TIER 2 HUBS -->
            <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                <h3 class="text-2xl font-bold mb-4 text-center">Emerging Tier-2 Start-Up Hubs</h3>
                <p class="text-sm text-slate-500 text-center mb-6">India's startup ecosystem is expanding beyond metros</p>
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="px-4 py-2 rounded-full bg-fuchsia-100 text-fuchsia-700 text-sm font-medium">Jaipur</span>
                    <span class="px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">Indore</span>
                    <span class="px-4 py-2 rounded-full bg-amber-100 text-amber-700 text-sm font-medium">Surat</span>
                    <span class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700 text-sm font-medium">Kochi</span>
                    <span class="px-4 py-2 rounded-full bg-violet-100 text-violet-700 text-sm font-medium">Coimbatore</span>
                    <span class="px-4 py-2 rounded-full bg-rose-100 text-rose-700 text-sm font-medium">Lucknow</span>
                    <span class="px-4 py-2 rounded-full bg-orange-100 text-orange-700 text-sm font-medium">Nagpur</span>
                </div>
            </div>

            <!-- WHY INDIA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/start-up-ecosystem.jpg') }}" alt="India Start-Up Hub"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-fuchsia-600 to-purple-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why India is a Global Start-Up Hub</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i> Large Consumer Market
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i> Strong Digital Infrastructure
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i> Government Start-Up Incentives
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i> Skilled Young Workforce
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i> Growing Investor Community
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-fuchsia-200 shrink-0"></i> Rapid Technology Adoption
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">The Future of Start-Ups</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Start-ups are <strong>shaping the future of global industries</strong> by redefining traditional business
                    models and accelerating innovation. Organizations that collaborate with start-ups will
                    <strong>drive innovation, expand markets, and build competitive advantage</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
