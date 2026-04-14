@extends('layouts.website')

@section('title', 'Manufacturing Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/manufacturing.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Manufacturing Industry
            </h1>
            <p class="text-lg md:text-xl text-indigo-300 font-semibold mb-2">Backbone of Global Economic Growth</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Large-scale production of goods driving economic growth, employment, exports, and technological advancement worldwide.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Manufacturing?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Manufacturing</strong> refers to the large-scale production of goods through the use of machinery,
                        labor, tools, chemical processing, and industrial systems by converting <strong>raw materials into
                        finished products</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It is one of the most vital sectors driving <strong>economic growth, industrial development,
                        employment generation, exports, and technological advancement</strong> globally.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/manufacturing.jpg') }}" alt="Manufacturing Industry"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- MANUFACTURING INCLUDES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Manufacturing Includes</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-indigo-50 border border-indigo-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-indigo-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-xl text-indigo-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Industrial Production</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-gears text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Machinery & Equipment</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-basket-shopping text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Consumer Goods</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-rose-50 border border-rose-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-car text-xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Automotive</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-microchip text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Electronics</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-flask text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Chemical & Process</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-sky-50 border border-sky-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-sky-100 flex items-center justify-center">
                            <i class="fa-solid fa-robot text-xl text-sky-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Advanced / Smart Manufacturing</h4>
                    </div>
                </div>
            </div>

            <!-- WHY IT MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-indigo-700 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Manufacturing Matters</h3>
                    <p class="text-sm text-indigo-100 mb-4">
                        Manufacturing is the backbone of economic development and industrial progress, playing a crucial
                        role in strengthening domestic economies and global supply chains.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-indigo-200 shrink-0"></i>
                            Economic Growth & GDP Contribution
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-indigo-200 shrink-0"></i>
                            Employment Generation
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-indigo-200 shrink-0"></i>
                            Export Development
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-indigo-200 shrink-0"></i>
                            Innovation & Technology Advancement
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-indigo-200 shrink-0"></i>
                            Infrastructure Expansion
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-indigo-200 shrink-0"></i>
                            Supply Chain Strengthening
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/manufacturing.jpg') }}" alt="Manufacturing Importance"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-indigo-600 to-indigo-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Manufacturing Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 16+ Trillion</strong></li>
                        <li>Contributes significantly to global GDP and employment</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Industrial automation</li>
                        <li>Infrastructure development</li>
                        <li>Rising global consumption</li>
                        <li>Supply chain diversification</li>
                        <li>Digital transformation</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Manufacturing Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>USD 1+ Trillion</strong></li>
                        <li>Major contributor to India's GDP and industrial economy</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Forecast (2026–2031)</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Expected CAGR: <strong>10–12%</strong> annually</li>
                        <li>Projected to exceed <strong>USD 2 Trillion</strong> by 2031</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-indigo-600">$16T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-indigo-600">$1T+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-indigo-600">$2T+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Target (2031)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-indigo-600">10–12%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- KEY SEGMENTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Manufacturing Segments</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-indigo-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-xl text-indigo-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Industrial Manufacturing</h4>
                        <p class="text-xs text-slate-600">Production of machinery, equipment, and industrial systems.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-basket-shopping text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Consumer Goods Manufacturing</h4>
                        <p class="text-xs text-slate-600">Manufacturing products for daily consumer use.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-car text-xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Automotive Manufacturing</h4>
                        <p class="text-xs text-slate-600">Production of vehicles, components, and mobility systems.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-microchip text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Electronics Manufacturing</h4>
                        <p class="text-xs text-slate-600">Manufacturing semiconductors, devices, and digital equipment.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-flask text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Process Manufacturing</h4>
                        <p class="text-xs text-slate-600">Chemical, pharmaceutical, food, and energy production.</p>
                    </div>

                </div>
            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-indigo-600 text-xs"></i></div>
                            Industry 4.0 / Smart Factories
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-brain text-blue-600 text-xs"></i></div>
                            AI & Robotics Integration
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-green-600 text-xs"></i></div>
                            Sustainable Manufacturing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-wifi text-amber-600 text-xs"></i></div>
                            IoT Enabled Production Systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-cube text-violet-600 text-xs"></i></div>
                            Additive Manufacturing / 3D Printing
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-clone text-rose-600 text-xs"></i></div>
                            Digital Twin Technology
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Business Opportunities</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations can leverage manufacturing through:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-brand-primary text-xs"></i></div>
                            Industrial Expansion & Plant Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-robot text-brand-primary text-xs"></i></div>
                            Automation & Robotics Solutions
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-link text-brand-primary text-xs"></i></div>
                            Supply Chain Optimization
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-handshake text-brand-primary text-xs"></i></div>
                            Contract Manufacturing Services
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            Green Manufacturing Technologies
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-globe text-brand-primary text-xs"></i></div>
                            Export-Oriented Production
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/manufacturing.jpg') }}" alt="Manufacturing Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-indigo-600 to-indigo-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Future of Manufacturing</h3>
                    <p class="text-sm text-indigo-100 mb-4">
                        Manufacturing is rapidly evolving into a smart, automated, and digitally integrated ecosystem.
                        Forward-looking businesses are integrating into:
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-bolt text-indigo-200"></i> Smart Production
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-laptop-code text-indigo-200"></i> Digital Transformation
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-leaf text-indigo-200"></i> ESG & Sustainability
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-globe text-indigo-200"></i> Global Supply Chains
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why Manufacturing is Critical</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Manufacturing remains one of the most <strong>essential pillars of economic prosperity</strong>,
                    innovation, employment, and industrial competitiveness in the modern global economy.
                </p>
            </div>

        </div>
    </section>

@endsection
