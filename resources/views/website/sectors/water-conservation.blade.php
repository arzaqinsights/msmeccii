@extends('layouts.website')

@section('title', 'Water Conservation')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/water-conservation.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Water Conservation
            </h1>
            <p class="text-lg md:text-xl text-blue-300 font-semibold mb-2">Preserving Our Most Vital Resource</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Efficient management, preservation, and sustainable use of water resources to reduce wastage and ensure long-term sustainability.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Water Conservation?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Water Conservation</strong> refers to the efficient management, preservation, and sustainable use
                        of water resources to <strong>reduce wastage, enhance availability, and ensure long-term environmental
                        and economic sustainability</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It involves strategic practices, technologies, and policies aimed at <strong>protecting freshwater
                        resources</strong> while meeting the growing needs of industries, agriculture, communities,
                        and ecosystems.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/water-conservation.jpg') }}" alt="Water Conservation"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- INCLUDES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Water Conservation Includes</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-cloud-rain text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Rainwater Harvesting</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-cyan-50 border border-cyan-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-cyan-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-cyan-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Wastewater Treatment & Reuse</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-seedling text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Efficient Irrigation Systems</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-indigo-50 border border-indigo-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-indigo-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-xl text-indigo-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Industrial Water Recycling</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-microchip text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Smart Water Technologies</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-teal-50 border border-teal-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-teal-100 flex items-center justify-center">
                            <i class="fa-solid fa-arrow-down text-xl text-teal-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Groundwater Recharge</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Leak Detection & Loss Prevention</h4>
                    </div>
                </div>
            </div>

            <!-- WHY IT MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-blue-700 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Water Conservation Matters</h3>
                    <p class="text-sm text-blue-100 mb-4">
                        Water is one of the most critical natural resources for human survival, industrial operations,
                        agriculture, and ecosystem balance. Sustainable water management is a strategic necessity.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Sustainable Resource Availability
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Reduced Water Costs
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Improved Operational Efficiency
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Enhanced Environmental Protection
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Lower Business Risk
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Stronger Regulatory Compliance
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/water-conservation.jpg') }}" alt="Water Conservation Importance"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Water Conservation Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 350+ Billion</strong></li>
                        <li>Expected to exceed <strong>USD 600 Billion</strong> by 2035</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Increasing water scarcity</li>
                        <li>Climate change impact</li>
                        <li>Rising industrial demand</li>
                        <li>Urban population growth</li>
                        <li>Government sustainability regulations</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Water Conservation Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹80,000+ Crore</strong></li>
                        <li>Rapid investments in infrastructure, treatment & smart systems</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Forecast (2026–2031)</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Expected CAGR: <strong>12–15%</strong> annually</li>
                        <li>Projected to exceed <strong>₹1.5 Lakh Crore</strong> by 2031</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-blue-600">$350B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-blue-600">₹80K Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-blue-600">$600B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global by 2035</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-blue-600">12–15%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- KEY AREAS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Areas of Water Conservation</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Industrial Water Management</h4>
                        <p class="text-xs text-slate-600">Optimizing water use in manufacturing and industrial processes.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-seedling text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Agricultural Water Efficiency</h4>
                        <p class="text-xs text-slate-600">Reducing water consumption through smart irrigation and precision farming.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-city text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Urban Water Infrastructure</h4>
                        <p class="text-xs text-slate-600">Developing sustainable city-wide water systems and supply networks.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-cyan-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-cyan-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Wastewater Recycling</h4>
                        <p class="text-xs text-slate-600">Treating and reusing water for secondary applications.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mb-4 rounded-full bg-teal-100 flex items-center justify-center">
                            <i class="fa-solid fa-water text-xl text-teal-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Groundwater Preservation</h4>
                        <p class="text-xs text-slate-600">Replenishing aquifers and protecting underground water reserves.</p>
                    </div>

                </div>
            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gauge-high text-blue-600 text-xs"></i></div>
                            Smart Water Metering Systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-brain text-violet-600 text-xs"></i></div>
                            AI-Based Water Monitoring Platforms
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-droplet-slash text-emerald-600 text-xs"></i></div>
                            Zero Liquid Discharge (ZLD) Systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-cyan-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-cyan-600 text-xs"></i></div>
                            Advanced Wastewater Reuse Technologies
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-filter text-amber-600 text-xs"></i></div>
                            Sustainable Desalination Solutions
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-sky-600 text-xs"></i></div>
                            Water Positive Corporate Strategies
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Business Opportunities</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations can leverage water conservation through:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-brand-primary text-xs"></i></div>
                            Water Treatment Infrastructure
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-microchip text-brand-primary text-xs"></i></div>
                            Smart Water Technology Solutions
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-brand-primary text-xs"></i></div>
                            Industrial Recycling Systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            ESG & Sustainability Consulting
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-cloud-rain text-brand-primary text-xs"></i></div>
                            Rainwater Harvesting Projects
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-water text-brand-primary text-xs"></i></div>
                            Wastewater Management Services
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/water-conservation.jpg') }}" alt="Water Conservation Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Future of Water Conservation</h3>
                    <p class="text-sm text-blue-100 mb-4">
                        Water conservation is transforming into a strategic business and environmental priority.
                        Forward-looking organizations are embedding water management into:
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-leaf text-blue-200"></i> Sustainability Strategy
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-industry text-blue-200"></i> Manufacturing Ops
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-link text-blue-200"></i> Supply Chain Mgmt
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-chart-line text-blue-200"></i> ESG Reporting
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why Water Conservation is Critical</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Water conservation is no longer optional — it is <strong>essential for ensuring business continuity</strong>,
                    environmental responsibility, and <strong>long-term socio-economic development</strong> in a water-stressed world.
                </p>
            </div>

        </div>
    </section>

@endsection
