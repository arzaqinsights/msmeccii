@php
    // Fetch specifically for popup regardless of date if needed for testing, 
    // but usually we want active/upcoming events.
    // For now, ensuring we have the latest published popup event.
    $popupEvent = $popupEvent ?? \App\Models\Event::where('status', 'published')
        ->where('show_as_popup', true)
        ->latest()
        ->first();
@endphp

@if(isset($popupEvent) && $popupEvent)
    <div id="event-popup-container" class="fixed inset-0 z-9999 items-center justify-center p-4 sm:p-6" style="display: none;">
        <!-- Backdrop -->
        <div id="popup-backdrop" class="absolute inset-0 bg-slate-900/80 backdrop-blur-md transition-opacity duration-500 opacity-0 cursor-pointer"></div>

        <!-- Modal Content -->
        <div id="popup-content" class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row transform transition-all duration-500 scale-95 opacity-0">
            
            <!-- Close Button -->
            <button id="close-popup-btn" class="absolute top-2 right-2 border z-50 w-10 h-10 rounded-full bg-white/50 hover:bg-white text-slate-900 flex items-center justify-center transition-all backdrop-blur-sm">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <!-- Left Side: Image -->
            <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-slate-100">
                @if($popupEvent->image)
                    <img src="{{ asset($popupEvent->image) }}" class="absolute inset-0 w-full h-full object-cover">
                @else
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary to-brand-accent"></div>
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent md:hidden"></div>
                
                @if($popupEvent->design_style === 'featured')
                    <div class="absolute top-2 left-2 bg-brand-primary text-white px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg">
                        <i class="fa-solid fa-star mr-1"></i> Featured Event
                    </div>
                @endif
            </div>

            <!-- Right Side: Content -->
            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center bg-white">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-primary/10 border border-brand-primary/20 mb-6 text-brand-primary text-[10px] font-bold tracking-widest uppercase">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-primary animate-pulse"></span>
                    Announcing
                </div>

                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4 leading-tight tracking-tight">
                    {{ $popupEvent->title }}
                </h2>

                <p class="text-slate-500 font-medium mb-8 line-clamp-3">
                    {{ $popupEvent->description ?: 'Join us for this exclusive event. Network with industry experts and discover new growth opportunities.' }}
                </p>

                <div class="space-y-4 mb-10">
                    <div class="flex items-center gap-4 text-slate-700">
                        <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-brand-primary shadow-sm border border-slate-200/50">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest leading-none mb-1">Date & Time</p>
                            <p class="text-sm font-black">
                                @if($popupEvent->end_date)
                                    {{ $popupEvent->event_date->format('d') }} - {{ $popupEvent->end_date->format('d M, Y') }}
                                @else
                                    {{ $popupEvent->event_date->format('d M, Y') }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('events.show', $popupEvent->slug) }}" class="flex-1 bg-brand-primary hover:bg-brand-primary-light text-white text-center py-4 rounded-2xl font-black shadow-xl shadow-brand-primary/20 transition-all transform hover:-translate-y-1">
                        View Details
                    </a>
                    <button id="later-popup-btn" class="flex-1 hidden bg-slate-100 hover:bg-slate-200 text-slate-900 text-center py-4 rounded-2xl font-black transition-all">
                        Maybe Later
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const popupId = '{{ $popupEvent->id }}';
            const storageKey = 'msmeccii_popup_seen_' + popupId;

            function initPopup() {
                const container = document.getElementById('event-popup-container');
                const backdrop = document.getElementById('popup-backdrop');
                const content = document.getElementById('popup-content');
                const closeBtn = document.getElementById('close-popup-btn');
                const laterBtn = document.getElementById('later-popup-btn');

                if (!container || !content) return;

                // Check if already seen
                if (localStorage.getItem(storageKey)) {
                    console.log('Popup already seen.');
                    return;
                }

                setTimeout(() => {
                    container.style.display = 'flex';
                    
                    // Trigger reflow for animations
                    container.offsetHeight; 

                    backdrop.style.opacity = '1';
                    content.style.opacity = '1';
                    content.style.transform = 'translateY(0) scale(1)';
                }, 1500);

                function closePopup() {
                    backdrop.style.opacity = '0';
                    content.style.opacity = '0';
                    content.style.transform = 'translateY(12px) scale(0.95)';
                    
                    setTimeout(() => {
                        container.style.display = 'none';
                        localStorage.setItem(storageKey, 'true');
                    }, 500);
                }

                closeBtn.onclick = closePopup;
                laterBtn.onclick = closePopup;
                backdrop.onclick = closePopup;
            }

            if (document.readyState === 'complete') {
                initPopup();
            } else {
                window.addEventListener('load', initPopup);
            }
        })();
    </script>
@endif
