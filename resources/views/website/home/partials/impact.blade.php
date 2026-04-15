<!-- Impact Numbers -->
<section class="relative py-16 bg-slate-900 overflow-hidden">
    <!-- Decorative -->
    <div class="absolute inset-0 opacity-5 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+PGNpcmNsZSBjeD0iMzAiIGN5PSIzMCIgcj0iMSIgZmlsbD0iI2ZmZmZmZiIvPjwvc3ZnPg==')] bg-repeat"></div>
    <div class="absolute left-0 top-0 w-1/3 h-full bg-gradient-to-r from-brand-primary/20 to-transparent"></div>

    <div class="container relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center"
            x-data="{
                shown: false,
                animateCount(target, id) {
                    let current = 0;
                    const step = Math.ceil(target / 60);
                    const timer = setInterval(() => {
                        current += step;
                        if (current >= target) { current = target; clearInterval(timer); }
                        document.getElementById(id).textContent = current.toLocaleString();
                    }, 30);
                }
            }"
            x-intersect.once="
                shown = true;
                animateCount(50000, 'count-enterprises');
                animateCount(26, 'count-sectors');
                animateCount(40, 'count-countries');
                animateCount(2019, 'count-year');
            ">

            <div class="animate-on-scroll">
                <div class="text-5xl md:text-6xl font-black text-white mb-2 tabular-nums">
                    <span id="count-enterprises">0</span><span class="text-brand-accent">+</span>
                </div>
                <p class="text-slate-400 text-sm font-semibold uppercase tracking-widest">Enterprises Reached</p>
            </div>

            <div class="animate-on-scroll delay-100">
                <div class="text-5xl md:text-6xl font-black text-white mb-2 tabular-nums">
                    <span id="count-sectors">0</span><span class="text-brand-accent">+</span>
                </div>
                <p class="text-slate-400 text-sm font-semibold uppercase tracking-widest">Industry Sectors</p>
            </div>

            <div class="animate-on-scroll delay-200">
                <div class="text-5xl md:text-6xl font-black text-white mb-2 tabular-nums">
                    <span id="count-countries">0</span><span class="text-brand-accent">+</span>
                </div>
                <p class="text-slate-400 text-sm font-semibold uppercase tracking-widest">Countries Reached</p>
            </div>

            <div class="animate-on-scroll delay-300">
                <div class="text-5xl md:text-6xl font-black text-white mb-2 tabular-nums">
                    <span id="count-year">0</span>
                </div>
                <p class="text-slate-400 text-sm font-semibold uppercase tracking-widest">Established NGO</p>
            </div>

        </div>
    </div>
</section>
