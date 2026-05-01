<?php $__env->startSection('title', 'What is MSMECCII | MSME Chamber of Commerce and Industry of India'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Banner -->
    <section class="relative h-[50vh] min-h-[400px] w-full bg-slate-900 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo e(asset('images/about/hero-bg.png')); ?>" alt="MSMECCII Global Background" class="w-full h-full object-cover opacity-50 scale-105">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
        </div>
        <div class="container relative z-10 text-center animate-on-scroll">
            <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs font-bold uppercase tracking-widest">
                    <li class="inline-flex items-center"><a href="/" class="text-slate-400 hover:text-brand-accent transition-colors flex items-center gap-2">Home</a></li>
                    <li><div class="flex items-center text-slate-600"><i class="fa-solid fa-chevron-right text-[8px] mx-2"></i><span class="text-brand-accent">What is MSMECCII</span></div></li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-7xl font-black text-white tracking-tight leading-tight">
                What is <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-accent to-white">MSMECCII?</span>
            </h1>
            <p class="text-slate-400 mt-6 text-lg md:text-xl max-w-2xl mx-auto font-medium">
                Pioneering the global expansion of India's MSME ecosystem through strategic networking and policy advocacy.
            </p>
        </div>
    </section>

    <!-- Modular sections -->
    <?php echo $__env->make('website.about.partials.who_we_are', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <?php echo $__env->make('website.home.partials.why_choose', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('website.home.partials.growth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('website.home.partials.values', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('website.about.partials.history', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('website.about.partials.mission_vision', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('website.about.partials.core_values', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <?php echo $__env->make('website.home.partials.membership', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\msmeccii\resources\views/website/about/what_is.blade.php ENDPATH**/ ?>