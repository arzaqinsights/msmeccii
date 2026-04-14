@extends('layouts.website')

@section('title', 'Packaging Machinery Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-violet-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/packaging-machinery.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Packaging Machinery Industry
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                Industrial equipment powering the global packaging ecosystem — from film extrusion to printing, converting, and molding.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Packaging Machinery?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Packaging machinery</strong> refers to a wide range of industrial equipment used to convert raw plastic
                        polymers into finished packaging products such as <strong>films, pouches, bottles, containers, and labels</strong>.
                        These machines are essential for producing flexible and rigid packaging used across FMCG, food, pharma,
                        logistics, agriculture, and industrial sectors.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        The industry includes <strong>film production, printing, converting, molding, and finishing machinery</strong>
                        that forms the backbone of the global packaging ecosystem.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/packaging-machinery.jpg') }}" alt="Packaging Machinery"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- GLOBAL vs INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-6 rounded-2xl bg-gradient-to-br from-violet-600 to-violet-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Packaging Machinery Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>~USD 55–60 Billion</strong></li>
                        <li>Projected (2031): <strong>~USD 80–90 Billion</strong></li>
                        <li>CAGR: <strong>~5–6%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Key Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising global demand for packaged food & FMCG</li>
                        <li>Growth of e-commerce and logistics packaging</li>
                        <li>Expansion of flexible packaging (films, laminates, pouches)</li>
                        <li>Rapid industrialization in Asia-Pacific & Africa</li>
                        <li>Shift toward automation and high-speed production</li>
                    </ul>
                </div>

                <!-- INDIA -->
                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Packaging Machinery Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>~USD 6–8 Billion</strong></li>
                        <li>Projected (2031): <strong>~USD 10–12 Billion</strong></li>
                        <li>CAGR: <strong>~7–9%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Highlights</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>One of the fastest-growing packaging machinery markets</li>
                        <li>Strong demand from FMCG, food, pharma, e-commerce</li>
                        <li>High import dependence in advanced segments</li>
                        <li>Rapid domestic growth under Make in India</li>
                        <li>MSME clusters across Gujarat, Maharashtra, TN, NCR</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-violet-600">$55–60B</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-violet-600">$6–8B</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-violet-600">5–6%</h4>
                    <p class="text-sm text-slate-500 mt-1">Global CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-violet-600">7–9%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- GLOBAL vs INDIA SHARE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/packaging-machinery.jpg') }}" alt="Packaging Machinery Share"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-slate-900 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Global vs India Market Share</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-300">
                        <li>India contributes approx. <strong>6–8%</strong> of global packaging consumption</li>
                        <li>In packaging machinery manufacturing, India holds about <strong>4–6%</strong> global share</li>
                        <li>Flexible packaging dominates over rigid packaging in growth rate</li>
                        <li>India is emerging as a <strong>key manufacturing and export hub</strong> in Asia</li>
                    </ul>
                </div>

            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Growth (2026–2031)</h3>
                    <p class="text-sm text-slate-600 mb-3">Steady <strong>5–6% CAGR</strong> expansion driven by:</p>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Smart packaging systems</li>
                        <li>Sustainable and recyclable packaging demand</li>
                        <li>High-speed automation lines</li>
                        <li>Growth in flexible film packaging</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Growth (2026–2031)</h3>
                    <p class="text-sm text-slate-600 mb-3">Strong <strong>7–9% CAGR</strong> growth driven by:</p>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Packaging boom in FMCG & food delivery</li>
                        <li>Expansion of export-oriented packaging units</li>
                        <li>Recycling & circular economy integration</li>
                        <li>Growth of domestic machinery manufacturing clusters</li>
                    </ul>
                </div>

            </div>

            <!-- KEY MACHINERY SEGMENTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Packaging Machinery Segments</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-blue-50 border border-blue-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-2xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Film Extrusion Machinery</h4>
                        <ul class="text-xs text-slate-600 space-y-1 list-disc pl-4">
                            <li>Stretch Film (LLDPE) machines</li>
                            <li>PET film extrusion lines</li>
                            <li>BOPP film lines</li>
                            <li>CPP cast film machines</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-violet-50 border border-violet-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-print text-2xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Printing Machinery</h4>
                        <ul class="text-xs text-slate-600 space-y-1 list-disc pl-4">
                            <li>Rotogravure printing machines</li>
                            <li>Flexographic printing systems</li>
                            <li>High-speed multi-color printing lines</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-scissors text-2xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Converting Machinery</h4>
                        <ul class="text-xs text-slate-600 space-y-1 list-disc pl-4">
                            <li>Slitter rewinder machines</li>
                            <li>Automatic winding machines</li>
                            <li>Lamination & pouch-making systems</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-sky-50 border border-sky-200">
                        <div class="w-14 h-14 mb-4 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-wand-sparkles text-2xl text-sky-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Metallizing Machinery</h4>
                        <ul class="text-xs text-slate-600 space-y-1 list-disc pl-4">
                            <li>Vacuum metallizers for BOPP & PET films</li>
                            <li>Used for barrier & reflective packaging films</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-rose-50 border border-rose-200 sm:col-span-2 lg:col-span-2">
                        <div class="w-14 h-14 mb-4 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-cubes text-2xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Molding Machinery</h4>
                        <div class="grid sm:grid-cols-3 gap-4 mt-3">
                            <ul class="text-xs text-slate-600 space-y-1 list-disc pl-4">
                                <li>Injection molding (caps, closures, containers)</li>
                            </ul>
                            <ul class="text-xs text-slate-600 space-y-1 list-disc pl-4">
                                <li>Blow molding (bottles, jars)</li>
                            </ul>
                            <ul class="text-xs text-slate-600 space-y-1 list-disc pl-4">
                                <li>Rotational molding (large containers, tanks)</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- VALUE CHAIN -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Industry Value Chain Flow</h2>
                <div class="flex flex-col md:flex-row items-center justify-between gap-3">
                    <div class="flex-1 text-center p-5 rounded-2xl bg-violet-50 border border-violet-200">
                        <div class="w-10 h-10 mx-auto mb-2 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-1 text-sm text-violet-600 font-black"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Extrusion</h4>
                        <p class="text-[11px] text-slate-500 mt-1">Stretch, PET, BOPP, CPP films</p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-slate-300 hidden md:block"></i>
                    <i class="fa-solid fa-arrow-down text-slate-300 md:hidden"></i>
                    <div class="flex-1 text-center p-5 rounded-2xl bg-blue-50 border border-blue-200">
                        <div class="w-10 h-10 mx-auto mb-2 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-2 text-sm text-blue-600 font-black"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Printing</h4>
                        <p class="text-[11px] text-slate-500 mt-1">Rotogravure / Flexographic</p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-slate-300 hidden md:block"></i>
                    <i class="fa-solid fa-arrow-down text-slate-300 md:hidden"></i>
                    <div class="flex-1 text-center p-5 rounded-2xl bg-sky-50 border border-sky-200">
                        <div class="w-10 h-10 mx-auto mb-2 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-3 text-sm text-sky-600 font-black"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Metallizing</h4>
                        <p class="text-[11px] text-slate-500 mt-1">PET/BOPP film coating</p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-slate-300 hidden md:block"></i>
                    <i class="fa-solid fa-arrow-down text-slate-300 md:hidden"></i>
                    <div class="flex-1 text-center p-5 rounded-2xl bg-amber-50 border border-amber-200">
                        <div class="w-10 h-10 mx-auto mb-2 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-4 text-sm text-amber-600 font-black"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Converting</h4>
                        <p class="text-[11px] text-slate-500 mt-1">Slitting, rewinding, pouches</p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-slate-300 hidden md:block"></i>
                    <i class="fa-solid fa-arrow-down text-slate-300 md:hidden"></i>
                    <div class="flex-1 text-center p-5 rounded-2xl bg-rose-50 border border-rose-200">
                        <div class="w-10 h-10 mx-auto mb-2 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-5 text-sm text-rose-600 font-black"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Molding</h4>
                        <p class="text-[11px] text-slate-500 mt-1">Injection / Blow / Roto</p>
                    </div>
                </div>
            </div>

            <!-- TRANSFORMATION + QUICK FACTS -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Transformation Trends</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-violet-600 text-xs"></i></div>
                            Automation & AI-driven production lines
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-emerald-600 text-xs"></i></div>
                            High-speed energy-efficient machinery
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-blue-600 text-xs"></i></div>
                            Recycling-integrated packaging systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-green-600 text-xs"></i></div>
                            Sustainable & biodegradable packaging solutions
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-wifi text-amber-600 text-xs"></i></div>
                            Smart factory & Industry 4.0 adoption
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">At a Glance (Quick Facts)</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>🌍 Global market: <strong>~USD 55–60 Billion</strong> (2025)</li>
                        <li>🇮🇳 India market: <strong>~USD 6–8 Billion</strong> (2025)</li>
                        <li>📈 Global CAGR: <strong>~5–6%</strong></li>
                        <li>📈 India CAGR: <strong>~7–9%</strong></li>
                        <li>📦 Flexible packaging = <strong>Fastest growing segment</strong></li>
                        <li>🚢 High import dependence in advanced machinery</li>
                        <li>♻️ Recycling + sustainable machinery = <strong>Fastest emerging segment</strong></li>
                    </ul>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    The packaging machinery industry is a <strong>core pillar of global manufacturing</strong>, enabling the production
                    of essential packaging across every sector. With rapid growth in flexible packaging, automation, and sustainability,
                    <strong>India is emerging as a high-potential global hub</strong> for both consumption and manufacturing of advanced
                    packaging machinery.
                </p>
            </div>

        </div>
    </section>

@endsection
