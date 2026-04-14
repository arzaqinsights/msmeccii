@extends('layouts.website')

@section('title', 'Biogas Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-lime-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/biogas-industry.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Biogas Industry
            </h1>
            <p class="text-lg md:text-xl text-lime-300 font-semibold mb-2">Clean Fuel from Organic Waste</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Renewable energy produced through anaerobic digestion of organic waste — powering electricity, heating, transport, and circular economy initiatives.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Biogas?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Biogas</strong> is a renewable energy source produced through the <strong>anaerobic digestion</strong>
                        of organic waste materials such as agricultural residue, food waste, animal manure, sewage sludge,
                        and industrial biodegradable waste.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It mainly contains methane and carbon dioxide and helps <strong>reduce greenhouse gas emissions,
                        manage waste effectively</strong>, and supports circular economy initiatives.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/biogas-industry.jpg') }}" alt="Biogas Industry"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- BIOGAS USES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Biogas Applications</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
                    <div class="p-5 rounded-2xl bg-lime-50 border border-lime-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-lime-100 flex items-center justify-center">
                            <i class="fa-solid fa-bolt text-xl text-lime-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Electricity Generation</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-fire text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Heating & Cooking</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Industrial Thermal</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-green-50 border border-green-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fa-solid fa-compress text-xl text-green-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">CBG Production</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-teal-50 border border-teal-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-teal-100 flex items-center justify-center">
                            <i class="fa-solid fa-car-side text-xl text-teal-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Transport Fuel</h4>
                    </div>
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-lime-600 to-green-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Biogas Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 75+ Billion</strong></li>
                        <li>Expected to exceed <strong>USD 120 Billion</strong> by 2032</li>
                        <li>CAGR: <strong>6–8%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising demand for renewable fuels</li>
                        <li>Government decarbonization policies</li>
                        <li>Waste-to-energy initiatives</li>
                        <li>Circular economy and ESG adoption</li>
                        <li>Biofuel blending mandates</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Biogas Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹12,000–15,000 Crore+</strong></li>
                        <li>Strong support under <strong>SATAT</strong> and waste-to-energy programs</li>
                        <li>CAGR: <strong>15–18%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Target by 2031</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Projected to exceed <strong>₹35,000–40,000 Crore+</strong></li>
                        <li>Among fastest growing bioenergy markets globally</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-lime-600">$75B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-lime-600">₹15K Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-lime-600">5,000+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Biogas Plants</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-lime-600">15–18%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- INDIA CAPACITY + GLOBAL -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Biogas Capacity</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        Over <strong>5,000+ operational plants</strong> including small and industrial units.
                        Huge untapped feedstock from agriculture and municipal waste.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">Major Growth States</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-lime-500 text-xs"></i> Punjab</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-lime-500 text-xs"></i> Haryana</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-lime-500 text-xs"></i> Uttar Pradesh</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-lime-500 text-xs"></i> Maharashtra</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-lime-500 text-xs"></i> Gujarat</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-lime-500 text-xs"></i> Karnataka</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Biogas Ecosystem</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>50,000+</strong> biogas plants globally</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">India's Global Position</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Emerging as one of the <strong>largest future biofuel markets</strong></li>
                        <li>Government aims for <strong>5,000+ CBG plants</strong> under SATAT</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">Key Market Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Rising fossil fuel costs</li>
                        <li>Government incentives and subsidies</li>
                        <li>Large agricultural residue availability</li>
                        <li>Urban waste management demand</li>
                        <li>Corporate ESG / carbon neutrality goals</li>
                        <li>Clean transportation fuel demand</li>
                    </ul>
                </div>

            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-lime-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-compress text-lime-600 text-xs"></i></div>
                            Compressed Biogas (CBG) Bottling Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gas-pump text-green-600 text-xs"></i></div>
                            Bio-CNG Fuel Stations
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-amber-600 text-xs"></i></div>
                            Waste-to-Energy Mega Projects
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-users text-teal-600 text-xs"></i></div>
                            Decentralized Community Digesters
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-coins text-violet-600 text-xs"></i></div>
                            Carbon Credit Linked Projects
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-seedling text-emerald-600 text-xs"></i></div>
                            Organic Fertilizer Byproduct Sales
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">High Potential Segments</h3>
                    <p class="text-sm text-slate-600 mb-4">Industry opportunities across the biogas value chain:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-brand-primary text-xs"></i></div>
                            CBG Plant Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-seedling text-brand-primary text-xs"></i></div>
                            Agricultural Waste Digestion
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-utensils text-brand-primary text-xs"></i></div>
                            Food Waste Processing Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-brand-primary text-xs"></i></div>
                            Industrial Waste Bio-Methanation
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-brand-primary text-xs"></i></div>
                            Municipal Waste-to-Energy Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            Organic Manure / Fertilizer Sales
                        </div>
                    </div>
                </div>

            </div>

            <!-- WHY INDIA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/biogas-industry.jpg') }}" alt="India Biogas Hub"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-lime-600 to-green-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why India is a Biogas Hub</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Massive biomass/agri-waste availability
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Strong government push for clean fuel
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Increasing private/public investments
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Large rural and industrial demand
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-lime-200 shrink-0"></i>
                            Supportive sustainability regulations
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">The Biogas Revolution is Here</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Biogas is transforming <strong>organic waste into clean energy</strong>, driving sustainable waste management
                    and reducing fossil fuel dependency. With India's <strong>SATAT initiative targeting 5,000+ CBG plants</strong>
                    and over <strong>50,000+ plants globally</strong>, the biogas industry represents a critical pillar of the
                    <strong>circular clean energy economy</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
