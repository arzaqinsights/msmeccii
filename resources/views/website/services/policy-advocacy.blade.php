@extends('layouts.website')

@section('title', 'Policy Advocacy & Government Liaison - MSMECCII')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-rose-900/40 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-25"
            style="background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-6 backdrop-blur-md">
                <i class="fa-solid fa-flag text-rose-500"></i>
                <span class="text-xs font-black uppercase tracking-widest text-rose-300">Strategic Representation & Advocacy</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black uppercase mb-6 tracking-tight leading-tight">
                Policy <span class="text-rose-500">Advocacy</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic">
                The collective voice of MSMEs at the highest levels of governance.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-24 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: THE VOICE -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8 animate-on-scroll">
                    <h2 class="text-4xl font-black text-slate-900 uppercase italic leading-tight border-l-8 border-rose-600 pl-6">
                        Bridging The Gap <br> <span class="text-rose-600 text-2xl">Policy vs. Implementation</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        Small enterprises often lack a seat at the table where decisive policy-making happens. MSMECCII serves as your permanent representative in government corridors. Our <strong>Policy Advocacy</strong> team actively collaborates with ministerial bodies to ensure MSME-friendly legislation and the removal of complex regulatory barriers.
                    </p>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-4 p-4 bg-rose-50 rounded-2xl border-l-4 border-rose-500">
                             <i class="fa-solid fa-user-shield text-rose-600"></i>
                             <p class="text-sm font-black uppercase text-slate-800 tracking-tight transition-colors">Direct Ministerial Representation</p>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-rose-50 rounded-2xl border-l-4 border-rose-500">
                             <i class="fa-solid fa-bell text-rose-600"></i>
                             <p class="text-sm font-black uppercase text-slate-800 tracking-tight transition-colors">Instant Regulatory Alerts</p>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop" class="rounded-[3.5rem] shadow-2xl relative z-10 hover:-translate-y-2 transition-transform duration-700" alt="Policy Discussion">
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-rose-500/5 rounded-full blur-[100px]"></div>
                </div>
            </div>

            <!-- SECTION 2: ADOVCACY FOCUS (CARDS) -->
            <div class="space-y-12">
                <div class="text-center max-w-3xl mx-auto">
                    <h3 class="text-3xl font-black uppercase italic text-slate-900 mb-6 tracking-tighter text-center">Strategic Intervention Framework</h3>
                    <p class="text-slate-500 font-medium italic text-center">Protecting the interests of the MSME ecosystem through multiple channels.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach([
                        ['t' => 'Taxation & Finance', 'img' => 'https://images.unsplash.com/photo-1554224155-1696413565d3?q=80&w=2070&auto=format&fit=crop', 'd' => 'Advocating for GST rationalization and credit access.'],
                        ['t' => 'Export Policy', 'img' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop', 'd' => 'Securing fiscal incentives for local manufacturers.'],
                        ['t' => 'Digital Compliances', 'img' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop', 'd' => 'Simplifying data privacy and IT norms for small units.']
                    ] as $adv)
                    <div class="group relative h-[450px] overflow-hidden rounded-[3rem] shadow-xl">
                        <img src="{{ $adv['img'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" alt="Advocacy Area">
                        <div class="absolute inset-0 bg-gradient-to-t from-rose-950 via-slate-900/20 to-transparent"></div>
                        <div class="absolute bottom-10 left-10 right-10">
                            <h4 class="text-2xl font-black text-rose-500 mb-4 uppercase italic tracking-tight">{{ $adv['t'] }}</h4>
                            <p class="text-white/80 text-xs font-bold leading-relaxed uppercase opacity-80 group-hover:opacity-100">{{ $adv['d'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: RECENT ACHIEVEMENTS -->
            <div class="bg-slate-950 text-white p-20 rounded-[4rem] relative overflow-hidden shadow-3xl text-center space-y-16">
                 <div class="absolute top-0 left-0 w-80 h-80 bg-rose-500/10 rounded-full blur-[120px] -ml-40 -mt-40"></div>
                 <h3 class="text-4xl font-black uppercase italic tracking-widest text-white/90">Our Advocacy Impact</h3>
                 <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    @foreach(['GST Simplified', 'Export Incentives', 'ZED Certification', 'Credit Linkage'] as $item)
                        <div class="space-y-4">
                            <div class="w-16 h-16 bg-white/5 border border-white/10 mx-auto rounded-2xl flex items-center justify-center text-rose-500">
                                <i class="fa-solid fa-circle-check text-2xl"></i>
                            </div>
                            <p class="text-[10px] font-black uppercase tracking-widest text-slate-400">{{ $item }}</p>
                        </div>
                    @endforeach
                 </div>
                 <div class="max-w-4xl mx-auto pt-12 border-t border-white/10">
                    <p class="text-xl text-rose-100 italic font-medium">"We ensure that small businesses are not just seen as a number, but as the engine of India's economy."</p>
                 </div>
            </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 text-white p-24 rounded-[5rem] text-center shadow-4xl overflow-hidden border-b-[20px] border-rose-600 group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(244,63,94,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-12">
                    <h3 class="text-6xl md:text-8xl font-black mb-8 uppercase tracking-[1]">Speak <br> Louder.</h3>
                    <p class="text-xl text-slate-300 max-w-4xl mx-auto leading-relaxed font-medium italic mb-12 opacity-80">
                        Individually, MSMEs are small. Collectively, we are the voice of Bharat. Join us to influence the policies that shape your future.
                    </p>
                    <a href="{{ route('join.index') }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-900 font-black uppercase tracking-[0.2em] rounded-full hover:bg-rose-600 hover:text-white transition-all duration-700 shadow-4xl transform hover:scale-110">
                        Become a Member <i class="fa-solid fa-flag text-rose-500 group-hover:text-white"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
