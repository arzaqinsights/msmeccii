@extends('layouts.website')

@section('title', 'Wall of Excellence - MSMECCII Recognitions')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 bg-slate-900 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-brand-primary rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-brand-accent rounded-full blur-[120px]"></div>
    </div>
    
    <div class="container relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">
            Wall of <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-accent">Excellence</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto font-medium leading-relaxed">
            Celebrating the honors, appreciations, and recognitions bestowed upon MSMECCII by global leaders and organizations.
        </p>
    </div>
</section>

<!-- Awards Grid -->
<section class="py-24 bg-white relative">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($awards as $award)
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 transition-all duration-500 hover:shadow-2xl hover:shadow-brand-primary/10 hover:-translate-y-2">
                <!-- Image Wrapper -->
                <div class="relative rounded-[2rem] overflow-hidden aspect-[3/4] mb-8 shadow-inner bg-white border border-slate-100">
                    <img src="{{ asset($award->award_image) }}" alt="{{ $award->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Overlay Info -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
                        <p class="text-white text-sm font-medium leading-relaxed">
                            {{ Str::limit($award->description, 120) }}
                        </p>
                    </div>
                </div>

                <!-- Content -->
                <div class="px-4 pb-4 flex flex-col flex-1">
                    <h3 class="text-xl font-black text-slate-900 mb-6 group-hover:text-brand-primary transition-colors">
                        {{ $award->title }}
                    </h3>

                    <!-- Giver Info -->
                    <div class="mt-auto flex items-center gap-4 p-4 bg-white rounded-2xl border border-slate-100 shadow-sm">
                        @if($award->giver_image)
                        <img src="{{ asset($award->giver_image) }}" class="w-12 h-12 rounded-full border-2 border-brand-primary/20 object-cover">
                        @else
                        <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 border border-slate-200">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        @endif
                        <div>
                            <p class="text-sm font-black text-slate-900 leading-none mb-1">{{ $award->giver_name }}</p>
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">{{ $award->giver_designation }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center">
                <i class="fa-solid fa-medal text-6xl text-slate-200 mb-4"></i>
                <h3 class="text-2xl font-black text-slate-400">Our Wall is Being Decorated</h3>
                <p class="text-slate-400 font-medium">Check back soon to see our achievements.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-20">
            {{ $awards->links() }}
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-brand-primary relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 30px 30px;"></div>
    <div class="container relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-black text-white mb-8">Part of a Global Movement</h2>
        <a href="{{ route('join.index') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-white text-brand-primary font-black rounded-2xl shadow-2xl hover:scale-105 transition-transform">
            Join MSMECCII Today <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>
@endsection
