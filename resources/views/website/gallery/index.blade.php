@extends('layouts.website')

@section('title', 'Media Gallery')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-24 bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-black"></div>
        <div class="absolute inset-0 opacity-20"
            style="background-image: url('{{ asset('images/gallery-hero.png') }}'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-black uppercase mb-4 tracking-wide text-white">
                Media <span class="text-brand-primary">Gallery</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto font-medium">
                Explore memories, events, and highlights from the MSMECCII ecosystem.
            </p>
        </div>
    </section>

    <!-- ALBUMS -->
    <section class="py-20 bg-slate-50 min-h-[50vh]">
        <div class="container">
            @if($categories->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($categories as $category)
                        <a href="{{ route('gallery.show', base64_encode($category->category)) }}" class="group block relative rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 bg-white">
                            <div class="aspect-[4/3] w-full relative overflow-hidden bg-slate-200">
                                <img src="{{ asset($category->cover) }}" class="w-full h-full object-cover group-hover:scale-110 group-hover:rotate-1 transition-transform duration-700" alt="{{ $category->category }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                                
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20">
                                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white border border-white/30 shadow-xl">
                                        <i class="fa-solid fa-eye text-xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full p-6 z-10">
                                <h4 class="text-white font-black text-xl mb-1 truncate drop-shadow-md">{{ $category->category }}</h4>
                                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-xs font-bold border border-white/20">
                                    <i class="fa-regular fa-images"></i> {{ $category->image_count }} Photos
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-3xl p-16 text-center border border-slate-200 shadow-sm max-w-2xl mx-auto">
                    <i class="fa-regular fa-folder-open text-6xl text-slate-200 mb-6 block"></i>
                    <h3 class="text-2xl font-black text-slate-800 mb-2">No Albums Available</h3>
                    <p class="text-slate-500 font-medium">We are currently gathering our best moments. Check back soon for beautiful photo stories!</p>
                </div>
            @endif
        </div>
    </section>

@endsection
