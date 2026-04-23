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
                            let errorMsg = `Error ${response.status}`;
                            try {
                                const data = await response.json();
                                if (data.message) errorMsg += `: ${data.message}`;
                                else if (data.error) errorMsg += `: ${data.error}`;
                            } catch(e) {}
                            
                            this.errors.push({ name: file.name, msg: errorMsg });
                        }
                    } catch (err) {
                        this.errors.push({ name: file.name, msg: 'Network Error / Timeout' });
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
                        <ul class="text-[10px] text-red-500 font-bold max-h-32 overflow-y-auto space-y-1">
                            <template x-for="err in errors" :key="err.name">
                                <li class="border-b border-red-100 pb-1">
                                    <span x-text="err.name" class="block text-red-700"></span>
                                    <span x-text="err.msg" class="block font-normal opacity-75"></span>
                                </li>
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

    <!-- Albums Grid Header -->
    <div class="flex items-center justify-between pt-4" x-data="{ showOrderModal: false }">
        <h3 class="text-xl font-black text-slate-800"><i class="fa-solid fa-images mr-2"></i> Photo Albums</h3>
        
        <button @click="showOrderModal = true" class="bg-white border border-slate-200 text-slate-600 hover:text-indigo-600 px-4 py-2 rounded-xl font-bold text-xs uppercase tracking-widest shadow-sm transition-all flex items-center gap-2">
            <i class="fa-solid fa-sort"></i> Reorder Albums
        </button>

        <!-- Reorder Modal -->
        <div x-show="showOrderModal" x-transition.opacity class="fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4">
            <div @click.away="showOrderModal = false" class="bg-white rounded-3xl shadow-2xl w-full max-w-lg overflow-hidden" x-data="galleryOrdering()">
                <div class="px-6 py-4 border-b border-slate-100 bg-slate-50 flex items-center justify-between">
                    <h4 class="text-lg font-black text-slate-900 uppercase tracking-widest">Set Album Order</h4>
                    <button @click="showOrderModal = false" class="text-slate-400 hover:text-slate-900 transition-colors"><i class="fa-solid fa-xmark text-xl"></i></button>
                </div>
                <div class="p-6">
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-6">Use arrows to prioritize categories on the website</p>
                    
                    <form action="{{ route('admin.gallery.save-order') }}" method="POST">
                        @csrf
                        <input type="hidden" name="category_order" :value="JSON.stringify(items)">
                        
                        <div class="space-y-2 max-h-[50vh] overflow-y-auto pr-2 custom-scrollbar">
                            <template x-for="(cat, index) in items" :key="cat">
                                <div class="flex items-center justify-between p-3 bg-slate-50 border border-slate-100 rounded-xl group hover:border-indigo-500/30 transition-all">
                                    <div class="flex items-center gap-4">
                                        <span class="w-8 h-8 rounded-lg bg-white border border-slate-100 flex items-center justify-center text-[10px] font-black text-slate-400 group-hover:text-indigo-600 group-hover:border-indigo-100" x-text="index + 1"></span>
                                        <span class="text-sm font-bold text-slate-700" x-text="cat"></span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <button type="button" @click="moveUp(index)" :disabled="index === 0" class="w-8 h-8 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-indigo-600 disabled:opacity-30">
                                            <i class="fa-solid fa-arrow-up text-xs"></i>
                                        </button>
                                        <button type="button" @click="moveDown(index)" :disabled="index === items.length - 1" class="w-8 h-8 rounded-lg bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:text-indigo-600 disabled:opacity-30">
                                            <i class="fa-solid fa-arrow-down text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div class="mt-8 flex gap-3">
                            <button type="submit" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-black py-4 rounded-2xl uppercase tracking-widest text-xs transition-all shadow-lg shadow-indigo-200">Save New Order</button>
                            <button type="button" @click="showOrderModal = false" class="px-8 bg-slate-100 hover:bg-slate-200 text-slate-600 font-black py-4 rounded-2xl uppercase tracking-widest text-xs transition-all">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function galleryOrdering() {
            return {
                items: @json($categories->pluck('category')->toArray()),
                moveUp(index) {
                    if (index > 0) {
                        let temp = this.items[index];
                        this.items[index] = this.items[index - 1];
                        this.items[index - 1] = temp;
                        this.items = [...this.items];
                    }
                },
                moveDown(index) {
                    if (index < this.items.length - 1) {
                        let temp = this.items[index];
                        this.items[index] = this.items[index + 1];
                        this.items[index + 1] = temp;
                        this.items = [...this.items];
                    }
                }
            }
        }
    </script>
    
    @if($categories->count() > 0)
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($categories as $category)
        <div x-data="{ editing: false, newName: '{{ $category->category }}' }" class="group block relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-slate-200 bg-white">
            <a href="{{ route('admin.gallery.show', base64_encode($category->category)) }}">
                <div class="aspect-video w-full relative overflow-hidden bg-slate-100">
                    <img src="{{ asset($category->cover) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $category->category }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                </div>
            </a>

            <!-- Rename Overlay (Only visible when editing) -->
            <div x-show="editing" x-transition.opacity class="absolute inset-0 z-20 bg-slate-900/95 backdrop-blur-sm flex flex-col items-center justify-center p-4">
                <form action="{{ route('admin.gallery.update-category') }}" method="POST" class="w-full">
                    @csrf
                    <input type="hidden" name="old_category" value="{{ $category->category }}">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2 text-center">New Album Name</label>
                    <input type="text" name="new_category" x-model="newName" required
                           class="w-full bg-white/10 border border-white/20 rounded-xl p-2 text-white font-bold text-sm outline-none focus:border-indigo-500 text-center mb-3">
                    <div class="flex gap-2">
                        <button type="submit" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-[10px] font-black py-2 rounded-lg uppercase tracking-widest transition-all">Save Changes</button>
                        <button type="button" @click="editing = false" class="flex-1 bg-white/10 hover:bg-white/20 text-white text-[10px] font-black py-2 rounded-lg uppercase tracking-widest transition-all">Cancel</button>
                    </div>
                </form>
            </div>

            <!-- Category Info -->
            <div class="absolute bottom-0 left-0 w-full p-4 pointer-events-none">
                <div class="flex justify-between items-end">
                    <div class="flex-1 min-w-0">
                        <h4 class="text-white font-bold text-lg truncate drop-shadow-md">{{ $category->category }}</h4>
                        <div class="flex items-center gap-2 text-indigo-200 text-xs font-semibold mt-1">
                            <i class="fa-regular fa-image"></i> {{ $category->image_count }} {{ Str::plural('Image', $category->image_count) }}
                        </div>
                    </div>
                    <button @click="editing = true" class="pointer-events-auto ml-2 bg-white/10 hover:bg-white/20 text-white w-8 h-8 rounded-lg flex items-center justify-center backdrop-blur-sm transition-all" title="Rename Album">
                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                    </button>
                </div>
            </div>
        </div>
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
