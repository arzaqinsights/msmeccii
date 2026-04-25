@extends('layouts.website')

@section('title', $page->title . ' | MSME Chamber of Commerce and Industry of India')

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
                    <li><div class="flex items-center text-slate-500"><i class="fa-solid fa-chevron-right text-[10px] mx-2"></i><span class="text-brand-accent">{{ $page->title }}</span></div></li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">{{ $page->title }}</h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 bg-white relative">
        <div class="container relative z-10">
            <!-- Section Header -->
            @if($page->description)
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6 animate-on-scroll">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-4">
                        <span class="text-brand-primary text-xs font-bold tracking-widest uppercase">{{ $page->title }}</span>
                    </div>
                    <div class="text-slate-600 mt-4 text-lg">
                        {!! $page->description !!}
                    </div>
                </div>
            </div>
            @endif

            <!-- Members Grid (Grouped) -->
            @php
                $groupedMembers = $members->groupBy(function($item) {
                    return $item->group_name ?: 'Members';
                });
            @endphp

            @foreach($groupedMembers as $groupName => $group)
                @if($groupName !== 'Members' || $groupedMembers->count() > 1)
                    <div class="mb-12 mt-16 first:mt-0 animate-on-scroll">
                        <h3 class="text-3xl font-black text-slate-800 flex items-center gap-4">
                            {{ $groupName }}
                            <span class="flex-grow h-px bg-slate-200"></span>
                        </h3>
                    </div>
                @endif

                <div class="grid grid-cols-1 gap-8 mb-20 last:mb-0">
                    @foreach($group as $member)
                    <div class="group bg-slate-50 rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 animate-on-scroll border flex items-center gap-8 h-full">
                        <div class="relative h-auto w-1/3 overflow-hidden shrink-0">
                            @if($member->image)
                                <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover bg-slate-300 group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center text-slate-400">
                                    <i class="fa-solid fa-user text-6xl"></i>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6 text-left flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-1">{{ $member->name }}</h3>
                                <p class="text-brand-primary font-semibold text-sm mb-4 uppercase tracking-wider">{{ $member->designation }}</p>
                                @if($member->company_name)
                                    <p class="text-slate-400 text-[10px] font-black uppercase mb-3">{{ $member->company_name }}</p>
                                @endif
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">
                                    {{ $member->description }}
                                </p>
                            </div>
                            
                            @if($member->social_links)
                            <div class="flex justify-center gap-3 pt-4 border-t border-slate-200">
                                @foreach($member->social_links as $platform => $url)
                                    @if($url)
                                    <a href="{{ $url }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 hover:bg-brand-primary hover:text-white transition-colors">
                                        <i class="fa-brands fa-{{ $platform }} text-sm"></i>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <!-- Join Vision -->
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
