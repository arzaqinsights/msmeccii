@extends('layouts.website')

@section('title', 'Corporate Social Responsibility (CSR)')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-rose-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/csr.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Corporate Social Responsibility
            </h1>
            <p class="text-lg md:text-xl text-rose-300 font-semibold mb-2">Business for a Better World</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Ethical commitment to contribute positively toward society, environment, and economic development while balancing stakeholder interests.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is CSR?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Corporate Social Responsibility (CSR)</strong> refers to a company's commitment to operate
                        ethically and contribute positively toward <strong>society, environment, and economic development</strong>
                        while balancing the interests of stakeholders, communities, employees, and shareholders.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        CSR enables organizations to integrate <strong>social and environmental concerns</strong> into
                        their business operations and decision-making processes.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/csr.jpg') }}" alt="Corporate Social Responsibility"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- WHY CSR MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-rose-700 to-pink-800 text-white shadow-lg min-h-[340px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why CSR Matters</h3>
                    <p class="text-sm text-rose-100 mb-4">
                        CSR has become a critical pillar of modern business strategy, helping companies build
                        sustainable growth and create long-term stakeholder value.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-rose-200 shrink-0"></i>
                            Enhanced Corporate Reputation
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-rose-200 shrink-0"></i>
                            Stronger Customer Trust & Brand Loyalty
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-rose-200 shrink-0"></i>
                            Improved Investor Confidence
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-rose-200 shrink-0"></i>
                            Better Employee Engagement
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-rose-200 shrink-0"></i>
                            Positive Social & Environmental Impact
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-rose-200 shrink-0"></i>
                            Regulatory Compliance and Governance
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/csr.jpg') }}" alt="CSR Importance"
                    class="w-full h-[340px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL + INDIA STATS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-rose-600">90%+</h4>
                    <p class="text-sm text-slate-500 mt-1">Fortune 500 CSR Reports</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-rose-600">$30T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global ESG Investment</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-rose-600">2%</h4>
                    <p class="text-sm text-slate-500 mt-1">India Mandatory CSR Spend</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-rose-600">₹25K Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Annual CSR Spend</p>
                </div>
            </div>

            <!-- GLOBAL + INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-rose-600 to-rose-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global CSR Landscape</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Over <strong>90%</strong> of Fortune 500 companies publish CSR reports</li>
                        <li>Global ESG & CSR investments exceed <strong>USD 30+ Trillion</strong></li>
                        <li>CSR integrated into <strong>mainstream corporate governance</strong> frameworks worldwide</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">CSR in India</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>🏆 <strong>First country</strong> in the world to mandate CSR spending</li>
                        <li>📜 Companies Act, 2013 — <strong>2% of average net profits</strong> on CSR</li>
                        <li>💰 Annual CSR expenditure exceeds <strong>₹25,000+ Crore</strong></li>
                        <li>🏢 Growing participation from corporates, PSUs, MNCs</li>
                    </ul>
                </div>

            </div>

            <!-- KEY FOCUS AREAS — 3 PILLARS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Focus Areas of CSR</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-rose-50 border border-rose-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-users text-2xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Social Development</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-rose-400 text-[5px]"></i> Education & Skill Development</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-rose-400 text-[5px]"></i> Women Empowerment</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-rose-400 text-[5px]"></i> Rural Development</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-rose-400 text-[5px]"></i> Healthcare & Sanitation</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-leaf text-2xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Environmental Sustainability</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Renewable Energy Projects</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Tree Plantation Drives</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Waste Management Initiatives</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-emerald-400 text-[5px]"></i> Water Conservation Programs</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-chart-line text-2xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-3">Economic Empowerment</h4>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-amber-400 text-[5px]"></i> Entrepreneurship Development</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-amber-400 text-[5px]"></i> Livelihood Enhancement</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle text-amber-400 text-[5px]"></i> MSME Support Programs</li>
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
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-landmark text-rose-600 text-xs"></i></div>
                            ESG-Integrated CSR Strategies
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-laptop-code text-violet-600 text-xs"></i></div>
                            Technology Driven Impact Monitoring
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-temperature-high text-emerald-600 text-xs"></i></div>
                            Climate & Sustainability Focused CSR
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bullseye text-blue-600 text-xs"></i></div>
                            CSR Linked to SDGs / UN Goals
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-handshake text-amber-600 text-xs"></i></div>
                            Strategic Long-Term Community Partnerships
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-users-gear text-sky-600 text-xs"></i></div>
                            Skill-Based Employee Volunteering
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">CSR Opportunities for Business</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations are increasingly leveraging CSR for:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-award text-brand-primary text-xs"></i></div>
                            Brand Positioning & Reputation Building
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            Sustainable Business Leadership
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-users text-brand-primary text-xs"></i></div>
                            Community Engagement & Social License
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-chart-line text-brand-primary text-xs"></i></div>
                            ESG Ratings Improvement
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-handshake text-brand-primary text-xs"></i></div>
                            Stakeholder Trust Enhancement
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/csr.jpg') }}" alt="CSR Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-rose-600 to-pink-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">The Future of CSR</h3>
                    <p class="text-sm text-rose-100 mb-4">
                        CSR is evolving from traditional philanthropy into a <strong>strategic business function</strong>
                        aligned with sustainability, ESG, and long-term value creation. Companies are embedding CSR into:
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-chess text-rose-200"></i> Core Business Strategy
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-link text-rose-200"></i> Supply Chain Operations
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-lightbulb text-rose-200"></i> Innovation & Product Development
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-landmark text-rose-200"></i> Corporate Governance Framework
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why CSR is Crucial for Growth</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed mb-4">
                    In today's competitive business environment, CSR is no longer optional — it is a
                    <strong>strategic imperative</strong> for responsible growth, stronger stakeholder relationships,
                    and building a <strong>sustainable future for generations to come</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
