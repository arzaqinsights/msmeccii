<section class="py-20 bg-white relative overflow-hidden">
    <!-- Background Decorators -->
    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-brand-accent/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-brand-primary/10 rounded-full blur-3xl"></div>

    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Image Area -->
            <div class="w-full lg:w-1/2 relative group animate-on-scroll">
                <div class="relative overflow-hidden flex flex-col gap-4">
                    <img src="{{ asset('images/home/growth.jpeg') }}" alt="About MSMECCII"
                        class="w-full md:h-[320px] object-cover rounded-lg" loading="lazy">
                    <!-- <div class="absolute inset-0 bg-brand-primary/20 group-hover:bg-transparent transition-all duration-500"></div> -->
                    <img src="{{ asset('images/home/award-1.jpeg') }}" alt="About MSMECCII"
                        class="w-full md:h-[300px] object-cover object-top rounded-lg" loading="lazy">
                </div>

                <!-- Floating Badge -->
                <div
                    class="absolute -bottom-6 md:-right-6 right-2 bg-brand-primary text-white p-6 rounded-md shadow-2xl z-20 animate-on-scroll delay-200">
                    <p class="text-4xl font-black text-brand-accent mb-1">7+ Years</p>
                    <p class="text-xs font-bold tracking-widest uppercase text-white/70">Relentless Services <br> to the
                        Industreis</p>
                </div>
            </div>

            <!-- Content Area -->
            <div class="w-full lg:w-1/2 animate-on-scroll delay-100">
                <!-- <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary border mb-6">
                    <span class="w-2 h-2 rounded-full bg-brand-light"></span>
                    <span class="text-brand-light text-xs font-bold tracking-widest uppercase">About MSMECCII</span>
                </div> -->

                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-[1.15] mb-6">
                    India's Premier Network for <span class="text-brand-primary">MSME Growth</span> and Innovation
                </h2>

                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    We are a global business network and dedicated NGO committed to furthering the interests of the MSME
                    sector. By fostering an inclusive and vibrant community, we create unparalleled opportunities for
                    growth, exposure, and cross-border trade.
                </p>

                <div class="space-y-5 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 rounded-xl bg-brand-accent/20 flex items-center justify-center">
                            <i class="fa-solid fa-award text-brand-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900 mb-1">Eminent Advisory Board</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">Our Global Advisory Board features
                                distinguished Padma Shri and Padma Bhushan awardees guiding our vision.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 rounded-xl bg-brand-primary/10 flex items-center justify-center">
                            <i class="fa-solid fa-globe text-brand-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900 mb-1">Global Impact Across 40+ Countries</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">Representing India's MSMEs effectively on
                                national and international governance platforms.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                            <i class="fa-solid fa-handshake text-purple-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900 mb-1">Networking & Business Growth</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">Connecting MSMEs with investors, markets,
                                and strategic partners for sustainable growth.</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center gap-4">
                    <a href="{{ route('about.what_is') }}"
                        class="inline-flex items-center justify-center w-full md:w-auto px-8 py-4 border bg-brand-primary text-white rounded-md font-bold transition-all group">
                        Discover More About Us
                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center w-full md:w-auto px-8 py-4 bg-brand-accent border text-black rounded-md font-bold transition-all group">
                        Contact Us
                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>