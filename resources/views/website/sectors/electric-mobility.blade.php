@extends('layouts.website')

@section('title', 'Electric Mobility')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-sky-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/electric-mobility.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Electric Mobility
            </h1>
            <p class="text-lg md:text-xl text-sky-300 font-semibold mb-2">Driving the Future of Sustainable Transport</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Electrically powered transportation systems reducing fossil fuel dependence, lowering emissions, and creating sustainable ecosystems.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Electric Mobility?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Electric Mobility (E-Mobility)</strong> refers to the use of electrically powered transportation
                        systems and technologies designed to <strong>reduce dependence on fossil fuels, lower carbon emissions,
                        and create sustainable transportation ecosystems</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It includes <strong>electric vehicles, charging infrastructure, battery technologies, smart mobility
                        systems</strong>, and integrated transport electrification solutions.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/electric-mobility.jpg') }}" alt="Electric Mobility"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- E-MOBILITY INCLUDES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Electric Mobility Includes</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-sky-50 border border-sky-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-car-side text-xl text-sky-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Electric Cars</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-bus text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Electric Buses</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-motorcycle text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Electric 2 & 3 Wheelers</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-truck text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Electric Commercial Vehicles</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-charging-station text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">EV Charging Infrastructure</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-rose-50 border border-rose-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-arrows-rotate text-xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Battery Swapping Systems</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-indigo-50 border border-indigo-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-indigo-100 flex items-center justify-center">
                            <i class="fa-solid fa-network-wired text-xl text-indigo-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Smart Mobility Platforms</h4>
                    </div>
                </div>
            </div>

            <!-- WHY IT MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-sky-700 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Electric Mobility Matters</h3>
                    <p class="text-sm text-sky-100 mb-4">
                        Electric mobility is rapidly becoming a global priority as governments, industries, and consumers
                        transition toward cleaner, smarter, and more sustainable transportation solutions.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Reduced Carbon Emissions
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Lower Fuel Dependency
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Improved Air Quality
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Lower Operating Costs
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Enhanced Energy Security
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Sustainable Urban Mobility
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/electric-mobility.jpg') }}" alt="Electric Mobility Importance"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-sky-600 to-sky-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Electric Mobility Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 600+ Billion</strong></li>
                        <li>Expected to exceed <strong>USD 1.5 Trillion</strong> by 2035</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising fuel costs</li>
                        <li>Government EV incentives</li>
                        <li>Battery cost reduction</li>
                        <li>Climate change regulations</li>
                        <li>Consumer demand for sustainable transport</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Electric Mobility Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹1+ Lakh Crore</strong></li>
                        <li>Rapid adoption driven by policy support and infrastructure</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Forecast (2026–2031)</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Expected CAGR: <strong>20–25%</strong> annually</li>
                        <li>Projected to exceed <strong>₹5+ Lakh Crore</strong> by 2031</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-sky-600">$600B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-sky-600">₹1L Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-sky-600">$1.5T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global by 2035</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-sky-600">20–25%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- KEY SEGMENTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Segments of Electric Mobility</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-car-side text-xl text-sky-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Electric Passenger Vehicles</h4>
                        <p class="text-xs text-slate-600">Sustainable mobility solutions for personal and commercial transport.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-bus text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Electric Public Transport</h4>
                        <p class="text-xs text-slate-600">Electrification of buses, metro feeders, and fleet mobility.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-truck text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Commercial EV Solutions</h4>
                        <p class="text-xs text-slate-600">Electric trucks, delivery vans, and logistics vehicles.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-charging-station text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Charging Infrastructure</h4>
                        <p class="text-xs text-slate-600">Development of public and private EV charging stations.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-battery-full text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Battery & Energy Storage</h4>
                        <p class="text-xs text-slate-600">Advanced battery systems and next-gen charging technologies.</p>
                    </div>

                </div>
            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-sky-600 text-xs"></i></div>
                            Ultra-Fast Charging Technology
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-arrows-rotate text-rose-600 text-xs"></i></div>
                            Battery Swapping Networks
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-atom text-emerald-600 text-xs"></i></div>
                            Solid-State Battery Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-violet-600 text-xs"></i></div>
                            Autonomous Electric Vehicles
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-plug-circle-bolt text-amber-600 text-xs"></i></div>
                            Vehicle-to-Grid (V2G) Integration
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-network-wired text-blue-600 text-xs"></i></div>
                            Smart Connected Mobility Ecosystem
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Business Opportunities</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations can leverage electric mobility through:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-brand-primary text-xs"></i></div>
                            EV Manufacturing & Assembly
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-battery-full text-brand-primary text-xs"></i></div>
                            Battery Production & Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-charging-station text-brand-primary text-xs"></i></div>
                            Charging Infrastructure Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-truck-fast text-brand-primary text-xs"></i></div>
                            Fleet Electrification Services
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-mobile-screen text-brand-primary text-xs"></i></div>
                            Mobility-as-a-Service Platforms
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-brand-primary text-xs"></i></div>
                            Smart Grid & Energy Integration
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/electric-mobility.jpg') }}" alt="Electric Mobility Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-sky-600 to-blue-700 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Future of Electric Mobility</h3>
                    <p class="text-sm text-sky-100 mb-4">
                        Electric mobility is evolving beyond transportation into a key pillar of sustainable urban planning,
                        energy management, and smart city ecosystems. Forward-looking businesses are integrating into:
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-leaf text-sky-200"></i> Sustainability Strategies
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-truck-fast text-sky-200"></i> Fleet Management
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-city text-sky-200"></i> Smart Infrastructure
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-earth-americas text-sky-200"></i> Green Transport Policies
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why Electric Mobility is Critical</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Electric mobility is no longer a future concept — it is a <strong>transformative force</strong> driving
                    cleaner transportation, economic innovation, and <strong>sustainable development across the globe</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
