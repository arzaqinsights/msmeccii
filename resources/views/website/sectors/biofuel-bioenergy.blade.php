@extends('layouts.website')

@section('title', 'Biofuel / Bio Energy')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-green-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/biofuel.jpeg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Biofuel / Bio Energy
            </h1>
            <p class="text-lg md:text-xl text-green-300 font-semibold mb-2">Powering Tomorrow with Nature</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Renewable energy derived from biological and organic materials — sustainable alternatives to fossil fuels for power, transport, and industry.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Biofuel / Bio Energy?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Biofuel and Bio Energy</strong> refer to renewable energy sources derived from biological and
                        organic materials such as <strong>agricultural residue, biomass, vegetable oils, animal fats, municipal
                        waste, industrial waste, and algae</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        These sustainable fuels are used as alternatives to fossil fuels for <strong>power generation,
                        transportation, industrial heating, and chemical production</strong>.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/biofuel.jpeg') }}" alt="Biofuel Bio Energy"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- SEGMENTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Major Biofuel / Bio Energy Segments</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-green-50 border border-green-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-green-100 flex items-center justify-center">
                            <i class="fa-solid fa-flask text-xl text-green-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Ethanol Production</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-lime-50 border border-lime-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-lime-100 flex items-center justify-center">
                            <i class="fa-solid fa-gas-pump text-xl text-lime-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Biodiesel Manufacturing</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-bolt text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Biomass Power Gen</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-teal-50 border border-teal-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-teal-100 flex items-center justify-center">
                            <i class="fa-solid fa-fire-flame-curved text-xl text-teal-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Bio-CNG / Biogas</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Waste-to-Energy</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-cubes text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Pellet & Briquette Fuel</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-sky-50 border border-sky-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-plane text-xl text-sky-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Sustainable Aviation Fuel (SAF)</h4>
                    </div>
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-green-600 to-green-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Biofuel / Bio Energy Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Biofuel Market (2025): <strong>USD 180+ Billion</strong></li>
                        <li>Bioenergy Market: <strong>USD 350+ Billion+</strong></li>
                        <li>CAGR: <strong>7–10%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Carbon neutrality and decarbonization goals</li>
                        <li>Biofuel blending mandates</li>
                        <li>Sustainable transportation initiatives</li>
                        <li>Renewable power generation demand</li>
                        <li>Industrial clean energy adoption</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Biofuel Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹50,000–60,000 Crore+</strong></li>
                        <li>Expanding under <strong>National Bioenergy Mission</strong></li>
                        <li>CAGR: <strong>15–20%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Target by 2031</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Projected to exceed <strong>₹1.5 Lakh Crore+</strong></li>
                        <li>Ethanol blending target reaching <strong>20%+</strong></li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-green-600">$180B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Biofuel (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-green-600">₹60K Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-green-600">700+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Ethanol Plants</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-green-600">15–20%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- INDIA CAPACITY + GLOBAL -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Biofuel Capacity</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        Ethanol blending target reaching <strong>20%+</strong>. Over <strong>700+ ethanol/biofuel</strong>
                        production facilities. Strong biomass and agricultural waste availability nationwide.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">Major Biofuel States</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-green-500 text-xs"></i> Uttar Pradesh</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-green-500 text-xs"></i> Maharashtra</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-green-500 text-xs"></i> Punjab</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-green-500 text-xs"></i> Haryana</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-green-500 text-xs"></i> Gujarat</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-green-500 text-xs"></i> Karnataka</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Bio Energy</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>100,000+</strong> bioenergy & biofuel plants globally</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">India's Global Position</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>One of the <strong>fastest-growing</strong> biofuel markets globally</li>
                        <li>Emerging leader in <strong>ethanol blending & biomass energy</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">Key Market Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Government blending mandates</li>
                        <li>Rising fossil fuel prices</li>
                        <li>Agricultural waste utilization</li>
                        <li>Energy security concerns</li>
                        <li>Corporate ESG / carbon targets</li>
                        <li>Sustainable aviation fuel demand</li>
                    </ul>
                </div>

            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-flask text-green-600 text-xs"></i></div>
                            2G / 3G Ethanol Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-plane text-sky-600 text-xs"></i></div>
                            Sustainable Aviation Fuel (SAF)
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-droplet text-emerald-600 text-xs"></i></div>
                            Green Methanol Production
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-orange-600 text-xs"></i></div>
                            Waste-to-Biofuel Refineries
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-atom text-teal-600 text-xs"></i></div>
                            Bio-Hydrogen Production
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-coins text-amber-600 text-xs"></i></div>
                            Carbon Credit Linked Bio Projects
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">High Potential Segments</h3>
                    <p class="text-sm text-slate-600 mb-4">Industry opportunities across the biofuel value chain:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-flask text-brand-primary text-xs"></i></div>
                            Ethanol Distilleries
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-gas-pump text-brand-primary text-xs"></i></div>
                            Biodiesel Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-cubes text-brand-primary text-xs"></i></div>
                            Biomass Pellet Manufacturing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-brand-primary text-xs"></i></div>
                            Waste-to-Energy Projects
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-plane text-brand-primary text-xs"></i></div>
                            Aviation Biofuel Production
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-fire-flame-curved text-brand-primary text-xs"></i></div>
                            Bio-CNG Infrastructure
                        </div>
                    </div>
                </div>

            </div>

            <!-- WHY INDIA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/biofuel.jpeg') }}" alt="India Bio Energy Hub"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-green-600 to-emerald-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why India is a Bio Energy Hub</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Huge agricultural residue availability
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Strong government incentives
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Growing domestic energy demand
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Rapid industrialization
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-green-200 shrink-0"></i>
                            Global push for alternative fuels
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">The Bio Energy Revolution</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Biofuel and bio energy are powering the <strong>transition from fossil fuels to sustainable energy</strong>.
                    With India's <strong>20%+ ethanol blending target</strong> and over <strong>700+ production facilities</strong>,
                    the bio energy sector represents one of the most significant <strong>clean energy opportunities of our time</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
