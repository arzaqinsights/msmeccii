<!-- Blog / Articles Preview Section -->
<?php if(isset($latestArticles) && $latestArticles->count() > 0): ?>
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-accent/[0.05] rounded-full blur-[100px] -ml-48 -mb-48"></div>

    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-6 mb-14 animate-on-scroll">
            <div class="max-w-3xl">
                <!-- <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></span>
                    <span class="text-brand-primary text-xs font-bold tracking-widest uppercase">Latest Insights</span>
                </div> -->
                <h2 class="text-4xl md:text-5xl xl:text-6xl font-extrabold text-slate-900 leading-tight mb-4">
                    News & <span class="text-brand-primary">Articles</span>
                </h2>
                <p class="text-slate-500 text-lg font-medium leading-relaxed">
                    Stay informed with industry insights, policy updates, and expert perspectives from the MSME ecosystem.
                </p>
            </div>
            <a href="<?php echo e(route('blog.index')); ?>"
               class="inline-flex items-center gap-3 px-8 py-4 bg-brand-primary text-white rounded-md font-bold text-sm uppercase tracking-widest transition-all group shrink-0">
                All Articles
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        <!-- Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__currentLoopData = $latestArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="bg-white rounded-lg overflow-hidden shadow-sm border border-slate-100 group transition-all duration-500 hover:shadow-xl hover:-translate-y-1 flex flex-col animate-on-scroll"
                         style="transition-delay: <?php echo e($loop->index * 120); ?>ms">
                    <!-- Thumbnail -->
                    <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="block relative h-74 overflow-hidden">
                        <img src="<?php echo e($article->thumbnail_url); ?>"
                             alt="<?php echo e($article->title); ?>"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                             loading="lazy">
                        <!-- Category Tags -->
                        <?php if($article->category): ?>
                            <div class="absolute top-4 left-4 flex flex-wrap gap-1.5">
                                <?php $__currentLoopData = array_slice(array_map('trim', explode(',', $article->category)), 0, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="bg-white/90 backdrop-blur-sm px-2.5 py-1 rounded-lg text-[10px] font-black text-slate-900 uppercase tracking-widest shadow-sm"><?php echo e($cat); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </a>

                    <!-- Content -->
                    <div class="p-6 flex flex-col flex-1">
                        <!-- Meta -->
                        <div class="flex items-center gap-3 text-xs font-bold text-slate-400 mb-4">
                            <span><i class="fa-regular fa-calendar mr-1"></i> <?php echo e($article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y')); ?></span>
                            <?php if($article->author): ?>
                                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                <span><i class="fa-solid fa-user-pen mr-1"></i> <?php echo e($article->author); ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Title -->
                        <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="block mb-3">
                            <h3 class="text-lg font-black text-slate-900 leading-tight group-hover:text-brand-primary transition-colors line-clamp-2">
                                <?php echo e($article->title); ?>

                            </h3>
                        </a>

                        <!-- Excerpt -->
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-3 flex-1">
                            <?php echo e($article->excerpt); ?>

                        </p>

                        <!-- Read More -->
                        <div class="mt-auto pt-4 border-t border-slate-100 flex items-center justify-between">
                            <a href="<?php echo e(route('blog.show', $article->slug)); ?>" class="text-sm font-bold text-brand-primary group-hover:text-brand-primary-dark transition-colors flex items-center gap-2">
                                Read Article <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Mobile CTA -->
        <div class="md:hidden mt-10 text-center">
            <a href="<?php echo e(route('blog.index')); ?>"
               class="inline-flex items-center justify-center w-full px-8 py-4 bg-brand-primary text-white rounded-md font-bold text-sm uppercase tracking-widest">
                View All Articles <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH C:\laragon\www\msmeccii\resources\views/website/home/partials/blog_preview.blade.php ENDPATH**/ ?>