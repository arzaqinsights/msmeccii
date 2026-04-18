@extends('layouts.website')

@section('title', 'Strategic Promotion Services - MSMECCII')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/40 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-6 backdrop-blur-md">
                <i class="fa-solid fa-rocket text-brand-accent"></i>
                <span class="text-xs font-black uppercase tracking-widest">Accelerate Your Market Presence</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black uppercase mb-6 tracking-tight leading-tight">
                Strategic <span class="text-brand-accent">Promotion</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic">
                Empowering brands with precision marketing and global visibility frameworks.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-24 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: OVERVIEW -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8 animate-in fade-in slide-in-from-left duration-700">
                    <h2 class="text-4xl font-black text-slate-900 uppercase italic leading-tight border-l-8 border-brand-primary pl-6">
                        More Than Just Marketing <br> <span class="text-brand-primary text-2xl">A Growth Strategy</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        In today's competitive landscape, growth isn't accidental—it's engineered. MSMECCII's <strong>Strategic Promotion</strong> framework is designed to help members break through the noise. We combine traditional industrial wisdom with modern digital precision to elevate your brand.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-check-circle text-brand-primary"></i>
                            <span class="text-sm font-bold uppercase text-slate-700">Custom Brand Positioning Strategies</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-check-circle text-brand-primary"></i>
                            <span class="text-sm font-bold uppercase text-slate-700">Multi-Channel Digital Campaigns</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-check-circle text-brand-primary"></i>
                            <span class="text-sm font-bold uppercase text-slate-700">B2B Lead Generation Funnels</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2026&auto=format&fit=crop" class="rounded-[3rem] shadow-2xl relative z-10" alt="Strategy Analytics">
                    <div class="absolute -bottom-8 -left-8 w-64 h-64 bg-brand-primary/5 rounded-full blur-3xl"></div>
                </div>
            </div>

            <!-- SECTION 2: THE PROCESS (IMAGE STRIP) -->
            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop', 't' => 'Analyze', 'd' => 'Deep dive into market gaps and competitor matrix.'],
                    ['img' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop', 't' => 'Strategize', 'd' => 'Building high-impact campaign roadmaps for exports.'],
                    ['img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop', 't' => 'Execute', 'd' => 'Launching targeted promotions across global platforms.']
                ] as $step)
                <div class="group relative overflow-hidden rounded-3xl shadow-lg h-[400px]">
                    <img src="{{ $step['img'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Promotion Move">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/40 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8">
                        <h4 class="text-2xl font-black text-brand-accent mb-2 uppercase italic">{{ $step['t'] }}</h4>
                        <p class="text-white/80 text-xs font-medium">{{ $step['d'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- SECTION 3: KEY DELIVERABLES -->
            <div class="bg-slate-950 text-white p-16 rounded-[4rem] relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] animate-pulse"></div>
                <div class="relative z-10 space-y-12">
                    <div class="text-center">
                        <h3 class="text-4xl font-black uppercase italic tracking-tighter mb-4">Service Deliverables</h3>
                        <p class="text-slate-400 max-w-2xl mx-auto">What you can expect from our Strategic Promotion partnership.</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach([
                            ['icon' => 'globe', 'title' => 'Global Exposure', 'desc' => 'Visibility across international chamber networks.'],
                            ['icon' => 'bullhorn', 'title' => 'Digital PR', 'desc' => 'High-authority press releases and media kits.'],
                            ['icon' => 'chart-simple', 'title' => 'ROI Tracking', 'desc' => 'Comprehensive monthly performance reports.'],
                            ['icon' => 'user-plus', 'title' => 'VIP Access', 'desc' => 'Exclusive invitations to MSME networking circles.']
                        ] as $dev)
                        <div class="p-8 bg-white/5 border border-white/10 rounded-3xl hover:bg-brand-primary transition-all duration-300">
                            <i class="fa-solid fa-{{ $dev['icon'] }} text-3xl mb-6 text-brand-accent"></i>
                            <h4 class="text-sm font-bold uppercase mb-2">{{ $dev['title'] }}</h4>
                            <p class="text-[10px] text-white/60 leading-relaxed">{{ $dev['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SECTION 4: FINAL MESSAGE -->
            <div class="text-center py-20 border-t border-slate-100">
                <h3 class="text-4xl font-black text-slate-900 uppercase italic mb-8">Ready to Scale Your Presence?</h3>
                <p class="text-slate-500 max-w-3xl mx-auto text-lg mb-12">
                    Don't let your products stay hidden. Leverage MSMECCII's authority to build a global brand. Our team is ready to design your next breakthrough promotion strategy.
                </p>
                <a href="{{ route('contact') }}" class="px-12 py-6 bg-brand-primary text-white font-black uppercase tracking-widest rounded-full hover:bg-brand-accent hover:text-brand-primary transition-all shadow-2xl">
                    Get Custom Strategy Quote
                </a>
            </div>

        </div>
    </section>

@endsection
