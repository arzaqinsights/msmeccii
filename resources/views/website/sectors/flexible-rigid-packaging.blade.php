@extends('layouts.website')

@section('title', 'Specialty Films & Packaging Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/flexible-rigid-packaging.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Specialty Films, Flexible & Rigid Packaging
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                Advanced packaging materials and solutions powering food, pharma, FMCG, and industrial sectors worldwide.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Specialty Films, Flexible & Rigid Packaging?</h2>
                    <p class="text-slate-600 mb-4 leading-relaxed">
                        <strong>Specialty Films, Flexible & Rigid Packaging</strong> refers to advanced packaging materials and solutions
                        used across food, beverage, pharmaceutical, FMCG, industrial, agriculture, and consumer goods
                        sectors for <strong>protection, preservation, branding, and transportation</strong> of products.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        The industry includes high-performance films, multilayer laminates, pouches, rigid containers,
                        bottles, trays, and thermoformed packaging solutions designed to enhance shelf life, convenience,
                        and product appeal.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/flexible-rigid-packaging.png') }}" alt="Flexible & Rigid Packaging"
                    class="h-[320px] w-full object-cover rounded-2xl shadow-lg">
            </div>

            <!-- SEGMENTS + GLOBAL -->
            <div class="grid md:grid-cols-2 gap-10">
                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Major Segments</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-film text-blue-600 text-xs"></i></div>
                            Specialty Barrier Films
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-layer-group text-violet-600 text-xs"></i></div>
                            BOPP / PET / CPP / PE Films
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bag-shopping text-amber-600 text-xs"></i></div>
                            Flexible Laminates & Pouches
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-box-open text-emerald-600 text-xs"></i></div>
                            Vacuum, Stretch & Shrink Films
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bottle-water text-rose-600 text-xs"></i></div>
                            PET / HDPE / PP Bottles & Containers
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-cubes text-sky-600 text-xs"></i></div>
                            Thermoformed & Injection Molded Packaging
                        </div>
                    </div>
                </div>
                <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-primary to-indigo-700 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Packaging Market at a Glance</h3>

                    <h4 class="font-semibold mt-4 mb-2">Worldwide Market Size</h4>
                    <ul class="text-sm space-y-2">
                        <li>Global Packaging Market: <strong>USD 1.2+ Trillion</strong> (2025)</li>
                        <li>Flexible Packaging Market: <strong>USD 300+ Billion</strong></li>
                        <li>Specialty Films Market: <strong>USD 45+ Billion</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Forecast (2026–2031)</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Expected CAGR: <strong>5–7%</strong> annually</li>
                        <li>E-commerce expansion</li>
                        <li>Rising food delivery & convenience packaging</li>
                        <li>Sustainable packaging innovations</li>
                        <li>Growth in pharmaceutical packaging</li>
                    </ul>
                </div>
            </div>

            <!-- IMAGE + GLOBAL GROWTH -->
            <div class="grid md:grid-cols-2 gap-10">
                <img src="{{ asset('images/sectors/packeging-1.jpeg') }}" alt="Packaging Growth"
                    class="h-[320px] w-full object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-white border shadow-sm">
                    <h4 class="text-xl font-bold mb-4">Global Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-2">
                        <li>E-commerce expansion</li>
                        <li>Rising food delivery and convenience packaging</li>
                        <li>Premium branding demand</li>
                        <li>Sustainable packaging innovations</li>
                        <li>Growth in pharmaceutical packaging</li>
                    </ul>
                </div>
            </div>

            <!-- INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Specialty Films & Packaging Market</h3>

                    <h4 class="font-semibold mb-2">Indian Market Size</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>India Packaging Industry: <strong>₹2.3–2.5 Lakh Crore+</strong></li>
                        <li>Flexible Packaging: <strong>₹55,000–65,000 Crore+</strong></li>
                        <li>Specialty Films rapidly expanding across sectors</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-primary to-indigo-700 text-white shadow-lg">
                    <h4 class="text-xl font-bold mb-4">Indian Growth Forecast (2026–2031)</h4>
                    <ul class="text-sm space-y-2">
                        <li>Expected CAGR: <strong>10–12%</strong> annually</li>
                        <li>India among the fastest-growing packaging markets globally</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Expected Market by 2031</h4>
                    <ul class="text-sm space-y-1">
                        <li>Projected to exceed <strong>₹4 Lakh Crore+</strong></li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">$1.2T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Packaging</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">₹2.5L Cr</h4>
                    <p class="text-sm text-slate-500 mt-1">India Packaging</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">10–12%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">10,000+</h4>
                    <p class="text-sm text-slate-500 mt-1">Manufacturers (IN)</p>
                </div>
            </div>

            <!-- INDUSTRY CAPACITY -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Capacity — India</h3>
                    <p class="text-sm text-slate-600 mb-3">Approx. <strong>10,000+</strong> packaging manufacturers/converters/processors across organized and SME sector.</p>

                    <h4 class="font-semibold mt-4 mb-2">Major Manufacturing Hubs</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-brand-primary text-xs"></i> Gujarat</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-brand-primary text-xs"></i> Maharashtra</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-brand-primary text-xs"></i> Delhi NCR</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-brand-primary text-xs"></i> Tamil Nadu</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-brand-primary text-xs"></i> Karnataka</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-brand-primary text-xs"></i> West Bengal</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Capacity</h3>
                    <p class="text-sm text-slate-600 mb-4">Estimated <strong>100,000+</strong> packaging manufacturers/processors globally.</p>

                    <h4 class="font-semibold mt-4 mb-2">India's Global Share</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>India contributes approx. <strong>4–5%</strong> to global packaging market</li>
                        <li>One of the fastest-growing packaging consumption markets</li>
                        <li>Rapid export growth in packaging films and laminates</li>
                    </ul>
                </div>

            </div>

            <!-- DRIVERS + TRENDS -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Key Market Drivers</h3>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-2">
                        <li>Expansion of FMCG and retail sector</li>
                        <li>Growth in food processing industry</li>
                        <li>Rising e-commerce and logistics packaging demand</li>
                        <li>Export growth in pharma and processed foods</li>
                        <li>Consumer demand for convenience and premium packaging</li>
                        <li>Sustainability and recyclable packaging push</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-2">
                        <li>Mono-material recyclable packaging</li>
                        <li>High-barrier sustainable films</li>
                        <li>Smart & active packaging technology</li>
                        <li>Compostable and biodegradable films</li>
                        <li>Digital printing on flexible packaging</li>
                        <li>Lightweight rigid packaging innovation</li>
                    </ul>
                </div>

            </div>

            <!-- OPPORTUNITIES + CONCLUSION -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">High Potential Segments</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-fire text-brand-primary text-xs"></i></div>
                            Retort & Barrier Packaging
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-utensils text-brand-primary text-xs"></i></div>
                            Food Grade Flexible Laminates
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-pills text-brand-primary text-xs"></i></div>
                            Pharma Blister & Strip Packaging
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-box text-brand-primary text-xs"></i></div>
                            Stand-Up / Spout Pouches
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            Sustainable Eco-Friendly Films
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl flex items-center shadow-lg">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Why India is Emerging as a Packaging Hub</h3>
                        <ul class="list-disc pl-5 space-y-2 text-sm text-slate-300">
                            <li>Massive domestic consumer market</li>
                            <li>Strong FMCG and pharma manufacturing base</li>
                            <li>Competitive conversion/manufacturing cost</li>
                            <li>Export competitiveness</li>
                            <li>Skilled technical and engineering workforce</li>
                            <li>Rapid infrastructure development</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection