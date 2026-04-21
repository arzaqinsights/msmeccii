@extends('layouts.website')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 bg-slate-900 border-b border-slate-800">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-1/4 w-[800px] h-[800px] bg-brand-primary/10 rounded-full blur-[100px]"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-block py-1 px-3 rounded-full bg-brand-primary/20 text-brand-light text-xs font-black uppercase tracking-widest mb-6 border border-brand-primary/30">News & Insights</span>
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-white leading-[1.1] tracking-tight mb-6">
                MSMECCII <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-light to-white">Insights</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 font-medium leading-relaxed">
                Stay updated with the latest industry trends, press releases, expert articles, and crucial government initiatives from our diverse ecosystem.
            </p>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-24 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($articles as $article)
                <article class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_25px_-5px_rgba(0,0,0,0.05)] border border-slate-100 group transition-all duration-300 hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] hover:-translate-y-1 flex flex-col">
                    <a href="{{ route('blog.show', $article->slug) }}" class="block relative h-64 overflow-hidden">
                        <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        @if($article->category)
                            <div class="absolute top-4 left-4 flex flex-wrap gap-1.5">
                                @foreach(array_map('trim', explode(',', $article->category)) as $cat)
                                    <span class="bg-white/90 backdrop-blur-sm px-2.5 py-1 rounded-lg text-[10px] font-black text-slate-900 uppercase tracking-widest shadow-sm">{{ $cat }}</span>
                                @endforeach
                            </div>
                        @endif
                    </a>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex items-center gap-3 text-xs font-bold text-slate-400 mb-4">
                            <span><i class="fa-regular fa-calendar mr-1"></i> {{ $article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y') }}</span>
                            @if($article->author)
                                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                <span><i class="fa-solid fa-user-pen mr-1"></i> {{ $article->author }}</span>
                            @endif
                        </div>
                        
                        <a href="{{ route('blog.show', $article->slug) }}" class="block mb-4">
                            <h3 class="text-xl font-black text-slate-900 leading-tight group-hover:text-brand-primary transition-colors line-clamp-2">
                                {{ $article->title }}
                            </h3>
                        </a>
                        
                        <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-3 flex-1">
                            {{ $article->excerpt }}
                        </p>
                        
                        <div class="mt-auto pt-6 border-t border-slate-100 flex items-center justify-between">
                            <a href="{{ route('blog.show', $article->slug) }}" class="text-sm font-bold text-brand-primary group-hover:text-brand-dark transition-colors flex items-center gap-2">
                                Read Full Article <i class="fa-solid fa-arrow-right text-[10px] transition-transform group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-white rounded-3xl border border-slate-100 shadow-sm">
                    <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-regular fa-folder-open text-3xl text-slate-300"></i>
                    </div>
                    <h2 class="text-2xl font-black text-slate-800 mb-2">No Articles Yet</h2>
                    <p class="text-slate-500">We're currently preparing insightful content for you. Check back soon for updates!</p>
                </div>
            @endforelse
        </div>

        @if($articles->hasPages())
            <div class="mt-16 flex justify-center">
                {{ $articles->links() }}
            </div>
        @endif

    </div>
</section>
@endsection
