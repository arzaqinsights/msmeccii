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
        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @forelse($sectors as $sector)
                <a href="{{ route('sectors.show', $sector->slug) }}"
                    class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">

                    <!-- Image -->
                    <img src="{{ $sector->thumbnail ? asset($sector->thumbnail) : asset('images/sectors/textile.png') }}" alt="{{ $sector->title }}" loading="lazy"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/50 group-hover:bg-black/60 transition"></div>

                    <!-- Content -->
                    <div class="absolute bottom-0 p-5 text-white">
                        <h3 class="text-xl font-bold">
                            {{ $sector->title }}
                        </h3>
                        <p class="text-sm text-slate-200">
                            {{ Str::limit($sector->description, 60) }}
                        </p>
                    </div>

                </a>
            @empty
                <div class="col-span-full py-10 text-center text-slate-500">
                    <p>No active sectors found. Please publish some in the Admin Panel.</p>
                </div>
            @endforelse

        </div>

    </div>
</section>