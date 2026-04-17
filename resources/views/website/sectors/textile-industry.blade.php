@extends('layouts.website')

@section('title', 'Textile Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/sectors/textile.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Textile Industry
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Interweaving tradition and technology to drive the global manufacturing and fashion ecosystem.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900">What is Textile Industry?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>textile industry</strong> is a massive manufacturing backbone covering the production of fibers, yarns, fabrics, and specialized materials like technical and industrial textiles.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        It serves as the foundation for fashion, automotive interiors, healthcare supplies, and construction materials, combining labor-intensive traditional manufacturing with cutting-edge material science and innovation.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/textile.png') }}" alt="Textile Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-blue-800 to-slate-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-globe text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Global Market</h3>
                    </div>
                    <ul class="space-y-4 text-blue-50">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 1.06 Trillion</span> 
                            <span class="text-blue-200">(2025 Market Value)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-white text-lg">USD 1.95 Trillion</span> 
                            <span class="text-blue-200">(2034 Projection)</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-sm text-blue-200/80 leading-relaxed">Asia-Pacific remains the dominant hub, holding <span class="text-white font-bold">44%+ share</span> of the global textile market.</p>

                    <h4 class="font-semibold mt-8 mb-4 text-blue-300 uppercase tracking-wider text-sm">Industrial Presence</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                            <p class="text-[10px] font-bold text-blue-400">1 Million+</p>
                            <p class="text-[8px] uppercase font-bold text-white">Global Companies</p>
                        </div>
                        <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                            <p class="text-[10px] font-bold text-blue-400">7.1%</p>
                            <p class="text-[8px] uppercase font-bold text-white">Global CAGR</p>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-blue-100 rounded-xl text-blue-600">
                            <i class="fa-solid fa-industry text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Indian Market</h3>
                    </div>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between items-baseline border-b border-slate-200 pb-2">
                            <span class="text-sm text-slate-500 font-bold uppercase">Market Value (2025)</span>
                            <span class="text-2xl font-black text-blue-700">USD 152B+</span>
                        </div>
                        <div class="flex justify-between items-baseline border-b border-slate-200 pb-2">
                            <span class="text-sm text-slate-500 font-bold uppercase">Forecast (2034)</span>
                            <span class="text-2xl font-black text-blue-700">USD 213B+</span>
                        </div>
                    </div>

                    <h4 class="font-semibold mb-3 text-blue-600 uppercase tracking-wider text-sm">Economic Contribution</h4>
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div class="p-2 bg-white rounded-lg border border-slate-100 text-center">
                            <p class="text-sm font-black text-slate-800">2.3%</p>
                            <p class="text-[8px] uppercase text-slate-400 font-bold">GDP</p>
                        </div>
                        <div class="p-2 bg-white rounded-lg border border-slate-100 text-center">
                            <p class="text-sm font-black text-slate-800">13%</p>
                            <p class="text-[8px] uppercase text-slate-400 font-bold">Ind. Prod</p>
                        </div>
                        <div class="p-2 bg-white rounded-lg border border-slate-100 text-center">
                            <p class="text-sm font-black text-slate-800">12%</p>
                            <p class="text-[8px] uppercase text-slate-400 font-bold">Exports</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">#2</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Manufacturer</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">45M+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Employment (Direct)</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">5 Lakh+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Total MSMEs</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">USD 200B</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India Market (2031)</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('images/sectors/manufacturing.jpg') }}" alt="Textile Opportunities"
                        class="w-full h-[400px] object-cover rounded-3xl shadow-xl grayscale contrast-125">
                    <div class="absolute inset-0 rounded-3xl bg-blue-900/10 pointer-events-none"></div>
                    <div class="absolute bottom-6 right-6 p-4 bg-white rounded-xl shadow-lg border-l-4 border-blue-600">
                        <p class="text-xs font-bold text-blue-600">Technical Textile</p>
                        <p class="text-lg font-black text-slate-900">5th Largest Market</p>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-extrabold mb-8 text-slate-900">Emerging Opportunities</h2>
                    <div class="grid gap-4">
                        @php
                            $opportunities = [
                                ['icon' => 'leaf', 'title' => 'Sustainable / Eco-friendly Textiles'],
                                ['icon' => 'recycle', 'title' => 'Recycled Fiber & Circular Fashion'],
                                ['icon' => 'microchip', 'title' => 'Technical & Smart Fabrics'],
                                ['icon' => 'heart-pulse', 'title' => 'Medical Textiles Development'],
                                ['icon' => 'vest', 'title' => 'High-performance Industrial Fabrics'],
                                ['icon' => 'ship', 'title' => 'Export-Led Production Hubs'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                        <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-blue-50 border border-transparent hover:border-blue-100 transition-all group">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-100 text-blue-600 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-colors text-xl">
                                <i class="fa-solid fa-{{ $item['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-lg">{{ $item['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- GLOBAL RECOGNITION -->
            <div class="p-10 rounded-3xl bg-slate-900 text-white overflow-hidden relative">
                <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_top_right,rgba(37,99,235,0.1),transparent)]"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-4">India's Manufacturing Hubs</h3>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            India's textile ecosystem is spread across major industrial hubs, each specializing in critical segments of the global value chain.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Surat', 'Tiruppur', 'Ludgaon', 'Panipat', 'Ahmedabad', 'Mumbai', 'Delhi NCR'] as $hub)
                                <span class="px-3 py-1 bg-white/5 rounded-full text-[10px] font-bold tracking-widest text-blue-300 border border-white/5">{{ $hub }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="p-8 bg-blue-600 rounded-3xl text-center shadow-xl border-t-4 border-white/20">
                        <i class="fa-solid fa-industry text-5xl mb-6 text-white"></i>
                        <h4 class="text-3xl font-black mb-2 uppercase">Core Sector</h4>
                        <p class="text-sm opacity-90">Contributing to <span class="text-white font-bold">13% of Industrial Production</span> in India.</p>
                    </div>
                </div>
            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-blue-600 to-slate-900 text-white p-12 rounded-[2.5rem] text-center shadow-2xl relative overflow-hidden group">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Why Textile Industry Matters</h3>
                    <p class="text-xl text-blue-50 max-w-4xl mx-auto leading-relaxed">
                        The textile sector is the backbone of economic development, combining labor-intensive manufacturing with modern material innovation. As a global manufacturing hub, the sector is poised for significant expansion through sustainability and technical textiles.
                    </p>
                    <div class="mt-8">
                        <a href="" class="inline-flex items-center gap-2 px-10 py-5 bg-white text-blue-700 font-black uppercase tracking-widest rounded-full hover:bg-slate-900 hover:text-white transition-all duration-300 shadow-xl">
                            Partner in Innovation <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
