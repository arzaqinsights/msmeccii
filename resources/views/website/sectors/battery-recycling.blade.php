@extends('layouts.website')

@section('title', 'Battery Recycling Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-green-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/battery-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Battery Recycling
            </h1>
            <p class="text-lg md:text-xl text-green-300 font-semibold mb-2">Powering the Circular Economy</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Recovering valuable metals from end-of-life batteries to enable sustainable electric mobility and clean energy storage.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Battery Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Battery Recycling</strong> refers to the collection, dismantling, processing, and recovery of
                        valuable materials from used or end-of-life batteries to enable reuse in manufacturing and
                        <strong>reduce environmental impact</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It is a critical part of the <strong>circular economy and clean energy transition</strong>, helping recover
                        essential metals while minimizing hazardous waste and dependence on virgin mining.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/battery-recycling.jpg') }}" alt="Battery Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- BATTERY RECYCLING INCLUDES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Battery Recycling Includes</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-green-50 border border-green-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fa-solid fa-battery-full text-xl text-green-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Lithium-Ion Battery Recycling</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-slate-100 border border-slate-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-slate-200 flex items-center justify-center">
                            <i class="fa-solid fa-car-battery text-xl text-slate-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Lead Acid Battery Recycling</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-car-side text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">EV Battery Recovery & Reuse</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-gem text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Precious Metal Extraction</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-screwdriver-wrench text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Battery Dismantling & Sorting</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-rose-50 border border-rose-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-atom text-xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Black Mass Processing</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Secondary Raw Material Recovery</h4>
                    </div>
                </div>
            </div>

            <!-- WHY IT MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-green-700 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Battery Recycling Matters</h3>
                    <p class="text-sm text-green-100 mb-4">
                        As the demand for electric vehicles, electronics, and renewable energy storage rises globally,
                        battery recycling has become essential for sustainable resource management.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Recovery of Valuable Metals
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Reduced Mining Dependency
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Lower Environmental Pollution
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Circular Economy Integration
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Energy Security Enhancement
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Sustainable Supply Chain Development
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/battery-recycling.jpg') }}" alt="Battery Recycling Importance"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-green-600 to-green-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Battery Recycling Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 25+ Billion</strong></li>
                        <li>Expected to exceed <strong>USD 50 Billion</strong> by 2032</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>EV market expansion</li>
                        <li>Battery demand surge</li>
                        <li>Raw material scarcity</li>
                        <li>Sustainability regulations</li>
                        <li>Circular economy adoption</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Battery Recycling Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹8,000–12,000 Crore+</strong></li>
                        <li>Rapidly growing with EV adoption and energy storage demand</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Forecast (2026–2031)</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Expected CAGR: <strong>18–22%</strong> annually</li>
                        <li>Projected to exceed <strong>₹25,000–30,000 Crore</strong> by 2031</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-green-600">$25B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-green-600">₹12K Cr</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-green-600">$50B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global by 2032</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-green-600">18–22%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- KEY SEGMENTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Segments of Battery Recycling</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fa-solid fa-battery-full text-xl text-green-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Lithium-Ion Battery Recycling</h4>
                        <p class="text-xs text-slate-600">Recovery of lithium, cobalt, nickel, manganese, and graphite from modern batteries.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-slate-200 flex items-center justify-center">
                            <i class="fa-solid fa-car-battery text-xl text-slate-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Lead Acid Battery Recycling</h4>
                        <p class="text-xs text-slate-600">Recycling of automotive and industrial lead-acid batteries.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-plug-circle-bolt text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">EV Battery Reuse</h4>
                        <p class="text-xs text-slate-600">Second-life battery applications for stationary storage.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-flask text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Battery Material Refining</h4>
                        <p class="text-xs text-slate-600">Purification and recovery of battery-grade metals.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-truck-fast text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Battery Collection & Reverse Logistics</h4>
                        <p class="text-xs text-slate-600">Safe transportation and collection systems for used batteries.</p>
                    </div>

                </div>
            </div>

            <!-- EMERGING TRENDS -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-flask text-green-600 text-xs"></i></div>
                            Hydrometallurgical Recovery Technologies
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-blue-600 text-xs"></i></div>
                            Direct Recycling Techniques
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-violet-600 text-xs"></i></div>
                            Automated Battery Dismantling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-id-card text-amber-600 text-xs"></i></div>
                            Battery Passport / Traceability Systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-link text-rose-600 text-xs"></i></div>
                            Closed Loop EV Battery Supply Chains
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-emerald-600 text-xs"></i></div>
                            Gigafactory Recycling Integration
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Business Opportunities</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations can leverage battery recycling through:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-brand-primary text-xs"></i></div>
                            Recycling Plant Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-gem text-brand-primary text-xs"></i></div>
                            Metal Recovery Operations
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-battery-half text-brand-primary text-xs"></i></div>
                            EV Battery Reuse Programs
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-truck text-brand-primary text-xs"></i></div>
                            Collection & Logistics Networks
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-gears text-brand-primary text-xs"></i></div>
                            Technology Licensing & Automation
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            ESG and Circular Supply Chain Projects
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE INTEGRATION -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/battery-recycling.jpg') }}" alt="Battery Recycling Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-green-600 to-emerald-700 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Future of Battery Recycling</h3>
                    <p class="text-sm text-green-100 mb-4">
                        Battery recycling is rapidly becoming a strategic pillar of the clean energy and electric
                        mobility ecosystem. Forward-looking businesses are integrating it into:
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-car-side text-green-200"></i> EV Supply Chains
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-solar-panel text-green-200"></i> Renewable Storage
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-leaf text-green-200"></i> Sustainability Strategies
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-recycle text-green-200"></i> Circular Manufacturing
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why Battery Recycling is Critical</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Battery recycling is no longer optional — it is <strong>essential for powering the future</strong> of
                    electric mobility, renewable energy, and sustainable industrial development while reducing
                    <strong>environmental and supply chain risks</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
