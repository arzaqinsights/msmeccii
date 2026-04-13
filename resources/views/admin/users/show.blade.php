@extends('layouts.admin')

@section('title', 'User Profile: ' . $user->name)

@section('content')

<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900 border-b-2 border-brand-primary inline-block pb-1">{{ $user->name }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-2">Extended Database Profiling and History.</p>
    </div>
    <a href="{{ route('admin.users.index') }}" class="text-slate-500 hover:text-slate-800 font-bold text-sm bg-white border border-slate-200 px-4 py-2 rounded-xl shadow-sm">
        <i class="fa-solid fa-arrow-left-long mr-1"></i> Back to Users
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- Profile Overview Sidebar -->
    <div class="w-full lg:col-span-1 space-y-6">
        
        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden text-center">
            
            <div class="bg-slate-900 h-24 w-full relative">
                <div class="absolute inset-0 bg-linear-to-b from-transparent to-slate-900/40"></div>
            </div>
            
            <div class="px-6 pb-8 -mt-12 relative z-10 flex flex-col items-center">
                <div class="w-24 h-24 rounded-2xl {{ $user->role === 'admin' ? 'bg-purple-100 text-purple-700 border-purple-200' : 'bg-white text-brand-primary border-brand-primary/20' }} flex items-center justify-center text-4xl font-black shadow-xl border-4 border-white mx-auto mb-4 relative">
                    {{ substr($user->name, 0, 1) }}
                    @if($user->role === 'admin')
                        <div class="absolute -top-2 -right-2 text-sm text-white bg-purple-600 rounded-full w-6 h-6 flex items-center justify-center shadow-lg"><i class="fa-solid fa-crown"></i></div>
                    @endif
                </div>
                
                <h3 class="text-2xl font-black text-slate-900">{{ $user->name }}</h3>
                <span class="inline-block mt-2 px-3 py-1 rounded-md {{ $user->role === 'admin' ? 'bg-purple-50 text-purple-700 border border-purple-200' : 'bg-slate-100 text-slate-600 border border-slate-200' }} text-[10px] font-black uppercase tracking-widest">
                    Role: {{ $user->role }}
                </span>
            </div>

            <div class="border-t border-slate-100 px-6 py-6 text-left space-y-4">
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Company</p>
                    <p class="font-bold text-slate-800"><i class="fa-regular fa-building text-brand-primary/50 mr-1"></i> {{ $user->company_name ?: 'Not Provided' }}</p>
                    @if($user->designation)
                        <p class="text-xs font-medium text-slate-500 ml-5">{{ $user->designation }}</p>
                    @endif
                </div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Communications</p>
                    <p class="font-bold text-slate-800 text-sm"><i class="fa-regular fa-envelope text-brand-primary/50 w-4"></i> <a href="mailto:{{ $user->email }}" class="hover:text-brand-primary">{{ $user->email }}</a></p>
                    <p class="font-bold text-slate-800 text-sm mt-2"><i class="fa-solid fa-phone text-brand-primary/50 w-4"></i> <a href="tel:{{ $user->phone_number }}" class="hover:text-brand-primary">{{ $user->phone_number ?: 'No Phone Number' }}</a></p>
                </div>
                
                <div class="pt-4 border-t border-slate-100">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Sector Profile</p>
                    <p class="font-bold text-slate-800 text-sm">{{ str_replace('_', ' ', ucwords($user->industry_sector ?: 'General Professional')) }}</p>
                </div>
            </div>
            
            <div class="bg-slate-50 p-4 border-t border-slate-200 text-xs font-bold text-slate-400">
                Registered Profile: {{ $user->created_at->format('M d, Y - h:i A') }}
            </div>
        </div>

    </div>

    <!-- Application/Submissions History -->
    <div class="w-full lg:col-span-2">
        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-6 lg:p-8 border-b border-slate-200 flex justify-between items-center bg-slate-50/50">
                <div>
                    <h3 class="text-lg font-black text-slate-900 border-l-4 border-brand-primary pl-3">Form Submissions & Applications</h3>
                    <p class="text-xs font-bold text-slate-500 mt-1 pl-4">Review all the data {{ explode(' ', trim($user->name))[0] }} has provided via Public Forms.</p>
                </div>
                <div class="bg-brand-primary/10 text-brand-primary font-black px-4 py-2 rounded-xl border border-brand-primary/20">
                    {{ $user->submissions->count() }} Files
                </div>
            </div>

            <div class="p-6 lg:p-8 w-full max-w-full">
                @if($user->submissions->isEmpty())
                    <div class="text-center py-16 px-4">
                        <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-file-circle-xmark text-3xl text-slate-300"></i>
                        </div>
                        <h4 class="text-lg font-black text-slate-900 mb-1">No Active Submissions</h4>
                        <p class="text-sm text-slate-500 max-w-sm mx-auto font-medium mb-6">This user currently has not applied to any events, awards, or custom forms inside the platform structure.</p>
                    </div>
                @else
                    
                    <div class="space-y-6" x-data="{ openPanel: null }">
                        @foreach($user->submissions as $submission)
                            <div class="border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 bg-white" :class="openPanel === {{ $submission->id }} ? 'ring-2 ring-brand-primary/30 shadow-md' : 'shadow-sm'">
                                
                                <!-- Accordion Header -->
                                <button @click="openPanel = openPanel === {{ $submission->id }} ? null : {{ $submission->id }}" class="w-full text-left p-5 flex items-center justify-between hover:bg-slate-50 transition-colors">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-indigo-50 border border-indigo-100 text-indigo-500 rounded-xl flex items-center justify-center shrink-0">
                                            <i class="fa-solid fa-file-invoice-dollar text-xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-black text-slate-900 text-base pr-4">{{ $submission->form->title ?? 'Unknown Form' }}</h4>
                                            <div class="flex items-center gap-3 mt-1.5 flex-wrap">
                                                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider bg-slate-100 px-2 py-0.5 rounded border border-slate-200"><i class="fa-regular fa-clock text-slate-400"></i> {{ $submission->created_at->diffForHumans() }}</span>
                                                
                                                @if($submission->awardCategory)
                                                    <span class="text-[10px] font-bold text-amber-700 uppercase tracking-wider bg-amber-50 px-2 py-0.5 rounded border border-amber-200"><i class="fa-solid fa-trophy mr-1"></i> Cat: {{ $submission->awardCategory->name }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-slate-400 shrink-0 transform transition-transform duration-300" :class="openPanel === {{ $submission->id }} ? 'rotate-180' : ''">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </button>
                                
                                <!-- Accordion Body -->
                                <div x-show="openPanel === {{ $submission->id }}" x-collapse class="border-t border-slate-100 bg-slate-50/50">
                                    <div class="p-6 lg:p-8 max-w-full">
                                        
                                        <h5 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6 border-b border-slate-200 pb-2">Provided Entry Dictionary</h5>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                                            <!-- Iterate over the JSON Key Value Payload Data -->
                                            @foreach($submission->data as $question => $answer)
                                                <!-- Full width layout logic if it spans a lot or looks like a paragraph -->
                                                <div class="group {{ Str::length($answer) > 80 ? 'md:col-span-2' : '' }}">
                                                    <dt class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1 flex items-start gap-2">
                                                        <i class="fa-solid fa-diamond text-[6px] text-brand-primary/40 mt-1"></i>
                                                        <span class="break-words w-full">{{ ucwords(str_replace(['_', '-'], ' ', $question)) }}</span>
                                                    </dt>
                                                    <dd class="text-sm font-bold text-slate-900 bg-white p-3 rounded-lg border border-slate-200 shadow-[inset_0_1px_2px_rgba(0,0,0,0.02)] break-words break-all">
                                                        @if(is_array($answer))
                                                            <ul class="list-disc pl-4 space-y-1">
                                                                @foreach($answer as $item)
                                                                    <li>{{ $item }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @elseif(filter_var($answer, FILTER_VALIDATE_URL))
                                                            <a href="{{ $answer }}" target="_blank" class="text-brand-primary hover:underline font-black flex items-center gap-1 w-full truncate">
                                                                <i class="fa-solid fa-link text-xs"></i> View Attached Reference Link
                                                            </a>
                                                        @else
                                                            {{ $answer ?: '—' }}
                                                        @endif
                                                    </dd>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                    <div class="bg-slate-100 px-6 py-3 text-right border-t border-slate-200">
                                        <span class="text-[10px] uppercase font-black text-slate-400 tracking-widest">
                                            Direct Engine Ref: SUB-{{ str_pad($submission->id, 5, '0', STR_PAD_LEFT) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                @endif
            </div>
        </div>
    </div>
</div>

@endsection
