<!-- MSMECCII Core Values: Cinematic Bento Design -->
<section class="py-16 bg-brand-light relative overflow-hidden">
    <!-- Orbital Glows -->
    <!-- <div class="absolute -top-24 -left-24 w-[500px] h-[500px] bg-brand-primary/20 rounded-full blur-[120px] animate-pulse"></div> -->
    <!-- <div class="absolute -bottom-24 -right-24 w-[500px] h-[500px] bg-brand-accent/20 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s"></div> -->

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-[0.03]"
        style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-10 animate-on-scroll">
            <div>
                <h2 class="text-4xl md:text-5xl font-black text-brand-primary leading-tight mb-6">
                    Our Core <span class="text-transparent bg-clip-text bg-brand-accent">Values</span> <br> That Shape the
                    Future of MSMEs
                </h2>
                <p class="text-slate-500 text-lg leading-relaxed">
                    At MSMECCII, our values are not just words — they are the foundation of every initiative,
                    partnership, and decision we take. From empowering entrepreneurs to driving innovation and global
                    competitiveness, these principles guide how we create real impact across industries. We are
                    committed to building a strong, ethical, and future-ready ecosystem for India’s growing businesses.
                </p>
            </div>
        </div>

        @php
            $values = [
                [
                    'id' => '01',
                    'title' => 'Integrity',
                    'desc' => 'Highest standards of honesty, ethics, and transparency in everything we do.',
                    'image' => 'https://images.unsplash.com/photo-1491336477066-31156b5e4f35?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cmVzcG9uc2liaWxpdHl8ZW58MHx8MHx8fDI%3D',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                    'accent' => 'brand-primary'
                ],
                [
                    'id' => '02',
                    'title' => 'Innovation',
                    'desc' => 'Creativity and modern thinking at our soul.',
                    'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                    'accent' => 'brand-accent'
                ],
                [
                    'id' => '03',
                    'title' => 'Sustainability',
                    'desc' => 'Eco-friendly industrial growth.',
                    'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                    'accent' => 'brand-accent'
                ],
                [
                    'id' => '04',
                    'title' => 'Collaboration',
                    'desc' => 'Strong partnerships among industries and government for shared success.',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-2',
                    'accent' => 'brand-primary'
                ],
                [
                    'id' => '05',
                    'title' => 'Excellence',
                    'desc' => 'Striving for perfection in every platform we deliver.',
                    'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                    'accent' => 'brand-accent'
                ],
                [
                    'id' => '06',
                    'title' => 'Empowerment',
                    'desc' => 'Supporting MSMEs and startups with resources for rapid growth.',
                    'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                    'accent' => 'brand-primary'
                ],
                [
                    'id' => '07',
                    'title' => 'Inclusivity',
                    'desc' => 'Fostering diversity and equal opportunity across all sectors.',
                    'image' => 'https://images.unsplash.com/photo-1740065592719-052d3e5ec6fb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8aW5jbHVzaXZpdHl8ZW58MHx8MHx8fDI%3D',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                    'accent' => 'brand-accent'
                ],
                [
                    'id' => '08',
                    'title' => 'Leadership',
                    'desc' => 'Inspiring visionary leadership to drive transformation.',
                    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-2 lg:row-span-1',
                    'accent' => 'brand-primary'
                ],
                [
                    'id' => '09',
                    'title' => 'Accountability',
                    'desc' => 'Measurable outcomes for all our stakeholders.',
                    'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-1 lg:row-span-1',
                    'accent' => 'brand-primary'
                ],
                [
                    'id' => '10',
                    'title' => 'Global Perspective',
                    'desc' => 'International best practices for Indian businesses.',
                    'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=1200',
                    'size' => 'lg:col-span-3 lg:row-span-1',
                    'accent' => 'brand-accent'
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 auto-rows-[250px]">
            @foreach ($values as $idx => $v)
                <div class="{{ $v['size'] }} group relative rounded-2xl overflow-hidden animate-on-scroll"
                    style="transition-delay: {{ $idx * 100 }}ms">
                    <!-- Background Image with Zoom -->
                    <img src="{{ $v['image'] }}" alt="{{ $v['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-all duration-700">

                    <!-- Glass Overlay -->
                    <div
                        class="absolute inset-0 bg-slate-900/60 group-hover:bg-slate-900/40 transition-colors duration-500">
                    </div>

                    <!-- Content -->
                    <div class="absolute inset-0 p-8 flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <span
                                class="text-5xl font-black text-white/50 group-hover:text-white transition-colors">{{ $v['id'] }}</span>
                            <div
                                class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center text-white backdrop-blur-sm group-hover:bg-brand-primary group-hover:border-brand-primary transition-all duration-500">
                                <i
                                    class="fa-solid fa-arrow-up-right text-xs -rotate-45 group-hover:rotate-0 transition-transform"></i>
                            </div>
                        </div>

                        <div>
                            <h3
                                class="text-2xl font-bold text-white transform group-hover:-translate-y-2 transition-transform duration-500">
                                {{ $v['title'] }}
                            </h3>
                            <p
                                class="text-white/60 text-sm leading-relaxed transform translate-y-1 group-hover:translate-y-0 transition-all duration-500">
                                {{ $v['desc'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Border Glow -->
                    <div
                        class="absolute inset-0 border border-white/10 group-hover:border-white/30 rounded-2xl transition-colors duration-500">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>