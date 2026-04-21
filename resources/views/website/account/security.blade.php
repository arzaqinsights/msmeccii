@extends('layouts.website')

@section('title', 'Security Settings')

@section('content')

<section class="pt-32 pb-20 bg-slate-50 min-h-screen">
    <div class="container max-w-6xl mx-auto">
        
        <div class="flex items-center justify-between mb-10 pb-6 border-b border-slate-200">
            <div class="flex items-center gap-4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=1e293b&color=fff&size=100" class="w-16 h-16 rounded-2xl shadow-sm border border-slate-200">
                <div>
                    <h1 class="text-3xl font-black text-slate-900">Security Settings</h1>
                    <p class="text-sm font-bold text-slate-500 mt-1">Manage your account authentication and password.</p>
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
                
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-black text-slate-900 mb-6 flex items-center gap-2 border-b border-slate-100 pb-4">
                        <i class="fa-solid fa-key text-brand-primary"></i> Change Password
                    </h3>

                    @if(session('success'))
                        <div class="p-4 mb-6 bg-green-50 text-green-700 border border-green-200 rounded-xl font-medium text-sm flex items-center gap-2">
                            <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('account.security.update') }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="max-w-lg space-y-5">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Current Password</label>
                                <input type="password" name="current_password" required class="w-full bg-slate-50 border border-slate-200 px-4 py-3 rounded-xl focus:ring-2 focus:ring-brand-primary focus:border-brand-primary font-medium text-slate-900 transition-all">
                                @error('current_password') <span class="text-xs text-red-500 mt-1 font-bold">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">New Password <span class="text-[9px] lowercase text-slate-400 font-normal ml-1">(Min 8 chars)</span></label>
                                <input type="password" name="password" required minlength="8" class="w-full bg-slate-50 border border-slate-200 px-4 py-3 rounded-xl focus:ring-2 focus:ring-brand-primary focus:border-brand-primary font-medium text-slate-900 transition-all">
                                @error('password') <span class="text-xs text-red-500 mt-1 font-bold">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Confirm New Password</label>
                                <input type="password" name="password_confirmation" required minlength="8" class="w-full bg-slate-50 border border-slate-200 px-4 py-3 rounded-xl focus:ring-2 focus:ring-brand-primary focus:border-brand-primary font-medium text-slate-900 transition-all">
                            </div>
                        </div>

                        <div class="pt-6 border-t border-slate-100">
                            <button type="submit" class="bg-brand-primary hover:bg-brand-primary-dark text-white font-bold px-8 py-3 rounded-xl shadow-md transition-all">
                                Update Password <i class="fa-solid fa-lock ml-1"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
