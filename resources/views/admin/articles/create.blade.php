@extends('layouts.admin')

@section('content')
<div class="px-8 py-6 max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-black text-slate-800 tracking-tight">Write Article</h2>
            <p class="text-sm text-slate-500 font-medium">Use the advanced block builder to compose your article with images, headings, lists, and more.</p>
        </div>
        <a href="{{ route('admin.articles.index') }}" class="text-sm font-bold text-slate-500 hover:text-slate-800 transition">
            <i class="fa-solid fa-arrow-left mr-1"></i> Back to list
        </a>
    </div>

    @if($errors->any())
        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-800 rounded-xl">
            <div class="font-bold flex items-center gap-2 mb-2"><i class="fa-solid fa-triangle-exclamation"></i> Check your input:</div>
            <ul class="list-disc pl-5 text-sm space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left: Block Builder -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Title -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Article Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}" required class="w-full bg-slate-50 border-0 text-slate-900 text-xl font-black rounded-xl p-4 focus:ring-2 focus:ring-brand-primary placeholder:font-medium placeholder:text-slate-400" placeholder="Enter an engaging title...">
                </div>

                <!-- Block Builder -->
                @include('admin.articles._builder')
            </div>

            <!-- Right: Settings Panel -->
            <div class="space-y-6">
                <!-- Card: Featured Image -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3"><i class="fa-solid fa-image mr-1"></i> Cover Image</label>
                    <input type="file" name="thumbnail" accept="image/*" class="w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-xl file:border-0
                        file:text-xs file:font-black
                        file:bg-slate-100 file:text-slate-700
                        hover:file:bg-slate-200 cursor-pointer">
                    <p class="text-[10px] text-slate-400 font-medium mt-2">Recommended: 1200x630 pixels. Format: JPG/PNG/WEBP.</p>
                </div>

                <!-- Card: Meta Info -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 space-y-4">
                    <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest border-b border-slate-100 pb-2 mb-4"><i class="fa-solid fa-gear mr-1"></i> Post Details</h3>
                    
                    <div>
                        <label class="block text-[11px] font-bold text-slate-600 mb-1">Categories</label>
                        <div x-data="{
                            open: false,
                            mode: 'select',
                            selected: [],
                            newCat: '',
                            allCategories: {{ $categories->toJson() }},
                            get filtered() {
                                if (!this.newCat) return this.allCategories;
                                return this.allCategories.filter(c => c.toLowerCase().includes(this.newCat.toLowerCase()));
                            },
                            isSelected(cat) { return this.selected.includes(cat); },
                            toggle(cat) { this.isSelected(cat) ? this.selected = this.selected.filter(c => c !== cat) : this.selected.push(cat); },
                            remove(cat) { this.selected = this.selected.filter(c => c !== cat); },
                            createNew() { 
                                let v = this.newCat.trim(); 
                                if (v && !this.selected.includes(v)) { this.selected.push(v); this.newCat = ''; this.mode = 'select'; }
                            }
                        }">
                            <input type="hidden" name="category" :value="selected.join(', ')">

                            <!-- Selected Tags -->
                            <div class="flex flex-wrap gap-1.5 mb-2" x-show="selected.length > 0">
                                <template x-for="cat in selected" :key="cat">
                                    <span class="inline-flex items-center gap-1 bg-brand-primary/10 text-brand-primary text-[11px] font-bold px-2.5 py-1 rounded-lg border border-brand-primary/20">
                                        <span x-text="cat"></span>
                                        <button type="button" @click="remove(cat)" class="hover:text-red-500 transition ml-0.5"><i class="fa-solid fa-xmark text-[9px]"></i></button>
                                    </span>
                                </template>
                            </div>

                            <!-- Trigger -->
                            <div @click="open = !open" class="w-full bg-slate-50 border border-slate-200 text-slate-700 text-sm font-medium rounded-lg p-3 cursor-pointer flex justify-between items-center hover:border-slate-300 transition">
                                <span :class="selected.length ? 'text-slate-800 font-bold' : 'text-slate-400'" x-text="selected.length ? selected.length + ' selected' : 'Select or create categories'"></span>
                                <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 transition-transform" :class="open ? 'rotate-180' : ''"></i>
                            </div>

                            <!-- Dropdown -->
                            <div x-show="open" @click.away="open = false" x-transition class="mt-2 bg-white rounded-xl border border-slate-200 shadow-lg overflow-hidden z-50 relative">
                                <div class="flex border-b border-slate-100">
                                    <button type="button" @click="mode = 'select'" class="flex-1 text-center py-2.5 text-[10px] font-black uppercase tracking-widest transition-colors" :class="mode === 'select' ? 'bg-brand-primary text-white' : 'text-slate-500 hover:bg-slate-50'">
                                        <i class="fa-solid fa-list mr-1"></i> Existing
                                    </button>
                                    <button type="button" @click="mode = 'create'" class="flex-1 text-center py-2.5 text-[10px] font-black uppercase tracking-widest transition-colors" :class="mode === 'create' ? 'bg-brand-primary text-white' : 'text-slate-500 hover:bg-slate-50'">
                                        <i class="fa-solid fa-plus mr-1"></i> New
                                    </button>
                                </div>

                                <div x-show="mode === 'select'" class="max-h-48 overflow-y-auto">
                                    <template x-for="cat in allCategories" :key="cat">
                                        <button type="button" @click="toggle(cat)" class="w-full text-left px-4 py-2.5 text-sm font-medium hover:bg-brand-primary/5 transition-colors flex items-center justify-between" :class="isSelected(cat) ? 'bg-brand-primary/10 text-brand-primary font-bold' : 'text-slate-700'">
                                            <span x-text="cat"></span>
                                            <i x-show="isSelected(cat)" class="fa-solid fa-check text-[10px] text-brand-primary"></i>
                                        </button>
                                    </template>
                                    <div x-show="allCategories.length === 0" class="px-4 py-4 text-xs text-slate-400 text-center italic">No categories yet. Create one!</div>
                                </div>

                                <div x-show="mode === 'create'" class="p-3 space-y-2">
                                    <input type="text" x-model="newCat" @keydown.enter.prevent="createNew()" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-brand-primary" placeholder="Type new category name...">
                                    <div x-show="filtered.length > 0 && newCat" class="text-[10px] text-amber-600 font-bold"><i class="fa-solid fa-triangle-exclamation mr-1"></i> Similar: <span x-text="filtered.join(', ')"></span></div>
                                    <button type="button" @click="createNew()" class="w-full py-2 bg-brand-primary text-white text-xs font-black rounded-lg hover:bg-brand-dark transition">
                                        <i class="fa-solid fa-plus mr-1"></i> Create & Add
                                    </button>
                                </div>

                                <div x-show="selected.length > 0" class="border-t border-slate-100">
                                    <button type="button" @click="selected = []" class="w-full text-center py-2 text-[10px] font-bold text-red-400 hover:bg-red-50 transition">Clear All</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-slate-600 mb-1">Author Name</label>
                        <input type="text" name="author" value="{{ old('author', auth()->user()->name) }}" class="w-full bg-slate-50 border border-slate-200 text-slate-700 text-sm font-medium rounded-lg p-3 focus:ring-2 focus:ring-brand-primary" placeholder="Author name">
                    </div>
                </div>

                <!-- Card: Publish -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                    <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest border-b border-slate-100 pb-2 mb-4"><i class="fa-solid fa-earth-americas mr-1"></i> Publishing</h3>
                    
                    <label class="flex items-center gap-3 cursor-pointer group mb-6 bg-slate-50 p-4 rounded-xl border border-slate-200 hover:border-brand-primary/30 transition">
                        <div class="relative">
                            <input type="checkbox" name="is_published" value="1" checked class="sr-only peer">
                            <div class="w-11 h-6 bg-slate-300 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-500 shadow-inner"></div>
                        </div>
                        <div>
                            <span class="text-sm font-bold text-slate-700 block">Publish Immediately</span>
                            <span class="text-[10px] text-slate-500 font-medium leading-none">Turn off to save as draft.</span>
                        </div>
                    </label>

                    <button type="submit" class="w-full py-4 bg-brand-primary hover:bg-brand-dark text-white text-sm font-black rounded-xl shadow-lg hover:shadow-xl transition-all">
                        <i class="fa-solid fa-paper-plane mr-2"></i> Publish Article
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
