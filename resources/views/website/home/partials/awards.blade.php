<!-- Awards & Recognition -->
<section class="py-4 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">

            <!-- Content -->
            <div class="w-full lg:w-1/2 animate-on-scroll">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-100 border border-amber-200 mb-6">
                    <i class="fa-solid fa-medal text-amber-600 text-xs"></i>
                    <span class="text-amber-700 text-xs font-bold tracking-widest uppercase">Awards & Recognition</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-[1.15] mb-6">
                    National Business <span class="text-brand-primary">Excellence Awards</span>
                </h2>

                <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                    MSMECCII's National Business Excellence Awards celebrate the remarkable achievements of India's SMEs, MSMEs, Mid-Sized Industries, and Corporates who are setting new benchmarks in innovation, sustainability, and business excellence.
                </p>

                <p class="text-slate-500 mb-8 leading-relaxed">
                    Our awards recognize businesses that demonstrate exceptional quality, leadership, social responsibility, and contribution to India's economic growth across 26+ focused industry sectors.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                    <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm">
                        <div class="text-3xl font-black text-brand-primary mb-1">{{ count(config('sectors.sectors')) }}+</div>
                        <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Industry Sectors</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm">
                        <div class="text-3xl font-black text-brand-primary mb-1">2300+</div>
                        <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Award Categories</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm">
                        <div class="text-3xl font-black text-brand-primary mb-1">350+</div>
                        <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Past Awardees</p>
                    </div>
                </div>

                <a href="{{ route('events.index') }}"
                    class="inline-flex items-center justify-center px-8 py-4 bg-brand-primary hover:bg-brand-primary/90 text-white rounded-xl font-bold transition-all shadow-lg hover:shadow-brand-primary/30 group">
                    View Award Categories
                    <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Image / Visual -->
            <div class="w-full lg:w-1/2 animate-on-scroll delay-200">
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/home/award.jpeg') }}" alt="MSMECCII Awards Ceremony"
                            class="w-full md:h-[500px] object-cover bg-slate-200" loading="lazy">
                    </div>

                    <!-- Trophy Badge -->
                    <div class="absolute md:-top-6 -top-12 left-2 md:-left-6 bg-white rounded-2xl p-5 shadow-xl border animate-on-scroll delay-300">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center">
                                <i class="fa-solid fa-trophy text-amber-500 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm font-black text-slate-900">Excellence Awards</p>
                                <p class="text-xs text-slate-500">Since 2019</p>
                            </div>
                        </div>
                    </div>

                    <!-- Award Badge -->
                    <div class="absolute -bottom-6 right-2 md:-right-4 bg-brand-primary text-white rounded-2xl px-6 py-4 shadow-xl">
                        <p class="text-2xl font-black mb-0.5">⭐ 3rd Edition</p>
                        <p class="text-xs font-semibold text-white/70">Coming Soon</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
