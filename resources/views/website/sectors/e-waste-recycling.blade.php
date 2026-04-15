@extends('layouts.website')

@section('title', 'E-Waste Recycling')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/e-waste-recycling.jpeg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                E-Waste Recycling
            </h1>
            <p class="text-lg md:text-xl text-yellow-300 font-semibold mb-2">Mining the Urban Goldmine</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Collection, dismantling, and recovery of valuable materials from discarded electronics — turning e-waste into precious resources.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is E-Waste Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>E-Waste Recycling</strong> refers to the collection, dismantling, segregation, processing,
                        and recovery of valuable materials from discarded electrical and electronic equipment such as
                        <strong>computers, mobile phones, batteries, appliances, cables, circuit boards</strong>, and
                        industrial electronics.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        The process helps <strong>recover precious and base metals</strong> while reducing hazardous
                        landfill waste and environmental pollution.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/e-waste-recycling.jpeg') }}" alt="E-Waste Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- PROCESS STEPS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">E-Waste Recycling Process</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
                    <div class="p-5 rounded-2xl bg-yellow-50 border border-yellow-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-yellow-100 flex items-center justify-center">
                            <i class="fa-solid fa-truck-ramp-box text-xl text-yellow-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Collection</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-screwdriver-wrench text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Dismantling</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-gears text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Shredding</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Material Recovery</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-gem text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Precious Metal Extraction</h4>
                    </div>
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-yellow-600 to-amber-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global E-Waste Recycling Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 68–70 Billion</strong></li>
                        <li>Expected to surpass <strong>USD 110 Billion</strong> by 2032</li>
                        <li>CAGR: <strong>8–10%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rapid electronics consumption</li>
                        <li>Shorter product lifecycle</li>
                        <li>Data center and IT hardware upgrades</li>
                        <li>Sustainability and compliance mandates</li>
                        <li>Precious metal recovery demand</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian E-Waste Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹8,000–10,000 Crore+</strong></li>
                        <li>India among <strong>Top 5 E-Waste generating nations</strong> globally</li>
                        <li>CAGR: <strong>14–18%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Target by 2031</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Projected to exceed <strong>₹20,000–25,000 Crore+</strong></li>
                        <li>Fastest-growing recycling sectors due to digitalization</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-yellow-600">$70B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-yellow-600">₹10K Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-yellow-600">5M+ MT</h4>
                    <p class="text-sm text-slate-500 mt-1">India Annual E-Waste</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-yellow-600">14–18%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- INDIA CAPACITY + GLOBAL -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India E-Waste Capacity</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        Approx. <strong>500+ authorized e-waste recyclers/dismantlers</strong> registered with CPCB/SPCB.
                        India generates <strong>5+ Million Metric Tons</strong> of e-waste annually.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">Major Recycling Hubs</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-yellow-500 text-xs"></i> Delhi NCR</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-yellow-500 text-xs"></i> Mumbai</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-yellow-500 text-xs"></i> Bengaluru</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-yellow-500 text-xs"></i> Chennai</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-yellow-500 text-xs"></i> Hyderabad</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-yellow-500 text-xs"></i> Pune</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global E-Waste Ecosystem</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>20,000+</strong> e-waste recyclers/processors globally</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">India's Global Position</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Major contributor to <strong>Asia-Pacific recycling ecosystem</strong></li>
                        <li>Becoming a hub for <strong>electronics dismantling & metal recovery</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">Key Market Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Massive smartphone/laptop/appliance consumption</li>
                        <li>Rapid technology obsolescence</li>
                        <li>High value recovery of gold, silver, copper, palladium</li>
                        <li>Government E-Waste Management Rules / EPR mandates</li>
                        <li>Rising corporate ESG initiatives</li>
                    </ul>
                </div>

            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-violet-600 text-xs"></i></div>
                            AI-Based Automated Dismantling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-battery-full text-emerald-600 text-xs"></i></div>
                            Lithium Battery Recycling Integration
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-yellow-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gem text-yellow-600 text-xs"></i></div>
                            Precious Metal Refinery Expansion
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-city text-amber-600 text-xs"></i></div>
                            Urban Mining Growth
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-blue-600 text-xs"></i></div>
                            Circular Electronics Manufacturing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-shield-halved text-rose-600 text-xs"></i></div>
                            IT Asset Disposition (ITAD) Solutions
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">High Potential Segments</h3>
                    <p class="text-sm text-slate-600 mb-4">Industry opportunities across the e-waste value chain:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-gem text-brand-primary text-xs"></i></div>
                            Precious Metal Recovery
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-microchip text-brand-primary text-xs"></i></div>
                            PCB Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-battery-full text-brand-primary text-xs"></i></div>
                            Battery Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-mobile-screen text-brand-primary text-xs"></i></div>
                            Mobile / IT Device Refurbishment
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-shield-halved text-brand-primary text-xs"></i></div>
                            Data Destruction Services
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-truck-ramp-box text-brand-primary text-xs"></i></div>
                            Reverse Logistics & Collection Networks
                        </div>
                    </div>
                </div>

            </div>

            <!-- WHY INDIA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/e-waste-recycling.jpeg') }}" alt="India E-Waste Hub"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-yellow-600 to-amber-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why India is an E-Waste Recycling Hub</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-yellow-200 shrink-0"></i>
                            Massive domestic electronics market
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-yellow-200 shrink-0"></i>
                            Cost-effective processing ecosystem
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-yellow-200 shrink-0"></i>
                            Strong availability of skilled technical labor
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-yellow-200 shrink-0"></i>
                            Government-backed formalization of sector
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-yellow-200 shrink-0"></i>
                            Increasing investor interest in urban mining
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">The Urban Mining Revolution</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    E-waste recycling is transforming <strong>discarded electronics into valuable resources</strong>.
                    With India generating <strong>5+ Million Metric Tons annually</strong> and over <strong>500+ authorized
                    recyclers</strong>, the sector represents one of the most significant opportunities in
                    <strong>urban mining and circular economy</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
