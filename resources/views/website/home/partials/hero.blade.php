@php
    $defaultImages = [
        'images/home/slide-0.jpeg',
        'images/home/award-1.jpeg',
        'images/home/slide-1.webp',
        'images/home/slide-2.webp',
        'images/home/slide-3.webp',
        'images/home/slide-4.webp',
        'images/home/slide-5.webp',
        'images/home/slide-6.webp',
        'images/home/slide-7.webp',
        'images/home/slide-8.webp',
        'images/home/slide-9.webp',
        'images/home/slide-10.webp',
        'images/home/slide-11.webp',
        'images/home/slide-12.webp',
    ];

    $slides = $sliders->count() > 0 
        ? $sliders->pluck('image_path')->toArray() 
        : $defaultImages;
@endphp
<!-- Dynamic Hero Slider Section -->
<section class="relative h-dvh w-full bg-slate-900 border-b-4 border-accent">
    <!-- Swiper Container -->
    <div class="swiper hero-swiper h-full w-full absolute inset-0">
        <div class="swiper-wrapper">
            @foreach ($slides as $image)
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-linear-to-r from-slate-900/90 via-slate-900/70 to-transparent z-10">
                    </div>
                    <img src="{{ asset($image) }}" alt="MSMECCII Slider" class="w-full h-full object-cover">
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination mb-8!"></div>
    </div>

    <!-- Hero Content Overlay -->
    <div class="absolute inset-0 z-20 flex items-end pb-10">
        <div class="container w-full">
            <div class="max-w-3xl animate-on-scroll">
                <!-- <div
                    class="inline-flex items-baseline gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    <span class="text-white text-xs font-bold tracking-widest uppercase">Global Business Network</span>
                </div> -->

                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-[1.1] mb-6 drop-shadow-lg">
                    Grow Your <span>Business Faster</span> With India’s Leading MSME Network
                </h1>

                <p class="text-base text-slate-200 mb-8 max-w-2xl leading-relaxed drop-shadow-md flex flex-col gap-4">
                    Join a powerful network of entrepreneurs, industry leaders, and innovators.
                    Get access to awards, business opportunities, and national-level recognition. <br>
                    <!-- <span class="text-accent font-semibold text-md">Knowledge & Awareness Programs • Growth & Business Opportunities •  Networking & Industry Connect • Recognition & Awards</span> -->
                </p>
<!-- 
                <div class="flex flex-col sm:flex-row gap-4 mb-4">
                    <a href="#"
                        class="bg-brand-accent hover:bg-white text-slate-900 px-8 py-4 rounded-md font-bold text-lg text-center transition-all shadow-lg hover:shadow-accent/50">
                        Get Recognized
                    </a>
                    <a href="#"
                        class="bg-transparent border-2 border-white/60 hover:border-white hover:bg-white/10 text-white px-8 py-4 rounded-md font-bold text-lg text-center transition-all">
                        Upcoming Events
                    </a>
                </div> -->

                <div class="mt-8 flex gap-8 border-t border-white/20 pt-6">
                    <div class="flex flex-col">
                        <span class="text-3xl font-bold text-white">100,000+</span>
                        <span class="text-sm text-slate-300 font-medium tracking-wide">Enterprises Reached</span>
                    </div>
                    <div class="flex flex-col border-l border-white/20 pl-8">
                        <span class="text-3xl font-bold text-white">2019</span>
                        <span class="text-sm text-slate-300 font-medium tracking-wide">Established Year</span>
                    </div>
                    <div class="flex flex-col border-l border-white/20 pl-8">
                        <span class="text-3xl font-bold text-white">{{ count(config('sectors.sectors')) }}</span>
                        <span class="text-sm text-slate-300 font-medium tracking-wide">Sectors</span>
                    </div>
                    <div class="flex flex-col border-l border-white/20 pl-8">
                        <span class="text-3xl font-bold text-white">30+</span>
                        <span class="text-sm text-slate-300 font-medium tracking-wide">Countries</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>