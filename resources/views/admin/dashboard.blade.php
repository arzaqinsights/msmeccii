@extends('layouts.admin')

@section('title', 'System Overview')

@section('content')

    <!-- Live Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Stat: Settings -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-24 h-24 bg-brand-primary/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
            <div class="flex justify-between items-center mb-4 relative z-10">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Site Settings</p>
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center">
                    <i class="fa-solid fa-gear"></i>
                </div>
            </div>
            <h3 class="text-3xl font-black text-slate-900 relative z-10">{{ $stats['settings'] }}</h3>
            <p class="text-xs font-bold text-green-500 mt-2 relative z-10"><i class="fa-solid fa-arrow-trend-up mr-1"></i> Active Keys</p>
        </div>

        <!-- Stat: Forms -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-500/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
            <div class="flex justify-between items-center mb-4 relative z-10">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Nomination Forms</p>
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center">
                    <i class="fa-solid fa-table-list"></i>
                </div>
            </div>
            <h3 class="text-3xl font-black text-slate-900 relative z-10">{{ $stats['forms'] }}</h3>
            <p class="text-xs font-bold text-slate-400 mt-2 relative z-10">Live form endpoints</p>
        </div>

        <!-- Stat: Events -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-24 h-24 bg-purple-500/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
            <div class="flex justify-between items-center mb-4 relative z-10">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Scheduled Events</p>
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-500 flex items-center justify-center">
                    <i class="fa-regular fa-calendar-days"></i>
                </div>
            </div>
            <h3 class="text-3xl font-black text-slate-900 relative z-10">{{ $stats['events'] }}</h3>
            <p class="text-xs font-bold text-slate-400 mt-2 relative z-10">Total published</p>
        </div>

        <!-- Stat: Users -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-24 h-24 bg-orange-500/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
            <div class="flex justify-between items-center mb-4 relative z-10">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Total Users</p>
                <div class="w-10 h-10 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>
            <h3 class="text-3xl font-black text-slate-900 relative z-10">{{ $stats['users'] }}</h3>
            <p class="text-xs font-bold text-slate-400 mt-2 relative z-10">Registered members</p>
        </div>

    </div>

    <!-- Google Analytics Section -->
    @if($gaId)
    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 mt-8 overflow-hidden">
        <div class="px-8 py-5 border-b border-slate-100 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-yellow-400 via-red-500 to-blue-500 flex items-center justify-center">
                    <i class="fa-solid fa-chart-line text-white text-sm"></i>
                </div>
                <div>
                    <h3 class="text-lg font-black text-slate-900">Google Analytics</h3>
                    <p class="text-xs text-slate-500 font-medium">Property: {{ $gaId }}</p>
                </div>
            </div>
            <a href="https://analytics.google.com/analytics/web/#/p{{ $gaId }}/reports/reportinghub"
                target="_blank"
                class="px-5 py-2.5 bg-slate-900 text-white rounded-xl font-bold text-sm hover:bg-slate-800 transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i> Open Full Analytics
            </a>
        </div>

        <div class="p-8">
            <!-- GA4 Real-time & Overview Panels -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <a href="https://analytics.google.com/analytics/web/#/realtime/overview" target="_blank"
                    class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-green-400/40 hover:bg-green-50/30 transition-all group">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></div>
                        <span class="text-sm font-bold text-green-600 uppercase tracking-wider">Real-Time</span>
                    </div>
                    <p class="text-sm text-slate-500 font-medium">View active users currently on your site, live page views, and real-time traffic sources.</p>
                </a>

                <a href="https://analytics.google.com/analytics/web/#/report/visitors-overview" target="_blank"
                    class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-blue-400/40 hover:bg-blue-50/30 transition-all group">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fa-solid fa-users text-blue-500"></i>
                        <span class="text-sm font-bold text-blue-600 uppercase tracking-wider">Audience</span>
                    </div>
                    <p class="text-sm text-slate-500 font-medium">Demographics, geography, devices, new vs returning users performance breakdown.</p>
                </a>

                <a href="https://analytics.google.com/analytics/web/#/report/content-pages" target="_blank"
                    class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-purple-400/40 hover:bg-purple-50/30 transition-all group">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fa-solid fa-file-lines text-purple-500"></i>
                        <span class="text-sm font-bold text-purple-600 uppercase tracking-wider">Pages</span>
                    </div>
                    <p class="text-sm text-slate-500 font-medium">Top landing pages, bounce rate, avg session duration, and content engagement metrics.</p>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <a href="https://analytics.google.com/analytics/web/#/report/trafficsources-overview" target="_blank"
                    class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-amber-400/40 hover:bg-amber-50/30 transition-all group">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fa-solid fa-globe text-amber-500"></i>
                        <span class="text-sm font-bold text-amber-600 uppercase tracking-wider">Traffic Sources</span>
                    </div>
                    <p class="text-sm text-slate-500 font-medium">Organic search, direct, social media, referral traffic and campaign performance.</p>
                </a>

                <a href="https://analytics.google.com/analytics/web/#/report/conversions-goals-overview" target="_blank"
                    class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-rose-400/40 hover:bg-rose-50/30 transition-all group">
                    <div class="flex items-center gap-3 mb-3">
                        <i class="fa-solid fa-bullseye text-rose-500"></i>
                        <span class="text-sm font-bold text-rose-600 uppercase tracking-wider">Conversions</span>
                    </div>
                    <p class="text-sm text-slate-500 font-medium">Goal completions, conversion rates, registration funnels, and event tracking results.</p>
                </a>
            </div>
        </div>
    </div>
    @else
    <div class="bg-amber-50 rounded-2xl p-6 border border-amber-200 mt-8 flex items-start gap-4">
        <i class="fa-solid fa-triangle-exclamation text-amber-500 text-xl mt-0.5"></i>
        <div>
            <h4 class="font-bold text-amber-800">Google Analytics Not Configured</h4>
            <p class="text-sm text-amber-700 mt-1">Add <code class="bg-amber-100 px-2 py-0.5 rounded font-mono text-xs">GA_MEASUREMENT_ID=G-XXXXXXXXXX</code> to your <code class="bg-amber-100 px-2 py-0.5 rounded font-mono text-xs">.env</code> file to enable analytics tracking and view data here.</p>
        </div>
    </div>
    @endif

    <!-- Quick Action Launchpad -->
    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-200 mt-8">
        <h3 class="text-xl font-black text-slate-900 mb-6">Quick Builder Launchpad</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <a href="{{ route('admin.settings.index') }}" class="block p-6 rounded-2xl border-2 border-slate-100 hover:border-brand-primary/30 hover:bg-brand-primary/5 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-slate-900 text-white flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-900 mb-2">Manage Site Settings</h4>
                <p class="text-sm text-slate-500 font-medium leading-relaxed">Configure contact info, social links, and other key-value settings used across the website.</p>
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
