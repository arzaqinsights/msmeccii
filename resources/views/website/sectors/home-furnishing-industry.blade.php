@extends('layouts.website')

@section('title', 'Home Furnishing Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/home-furnishing.jpg') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Home Furnishing Industry
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Redefining interior aesthetics through premium design, comfort, and global craftsmanship.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is Home Furnishing?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>home furnishing industry</strong> encompasses the manufacturing, design, and
                        distribution of products that enhance the comfort and aesthetics of residential and commercial
                        spaces.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        From luxurious curtains and bed linens to intricate rugs and upholstery, this sector blends
                        traditional craftsmanship with modern innovation to create interior environments that reflect
                        culture, lifestyle, and functionality.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl blur opacity-20 group-hover:opacity-40 transition duration-1000">
                    </div>
                    <img src="{{ asset('images/sectors/home-furnishing.jpg') }}" alt="Home Furnishing"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div
                    class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-indigo-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-earth-americas text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <ul class="space-y-4 text-indigo-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 1.10 Trillion</span>
                            <span class="text-indigo-200">(2025 Market Value)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 1.60 Trillion</span>
                            <span class="text-indigo-200">(2032–33 Projection)</span>
                        </li>
                    </ul>

                    <h4 class="font-semibold mt-8 mb-4 text-indigo-300 uppercase tracking-wider text-sm">Key Consumption
                        Hubs</h4>
                    <div class="flex gap-4">
                        <span class="px-4 py-2 bg-white/5 rounded-xl border border-white/10 text-xs font-bold">North
                            America</span>
                        <span
                            class="px-4 py-2 bg-white/5 rounded-xl border border-white/10 text-xs font-bold">Asia-Pacific</span>
                    </div>
                </div>

                <!-- INDIA -->
                <div
                    class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-indigo-100 rounded-xl text-indigo-600">
                            <i class="fa-solid fa-couch text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>
                    <p class="text-slate-600 mb-6 font-medium">Estimated at <span class="text-indigo-600 font-black">USD 10
                            Billion+</span> with a global reputation for textile innovation and handmade products.</p>

                    <h4 class="font-semibold mb-4 text-indigo-600 uppercase tracking-wider text-sm">Manufacturing Hubs</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="p-3 bg-white rounded-xl border border-indigo-50">
                            <p class="text-xs font-black text-slate-700">Panipat</p>
                            <p class="text-[10px] text-slate-400">Carpets & Blankets</p>
                        </div>
                        <div class="p-3 bg-white rounded-xl border border-indigo-50">
                            <p class="text-xs font-black text-slate-700">Karur</p>
                            <p class="text-[10px] text-slate-400">Home Textile Exports</p>
                        </div>
                        <div class="p-3 bg-white rounded-xl border border-indigo-50">
                            <p class="text-xs font-black text-slate-700">Jaipur</p>
                            <p class="text-[10px] text-slate-400">Rugs & Decorative</p>
                        </div>
                        <div class="p-3 bg-white rounded-xl border border-indigo-50">
                            <p class="text-xs font-black text-slate-700">Mumbai</p>
                            <p class="text-[10px] text-slate-400">Premium Market</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div
                    class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-indigo-600 text-3xl font-black group-hover:scale-110 transition-transform">10-12%
                    </div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">India CAGR Forecast</div>
                </div>
                <div
                    class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-indigo-600 text-3xl font-black group-hover:scale-110 transition-transform">Top 5
                    </div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Global Exporter Rank</div>
                </div>
                <div
                    class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-indigo-600 text-3xl font-black group-hover:scale-110 transition-transform">50K+
                    </div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Manufacturing MSMEs</div>
                </div>
                <div
                    class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-indigo-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-indigo-600 text-3xl font-black group-hover:scale-110 transition-transform">$1.35T+
                    </div>
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Global Market (2031)</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/textile.png') }}" alt="Furnishing Opportunities"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl">
                    <div
                        class="absolute -bottom-6 -right-6 p-6 bg-slate-900 text-white rounded-2xl shadow-2xl hidden md:block">
                        <p class="text-3xl font-bold">5%–6%</p>
                        <p class="text-sm opacity-80 uppercase tracking-widest">India's Global Export Share</p>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Emerging Opportunities</h2>
                    <div class="space-y-4">
                        @php
                            $opportunities = [
                                ['icon' => 'gem', 'title' => 'Luxury Interior Décor Products'],
                                ['icon' => 'leaf', 'title' => 'Sustainable & Eco-Friendly Furnishings'],
                                ['icon' => 'microchip', 'title' => 'Smart Home Textiles & Fabrics'],
                                ['icon' => 'palette', 'title' => 'Designer Upholstery Fabrics'],
                                ['icon' => 'hotel', 'title' => 'Hospitality Furnishing Solutions'],
                                ['icon' => 'house-user', 'title' => 'Customized Interior Lifestyles'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                            <div
                                class="flex items-center gap-4 p-4 rounded-xl hover:bg-indigo-50 border border-transparent hover:border-indigo-100 transition-all group">
                                <div
                                    class="w-12 h-12 flex items-center justify-center bg-indigo-100 text-indigo-600 rounded-lg group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <i class="fa-solid fa-{{ $item['icon'] }}"></i>
                                </div>
                                <span class="font-bold text-slate-700 text-lg">{{ $item['title'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- GLOBAL POSITION -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-500/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4">India's Global Position</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India is among the Top 5 exporters of home textile products globally, known for its high-quality
                            cotton bed linen and decorative furnishings.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-3 bg-white/5 rounded-xl border border-white/10 text-xs font-bold text-indigo-300">
                                Cotton Bed Linen</div>
                            <div class="p-3 bg-white/5 rounded-xl border border-white/10 text-xs font-bold text-indigo-300">
                                Rugs & Carpets</div>
                            <div class="p-3 bg-white/5 rounded-xl border border-white/10 text-xs font-bold text-indigo-300">
                                Decorative Textiles</div>
                            <div class="p-3 bg-white/5 rounded-xl border border-white/10 text-xs font-bold text-indigo-300">
                                Handmade Products</div>
                        </div>
                    </div>
                    <div class="bg-indigo-600 p-8 rounded-3xl text-center shadow-lg">
                        <i class="fa-solid fa-medal text-5xl mb-4"></i>
                        <h4 class="text-2xl font-black mb-2 uppercase tracking-tight">Worldwide Leader</h4>
                        <p class="text-sm opacity-80">India contributes significantly to the global circular economy in
                            textiles and furnishings.</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div
                class="bg-gradient-to-br from-indigo-600 to-purple-700 text-white p-12 rounded-3xl text-center shadow-2xl relative group">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Why Home Furnishing Industry Matters</h3>
                    <p class="text-xl text-indigo-50 max-w-4xl mx-auto leading-relaxed">
                        The home furnishing sector is a vital component of the global lifestyle and interior design market,
                        driven by evolving consumer preferences and urban living trends. It contributes significantly to
                        manufacturing, exports, and design innovation globally.
                    </p>
                    <div class="mt-8">
                        <a href=""
                            class="inline-flex items-center gap-2 px-10 py-5 bg-white text-indigo-700 font-black uppercase tracking-widest rounded-full hover:bg-slate-900 hover:text-white transition-all duration-300 shadow-xl">
                            Explore Opportunities <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection