@props(['name', 'title' => ''])

<div
    x-data="{ show: false }"
    x-show="show"
    x-on:open-modal.window="if ($event.detail === '{{ $name }}') show = true"
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false"
    style="display: none"
    class="fixed inset-0 z-[999] overflow-y-auto"
>
    <!-- Background Overlay -->
    <div 
        x-show="show" 
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-slate-900/70 backdrop-blur-[2px]" 
        x-on:click="show = false"
    ></div>

    <!-- Modal Content Wrapper for Centering -->
    <div class="relative min-h-screen flex items-center justify-center p-4">
        <div 
            x-show="show" 
            x-on:click.stop
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="w-full max-w-lg bg-white rounded-3xl overflow-hidden shadow-2xl transform transition-all relative z-10"
        >
            <div class="px-6 py-4 bg-slate-50 border-b border-slate-100 flex items-center justify-between">
                <h3 class="text-lg font-black text-slate-900">{{ $title }}</h3>
                <button x-on:click="show = false" class="text-slate-400 hover:text-slate-600 transition-colors">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="p-0">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
