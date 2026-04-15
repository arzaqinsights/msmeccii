<!-- Membership Benefits -->
<section class="py-24 bg-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCI+PHBhdGggZD0iTTIwIDBMMCA0MGg0MEwyMCAweiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmIiBzdHJva2Utd2lkdGg9IjAuNSIvPjwvc3ZnPg==')] bg-repeat"></div>

    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">

            <!-- Visual -->
            <div class="w-full lg:w-1/2 animate-on-scroll">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="bg-white/10 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/15 transition-all">
                            <i class="fa-solid fa-id-card text-brand-accent text-2xl mb-4 block"></i>
                            <h4 class="text-white font-bold mb-2">Member ID & Certificate</h4>
                            <p class="text-slate-400 text-sm">Official membership credentials recognized nationally.</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/15 transition-all">
                            <i class="fa-solid fa-newspaper text-blue-400 text-2xl mb-4 block"></i>
                            <h4 class="text-white font-bold mb-2">Monthly Newsletter</h4>
                            <p class="text-slate-400 text-sm">Industry updates, policy news, and exclusive reports.</p>
                        </div>
                    </div>
                    <div class="space-y-4 pt-8">
                        <div class="bg-white/10 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/15 transition-all">
                            <i class="fa-solid fa-ticket text-purple-400 text-2xl mb-4 block"></i>
                            <h4 class="text-white font-bold mb-2">Event Priority Access</h4>
                            <p class="text-slate-400 text-sm">First access to awards, expos, and trade fairs.</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur border border-white/10 rounded-2xl p-6 hover:bg-white/15 transition-all">
                            <i class="fa-solid fa-percent text-green-400 text-2xl mb-4 block"></i>
                            <h4 class="text-white font-bold mb-2">Special Discounts</h4>
                            <p class="text-slate-400 text-sm">Exclusive pricing on services, training, and partnerships.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="w-full lg:w-1/2 animate-on-scroll delay-100">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 mb-6">
                    <i class="fa-solid fa-gem text-brand-accent text-xs"></i>
                    <span class="text-white text-xs font-bold tracking-widest uppercase">Membership</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-extrabold text-white leading-[1.15] mb-6">
                    Unlock <span class="text-brand-accent">Premium Benefits</span> with Membership
                </h2>

                <p class="text-slate-400 text-lg mb-8 leading-relaxed">
                    MSMECCII membership opens doors to exclusive business opportunities, national recognition, government liaising support, and a powerful professional network that accelerates your growth.
                </p>

                <ul class="space-y-4 mb-10">
                    @foreach(['Business Profile Listing on MSMECCII Portal', 'Nomination Access for National Awards', 'B2B Matchmaking & Trade Delegations', 'Legal & Compliance Advisory Support', 'Brand Visibility & Media Coverage'] as $benefit)
                    <li class="flex items-center gap-3 text-slate-300">
                        <div class="w-6 h-6 rounded-full bg-brand-accent/20 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-brand-accent text-xs"></i>
                        </div>
                        <span class="text-sm font-medium">{{ $benefit }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="{{ route('join.index') }}"
                    class="inline-flex items-center justify-center px-8 py-4 bg-brand-accent hover:bg-brand-accent/90 text-slate-900 rounded-xl font-bold text-lg transition-all shadow-lg hover:shadow-brand-accent/30 group">
                    Become a Member
                    <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</section>
