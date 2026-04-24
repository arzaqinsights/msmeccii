<section class="py-20 bg-brand-light">
    <div class="container">
        <!-- Heading -->
        <div class="mb-14 flex flex-col gap-6">

            <!-- Left Content -->
            <div class="flex flex-col md:flex-row items-start justify-between">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">
                        Focused Industry <span class="text-brand-primary">Sectors</span>
                    </h2>

                    <p class="text-slate-500 text-lg leading-relaxed font-medium">
                        Empowering key industries with growth, networking, and recognition.
                    </p>
                </div>
                <!-- Right Button -->
                <a href="{{ route('sectors.index') }}"
                    class="inline-flex items-center justify-center mt-4 gap-2 w-full sm:w-auto bg-brand-primary text-white px-6 py-4 rounded-md font-semibold shadow hover:bg-brand-primary-dark transition group">
                    See All Sectors
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>

            <p class="text-slate-600">
                From traditional manufacturing to emerging sectors, MSMECCII supports businesses
                with strategic opportunities, national exposure, and industry-driven initiatives
                designed to accelerate growth and global reach.
            </p>


        </div>
        <!-- Swiper Slider Layout -->
        <div class="swiper sector-slider relative group overflow-hidden px-4 md:px-0">
            <div class="swiper-wrapper py-4 pb-12 w-full">
                @foreach(config('sectors.sectors') as $sector)
                    <div class="swiper-slide w-full md:w-1/3">
                        <a href="{{ route('sectors.show', $sector['slug']) }}"
                            class="block relative rounded-lg h-92 overflow-hidden shadow-md hover:shadow-2xl transition duration-300 group/card">

                            <img src="{{ Str::startsWith($sector['thumbnail'], 'http') ? $sector['thumbnail'] : asset($sector['thumbnail'] ?: 'images/sectors/textile.png') }}"
                                class="w-full h-full object-cover group-hover/card:scale-110 transition duration-500 bg-slate-200"
                                loading="lazy">

                            <div
                                class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/50 to-transparent transition-opacity duration-300">
                            </div>

                            <div class="absolute bottom-0 p-6 text-white w-full z-10 whitespace-normal">
                                <h3
                                    class="text-xl font-black group-hover/card:text-brand-accent transition-colors leading-tight mb-2">
                                    {{ $sector['title'] }}
                                </h3>
                                <p class="text-sm text-slate-300 font-medium">
                                    {{ Str::limit($sector['description'], 50) }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination bottom-0!"></div>
        </div>

        <!-- Additional Quick CSS for Swiper Layout width and Pagination bullets -->
        <style>
            .sector-slider .swiper-slide {
                width: 300px;
            }

            .sector-slider .swiper-pagination-bullet {
                background: #94a3b8;
                opacity: 0.5;
            }

            .sector-slider .swiper-pagination-bullet-active {
                background: #ed1c24;
                opacity: 1;
            }
        </style>

    </div>
</section>