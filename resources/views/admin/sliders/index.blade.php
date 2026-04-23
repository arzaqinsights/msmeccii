@extends('layouts.admin')

@section('title', 'Home Hero Sliders')

@section('header', 'Home Hero Sliders')

@section('content')
<div class="space-y-6">

    <!-- Upload Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200">
        <div class="p-6 border-b border-slate-200">
            <h3 class="text-lg font-bold text-slate-800"><i class="fa-solid fa-cloud-arrow-up mr-2 text-brand-primary"></i> Add New Slides</h3>
            <p class="text-sm text-slate-500 mt-1">Upload images for the homepage hero slider. Recommended size: 1920x1080px.</p>
        </div>
        
        <div class="p-6">
            <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Select Images (Bulk Allowed)</label>
                        <input type="file" name="images[]" multiple accept="image/*" required
                            class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2.5 file:px-4
                                file:rounded-xl file:border-0
                                file:text-sm file:font-semibold
                                file:bg-brand-primary/10 file:text-brand-primary
                                hover:file:bg-brand-primary/20 cursor-pointer
                                border border-slate-200 rounded-xl bg-slate-50">
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="bg-brand-primary hover:bg-slate-900 text-white font-bold py-2.5 px-6 rounded-xl shadow-sm transition-all">
                        Upload Slides
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Sliders List -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200" x-data="sliderManager()">
        <div class="p-6 border-b border-slate-200 flex justify-between items-center">
            <h3 class="text-lg font-bold text-slate-800"><i class="fa-solid fa-layer-group mr-2 text-brand-primary"></i> Current Slides</h3>
            <button @click="saveOrder" x-show="hasChanges" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-xl text-xs uppercase tracking-widest transition-all">
                Save Order Changes
            </button>
        </div>

        <div class="p-6">
            @if($sliders->count() > 0)
            <div class="space-y-4">
                @foreach($sliders as $slider)
                <div class="flex items-center gap-4 p-4 bg-slate-50 border border-slate-100 rounded-2xl group hover:border-brand-primary/30 transition-all" data-id="{{ $slider->id }}">
                    <div class="flex items-center gap-3">
                        <div class="flex flex-col gap-1">
                            <button @click="moveUp({{ $loop->index }})" class="text-slate-400 hover:text-brand-primary disabled:opacity-20" {{ $loop->first ? 'disabled' : '' }}>
                                <i class="fa-solid fa-chevron-up"></i>
                            </button>
                            <button @click="moveDown({{ $loop->index }})" class="text-slate-400 hover:text-brand-primary disabled:opacity-20" {{ $loop->last ? 'disabled' : '' }}>
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                        </div>
                        <span class="text-xs font-black text-slate-400 w-6 text-center">{{ $loop->iteration }}</span>
                    </div>

                    <div class="w-32 h-20 rounded-xl overflow-hidden border border-slate-200 flex-shrink-0">
                        <img src="{{ asset($slider->image_path) }}" class="w-full h-full object-cover">
                    </div>

                    <div class="flex-1">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">Image:</span>
                            <span class="text-sm font-bold text-slate-700 truncate max-w-xs">{{ basename($slider->image_path) }}</span>
                        </div>
                        <div class="mt-2 flex items-center gap-4">
                            <form action="{{ route('admin.sliders.update', $slider) }}" method="POST" class="flex items-center gap-2">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="order" value="{{ $slider->order }}">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" name="is_active" value="1" {{ $slider->is_active ? 'checked' : '' }} 
                                           onchange="this.form.submit()" class="sr-only peer">
                                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-primary"></div>
                                    <span class="ms-3 text-xs font-bold text-slate-500 uppercase tracking-widest">{{ $slider->is_active ? 'Active' : 'Inactive' }}</span>
                                </label>
                            </form>
                        </div>
                    </div>

                    <div class="flex items-center gap-2">
                        <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this slide?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-400 hover:text-red-600 hover:border-red-100 flex items-center justify-center transition-all">
                                <i class="fa-solid fa-trash-can text-sm"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-12">
                <i class="fa-regular fa-image text-4xl text-slate-300 mb-3 block"></i>
                <p class="text-slate-500 font-medium">No slides found. Upload some images to start.</p>
            </div>
            @endif
        </div>
    </div>

</div>

<script>
    function sliderManager() {
        return {
            items: @json($sliders->pluck('id')->toArray()),
            hasChanges: false,
            moveUp(index) {
                if (index > 0) {
                    let arr = [...this.items];
                    [arr[index], arr[index - 1]] = [arr[index - 1], arr[index]];
                    this.items = arr;
                    this.hasChanges = true;
                    this.refreshUI();
                }
            },
            moveDown(index) {
                if (index < this.items.length - 1) {
                    let arr = [...this.items];
                    [arr[index], arr[index + 1]] = [arr[index + 1], arr[index]];
                    this.items = arr;
                    this.hasChanges = true;
                    this.refreshUI();
                }
            },
            refreshUI() {
                // This is a bit hacky for a simple list but works for a small slider list
                const container = document.querySelector('.space-y-4');
                const elements = Array.from(container.children);
                
                this.items.forEach((id, index) => {
                    const el = elements.find(e => e.dataset.id == id);
                    if (el) container.appendChild(el);
                });
            },
            async saveOrder() {
                try {
                    const response = await fetch('{{ route('admin.sliders.update-order') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ order: this.items })
                    });
                    
                    if (response.ok) {
                        window.location.reload();
                    }
                } catch (error) {
                    alert('Failed to save order');
                }
            }
        }
    }
</script>
@endsection
