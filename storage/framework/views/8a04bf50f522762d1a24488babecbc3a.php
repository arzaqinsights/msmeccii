<?php $__env->startSection('title', $event->title . ' | MSMECCII Events'); ?>

<?php
    // Fetch Wall of Excellence awards to show on the event page
    $excellenceAwards = \App\Models\ExcellenceAward::where('status', 'published')
        ->where('show_on_home', true)
        ->orderBy('order')
        ->take(3)
        ->get();
?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center pt-32 pb-24 overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-slate-900"></div>
        </div>

        <div class="container relative z-10">
            <div class="flex flex-col items-center gap-6 lg:gap-8">

                <div class="flex flex-col lg:flex-row gap-8 items-center justify-between">
                    <!-- Left Side Details -->
                    <div class="w-full lg:w-1/2 animate-on-scroll">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/20 border border-brand-accent mb-6">
                            <i class="fa-solid fa-trophy text-brand-accent text-xs"></i>
                        <span class="text-brand-accent text-[10px] font-black tracking-widest uppercase">Government Recognized • 350+ Awardees</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight mb-6">
                        <?php echo e($event->title); ?>

                    </h1>

                    <p class="text-lg text-slate-300 mb-8 max-w-xl font-medium leading-relaxed">
                        Get nationally recognized for your business excellence. Join 350+ award-winning MSMEs across 26+ sectors. Backed by Padma Shri & Padma Bhushan advisory board members.
                    </p>

                    <div class="flex flex-wrap gap-6 items-center mb-10">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 shadow-xl">
                                <i class="fa-regular fa-clock text-brand-accent text-xl"></i>
                            </div>
                            <div>
                                <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-1">Start Date</span>
                                <span class="block text-sm font-bold text-white"><?php echo e($event->event_date->format('d M, Y | h:i A')); ?></span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-lg bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/10 shadow-xl">
                                <i class="fa-solid fa-location-dot text-brand-accent text-xl"></i>
                            </div>
                            <div>
                                <span class="block text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-1">Location</span>
                                <span class="block text-sm font-bold text-white"><?php echo e($event->location ?: 'New Delhi, India'); ?></span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Side Image -->
                <div class="w-full lg:w-1/2 animate-on-scroll relative mt-12 lg:mt-0">
                    <!-- Background decorative glow -->
                    <!-- <div class="absolute inset-0 bg-brand-primary/20 rounded-lg blur-3xl transform scale-105 translate-y-4"></div> -->

                    <div class="relative rounded-lg overflow-hidden border border-white/10">
                        <img src="<?php echo e($event->image ? asset($event->image) : asset('images/event-placeholder.jpg')); ?>" alt="<?php echo e($event->title); ?>" class="w-full h-auto object-cover transition-transform duration-700">
                        <!-- <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent pointer-events-none"></div> -->
                    </div>
                </div>
               </div>

                <?php if($event->show_timer): ?>
                    <div class="text-[10px] md:text-base w-full text-left lg:text-lg font-black text-brand-light uppercase tracking-widest"><i class="fa-solid fa-fire text-orange-500 mr-1"></i> Event Starts in</div>
                        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-lg p-6 md:p-10 inline-block w-full">
                            <div x-data="{
                                target: new Date('<?php echo e($event->event_date->format('Y-m-d\TH:i:s')); ?>').getTime(),
                                now: new Date().getTime(),
                                get t() { return Math.max(0, this.target - this.now); },
                                get d() { return Math.floor(this.t / (1000*60*60*24)); },
                                get h() { return Math.floor((this.t % (1000*60*60*24)) / (1000*60*60)); },
                                get m() { return Math.floor((this.t % (1000*60*60)) / (1000*60)); },
                                get s() { return Math.floor((this.t % (1000*60)) / 1000); }
                            }" x-init="setInterval(() => now = new Date().getTime(), 1000)" class="flex justify-between text-center">
                                <div><span class="flex-1 flex flex-col md:flex-row md:justify-center items-center text-3xl md:text-5xl lg:text-8xl font-black text-brand-light" x-text="d">0</span><span class="text-xs md:text-base lg:text-lg font-black text-slate-500 uppercase tracking-widest">Days</span></div>
                                <div class="w-px h-10 md:h-15 lg:h-20 bg-white/10 my-auto"></div>
                                <div><span class="flex-1 flex flex-col md:flex-row md:justify-center items-center text-3xl md:text-5xl lg:text-8xl font-black text-brand-light" x-text="h">0</span><span class="text-xs md:text-base lg:text-lg font-black text-slate-500 uppercase tracking-widest">Hrs</span></div>
                                <div class="w-px h-10 md:h-15 lg:h-20 bg-white/10 my-auto"></div>
                                <div><span class="flex-1 flex flex-col md:flex-row md:justify-center items-center text-3xl md:text-5xl lg:text-8xl font-black text-brand-light" x-text="m">0</span><span class="text-xs md:text-base lg:text-lg font-black text-slate-500 uppercase tracking-widest">Min</span></div>
                                <div class="w-px h-10 md:h-15 lg:h-20 bg-white/10 my-auto"></div>
                                <div><span class="flex-1 flex flex-col md:flex-row md:justify-center items-center text-3xl md:text-5xl lg:text-8xl font-black text-brand-light" x-text="s">0</span><span class="text-xs md:text-base lg:text-lg font-black text-slate-500 uppercase tracking-widest">Sec</span></div>
                            </div>
                        </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Content Body -->
    <div class="bg-slate-50 py-16" 
         x-data="{ 
            activeSection: 'about',
            checkScroll() {
                const sections = ['about', 'guests', 'highlights', 'excellence', 'gallery', 'testimonials', 'pricing', 'partners', 'faq', 'resources', 'venue'];
                for (const section of sections) {
                    const el = document.getElementById(section);
                    if (el) {
                        const rect = el.getBoundingClientRect();
                        if (rect.top <= 160 && rect.bottom >= 160) {
                            this.activeSection = section;
                            break;
                        }
                    }
                }
            }
         }"
         @scroll.window.throttle.50ms="checkScroll()">
        <div class="container overflow-visible">
            <div class="flex flex-col lg:flex-row gap-12 items-start relative">

                <!-- Left Sticky Sidebar (ElitePlus Style) -->
                <aside class="w-full hidden lg:block lg:w-1/4 sticky top-32 z-30">
                    <div class="bg-white rounded-lg border overflow-hidden transform transition-all hover:scale-[1.02]">
                        <div class="bg-slate-900 p-6">
                            <h4 class="text-xs font-black text-white uppercase tracking-widest flex items-center gap-2">
                                 <span class="w-2 h-2 rounded-full bg-brand-accent animate-ping"></span> Quick Navigation
                            </h4>
                        </div>
                        <div class="p-2">
                            <nav class="space-y-1">
                                <?php
                                    $navItems = [
                                        ['id' => 'about', 'label' => 'About Summit', 'icon' => 'fa-info-circle'],
                                        ['id' => 'guests', 'label' => 'Special Guests', 'icon' => 'fa-star'],
                                        ['id' => 'highlights', 'label' => 'Why Join?', 'icon' => 'fa-star'],
                                        ['id' => 'excellence', 'label' => 'Wall of Excellence', 'icon' => 'fa-crown'],
                                        ['id' => 'gallery', 'label' => 'Past Highlights', 'icon' => 'fa-images'],
                                        ['id' => 'testimonials', 'label' => 'Success Stories', 'icon' => 'fa-comments'],
                                        ['id' => 'pricing', 'label' => 'Registration', 'icon' => 'fa-ticket'],
                                        ['id' => 'faq', 'label' => 'FAQ', 'icon' => 'fa-question-circle'],
                                        ['id' => 'resources', 'label' => 'Resources', 'icon' => 'fa-folder-open'],
                                        ['id' => 'venue', 'label' => 'Venue Info', 'icon' => 'fa-map-marker-alt'],
                                        ['id' => 'partners', 'label' => 'Sponsors', 'icon' => 'fa-handshake'],
                                    ];
                                ?>

                                <?php $__currentLoopData = $navItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $showItem = false;
                                        if ($item['id'] === 'excellence') {
                                            $showItem = $excellenceAwards->count() > 0;
                                        } elseif (in_array($item['id'], ['gallery', 'testimonials'])) {
                                            $showItem = isset($event->builder_content[$item['id']]) && count($event->builder_content[$item['id']]) > 0;
                                        } elseif ($item['id'] === 'guests') {
                                            $showItem = isset($event->builder_content['guests']) && count($event->builder_content['guests']) > 0;
                                        } else {
                                            $showItem = isset($event->builder_content[$item['id']]) && (!is_array($event->builder_content[$item['id']]) || count($event->builder_content[$item['id']]) > 0);
                                        }
                                    ?>

                                    <?php if($showItem): ?>
                                        <a href="#<?php echo e($item['id']); ?>" 
                                           @click="activeSection = '<?php echo e($item['id']); ?>'"
                                           :class="activeSection === '<?php echo e($item['id']); ?>' ? 'bg-brand-primary text-white' : 'text-slate-600 hover:bg-slate-50'"
                                           class="flex items-center justify-between p-4 rounded-lg text-[11px] font-black uppercase tracking-widest transition-all">
                                            <span class="flex items-center gap-3">
                                                <i class="fa-solid <?php echo e($item['icon']); ?> w-4 text-[12px]"></i>
                                                <?php echo e($item['label']); ?>

                                            </span>
                                            <i class="fa-solid fa-chevron-right text-[8px]"></i>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </nav>
                        </div>
                        <div class="p-6 bg-slate-50 border-t border-slate-100">
                            <a href="<?php echo e($event->builder_content['about']['registration_url'] ?? url('join')); ?>" target="_blank" class="block w-full bg-slate-900 hover:bg-black text-white text-center py-4 rounded-lg font-black text-xs uppercase tracking-widest transition-all">
                                 Register Now <i class="fa-solid fa-bolt ml-1 text-brand-accent"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Box / WhatsApp & Call CTA -->
                    <div class="mt-6 bg-slate-100 rounded-lg p-6 shadow-sm border border-slate-200 text-center">
                        <h5 class="text-[10px] font-black text-slate-800 uppercase tracking-widest mb-3">Prefer to Talk First?</h5>
                        <p class="text-xs text-slate-600 mb-4 font-medium">Our team can guide you through the nomination process.</p>
                        <div class="space-y-3">
                            <a href="https://wa.me/919810690843?text=Hi,%20I'm%20interested%20in%20the%20<?php echo e(urlencode($event->title)); ?>%20nomination." target="_blank" class="flex items-center justify-center gap-2 w-full bg-[#25D366] text-white hover:bg-[#1ebe5b] py-3 rounded-lg font-bold text-sm transition-colors shadow-sm">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Apply via WhatsApp
                            </a>
                            <a href="tel:+919810690843" class="flex items-center justify-center gap-2 w-full bg-slate-900 text-white hover:bg-black py-3 rounded-lg font-bold text-sm transition-colors shadow-sm">
                                <i class="fa-solid fa-phone"></i> Call Us Now
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content Sections -->
                <main class="w-full lg:w-3/4 space-y-12">

                    <!-- About Section -->
                    <div id="about" class="scroll-mt-36 bg-white rounded-lg p-8 md:p-10 shadow-sm border border-slate-100 animate-on-scroll">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 rounded-lg bg-brand-primary/10 flex items-center justify-center">
                                <i class="fa-solid fa-circle-info text-brand-primary text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-3xl font-black text-slate-900 tracking-tight">About The <span class="text-brand-primary">Summit</span></h2>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest"><?php echo e($event->builder_content['about']['subtitle'] ?? 'Transforming the Future'); ?></p>
                            </div>
                        </div>
                        <div class="prose prose-slate max-w-none text-slate-600 font-medium leading-relaxed">
                            <?php echo nl2br(e($event->builder_content['about']['description'] ?? $event->description)); ?>

                        </div>

                        <!-- 4-Step Process
                        <div class="mt-12 border-t border-slate-100 pt-8">
                            <h4 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-6 text-center">How It Works</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="w-10 h-10 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-slate-500 font-bold mb-3">1</div>
                                    <p class="text-xs font-bold text-slate-700">Apply Online</p>
                                </div>
                                <div>
                                    <div class="w-10 h-10 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-slate-500 font-bold mb-3">2</div>
                                    <p class="text-xs font-bold text-slate-700">Expert Evaluation</p>
                                </div>
                                <div>
                                    <div class="w-10 h-10 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-slate-500 font-bold mb-3">3</div>
                                    <p class="text-xs font-bold text-slate-700">Shortlisting</p>
                                </div>
                                <div>
                                    <div class="w-10 h-10 mx-auto bg-brand-primary/10 rounded-full flex items-center justify-center text-brand-primary font-bold mb-3">4</div>
                                    <p class="text-xs font-bold text-brand-primary">Award Ceremony</p>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <!-- Special Guests Section -->
                    <?php if(isset($event->builder_content['guests']) && count($event->builder_content['guests']) > 0): ?>
                        <?php
                            $guests = $event->builder_content['guests'];
                            $fullGuests = array_filter($guests, fn($g) => (!isset($g['display_style']) || $g['display_style'] === 'full') && !empty($g['name']));
                            $portraitGuests = array_filter($guests, fn($g) => isset($g['display_style']) && $g['display_style'] === 'portrait' && !empty($g['name']));
                        ?>
                        <div id="guests" class="scroll-mt-36 animate-on-scroll">

                            <?php if(count($fullGuests) > 0): ?>
                                <div class="space-y-6 mb-8">
                                    <?php $__currentLoopData = $fullGuests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="bg-brand-primary/10 rounded-lg p-6 relative overflow-hidden group">
                                            <!-- <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary/10 rounded-full blur-3xl -mr-32 -mt-32 transition-transform duration-1000 group-hover:scale-150"></div> -->

                                            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center md:items-start">
                                                <div class="w-full h-auto overflow-hidden md:w-40 shrink-0 rounded-lg bg-slate-800 flex items-center justify-center">
                                                    <?php if(!empty($guest['photo'])): ?>
                                                        <img src="<?php echo e(asset($guest['photo'])); ?>" alt="<?php echo e($guest['name']); ?>" class="w-full h-full object-cover">
                                                    <?php else: ?>
                                                        <i class="fa-solid fa-user-tie text-5xl text-slate-800"></i>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="flex-1 text-center md:text-left">
                                                    <div class="inline-block px-3 py-1 bg-brand-primary/10 border border-brand-primary rounded-full text-[10px] font-black text-brand-primary uppercase tracking-widest mb-4">
                                                        <i class="fa-solid fa-star mr-1"></i> <?php echo e($guest['title'] ?? 'Special Guest'); ?>

                                                    </div>
                                                    <h3 class="text-2xl md:text-3xl font-black text-black mb-2"><?php echo e($guest['name']); ?></h3>
                                                    <p class="text-brand-primary font-bold text-sm mb-4"><?php echo e($guest['designation']); ?></p>

                                                    <?php if(!empty($guest['about'])): ?>
                                                        <div class="text-slate-800 text-xs md:text-sm font-medium leading-relaxed prose prose-invert max-w-none">
                                                            <?php echo nl2br(e($guest['about'])); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <?php if(count($portraitGuests) > 0): ?>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <?php $__currentLoopData = $portraitGuests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="bg-brand-primary/10 overflow-hidden rounded-lg p-3 text-center hover:shadow-md transition-shadow relative group">
                                            <div class="w-full aspect-9/14 mx-auto rounded-lg overflow-hidden mb-4 transition-transform">
                                                <?php if(!empty($guest['photo'])): ?>
                                                    <img src="<?php echo e(asset($guest['photo'])); ?>" alt="<?php echo e($guest['name']); ?>" class="w-full h-full object-cover">
                                                <?php else: ?>
                                                    <div class="w-full h-full flex items-center justify-center bg-brand-primary/10 text-brand-primary font-black text-2xl">
                                                        <?php echo e(substr($guest['name'], 0, 1)); ?>

                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="inline-block px-2 py-0.5 bg-brand-primary/10 rounded-full text-[9px] font-black text-brand-primary uppercase tracking-widest mb-2">
                                                <?php echo e($guest['title'] ?? 'Special Guest'); ?>

                                            </div>
                                            <h3 class="text-sm font-black text-slate-900 mb-1 leading-tight"><?php echo e($guest['name']); ?></h3>
                                            <p class="text-[10px] font-bold text-slate-500 leading-tight"><?php echo e($guest['designation']); ?></p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                    <!-- Highlights Section -->
                    <?php if(isset($event->builder_content['highlights']) && count($event->builder_content['highlights']) > 0): ?>
                        <div id="highlights" class="scroll-mt-36 animate-on-scroll">
                            <div class="space-y-8">
                                <?php $__currentLoopData = $event->builder_content['highlights']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="animate-on-scroll">
                                        <?php if(($hl['title'] && $hl['title'] !== '') || ($hl['desc'] && $hl['desc'] !== '')): ?>
                                            <div class="mb-6 p-8 bg-slate-50 rounded-lg border border-slate-100 shadow-sm relative overflow-hidden group">
                                                <div class="absolute top-0 right-0 w-40 h-40 bg-brand-primary/5 rounded-full blur-3xl -mr-20 -mt-20 group-hover:scale-150 transition-transform duration-700"></div>
                                                <div class="relative z-10">
                                                    <h4 class="text-2xl font-black uppercase tracking-tight text-slate-900 mb-4 flex items-center gap-3">
                                                        <span class="w-1.5 h-8 bg-brand-primary rounded-full"></span>
                                                        <?php echo e($hl['title']); ?>

                                                    </h4>
                                                    <div class="text-sm font-bold text-slate-500 leading-relaxed max-w-3xl prose-sm">
                                                        <?php echo nl2br(e($hl['desc'])); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <?php if(isset($hl['pdf1_path']) && $hl['pdf1_path']): ?>
                                                <div class="group bg-white rounded-lg p-5 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                                    <div class="aspect-video bg-slate-50 rounded-lg mb-4 overflow-hidden border border-slate-100 relative">
                                                        <?php if(isset($hl['pdf1_thumb']) && $hl['pdf1_thumb']): ?>
                                                            <img src="<?php echo e(asset($hl['pdf1_thumb'])); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                        <?php else: ?>
                                                            <div class="w-full h-full flex items-center justify-center bg-brand-primary/5">
                                                                <i class="fa-solid fa-file-pdf text-4xl text-brand-primary/20"></i>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                                                            <a href="<?php echo e(asset($hl['pdf1_path'])); ?>" target="_blank" class="bg-white text-slate-900 px-5 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-brand-primary hover:text-white">
                                                                View Document <i class="fa-solid fa-up-right-from-square ml-1 text-[10px]"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <span class="block text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Attachment 01</span>
                                                            <h5 class="text-xs font-black text-slate-900 uppercase"><?php echo e($hl['pdf1_name'] ?: 'Strategic Document'); ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if(isset($hl['pdf2_path']) && $hl['pdf2_path']): ?>
                                                <div class="group bg-white rounded-lg p-5 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                                    <div class="aspect-video bg-slate-50 rounded-lg mb-4 overflow-hidden border border-slate-100 relative">
                                                        <?php if(isset($hl['pdf2_thumb']) && $hl['pdf2_thumb']): ?>
                                                            <img src="<?php echo e(asset($hl['pdf2_thumb'])); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                        <?php else: ?>
                                                            <div class="w-full h-full flex items-center justify-center bg-brand-primary/5">
                                                                <i class="fa-solid fa-file-pdf text-4xl text-brand-primary/20"></i>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                                                            <a href="<?php echo e(asset($hl['pdf2_path'])); ?>" target="_blank" class="bg-white text-slate-900 px-5 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:bg-brand-primary hover:text-white">
                                                                View Document <i class="fa-solid fa-up-right-from-square ml-1 text-[10px]"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <span class="block text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Attachment 02</span>
                                                            <h5 class="text-xs font-black text-slate-900 uppercase"><?php echo e($hl['pdf2_name'] ?: 'Resource Guide'); ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Wall of Excellence Section -->
                    <?php if($excellenceAwards->count() > 0): ?>
                        <div id="excellence" class="scroll-mt-36 bg-white rounded-lg p-8 md:p-10 shadow-sm border border-slate-100 animate-on-scroll">
                            <div class="flex items-center justify-between mb-8">
                                <div>
                                    <h2 class="text-3xl font-black text-slate-900 tracking-tight">Wall of <span class="text-brand-primary">Excellence</span></h2>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Join these recognized leaders</p>
                                </div>
                                <a href="<?php echo e(route('excellence.index')); ?>" class="hidden md:inline-flex items-center gap-2 text-brand-primary text-xs font-black uppercase tracking-widest hover:gap-3 transition-all">
                                    View All <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <?php $__currentLoopData = $excellenceAwards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="group bg-slate-50 rounded-lg p-3 border border-slate-100 hover:shadow-lg transition-all">
                                        <div class="relative rounded-lg overflow-hidden aspect-[4/5] mb-4">
                                            <img src="<?php echo e(asset($award->award_image)); ?>" alt="<?php echo e($award->title); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                                            <div class="absolute bottom-4 left-4 right-4">
                                                <p class="text-white font-black text-sm leading-tight"><?php echo e($award->title); ?></p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 px-1 pb-1">
                                            <?php if($award->giver_image): ?>
                                                <img src="<?php echo e(asset($award->giver_image)); ?>" class="w-8 h-8 rounded-full border border-slate-200 object-cover">
                                            <?php endif; ?>
                                            <div>
                                                <p class="text-[10px] font-black text-slate-900 leading-none mb-0.5"><?php echo e($award->giver_name); ?></p>
                                                <p class="text-[8px] font-bold text-slate-500 uppercase tracking-widest"><?php echo e(Str::limit($award->giver_designation, 25)); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Dynamic Past Gallery Section -->
                    <?php if(isset($event->builder_content['gallery']) && count($event->builder_content['gallery']) > 0): ?>
                        <div id="gallery" class="scroll-mt-36 bg-slate-50 rounded-lg p-8 md:p-10 shadow-sm border border-slate-100 animate-on-scroll">
                            <div class="mb-8 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                                <div>
                                    <h2 class="text-3xl font-black text-slate-900 tracking-tight">Past <span class="text-brand-primary">Highlights</span></h2>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Glimpses from previous editions</p>
                                </div>
                                <a href="<?php echo e(route('gallery')); ?>" class="inline-flex items-center justify-center gap-2 bg-slate-900 hover:bg-brand-primary text-white px-6 py-3 rounded-lg text-xs font-black uppercase tracking-widest transition-all w-full lg:w-auto shadow-sm hover:shadow-md hover:-translate-y-0.5">
                                    View Full Gallery <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <?php $__currentLoopData = $event->builder_content['gallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="relative aspect-video rounded-lg overflow-hidden border border-slate-200 group">
                                        <?php if(isset($media['type']) && $media['type'] === 'video'): ?>
                                            <video src="<?php echo e(asset($media['url'])); ?>" controls class="w-full h-full object-cover"></video>
                                        <?php else: ?>
                                            <img src="<?php echo e(asset($media['url'])); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Dynamic Testimonials Section -->
                    <?php if(isset($event->builder_content['testimonials']) && count($event->builder_content['testimonials']) > 0): ?>
                        <div id="testimonials" class="scroll-mt-36 bg-white rounded-lg p-8 md:p-10 shadow-sm border border-slate-100 animate-on-scroll">
                            <div class="mb-8">
                                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Success <span class="text-brand-primary">Stories</span></h2>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">What past participants say</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <?php $__currentLoopData = $event->builder_content['testimonials']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="bg-slate-50 p-6 rounded-lg border border-slate-100 relative hover:shadow-md transition-shadow">
                                        <i class="fa-solid fa-quote-left text-3xl text-brand-primary/10 absolute top-4 right-4"></i>
                                        <p class="text-sm font-medium text-slate-600 mb-6 relative z-10 italic leading-relaxed">"<?php echo e($testimonial['text']); ?>"</p>
                                        <div class="flex items-center gap-3">
                                            <?php if(isset($testimonial['image']) && $testimonial['image']): ?>
                                                <img src="<?php echo e(asset($testimonial['image'])); ?>" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                            <?php else: ?>
                                                <div class="w-10 h-10 rounded-full bg-brand-primary/10 flex items-center justify-center text-brand-primary font-bold">
                                                    <?php echo e(substr($testimonial['name'] ?? 'U', 0, 1)); ?>

                                                </div>
                                            <?php endif; ?>
                                            <div>
                                                <p class="text-xs font-black text-slate-900 uppercase"><?php echo e($testimonial['name']); ?></p>
                                                <p class="text-[10px] font-bold text-slate-500 uppercase"><?php echo e($testimonial['designation'] ?? ''); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Pricing Section (CRO Optimized) -->
                    <?php if(isset($event->builder_content['pricing']) && count($event->builder_content['pricing']) > 0): ?>
                        <div id="pricing" class="scroll-mt-36 animate-on-scroll bg-slate-900 rounded-lg p-8 md:p-12 text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary/20 rounded-full blur-3xl -mr-32 -mt-32"></div>

                            <div class="text-center mb-10 relative z-10">
                                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 mb-4 text-[10px] font-black uppercase tracking-widest">
                                    <i class="fa-solid fa-lock text-emerald-400"></i> Secure Checkout
                                </div>
                                <h2 class="text-3xl font-black text-white mb-2"><?php echo $event->builder_content['pricing_header']['heading'] ?? 'Secure Your <span class="text-brand-accent">Nomination</span>'; ?></h2>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest"><?php echo e($event->builder_content['pricing_header']['description'] ?? 'Choose your access level'); ?></p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative z-10">
                                <?php $__currentLoopData = $event->builder_content['pricing']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-lg p-8 hover:border-brand-accent hover:bg-white/10 transition-all group relative overflow-hidden">
                                        <?php if(isset($tier['recommended']) && $tier['recommended']): ?>
                                            <div class="absolute top-0 right-0 bg-brand-accent text-slate-900 text-[8px] font-black uppercase tracking-widest px-3 py-1 rounded-bl-lg">Most Popular</div>
                                        <?php endif; ?>

                                        <h4 class="text-xs font-black text-slate-300 uppercase tracking-widest mb-2"><?php echo e($tier['type']); ?></h4>
                                        <div class="flex items-end gap-2 mb-4">
                                            <span class="text-xs font-bold text-brand-accent opacity-80 mb-2"><?php echo e($tier['currency'] ?? 'INR'); ?></span>
                                            <span class="text-4xl font-black text-white tracking-tighter"><?php echo e($tier['price']); ?></span>
                                        </div>
                                        <div class="text-xs text-slate-300 font-medium mb-8 leading-relaxed">
                                            <?php echo e($tier['desc']); ?>

                                        </div>
                                        <a href="<?php echo e(!empty($tier['form_url']) ? $tier['form_url'] : ($event->builder_content['about']['registration_url'] ?? url('join'))); ?>" target="_blank" class="block w-full bg-brand-accent hover:bg-white text-slate-900 text-center py-3 rounded-lg font-black text-xs uppercase tracking-widest transition-all">
                                            <?php echo e(!empty($tier['btn_text']) ? $tier['btn_text'] : 'Apply Now'); ?> <i class="fa-solid fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="mt-8 text-center text-[10px] font-bold text-slate-500 uppercase tracking-widest relative z-10 flex items-center justify-center gap-4">
                                <span><i class="fa-brands fa-cc-visa text-lg"></i></span>
                                <span><i class="fa-brands fa-cc-mastercard text-lg"></i></span>
                                <span><i class="fa-solid fa-building-columns text-lg"></i></span>
                                <span><i class="fa-solid fa-shield-halved"></i> 256-bit Encryption</span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- FAQ Section -->
                    <?php if(isset($event->builder_content['faq']) && count($event->builder_content['faq']) > 0): ?>
                        <div id="faq" class="scroll-mt-36 bg-slate-50 rounded-lg p-8 md:p-10 border border-slate-100 animate-on-scroll">
                            <h2 class="text-3xl font-black text-slate-900 mb-10 text-center">Frequently <span class="text-brand-primary">Asked Questions</span></h2>
                            <div class="space-y-4 max-w-3xl mx-auto" x-data="{ openFaq: null }">
                                <?php $__currentLoopData = $event->builder_content['faq']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="bg-white rounded-lg border border-slate-100 overflow-hidden shadow-sm">
                                        <button @click="openFaq = openFaq === <?php echo e($index); ?> ? null : <?php echo e($index); ?>" class="w-full flex items-center justify-between p-5 text-left">
                                            <span class="text-sm font-black text-slate-900 leading-tight uppercase"><?php echo e($q['q']); ?></span>
                                            <i class="fa-solid fa-chevron-down text-slate-300 transition-transform duration-300" :class="openFaq === <?php echo e($index); ?> ? 'rotate-180 text-brand-primary' : ''"></i>
                                        </button>
                                        <div x-show="openFaq === <?php echo e($index); ?>" x-collapse class="px-5 pb-5">
                                            <p class="text-sm font-bold text-slate-500 leading-relaxed border-t border-slate-50 pt-4">
                                                <?php echo e($q['a']); ?>

                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Resources Section -->
                    <?php if(isset($event->builder_content['resources']) && count($event->builder_content['resources']) > 0): ?>
                        <div id="resources" class="scroll-mt-36 animate-on-scroll">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-lg bg-brand-accent/10 flex items-center justify-center">
                                    <i class="fa-solid fa-folder-open text-brand-accent text-xl"></i>
                                </div>
                                <div>
                                    <h2 class="text-3xl font-black text-slate-900 tracking-tight">Summit <span class="text-brand-primary">Resources</span></h2>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Key documents and presentations</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <?php $__currentLoopData = $event->builder_content['resources']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(asset($res['url'])); ?>" target="_blank" class="group bg-white rounded-lg border border-slate-200 overflow-hidden hover:border-brand-primary hover:shadow-xl transition-all duration-300 flex flex-col">
                                        <div class="relative aspect-video bg-slate-100 overflow-hidden border-b border-slate-100">
                                            <?php if(isset($res['thumbnail']) && $res['thumbnail']): ?>
                                                <img src="<?php echo e(asset($res['thumbnail'])); ?>" alt="<?php echo e($res['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                            <?php else: ?>
                                                <div class="w-full h-full flex flex-col items-center justify-center bg-slate-50 gap-2">
                                                    <i class="fa-solid fa-file-pdf text-4xl text-brand-primary/20"></i>
                                                    <span class="text-[8px] font-black text-slate-400 uppercase tracking-widest">Preview</span>
                                                </div>
                                            <?php endif; ?>
                                            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                                <span class="bg-white text-slate-900 px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all">
                                                    View File <i class="fa-solid fa-up-right-from-square ml-1 text-brand-primary"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="p-4 flex-1 flex flex-col justify-between">
                                            <h5 class="text-sm font-black text-slate-900 uppercase tracking-widest leading-snug group-hover:text-brand-primary transition-colors">
                                                <?php echo e($res['title']); ?>

                                            </h5>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Venue Section -->
                    <?php if(isset($event->builder_content['venue']['name']) && $event->builder_content['venue']['name']): ?>
                        <div id="venue" class="scroll-mt-36 bg-white rounded-lg overflow-hidden shadow-sm border border-slate-100 animate-on-scroll">
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                <div class="p-8 md:p-10">
                                    <i class="fa-solid fa-map-location-dot text-4xl text-brand-primary mb-6 block"></i>
                                    <h2 class="text-3xl font-black text-slate-900 mb-4">The <span class="text-brand-primary">Venue</span></h2>
                                    <h4 class="text-xl font-extrabold text-slate-800 mb-2"><?php echo e($event->builder_content['venue']['name']); ?></h4>
                                    <p class="text-slate-500 font-bold text-sm leading-relaxed mb-8"><?php echo e($event->builder_content['venue']['address']); ?></p>

                                    <a href="https://maps.google.com/?q=<?php echo e(urlencode($event->builder_content['venue']['address'])); ?>" target="_blank" class="inline-flex items-center gap-2 text-brand-primary font-black text-xs uppercase hover:translate-x-1 transition-transform">
                                        Navigate on Maps <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="h-full bg-slate-100 relative min-h-[300px]">
                                     <?php if(isset($event->builder_content['venue']['image']) && $event->builder_content['venue']['image']): ?>
                                        <img src="<?php echo e(asset($event->builder_content['venue']['image'])); ?>" class="w-full h-full object-cover">
                                     <?php else: ?>
                                        <div class="w-full h-full flex items-center justify-center bg-slate-900 overflow-hidden relative group">
                                            <div class="absolute inset-0 bg-brand-primary opacity-10 blur-3xl"></div>
                                            <div class="relative z-10 text-center p-8">
                                                <i class="fa-solid fa-building-circle-arrow-right text-6xl text-brand-primary mb-4 opacity-20"></i>
                                                <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.3em]">Venue Visual Pending</p>
                                            </div>
                                        </div>
                                     <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Sponsors Section -->
                    <?php if(isset($event->builder_content['partners']) && count($event->builder_content['partners']) > 0): ?>
                        <div id="partners" class="scroll-mt-36 bg-white rounded-lg py-12 shadow-sm border border-slate-100 animate-on-scroll overflow-hidden">
                            <div class="text-center mb-8 container">
                                <h2 class="text-3xl font-black text-slate-900 mb-2">Our <span class="text-brand-primary">Partners</span></h2>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Supported by global industry leaders</p>
                            </div>

                            <div class="relative mt-8">
                                <div class="absolute inset-y-0 left-0 w-24 bg-linear-to-r from-white to-transparent z-10"></div>
                                <div class="absolute inset-y-0 right-0 w-24 bg-linear-to-l from-white to-transparent z-10"></div>

                                <div class="flex gap-6 items-center animate-logo-slide whitespace-nowrap">
                                    <?php 
                                        $slidingPartners = array_merge($event->builder_content['partners'], $event->builder_content['partners']); 
                                    ?>

                                    <?php $__currentLoopData = $slidingPartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex-none bg-white rounded-lg p-6 border border-slate-50 shadow-xs flex flex-col items-center justify-center h-auto min-h-32 w-48 group transition-all">
                                            <img src="<?php echo e(asset($partner['logo'])); ?>" alt="<?php echo e($partner['name']); ?>" class="max-h-16 max-w-full object-contain transition-all duration-500">
                                            <?php if(isset($partner['name']) && $partner['name']): ?>
                                                <p class="mt-3 text-[9px] font-black text-slate-900 uppercase tracking-widest text-center group-hover:text-brand-primary transition-colors"><?php echo e($partner['name']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Dynamic CTA Section -->
                    <?php if(isset($event->builder_content['cta']['form_url']) && $event->builder_content['cta']['form_url']): ?>
                        <div id="cta" class="scroll-mt-36 bg-brand-primary rounded-lg p-10 md:p-16 text-center border border-brand-primary animate-on-scroll relative overflow-hidden group">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32 transition-transform duration-1000 group-hover:scale-150"></div>
                            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -ml-32 -mb-32 transition-transform duration-1000 group-hover:scale-150"></div>

                            <div class="relative z-10 max-w-2xl mx-auto">
                                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-white tracking-tight mb-6"><?php echo e($event->builder_content['cta']['heading'] ?? 'Ready to Showcase Your Excellence?'); ?></h2>
                                <p class="text-white/80 font-medium mb-10 text-lg"><?php echo e($event->builder_content['cta']['description'] ?? 'Join hundreds of top-tier organizations. Submit your nomination and secure your spot today.'); ?></p>

                                <a href="<?php echo e($event->builder_content['cta']['form_url']); ?>" class="inline-flex items-center justify-center w-full sm:w-auto gap-3 bg-white text-brand-primary hover:bg-slate-50 px-10 py-5 rounded-lg font-black text-sm uppercase tracking-widest shadow-2xl transition-all hover:scale-105 active:scale-95">
                                    <?php echo e($event->builder_content['cta']['btn_text'] ?: 'Register Now'); ?> <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- Contact Box / WhatsApp & Call CTA -->
                    <div class="mt-6 bg-slate-100 rounded-lg lg:hidden p-6 shadow-sm border border-slate-200 text-center">
                        <h5 class="text-[10px] font-black text-slate-800 uppercase tracking-widest mb-3">Prefer to Talk First?</h5>
                        <p class="text-xs text-slate-600 mb-4 font-medium">Our team can guide you through the nomination process.</p>
                        <div class="space-y-3">
                            <a href="https://wa.me/919810690843?text=Hi,%20I'm%20interested%20in%20the%20<?php echo e(urlencode($event->title)); ?>%20nomination." target="_blank" class="flex items-center justify-center gap-2 w-full bg-[#25D366] text-white hover:bg-[#1ebe5b] py-3 rounded-lg font-bold text-sm transition-colors shadow-sm">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Apply via WhatsApp
                            </a>
                            <a href="tel:+919810690843" class="flex items-center justify-center gap-2 w-full bg-slate-900 text-white hover:bg-black py-3 rounded-lg font-bold text-sm transition-colors shadow-sm">
                                <i class="fa-solid fa-phone"></i> Call Us Now
                            </a>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>

    <style>
        html { scroll-behavior: smooth; }
        [x-cloak] { display: none !important; }

        @keyframes logo-slide {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-logo-slide {
            display: flex;
            width: max-content;
            animation: logo-slide 30s linear infinite;
        }
        .animate-logo-slide:hover {
            animation-play-state: paused;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\msmeccii\resources\views/website/events/show.blade.php ENDPATH**/ ?>