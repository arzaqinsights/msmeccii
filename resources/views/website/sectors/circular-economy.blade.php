@extends('layouts.website')

@section('title', 'Circular Economy')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-teal-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/circular-economy.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Circular Economy
            </h1>
            <p class="text-lg md:text-xl text-teal-300 font-semibold mb-2">Redefining How We Make, Use & Reuse</p>
            <p class="text-slate-300 max-w-3xl mx-auto">
                An economic model focused on minimizing waste, maximizing resource efficiency, and continuously reusing, recycling, and regenerating materials.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Circular Economy?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Circular Economy</strong> is an economic and industrial model focused on <strong>minimizing waste,
                        maximizing resource efficiency</strong>, and continuously reusing, recycling, refurbishing, and
                        regenerating materials throughout the product lifecycle.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Unlike the traditional <strong>"take-make-dispose"</strong> linear economy, the circular economy
                        promotes a sustainable system where products and resources remain in use for as long as possible.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/circular-economy.jpg') }}" alt="Circular Economy"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- WHY IT MATTERS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-teal-700 to-emerald-800 text-white shadow-lg min-h-[320px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-5">Why Circular Economy Matters</h3>
                    <p class="text-sm text-teal-100 mb-4">
                        Circular economy has become a global priority as industries and governments seek sustainable
                        solutions to reduce waste, conserve resources, and combat climate change.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-teal-200 shrink-0"></i>
                            Reduced Operational Costs
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-teal-200 shrink-0"></i>
                            Improved Resource Efficiency
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-teal-200 shrink-0"></i>
                            Lower Environmental Impact
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-teal-200 shrink-0"></i>
                            Enhanced Brand Reputation
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-teal-200 shrink-0"></i>
                            Greater Supply Chain Resilience
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i class="fa-solid fa-check-circle text-teal-200 shrink-0"></i>
                            Long-Term Sustainable Growth
                        </div>
                    </div>
                </div>

                <img src="{{ asset('images/sectors/circular-economy.jpg') }}" alt="Circular Economy Importance"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-md">

            </div>

            <!-- GLOBAL + INDIA STATS -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-teal-600 to-teal-800 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Circular Economy</h3>
                    <p class="text-sm text-teal-100 mb-4">
                        Circular economy could unlock <strong>USD 4.5 Trillion+</strong> in global economic benefits by 2030.
                        Governments and corporations worldwide are integrating circularity into long-term strategies.
                    </p>

                    <h4 class="font-semibold mt-4 mb-2">Global Adoption Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Rising raw material costs</li>
                        <li>Resource scarcity concerns</li>
                        <li>Climate change mitigation goals</li>
                        <li>ESG and sustainability mandates</li>
                        <li>Consumer demand for sustainable products</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">India's Circular Economy</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        India's circular economy market potential estimated at <strong>USD 500+ Billion</strong> by 2030.
                        Significant focus on waste reduction, recycling, and resource optimization.
                    </p>

                    <h4 class="font-semibold mb-2">Key Focus Areas</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-recycle text-brand-primary text-xs"></i> Waste Management</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-box text-brand-primary text-xs"></i> Sustainable Packaging</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-solar-panel text-brand-primary text-xs"></i> Renewable Energy</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-water text-brand-primary text-xs"></i> Water Reuse</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-industry text-brand-primary text-xs"></i> Industrial Efficiency</div>
                        <div class="flex items-center gap-2 text-sm text-slate-600"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i> Green Manufacturing</div>
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-teal-600">$4.5T+</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Opportunity by 2030</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-teal-600">$500B+</h4>
                    <p class="text-sm text-slate-500 mt-1">India Potential by 2030</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition col-span-2 md:col-span-1">
                    <h4 class="text-2xl font-bold text-teal-600">∞</h4>
                    <p class="text-sm text-slate-500 mt-1">Lifecycle Value Creation</p>
                </div>
            </div>

            <!-- 5 PILLARS -->
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 text-center">Key Pillars of Circular Economy</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-5">

                    <div class="p-5 rounded-2xl bg-teal-50 border border-teal-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-teal-100 flex items-center justify-center">
                            <i class="fa-solid fa-arrow-down text-2xl text-teal-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Reduce</h4>
                        <p class="text-[10px] text-slate-500 mt-1">Minimize material & energy consumption</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-blue-50 border border-blue-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-blue-100 flex items-center justify-center">
                            <i class="fa-solid fa-arrows-rotate text-2xl text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Reuse</h4>
                        <p class="text-[10px] text-slate-500 mt-1">Extend product life through repeated use</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fa-solid fa-recycle text-2xl text-emerald-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Recycle</h4>
                        <p class="text-[10px] text-slate-500 mt-1">Recover materials for reprocessing</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-amber-50 border border-amber-200 text-center">
                        <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-amber-100 flex items-center justify-center">
                            <i class="fa-solid fa-bolt text-2xl text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Recover</h4>
                        <p class="text-[10px] text-slate-500 mt-1">Extract value through energy recovery</p>
                    </div>

                    <div class="p-5 rounded-2xl bg-lime-50 border border-lime-200 text-center col-span-2 sm:col-span-1">
                        <div class="w-14 h-14 mx-auto mb-3 rounded-full bg-lime-100 flex items-center justify-center">
                            <i class="fa-solid fa-seedling text-2xl text-lime-600"></i>
                        </div>
                        <h4 class="font-bold text-sm text-slate-800">Regenerate</h4>
                        <p class="text-[10px] text-slate-500 mt-1">Restore natural systems & cycles</p>
                    </div>

                </div>
            </div>

            <!-- TRENDS + OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Emerging Trends (2026–2031)</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-pencil-ruler text-teal-600 text-xs"></i></div>
                            Circular Product Design Innovation
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-coins text-amber-600 text-xs"></i></div>
                            Waste-to-Value Business Models
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-cloud text-blue-600 text-xs"></i></div>
                            Product-as-a-Service Models
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-violet-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-truck-ramp-box text-violet-600 text-xs"></i></div>
                            Reverse Logistics Systems
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-qrcode text-emerald-600 text-xs"></i></div>
                            Digital Material Tracking Platforms
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-rose-100 flex items-center justify-center shrink-0"><i class="fa-solid fa-link text-rose-600 text-xs"></i></div>
                            Circular Supply Chain Transformation
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Opportunities</h3>
                    <p class="text-sm text-slate-600 mb-4">Organizations can leverage circular economy for:</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-lightbulb text-brand-primary text-xs"></i></div>
                            Sustainable Product Development
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-recycle text-brand-primary text-xs"></i></div>
                            Recycling and Recovery Solutions
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-link text-brand-primary text-xs"></i></div>
                            Circular Supply Chain Management
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-gears text-brand-primary text-xs"></i></div>
                            Resource Optimization Technologies
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-bolt text-brand-primary text-xs"></i></div>
                            Waste-to-Energy Projects
                        </div>
                        <div class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="w-8 h-8 rounded-lg bg-brand-primary/10 flex items-center justify-center shrink-0"><i class="fa-solid fa-leaf text-brand-primary text-xs"></i></div>
                            ESG and Sustainability Consulting
                        </div>
                    </div>
                </div>

            </div>

            <!-- FUTURE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/circular-economy.jpg') }}" alt="Circular Economy Future"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-gradient-to-br from-teal-600 to-emerald-800 text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4">Future of Circular Economy</h3>
                    <p class="text-sm text-teal-100 mb-4">
                        Circular economy is transforming from an environmental initiative into a <strong>core strategic
                        business model</strong>. Businesses globally are embedding circularity into:
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-industry text-teal-200"></i> Manufacturing Processes
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-lightbulb text-teal-200"></i> Product Development
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-box text-teal-200"></i> Packaging Design
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-link text-teal-200"></i> Supply Chains
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-cart-shopping text-teal-200"></i> Procurement Strategies
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Why Circular Economy is the Future</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed mb-4">
                    Circular economy is no longer a concept of the future — it is the <strong>foundation of modern
                    sustainable business</strong>, enabling industries to balance profitability, environmental responsibility,
                    and long-term resilience.
                </p>
                <p class="text-base text-slate-400 max-w-2xl mx-auto">
                    In an increasingly <strong>resource-conscious world</strong>, circularity is the only path forward.
                </p>
            </div>

        </div>
    </section>

@endsection
