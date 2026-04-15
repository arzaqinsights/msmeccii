@extends('layouts.website')

@section('title', 'Hydrogen')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-sky-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/hydrogen-industry.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Hydrogen
            </h1>
            <p class="text-lg md:text-xl text-sky-300 font-semibold mb-2">The Fuel of the Future</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Clean and versatile energy carrier powering decarbonization across power generation, industry, mobility, and energy storage.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Hydrogen Energy?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Hydrogen</strong> is a clean and versatile energy carrier used for <strong>power generation,
                        industrial processes, mobility, and energy storage</strong>. It is considered one of the most promising
                        fuels for achieving global decarbonization and net-zero emissions.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Hydrogen can be produced through various methods including <strong>electrolysis, natural gas reforming,
                        biomass conversion</strong>, and industrial by-product recovery.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/hydrogen-industry.jpg') }}" alt="Hydrogen Industry"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- HYDROGEN SEGMENTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Major Hydrogen Segments</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-leaf text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Green Hydrogen</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-droplet text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Blue Hydrogen</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-slate-100 border border-slate-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-slate-200 flex items-center justify-center">
                            <i class="fa-solid fa-smog text-xl text-slate-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Grey Hydrogen</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-bolt text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Hydrogen Fuel Cells</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-database text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Hydrogen Storage</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-sky-50 border border-sky-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-car-side text-xl text-sky-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Hydrogen Mobility</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-rose-50 border border-rose-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Industrial Hydrogen Applications</h4>
                    </div>
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-sky-600 to-sky-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Hydrogen Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 230+ Billion</strong></li>
                        <li>Expected to exceed <strong>USD 410 Billion</strong> by 2032</li>
                        <li>CAGR: <strong>9–12%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Net-zero and decarbonization commitments</li>
                        <li>Industrial fuel replacement demand</li>
                        <li>Green mobility initiatives</li>
                        <li>Heavy industry decarbonization</li>
                        <li>Government hydrogen missions and subsidies</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Hydrogen Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹25,000–30,000 Crore+</strong> (emerging)</li>
                        <li>Massive investments under <strong>National Green Hydrogen Mission</strong></li>
                        <li>CAGR: <strong>25–30%</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Target by 2031</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Projected to exceed <strong>₹1.5 Lakh Crore+</strong></li>
                        <li>Among fastest growing clean energy sectors</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-sky-600">$230B+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-sky-600">₹30K Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-sky-600">5 MMT</h4>
                    <p class="text-sm text-slate-500 mt-1">India Green H₂ Target (2030)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-sky-600">25–30%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- INDIA CAPACITY + GLOBAL -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Hydrogen Capacity</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        Government target: <strong>5 Million Metric Tons</strong> of Green Hydrogen annually by 2030.
                        Multi-billion-dollar projects announced by major corporates.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">Major Development States</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-sky-500 text-xs"></i> Gujarat</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-sky-500 text-xs"></i> Rajasthan</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-sky-500 text-xs"></i> Maharashtra</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-sky-500 text-xs"></i> Tamil Nadu</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-sky-500 text-xs"></i> Odisha</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-map-pin text-sky-500 text-xs"></i> Andhra Pradesh</div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Hydrogen Production</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Global production exceeds <strong>90 Million Metric Tons</strong> annually</li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">India's Global Position</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Aims to become <strong>lowest-cost producer</strong> of green hydrogen globally</li>
                        <li>Strategic focus on exports to <strong>Europe, Japan, and Korea</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-4 mb-2">Key Market Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Strong government policy support</li>
                        <li>Falling renewable electricity costs</li>
                        <li>Industrial decarbonization pressure</li>
                        <li>Export opportunities in green fuel</li>
                        <li>Steel, refinery, fertilizer demand</li>
                    </ul>
                </div>

            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-emerald-600 text-xs"></i></div>
                            Green Hydrogen Mega Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-car-side text-sky-600 text-xs"></i></div>
                            Hydrogen Fuel Cell Vehicles
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-pipe-section text-amber-600 text-xs"></i></div>
                            Hydrogen Blending in Gas Networks
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-ship text-violet-600 text-xs"></i></div>
                            Ammonia Export Projects
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-gas-pump text-blue-600 text-xs"></i></div>
                            Hydrogen Refueling Infrastructure
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-wind text-teal-600 text-xs"></i></div>
                            Offshore Renewable Powered H₂ Production
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">High Potential Segments</h3>
                    <p class="text-sm text-slate-600 mb-4">Industry opportunities across the hydrogen value chain:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-gears text-brand-primary text-xs"></i></div>
                            Electrolyzer Manufacturing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-database text-brand-primary text-xs"></i></div>
                            Hydrogen Storage & Transportation
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-brand-primary text-xs"></i></div>
                            Fuel Cell Manufacturing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-flask text-brand-primary text-xs"></i></div>
                            Green Ammonia Production
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-brand-primary text-xs"></i></div>
                            Hydrogen Infrastructure Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-industry text-brand-primary text-xs"></i></div>
                            Industrial Hydrogen Conversion
                        </div>
                    </div>
                </div>

            </div>

            <!-- WHY INDIA -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/hydrogen-industry.jpg') }}" alt="India Hydrogen Hub"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-sky-600 to-blue-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why India is Emerging as a Hydrogen Hub</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Low-cost solar/wind energy availability
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Strong industrial demand base
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Government incentives and policy support
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Export competitiveness
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-check-circle text-sky-200 shrink-0"></i>
                            Strategic global partnerships
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">The Hydrogen Economy is Here</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Hydrogen is rapidly emerging as a <strong>game-changing clean energy solution</strong> for global
                    decarbonization. With India's ambitious <strong>5 MMT Green Hydrogen target by 2030</strong> and
                    massive global investments, the hydrogen economy represents one of the most significant
                    <strong>industrial transformations of our generation</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
