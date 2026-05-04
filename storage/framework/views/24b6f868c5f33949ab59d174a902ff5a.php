<?php $__env->startSection('title', 'Funding Initiative for MSMEs (2026) - MSMECCII'); ?>

<?php $__env->startSection('content'); ?>

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/40 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('https://images.unsplash.com/photo-1553729459-efe14ef6055d?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-lg mb-6 backdrop-blur-md">
                <i class="fa-solid fa-hand-holding-dollar text-brand-accent"></i>
                <span class="text-xs font-black uppercase tracking-widest">Financial Growth Framework 2026</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black uppercase mb-6 tracking-tight leading-tight">
                Funding <span class="text-brand-accent">Initiative</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic">
                Empowering MSME Growth through Structured Financial Access and Seamless Banking Facilitation.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-24 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: OVERVIEW -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8 animate-in fade-in slide-in-from-left duration-700">
                    <div class="flex items-center gap-4 mb-2">
                        <span class="w-12 h-[2px] bg-brand-primary"></span>
                        <span class="text-brand-primary font-black uppercase tracking-widest text-xs">Overview</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 uppercase italic leading-tight">
                        Bridging the <br> <span class="text-brand-primary">Financial Gap</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        MSMECCII is proud to introduce a dedicated <strong>Funding Facilitation Initiative</strong> aimed at strengthening Micro, Small & Medium Enterprises (MSMEs) by enabling seamless access to finance through leading Public/Private Sector Banks and reputed NBFCs.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-lg border border-slate-100">
                            <i class="fa-solid fa-check-circle text-brand-primary mt-1"></i>
                            <span class="text-xs font-bold uppercase text-slate-700">Working Capital Access</span>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-lg border border-slate-100">
                            <i class="fa-solid fa-check-circle text-brand-primary mt-1"></i>
                            <span class="text-xs font-bold uppercase text-slate-700">Expansion Support</span>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-lg border border-slate-100">
                            <i class="fa-solid fa-check-circle text-brand-primary mt-1"></i>
                            <span class="text-xs font-bold uppercase text-slate-700">Banking Liasoning</span>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-lg border border-slate-100">
                            <i class="fa-solid fa-check-circle text-brand-primary mt-1"></i>
                            <span class="text-xs font-bold uppercase text-slate-700">Financial Inclusion</span>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-brand-primary rounded-lg rotate-3 group-hover:rotate-0 transition-transform duration-500 opacity-10"></div>
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=2071&auto=format&fit=crop" class="rounded-lg shadow-2xl relative z-10 w-full object-cover h-[500px]" alt="Funding Analysis">
                </div>
            </div>

            <!-- SECTION 2: FUNDING OPTIONS -->
            <div class="grid md:grid-cols-3 gap-8">
                <?php $__currentLoopData = [
                    ['icon' => 'building-columns', 't' => 'Project Financing', 'd' => 'Comprehensive funding for new industrial projects and infrastructure development across India.'],
                    ['icon' => 'gears', 't' => 'Machinery Finance', 'd' => 'Upgrade your production capacity with customized equipment and machinery loans for scale.'],
                    ['icon' => 'receipt', 't' => 'Invoice Discounting', 'd' => 'Improve operational cash flow by unlocking capital tied up in your unpaid business invoices.']
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative bg-white p-10 rounded-lg border border-slate-200 hover:border-brand-primary transition-all duration-500 shadow-sm hover:shadow-xl">
                    <div class="w-16 h-16 bg-slate-50 rounded-lg flex items-center justify-center text-brand-primary mb-8 group-hover:bg-brand-primary group-hover:text-white transition-all border border-slate-100">
                        <i class="fa-solid fa-<?php echo e($step['icon']); ?> text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-black text-slate-900 mb-4 uppercase italic"><?php echo e($step['t']); ?></h4>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium"><?php echo e($step['d']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- SECTION 3: FUNDING RANGE & BENEFITS -->
            <div class="bg-slate-950 text-white p-12 md:p-20 rounded-lg relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                <div class="relative z-10 flex flex-col lg:flex-row items-center gap-16">
                    <div class="lg:w-1/2 space-y-6 text-center lg:text-left">
                        <h3 class="text-4xl md:text-5xl font-black uppercase italic tracking-tighter">Funding Support Range</h3>
                        <div class="h-2 w-24 bg-brand-accent mx-auto lg:mx-0"></div>
                        <p class="text-brand-accent font-black text-5xl md:text-6xl uppercase tracking-tighter py-4">
                            ₹5L <span class="text-white text-2xl lowercase">to</span> ₹5Cr
                        </p>
                        <p class="text-slate-400 text-lg">Flexible funding options tailored for startups and established MSMEs.</p>
                    </div>
                    <div class="lg:w-1/2 grid grid-cols-2 gap-6">
                        <?php $__currentLoopData = [
                            ['icon' => 'bolt', 'title' => 'Fast Lane', 'desc' => 'Priority Processing'],
                            ['icon' => 'file-lines', 'title' => 'Expert', 'desc' => 'Documentation Support'],
                            ['icon' => 'percent', 'title' => 'Best Rates', 'desc' => 'Lender Matching'],
                            ['icon' => 'shield-check', 'title' => 'Govt. Backed', 'desc' => 'Scheme Advisory']
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-6 bg-white/5 border border-white/10 rounded-lg hover:bg-white/10 transition-all text-center lg:text-left">
                            <i class="fa-solid fa-<?php echo e($dev['icon']); ?> text-2xl mb-4 text-brand-accent"></i>
                            <h4 class="text-xs font-black uppercase text-white mb-1"><?php echo e($dev['title']); ?></h4>
                            <p class="text-[10px] text-white/50 uppercase tracking-widest"><?php echo e($dev['desc']); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- SECTION 4: PROPOSAL STRUCTURE -->
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="order-2 lg:order-1 grid gap-4">
                    <div class="bg-slate-50 p-8 rounded-lg border border-slate-100 flex gap-6 items-center">
                        <span class="text-4xl font-black text-brand-primary opacity-20">01</span>
                        <div>
                            <h5 class="font-black text-slate-900 uppercase text-sm mb-1">Executive Summary</h5>
                            <p class="text-xs text-slate-500 font-medium">A concise 1-page overview of business goals and funding needs.</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 p-8 rounded-lg border border-slate-100 flex gap-6 items-center">
                        <span class="text-4xl font-black text-brand-primary opacity-20">02</span>
                        <div>
                            <h5 class="font-black text-slate-900 uppercase text-sm mb-1">Market & Financials</h5>
                            <p class="text-xs text-slate-500 font-medium">Industry trends, competitive matrix, and 3-5 year cash projections.</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 p-8 rounded-lg border border-slate-100 flex gap-6 items-center">
                        <span class="text-4xl font-black text-brand-primary opacity-20">03</span>
                        <div>
                            <h5 class="font-black text-slate-900 uppercase text-sm mb-1">Compliance & Identity</h5>
                            <p class="text-xs text-slate-500 font-medium">Udyam Registration, PAN, GST, and recent audited statements.</p>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2 space-y-8">
                    <div class="flex items-center gap-4 mb-2">
                        <span class="w-12 h-[2px] bg-brand-primary"></span>
                        <span class="text-brand-primary font-black uppercase tracking-widest text-xs">Our Role</span>
                    </div>
                    <h2 class="text-4xl font-black text-slate-900 uppercase italic leading-tight">
                        Your Trusted <br> <span class="text-brand-primary">Facilitator</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        MSMECCII acts as your strategic financial mentor, ensuring your business is "Credit Ready" before reaching the lender. We bridge the gap between financial institutions and entrepreneurs.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php $__currentLoopData = ['Pre-screening', 'Lender Connect', 'Funding Camps', 'Mentorship']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="px-4 py-2 bg-slate-900 text-white rounded-lg text-[10px] font-black uppercase tracking-widest"><?php echo e($tag); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- FINAL CALL TO ACTION -->
            <div class="text-center py-20 border-y border-slate-100">
                <h3 class="text-5xl font-black text-slate-900 uppercase italic mb-8 tracking-tighter">Ready to Scale?</h3>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg mb-12 font-medium">
                    Unlock your business potential with MSMECCII's Funding Support initiative. Apply today and accelerate your growth journey.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="<?php echo e(route('contact')); ?>" class="w-full sm:w-auto px-12 py-6 bg-brand-primary text-white font-black uppercase tracking-widest rounded-lg hover:bg-slate-900 transition-all shadow-xl">
                        Apply for Funding
                    </a>
                    <a href="<?php echo e(route('register')); ?>" class="w-full sm:w-auto px-12 py-6 bg-white border-2 border-brand-primary text-brand-primary font-black uppercase tracking-widest rounded-lg hover:bg-brand-primary hover:text-white transition-all">
                        Join Membership
                    </a>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\msmeccii\resources\views/website/services/funding-initiative.blade.php ENDPATH**/ ?>