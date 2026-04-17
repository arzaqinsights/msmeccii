@extends('layouts.website')

@section('title', 'Handicraft Industry Overview')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('{{ asset('images/sectors/handicraft.webp') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Handicraft <span class="text-blue-500">Industry</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Celebrating cultural heritage through the artistry of human hands and timeless craftsmanship.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-3xl font-extrabold mb-6 text-slate-900 uppercase">Legacy of Artistry</h2>
                    <p class="text-slate-600 leading-relaxed mb-4 text-lg">
                        The <strong>handicraft industry</strong> involves the creation of decorative and functional products made primarily by hand or with simple tools by skilled artisans.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Reflecting deep cultural heritage and creativity, this sector supports millions of rural and artisan economies globally. From intricate metalwork to traditional textiles, handicrafts bridge ancient tradition with modern luxury.
                    </p>
                </div>

                <div class="relative group animate-in fade-in slide-in-from-right duration-700">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('images/sectors/handicraft.webp') }}" alt="Handicraft Industry"
                        class="relative w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-8 rounded-3xl bg-gradient-to-br from-slate-800 to-slate-900 text-white shadow-2xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/10 rounded-xl">
                            <i class="fa-solid fa-earth-asia text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold uppercase tracking-tight">Global Market</h3>
                    </div>
                    
                    <ul class="space-y-4 text-slate-300">
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Market Value (2025)</span>
                            <span class="text-xl font-black text-white">$850 Billion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Projected (2033)</span>
                            <span class="text-xl font-black text-white">$1.2 Trillion</span>
                        </li>
                        <li class="flex items-baseline justify-between border-b border-white/10 pb-2">
                            <span class="text-sm uppercase font-bold text-slate-400">Expected CAGR</span>
                            <span class="text-xl font-black text-blue-400">10%</span>
                        </li>
                    </ul>

                    <p class="mt-6 text-xs text-slate-500 italic">Asia-Pacific remains the largest hub, driven by traditional artisan economies.</p>
                </div>

                <!-- INDIA -->
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-blue-100 rounded-xl text-blue-600">
                            <i class="fa-solid fa-palette text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Indian Market</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4 mb-8">
                        <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase font-bold tracking-tight">Annual Export Value</p>
                                <p class="text-3xl font-black text-blue-700">USD 5B+</p>
                            </div>
                            <div class="p-4 bg-blue-50 text-blue-600 rounded-full">
                                <i class="fa-solid fa-ship text-2xl"></i>
                            </div>
                        </div>
                    </div>

                    <h4 class="font-bold text-xs text-slate-400 uppercase tracking-widest mb-4">Major Artisan Hubs</h4>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach(['Jaipur', 'Moradabad', 'Saharanpur', 'Kutch', 'Kolkata', 'Kashmir'] as $hub)
                            <div class="px-3 py-2 bg-white border border-slate-100 text-slate-600 text-[10px] font-black rounded-lg uppercase text-center">
                                {{ $hub }}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">70L+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Active Artisans</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">12%+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">India CAGR</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">7000+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Organized Exporters</div>
                </div>
                <div class="group p-6 bg-white border border-slate-100 rounded-2xl shadow-sm hover:shadow-xl hover:border-blue-200 transition-all duration-300 text-center">
                    <div class="mb-2 text-blue-600 text-3xl font-black group-hover:scale-110 transition-transform">TOP 2</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Global Export Rank</div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid md:grid-cols-2 gap-12 items-center pt-8">
                <div class="order-2 md:order-1 relative group">
                    <img src="{{ asset('images/sectors/handicraft-details.jpg') }}" alt="Handicraft Opportunities"
                        class="w-full h-[450px] object-cover rounded-3xl shadow-xl">
                    <div class="absolute bottom-6 left-6 right-6 p-6 bg-white/90 backdrop-blur shadow-2xl rounded-2xl border-l-4 border-blue-600">
                        <p class="text-xs font-black text-blue-600 uppercase mb-1">Artisan Luxury</p>
                        <p class="text-slate-800 text-sm leading-relaxed">Merging traditional techniques with modern high-end aesthetics is creating a new multi-billion dollar niche.</p>
                    </div>
                </div>

                <div class="order-1 md:order-2 space-y-8">
                    <h2 class="text-3xl font-extrabold text-slate-900 uppercase tracking-tight">Growth Opportunities</h2>
                    <div class="grid gap-3">
                        @php
                            $items = [
                                ['icon' => 'couch', 'title' => 'Premium Home Décor Products'],
                                ['icon' => 'box-open', 'title' => 'Sustainable Handmade Packaging'],
                                ['icon' => 'gifts', 'title' => 'Customized Corporate Gifts'],
                                ['icon' => 'gem', 'title' => 'Artisan Luxury Products'],
                                ['icon' => 'ship', 'title' => 'Export-Led Creative Enterprises'],
                                ['icon' => 'leaf', 'title' => 'Eco-Friendly Lifestyle Goods'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-blue-50 border border-transparent hover:border-blue-100 transition-all group">
                            <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-all text-lg">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-lg group-hover:text-blue-700 transition-colors uppercase italic tracking-tight">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- CONCLUSION (CTA) -->
            <div class="relative bg-slate-900 text-white p-12 md:p-16 rounded-3xl text-center shadow-2xl overflow-hidden border-b-4 border-blue-600">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(37,99,235,0.05),transparent)]"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight leading-none">Preserve the Past. Build the Future.</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed mb-10 uppercase font-black tracking-tighter">
                        MSMECCII empowers artisans to transition from local craftsmen to international creative entrepreneurs.
                    </p>
                    <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                        <a href="" class="w-full md:w-auto inline-flex items-center justify-center gap-3 px-10 py-5 bg-blue-600 text-white font-black uppercase tracking-widest rounded-full hover:bg-white hover:text-blue-900 transition-all duration-300 shadow-xl group">
                            Support Local Artisans <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </a>
                        <a href="{{ route('join.index') }}" class="w-full md:w-auto inline-flex items-center justify-center gap-3 px-10 py-5 border border-white/20 text-white font-black uppercase tracking-widest rounded-full hover:bg-white/10 transition-all">
                            Apply for Partnership
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
