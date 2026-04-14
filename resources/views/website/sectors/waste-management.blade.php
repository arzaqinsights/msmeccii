@extends('layouts.website')

@section('title', 'Waste Management')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/waste-management.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Waste Management
            </h1>
            <p class="text-lg md:text-xl text-emerald-300 font-semibold mb-2">Building a Cleaner, Sustainable Future</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                Systematic collection, processing, recycling, treatment, and disposal of waste materials to minimize environmental impact and promote sustainability.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Waste Management?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Waste Management</strong> refers to the systematic collection, transportation, processing,
                        recycling, treatment, and disposal of waste materials in a manner that <strong>minimizes environmental
                        impact and promotes sustainability</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It plays a vital role in maintaining <strong>public health, conserving natural resources, reducing
                        pollution</strong>, and supporting circular economy initiatives.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/waste-management.jpg') }}" alt="Waste Management"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- INCLUDES -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Waste Management Includes</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-trash-can text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Municipal Solid Waste</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Industrial Waste</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-rose-50 border border-rose-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-skull-crossbones text-xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Hazardous Waste</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-violet-50 border border-violet-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-violet-100 flex items-center justify-center">
                            <i class="fa-solid fa-heart-pulse text-xl text-violet-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Biomedical Waste</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-cyan-50 border border-cyan-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-cyan-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-cyan-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Plastic & E-Waste Recycling</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-seedling text-xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Organic Waste Composting</h4>
                    </div>
                    <div class="p-5 rounded-2xl bg-orange-50 border border-orange-200 text-center sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-bolt text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-xs text-slate-800">Waste-to-Energy Solutions</h4>
                    </div>
                </div>
            </div>

            <!-- WHY IT MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-emerald-700 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Waste Management Matters</h3>
                    <p class="text-sm text-emerald-100 mb-4">
                        Effective waste management has become one of the most critical global sustainability priorities
                        as urbanization, industrialization, and consumption continue to rise.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-emerald-200 shrink-0"></i>
                            Cleaner Environment & Public Health Protection
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-emerald-200 shrink-0"></i>
                            Resource Recovery & Recycling Opportunities
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-emerald-200 shrink-0"></i>
                            Reduced Landfill Dependency
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-emerald-200 shrink-0"></i>
                            Lower Carbon Emissions
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-emerald-200 shrink-0"></i>
                            Improved Operational Efficiency
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-emerald-200 shrink-0"></i>
                            Regulatory Compliance
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/waste-management.jpg') }}" alt="Waste Management Importance"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Waste Management Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 1.5+ Trillion</strong></li>
                        <li>Expected to exceed <strong>USD 2.5 Trillion</strong> by 2035</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Growth Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising urban waste generation</li>
                        <li>Industrial expansion</li>
                        <li>Government environmental regulations</li>
                        <li>Circular economy initiatives</li>
                        <li>Sustainability commitments</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India Waste Management Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>₹1+ Lakh Crore</strong></li>
                        <li>Rapidly growing due to urban development and industrialization</li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">India Growth Forecast (2026–2031)</h4>
                    <ul class="text-sm text-slate-600 space-y-1">
                        <li>Expected CAGR: <strong>10–14%</strong> annually</li>
                        <li>Projected to exceed <strong>₹2+ Lakh Crore</strong> by 2031</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-emerald-600">$1.5T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-emerald-600">₹1L Cr+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market (2025)</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-emerald-600">$2.5T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global by 2035</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-emerald-600">10–14%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- KEY SEGMENTS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Waste Management Segments</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-trash-can text-xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Municipal Waste Management</h4>
                        <p class="text-xs text-slate-600">Collection and treatment of residential and commercial waste.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-industry text-xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Industrial Waste Management</h4>
                        <p class="text-xs text-slate-600">Handling waste generated from manufacturing and industrial operations.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-rose-100 flex items-center justify-center">
                            <i class="fa-solid fa-skull-crossbones text-xl text-rose-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Hazardous Waste Management</h4>
                        <p class="text-xs text-slate-600">Safe disposal of toxic and dangerous waste materials.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                        <div class="w-12 h-12 mb-4 rounded-full bg-cyan-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-xl text-cyan-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Recycling & Resource Recovery</h4>
                        <p class="text-xs text-slate-600">Recovery of reusable materials such as plastic, metal, glass, and paper.</p>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm sm:col-span-2 lg:col-span-2">
                        <div class="w-12 h-12 mb-4 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fa-solid fa-bolt text-xl text-orange-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-800 mb-2">Waste-to-Energy</h4>
                        <p class="text-xs text-slate-600">Conversion of waste into electricity, heat, or fuel.</p>
                    </div>

                </div>
            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-microchip text-emerald-600 text-xs"></i></div>
                            Smart Waste Collection Systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-brain text-violet-600 text-xs"></i></div>
                            AI-Based Waste Sorting Technology
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-orange-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-orange-600 text-xs"></i></div>
                            Waste-to-Energy Expansion
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-building text-blue-600 text-xs"></i></div>
                            Decentralized Waste Processing Plants
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-cyan-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-cyan-600 text-xs"></i></div>
                            Circular Waste Recovery Models
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-chart-line text-amber-600 text-xs"></i></div>
                            ESG Integrated Waste Reporting
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Business Opportunities</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations can leverage waste management through:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-brand-primary text-xs"></i></div>
                            Recycling & Recovery Infrastructure
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-brand-primary text-xs"></i></div>
                            Waste-to-Energy Projects
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            Sustainability Consulting
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-microchip text-brand-primary text-xs"></i></div>
                            Smart Waste Technologies
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-globe text-brand-primary text-xs"></i></div>
                            Environmental Services
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-arrow-trend-down text-brand-primary text-xs"></i></div>
                            Carbon Reduction Initiatives
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/waste-management.jpg') }}" alt="Waste Management Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Future of Waste Management</h3>
                    <p class="text-sm text-emerald-100 mb-4">
                        Waste management is evolving from a disposal-focused activity into a strategic sustainability
                        and resource optimization sector. Forward-looking businesses are integrating into:
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-leaf text-emerald-200"></i> Sustainability Goals
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-link text-emerald-200"></i> Supply Chain Optimization
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-recycle text-emerald-200"></i> Resource Recovery
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-chart-line text-emerald-200"></i> ESG Compliance
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why Waste Management is Critical</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    Waste management is no longer merely an environmental necessity — it is a <strong>strategic enabler</strong>
                    of cleaner cities, sustainable industries, resource efficiency, and <strong>long-term economic resilience</strong>.
                </p>
            </div>

        </div>
    </section>

@endsection
