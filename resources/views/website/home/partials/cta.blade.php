<!-- CTA Section -->
<section class="relative py-24 overflow-hidden">
    <!-- Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary via-brand-primary to-slate-900"></div>

    <!-- Decorative shapes -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-white/5 rounded-full -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-accent/10 rounded-full translate-y-1/2 -translate-x-1/3 blur-3xl"></div>

    <div class="container relative z-10">
        <div class="max-w-4xl mx-auto text-center animate-on-scroll">

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/15 backdrop-blur-sm border border-white/20 mb-8">
                <i class="fa-solid fa-rocket text-brand-accent text-xs"></i>
                <span class="text-white text-xs font-bold tracking-widest uppercase">Start Your Journey</span>
            </div>

            <h2 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
                Ready to Grow Your <br class="hidden md:block">
                <span class="text-brand-accent">Business?</span>
            </h2>

            <p class="text-lg text-white/80 mb-10 max-w-2xl mx-auto leading-relaxed">
                Join India's leading MSME network. Get recognized, build connections, access growth opportunities, and become part of a community that drives real business transformation.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('register') }}"
                    class="bg-white text-brand-primary px-10 py-4 rounded-xl font-bold text-lg shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 group">
                    Register Now
                    <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="{{ route('sectors.index') }}"
                    class="bg-white/10 backdrop-blur-sm border-2 border-white/30 hover:border-white hover:bg-white/20 text-white px-10 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                    Explore Sectors
                </a>
            </div>

            <!-- Trust indicators -->
            <div class="mt-12 flex flex-wrap items-center justify-center gap-8 text-white/60 text-sm">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-shield-halved text-brand-accent"></i>
                    <span>Govt. Recognized NGO</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-globe text-brand-accent"></i>
                    <span>40+ Countries</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-award text-brand-accent"></i>
                    <span>National Awards Platform</span>
                </div>
            </div>

        </div>
    </div>
</section>
