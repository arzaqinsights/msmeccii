@extends('layouts.website')

@section('title', 'Plastic Recycling')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/plastic-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Plastic Recycling
            </h1>
            <p class="text-lg md:text-xl text-blue-300 font-semibold mb-2">From Waste to Worth</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Collecting, sorting, processing, and re-manufacturing waste plastics into reusable raw materials — driving circular economy and sustainability.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Plastic Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Plastic recycling</strong> is the process of collecting, sorting, cleaning, processing,
                        and re-manufacturing waste plastic materials into <strong>reusable raw materials or new plastic
                        products</strong>. It helps reduce landfill waste, conserve natural resources, lower carbon
                        emissions, and promote a circular economy.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/plastic-recycling.jpg') }}" alt="Plastic Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- PROCESS STEPS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Plastic Recycling Process</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-truck-ramp-box text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Collection</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-filter text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Segregation by Polymer</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-cyan-50 border border-cyan-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-cyan-100 flex items-center justify-center">
                            <i class="fa-solid fa-shower text-xl text-cyan-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Washing & Shredding</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-cubes text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Pelletizing</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Reprocessing</h4>
                    </div>
                </div>
            </div>

            <!-- POLYMER TYPES BAR -->
            <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                <h3 class="text-xl font-bold mb-4 text-center">Key Polymer Types Recycled</h3>
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">PET</span>
                    <span class="px-4 py-2 rounded-full bg-emerald-100 text-emerald-700 text-sm font-medium">HDPE</span>
                    <span class="px-4 py-2 rounded-full bg-amber-100 text-amber-700 text-sm font-medium">LDPE</span>
                    <span class="px-4 py-2 rounded-full bg-violet-100 text-violet-700 text-sm font-medium">PP</span>
                    <span class="px-4 py-2 rounded-full bg-rose-100 text-rose-700 text-sm font-medium">PVC</span>
                    <span class="px-4 py-2 rounded-full bg-orange-100 text-orange-700 text-sm font-medium">PS</span>
                    <span class="px-4 py-2 rounded-full bg-teal-100 text-teal-700 text-sm font-medium">ABS</span>
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Plastic Recycling Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 60.76 Billion</strong></li>
                        <li>Expected to reach <strong>USD 132+ Billion</strong> by 2033</li>
                        <li>CAGR: <strong>8–10%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Sustainability regulations</li>
                        <li>Brand commitments toward recycled packaging</li>
                        <li>Ban on virgin/single-use plastics</li>
                        <li>Growth in FMCG and e-commerce packaging</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Plastic Recycling Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>USD 4.4–5.0 Billion</strong></li>
                        <li>Waste plastic volume: <strong>11.92 Million Tons</strong> (2025)</li>
                        <li>CAGR: <strong>9–11%+</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Target by 2031</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Estimated <strong>USD 8–9 Billion+</strong> market opportunity</li>
                        <li>India recycles nearly <strong>60% of plastic waste</strong></li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-blue-600">$60.7B</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-blue-600">$5B+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-blue-600">5,000+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Recyclers</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-blue-600">60%</h4>
                    <p class="text-sm text-slate-500 mt-1">India Recycling Rate</p>
                </div>
            </div>

            <!-- INDIA CAPACITY + GLOBAL -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Plastic Recycling Capacity</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        Approx. <strong>4,000–5,000+ organized and unorganized recyclers</strong> across India.
                        India recycles nearly <strong>60% of plastic waste</strong> — above many global averages.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">Major Recycling Hubs</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-blue-500 text-xs"></i> Delhi NCR</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-blue-500 text-xs"></i> Gujarat</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-blue-500 text-xs"></i> Maharashtra</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-blue-500 text-xs"></i> Tamil Nadu</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-blue-500 text-xs"></i> Karnataka</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Recycling Ecosystem</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>30,000+</strong> plastic recycling facilities globally</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">India's Global Position</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>India contributes approx. <strong>6%</strong> of global plastic recycling market</li>
                        <li>Asia-Pacific is <strong>largest recycled plastic consumption region</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">Key Market Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Government EPR Regulations</li>
                        <li>Mandatory Recycled Content Targets</li>
                        <li>Corporate ESG Commitments</li>
                        <li>Increasing Raw Material Costs</li>
                        <li>Export Demand for Recycled Resin</li>
                        <li>Sustainable Packaging Growth</li>
                    </ul>
                </div>

            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-utensils text-emerald-600 text-xs"></i></div>
                            Food-Grade Recycled Plastic Production
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-flask text-orange-600 text-xs"></i></div>
                            Chemical Recycling / Pyrolysis Growth
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-violet-600 text-xs"></i></div>
                            AI-Based Sorting Technology
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gem text-blue-600 text-xs"></i></div>
                            High-Value Recycled Polymers
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-box text-teal-600 text-xs"></i></div>
                            Circular Packaging Innovation
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-amber-600 text-xs"></i></div>
                            FMCG & Global Brand Investment
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">High Potential Segments</h3>
                    <p class="text-sm text-slate-600 mb-4">Industry opportunities across the plastic recycling chain:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-wine-bottle text-brand-primary text-xs"></i></div>
                            PET Bottle Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-scroll text-brand-primary text-xs"></i></div>
                            Flexible Film Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-brand-primary text-xs"></i></div>
                            Industrial Scrap Reprocessing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-utensils text-brand-primary text-xs"></i></div>
                            Food Grade rPET / rHDPE
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-fire text-brand-primary text-xs"></i></div>
                            Pyrolysis Fuel Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            Plastic Credit / EPR Marketplace
                        </div>
                    </div>
                </div>

            </div>

            <!-- WHY INDIA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/plastic-recycling.jpg') }}" alt="India Plastic Recycling Hub"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-800 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why India is a Global Recycling Hub</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Low processing cost
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Huge waste generation base
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Strong domestic consumption market
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Favorable government policy
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Growing export demand
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-blue-200 shrink-0"></i>
                            Rapid formalization of recycling sector
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">From Waste to Worth</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Plastic recycling is transforming <strong>waste into valuable raw materials</strong>, powering India's
                    circular economy revolution. With <strong>5,000+ recyclers</strong>, a <strong>60% recycling rate</strong>,
                    and a market projected to reach <strong>$9 Billion+</strong>, India is emerging as a
                    <strong>global leader in plastic sustainability</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
