<!-- Impact Numbers -->
<section class="relative py-16 mt-10 bg-brand-primary overflow-hidden">
    <!-- Decorative -->
    <div
        class="absolute inset-0 opacity-5 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+PGNpcmNsZSBjeD0iMzAiIGN5PSIzMCIgcj0iMSIgZmlsbD0iI2ZmZmZmZiIvPjwvc3ZnPg==')] bg-repeat">
    </div>
    <div class="absolute left-0 top-0 w-1/3 h-full bg-brand-primary"></div>

    <div class="container relative z-10">
        @php
            $sectorCount = count(config('sectors.sectors'));
        @endphp
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 text-center" x-data="{
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
            }" x-intersect.once="
                shown = true;
                animateCount(200, 'count-enterprises');
                animateCount({{ $sectorCount }}, 'count-sectors');
                animateCount(30, 'count-countries');
            ">

            <div class="animate-on-scroll">
                <div class="text-5xl md:text-8xl font-black text-brand-light mb-2 tabular-nums">
                    <span id="count-enterprises">0</span><span class="text-brand-accent">K</span>
                </div>
                <p class="text-slate-400 text-sm font-semibold uppercase tracking-widest">Enterprises Reached</p>
            </div>

            <div class="animate-on-scroll delay-100">
                <div class="text-5xl md:text-8xl font-black text-brand-light mb-2 tabular-nums">
                    <span id="count-sectors">0</span><span class="text-brand-accent">+</span>
                </div>
                <p class="text-slate-400 text-sm font-semibold uppercase tracking-widest">Industry Sectors</p>
            </div>

            <div class="animate-on-scroll delay-200">
                <div class="text-5xl md:text-8xl font-black text-brand-light mb-2 tabular-nums">
                    <span id="count-countries">0</span><span class="text-brand-accent">+</span>
                </div>
                <p class="text-slate-400 text-sm font-semibold uppercase tracking-widest">Countries Reached</p>
            </div>

        </div>
    </div>
</section>