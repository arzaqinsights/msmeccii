@extends('layouts.website')

@section('title', 'Chemical Recycling Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/chemical-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Chemical Recycling Industry
            </h1>
            <p class="text-lg md:text-xl text-cyan-300 font-semibold mb-2">Global & India Market Overview</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Advanced waste processing technology transforming plastic waste into a circular feedstock economy.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Chemical Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Chemical recycling</strong> is an advanced waste processing technology that breaks down plastic waste
                        into its original chemical building blocks (<strong>monomers, oils, gases, or feedstock</strong>) so it can be
                        reused to produce virgin-quality plastics or other chemicals.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Unlike mechanical recycling, it can process <strong>mixed plastics, multilayer packaging,
                        contaminated plastics, and low-value plastic waste</strong>.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/chemical-recycling.jpg') }}" alt="Chemical Recycling"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- KEY TECHNOLOGIES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Chemical Recycling Technologies</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="p-6 rounded-2xl bg-orange-50 border border-orange-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-fire-flame-curved text-2xl text-orange-500"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-1">Pyrolysis</h4>
                        <p class="text-xs text-slate-500">Plastic → Oil</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-sky-50 border border-sky-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-wind text-2xl text-sky-500"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-1">Gasification</h4>
                        <p class="text-xs text-slate-500">Plastic → Syngas</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-atom text-2xl text-violet-500"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-1">Depolymerization</h4>
                        <p class="text-xs text-slate-500">Polymer → Monomer</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-flask text-2xl text-emerald-500"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-1">Solvent-based</h4>
                        <p class="text-xs text-slate-500">Purification Process</p>
                    </div>
                </div>
            </div>

            <!-- GLOBAL vs INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-cyan-600 to-cyan-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Chemical Recycling Market</h3>
                    <p class="text-sm text-cyan-100 mb-4">
                        One of the fastest-growing segments in the circular economy due to increasing plastic waste
                        complexity and demand for virgin-quality recycled materials.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>~USD 10–12 Billion</strong></li>
                        <li>Projected (2031–2033): <strong>~USD 28–40 Billion+</strong></li>
                        <li>CAGR: <strong>~10%–15%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Key Global Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising plastic waste crisis (multilayer packaging)</li>
                        <li>Corporate ESG commitments (FMCG, packaging giants)</li>
                        <li>Demand for food-grade recycled plastics</li>
                        <li>EU & US regulatory push for circular plastics</li>
                        <li>Investment in advanced recycling infrastructure</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Chemical Recycling Market</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        India is an early-stage but high-potential market, mainly driven by plastic waste generation
                        and EPR regulations.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>~USD 200–400 Million</strong></li>
                        <li>Forecast (2031): <strong>~USD 1.5–3 Billion+</strong></li>
                        <li>CAGR: <strong>~18%–25%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Strong plastic consumption growth</li>
                        <li>EPR (Extended Producer Responsibility) regulations</li>
                        <li>FMCG demand for recycled content</li>
                        <li>Lack of high-quality mechanical recycling feedstock</li>
                        <li>Government push toward circular economy</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-cyan-600">$10–12B</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-cyan-600">$200–400M</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-cyan-600">10–15%</h4>
                    <p class="text-sm text-slate-500 mt-1">Global CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-cyan-600">18–25%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- COMPARISON TABLE -->
            <div class="overflow-x-auto">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-6 text-center">Global vs India Snapshot</h2>
                <table class="w-full text-sm border-collapse rounded-2xl overflow-hidden shadow-sm">
                    <thead>
                        <tr class="bg-gradient-to-r from-cyan-600 to-cyan-800 text-white">
                            <th class="text-left p-4 font-semibold">Parameter</th>
                            <th class="text-left p-4 font-semibold">Global Market</th>
                            <th class="text-left p-4 font-semibold">India Market</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="border-b border-slate-100">
                            <td class="p-4 font-medium text-slate-700">Market Size (2025)</td>
                            <td class="p-4 text-slate-600">$10–12B</td>
                            <td class="p-4 text-slate-600">$0.2–0.4B</td>
                        </tr>
                        <tr class="border-b border-slate-100 bg-slate-50">
                            <td class="p-4 font-medium text-slate-700">Forecast Value</td>
                            <td class="p-4 text-slate-600">$28–40B+</td>
                            <td class="p-4 text-slate-600">$1.5–3B+</td>
                        </tr>
                        <tr class="border-b border-slate-100">
                            <td class="p-4 font-medium text-slate-700">CAGR (2026–2031)</td>
                            <td class="p-4 text-slate-600">10–15%</td>
                            <td class="p-4 text-slate-600">18–25%</td>
                        </tr>
                        <tr class="border-b border-slate-100 bg-slate-50">
                            <td class="p-4 font-medium text-slate-700">Market Stage</td>
                            <td class="p-4 text-slate-600">Early-commercial</td>
                            <td class="p-4 text-slate-600">Early-emerging</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-slate-700">Key Driver</td>
                            <td class="p-4 text-slate-600">ESG + Regulation</td>
                            <td class="p-4 text-slate-600">Waste crisis + EPR</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Outlook (2026–2031)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Rapid expansion of pyrolysis-based plants</li>
                        <li>Integration with petrochemical industries</li>
                        <li>Rise of advanced recycling partnerships (FMCG + Oil & Gas)</li>
                        <li>Scaling of food-grade recycled plastic production</li>
                        <li>Strong investments from global energy and chemical companies</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Outlook (2026–2031)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Rapid entry of startups and pilot plants</li>
                        <li>Growing collaboration between recyclers and FMCG brands</li>
                        <li>Expansion of EPR-driven recycling obligations</li>
                        <li>High demand for technology transfer from Europe/US</li>
                        <li>Shift from informal to organized chemical recycling</li>
                    </ul>
                </div>

            </div>

            <!-- INDUSTRY CAPACITY -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Scale — Worldwide</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>300–500</strong> chemical recycling plants (operational + pilot)</li>
                        <li>Major hubs: <strong>Europe, USA, Japan, China</strong></li>
                        <li>Strong presence of oil & chemical giants entering recycling space</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Scale — India</h3>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li>Estimated <strong>30–70</strong> operational/pilot plants</li>
                        <li>Mostly pyrolysis oil plants and small depolymerization units</li>
                        <li>Rapid pipeline of new projects expected post-2026</li>
                    </ul>
                </div>

            </div>

            <!-- KEY OUTPUTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Outputs of Chemical Recycling</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="p-6 rounded-2xl bg-cyan-50 border border-cyan-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-cyan-100 flex items-center justify-center">
                            <i class="fa-solid fa-cube text-2xl text-cyan-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm">Virgin-like Plastic Resin</h4>
                    </div>
                    <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-oil-can text-2xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm">Pyrolysis Oil</h4>
                        <p class="text-xs text-slate-500 mt-1">Refinery feedstock</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-bolt text-2xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm">Syngas</h4>
                        <p class="text-xs text-slate-500 mt-1">Energy use</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-atom text-2xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 text-sm">Chemical Monomers</h4>
                        <p class="text-xs text-slate-500 mt-1">PET, PS, Nylon recovery</p>
                    </div>
                </div>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/chemical-recycling.jpg') }}" alt="Chemical Recycling Importance"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-cyan-700 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Why Chemical Recycling Matters</h3>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 mt-0.5 shrink-0"></i>
                            Mechanical recycling alone cannot solve the plastic waste crisis
                        </div>
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 mt-0.5 shrink-0"></i>
                            Enables recycling of previously non-recyclable plastics
                        </div>
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 mt-0.5 shrink-0"></i>
                            Supports net-zero and ESG targets
                        </div>
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 mt-0.5 shrink-0"></i>
                            Converts waste into high-value raw materials
                        </div>
                        <div class="flex items-start gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-cyan-200 mt-0.5 shrink-0"></i>
                            Bridges gap between petrochemical and recycling industries
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Chemical recycling represents the <strong>next evolution of the global recycling industry</strong>,
                    transforming plastic waste into a circular feedstock economy. Globally, it is moving from pilot stage
                    to commercial scaling, while in <strong>India it is still emerging but expected to grow rapidly
                    post-2026</strong> due to regulatory pressure and rising plastic waste volumes.
                </p>
            </div>

        </div>
    </section>

@endsection
