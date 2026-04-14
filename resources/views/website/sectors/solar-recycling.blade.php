@extends('layouts.website')

@section('title', 'Solar Panel Recycling Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-yellow-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/solar-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Solar Panel Recycling
            </h1>
            <p class="text-lg md:text-xl text-amber-300 font-semibold mb-2">Global & India Market Overview</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Recovering valuable materials from end-of-life solar panels to power the circular clean energy economy.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Solar Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Solar recycling</strong> refers to the process of recovering valuable materials from end-of-life
                        solar panels such as <strong>glass, aluminum, silicon, silver, and copper</strong>. These materials are then
                        reused in new solar panels or other industries.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Solar panels typically last <strong>25–30 years</strong>, and with massive global installations over the last
                        decade, solar waste is now becoming a fast-growing segment of the <strong>circular clean energy economy</strong>.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/solar-recycling.jpg') }}" alt="Solar Panel Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- KEY RECYCLING PROCESSES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Recycling Processes</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-gears text-2xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm mb-1">Mechanical Dismantling</h4>
                        <p class="text-xs text-slate-500">Glass, aluminum frame recovery</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-fire text-2xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm mb-1">Thermal Treatment</h4>
                        <p class="text-xs text-slate-500">Separation of layers</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-flask text-2xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm mb-1">Chemical Recovery</h4>
                        <p class="text-xs text-slate-500">Silicon, silver extraction</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-robot text-2xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm mb-1">Automated PV Systems</h4>
                        <p class="text-xs text-slate-500">Advanced recycling tech</p>
                    </div>
                </div>
            </div>

            <!-- GLOBAL vs INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-amber-500 to-amber-700 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Solar Recycling Market</h3>
                    <p class="text-sm text-amber-100 mb-4">
                        The solar panel recycling industry is still at an early stage but growing rapidly due to rising
                        solar installations worldwide.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>~USD 384–422 Million</strong></li>
                        <li>Projected (2031–2033): <strong>~USD 610–718 Million</strong></li>
                        <li>CAGR: <strong>~6%–9%+</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Key Global Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rapid expansion of installed solar capacity</li>
                        <li>EU WEEE & US recycling regulations</li>
                        <li>Rising recovery value of silver, silicon, aluminum</li>
                        <li>Corporate ESG & circular economy mandates</li>
                        <li>Emerging "urban mining" business models</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Solar Recycling Market</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        India is an emerging but high-potential market due to rapid solar expansion and upcoming
                        end-of-life panel volumes.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>~USD 5.3 Million</strong></li>
                        <li>Forecast (2030–2034): <strong>~USD 21–29 Million</strong></li>
                        <li>CAGR: <strong>~16%–17%+</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Massive solar expansion (utility + rooftop)</li>
                        <li>Government EPR-style waste regulations</li>
                        <li>Rising focus on circular economy policies</li>
                        <li>Early installations reaching end-of-life phase</li>
                        <li>Investment in recycling infrastructure & tech</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-amber-600">$384–422M</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-amber-600">$5.3M</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-amber-600">6–9%</h4>
                    <p class="text-sm text-slate-500 mt-1">Global CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-amber-600">16–17%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- COMPARISON TABLE -->
            <div class="overflow-x-auto">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-6 text-center">Global vs India Snapshot</h2>
                <table class="w-full text-sm border-collapse rounded-2xl overflow-hidden shadow-sm">
                    <thead>
                        <tr class="bg-gradient-to-r from-amber-500 to-amber-700 text-white">
                            <th class="text-left p-4 font-semibold">Parameter</th>
                            <th class="text-left p-4 font-semibold">Global Market</th>
                            <th class="text-left p-4 font-semibold">India Market</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="border-b border-slate-100">
                            <td class="p-4 font-medium text-slate-700">Market Size (2025)</td>
                            <td class="p-4 text-slate-600">$384M – $422M</td>
                            <td class="p-4 text-slate-600">~$5.3M</td>
                        </tr>
                        <tr class="border-b border-slate-100 bg-slate-50">
                            <td class="p-4 font-medium text-slate-700">Forecast Value</td>
                            <td class="p-4 text-slate-600">$610M – $718M</td>
                            <td class="p-4 text-slate-600">~$21M – $29M</td>
                        </tr>
                        <tr class="border-b border-slate-100">
                            <td class="p-4 font-medium text-slate-700">CAGR</td>
                            <td class="p-4 text-slate-600">6% – 9%+</td>
                            <td class="p-4 text-slate-600">16% – 17%+</td>
                        </tr>
                        <tr class="border-b border-slate-100 bg-slate-50">
                            <td class="p-4 font-medium text-slate-700">Market Stage</td>
                            <td class="p-4 text-slate-600">Early-growth global</td>
                            <td class="p-4 text-slate-600">Very early-stage, high growth</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-slate-700">Key Driver</td>
                            <td class="p-4 text-slate-600">Regulations + ESG</td>
                            <td class="p-4 text-slate-600">Solar expansion + policy push</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Outlook (2026–2031)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Market expected to <strong>double by early 2030s</strong></li>
                        <li>Strong rise in automated & chemical recycling technologies</li>
                        <li>Increasing recovery efficiency of silver & silicon</li>
                        <li>Europe leading due to strict compliance systems</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Outlook (2026–2031)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>India will enter rapid growth phase <strong>after 2027</strong></li>
                        <li>Large wave of solar panel retirements from <strong>2030 onward</strong></li>
                        <li>Strong opportunity for organized recyclers & green startups</li>
                        <li>Govt. likely to formalize recycling under EPR framework</li>
                    </ul>
                </div>

            </div>

            <!-- INDUSTRY SCALE -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Scale — Worldwide</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>300–500</strong> specialized solar recycling operators</li>
                        <li>Many integrated with e-waste or glass recycling industries</li>
                        <li>Strong presence in <strong>Europe, USA, China, Japan</strong></li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Scale — India</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>50–100</strong> specialized solar recycling units (early stage)</li>
                        <li>Plus e-waste recyclers adapting to solar waste</li>
                        <li>Industry still fragmented but rapidly formalizing</li>
                    </ul>
                </div>

            </div>

            <!-- KEY MATERIALS RECOVERED -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Materials Recovered</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
                    <div class="p-5 rounded-2xl bg-sky-50 border border-sky-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-glass-water text-xl text-sky-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Glass</h4>
                        <p class="text-xs text-slate-500 mt-1">70–80% of panel weight</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-slate-100 border border-slate-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-slate-200 flex items-center justify-center">
                            <i class="fa-solid fa-cube text-xl text-slate-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Aluminum</h4>
                        <p class="text-xs text-slate-500 mt-1">Frames</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-microchip text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Silicon</h4>
                        <p class="text-xs text-slate-500 mt-1">Wafers</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-coins text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Silver</h4>
                        <p class="text-xs text-slate-500 mt-1">High value</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-plug text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Copper</h4>
                        <p class="text-xs text-slate-500 mt-1">Wiring</p>
                    </div>
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/solar-recycling.jpg') }}" alt="Solar Recycling Importance"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-amber-600 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why Solar Recycling Matters</h3>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-200 mt-0.5 shrink-0"></i>
                            Solar waste expected to grow sharply post-2030
                        </div>
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-200 mt-0.5 shrink-0"></i>
                            Reduces dependency on virgin raw materials
                        </div>
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-200 mt-0.5 shrink-0"></i>
                            Supports India's and global Net Zero targets
                        </div>
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-amber-200 mt-0.5 shrink-0"></i>
                            Creates a new "Green Urban Mining" industry
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Solar recycling is an <strong>emerging circular economy opportunity</strong> in the making. While currently
                    small in value, it will become a major clean-tech industry <strong>after 2030</strong>, driven by global solar
                    expansion and mandatory sustainability regulations. <strong>India, with its massive solar growth</strong>,
                    is positioned to become one of the fastest-growing solar recycling markets in the world.
                </p>
            </div>

        </div>
    </section>

@endsection
