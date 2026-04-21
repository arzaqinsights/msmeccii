@extends('layouts.website')

@section('title', 'My Account Dashboard')

@section('content')

<section class="pt-32 pb-20 bg-slate-50 min-h-screen">
    <div class="container max-w-6xl mx-auto">
        
        <div class="flex items-center justify-between mb-10 pb-6 border-b border-slate-200">
            <div class="flex items-center gap-4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=1e293b&color=fff&size=100" class="w-16 h-16 rounded-2xl shadow-sm border border-slate-200">
                <div>
                    <h1 class="text-3xl font-black text-slate-900">Welcome, {{ explode(' ', auth()->user()->name)[0] }}!</h1>
                    <p class="text-sm font-bold text-slate-500 mt-1">Manage your digital profile and history.</p>
                </div>
            </div>
            
            <a href="{{ route('logout') }}" class="px-4 py-2 bg-white border border-red-200 text-red-500 hover:bg-red-50 font-bold rounded-xl text-sm transition-colors shadow-sm">
                <i class="fa-solid fa-arrow-right-from-bracket mr-1"></i> Sign Out
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            <!-- Sidebar Navigation -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-4 sticky top-32">
                    <nav class="space-y-1">
                        <a href="{{ route('account.dashboard') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('account.dashboard') ? 'bg-brand-primary/10 text-brand-primary' : 'text-slate-600 hover:bg-slate-50' }} rounded-xl font-bold text-sm transition-colors">
                            <i class="fa-solid fa-table-list w-4 text-center"></i> Form Submissions
                        </a>
                        <a href="{{ route('account.profile') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('account.profile') ? 'bg-brand-primary/10 text-brand-primary' : 'text-slate-600 hover:bg-slate-50' }} rounded-xl font-bold text-sm transition-colors">
                            <i class="fa-solid fa-user-pen w-4 text-center"></i> Edit Profile
                        </a>
                        <a href="{{ route('account.security') }}" class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('account.security') ? 'bg-brand-primary/10 text-brand-primary' : 'text-slate-600 hover:bg-slate-50' }} rounded-xl font-bold text-sm transition-colors">
                            <i class="fa-solid fa-shield-halved w-4 text-center"></i> Security Settings
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Content Area -->
            <div class="lg:col-span-3">
                
                <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-file-invoice text-brand-primary"></i> Application & Form History
                </h3>

                @if($submissions->count() > 0)
                    <div class="space-y-4">
                        @foreach($submissions as $sub)
                            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 transition-all hover:shadow-md">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <div class="inline-block px-2.5 py-1 bg-brand-primary/10 text-brand-primary text-[10px] font-black uppercase tracking-widest rounded-lg mb-2">
                                            {{ $sub->form->name ?? 'Deleted Form' }}
                                        </div>
                                        <h4 class="text-lg font-bold text-slate-900">Submission #UID-{{ str_pad($sub->id, 5, '0', STR_PAD_LEFT) }}</h4>
                                        <p class="text-[11px] font-bold text-slate-400 mt-1"><i class="fa-regular fa-clock"></i> {{ $sub->created_at->format('M d, Y h:i A') }}</p>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-2xl font-black text-slate-900">₹{{ number_format($sub->total_amount_paid, 2) }}</div>
                                        @if($sub->total_amount_paid > 0)
                                            <span class="inline-block mt-1 text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded
                                                {{ $sub->payment_status === 'completed' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                                                {{ $sub->payment_status }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Submitted Data Dump -->
                                <div class="bg-slate-50 rounded-xl p-4 border border-slate-100 mt-4 flex flex-col md:flex-row gap-6">
                                    <div class="flex-1">
                                        <h5 class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-3 border-b border-slate-200 pb-2">Payload Details</h5>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-6">
                                            @foreach($sub->data as $key => $value)
                                                <div>
                                                    <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider">Field: {{ substr($key, 0, 8) }}..</span>
                                                    <span class="block text-sm font-semibold text-slate-800 break-words">
                                                        @if(is_string($value) && str_starts_with($value, '/uploads/'))
                                                            <a href="{{ asset($value) }}" target="_blank" class="text-blue-500 hover:underline"><i class="fa-solid fa-download mr-1"></i> View Attachment</a>
                                                        @else
                                                            {{ $value ?: 'Null' }}
                                                        @endif
                                                    </span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                    <div class="md:w-48 flex items-end">
                                        <a href="{{ route('admin.invoice.download', $sub->id) }}" class="w-full bg-slate-900 hover:bg-black text-white text-[10px] font-black uppercase tracking-widest py-3 px-4 rounded-xl shadow-lg flex items-center justify-center gap-2 transition-all">
                                            <i class="fa-solid fa-file-pdf"></i> Official Invoice
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="bg-white rounded-3xl p-12 text-center shadow-sm border border-slate-200">
                        <i class="fa-solid fa-folder-open text-5xl text-slate-200 mb-4 block"></i>
                        <h4 class="text-lg font-black text-slate-900 mb-2">No Submissions Found</h4>
                        <p class="text-slate-500 text-sm font-medium mb-6">You have not submitted any forms, applications, or event registrations yet.</p>
                        <a href="{{ route('join.index') }}" class="inline-block bg-brand-primary text-white font-bold px-6 py-3 rounded-xl shadow-sm hover:bg-brand-primary-dark transition-colors">Browse Available Forms</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
