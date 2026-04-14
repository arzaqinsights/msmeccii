@extends('layouts.website')

@section('title', 'Tyre & Rubber Recycling')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/tyre-rubber-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Tyre & Rubber Recycling
            </h1>
            <p class="text-lg md:text-xl text-orange-300 font-semibold mb-2">Turning Waste into Value</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Collection, processing, recovery, and repurposing of used tyres and rubber waste into reusable raw materials, energy, and value-added products.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Tyre & Rubber Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Tyre and Rubber Recycling</strong> refers to the collection, processing, recovery, and
                        repurposing of used tyres and rubber waste into <strong>reusable raw materials, energy, and
                        value-added products</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        The process helps <strong>reduce landfill waste, prevent environmental pollution, recover valuable
                        rubber compounds</strong>, and support circular economy initiatives across industries.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/tyre-rubber-recycling.jpg') }}" alt="Tyre & Rubber Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- INCLUDES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Tyre & Rubber Recycling Includes</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-truck-ramp-box text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Scrap Tyre Collection</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-cubes text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Rubber Granule / Crumb</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-red-50 border border-red-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-fire text-xl text-red-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Pyrolysis & Fuel Recovery</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Reclaimed Rubber Mfg</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-atom text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Devulcanization Tech</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-mortar-pestle text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Rubber Powder Apps</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-slate-100 border border-slate-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-slate-200 flex items-center justify-center">
                            <i class="fa-solid fa-boxes-stacked text-xl text-slate-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Secondary Product Manufacturing</h4>
                    </div>
                </div>
            </div>

            <!-- WHY IT MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-orange-700 to-amber-800 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Tyre & Rubber Recycling Matters</h3>
                    <p class="text-sm text-orange-100 mb-4">
                        With millions of tyres discarded every year globally, tyre and rubber recycling has become essential
                        for sustainable waste management and environmental protection.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-orange-200 shrink-0"></i>
                            Reduced Environmental Pollution
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-orange-200 shrink-0"></i>
                            Resource Recovery & Reuse
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-orange-200 shrink-0"></i>
                            Lower Landfill Dependency
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-orange-200 shrink-0"></i>
                            Circular Economy Development
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-orange-200 shrink-0"></i>
                            Energy Recovery Opportunities
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-orange-200 shrink-0"></i>
                            Sustainable Industrial Production
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/tyre-rubber-recycling.jpg') }}" alt="Tyre Recycling Importance"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-orange-600 to-orange-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Tyre Recycling Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 8+ Billion</strong></li>
                        <li>Expected to exceed <strong>USD 12 Billion</strong> by 2032</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising vehicle ownership</li>
                        <li>Increasing tyre disposal volumes</li>
                        <li>Sustainability regulations</li>
                        <li>Circular economy initiatives</li>
                        <li>Demand for recycled rubber products</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Tyre Recycling Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹10,000–15,000 Crore+</strong></li>
                        <li>One of the <strong>fastest-growing recycling segments</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Forecast (2026–2031)</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Expected CAGR: <strong>10–14%</strong> annually</li>
                        <li>Projected to exceed <strong>₹25,000+ Crore</strong> by 2031</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-orange-600">$8B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-orange-600">₹15K Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-orange-600">$12B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global by 2032</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-orange-600">10–14%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- KEY SEGMENTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Recycling Segments</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-cubes text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Crumb Rubber Production</h4>
                        <p class="text-xs text-slate-600">Conversion of waste tyres into granules/powder for industrial reuse.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-red-100 flex items-center justify-center">
                            <i class="fa-solid fa-fire text-xl text-red-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Pyrolysis & Fuel Recovery</h4>
                        <p class="text-xs text-slate-600">Thermal conversion of tyres into oil, gas, and carbon black.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Reclaimed Rubber Mfg</h4>
                        <p class="text-xs text-slate-600">Processing rubber waste into reusable rubber compounds.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-boxes-stacked text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Rubber Product Mfg</h4>
                        <p class="text-xs text-slate-600">Production of mats, flooring, tiles, and molded products.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-road text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Road & Infrastructure Applications</h4>
                        <p class="text-xs text-slate-600">Use of recycled rubber in asphalt and construction projects.</p>
                    </div>

                </div>
            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-atom text-violet-600 text-xs"></i></div>
                            Advanced Devulcanization Technologies
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-fire text-red-600 text-xs"></i></div>
                            Sustainable Pyrolysis Systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-slate-200 flex items-center justify-center shrink-0"><i class="fa-solid fa-circle text-slate-600 text-xs"></i></div>
                            High-Value Carbon Black Recovery
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-emerald-600 text-xs"></i></div>
                            Circular Tyre Manufacturing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-road text-amber-600 text-xs"></i></div>
                            Rubberized Asphalt Roads
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-microchip text-sky-600 text-xs"></i></div>
                            Smart Waste Collection Networks
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Business Opportunities</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations can leverage tyre recycling through:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-brand-primary text-xs"></i></div>
                            Recycling Plant Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-fire text-brand-primary text-xs"></i></div>
                            Pyrolysis Project Investment
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-brand-primary text-xs"></i></div>
                            Rubber Product Manufacturing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-brand-primary text-xs"></i></div>
                            Fuel & Carbon Recovery Solutions
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-road text-brand-primary text-xs"></i></div>
                            Infrastructure Material Supply
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            ESG and Sustainability Projects
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/tyre-rubber-recycling.jpg') }}" alt="Tyre Recycling Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-orange-600 to-amber-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Future of Tyre & Rubber Recycling</h3>
                    <p class="text-sm text-orange-100 mb-4">
                        Tyre and rubber recycling is evolving into a high-value circular industry focused on material
                        recovery, alternative fuels, and sustainable industrial applications.
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-leaf text-orange-200"></i> Sustainability Strategies
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-trash-can text-orange-200"></i> Waste Reduction
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-recycle text-orange-200"></i> Circular Manufacturing
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-arrow-trend-down text-orange-200"></i> Carbon Reduction
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why Tyre & Rubber Recycling is Critical</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Tyre and rubber recycling is no longer just a waste disposal solution — it is a <strong>strategic sector</strong>
                    driving environmental responsibility, industrial innovation, and <strong>circular economic growth</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
