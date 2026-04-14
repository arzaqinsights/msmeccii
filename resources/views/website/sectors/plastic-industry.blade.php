@extends('layouts.website')

@section('title', 'Plastics Industry')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('{{ asset('images/sectors/plastic-industry.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide">
                Plastics Industry
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed">
                Market insights, growth trends, industry drivers, and future outlook of global and Indian plastics sector.
            </p>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-16 bg-white">
        <div class="container space-y-16">

            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold mb-4 text-slate-900">What is Plastics?</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        <strong>Plastics</strong> are synthetic polymer materials derived mainly from petrochemicals. They
                        are <strong>lightweight, durable, flexible, and cost-effective</strong>.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Widely used across <strong>packaging, automotive, construction, electronics, agriculture, and
                            healthcare</strong>,
                        plastics are essential to modern industry and daily life.
                    </p>
                </div>

                <img src="{{ asset('images/sectors/plastic-industry.png') }}" alt="Plastics Industry"
                    class="w-full h-[320px] object-cover rounded-2xl shadow-lg">
            </div>

            <!-- GLOBAL vs INDIA -->
            <div class="grid md:grid-cols-2 gap-10">

                <!-- GLOBAL -->
                <div class="p-6 rounded-2xl bg-gradient-to-br from-brand-primary to-indigo-700 text-white shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Global Market</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Market Size (2025): <strong>USD 963 Billion</strong></li>
                        <li>Projected (2033): <strong>USD 1.36 Trillion</strong></li>
                        <li>CAGR: <strong>4.4%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Key Drivers</h4>
                    <ul class="list-disc pl-5 text-sm space-y-1">
                        <li>Packaging & e-commerce growth</li>
                        <li>Automotive lightweight demand</li>
                        <li>Infrastructure expansion</li>
                        <li>Healthcare usage</li>
                    </ul>
                </div>

                <!-- INDIA -->
                <div class="p-6 rounded-2xl bg-brand-accent border border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-brand-primary">Indian Market</h3>
                    <ul class="space-y-2 text-sm text-slate-700">
                        <li>Market Size (2025): <strong>USD 57.5 Billion</strong></li>
                        <li>Projected (2033): <strong>USD 87 Billion</strong></li>
                        <li>CAGR: <strong>5.3%</strong></li>
                    </ul>

                    <h4 class="font-semibold mt-5 mb-2">Highlights</h4>
                    <ul class="list-disc pl-5 text-sm text-slate-600 space-y-1">
                        <li>Fastest growing markets globally</li>
                        <li>Driven by FMCG & infrastructure</li>
                        <li>Make in India initiatives</li>
                    </ul>
                </div>

            </div>

            <!-- STATS CARDS -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">$963B</h4>
                    <p class="text-sm text-slate-500 mt-1">Global Market</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">$57.5B</h4>
                    <p class="text-sm text-slate-500 mt-1">India Market</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">4.4%</h4>
                    <p class="text-sm text-slate-500 mt-1">Global CAGR</p>
                </div>
                <div class="p-6 bg-white border rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-2xl font-bold text-brand-primary">5.3%</h4>
                    <p class="text-sm text-slate-500 mt-1">India CAGR</p>
                </div>
            </div>

            <!-- APPLICATIONS -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <img src="{{ asset('images/sectors/plastic-1.jpg') }}" alt="Plastic Applications"
                    class="w-full h-[300px] object-cover rounded-2xl shadow-md">

                <div class="p-6 rounded-2xl bg-brand-primary text-white shadow-lg min-h-[300px] flex flex-col justify-center">
                    <h2 class="text-2xl font-bold mb-4">Key Applications</h2>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-box text-brand-light"></i> Packaging
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-car text-brand-light"></i> Automotive
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-building text-brand-light"></i> Construction
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-microchip text-brand-light"></i> Electronics
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-seedling text-brand-light"></i> Agriculture
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-heart-pulse text-brand-light"></i> Healthcare
                        </div>
                    </div>
                </div>

            </div>

            <!-- TRENDS -->
            <div class="grid md:grid-cols-2 gap-10">

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Industry Trends</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Recycled plastics & circular economy</li>
                        <li>Biodegradable materials</li>
                        <li>Automation in processing</li>
                        <li>Sustainability regulations</li>
                    </ul>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border shadow-sm">
                    <h3 class="text-2xl font-bold mb-4">Growth Outlook</h3>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-slate-600">
                        <li>Asia & Africa industrial growth</li>
                        <li>EV & automotive demand</li>
                        <li>Infrastructure expansion</li>
                        <li>Medical packaging growth</li>
                    </ul>
                </div>

            </div>

            <!-- CONCLUSION -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white p-10 rounded-2xl text-center shadow-lg">
                <h3 class="text-3xl font-bold mb-4">Conclusion</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    The plastics industry remains a <strong>key global manufacturing sector</strong>,
                    driving innovation across packaging, mobility, infrastructure, and healthcare.
                    <strong>India is emerging as a high-growth hub</strong> with strong demand, expanding capacity,
                    and increasing focus on sustainability.
                </p>
            </div>

        </div>
    </section>

@endsection