@extends('layouts.website')

@section('title', 'Food Waste Recycling Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-lime-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/food-waste-recycling.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Food Waste Recycling
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Transforming discarded organic matter into life-sustaining compost and clean renewable energy.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is Food Waste Recycling?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        <strong>Food waste recycling</strong> is the process of converting discarded food and organic
                        materials into high-value products like compost, biogas, and bio-fertilizers.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It handles waste from households, hotels, and food processors, playing a vital role in reducing
                        landfill methane emissions while providing sustainable solutions for agriculture and the energy
                        sector.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-lime-500 to-emerald-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000">
                    </div>
                    <img src="{{ asset('images/sectors/food-waste-recycling.jpg') }}" alt="Food Waste Recycling"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- KEY PROCESSES -->
            <div class="grid md:grid-cols-5 gap-4">
                @php
                    $processes = [
                        ['icon' => 'seedling', 'title' => 'Composting'],
                        ['icon' => 'faucet-drip', 'title' => 'Biogas Production'],
                        ['icon' => 'gas-pump', 'title' => 'Biofuel Conversion'],
                        ['icon' => 'cow', 'title' => 'Animal Feed'],
                        ['icon' => 'leaf', 'title' => 'Organic Fertilizer'],
                    ];
                @endphp
                @foreach($processes as $p)
                    <div
                        class="p-6 bg-lime-50 rounded-2xl text-center border border-lime-100 group hover:bg-lime-600 transition-all">
                        <i class="fa-solid fa-{{ $p['icon'] }} text-3xl text-lime-600 group-hover:text-white mb-3"></i>
                        <p class="text-sm font-bold text-lime-900 group-hover:text-white">{{ $p['title'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div
                    class="p-8 rounded-3xl bg-gradient-to-br from-lime-800 to-emerald-950 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-earth-americas text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <ul class="space-y-4 text-lime-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 55 Billion</span>
                            <span class="text-lime-200">(2025 Market Value)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 95 Billion</span>
                            <span class="text-lime-200">(2031–33 Projection)</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-sm text-lime-200/80 leading-relaxed italic">"Circular economy adoption and stricter
                        landfill policies are major growth catalysts globally."</p>

                    <h4 class="font-semibold mt-8 mb-4 text-lime-300 uppercase tracking-wider text-sm">Key Statistics</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                            <p class="text-[10px] font-bold text-lime-400">7-9%</p>
                            <p class="text-[8px] uppercase font-bold text-white">CAGR Global</p>
                        </div>
                        <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                            <p class="text-[10px] font-bold text-lime-400">15,000+</p>
                            <p class="text-[8px] uppercase font-bold text-white">Global Facilities</p>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div
                    class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-lime-100 rounded-xl text-lime-600">
                            <i class="fa-solid fa-flag text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-white p-4 rounded-xl border border-lime-50">
                            <p class="text-[10px] text-slate-400 uppercase font-black">2025 Market</p>
                            <p class="text-2xl font-black text-lime-700">USD 2B</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-lime-50">
                            <p class="text-[10px] text-slate-400 uppercase font-black">2031 Forecast</p>
                            <p class="text-2xl font-black text-lime-700">USD 5B</p>
                        </div>
                    </div>

                    <h4 class="font-semibold mb-4 text-lime-600 uppercase tracking-wider text-sm">High-Growth Emerging
                        Market</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-3 text-xs text-slate-600 font-bold">
                            <i class="fa-solid fa-circle-check text-lime-500"></i> Swachh Bharat Mission (Grameen)
                        </li>
                        <li class="flex items-center gap-3 text-xs text-slate-600 font-bold">
                            <i class="fa-solid fa-circle-check text-lime-500"></i> SATAT Compressed Biogas Scheme
                        </li>
                        <li class="flex items-center gap-3 text-xs text-slate-600 font-bold">
                            <i class="fa-solid fa-circle-check text-lime-500"></i> Rapid Urbanization & Municipal Reform
                        </li>
                    </ul>
                </div>

            </div>

            <!-- COMPARISON TABLE -->
            <div class="overflow-hidden rounded-3xl border border-slate-200 shadow-lg">
                <table class="w-full text-left">
                    <thead class="bg-slate-900 text-white">
                        <tr>
                            <th class="p-4 text-sm font-bold uppercase tracking-wider">Parameter</th>
                            <th class="p-4 text-sm font-bold uppercase tracking-wider">Global Market</th>
                            <th class="p-4 text-sm font-bold uppercase tracking-wider">India Market</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-black text-slate-700 text-sm">Market Size (2025)</td>
                            <td class="p-4 text-slate-600 text-sm font-bold">$45–55 Billion</td>
                            <td class="p-4 text-lime-600 text-sm font-bold">$1.5–2.0 Billion</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-black text-slate-700 text-sm">Forecast Value (2031)</td>
                            <td class="p-4 text-slate-600 text-sm font-bold">$75–95 Billion</td>
                            <td class="p-4 text-lime-600 text-sm font-bold">$4.0–5.0 Billion</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-black text-slate-700 text-sm">CAGR (2026–2031)</td>
                            <td class="p-4 text-slate-600 text-sm font-bold">7–9%</td>
                            <td class="p-4 text-lime-600 text-sm font-bold">12–15%</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-4 font-black text-slate-700 text-sm">Primary Growth Hub</td>
                            <td class="p-4 text-slate-600 text-sm font-bold">Europe, USA, China</td>
                            <td class="p-4 text-lime-600 text-sm font-bold">Municipal Hubs & CBG Plants</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- STRATEGIC IMPORTANCE -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/biogas-industry.webp') }}" alt="Food Waste Recycling Details"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl">
                    <div class="absolute inset-0 rounded-3xl bg-lime-900/10 pointer-events-none"></div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Strategic Importance</h2>
                    <div class="grid gap-4">
                        @php
                            $importance = [
                                ['icon' => 'cloud-meatball', 'title' => 'Methane Emission Reduction'],
                                ['icon' => 'bolt-lightning', 'title' => 'Renewable Energy Generation'],
                                ['icon' => 'temperature-arrow-down', 'title' => 'Soil Health Restoration'],
                                ['icon' => 'city', 'title' => 'Municipal System Relief'],
                                ['icon' => 'rotate', 'title' => 'Circular Food Supply Chains'],
                                ['icon' => 'seedling', 'title' => 'Sustainable Agriculture Support'],
                            ];
                        @endphp
                        @foreach($importance as $item)
                            <div
                                class="flex items-center gap-4 p-4 rounded-xl hover:bg-lime-50 border border-transparent hover:border-lime-100 transition-all group">
                                <div
                                    class="w-12 h-12 flex items-center justify-center bg-lime-100 text-lime-600 rounded-lg group-hover:bg-lime-600 group-hover:text-white transition-colors">
                                    <i class="fa-solid fa-{{ $item['icon'] }}"></i>
                                </div>
                                <span class="font-bold text-slate-700 text-lg">{{ $item['title'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- OUTPUTS SUMMARY -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute top-0 right-0 w-80 h-80 bg-lime-500/5 rounded-full blur-3xl -mr-40 -mt-40"></div>
                <div class="relative z-10 text-center">
                    <h3 class="text-3xl font-bold mb-8">Key Recycled Outputs</h3>
                    <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
                        @foreach(['Organic Compost', 'Renewable Energy', 'Bio-Fertilizers', 'Animal Feed', 'Biofuels', 'Soil Enhancers'] as $output)
                            <div
                                class="p-4 bg-white/5 border border-white/10 rounded-2xl flex flex-col items-center gap-3 group hover:bg-lime-600 hover:border-lime-500 transition-all cursor-default">
                                <span
                                    class="text-[10px] font-black uppercase tracking-widest text-lime-400 group-hover:text-white">{{ $output }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div
                class="bg-gradient-to-br from-lime-600 to-emerald-700 text-white p-12 rounded-3xl text-center shadow-2xl relative overflow-hidden group">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Why Food Waste Recycling Matters</h3>
                    <p class="text-xl text-lime-50 max-w-4xl mx-auto leading-relaxed">
                        Food waste recycling is becoming a major pillar of sustainable waste management, transforming
                        discarded organics into valuable resources for both agriculture and energy. India is poised to
                        become one of the largest food waste recycling markets in Asia.
                    </p>
                    <div class="mt-8">
                        <a href=""
                            class="inline-flex items-center gap-2 px-10 py-5 bg-white text-lime-700 font-black uppercase tracking-widest rounded-full hover:bg-slate-900 hover:text-white transition-all duration-300 shadow-xl">
                            Join the Bio-Revolution <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection