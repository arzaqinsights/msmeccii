<!-- MSMECCII Core Pillars of Service -->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-[120px] -mr-96 -mt-96">
    </div>

    <div class="container relative z-10">
        <div class="mb-16 animate-on-scroll">
            <!-- Section Header -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-10">
                <div class="max-w-3xl">
                    <!-- <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary border shadow-sm mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-light animate-pulse"></span>
                        <span class="text-white text-xs font-bold uppercase">Core Pillars</span>
                    </div> -->
                    <h2 class="text-4xl md:text-5xl xl:text-6xl font-black text-slate-900 leading-[1.1] mb-6">
                        Our Specialized <br> Service <span class="text-brand-primary">Framework</span>
                    </h2>
                    <p class="text-slate-500 text-lg leading-relaxed font-medium">
                        Empowering MSMEs through strategic initiatives, industry advocacy, and growth-driven solutions designed
                        to foster global competitiveness.
                    </p>
                </div>

                <div class="hidden lg:flex flex-col gap-4">
                    <div class="flex items-center gap-4 p-6 bg-white rounded-md border">
                        <div
                            class="w-12 h-12 bg-brand-primary rounded-md flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-users-gear text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Industry Support
                            </p>
                            <p class="text-sm font-bold text-slate-900">Members 5000+</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-6 bg-white rounded-md border">
                        <div
                            class="w-12 h-12 bg-brand-primary rounded-md flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-globe text-xl"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                Global Presence
                            </p>
                            <p class="text-sm font-bold text-slate-900">30+ Countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Grid — Top 3 -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
                $services = [
                    [
                        'slug' => 'funding-initiative',
                        'image' => 'https://images.unsplash.com/photo-1560472355-536de3962603?q=80&w=2070&auto=format&fit=crop',
                        'icon' => 'hand-holding-dollar',
                        'accent' => 'brand-primary',
                        'title' => 'Funding Initiative',
                        'desc' => 'Dedicated Funding Facilitation aimed at strengthening MSMEs by enabling seamless access to finance through leading Banks and NBFCs.'
                    ],
                    [
                        'slug' => 'strategic-promotion',
                        'image' => 'images/services/strategic-promotion.jpg',
                        'icon' => 'chart-line',
                        'accent' => 'brand-primary',
                        'title' => 'Strategic Promotion',
                        'desc' => 'Supporting members in strategic planning and accelerating business growth through promotional initiatives.'
                    ],
                    [
                        'slug' => 'global-awareness',
                        'image' => 'images/services/global-awareness.jpg',
                        'icon' => 'bullhorn',
                        'accent' => 'blue-400',
                        'title' => 'Global Awareness',
                        'desc' => 'Organizing high-profile events and providing exclusive platforms for small businesses as panelists.'
                    ],
                    [
                        'slug' => 'elite-networking',
                        'image' => 'images/services/elite-networking.jpg',
                        'icon' => 'people-group',
                        'accent' => 'indigo-400',
                        'title' => 'Elite Networking',
                        'desc' => 'Facilitating global connections and high-value collaborations through our exclusive core channels.'
                    ],
                    [
                        'slug' => 'market-intelligence',
                        'image' => 'images/services/market-intelligence.jpg',
                        'icon' => 'chart-pie',
                        'accent' => 'amber-400',
                        'title' => 'Market Intelligence',
                        'desc' => 'Delivering real-time data and data-driven insights to keep you ahead of the market curve.'
                    ],
                    [
                        'slug' => 'policy-advocacy',
                        'image' => 'images/sectors/csr.jpg',
                        'icon' => 'file-contract',
                        'accent' => 'rose-400',
                        'title' => 'Policy Advocacy',
                        'desc' => 'Instant access to government notifications and advocating for favorable MSME policies.'
                    ],
                ];
            ?>

            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $svc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('services/'.$svc['slug'])); ?>" class="group relative bg-brand-primary/10 rounded-lg block overflow-visible transition-all duration-500 animate-on-scroll"
                    style="transition-delay: <?php echo e($idx * 100); ?>ms">
                    
                    <!-- Card Top: Image -->
                    <div class="h-56 relative overflow-hidden rounded-t-lg">
                        <img src="<?php echo e(asset($svc['image'])); ?>" alt="<?php echo e($svc['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60"></div>
                    </div>

                    <!-- Floating Icon -->
                    <div class="absolute top-[200px] left-8 w-14 h-14 bg-white rounded-md flex items-center justify-center text-brand-primary z-20 transition-all duration-500 group-hover:-translate-y-2 group-hover:bg-brand-primary group-hover:text-white border border-slate-100">
                        <i class="fa-solid fa-<?php echo e($svc['icon']); ?> text-xl"></i>
                    </div>

                    <!-- Card Bottom: Content -->
                    <div class="p-8 pt-12 relative z-10">
                        <h3 class="text-xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-brand-primary transition-colors uppercase rounded-2xl">
                            <?php echo e($svc['title']); ?>

                        </h3>
                        <p class="text-slate-500 leading-relaxed text-sm font-medium mb-4">
                            <?php echo e($svc['desc']); ?>

                        </p>

                        <!-- Action Marker -->
                        <!-- <div class="flex items-center justify-between border-t border-brand-primary/20 pt-6">
                            <span class="inline-flex items-center gap-2 text-[10px] font-black uppercase tracking-widest text-slate-400 group-hover:text-brand-primary transition-colors">
                                View Service <i class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-2"></i>
                            </span>
                            <span class="text-[10px] font-black text-slate-200 uppercase tracking-tighter group-hover:text-brand-primary/20 transition-colors">CORE // 0<?php echo e($idx + 1); ?></span>
                        </div> -->
                    </div>

                    <!-- Subtle Decorative Background -->
                    <div class="absolute inset-0 bg-brand-primary/0 group-hover:bg-brand-primary/[0.02] pointer-events-none transition-colors duration-500 rounded-2xl"></div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Section Footer with View All CTA -->
        <div class="mt-16 p-8 rounded-lg bg-brand-primary text-white relative overflow-hidden animate-on-scroll">
            <div
                class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]">
            </div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center backdrop-blur-md">
                        <i class="fa-solid fa-handshake-angle text-3xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold">Explore All Our Core Services</h4>
                        <p class="text-white/60 text-sm">6 specialized pillars designed to accelerate your business growth.</p>
                    </div>
                </div>
                <a href="<?php echo e(route('register')); ?>"
                    class="px-10 py-5 bg-brand-accent text-brand-primary font-black uppercase text-sm tracking-widest rounded-full hover:bg-white hover:text-brand-primary transition-all">
                    Get Started Now
                </a>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\laragon\www\msmeccii\resources\views/website/home/partials/services.blade.php ENDPATH**/ ?>