@extends('layouts.website')

@section('title', 'Plastic Machinery Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/plastic-machinery.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Plastic Machinery Industry
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                Industrial equipment powering the entire plastics manufacturing ecosystem — from extrusion to recycling.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Plastic Machinery?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Plastic machinery</strong> refers to industrial equipment used for processing raw polymers
                        into finished plastic products. These machines convert plastic granules into <strong>films, sheets,
                        bottles, pipes, packaging materials, and molded components</strong> through processes such as
                        extrusion, injection molding, blow molding, and printing.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        The industry is the <strong>backbone of the plastics manufacturing ecosystem</strong>, enabling
                        large-scale production across packaging, automotive, construction, FMCG, and industrial sectors.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/plastic-machinery.jpg') }}" alt="Plastic Machinery"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- GLOBAL vs INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-primary to-indigo-700 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Plastic Machinery Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>~USD 42–45 Billion</strong></li>
                        <li>Projected (2031): <strong>~USD 60–65 Billion</strong></li>
                        <li>CAGR: <strong>~5–6%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Key Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising demand for plastic packaging worldwide</li>
                        <li>Growth of FMCG, e-commerce, and logistics industries</li>
                        <li>Expansion of automotive lightweight components</li>
                        <li>Increasing adoption of automation & Industry 4.0</li>
                        <li>Demand for energy-efficient and high-speed machinery</li>
                    </ul>
                </div>

                <!-- INDIA -->
                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Plastic Machinery Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>~USD 3.5–4.5 Billion</strong></li>
                        <li>Projected (2031): <strong>~USD 6–7 Billion</strong></li>
                        <li>CAGR: <strong>~7–8%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Market Highlights</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>One of the fastest-growing plastic machinery markets globally</li>
                        <li>High dependence on imports (China, Germany, Italy)</li>
                        <li>Rapid domestic manufacturing growth under Make in India</li>
                        <li>Strong demand from packaging, film extrusion, and recycling</li>
                        <li>Expansion of MSME-based plastic processing units</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">$42–45B</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">$3.5–4.5B</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">5–6%</h4>
                    <p class="text-sm text-slate-500 mt-1">Global CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">7–8%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- GLOBAL vs INDIA SHARE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/plastic-machinery.jpg') }}" alt="Plastic Machinery India"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-slate-900 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Global vs India Market Share</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-300">
                        <li>India contributes approx. <strong>8–10%</strong> of global plastic consumption</li>
                        <li>In plastic machinery manufacturing, India contributes only <strong>3–5%</strong> globally</li>
                        <li>High import dependency creates strong opportunity for local manufacturing</li>
                        <li>India is emerging as a <strong>high-growth machinery production hub</strong></li>
                    </ul>
                </div>

            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Growth (2026–2031)</h3>
                    <p class="text-sm text-slate-600 mb-3">Steady <strong>5–6% CAGR</strong> growth driven by:</p>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Smart factories and automation</li>
                        <li>Sustainable and energy-efficient machinery</li>
                        <li>Demand for high-speed packaging lines</li>
                        <li>Expansion in Asia-Pacific and Africa</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Growth (2026–2031)</h3>
                    <p class="text-sm text-slate-600 mb-3">Strong <strong>7–8% CAGR</strong> growth driven by:</p>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Packaging industry boom (BOPP, PET, CPP, Stretch film)</li>
                        <li>Recycling & circular economy machinery demand</li>
                        <li>Government support for manufacturing (Make in India)</li>
                        <li>Rising exports of plastic products</li>
                    </ul>
                </div>

            </div>

            <!-- KEY TYPES OF MACHINERY -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Types of Plastic Machinery</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-2xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Extrusion Machines</h4>
                        <ul class="text-xs text-slate-600 space-y-1 text-left list-disc pl-5">
                            <li>Film extrusion (BOPP, CPP, LLDPE, PET)</li>
                            <li>Sheet extrusion</li>
                            <li>Pipe & profile extrusion</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-syringe text-2xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Injection Molding</h4>
                        <ul class="text-xs text-slate-600 space-y-1 text-left list-disc pl-5">
                            <li>Packaging caps</li>
                            <li>Automotive parts</li>
                            <li>Household goods</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-bottle-water text-2xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Blow Molding</h4>
                        <ul class="text-xs text-slate-600 space-y-1 text-left list-disc pl-5">
                            <li>Bottles & containers</li>
                            <li>Jerry cans</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-rose-50 border border-rose-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-print text-2xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Printing & Converting</h4>
                        <ul class="text-xs text-slate-600 space-y-1 text-left list-disc pl-5">
                            <li>Rotogravure printing machines</li>
                            <li>Flexographic printing machines</li>
                            <li>Lamination & slitting machines</li>
                        </ul>
                    </div>

                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-2xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Recycling Machinery</h4>
                        <div class="grid sm:grid-cols-3 gap-4 mt-3">
                            <ul class="text-xs text-slate-600 space-y-1 text-left list-disc pl-5">
                                <li>PET bottle recycling lines</li>
                            </ul>
                            <ul class="text-xs text-slate-600 space-y-1 text-left list-disc pl-5">
                                <li>Plastic granulation & pelletizing systems</li>
                            </ul>
                            <ul class="text-xs text-slate-600 space-y-1 text-left list-disc pl-5">
                                <li>Washing & sorting plants</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- TRANSFORMATION TRENDS -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Transformation Trends</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Automation & AI-based production lines</li>
                        <li>Energy-efficient high-speed machines</li>
                        <li>Recycling-integrated machinery systems</li>
                        <li>Sustainable packaging production equipment</li>
                        <li>Smart Industry 4.0 connected machines</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">At a Glance (Quick Facts)</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>🌍 Global market: <strong>~USD 42–45 Billion</strong> (2025)</li>
                        <li>🇮🇳 India market: <strong>~USD 3.5–4.5 Billion</strong> (2025)</li>
                        <li>📈 Global CAGR: <strong>~5–6%</strong></li>
                        <li>📈 India CAGR: <strong>~7–8%</strong></li>
                        <li>📦 India import dependency: <strong>High (40–60% in key segments)</strong></li>
                        <li>📦 Packaging machinery = <strong>Largest segment</strong></li>
                        <li>♻️ Recycling machinery = <strong>Fastest growing segment</strong></li>
                    </ul>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    The plastic machinery industry is a <strong>high-growth global manufacturing sector</strong>
                    driving the entire plastics value chain. India is rapidly emerging as a <strong>strong demand hub
                    and manufacturing base</strong>, with significant opportunities in extrusion, packaging, printing,
                    and recycling machinery.
                </p>
            </div>

        </div>
    </section>

@endsection
