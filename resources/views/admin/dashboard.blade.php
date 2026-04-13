@extends('layouts.admin')

@section('title', 'System Overview')

@section('content')

    <!-- Welcome Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Stat Card 1 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-24 h-24 bg-brand-primary/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
            <div class="flex justify-between items-center mb-4 relative z-10">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Total Sectors</p>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center">
                    <i class="fa-solid fa-cubes"></i>
                </div>
            </div>
            <h3 class="text-3xl font-black text-slate-900 relative z-10">--</h3>
            <p class="text-xs font-bold text-green-500 mt-2 relative z-10"><i class="fa-solid fa-arrow-trend-up mr-1"></i> Active Configuration</p>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-500/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
            <div class="flex justify-between items-center mb-4 relative z-10">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Nomination Forms</p>
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center">
                    <i class="fa-solid fa-table-list"></i>
                </div>
            </div>
            <h3 class="text-3xl font-black text-slate-900 relative z-10">--</h3>
            <p class="text-xs font-bold text-slate-400 mt-2 relative z-10">Live form endpoints</p>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-24 h-24 bg-purple-500/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
            <div class="flex justify-between items-center mb-4 relative z-10">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Scheduled Events</p>
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-500 flex items-center justify-center">
                    <i class="fa-regular fa-calendar-days"></i>
                </div>
            </div>
            <h3 class="text-3xl font-black text-slate-900 relative z-10">--</h3>
            <p class="text-xs font-bold text-slate-400 mt-2 relative z-10">Upcoming globally</p>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-24 h-24 bg-orange-500/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
            <div class="flex justify-between items-center mb-4 relative z-10">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Total Users</p>
                <div class="w-10 h-10 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>
            <h3 class="text-3xl font-black text-slate-900 relative z-10">--</h3>
            <p class="text-xs font-bold text-slate-400 mt-2 relative z-10">Registered members</p>
        </div>

    </div>

    <!-- Quick Action Launchpad -->
    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 mt-8">
        <h3 class="text-xl font-black text-slate-900 mb-6">Quick Builder Launchpad</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <a href="{{ route('admin.sectors.create') }}" class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-brand-primary/30 hover:bg-brand-primary/5 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-slate-900 text-white flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-hammer"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-900 mb-2">Build New Sector Page</h4>
                <p class="text-sm text-slate-500 font-medium leading-relaxed">Launch the dynamic block builder to create a deep-dive page for a new industry sector.</p>
            </a>

            <a href="{{ route('admin.forms.create') }}" class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-emerald-500/30 hover:bg-emerald-500/5 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-emerald-500 text-white flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-900 mb-2">Create Nomination Form</h4>
                <p class="text-sm text-slate-500 font-medium leading-relaxed">Use the form visualizer to assemble text fields, dropdowns, and file uploaders intuitively.</p>
            </a>

            <a href="{{ route('admin.events.create') }}" class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-purple-500/30 hover:bg-purple-500/5 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-purple-500 text-white flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-900 mb-2">Schedule New Event</h4>
                <p class="text-sm text-slate-500 font-medium leading-relaxed">Broadcast a new standard or featured event out to the global landing page easily.</p>
            </a>

        </div>
    </div>

@endsection
