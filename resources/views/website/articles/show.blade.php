@extends('layouts.website')

@push('meta')
    <title>{{ $article->meta_title ?? $article->title . ' | MSMECCII Blog' }}</title>
    @if($article->meta_description)
        <meta name="description" content="{{ $article->meta_description }}">
    @else
        <meta name="description" content="{{ $article->excerpt }}">
    @endif
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ $article->excerpt }}">
    <meta property="og:image" content="{{ $article->thumbnail_url }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
@endpush

@section('content')

<!-- Header -->
<div class="relative bg-slate-900 pt-32 pb-48 border-b border-slate-800">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-1/4 w-[800px] h-[800px] bg-brand-primary/10 rounded-full blur-[100px]"></div>
    </div>
</div>

<!-- Main Article Container -->
<section class="relative z-10 -mt-32 pb-24">
    <div class="max-w-[1000px] mx-auto px-6 lg:px-8">
        
        <article class="bg-white rounded-[2rem] shadow-[0_10px_50px_-10px_rgba(0,0,0,0.05)] border border-slate-100 overflow-hidden">
            
            <!-- Hero Image -->
            <div class="w-full h-[400px] lg:h-[500px] relative">
                <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                @if($article->category)
                    <div class="absolute top-6 left-6 flex flex-wrap gap-2">
                        @foreach(array_map('trim', explode(',', $article->category)) as $cat)
                            <span class="bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-xl text-xs font-black text-slate-900 uppercase tracking-widest shadow-lg">{{ $cat }}</span>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Content Header -->
            <div class="px-8 md:px-16 pt-16 pb-8 border-b border-slate-100">
                <div class="flex flex-wrap items-center gap-4 text-sm font-bold text-slate-500 mb-6">
                    <span class="flex items-center gap-2 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-100">
                        <i class="fa-regular fa-calendar text-brand-primary"></i> {{ $article->published_at ? $article->published_at->format('F d, Y') : $article->created_at->format('F d, Y') }}
                    </span>
                    @if($article->author)
                        <span class="flex items-center gap-2 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-100">
                            <i class="fa-solid fa-user-pen text-brand-primary"></i> {{ $article->author }}
                        </span>
                    @endif
                </div>
                
                <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-[1.1] tracking-tight mb-6">
                    {{ $article->title }}
                </h1>
                
                <div class="flex items-center gap-4">
                    <span class="text-xs font-bold uppercase tracking-widest text-slate-400">Share:</span>
                    <div class="flex gap-2">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-50 text-slate-500 flex items-center justify-center hover:bg-blue-50 hover:text-blue-600 transition-colors border border-slate-100">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-50 text-slate-500 flex items-center justify-center hover:bg-sky-50 hover:text-sky-500 transition-colors border border-slate-100">
                            <i class="fa-brands fa-twitter text-sm"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($article->title) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-50 text-slate-500 flex items-center justify-center hover:bg-blue-50 hover:text-blue-700 transition-colors border border-slate-100">
                            <i class="fa-brands fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' ' . url()->current()) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-50 text-slate-500 flex items-center justify-center hover:bg-green-50 hover:text-green-600 transition-colors border border-slate-100">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Block Content Renderer -->
            <div class="px-8 md:px-16 py-16 space-y-8">
                @php $blocks = json_decode($article->content, true); @endphp
                @if(is_array($blocks))
                    @foreach($blocks as $block)
                        @switch($block['type'] ?? '')
                            @case('heading')
                                @php $tag = $block['level'] ?? 'h2'; @endphp
                                @if($tag === 'h1')
                                    <h1 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight tracking-tight">{!! $block['content'] ?? '' !!}</h1>
                                @elseif($tag === 'h2')
                                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 leading-tight tracking-tight">{!! $block['content'] ?? '' !!}</h2>
                                @elseif($tag === 'h3')
                                    <h3 class="text-2xl font-bold text-slate-900 leading-tight">{!! $block['content'] ?? '' !!}</h3>
                                @else
                                    <h4 class="text-xl font-bold text-slate-800 leading-tight">{!! $block['content'] ?? '' !!}</h4>
                                @endif
                                @break

                            @case('paragraph')
                                <div class="text-lg text-slate-600 leading-relaxed prose-builder-inline">{!! $block['content'] ?? '' !!}</div>
                                @break

                            @case('image')
                                @if($block['url'] ?? '')
                                    <figure class="my-10 {{ ($block['size'] ?? 'full') === 'medium' ? 'max-w-[75%] mx-auto' : (($block['size'] ?? 'full') === 'small' ? 'max-w-[50%] mx-auto' : '') }}">
                                        <img src="{{ $block['url'] }}" alt="{{ $block['caption'] ?? '' }}" class="w-full h-auto rounded-2xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)]">
                                        @if($block['caption'] ?? '')
                                            <figcaption class="text-center text-sm text-slate-400 italic mt-4">{{ $block['caption'] }}</figcaption>
                                        @endif
                                    </figure>
                                @endif
                                @break

                            @case('gallery')
                                @if(!empty($block['images']))
                                    <div class="grid gap-4 my-10" style="grid-template-columns: repeat({{ $block['columns'] ?? 3 }}, 1fr);">
                                        @foreach($block['images'] as $img)
                                            <a href="{{ $img }}" target="_blank" class="block rounded-xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-lg transition-shadow">
                                                <img src="{{ $img }}" alt="Gallery image" class="w-full h-auto object-cover">
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                                @break

                            @case('list')
                                @if($block['style'] === 'ordered')
                                    <ol class="list-decimal pl-8 space-y-3 text-lg text-slate-600 leading-relaxed prose-builder-inline">
                                        @foreach(($block['items'] ?? []) as $item)
                                            @if(trim(strip_tags($item)))
                                                <li class="pl-2">{!! $item !!}</li>
                                            @endif
                                        @endforeach
                                    </ol>
                                @else
                                    <ul class="list-disc pl-8 space-y-3 text-lg text-slate-600 leading-relaxed prose-builder-inline">
                                        @foreach(($block['items'] ?? []) as $item)
                                            @if(trim(strip_tags($item)))
                                                <li class="pl-2">{!! $item !!}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                                @break

                            @case('quote')
                                <blockquote class="border-l-4 border-brand-primary bg-slate-50 rounded-r-2xl p-8 my-10 prose-builder-inline">
                                    <div class="text-xl italic text-slate-800 leading-relaxed font-medium">{!! $block['content'] ?? '' !!}</div>
                                    @if($block['author'] ?? '')
                                        <cite class="block mt-4 text-sm font-bold text-slate-500 not-italic">— {{ $block['author'] }}</cite>
                                    @endif
                                </blockquote>
                                @break

                            @case('code')
                                <div class="bg-slate-900 rounded-2xl p-6 my-10 overflow-x-auto">
                                    <pre class="text-green-400 text-sm font-mono whitespace-pre-wrap">{{ $block['content'] ?? '' }}</pre>
                                </div>
                                @break

                            @case('divider')
                                <hr class="border-slate-200 my-12">
                                @break

                            @case('spacer')
                                @php
                                    $h = ['small' => '16px','medium' => '32px','large' => '64px','xlarge' => '96px'][$block['height'] ?? 'medium'] ?? '32px';
                                @endphp
                                <div style="height: {{ $h }};"></div>
                                @break
                        @endswitch
                    @endforeach
                @else
                    {{-- Fallback: render raw HTML if content is not JSON (legacy articles) --}}
                    <div class="prose-builder">
                        {!! $article->content !!}
                    </div>
                @endif
            </div>
            
            <!-- Bottom Nav -->
            <div class="px-8 md:px-16 py-8 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
                <a href="{{ route('blog.index') }}" class="text-sm font-bold text-slate-600 hover:text-brand-primary transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> Back to Insights
                </a>
            </div>
        </article>
    </div>
</section>

@if(isset($related) && $related->count() > 0)
<section class="py-24 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl font-black text-slate-900 tracking-tight mb-12">Related Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($related as $rel)
                <article class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_25px_-5px_rgba(0,0,0,0.05)] border border-slate-100 group transition-all duration-300 hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] hover:-translate-y-1 flex flex-col">
                    <a href="{{ route('blog.show', $rel->slug) }}" class="block relative h-48 overflow-hidden">
                        <img src="{{ $rel->thumbnail_url }}" alt="{{ $rel->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </a>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="text-[10px] font-bold text-brand-primary uppercase tracking-widest mb-2">{{ $rel->category ?? 'Article' }}</div>
                        <a href="{{ route('blog.show', $rel->slug) }}"><h3 class="text-lg font-black text-slate-900 leading-tight group-hover:text-brand-primary transition-colors line-clamp-2 mb-3">{{ $rel->title }}</h3></a>
                        <p class="text-slate-500 text-xs leading-relaxed line-clamp-2 flex-1">{{ $rel->excerpt }}</p>
                        <a href="{{ route('blog.show', $rel->slug) }}" class="text-[11px] font-bold text-slate-400 group-hover:text-brand-primary transition-colors flex items-center gap-1.5 mt-4">Read Article <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
