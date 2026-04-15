@extends('layouts.website')

@section('title', 'Global Chairman | MSME Chamber of Commerce and Industry of India')

@section('content')
    <!-- Hero Banner -->
    <section class="relative h-[40vh] min-h-[300px] w-full bg-slate-900 flex items-center justify-center overflow-hidden border-b-4 border-brand-primary">
        <div class="absolute inset-0 z-0 opacity-40">
            <img src="" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-900/80"></div>
        </div>
        <div class="container relative z-10 text-center animate-on-scroll">
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm font-medium">
                    <li class="inline-flex items-center"><a href="/" class="text-slate-300 hover:text-white flex items-center gap-2">Home</a></li>
                    <li><div class="flex items-center text-slate-500"><i class="fa-solid fa-chevron-right text-[10px] mx-2"></i><span class="text-brand-accent">Global Chairman</span></div></li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">Global <span class="text-brand-primary-light">Chairman</span></h1>
        </div>
    </section>

    <section class="py-24 bg-slate-100 relative">
        <div class="container relative z-10">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-200">
                <div class="flex flex-col lg:flex-row">
                    
                    <!-- Chairman Image Area -->
                    <div class="w-full lg:w-2/5 relative animate-on-scroll">
                        <img src="{{ asset('images/about/chairman.png') }}" alt="Dr. Indrajit Ghosh" class="w-full h-full min-h-[400px] lg:min-h-[800px] object-cover bg-slate-300">
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent lg:bg-linear-to-r lg:from-transparent lg:via-slate-900/20 lg:to-slate-900/80 hidden lg:block"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent lg:hidden"></div>
                    </div>

                    <!-- Content Area -->
                    <div class="w-full lg:w-3/5 p-10 lg:p-16 flex flex-col justify-center animate-on-scroll delay-100">
                        <div class="mb-10">
                            <div class="border-l-4 border-brand-primary pl-4">
                                <h3 class="text-4xl font-extrabold text-slate-900 mb-2">Dr. Indrajit Ghosh</h3>
                                <p class="text-brand-primary font-bold text-lg uppercase tracking-wide">Global Chairman, MSMECCII</p>
                            </div>
                        </div>

                        <!-- The Quote/Message -->
                        <div class="relative mb-12">
                            <i class="fa-solid fa-quote-left absolute -top-6 -left-6 text-6xl text-slate-200 -z-10 opacity-50"></i>
                            <h4 class="text-2xl md:text-3xl font-bold text-slate-800 leading-snug mb-8">
                                "I am profoundly honored and excited to serve as the Chairman of the Board of Directors for the MSME Chamber of Commerce and Industry of India."
                            </h4>
                            <div class="prose prose-lg text-slate-600">
                                <p class="mb-6">
                                    We have a tremendously talented, deeply experienced, and fiercely engaged Board of Directors. Together with our dedicated staff, we share a singular, unwavering vision: to make MSMECCII the strongest, most sustainable, vibrant, and inclusive community for businesses worldwide.
                                </p>
                                <p class="mb-6">
                                    Throughout my <strong>36+ years</strong> of global operation within the Plastics, Packaging, Leather, Handicrafts, and Trade networks, I have witnessed first-hand the incredible, untapped potential of Indian micro and small enterprises. Having cultivated deep relationships by navigating markets in over <strong>40 countries</strong>, my mandate is clear—bridging the substantial gap between local manufacturing brilliance and international economic stages.
                                </p>
                                <p class="mb-6">
                                    At MSMECCII, we do not simply offer networking; we architect massive growth corridors. From the ambitious <em>Sustainable Global Tex Trade Fairs</em> to integrating rigid <em>Circular Economy Strategies</em>, our aim is to bulletproof our members against global volatility.
                                </p>
                                <p>
                                    I invite every passionate entrepreneur to step forward, utilize our vast array of advocacy, financial guidance, and networking tools, and journey with us toward total global dominance.
                                </p>
                            </div>
                        </div>

                        <!-- Stats / Credentials -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 border-t border-slate-200">
                            <div>
                                <p class="text-3xl font-black text-brand-primary mb-1">36+</p>
                                <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Years Active Exp.</p>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-brand-primary mb-1">40+</p>
                                <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Countries Reached</p>
                            </div>
                            <div>
                                <p class="text-3xl font-black text-brand-primary mb-1">2019</p>
                                <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">NGO Founded</p>
                            </div>
                            <div>
                                <p class="text-xl font-black text-brand-primary mb-1">Mech Eng. & MBA</p>
                                <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Academic Honors</p>
                            </div>
                        </div>

                        <!-- Signature -->
                        <div class="mt-12">
                            <p class="font-satisfy text-4xl text-slate-400">Dr. Indrajit Ghosh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
