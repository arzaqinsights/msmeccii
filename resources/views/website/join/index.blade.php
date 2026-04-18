@extends('layouts.website')

@section('title', 'Join Us | MSMECCII')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 bg-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/20 to-transparent"></div>
    <div class="container relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6">Join the <span class="text-brand-primary italic">Movement</span></h1>
        <p class="text-slate-400 font-bold text-lg max-w-2xl mx-auto leading-relaxed">
            Select the appropriate application portal below to begin your journey with MSMECCII. We empower startups, MSMEs, and corporates through strategic global opportunities.
        </p>
    </div>
</section>

<!-- Forms Grid -->
<section class="py-24 bg-brand-light">
    <div class="container">
        @php
            $forms = \App\Models\Form::where('status', 'published')->get();
        @endphp

        @if($forms->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($forms as $form)
                    <div class="group bg-white rounded-[2.5rem] overflow-hidden shadow-xl shadow-slate-200 border border-slate-100 hover:border-brand-primary transition-all duration-500 hover:-translate-y-2 flex flex-col h-full">
                        <!-- Image Wrapper -->
                        <div class="relative h-56 overflow-hidden">
                            @if($form->thumbnail)
                                <img src="{{ asset($form->thumbnail) }}" alt="{{ $form->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-slate-100 flex items-center justify-center">
                                    <i class="fa-solid fa-file-signature text-5xl text-slate-300"></i>
                                </div>
                            @endif
                            <!-- Badge -->
                            <div class="absolute top-6 right-6 px-4 py-1.5 bg-brand-primary text-white text-[10px] font-black uppercase tracking-widest rounded-full shadow-lg">
                                Live Application
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="text-xl font-black text-slate-900 mb-4 group-hover:text-brand-primary transition-colors">
                                {{ $form->name }}
                            </h3>
                            <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                                {{ Str::limit(strip_tags($form->description), 120) }}
                            </p>
                            
                            <div class="pt-6 border-t border-slate-50">
                                <a href="{{ route('join.forms.show', $form->slug) }}" 
                                   class="inline-flex items-center gap-2 text-brand-primary font-black text-xs uppercase tracking-widest hover:gap-4 transition-all">
                                    Open Application Portal <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-[3rem] border border-dashed border-slate-300">
                <i class="fa-solid fa-hourglass-start text-5xl text-slate-200 mb-6"></i>
                <h3 class="text-2xl font-black text-slate-400">No active applications found.</h3>
                <p class="text-slate-400 font-bold mt-2">Check back soon for new summits, awards, and membership drives.</p>
            </div>
        @endif
    </div>
</section>
@endsection
