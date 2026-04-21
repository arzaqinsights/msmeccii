@extends('layouts.website')

@section('title', $category . ' - Gallery')

@section('content')

    <!-- HERO -->
    <section class="relative pt-32 pb-16 bg-slate-900 text-white overflow-hidden">
        <div class="container relative z-10">
            <a href="{{ route('gallery') }}" class="inline-flex items-center gap-2 text-slate-400 hover:text-white font-bold text-sm mb-6 transition-colors">
                <i class="fa-solid fa-arrow-left"></i> Back to Albums
            </a>
            <h1 class="text-4xl md:text-5xl font-black mb-3 text-white leading-tight">
                {{ $category }}
            </h1>
            <p class="text-indigo-400 font-bold uppercase tracking-widest text-sm flex items-center gap-2">
                <i class="fa-regular fa-image"></i> {{ $images->count() }} Photos in Album
            </p>
        </div>
    </section>

    <!-- IMAGES GRID (Masonry Layout) -->
    <section class="py-16 bg-slate-50 min-h-screen">
        <div class="container">
            <div class="columns-2 sm:columns-3 lg:columns-4 gap-4 sm:gap-6 space-y-4 sm:space-y-6">
                @foreach($images as $image)
                    <div class="relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 cursor-pointer bg-slate-200 break-inside-avoid"
                         onclick="openModal('{{ asset($image->image_path) }}')">
                        <img src="{{ asset($image->image_path) }}" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-700 block" alt="Gallery Image">
                        
                        <div class="absolute inset-0 bg-brand-primary/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-sm">
                            <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl drop-shadow-lg scale-0 group-hover:scale-100 transition-transform duration-500 delay-100"></i>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- LIGHTBOX MODAL -->
    <div id="imageModal" class="fixed inset-0 z-50 bg-slate-900/95 backdrop-blur-md hidden items-center justify-center opacity-0 transition-opacity duration-300">
        <button onclick="closeModal()" class="absolute top-6 right-6 text-white/50 hover:text-white transition-colors bg-white/10 hover:bg-white/20 p-3 rounded-full">
            <i class="fa-solid fa-xmark text-2xl"></i>
        </button>
        <img id="modalImage" src="" class="max-w-[90vw] max-h-[90vh] rounded-lg shadow-2xl object-contain scale-95 transition-transform duration-300">
    </div>

    <!-- LIGHTBOX SCRIPT -->
    <script>
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        function openModal(src) {
            modalImage.src = src;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImage.classList.remove('scale-95');
                modalImage.classList.add('scale-100');
            }, 10);
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalImage.classList.remove('scale-100');
            modalImage.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }

        // Close on escape
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape" && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
        
        // Close on background click
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>
@endsection
