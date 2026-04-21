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

    <!-- Live Google Analytics Data -->
    @if($gaId && config('analytics.property_id'))
        @if($analyticsError)
        <!-- Configuration Issue Block -->
        <div class="bg-red-50 rounded-2xl p-6 border border-red-200 mt-8">
            <h4 class="font-bold text-red-800 flex items-center gap-2"><i class="fa-solid fa-triangle-exclamation"></i> Analytics Connection Failed</h4>
            <p class="text-sm text-red-700 mt-2">{{ explode('(', $analyticsError)[0] }}</p>
            <div class="mt-4 bg-red-100 p-4 rounded-xl text-xs font-mono text-red-900 shadow-inner">
                1. Place your <b>Service Account JSON</b> file anywhere on the server and add its path to your <code>.env</code> file:<br>
                   <span class="text-indigo-700 font-bold ml-4">ANALYTICS_CREDENTIALS_PATH="C:/absolute/path/to/credentials.json"</span><br>
                2. Ensure that the Service Account email has "Viewer" permission on Analytics property <code>{{ config('analytics.property_id') }}</code>.
            </div>
        </div>
        @elseif($analyticsData && $analyticsData->count() > 0)
        <!-- Live Setup Connected (LIGHT THEME & FULL METRICS) -->
        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 mt-8 overflow-hidden relative">
            
            <!-- Dashboard Header -->
            <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between bg-slate-50 relative z-10">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-white flex items-center justify-center shadow-sm border border-slate-200 text-blue-600 text-xl">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-slate-800 flex items-center gap-3">
                            Live Traffic Analytics
                            @if(isset($activeUsersCount))
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold ring-1 ring-emerald-200">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    {{ $activeUsersCount }} Live Users
                                </span>
                            @endif
                        </h3>
                        <p class="text-sm text-slate-500 font-medium">Last 7 Days Reporting (Property: {{ config('analytics.property_id') }})</p>
                    </div>
                </div>
            </div>

            <div class="p-8 relative z-10 space-y-8 bg-white">
                
                <!-- TOP SECTION: Chart & Pages -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Chart -->
                    <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)]">
                        <div class="flex justify-between items-center mb-6 border-b border-slate-100 pb-4">
                            <h4 class="text-sm font-bold text-slate-700 uppercase tracking-widest"><i class="fa-solid fa-chart-area text-blue-500 mr-2"></i> Visitors vs Page Views</h4>
                        </div>
                        <div id="analyticsChart" class="w-full h-[320px]"></div>
                    </div>

                    <!-- Right Column: Top Pages -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] flex flex-col">
                        <div class="flex justify-between items-center mb-6 border-b border-slate-100 pb-4">
                            <h4 class="text-sm font-bold text-slate-700 uppercase tracking-widest"><i class="fa-solid fa-fire text-orange-500 mr-2"></i> Top Landing Pages</h4>
                        </div>
                        @if($topPages && $topPages->count() > 0)
                            <div class="space-y-4 flex-1">
                                @foreach($topPages as $page)
                                    <div class="flex items-center justify-between group">
                                        <a href="//{{ $page['fullPageUrl'] ?? '' }}" target="_blank" class="text-sm font-medium text-slate-600 group-hover:text-blue-600 truncate max-w-[180px] transition-colors" title="{{ $page['pageTitle'] ?? 'Page' }}">
                                            {{ $page['pageTitle'] ?? 'Untitled Page' }}
                                        </a>
                                        <span class="text-xs font-bold text-blue-700 bg-blue-50 px-2.5 py-1 rounded-lg shrink-0 border border-blue-100">{{ $page['screenPageViews'] ?? 0 }} views</span>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-sm text-slate-500 italic py-8 text-center flex-1">Not enough data available yet.</p>
                        @endif
                    </div>
                </div>

                <!-- BOTTOM ROW: Additional Metrics -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Top Countries -->
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-solid fa-earth-americas text-emerald-500 mr-1.5"></i> Geography</h4>
                        @if($topCountries && $topCountries->count() > 0)
                            <div class="space-y-3">
                                @foreach($topCountries as $country)
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-slate-700 truncate pr-2">{{ $country['country'] }}</span>
                                        <span class="text-xs font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">{{ $country['screenPageViews'] ?? 0 }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-xs text-slate-400 italic">No geographic data.</p>
                        @endif
                    </div>

                    <!-- Top Referrers -->
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-solid fa-link text-indigo-500 mr-1.5"></i> Traffic Sources</h4>
                        @if($topReferrers && $topReferrers->count() > 0)
                            <div class="space-y-3">
                                @foreach($topReferrers as $ref)
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-slate-700 truncate pr-2" title="{{ $ref['pageReferrer'] }}">{{ Str::limit($ref['pageReferrer'], 20) }}</span>
                                        <span class="text-xs font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">{{ $ref['screenPageViews'] ?? 0 }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-xs text-slate-400 italic">Direct traffic mostly.</p>
                        @endif
                    </div>

                    <!-- Tech: Browsers -->
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-brands fa-chrome text-rose-500 mr-1.5"></i> System Tech</h4>
                        @if($topBrowsers && $topBrowsers->count() > 0)
                            <div class="space-y-3">
                                @foreach($topBrowsers as $browser)
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-medium text-slate-700 truncate pr-2">{{ $browser['browser'] }}</span>
                                        <span class="text-xs font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">{{ $browser['screenPageViews'] ?? 0 }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-xs text-slate-400 italic">No browser data.</p>
                        @endif
                    </div>

                    <!-- Audience / OS -->
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-solid fa-mobile-screen text-slate-700 mr-1.5"></i> Target Audience</h4>
                        @if($userTypes && $userTypes->count() > 0)
                            <div class="space-y-3 mb-4 border-b border-slate-200 pb-3">
                                @foreach($userTypes as $ut)
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm font-bold text-brand-primary truncate pr-2">{{ $ut['newVsReturning'] }}</span>
                                        <span class="text-xs font-bold text-slate-600 bg-brand-primary/10 px-2 py-0.5 rounded">{{ $ut['activeUsers'] }} users</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        
                        @if($topOS && $topOS->count() > 0)
                            <div class="flex gap-2 flex-wrap">
                                @foreach($topOS as $os)
                                    <span class="text-[10px] font-bold text-slate-500 uppercase bg-white border border-slate-200 px-2 py-1 rounded-md">{{ $os['operatingSystem'] ?? 'Unknown' }} ({{ $os['screenPageViews'] ?? 0 }})</span>
                                @endforeach
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        
        <!-- Add ApexCharts -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            (function() {
                const initChart = () => {
                    const container = document.querySelector("#analyticsChart");
                    if (!container || container.getAttribute('data-chart-initialized')) return;

                    var dates = {!! json_encode($analyticsData->pluck('date')->map->format('M d')) !!};
                    var visitors = {!! json_encode($analyticsData->pluck('activeUsers')) !!};
                    var pageViews = {!! json_encode($analyticsData->pluck('screenPageViews')) !!};

                    var options = {
                        series: [{
                            name: 'Unique Visitors',
                            data: visitors
                        }, {
                            name: 'Page Views',
                            data: pageViews
                        }],
                        chart: {
                            type: 'area',
                            height: 320,
                            toolbar: { show: false },
                            zoom: { enabled: false },
                            background: 'transparent',
                            fontFamily: 'Inter, sans-serif'
                        },
                        colors: ['#0ea5e9', '#10b981'],
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.35,
                                opacityTo: 0.05,
                                stops: [0, 90, 100]
                            }
                        },
                        dataLabels: { enabled: false },
                        stroke: { curve: 'smooth', width: 3 },
                        xaxis: {
                            categories: dates,
                            axisBorder: { show: false },
                            axisTicks: { show: false },
                            labels: { style: { colors: '#64748b', fontWeight: 500 } }
                        },
                        yaxis: {
                            labels: { style: { colors: '#64748b', fontWeight: 500 } }
                        },
                        grid: {
                            borderColor: '#f1f5f9',
                            strokeDashArray: 4,
                            yaxis: { lines: { show: true } }
                        },
                        theme: { mode: 'light' },
                        legend: { position: 'top', horizontalAlign: 'right', fontWeight: 600 }
                    };

                    var chart = new ApexCharts(container, options);
                    chart.render();
                    container.setAttribute('data-chart-initialized', 'true');
                };

                // Initialize on load
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initChart);
                } else {
                    initChart();
                }

                // Handle Turbo navigations
                document.addEventListener('turbo:load', initChart);
                document.addEventListener('turbo:render', initChart);
            })();
        </script>
        @else
        <!-- Connecting... (Data empty) -->
        <div class="bg-white rounded-3xl p-12 shadow-sm border border-slate-200 mt-8 text-center">
            <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-satellite-dish text-4xl text-blue-500 animate-pulse"></i>
            </div>
            <h4 class="text-xl font-black text-slate-800">Connection Established</h4>
            <p class="text-slate-500 mt-2 font-medium">Google Analytics API is linked, but no traffic data was recorded in the last 7 days.</p>
        </div>
        @endif

    @else
    <div class="bg-amber-50 rounded-2xl p-6 border border-amber-200 mt-8 flex items-start gap-4">
        <i class="fa-solid fa-triangle-exclamation text-amber-500 text-xl mt-0.5"></i>
        <div>
            <h4 class="font-bold text-amber-800">Google Analytics Not Connected</h4>
            <p class="text-sm text-amber-700 mt-1">To view live traffic, add <code class="bg-amber-100 px-2 py-0.5 rounded font-mono text-xs">ANALYTICS_PROPERTY_ID=XXXXXXXXXX</code> to your <code class="bg-amber-100 px-2 py-0.5 rounded font-mono text-xs">.env</code> file.</p>
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
