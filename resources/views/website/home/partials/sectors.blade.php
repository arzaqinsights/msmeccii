<section class="py-20 bg-brand-light">
    <div class="container">
        <!-- Heading -->
        <div class="mb-14 flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">

            <!-- Left Content -->
            <div class="max-w-2xl">
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-primary mb-4">
                    Focused Industry Sectors
                </h2>

                <p class="text-brand-primary-dark mb-3">
                    Empowering key industries with growth, networking, and recognition.
                </p>

                <p class="text-slate-600">
                    From traditional manufacturing to emerging sectors, MSMECCII supports businesses
                    with strategic opportunities, national exposure, and industry-driven initiatives
                    designed to accelerate growth and global reach.
                </p>
            </div>

            <!-- Right Button -->
            <div>
                <a href="#"
                    class="inline-flex items-center gap-2 bg-brand-primary text-white px-6 py-3 rounded-md font-semibold shadow hover:bg-brand-primary-dark transition">
                    See All Sectors
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition group-hover:translate-x-1"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
        <!-- Layout Output -->
        @php
            $layoutMode = $sectorSettings['sector_home_layout'] ?? 'grid';
        @endphp

        @if($layoutMode === 'grid')
            <!-- Traditional Grid Layout -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($sectors as $sector)
                    <a href="{{ route('sectors.show', $sector->slug) }}"
                        class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">

                        <img src="{{ Str::startsWith($sector->thumbnail, 'http') ? $sector->thumbnail : asset($sector->thumbnail ?: 'images/sectors/textile.png') }}" alt="{{ $sector->title }}" loading="lazy"
                            class="w-full h-64 object-cover group-hover:scale-110 transition duration-500 bg-slate-200">

                        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/60 to-transparent group-hover:via-slate-900/80 transition"></div>

                        <div class="absolute bottom-0 p-5 text-white z-10">
                            <h3 class="text-xl font-bold mb-1 group-hover:text-brand-primary transition-colors">
                                {{ $sector->title }}
                            </h3>
                            <p class="text-xs text-slate-300 font-medium leading-relaxed">
                                {{ Str::limit($sector->description, 60) }}
                            </p>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full py-10 text-center text-slate-500 font-bold">
                        <p>No active sectors found. Please publish some in the Admin Panel.</p>
                    </div>
                @endforelse
            </div>
        @else
            <!-- Swiper Slider Layout -->
            <div class="swiper sector-slider relative group overflow-hidden px-4 md:px-0">
                <div class="swiper-wrapper py-4 pb-12">
                    @foreach($sectors as $sector)
                        <div class="swiper-slide w-full md:w-80">
                            <a href="{{ route('sectors.show', $sector->slug) }}" class="block relative rounded-xl h-72 overflow-hidden shadow-md hover:shadow-2xl transition duration-300 group/card">
                                
                                <img src="{{ Str::startsWith($sector->thumbnail, 'http') ? $sector->thumbnail : asset($sector->thumbnail ?: 'images/sectors/textile.png') }}" class="w-full h-full object-cover group-hover/card:scale-110 transition duration-500 bg-slate-200" loading="lazy">
                                
                                <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/50 to-transparent transition-opacity duration-300"></div>

                                <div class="absolute bottom-0 p-6 text-white w-full z-10">
                                    <h3 class="text-lg font-black group-hover/card:text-brand-primary transition-colors leading-tight mb-2">
                                        {{ $sector->title }}
                                    </h3>
                                    <p class="text-xs text-slate-300 font-medium">
                                        {{ Str::limit($sector->description, 50) }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination !bottom-0"></div>
            </div>

            <!-- Additional Quick CSS for Swiper Layout width and Pagination bullets -->
            <style>
                .sector-slider .swiper-slide { width: 300px; }
                .sector-slider .swiper-pagination-bullet { background: #94a3b8; opacity: 0.5; }
                .sector-slider .swiper-pagination-bullet-active { background: #ed1c24; opacity: 1; }
            </style>

            <script>
                document.addEventListener('turbo:load', function() {
                    new Swiper('.sector-slider', {
                        slidesPerView: 1,
                        spaceBetween: 24,
                        pagination: {
                            el: '.sector-slider .swiper-pagination',
                            clickable: true,
                            dynamicBullets: true,
                        },
                        breakpoints: {
                            640: { slidesPerView: 2 },
                            1024: { slidesPerView: 3 },
                            1280: { slidesPerView: 4 }
                        },
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        }
                    });
                });
            </script>
        @endif

    </div>
</section>