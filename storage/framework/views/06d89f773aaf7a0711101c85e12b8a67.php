<?php if(isset($upcomingEvents) && $upcomingEvents->count() > 0): ?>
    <section class="py-20 bg-brand-light relative overflow-hidden">
        <!-- Abstract Decorative SVGs -->
        <div class="absolute top-0 right-0 opacity-10 pointer-events-none -translate-y-1/2 translate-x-1/4">
            <svg width="800" height="800" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="400" cy="400" r="400" fill="url(#event_grad_1)" />
                <defs>
                    <radialGradient id="event_grad_1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(400 400) rotate(90) scale(400)">
                        <stop stop-color="#E11D48" stop-opacity="0.3" />
                        <stop offset="1" stop-color="#E11D48" stop-opacity="0" />
                    </radialGradient>
                </defs>
            </svg>
        </div>

        <div class="container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 xl:gap-20 items-start">

                <!-- Left Sidebar: Context & Stats -->
                <div class="lg:col-span-4 lg:sticky lg:top-32 space-y-10 animate-on-scroll pb-2">
                    <div>
                        <div
                            class="inline-flex items-center gap-3 px-4 py-2 rounded-xl bg-white border border-slate-200 shadow-sm mb-6">
                            <span class="relative flex h-3 w-3">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-primary"></span>
                            </span>
                            <span class="text-slate-900 text-xs font-black tracking-widest uppercase">Upcoming Events</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl xl:text-6xl font-black text-slate-900 leading-[1.1] tracking-tight mb-6">
                            Join the <span class="text-brand-primary">Global</span> Movement
                        </h2>
                        <p class="text-slate-500 text-lg leading-relaxed font-medium">
                            Experience world-class summits designed to empower MSMEs. Connect with policy makers, industry
                            leaders, and global investors in one unified platform.
                        </p>
                    </div>

                    <!-- Statistics Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="bg-white p-4 rounded-md border border-slate-200 shadow-sm group hover:border-brand-primary/20 transition-colors">
                            <div
                                class="text-3xl font-black text-slate-900 mb-1 group-hover:text-brand-primary transition-colors">
                                <?php echo e($upcomingEvents->count()); ?>+
                            </div>
                            <div class="text-[10px] font-black uppercase tracking-widest text-slate-400">Upcoming Events
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 flex items-center justify-center rounded-md border border-slate-200 shadow-sm group hover:border-brand-primary/20 transition-colors">
                            <div class="text-[10px] font-black uppercase tracking-widest text-slate-400">Join Our Events to
                                grow your business &amp; network</div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center gap-4">
                        <a href="<?php echo e(route('events.index')); ?>"
                            class="inline-flex items-center justify-center gap-4 w-full md:w-auto shrink-0 bg-brand-primary text-white px-6 py-4 rounded-md font-black text-sm uppercase tracking-widest transition-all group">
                            View All Events
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </a>
                        <a href="<?php echo e(route('contact')); ?>"
                            class="inline-flex items-center justify-center gap-4 shrink-0 bg-brand-accent w-full md:w-auto text-black px-6 py-4 rounded-md font-black text-sm uppercase tracking-widest transition-all group">
                            Contact Us
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Event Cards -->
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-8 xl:gap-10">
                    <?php $__currentLoopData = $upcomingEvents->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="group bg-brand-primary/10 rounded-lg overflow-hidden transition-all duration-500 animate-on-scroll flex flex-col h-full"
                                style="transition-delay: <?php echo e($loop->index * 150); ?>ms">

                                <!-- Image Area -->
                                <div class="relative aspect-video overflow-hidden shrink-0">
                                    <img src="<?php echo e($event->image ? asset($event->image) : asset('images/event-placeholder.jpg')); ?>"
                                        alt="<?php echo e($event->title); ?>"
                                        class="w-full h-full object-cover transform transition-transform duration-1000">
                                </div>

                                <a href="<?php echo e(route('events.show', $event->slug)); ?>" class="block mb-2 grow">
                                    <!-- Details Area -->
                                    <div class="p-6 flex flex-col grow">
                                        <h3
                                            class="text-3xl font-black text-slate-900 leading-tight mb-4 group-hover:text-brand-primary transition-colors line-clamp-2">
                                            <?php echo e($event->title); ?>

                                        </h3>

                                        <?php if($event->short_description): ?>
                                            <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-2 font-medium">
                                                <?php echo e($event->short_description); ?>

                                            </p>
                                        <?php endif; ?>

                                        <!-- Structured Info (Date & Time Together) -->
                                        <div class="grid grid-cols-1 gap-4">
                                            <div class="flex items-center gap-4 group/item">
                                                <div
                                                    class="w-10 h-10 rounded-xl bg-brand-primary flex items-center justify-center text-white transition-colors border border-slate-100 shrink-0">
                                                    <i class="fa-regular fa-calendar-check text-sm"></i>
                                                </div>
                                                <div>
                                                    <p
                                                        class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-2">
                                                        Event Schedule</p>
                                                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                                                        <span
                                                            class="text-sm font-black text-slate-800 uppercase tracking-wider"><?php if($event->end_date): ?>
                                                                <?php echo e($event->event_date->format('d')); ?> -
                                                                <?php echo e($event->end_date->format('d M, Y')); ?>

                                                                <?php echo e($event->event_date->format('h:i A')); ?>

                                                            <?php else: ?>
                                                                <?php echo e($event->event_date->format('d M, Y h:i A')); ?>

                                                            <?php endif; ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center gap-4 group/item">
                                                <div
                                                    class="w-10 h-10 rounded-xl bg-brand-primary flex items-center justify-center text-white transition-colors border border-slate-100 shrink-0">
                                                    <i class="fa-solid fa-location-dot text-sm"></i>
                                                </div>
                                                <div>
                                                    <p
                                                        class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-2">
                                                        Event Venue</p>
                                                    <p class="text-xs font-bold text-slate-700 uppercase tracking-wider"> <?php echo e($event->location ?: 'New Delhi, India'); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Action Footer -->
                                        <!-- <div class="mt-10 flex items-center justify-between gap-4">
                                                            <a href="<?php echo e(route('events.show', $event->slug)); ?>"
                                                            class="grow bg-brand-accent hover:bg-brand-primary text-black hover:text-white text-center py-3 border rounded-md text-sm font-black uppercase tracking-widest transition-all">
                                                            Register Now
                                                        </a>
                                                            <a href="<?php echo e(route('events.show', $event->slug)); ?>"
                                                                class="w-11 h-11 rounded-md border flex items-center justify-center text-slate-400 hover:border-brand-primary hover:text-brand-primary transition-all">
                                                                <i class="fa-solid fa-arrow-right-long"></i>
                                                            </a>
                                                        </div> -->
                                    </div>
                                </a>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?><?php /**PATH C:\laragon\www\msmeccii\resources\views/website/home/partials/events.blade.php ENDPATH**/ ?>