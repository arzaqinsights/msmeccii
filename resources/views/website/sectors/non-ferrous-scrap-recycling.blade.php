@extends('layouts.website')

@section('title', 'Non-Ferrous & Scrap Recycling')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-zinc-800 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/non-ferrous-scrap-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Non-Ferrous & Scrap Recycling
            </h1>
            <p class="text-lg md:text-xl text-amber-300 font-semibold mb-2">Metals Reborn, Value Restored</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Collection, processing, and re-use of discarded non-iron metals and industrial scrap into valuable secondary raw materials for manufacturing.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Non-Ferrous & Scrap Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Non-Ferrous & Scrap Recycling</strong> refers to the collection, segregation, processing,
                        and re-use of discarded <strong>non-iron-based metals and industrial scrap</strong> materials
                        into valuable secondary raw materials for manufacturing and industrial use.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Recycling these metals <strong>reduces mining dependency, saves energy, lowers carbon emissions</strong>,
                        and supports circular manufacturing.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/non-ferrous-scrap-recycling.jpg') }}" alt="Non-Ferrous Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- METAL TYPES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Non-Ferrous Metal Types</h2>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-cube text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Aluminium</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-ring text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Copper</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-yellow-50 border border-yellow-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-yellow-100 flex items-center justify-center">
                            <i class="fa-solid fa-coins text-xl text-yellow-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Brass</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-slate-100 border border-slate-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-slate-200 flex items-center justify-center">
                            <i class="fa-solid fa-weight-hanging text-xl text-slate-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Lead</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-layer-group text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Zinc</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-circle-dot text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Nickel</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Stainless Steel Scrap</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-rose-50 border border-rose-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-microchip text-xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Electronic Metal Scrap</h4>
                    </div>
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-zinc-700 to-slate-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Non-Ferrous Recycling Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2026): <strong>USD 249+ Billion</strong></li>
                        <li>Expected to surpass <strong>USD 300 Billion</strong> by 2030</li>
                        <li>CAGR: <strong>4.5–6%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising industrial metal demand</li>
                        <li>Sustainability regulations</li>
                        <li>Higher virgin metal prices</li>
                        <li>Renewable energy and EV manufacturing</li>
                        <li>Circular economy adoption</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Scrap Recycling Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Total scrap ecosystem: <strong>₹5 Lakh Crore+</strong></li>
                        <li>Metal scrap market: <strong>₹34,000+ Crore</strong></li>
                        <li>CAGR: <strong>6–8%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Target by 2031</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Estimated to exceed <strong>₹50,000–60,000 Crore+</strong></li>
                        <li>Fastest growing market globally for non-ferrous recycling</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-amber-600">$249B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2026)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-amber-600">₹5L Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Scrap Ecosystem</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-amber-600">20K+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Recyclers/Traders</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-amber-600">5L+</h4>
                    <p class="text-sm text-slate-500 mt-1">Direct Jobs in India</p>
                </div>
            </div>

            <!-- INDIA CAPACITY + GLOBAL -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Scrap Recycling Capacity</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        Approx. <strong>15,000–20,000+ scrap dealers/recyclers/traders</strong> across organized and
                        informal sectors. Over <strong>5 lakh direct jobs</strong> in the ecosystem.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">Major Recycling Hubs</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-amber-500 text-xs"></i> Mumbai</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-amber-500 text-xs"></i> Delhi NCR</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-amber-500 text-xs"></i> Gujarat / Alang</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-amber-500 text-xs"></i> Chennai</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-amber-500 text-xs"></i> Kolkata</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-amber-500 text-xs"></i> Ludhiana</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Non-Ferrous Ecosystem</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>50,000+</strong> scrap processing facilities globally</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">India's Global Position</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Asia-Pacific holds <strong>largest market share</strong> globally</li>
                        <li>India becoming a major <strong>import-processing & secondary metal hub</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">Key Market Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Rising copper/aluminium demand in EVs & renewables</li>
                        <li>Infrastructure & construction demand</li>
                        <li>High import cost of virgin metals</li>
                        <li>Government circular economy push</li>
                        <li>Industrial sustainability mandates</li>
                        <li>E-waste & battery recycling growth</li>
                    </ul>
                </div>

            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-battery-full text-emerald-600 text-xs"></i></div>
                            Battery Metal Recycling Growth
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-violet-600 text-xs"></i></div>
                            AI & Automated Scrap Sorting
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gem text-orange-600 text-xs"></i></div>
                            High-Purity Copper/Aluminium Recovery
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-car-battery text-sky-600 text-xs"></i></div>
                            EV Battery Dismantling Ecosystem
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-yellow-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-microchip text-yellow-600 text-xs"></i></div>
                            Precious Metal Extraction from E-Waste
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-teal-600 text-xs"></i></div>
                            Integrated Recycling Parks
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">High Potential Segments</h3>
                    <p class="text-sm text-slate-600 mb-4">Industry opportunities across the scrap value chain:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-ring text-brand-primary text-xs"></i></div>
                            Copper Wire Recycling
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-cube text-brand-primary text-xs"></i></div>
                            Aluminium Scrap Processing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-coins text-brand-primary text-xs"></i></div>
                            Brass & Alloy Recovery
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-gem text-brand-primary text-xs"></i></div>
                            E-Waste Precious Metal Extraction
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-battery-full text-brand-primary text-xs"></i></div>
                            Lithium Battery Metal Recovery
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-ship text-brand-primary text-xs"></i></div>
                            Imported Scrap Sorting & Processing
                        </div>
                    </div>
                </div>

            </div>

            <!-- WHY INDIA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/non-ferrous-scrap-recycling.jpg') }}" alt="India Scrap Hub"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-zinc-700 to-slate-800 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why India is a Global Scrap Hub</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-300 shrink-0"></i>
                            Huge domestic industrial demand
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-300 shrink-0"></i>
                            Cost-effective labor and processing
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-300 shrink-0"></i>
                            Strategic import/export ports
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-300 shrink-0"></i>
                            Growing manufacturing sector
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-300 shrink-0"></i>
                            Strong infra/auto/electrical demand
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-300 shrink-0"></i>
                            Availability of unorganized scrap network
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Metals Reborn, Industries Empowered</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Non-ferrous and scrap recycling is the backbone of <strong>India's circular manufacturing economy</strong>.
                    With <strong>₹5 Lakh Crore+ ecosystem</strong>, over <strong>20,000+ recyclers</strong>, and
                    <strong>5 lakh+ direct jobs</strong>, this sector is driving sustainable industrial growth and
                    <strong>resource independence for the nation</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
