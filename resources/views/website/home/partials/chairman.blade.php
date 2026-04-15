<section class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Subtle Background -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-brand-accent/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

    <div class="container relative z-10">
        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-xl">
            <div class="flex flex-col lg:flex-row">

                <!-- Chairman Image -->
                <div class="w-full lg:w-2/5 relative animate-on-scroll">
                    <img src="{{ asset('images/home/chairman.jpg') }}" alt="Indrajit Ghosh - Chairman, MSMECCII"
                        class="w-full h-full min-h-[400px] lg:min-h-[650px] object-cover bg-slate-200">

                    <!-- Gradient overlay for mobile name plate -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent lg:hidden"></div>

                    <!-- Mobile name plate -->
                    <div class="absolute bottom-0 left-0 w-full p-8 lg:hidden">
                        <div class="border-l-4 border-brand-accent pl-4">
                            <h3 class="text-2xl font-bold text-white mb-1">Indrajit Ghosh</h3>
                            <p class="text-brand-accent font-medium text-sm">Chairman, MSMECCII</p>
                        </div>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="w-full lg:w-3/5 p-8 lg:p-14 flex flex-col justify-center animate-on-scroll delay-100">

                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-5 w-fit">
                        <i class="fa-solid fa-trophy text-brand-primary text-xs"></i>
                        <span class="text-brand-primary text-xs font-bold tracking-widest uppercase">MSMECCII Prestigious Awards</span>
                    </div>

                    <!-- Desktop name -->
                    <div class="mb-6 hidden lg:block">
                        <div class="border-l-4 border-brand-primary pl-4">
                            <h3 class="text-3xl font-extrabold text-slate-900 mb-1">Indrajit Ghosh</h3>
                            <p class="text-brand-primary font-bold text-sm uppercase tracking-wide">Chairman, MSMECCII</p>
                        </div>
                    </div>

                    <!-- Quote -->
                    <div class="relative mb-8">
                        <div class="absolute -top-4 -left-2 text-6xl text-brand-primary/10 font-serif leading-none">"</div>
                        <h4 class="text-xl md:text-2xl font-bold text-slate-800 leading-snug mb-5 pl-6">
                            It is my privilege and honor to lead MSMECCII in recognizing and celebrating the remarkable achievements of India's SMEs, MSMEs, Mid-Sized Industries, and Corporates through the National Business Excellence Awards.
                        </h4>

                        <div class="prose text-slate-600 text-[15px] leading-relaxed space-y-4 pl-6">
                            <p>
                                At MSMECCII, we believe that businesses are the true drivers of economic growth, innovation, employment generation, and national development. The <strong>MSMECCII National Business Excellence Awards</strong> have been established to honor organizations and entrepreneurs who have demonstrated outstanding performance, innovation, sustainability, and leadership.
                            </p>
                            <p>
                                These awards aim to inspire enterprises of all scales—from emerging startups and MSMEs to established corporates—to continue striving for excellence and contributing meaningfully to India's industrial and economic progress.
                            </p>
                            <p>
                                With over <strong>39 years of extensive global experience</strong> in Plastics, Packaging, and the Recycling Industry across <strong>40+ countries</strong>, I strongly believe that recognition motivates excellence, and excellence drives transformation.
                            </p>
                            <p class="text-slate-800 font-semibold italic">
                                Together, let us build a stronger, more innovative, and globally competitive business ecosystem for India.
                            </p>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-slate-200">
                        <div>
                            <p class="text-4xl font-black text-brand-primary mb-1">39+</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Years Exp.</p>
                        </div>
                        <div>
                            <p class="text-4xl font-black text-brand-primary mb-1">40+</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Countries</p>
                        </div>
                        <div>
                            <p class="text-4xl font-black text-brand-primary mb-1">MBA</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Mech. Engineer</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
