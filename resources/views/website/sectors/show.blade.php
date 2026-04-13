@extends('layouts.website')

@section('title', $sector->title)

@section('content')

<!-- Sector Hero Space -->
<section class="relative pt-32 pb-20 overflow-hidden bg-slate-900 border-b border-brand-primary/20">
    @if($sector->thumbnail)
        <div class="absolute inset-0">
            <img src="{{ asset($sector->thumbnail) }}" alt="{{ $sector->title }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/80 to-transparent"></div>
            <div class="absolute inset-0 bg-brand-primary/10 mix-blend-multiply"></div>
        </div>
    @endif
    <div class="container relative z-10 text-center text-white">
        <!-- Breadcrumb -->
        <div class="mb-6 flex justify-center text-sm font-bold tracking-widest uppercase items-center gap-2 text-slate-400">
            <a href="/" class="hover:text-brand-light transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('sectors.index') }}" class="hover:text-brand-light transition-colors">Sectors</a>
        </div>
        
        <h1 class="text-5xl md:text-6xl font-black text-white mb-6 uppercase tracking-wider drop-shadow-lg">
            {{ $sector->title }}
        </h1>
        @if($sector->description)
            <p class="text-xl md:text-2xl font-medium text-slate-300 max-w-3xl mx-auto drop-shadow leading-relaxed">
                {{ $sector->description }}
            </p>
        @endif
    </div>
</section>

<!-- Dynamic Layout Construction -->
<div class="relative bg-white py-16">
    <div class="container space-y-12 pb-20">
        
        @forelse($sector->sections as $block)
            <div class="w-full">
                
                @if($block->type === 'heading')
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 inline-block pb-2 mb-2">
                        {{ $block->content['value'] ?? '' }}
                    </h2>
                
                @elseif($block->type === 'text')
                    <div class="prose prose-lg max-w-none text-slate-600 leading-relaxed font-medium">
                        {!! nl2br(e($block->content['value'] ?? '')) !!}
                    </div>
                
                @elseif($block->type === 'image')
                    @php
                        $imageSrc = $block->content['value'] ?? '';
                        // Determine if it's absolute URL or needs asset() wrap
                        $src = Str::startsWith($imageSrc, ['http://', 'https://']) ? $imageSrc : asset($imageSrc);
                    @endphp
                    <div class="rounded-2xl overflow-hidden shadow-xl border border-slate-200 my-8">
                        <img src="{{ $src }}" alt="Sector visual" class="w-full h-auto object-cover max-h-[600px]">
                    </div>
                @endif
                
            </div>
        @empty
            <div class="text-center py-20 bg-slate-50 rounded-2xl border border-slate-100 shadow-inner">
                <i class="fa-solid fa-hourglass-start text-4xl text-slate-300 mb-4 block"></i>
                <h3 class="text-xl font-bold text-slate-700">Detailed overview incoming</h3>
                <p class="text-slate-500 mt-2">The administration is currently building the deep-dive content for this sector. Check back shortly.</p>
            </div>
        @endforelse

    </div>
</div>

@endsection
