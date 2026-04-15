<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Secure Portal') | MSMECCII</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased text-slate-800 overflow-x-hidden">
    <!-- Full Screen Background Image -->
    <div class="relative min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-slate-900">
        
        <!-- The Background Image -->
        <img src="{{ asset('images/auth') }}/@yield('auth_image', 'login_bg.png')" alt="Auth Background" class="absolute inset-0 w-full h-full object-cover">
        
        <!-- Elegant Overlay for Readability -->
        <div class="absolute inset-0 bg-slate-900/60 sm:bg-slate-900/50 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-tr from-brand-primary/30 to-transparent mix-blend-overlay"></div>

        <!-- Glassmorphism Central Card -->
        <div class="relative z-10 w-full max-w-xl">

            <!-- The Frosted Card -->
            <div class="bg-brand-light border shadow-2xl rounded-sm overflow-hidden animate-on-scroll delay-100 relative">
                <!-- Inner top highlight line -->
                <div class="px-6 py-10 sm:p-12">
                    
                    <!-- Session Feedback -->
                    @if (session('status'))
                        <div class="bg-green-50/90 backdrop-blur-sm border-l-4 border-green-500 p-4 mb-8 rounded-r-xl shadow-sm">
                            <p class="text-sm text-green-800 font-bold">{{ session('status') }}</p>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="bg-green-50/90 backdrop-blur-sm border-l-4 border-green-500 p-4 mb-8 rounded-r-xl shadow-sm">
                            <p class="text-sm text-green-800 font-bold">{{ session('success') }}</p>
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="bg-blue-50/90 backdrop-blur-sm border-l-4 border-brand-primary p-4 mb-8 rounded-r-xl shadow-sm">
                            <p class="text-sm text-brand-primary-dark font-bold">{{ session('message') }}</p>
                        </div>
                    @endif

                    <!-- Content Injected Here -->
                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
