@php
    $excellenceAwards = \App\Models\ExcellenceAward::where('status', 'published')
        ->where('show_on_home', true)
        ->orderBy('order')
        ->take(3)
        ->get();
@endphp

@if($excellenceAwards->count() > 0)
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Background Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary/5 -skew-x-12 translate-x-1/2"></div>
    
    <div class="container relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-primary/10 border border-brand-primary/20 text-brand-primary text-xs font-black uppercase tracking-widest mb-6">
                    <i class="fa-solid fa-crown text-[10px]"></i> Wall of Excellence
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">
                    Recognized for <span class="text-brand-primary">Excellence</span> & Leadership
                </h2>
            </div>
            <a href="{{ route('excellence.index') }}" class="group flex items-center gap-3 text-brand-primary font-black uppercase tracking-widest text-sm hover:gap-5 transition-all">
                Explore Full Wall <i class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($excellenceAwards as $award)
            <div class="bg-white rounded-[2rem] p-4 shadow-sm border border-slate-100 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 group">
                <div class="relative rounded-[1.5rem] overflow-hidden aspect-[4/5] mb-6">
                    <img src="{{ asset($award->award_image) }}" alt="{{ $award->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <p class="text-white font-black text-lg leading-tight">{{ $award->title }}</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-3 px-2 pb-2">
                    @if($award->giver_image)
                    <img src="{{ asset($award->giver_image) }}" class="w-10 h-10 rounded-full border-2 border-slate-50 object-cover shadow-sm">
                    @endif
                    <div>
                        <p class="text-xs font-black text-slate-900 leading-none mb-1">{{ $award->giver_name }}</p>
                        <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">{{ Str::limit($award->giver_designation, 25) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
