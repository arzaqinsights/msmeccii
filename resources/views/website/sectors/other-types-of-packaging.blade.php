@extends('layouts.website')

@section('title', 'Other Types of Packaging')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/other-types-of-packaging.webp') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Other Types of Packaging Industry
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                Industrial, protective, retail, luxury, transport, and sustainable packaging solutions across all sectors.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What are Other Types of Packaging?</h2>
                    <p class="text-slate-600 mb-4 leading-relaxed">
                        <strong>Other Types of Packaging</strong> include a wide range of industrial, protective, retail, luxury, transport,
                        and sustainable packaging solutions used across manufacturing, logistics, e-commerce, FMCG,
                        pharmaceuticals, electronics, agriculture, and consumer industries.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        These packaging solutions are designed for <strong>product safety, branding, storage, transportation, and
                        enhanced consumer experience</strong>.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/other-types-of-packaging.webp') }}" alt="Other Types of Packaging"
                    class="h-[320px] w-full object-cover rounded-2xl shadow-lg">
            </div>

            <!-- CATEGORIES + IMAGE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Major Packaging Categories</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-box-open text-amber-600 text-xs"></i></div>
                            Corrugated & Paper Packaging
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gift text-violet-600 text-xs"></i></div>
                            Cartons & Folding Boxes
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gem text-rose-600 text-xs"></i></div>
                            Luxury / Premium Packaging
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-blue-600 text-xs"></i></div>
                            Industrial Bulk Packaging
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-shield-halved text-emerald-600 text-xs"></i></div>
                            Protective / Cushioning Packaging
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-tree text-orange-600 text-xs"></i></div>
                            Wooden / Pallet Packaging
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-slate-200 flex items-center justify-center shrink-0"><i class="fa-solid fa-can-food text-slate-600 text-xs"></i></div>
                            Metal / Tin & Glass Packaging
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-green-600 text-xs"></i></div>
                            Sustainable / Eco-Friendly Packaging
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/other-types-of-packaging-1.jpg') }}" alt="Packaging Categories"
                    class="h-[420px] w-full object-cover rounded-2xl shadow-lg">
            </div>

            <!-- GLOBAL MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-primary to-indigo-700 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Packaging Industry</h3>

                    <h4 class="font-semibold mt-3 mb-2">Worldwide Market Size</h4>
                    <ul class="text-sm space-y-1">
                        <li>Global packaging: <strong>USD 1.2+ Trillion</strong> (2025)</li>
                        <li>Paper & Board Packaging: <strong>USD 400+ Billion</strong></li>
                        <li>Protective Packaging: <strong>USD 35+ Billion</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Forecast (2026–2031)</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Expected CAGR: <strong>5–6%</strong></li>
                        <li>E-commerce expansion</li>
                        <li>Retail packaging innovation</li>
                        <li>Sustainable material demand</li>
                        <li>Premium/luxury product branding</li>
                    </ul>
                </div>

                <img src="{{ asset('images/sectors/other-types-of-packaging-2.jpg') }}" alt="Global Packaging"
                    class="h-[350px] w-full object-cover rounded-2xl shadow-md">

            </div>

            <!-- INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Other Packaging Market</h3>

                    <h4 class="font-semibold mb-2">Indian Market Size</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Paper/corrugated/industrial packaging: <strong>₹80,000–90,000 Crore+</strong></li>
                        <li>Luxury and premium packaging rapidly growing</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Forecast (2026–2031)</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Expected CAGR: <strong>8–11%</strong> annually</li>
                        <li>Projected to exceed <strong>₹1.5 Lakh Crore+</strong> by 2031</li>
                    </ul>
                </div>

                <img src="{{ asset('images/sectors/other-types-of-packaging-3.jpg') }}" alt="India Packaging"
                    class="h-[300px] w-full object-cover rounded-2xl shadow-md">

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">$1.2T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">₹90K Cr</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">5–6%</h4>
                    <p class="text-sm text-slate-500 mt-1">Global CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">8–11%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- PRODUCTS SECTION -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">Packaging Products & Solutions</h2>
                    <p class="text-slate-600 mb-4 leading-relaxed">
                        Packaging Products & Solutions include a broad range of <strong>protective, storage, preservation, branding, and
                        transportation materials</strong> designed for industrial, retail, food, pharmaceutical, FMCG, and logistics
                        applications.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Modern packaging not only protects products from damage and contamination but also enhances shelf life,
                        improves visual appeal, and strengthens brand identity.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h4 class="font-bold mb-3">Major Products Include</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-circle text-brand-primary text-[6px]"></i> Protective Films</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-circle text-brand-primary text-[6px]"></i> Glass Bottles & Jars</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-circle text-brand-primary text-[6px]"></i> Protective Plastic Bags</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-circle text-brand-primary text-[6px]"></i> Metal / Tin Cans</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-circle text-brand-primary text-[6px]"></i> Flexible Wrappers</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-circle text-brand-primary text-[6px]"></i> Blister Packs</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-circle text-brand-primary text-[6px]"></i> Flexible Pouches</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-circle text-brand-primary text-[6px]"></i> Kraft Paper Wraps</div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why India is Emerging as a Packaging Hub</h3>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-3xl mx-auto mt-6 text-left">
                    <div class="flex items-start gap-3 text-sm text-slate-300">
                        <i class="fa-solid fa-check-circle text-emerald-400 mt-0.5 shrink-0"></i>
                        Large domestic demand base
                    </div>
                    <div class="flex items-start gap-3 text-sm text-slate-300">
                        <i class="fa-solid fa-check-circle text-emerald-400 mt-0.5 shrink-0"></i>
                        Low-cost manufacturing ecosystem
                    </div>
                    <div class="flex items-start gap-3 text-sm text-slate-300">
                        <i class="fa-solid fa-check-circle text-emerald-400 mt-0.5 shrink-0"></i>
                        Growth in organized retail & exports
                    </div>
                    <div class="flex items-start gap-3 text-sm text-slate-300">
                        <i class="fa-solid fa-check-circle text-emerald-400 mt-0.5 shrink-0"></i>
                        Strong printing/conversion infrastructure
                    </div>
                    <div class="flex items-start gap-3 text-sm text-slate-300">
                        <i class="fa-solid fa-check-circle text-emerald-400 mt-0.5 shrink-0"></i>
                        Govt. push for sustainable alternatives
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection