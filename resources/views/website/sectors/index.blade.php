@extends('layouts.website')

@section('title', 'Industry Sectors Hub')
@section('hero_title', 'Industry Sectors')
@section('hero_subtitle', 'Explore the diverse economic engines powering our global network.')

@section('content')

@php
$sectors = [
    [
        'title' => 'Textile',
        'description' => 'Textile is a fabric made by weaving or knitting fibers together.',
        'thumbnail' => 'images/sectors/textile.png',
        'slug' => 'textile',
    ],
    [
        'title' => 'Food Processing',
        'description' => 'Food processing is the transformation of raw ingredients into food or into other forms.',
        'thumbnail' => 'images/sectors/food-processing.png',
        'slug' => 'food-processing',
    ],
    [
        'title' => 'Automotive',
        'description' => 'Automotive is the design, development, manufacturing, marketing, and selling of motor vehicles.',
        'thumbnail' => 'images/sectors/automotive.png',
        'slug' => 'automotive',
    ],
    [
        'title' => 'Healthcare',
        'description' => 'Healthcare is the maintenance or improvement of health via the prevention, diagnosis, treatment, recovery, or cure of disease, illness, injury, and other physical and mental impairments.',
        'thumbnail' => 'images/sectors/healthcare.png',
        'slug' => 'healthcare',
    ],
    [
        'title' => 'Education',
        'description' => 'Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, morals, beliefs, and habits.',
        'thumbnail' => 'images/sectors/education.png',
        'slug' => 'education',
    ],
    [
        'title' => 'Agriculture',
        'description' => 'Agriculture is the practice of farming, including the cultivation of the soil for the growing of crops and the rearing of animals to provide food, wool, and other products.',
        'thumbnail' => 'images/sectors/agriculture.png',
        'slug' => 'agriculture',
    ],
    [
        'title' => 'Construction',
        'description' => 'Construction is the process of constructing a building or infrastructure.',
        'thumbnail' => 'images/sectors/construction.png',
        'slug' => 'construction',
    ],
    [
        'title' => 'Energy',
        'description' => 'Energy is the capacity to do work.',
        'thumbnail' => 'images/sectors/energy.png',
        'slug' => 'energy',
    ],
    [
        'title' => 'Technology',
        'description' => 'Technology is the application of scientific knowledge for practical purposes.',
        'thumbnail' => 'images/sectors/technology.png',
        'slug' => 'technology',
    ],
    [
        'title' => 'Finance',
        'description' => 'Finance is the management of money and other assets.',
        'thumbnail' => 'images/sectors/finance.png',
        'slug' => 'finance',
    ],
    [
        'title' => 'Tourism',
        'description' => 'Tourism is the commercial organization of holidays and visits to places of interest.',
        'thumbnail' => 'images/sectors/tourism.png',
        'slug' => 'tourism',
    ],
    [
        'title' => 'Manufacturing',
        'description' => 'Manufacturing is the production of goods on a large scale.',
        'thumbnail' => 'images/sectors/manufacturing.png',
        'slug' => 'manufacturing',
    ],
]
@endphp
<!-- Hero -->
<section class="relative pt-32 pb-20 bg-brand-light overflow-hidden">
    <div class="container text-center relative z-10">
        <h1 class="text-5xl font-black text-brand-primary mb-4 drop-shadow-md">Global Industry Hub</h1>
        <p class="text-xl font-medium text-slate-600 max-w-2xl mx-auto">Discover our dedicated development sectors bridging enterprises worldwide.</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container"> 
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($sectors as $sector)
                <a href="{{ route('sectors.show', $sector['slug']) }}" class="group block h-full">
                    <div class="bg-white border text-left border-slate-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:border-brand-primary/30 transition-all duration-300 h-full flex flex-col relative top-0 hover:-top-2">
                        
                        <div class="relative w-full h-56 overflow-hidden">
                            <img src="{{ $sector['thumbnail'] ? asset($sector['thumbnail']) : asset('images/sectors/textile.png') }}" alt="{{ $sector['title'] }}" loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <h3 class="text-xl font-black text-white shrink-0 shadow-sm">{{ $sector['title'] }}</h3>
                            </div>
                        </div>

                        <div class="p-6 flex-1 flex flex-col">
                            <p class="text-sm font-medium text-slate-600 leading-relaxed mb-6">{{ Str::limit($sector['description'], 100) }}</p>
                            <div class="mt-auto text-brand-primary font-bold text-sm tracking-widest uppercase flex items-center gap-2 group-hover:gap-3 transition-all">
                                Explore Sector <i class="fa-solid fa-arrow-right-long text-xs"></i>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-full py-16 text-center text-slate-500">
                    <p class="text-lg font-bold">No active sectors published yet.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>

@endsection
