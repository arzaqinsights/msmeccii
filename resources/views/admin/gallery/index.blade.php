@extends('layouts.admin')

@section('title', 'Media Gallery')

@section('header', 'Media Gallery')

@section('content')
<div class="space-y-6">

    <!-- Upload Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200" 
         x-data="{
            mode: 'select',
            isUploading: false,
            totalFiles: 0,
            uploadCount: 0,
            currentProgress: 0,
            currentFileName: '',
            errors: [],

            async startUpload(e) {
                const files = Array.from(this.$refs.fileInput.files);
                if (files.length === 0) return;

                const categorySelect = this.$refs.categorySelect.value;
                const categoryNew = this.$refs.categoryNew.value;
                
                const category = this.mode === 'new' ? categoryNew : categorySelect;
                if (!category || category === '__NEW__') {
                    alert('Please select or specify an album category.');
                    return;
                }

                this.totalFiles = files.length;
                this.uploadCount = 0;
                this.isUploading = true;
                this.currentProgress = 0;
                this.errors = [];

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    this.currentFileName = file.name;
                    
                    const formData = new FormData();
                    formData.append('_token', '{{ csrf_token() }}');
                    formData.append('category_select', categorySelect);
                    formData.append('category_new', categoryNew);
                    formData.append('images[]', file);

                    try {
                        const response = await fetch('{{ route('admin.gallery.store') }}', {
                            method: 'POST',
                            body: formData,
                            headers: { 'X-Requested-With': 'XMLHttpRequest' }
                        });

                        if (response.ok) {
                            this.uploadCount++;
                        } else {
                            this.errors.push(file.name);
                        }
                    } catch (err) {
                        this.errors.push(file.name);
                    }
                    
                    this.currentProgress = Math.round(((i + 1) / this.totalFiles) * 100);
                }

                setTimeout(() => {
                    if (this.errors.length === 0) {
                        window.location.reload();
                    } else {
                        // Keep overlay open if errors occurred
                    }
                }, 1000);
            }
         }">
        <div class="p-6 border-b border-slate-200">
            <h3 class="text-lg font-bold text-slate-800"><i class="fa-solid fa-cloud-arrow-up mr-2 text-indigo-500"></i> Upload New Media</h3>
            <p class="text-sm text-slate-500 mt-1">Bulk upload images sequentially. Each image is processed individually for better stability.</p>
        </div>
        
        <div class="p-6 relative">
            <!-- Progress Overlay -->
            <div x-show="isUploading" x-transition.opacity 
                 class="absolute inset-0 z-50 bg-white/95 backdrop-blur-sm flex flex-col items-center justify-center p-8 rounded-2xl">
                <div class="w-full max-w-md">
                    <div class="flex justify-between items-end mb-4">
                        <div>
                            <h4 class="text-xl font-black text-slate-900">Uploading Gallery...</h4>
                            <p class="text-sm font-bold text-slate-500 mt-1" x-text="`Processing: ${currentFileName}`"></p>
                        </div>
                        <div class="text-right">
                            <span class="text-3xl font-black text-indigo-600" x-text="`${currentProgress}%` "></span>
                        </div>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="w-full h-4 bg-slate-100 rounded-full overflow-hidden border border-slate-200 p-0.5">
                        <div class="h-full bg-indigo-600 rounded-full transition-all duration-300 shadow-sm" :style="`width: ${currentProgress}%` "></div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <div class="bg-indigo-50 p-4 rounded-2xl border border-indigo-100">
                            <span class="block text-[10px] font-bold text-indigo-400 uppercase tracking-widest mb-1">Success</span>
                            <span class="text-2xl font-black text-indigo-700" x-text="`${uploadCount} / ${totalFiles}`"></span>
                        </div>
                        <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100">
                            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Pending</span>
                            <span class="text-2xl font-black text-slate-700" x-text="totalFiles - (uploadCount + errors.length)"></span>
                        </div>
                    </div>

                    <div x-show="errors.length > 0" class="mt-6 p-4 bg-red-50 rounded-xl border border-red-100">
                        <p class="text-xs font-bold text-red-600 uppercase tracking-widest mb-2"><i class="fa-solid fa-triangle-exclamation mr-1"></i> Failed Files:</p>
                        <ul class="text-[10px] text-red-500 font-bold max-h-24 overflow-y-auto">
                            <template x-for="err in errors" :key="err">
                                <li x-text="err"></li>
                            </template>
                        </ul>
                        <button @click="window.location.reload()" class="mt-3 text-xs font-black text-red-700 hover:underline">Close & Refresh</button>
                    </div>
                </div>
            </div>

            <form @submit.prevent="startUpload">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Category (Album Name)</label>
                        
                        <!-- Select Mode -->
                        <div x-show="mode === 'select'">
                            <select name="category_select" x-ref="categorySelect" x-on:change="if($event.target.value === '__NEW__') mode = 'new'" required
                                class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 py-2.5 px-4 bg-slate-50">
                                <option value="" disabled selected>-- Choose Existing Category --</option>
                                @foreach($existingCategories as $cat)
                                    <option value="{{ $cat }}">{{ $cat }}</option>
                                @endforeach
                                <option value="__NEW__" class="font-bold text-indigo-600 bg-indigo-50">+ Create New Category</option>
                            </select>
                        </div>

                        <!-- New Mode -->
                        <div x-show="mode === 'new'" style="display: none;">
                            <div class="flex items-center gap-2">
                                <input type="text" name="category_new" x-ref="categoryNew" :required="mode === 'new'"
                                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 py-2.5 px-4 bg-slate-50"
                                    placeholder="Enter new category name...">
                                <button type="button" @click="mode = 'select';" class="px-3 py-2.5 text-slate-500 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors border border-transparent hover:border-red-100 flex-shrink-0">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Select Images (Bulk Allowed)</label>
                        <input type="file" name="images[]" multiple accept="image/*" x-ref="fileInput" required
                            class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2.5 file:px-4
                                file:rounded-xl file:border-0
                                file:text-sm file:font-semibold
                                file:bg-indigo-50 file:text-indigo-700
                                hover:file:bg-indigo-100 cursor-pointer
                                border border-slate-200 rounded-xl bg-slate-50">
                    </div>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2.5 px-6 rounded-xl shadow-sm transition-all focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Upload Images
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Albums Grid -->
    <h3 class="text-xl font-black text-slate-800 pt-4"><i class="fa-solid fa-images mr-2"></i> Photo Albums</h3>
    
    @if($categories->count() > 0)
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($categories as $category)
        <a href="{{ route('admin.gallery.show', base64_encode($category->category)) }}" class="group block relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-slate-200 bg-white">
            <div class="aspect-video w-full relative overflow-hidden bg-slate-100">
                <img src="{{ asset($category->cover) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $category->category }}">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
            </div>
            <div class="absolute bottom-0 left-0 w-full p-4">
                <h4 class="text-white font-bold text-lg truncate">{{ $category->category }}</h4>
                <div class="flex items-center gap-2 text-indigo-200 text-xs font-semibold mt-1">
                    <i class="fa-regular fa-image"></i> {{ $category->image_count }} {{ Str::plural('Image', $category->image_count) }}
                </div>
            </div>
        </a>
        @endforeach
    </div>
    @else
    <div class="bg-white rounded-2xl p-12 text-center border border-slate-200 border-dashed">
        <i class="fa-regular fa-folder-open text-4xl text-slate-300 mb-3 block"></i>
        <p class="text-slate-500 font-medium">No albums available. Upload images to create one.</p>
    </div>
    @endif

</div>
@endsection
