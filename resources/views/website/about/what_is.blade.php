@extends('layouts.website')

@section('title', 'What is MSMECCII | MSME Chamber of Commerce and Industry of India')

@section('content')
    <!-- Hero Banner -->
    <section class="relative h-[50vh] min-h-[400px] w-full bg-slate-900 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/about/hero-bg.png') }}" alt="MSMECCII Global Background" class="w-full h-full object-cover opacity-50 scale-105">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
        </div>
        <div class="container relative z-10 text-center animate-on-scroll">
            <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs font-bold uppercase tracking-widest">
                    <li class="inline-flex items-center"><a href="/" class="text-slate-400 hover:text-brand-accent transition-colors flex items-center gap-2">Home</a></li>
                    <li><div class="flex items-center text-slate-600"><i class="fa-solid fa-chevron-right text-[8px] mx-2"></i><span class="text-brand-accent">What is MSMECCII</span></div></li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-7xl font-black text-white tracking-tight leading-tight">
                What is <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-accent to-white">MSMECCII?</span>
            </h1>
            <p class="text-slate-400 mt-6 text-lg md:text-xl max-w-2xl mx-auto font-medium">
                Pioneering the global expansion of India's MSME ecosystem through strategic networking and policy advocacy.
            </p>
        </div>
    </section>

    <!-- Modular sections -->
    @include('website.about.partials.who_we_are')
    @include('website.about.partials.impact_stats')

    {{-- Moved from Home Page --}}
    @include('website.home.partials.why_choose')
    @include('website.home.partials.growth')
    @include('website.home.partials.values')

    @include('website.about.partials.history')
    @include('website.about.partials.mission_vision')
    @include('website.about.partials.core_values')

    {{-- Moved from Home Page --}}
    @include('website.home.partials.membership')

    {{-- Leadership CTA --}}
    <section class="py-24 bg-brand-primary-dark relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-accent rounded-full blur-[120px] -mr-96 -mt-96"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-white rounded-full blur-[100px] -ml-64 -mb-64"></div>
        </div>
        <div class="container relative z-10 text-center animate-on-scroll">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8 backdrop-blur-sm">
                <i class="fa-solid fa-crown text-brand-accent text-xs"></i>
                <span class="text-white text-[10px] font-black tracking-widest uppercase">The Visionaries</span>
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
                Guided by <span class="text-brand-accent italic">Global</span> Leadership
            </h2>
            <p class="text-slate-400 text-lg md:text-xl max-w-3xl mx-auto mb-12 font-medium">
                Our organization is steered by visionaries with decades of global expertise, including Padma Shri & Padma Bhushan awardees.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="{{ route('about.chairman') }}" class="group relative px-12 py-5 bg-brand-accent text-brand-primary rounded-2xl font-black text-xs uppercase tracking-widest shadow-xl shadow-brand-accent/20 hover:scale-105 transition-all overflow-hidden">
                    <span class="relative z-10 flex items-center gap-2">
                        Meet the Chairman
                        <i class="fa-solid fa-arrow-right-long group-hover:translate-x-1 transition-transform"></i>
                    </span>
                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                </a>
                <a href="{{ route('about.leadership') }}" class="px-12 py-5 bg-white/5 border-2 border-white/20 text-white rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-white hover:text-brand-primary hover:border-white transition-all">
                    Full Leadership Team
                </a>
            </div>
        </div>
    </section>

@endsection
