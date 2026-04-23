<!-- Gallery Preview Section -->
@if(isset($galleryImages) && $galleryImages->count() > 0)
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Premium Background Elements -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-primary/[0.02] rounded-full blur-[120px] -mr-96 -mt-96"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-brand-accent/[0.03] rounded-full blur-[100px] -ml-64 -mb-64"></div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-10 mb-16 animate-on-scroll">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-50 border border-slate-100 mb-6 shadow-sm">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-primary"></span>
                    </span>
                    <span class="text-slate-900 text-[10px] font-black tracking-[0.2em] uppercase">Visual Journey</span>
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-slate-900 leading-[1.1] mb-6">
                    Moments That <span class="relative inline-block text-brand-primary">
                        Define
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-brand-accent/30" viewBox="0 0 100 12" preserveAspectRatio="none">
                            <path d="M0,10 Q50,0 100,10" stroke="currentColor" stroke-width="4" fill="none" />
                        </svg>
                    </span> Us
                </h2>
                <p class="text-slate-500 text-lg md:text-xl font-medium leading-relaxed max-w-2xl">
                    Experience the impact of MSMECCII through a curated selection of milestones, global summits, and transformative networking events.
                </p>
            </div>
            
            <div class="flex items-center gap-4 group">
                <a href="{{ route('gallery') }}" class="relative inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-300 bg-brand-primary rounded-2xl group overflow-hidden shadow-xl hover:shadow-brand-primary/20">
                    <span class="relative z-10 flex items-center gap-2">
                        Explore Full Gallery
                        <i class="fa-solid fa-arrow-right-long transition-transform duration-300 group-hover:translate-x-2"></i>
                    </span>
                    <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-brand-primary via-brand-primary-light to-brand-primary translate-x-[-100%] group-hover:translate-x-[0%] transition-transform duration-500 ease-out"></div>
                </a>
            </div>
        </div>

        <!-- Artistic Asymmetrical Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 auto-rows-[200px] md:auto-rows-[240px]">
            @foreach($galleryImages as $idx => $img)
                @php
                    // Create an artistic pattern with spans
                    $spans = [
                        0 => 'md:col-span-2 md:row-span-2', // Large featured
                        1 => 'md:col-span-1 md:row-span-1', // Small
                        2 => 'md:col-span-1 md:row-span-2', // Tall
                        3 => 'md:col-span-1 md:row-span-1', // Small
                        4 => 'md:col-span-2 md:row-span-1', // Wide
                        5 => 'md:col-span-1 md:row-span-1', // Small
                        6 => 'md:col-span-1 md:row-span-1', // Small
                        7 => 'md:col-span-2 md:row-span-1', // Wide bottom
                    ];
                    $spanClass = $spans[$idx] ?? 'md:col-span-1 md:row-span-1';
                    
                    // Delay for staggered animation
                    $delay = $idx * 100;
                @endphp
                
                <div class="{{ $spanClass }} group relative rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-700 animate-on-scroll"
                     style="transition-delay: {{ $delay }}ms">
                    
                    <!-- Background Image -->
                    <img src="{{ asset($img->image_path) }}"
                         alt="{{ $img->title ?? $img->category }}"
                         class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                         loading="lazy">
                    
                    <!-- Sophisticated Glass Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <!-- Top Badge (Always Visible but refined on hover) -->
                    @if($img->category)
                    <div class="absolute top-4 left-4 z-20">
                        <span class="px-3 py-1.5 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl text-[8px] font-black text-white uppercase tracking-[0.2em] shadow-lg group-hover:bg-brand-accent group-hover:text-brand-primary group-hover:border-brand-accent transition-all duration-500">
                            {{ $img->category }}
                        </span>
                    </div>
                    @endif

                    <!-- Content Reveal on Hover -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500 z-10">
                        <h3 class="text-white font-bold text-lg leading-tight mb-2">
                            {{ $img->title ?: ($img->category ?: 'MSMECCII Event') }}
                        </h3>
                        <div class="flex items-center justify-between">
                            <span class="text-white/60 text-[10px] font-bold uppercase tracking-widest">
                                <i class="fa-solid fa-calendar-day mr-1"></i> {{ $img->created_at ? $img->created_at->format('M Y') : 'Recent' }}
                            </span>
                            <div class="w-8 h-8 rounded-full bg-brand-accent flex items-center justify-center text-brand-primary scale-0 group-hover:scale-100 transition-transform duration-500 delay-100 shadow-lg shadow-brand-accent/20">
                                <i class="fa-solid fa-plus text-xs"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Subtle Interaction Border -->
                    <div class="absolute inset-0 border-2 border-brand-accent/0 group-hover:border-brand-accent/30 rounded-2xl transition-all duration-500 pointer-events-none"></div>
                </div>
            @endforeach
        </div>

        <!-- Mobile-only View All (Simplified) -->
        <div class="mt-12 md:hidden">
            <a href="{{ route('gallery') }}" class="flex items-center justify-center w-full px-8 py-5 bg-slate-900 text-white rounded-2xl font-black text-xs uppercase tracking-widest gap-3">
                View Entire Collection
                <i class="fa-solid fa-arrow-right-long"></i>
            </a>
        </div>
    </div>
</section>
@endif
