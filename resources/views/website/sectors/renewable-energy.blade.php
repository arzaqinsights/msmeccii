@extends('layouts.website')

@section('title', 'Renewable Energy (Solar & Wind)')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/renewable-energy.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Renewable Energy
            </h1>
            <p class="text-lg md:text-2xl text-emerald-300 font-semibold mb-2">Solar & Wind Energy</p>
            <p class="text-slate-300 text-lg max-w-2xl mx-auto">
                A Complete Global & India Market Snapshot
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Renewable Energy?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Renewable Energy</strong> refers to energy generated from naturally replenishing sources
                        such as <strong>sunlight (Solar), wind, water, biomass, and geothermal heat</strong>.
                        These sources are sustainable, eco-friendly, and play a critical role in reducing
                        greenhouse gas emissions and combating climate change.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Among all sources, <strong>Solar Energy</strong> and <strong>Wind Energy</strong> are the most
                        widely deployed and fastest-growing technologies globally due to falling costs and strong
                        government policies.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/renewable-energy.png') }}" alt="Renewable Energy"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- GLOBAL MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Renewable Energy Market</h3>
                    <p class="text-sm text-emerald-100 mb-4">
                        The global renewable energy industry is one of the fastest-growing sectors in the world,
                        driven by energy transition and net-zero commitments.
                    </p>
                    <ul class="space-y-2 text-sm">
                        <li><strong>USD 1.6–1.8 Trillion</strong> — Global Market (2025)</li>
                        <li><strong>USD 3.5–4.0 Trillion</strong> — Projected (2031)</li>
                        <li><strong>CAGR: 12%–15%</strong></li>
                        <li>Solar & Wind contribute <strong>65%+</strong> of new global power capacity</li>
                        <li>Asia-Pacific holds <strong>40%+</strong> market share</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4 text-slate-800">Key Global Drivers</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Net Zero targets (2050–2070)</li>
                        <li>Fossil fuel replacement policies</li>
                        <li>Rapid solar cost reduction</li>
                        <li>EV & hydrogen ecosystem growth</li>
                    </ul>
                </div>

            </div>

            <!-- INDIA MARKET -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Renewable Energy Market</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        India is among the <strong>top 3</strong> renewable energy markets in the world, with strong
                        policy support and massive installation growth.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2 text-slate-800">Installed Capacity (2025–26)</h4>
                    <ul class="space-y-1 text-sm text-slate-700">
                        <li>Total Renewable: <strong>~250–260 GW</strong></li>
                        <li>Solar Power: <strong>~130–140 GW</strong></li>
                        <li>Wind Power: <strong>~50–55 GW</strong></li>
                        <li>Hydro + Bio + Others: Remaining share</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-primary to-indigo-700 text-white shadow-lg">
                    <h4 class="text-xl font-bold mb-4">India Market Size</h4>
                    <ul class="text-sm space-y-2">
                        <li>Market Value (2025): <strong>~USD 135–150 Billion</strong></li>
                        <li>Projected Market (2031): <strong>~USD 300–350 Billion</strong></li>
                        <li>CAGR (2026–2031): <strong>~13%–15%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-6 mb-2">India Targets</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li><strong>500 GW</strong> non-fossil capacity by 2030</li>
                        <li>Net Zero Emissions by <strong>2070</strong></li>
                        <li>Solar dominance in future capacity additions (60–70%)</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-emerald-600">$1.8T</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-emerald-600">$150B</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-emerald-600">12–15%</h4>
                    <p class="text-sm text-slate-500 mt-1">Global CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-emerald-600">250 GW</h4>
                    <p class="text-sm text-slate-500 mt-1">India Capacity</p>
                </div>
            </div>

            <!-- GROWTH OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Growth Outlook (2026–2031)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Renewable capacity expected to <strong>double by 2030</strong></li>
                        <li>Solar PV will contribute <strong>70–80%</strong> of new installations</li>
                        <li>Wind energy expanding in offshore & hybrid systems</li>
                    </ul>
                    <h4 class="font-semibold mt-4 mb-2">Strong integration with:</h4>
                    <ul class="list-disc pl-5 space-y-1 text-sm text-slate-600">
                        <li>Battery Energy Storage Systems (BESS)</li>
                        <li>Green Hydrogen projects</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Growth Outlook (2026–2031)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Expected addition: <strong>120–150 GW</strong> new renewable capacity</li>
                        <li>Solar expansion: rooftop + utility + hybrid parks</li>
                        <li>Wind revival through offshore wind projects</li>
                    </ul>
                    <h4 class="font-semibold mt-4 mb-2">Strong growth in:</h4>
                    <ul class="list-disc pl-5 space-y-1 text-sm text-slate-600">
                        <li>Green hydrogen corridors</li>
                        <li>Domestic manufacturing (Make in India)</li>
                    </ul>
                </div>

            </div>

            <!-- COMPANIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Global Companies</h3>
                    <p class="text-sm text-slate-600 mb-3">There are approximately:</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li><strong>8,000–10,000+</strong> active renewable energy companies worldwide</li>
                        <li>Includes developers, EPCs, OEMs, and technology providers</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">India Renewable Energy Ecosystem</h3>
                    <p class="text-sm text-slate-600 mb-3">India has a rapidly expanding ecosystem of:</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li><strong>1,500–2,500+</strong> organized renewable energy companies</li>
                        <li>Thousands of MSMEs in EPC, installation, and component supply</li>
                    </ul>
                    <h4 class="font-semibold mt-4 mb-2">Major Segments in India</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Solar EPC companies</li>
                        <li>Wind turbine manufacturers & operators</li>
                        <li>Inverters, modules & battery suppliers</li>
                        <li>Power developers & IPPs</li>
                    </ul>
                </div>

            </div>

            <!-- INDIA GLOBAL SHARE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/renewable-energy.png') }}" alt="India Renewable Energy"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-emerald-600 text-white shadow-lg min-h-[300px]">
                    <h3 class="text-2xl font-bold mb-4">India's Global Market Share</h3>
                    <p class="text-sm mb-4">India contributes approximately:</p>
                    <ul class="list-disc pl-5 space-y-2 text-sm">
                        <li><strong>6%–8%</strong> of global renewable installed capacity</li>
                        <li>One of the <strong>Top 3</strong> solar markets globally</li>
                        <li>Among <strong>Top 5</strong> wind energy markets</li>
                    </ul>
                    <p class="text-sm mt-4 text-emerald-100">
                        India is emerging as a global hub for solar manufacturing and clean energy investments.
                    </p>
                </div>

            </div>

            <!-- KEY HIGHLIGHTS -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                        <i class="fa-solid fa-sun text-2xl text-amber-500"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2">Cheapest Power</h4>
                    <p class="text-xs text-slate-600">Solar energy is the cheapest electricity source in many regions</p>
                </div>
                <div class="p-6 rounded-2xl bg-sky-50 border border-sky-200 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-sky-100 flex items-center justify-center">
                        <i class="fa-solid fa-wind text-2xl text-sky-500"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2">Grid Stability</h4>
                    <p class="text-xs text-slate-600">Wind energy provides stable grid balancing power</p>
                </div>
                <div class="p-6 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                        <i class="fa-solid fa-battery-full text-2xl text-violet-500"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2">Energy Storage</h4>
                    <p class="text-xs text-slate-600">Becoming essential for 24/7 renewable supply</p>
                </div>
                <div class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                        <i class="fa-solid fa-atom text-2xl text-emerald-500"></i>
                    </div>
                    <h4 class="font-bold text-slate-800 mb-2">Green Hydrogen</h4>
                    <p class="text-xs text-slate-600">Strong push toward Green Hydrogen economy</p>
                </div>
            </div>

            <!-- FUTURE OUTLOOK -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Future Outlook</h3>
                    <p class="text-sm text-slate-600 mb-3">
                        The next decade (2026–2036) will define a global transformation:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Fossil fuels will gradually decline</li>
                        <li>Renewable energy will become the <strong>primary power source</strong></li>
                        <li>India will become a global renewable <strong>manufacturing & export hub</strong></li>
                        <li>Integrated systems (Solar + Wind + Storage + Hydrogen) will dominate</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl flex items-center shadow-lg">
                    <div>
                        <h3 class="text-2xl font-bold mb-4">Conclusion</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Renewable Energy is not just an industry — it is the <strong>foundation of a clean,
                            sustainable, and carbon-neutral future</strong>. With strong policy support, technological
                            advancement, and global investments, both India and the world are entering a
                            <strong>historic energy transition phase</strong>.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
