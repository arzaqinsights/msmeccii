@extends('layouts.website')

@section('title', 'Lithium Battery Recycling')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-teal-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/lithium-battery-recycling.webp') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Lithium Battery Recycling
            </h1>
            <p class="text-lg md:text-xl text-teal-300 font-semibold mb-2">Powering the Circular Economy of Energy Storage</p>
            <p class="text-slate-300 max-w-2xl mx-auto">
                Recovering critical minerals from end-of-life batteries to enable a sustainable, clean energy future.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Lithium Battery Recycling?</h2>
                    <p class="text-slate-600 mb-4 leading-relaxed">
                        <strong>Lithium Battery Recycling</strong> is the process of collecting, dismantling, recovering, and reprocessing
                        used lithium-ion batteries to extract valuable materials such as <strong>lithium, cobalt, nickel, manganese,
                        graphite, copper, and aluminum</strong> for reuse in new batteries and industrial applications.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        With the rapid growth of <strong>electric vehicles (EVs)</strong>, consumer electronics, and energy storage systems,
                        battery recycling has become a critical pillar of the global circular economy.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/lithium-battery-recycling.webp') }}" alt="Battery Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- WASTE SOURCES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Key Sources of Lithium Battery Waste</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-car text-teal-600 text-xs"></i></div>
                            Electric Vehicle (EV) Batteries
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-laptop text-blue-600 text-xs"></i></div>
                            Consumer Electronics & Laptop Batteries
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-mobile-screen text-violet-600 text-xs"></i></div>
                            Mobile Phone Batteries
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-amber-600 text-xs"></i></div>
                            Energy Storage System (ESS) Batteries
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-plug text-rose-600 text-xs"></i></div>
                            Industrial Power Backup Batteries
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-emerald-600 text-xs"></i></div>
                            Manufacturing Scrap / Gigafactory Waste
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/lithium-battery-recycling.webp') }}" alt="Battery Waste Sources"
                    class="h-[350px] w-full object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-teal-600 to-teal-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Market Overview</h3>
                    <p class="text-sm text-teal-100 mb-4">
                        The lithium battery recycling sector is among the fastest-growing industries globally due to EV
                        adoption and raw material demand.
                    </p>
                    <ul class="text-sm space-y-2">
                        <li>Market Size (2025): <strong>~USD 8–10 Billion</strong></li>
                        <li>Projected (2031): <strong>~USD 30–35 Billion</strong></li>
                        <li>CAGR: <strong>~20%–25%</strong></li>
                        <li>Asia-Pacific dominates market share</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Key Global Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>EV sales growth worldwide</li>
                        <li>Critical mineral shortages</li>
                        <li>Government recycling mandates</li>
                        <li>Rising raw material prices</li>
                        <li>Sustainability / ESG pressure</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Market Overview</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        India's battery recycling market is in an early but rapidly expanding stage, driven by EV growth and
                        government battery waste regulations.
                    </p>
                    <ul class="text-sm text-slate-700 space-y-2">
                        <li>Market Size (2025): <strong>~USD 1–1.2 Billion</strong></li>
                        <li>Projected (2031): <strong>~USD 4–5 Billion</strong></li>
                        <li>CAGR: <strong>~22%–26%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>EV adoption expansion</li>
                        <li>Battery Waste Management Rules</li>
                        <li>Domestic battery manufacturing growth</li>
                        <li>Import dependency reduction strategy</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-teal-600">$8–10B</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-teal-600">$1–1.2B</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-teal-600">20–25%</h4>
                    <p class="text-sm text-slate-500 mt-1">Global CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-teal-600">22–26%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Outlook (2026–2031)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Battery waste volumes expected to grow <strong>10x+</strong> by 2030</li>
                        <li>Gigafactory scrap recycling to rise sharply</li>
                        <li>Closed-loop battery manufacturing becoming standard</li>
                        <li>OEM partnerships with recyclers increasing rapidly</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Outlook (2026–2031)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>EV battery disposal wave starts significantly after 2027</li>
                        <li>Major investments expected in recycling infrastructure</li>
                        <li>India to emerge as regional recycling hub for South Asia</li>
                    </ul>
                </div>

            </div>

            <!-- COMPANIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Companies (Global & India)</h3>
                    <h4 class="font-semibold mb-2">Global Market</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li><strong>300–500+</strong> specialized battery recyclers worldwide</li>
                        <li>Thousands more in battery waste collection/processing</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Market</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li><strong>50–100+</strong> organized lithium battery recycling companies/startups</li>
                        <li>Growing network of dismantlers, collectors, and processors</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Recycling Technologies</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gears text-teal-600 text-xs"></i></div>
                            Mechanical Separation
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-flask text-blue-600 text-xs"></i></div>
                            Hydrometallurgical Recovery
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-fire text-orange-600 text-xs"></i></div>
                            Pyrometallurgical Processing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-atom text-violet-600 text-xs"></i></div>
                            Direct Cathode Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-slate-200 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-slate-600 text-xs"></i></div>
                            Black Mass Processing
                        </div>
                    </div>
                </div>

            </div>

            <!-- IMPORTANCE -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <div class="p-5 rounded-2xl bg-teal-50 border border-teal-200 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-teal-100 flex items-center justify-center">
                        <i class="fa-solid fa-shield-halved text-xl text-teal-600"></i>
                    </div>
                    <p class="text-xs text-slate-700 font-medium">Reduces hazardous waste pollution</p>
                </div>
                <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="fa-solid fa-gem text-xl text-blue-600"></i>
                    </div>
                    <p class="text-xs text-slate-700 font-medium">Recovers critical minerals for reuse</p>
                </div>
                <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                        <i class="fa-solid fa-arrow-trend-down text-xl text-amber-600"></i>
                    </div>
                    <p class="text-xs text-slate-700 font-medium">Lowers import dependence</p>
                </div>
                <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                        <i class="fa-solid fa-car-side text-xl text-emerald-600"></i>
                    </div>
                    <p class="text-xs text-slate-700 font-medium">Supports EV sustainability</p>
                </div>
                <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                        <i class="fa-solid fa-recycle text-xl text-violet-600"></i>
                    </div>
                    <p class="text-xs text-slate-700 font-medium">Enables circular manufacturing</p>
                </div>
            </div>

            <!-- FUTURE + CONCLUSION -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Future Outlook</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        The next decade (2026–2036) will define lithium battery recycling globally:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Massive EV battery retirement wave begins</li>
                        <li>Recycling becomes <strong>mandatory worldwide</strong></li>
                        <li>Recycled content enters mainstream battery production</li>
                        <li>Urban mining becomes a strategic raw material source</li>
                    </ul>
                    <p class="text-sm text-slate-600 mt-4 font-medium">
                        India is expected to become a key battery recycling and resource recovery destination.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl flex items-center shadow-lg">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Conclusion</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Lithium Battery Recycling is becoming one of the most <strong>strategic sectors</strong> in the global clean energy and
                            mobility ecosystem. As EV adoption and battery manufacturing rise, recycling will play a vital role in
                            ensuring <strong>sustainable supply chains</strong> and reducing environmental impact.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection