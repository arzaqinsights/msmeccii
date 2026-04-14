@extends('layouts.website')

@section('title', 'Glass Recycling')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/glass-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Glass Recycling
            </h1>
            <p class="text-lg md:text-xl text-cyan-300 font-semibold mb-2">100% Recyclable. Infinitely Reusable.</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Collecting, sorting, crushing, and re-melting waste glass into reusable raw material — one of the most sustainable materials on the planet.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Glass Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Glass recycling</strong> is the process of collecting, sorting, crushing, cleaning, and
                        re-melting waste glass into reusable raw material for manufacturing <strong>new glass products
                        and industrial applications</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Unlike many other materials, glass can be recycled <strong>100% and infinitely without loss of
                        quality</strong>, making it one of the most sustainable packaging and construction materials.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/glass-recycling.jpg') }}" alt="Glass Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- PROCESS STEPS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Glass Recycling Process</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
                    <div class="p-5 rounded-2xl bg-cyan-50 border border-cyan-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-cyan-100 flex items-center justify-center">
                            <i class="fa-solid fa-truck-ramp-box text-xl text-cyan-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Collection</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-filter text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Colour Sorting</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-hammer text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Crushing to Cullet</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-fire text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Furnace Melting</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Remanufacturing</h4>
                    </div>
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-cyan-600 to-cyan-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Glass Recycling Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 5.4 Billion</strong></li>
                        <li>Expected to reach <strong>USD 8.4 Billion</strong> by 2033</li>
                        <li>CAGR: <strong>5–6%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Sustainable packaging demand</li>
                        <li>Circular economy regulations</li>
                        <li>Rising energy cost in glass manufacturing</li>
                        <li>Construction sector demand</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Glass Recycling Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹3,500–5,000 Crore+</strong></li>
                        <li>CAGR: <strong>7–9%</strong> annually (faster than global)</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Infrastructure expansion</li>
                        <li>Packaging growth</li>
                        <li>Hospitality & beverage sector growth</li>
                        <li>Sustainability mandates</li>
                    </ul>

                    <h4 class="font-semibold mt-3 mb-1">2031 Projection</h4>
                    <p class="text-sm text-slate-600">Expected to exceed <strong>₹7,000–8,000 Crore+</strong></p>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-cyan-600">$5.4B</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-cyan-600">₹5K Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-cyan-600">1,200+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Recyclers</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-cyan-600">7–9%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- INDIA CAPACITY + GLOBAL -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Glass Recycling Capacity</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        Approx. <strong>800–1,200+ glass recyclers/processors</strong> operating across organized and
                        unorganized sectors. Significant untapped potential remains.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">Major Recycling Hubs</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-cyan-500 text-xs"></i> Gujarat</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-cyan-500 text-xs"></i> Maharashtra</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-cyan-500 text-xs"></i> Rajasthan</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-cyan-500 text-xs"></i> Delhi NCR</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-cyan-500 text-xs"></i> Tamil Nadu</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Glass Recycling</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>10,000+</strong> glass recycling facilities globally</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">India's Global Position</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Emerging <strong>high-growth market</strong> in Asia-Pacific</li>
                        <li>Asia-Pacific among <strong>fastest growing regions</strong> for recycled glass</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">Key Market Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Rising eco-friendly packaging demand</li>
                        <li>Increasing beverage & food packaging</li>
                        <li>Lower furnace energy cost using cullet</li>
                        <li>Government sustainability initiatives</li>
                        <li>Construction recycled glass aggregates</li>
                    </ul>
                </div>

            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-eye text-violet-600 text-xs"></i></div>
                            Smart Optical Sorting Technology
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-cyan-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gem text-cyan-600 text-xs"></i></div>
                            High-Purity Cullet Manufacturing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-cubes text-amber-600 text-xs"></i></div>
                            Glass-to-Sand Conversion Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-blue-600 text-xs"></i></div>
                            Construction-Grade Recycled Glass Products
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-fire text-orange-600 text-xs"></i></div>
                            Fiberglass Insulation Applications
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-paintbrush text-rose-600 text-xs"></i></div>
                            Decorative & Specialty Glass Reuse
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">High Potential Segments</h3>
                    <p class="text-sm text-slate-600 mb-4">Industry opportunities across the glass recycling chain:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-wine-bottle text-brand-primary text-xs"></i></div>
                            Bottle-to-Bottle Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-brand-primary text-xs"></i></div>
                            Construction Glass Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-cubes text-brand-primary text-xs"></i></div>
                            Glass Sand / Aggregate Production
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-paintbrush text-brand-primary text-xs"></i></div>
                            Decorative Recycled Glass Products
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-fire text-brand-primary text-xs"></i></div>
                            Fiberglass Manufacturing Feedstock
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-solar-panel text-brand-primary text-xs"></i></div>
                            Solar Panel Glass Recycling
                        </div>
                    </div>
                </div>

            </div>

            <!-- WHY INDIA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/glass-recycling.jpg') }}" alt="India Glass Recycling"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-cyan-600 to-cyan-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why India is Emerging in Glass Recycling</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 shrink-0"></i>
                            Growing beverage and FMCG packaging market
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 shrink-0"></i>
                            Rapid urbanization and construction boom
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 shrink-0"></i>
                            Increasing industrial glass waste generation
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 shrink-0"></i>
                            Availability of low-cost labor and logistics
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 shrink-0"></i>
                            Strong domestic manufacturing demand
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Glass: The Infinite Loop</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Glass is <strong>100% recyclable, infinitely reusable</strong>, making it the ultimate circular material.
                    With <strong>1,200+ recyclers in India</strong> and a market projected to reach <strong>₹8,000 Crore+</strong>,
                    glass recycling represents a growing pillar of <strong>sustainable manufacturing and circular economy</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
