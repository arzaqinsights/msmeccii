@extends('layouts.website')

@section('title', 'Core Leadership | MSME Chamber of Commerce and Industry of India')

@section('content')
    <!-- Hero Banner -->
    <section class="relative h-[40vh] min-h-[300px] w-full bg-slate-900 flex items-center justify-center overflow-hidden border-b-4 border-brand-accent">
        <div class="absolute inset-0 z-0 opacity-40">
            <img src="" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-900/80"></div>
        </div>
        <div class="container relative z-10 text-center animate-on-scroll">
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm font-medium">
                    <li class="inline-flex items-center"><a href="/" class="text-slate-300 hover:text-white flex items-center gap-2">Home</a></li>
                    <li><div class="flex items-center text-slate-500"><i class="fa-solid fa-chevron-right text-[10px] mx-2"></i><span class="text-brand-accent">Core Leadership</span></div></li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">Board of <span class="text-brand-accent">Directors</span></h1>
        </div>
    </section>

    <!-- Inclusion of our leadership partial -->
    @include('website.about.partials.leadership')

    <!-- Additional Content specific for Leadership Page -->
    <section class="py-16 bg-slate-50 pb-24 border-t border-slate-200">
        <div class="container animate-on-scroll">
            <div class="bg-brand-primary rounded-3xl p-10 lg:p-14 text-center">
                <h3 class="text-3xl font-extrabold text-white mb-6">Join Our Vision</h3>
                <p class="text-slate-300 max-w-2xl mx-auto mb-8 text-lg">
                    Our Leadership team is passionately committed to nurturing an ecosystem where MSMEs can thrive globally. If you share our vision, we encourage you to become a member and grow with us.
                </p>
                <a href="/join" class="inline-block bg-brand-accent hover:bg-white text-slate-900 px-8 py-4 rounded-md font-bold transition-all shadow-lg hover:shadow-brand-accent/50 group">
                    Become a Member Today
                    <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

@endsection
