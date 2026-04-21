<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | MSMECCII</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans flex h-screen overflow-hidden" x-data="{ sidebarOpen: false }">

    <!-- Mobile sidebar backdrop -->
    <div x-show="sidebarOpen" class="fixed inset-0 z-40 bg-slate-900/80 backdrop-blur-sm lg:hidden transition-opacity" @click="sidebarOpen = false"></div>

    <!-- Sidebar -->
    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-50 w-72 bg-slate-900 border-r border-slate-800 transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-auto lg:flex flex-col shadow-2xl lg:shadow-none">
        
        <!-- Sidebar Header -->
        <div class="flex items-center justify-between h-20 px-6 bg-slate-950 border-b border-slate-800">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 group">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-brand-primary to-brand-accent flex items-center justify-center shadow-lg group-hover:shadow-brand-primary/50 transition-all">
                    <i class="fa-solid fa-crown text-white text-xs"></i>
                </div>
                <span class="text-xl font-black text-white tracking-wider">CMS<span class="text-brand-primary">PANEL</span></span>
            </a>
            <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white transition-colors">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Sidebar Links -->
        <div class="flex-1 px-4 py-6 overflow-y-auto space-y-1">
            <div class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3 ml-2 mt-4">Core Management</div>
            
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-brand-primary text-white shadow-lg shadow-brand-primary/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <i class="fa-solid fa-gauge-high w-5 text-center"></i>
                <span class="font-bold">Dashboard</span>
            </a>

            <!-- Settings -->
            <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.settings.*') ? 'bg-brand-primary text-white shadow-lg shadow-brand-primary/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <i class="fa-solid fa-gear w-5 text-center"></i>
                <span class="font-bold">Site Settings</span>
            </a>

            <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.events.*') ? 'bg-brand-primary text-white shadow-lg shadow-brand-primary/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <i class="fa-regular fa-calendar-days w-5 text-center"></i>
                <span class="font-bold">Events Manager</span>
            </a>

            <a href="{{ route('admin.gallery.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.gallery.*') ? 'bg-brand-primary text-white shadow-lg shadow-brand-primary/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <i class="fa-solid fa-images w-5 text-center"></i>
                <span class="font-bold">Media Gallery</span>
            </a>

            <a href="{{ route('admin.articles.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.articles.*') ? 'bg-brand-primary text-white shadow-lg shadow-brand-primary/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <i class="fa-solid fa-pen-nib w-5 text-center"></i>
                <span class="font-bold">Articles & Blog</span>
            </a>

            <a href="{{ route('admin.forms.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.forms.*') ? 'bg-brand-primary text-white shadow-lg shadow-brand-primary/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <i class="fa-solid fa-table-list w-5 text-center"></i>
                <span class="font-bold">Forms Builder</span>
            </a>

            <a href="{{ route('admin.invoice-designer.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.invoice-designer.*') ? 'bg-brand-primary text-white shadow-lg shadow-brand-primary/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <i class="fa-solid fa-file-invoice w-5 text-center"></i>
                <span class="font-bold">Invoice Designer</span>
            </a>

            <div class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3 ml-2 mt-6">CRM / Community</div>
            <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.users.*') ? 'bg-brand-primary text-white shadow-lg shadow-brand-primary/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <i class="fa-solid fa-users w-5 text-center"></i>
                <span class="font-bold">Users & Database</span>
            </a>
        </div>

        <!-- Sidebar Footer / Logout -->
        <div class="p-4 border-t border-slate-800 bg-slate-950/50">
            <div class="mb-4 px-4 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-slate-800 border-2 border-slate-700 flex items-center justify-center">
                    <i class="fa-solid fa-user-tie text-slate-300"></i>
                </div>
                <div>
                    <p class="text-sm font-bold text-white leading-none mb-1">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-brand-light font-bold uppercase tracking-wider">Administrator</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-red-500/10 hover:text-red-400 transition-all font-bold">
                    <i class="fa-solid fa-arrow-right-from-bracket w-5 text-center"></i>
                    Sign Out Securely
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden bg-slate-50">
        
        <!-- Top Navbar -->
        <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-10 shrink-0 z-20">
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = true" class="lg:hidden text-slate-500 hover:text-slate-800 transition-colors p-2 -ml-2 rounded-lg bg-slate-100">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
                <div class="hidden sm:block">
                    <h1 class="text-2xl font-black text-slate-900 tracking-tight">@yield('title', 'Dashboard')</h1>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mt-0.5">MSMECCII Control Center</p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="/" target="_blank" class="hidden sm:flex items-center gap-2 px-4 py-2 bg-slate-100 hover:bg-brand-primary/10 text-slate-700 hover:text-brand-primary rounded-xl transition-colors font-bold text-sm border border-slate-200 hover:border-brand-primary/30">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    View Live Site
                </a>
                <div class="h-10 w-10 bg-brand-primary/10 text-brand-primary rounded-full flex items-center justify-center font-black relative cursor-pointer border border-brand-primary/30 shadow-sm">
                    {{ substr(Auth::user()->name, 0, 1) }}
                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></div>
                </div>
            </div>
        </header>

        <!-- Main Scrollable Content -->
        <main class="flex-1 overflow-y-auto w-full">
            <div class="p-6 lg:p-10 max-w-7xl mx-auto space-y-8">
                
                <!-- Feedback Alerts -->
                @if (session('success'))
                    <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-r-xl shadow-sm flex gap-3">
                        <i class="fa-solid fa-circle-check text-green-500 text-xl"></i>
                        <p class="text-green-800 font-bold">{{ session('success') }}</p>
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-r-xl shadow-sm flex gap-3">
                        <i class="fa-solid fa-triangle-exclamation text-red-500 text-xl"></i>
                        <p class="text-red-800 font-bold">{{ session('error') }}</p>
                    </div>
                @endif

                @yield('content')
            </div>
            
            <!-- Admin Footer -->
            <footer class="p-6 text-center text-sm font-bold text-slate-400 mt-auto">
                MSMECCII CMS Architecture &copy; {{ date('Y') }}. Enterprise Grade.
            </footer>
        </main>
    </div>
</body>
</html>
