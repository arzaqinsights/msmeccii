@extends('layouts.admin')

@section('title', 'Media Gallery')

@section('header', 'Media Gallery')

@section('content')
<div class="space-y-6">

    <!-- Upload Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200">
        <div class="p-6 border-b border-slate-200">
            <h3 class="text-lg font-bold text-slate-800"><i class="fa-solid fa-cloud-arrow-up mr-2 text-indigo-500"></i> Upload New Media</h3>
            <p class="text-sm text-slate-500 mt-1">Bulk upload images. Select an existing category or type a new one.</p>
        </div>
        
        <div class="p-6">
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div x-data="{ mode: 'select' }">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Category (Album Name)</label>
                        
                        <!-- Select Mode -->
                        <div x-show="mode === 'select'">
                            <select name="category_select" x-on:change="if($event.target.value === '__NEW__') mode = 'new'" required
                                class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 py-2.5 px-4 bg-slate-50">
                                <option value="" disabled selected>-- Choose Existing Category --</option>
                                @foreach($existingCategories as $cat)
                                    <option value="{{ $cat }}">{{ $cat }}</option>
                                @endforeach
                                <option value="__NEW__" class="font-bold text-indigo-600 bg-indigo-50">+ Create New Category</option>
                            </select>
                            <p class="mt-1 text-xs text-slate-500">Pick an existing album or select 'Create New' at the bottom.</p>
                        </div>

                        <!-- New Mode -->
                        <div x-show="mode === 'new'" style="display: none;">
                            <div class="flex items-center gap-2">
                                <input type="text" name="category_new" :required="mode === 'new'"
                                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 py-2.5 px-4 bg-slate-50"
                                    placeholder="Enter new category name...">
                                <button type="button" @click="mode = 'select'; $el.previousElementSibling.value = ''; document.querySelector('[name=category_select]').value='';" class="px-3 py-2.5 text-slate-500 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors border border-transparent hover:border-red-100 flex-shrink-0" title="Cancel New">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <p class="mt-1 text-xs text-slate-500">Type exactly. Don't worry, spaces at the end are automatically removed.</p>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Select Images (Bulk Allowed)</label>
                        <input type="file" name="images[]" multiple accept="image/*" required
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
