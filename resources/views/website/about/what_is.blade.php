@extends('layouts.website')

@section('title', 'What is MSMECCII | MSME Chamber of Commerce and Industry of India')

@section('content')
    <!-- Hero Banner -->
    <section class="relative h-[40vh] min-h-[300px] w-full bg-slate-900 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-40">
            <img src="" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-900/80"></div>
        </div>
        <div class="container relative z-10 text-center animate-on-scroll">
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm font-medium">
                    <li class="inline-flex items-center"><a href="/" class="text-slate-300 hover:text-white flex items-center gap-2">Home</a></li>
                    <li><div class="flex items-center text-slate-500"><i class="fa-solid fa-chevron-right text-[10px] mx-2"></i><span class="text-brand-accent">What is MSMECCII</span></div></li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">What is <span class="text-brand-accent">MSMECCII</span></h1>
        </div>
    </section>

    <!-- Inclusion of our modular sections -->
    @include('website.about.partials.who_we_are')
    @include('website.about.partials.impact_stats')
    @include('website.about.partials.history')
    @include('website.about.partials.mission_vision')
    @include('website.about.partials.core_values')

@endsection
