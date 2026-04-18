@extends('layouts.website')

@section('title', 'Legal & Government Liaisoning Services - MSMECCII')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/40 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-6 backdrop-blur-md">
                <i class="fa-solid fa-gavel text-emerald-500"></i>
                <span class="text-xs font-black uppercase tracking-widest text-emerald-300">Corporate Security & Regulatory Compliance</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black uppercase mb-6 tracking-tight leading-tight">
                Legal & <span class="text-emerald-500">Liasoning</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic">
                Protecting your business through specialized legal support and strategic agency liaisoning.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-24 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: BUSINESS SECURITY -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=2070&auto=format&fit=crop" class="rounded-[3.5rem] shadow-2xl relative z-10 hover:shadow-emerald-500/20 transition-all duration-700" alt="Legal Gavel">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-emerald-500/5 rounded-full blur-[100px]"></div>
                </div>
                <div class="space-y-8 animate-on-scroll order-1 lg:order-2">
                    <h2 class="text-4xl font-black text-slate-900 uppercase italic leading-tight border-l-8 border-emerald-600 pl-6">
                        Navigate Legal <br> <span class="text-emerald-600 text-2xl">Complexity with Ease</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        In the world of industry, non-compliance is a significant risk. MSMECCII provides highly <strong>Specialized Legal Support</strong> and essential Government Liaisoning services, specifically tailored to protect MSME business security. From navigating complex contract laws to obtaining critical environmental clearances, our legal framework ensures you spend more time growing and less time in litigation.
                    </p>
                     <div class="grid grid-cols-2 gap-4">
                        @foreach(['Environmental', 'Corporate Law', 'Arbitration', 'Licensing'] as $law)
                            <div class="p-6 bg-slate-50 border border-slate-100 rounded-2xl flex items-center justify-center text-[10px] font-black uppercase tracking-widest text-slate-600 hover:bg-emerald-600 hover:text-white transition-all cursor-default">
                                {{ $law }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SECTION 2: THE LIAISON FRAMEWORK (CARDS WITH IMAGES) -->
            <div class="space-y-12">
                <div class="text-center max-w-3xl mx-auto space-y-6">
                    <h3 class="text-3xl font-black uppercase italic text-slate-900 mb-6 tracking-tighter">Essential Liaisoning Pathways</h3>
                    <p class="text-slate-500 font-medium italic">Streamlining your interactions with state and central regulatory bodies.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach([
                        ['t' => 'Regulatory Clearances', 'img' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop', 'd' => 'Fast-track approvals from industrial & pollution boards.'],
                        ['t' => 'Certifications Support', 'img' => 'https://images.unsplash.com/photo-1544725121-be3b5d0c0bc5?q=80&w=2026&auto=format&fit=crop', 'd' => 'Expert guidance on ISO, ZED, and export certifications.'],
                        ['t' => 'Grievance Redressal', 'img' => 'https://images.unsplash.com/photo-1606857521015-7f9fdf423740?q=80&w=2070&auto=format&fit=crop', 'd' => 'Official representation in cases of payment or tax disputes.']
                    ] as $li)
                    <div class="group relative h-[450px] overflow-hidden rounded-[3rem] shadow-xl border-t-[8px] border-emerald-600">
                        <img src="{{ $li['img'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000 grayscale group-hover:grayscale-0" alt="Liaisoning Area">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-slate-900/10 to-transparent"></div>
                        <div class="absolute bottom-10 left-10 right-10">
                            <h4 class="text-2xl font-black text-white mb-4 uppercase italic tracking-tight">{{ $li['t'] }}</h4>
                            <p class="text-emerald-100 text-[10px] font-bold leading-relaxed uppercase opacity-80 group-hover:opacity-100 transition-opacity">{{ $li['d'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: RECENT ACHIEVEMENTS -->
            <div class="p-20 rounded-[4rem] bg-slate-950 text-white relative overflow-hidden shadow-3xl flex flex-col items-center space-y-12 overflow-hidden">
                <div class="absolute -bottom-10 -left-10 w-96 h-96 bg-emerald-500/10 rounded-full blur-[120px]"></div>
                <h3 class="text-4xl font-black uppercase italic tracking-widest text-center">Service Strength</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 w-full">
                    @foreach([
                        ['t' => 'Legal Advisory', 'val' => '24/7 Support'],
                        ['t' => 'Government Liaison', 'val' => '100+ Departments'],
                        ['t' => 'Dispute Resolution', 'val' => '95% Success Rate'],
                        ['t' => 'Certifications', 'val' => 'End-to-End Handling']
                    ] as $metric)
                    <div class="text-center p-8 bg-white/5 border border-white/10 rounded-3xl backdrop-blur-md">
                        <p class="text-emerald-500 font-black text-2xl mb-2">{{ $metric['val'] }}</p>
                        <p class="text-[10px] font-black uppercase text-slate-400 tracking-widest">{{ $metric['t'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 text-white p-24 rounded-[5rem] text-center shadow-4xl overflow-hidden border-b-[24px] border-emerald-600 group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(16,185,129,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-12 text-center">
                    <h3 class="text-6xl md:text-8xl font-black mb-8 uppercase tracking-[-0.05em] leading-[0.85]">Secure <br> Your Deal.</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic mb-12 opacity-80">
                        Don't let legal ambiguity stop your industrial momentum. Get specialized protection and liaisoning support today.
                    </p>
                    <a href="{{ route('forms.show', ['slug' => 'join-us']) }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-900 font-black uppercase tracking-[0.2em] rounded-full hover:bg-emerald-600 hover:text-white transition-all duration-700 shadow-4xl transform hover:scale-110">
                        Get Legal Consultation <i class="fa-solid fa-scale-balanced text-emerald-500 group-hover:text-white"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
