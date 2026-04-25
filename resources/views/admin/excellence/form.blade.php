@extends('layouts.admin')

@section('title', $award->exists ? 'Edit Recognition' : 'Add Recognition')

@section('content')
<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">{{ $award->exists ? 'Edit Recognition' : 'Add New Recognition' }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Capture awards, letters, and dignitary photos.</p>
    </div>
    <a href="{{ route('admin.excellence.index') }}" class="text-slate-500 hover:text-slate-800 font-bold text-sm bg-white border border-slate-200 px-4 py-2 rounded-xl transition-all">
        <i class="fa-solid fa-arrow-left-long mr-1"></i> Back to List
    </a>
</div>

<form action="{{ $award->exists ? route('admin.excellence.update', $award) : route('admin.excellence.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($award->exists) @method('PUT') @endif

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
        
        <!-- Left: Basic Info -->
        <div class="xl:col-span-2 space-y-8">
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200">
                <h3 class="text-lg font-black text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-award text-brand-primary"></i> Recognition Intelligence
                </h3>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Award / Letter Heading</label>
                        <input type="text" name="title" value="{{ old('title', $award->title) }}" required 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none font-bold text-slate-900 transition-all shadow-sm focus:shadow-md">
                        @error('title')<p class="text-xs text-red-500 mt-1 font-bold">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Detailed Description (Optional)</label>
                        <textarea name="description" rows="5" 
                                  class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none font-medium text-slate-900 transition-all shadow-sm focus:shadow-md resize-none">{{ old('description', $award->description) }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-slate-100">
                        <div>
                            <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Dignitary Name</label>
                            <input type="text" name="giver_name" value="{{ old('giver_name', $award->giver_name) }}" required 
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none font-bold text-slate-900 transition-all shadow-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Dignitary Designation</label>
                            <input type="text" name="giver_designation" value="{{ old('giver_designation', $award->giver_designation) }}" 
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none font-bold text-slate-900 transition-all shadow-sm">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200">
                <h3 class="text-lg font-black text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-images text-emerald-500"></i> Visual Assets
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Award/Letter Image <span class="text-red-500">*</span></label>
                        @if($award->award_image)
                        <div class="mb-4 rounded-2xl overflow-hidden border border-slate-200 shadow-sm relative group">
                            <img src="{{ asset($award->award_image) }}" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white text-xs font-black uppercase tracking-widest">Active Image</span>
                            </div>
                        </div>
                        @endif
                        <input type="file" name="award_image" accept="image/*" {{ !$award->exists ? 'required' : '' }}
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-black file:bg-brand-primary file:text-white hover:file:bg-brand-primary-dark cursor-pointer">
                        <p class="text-[10px] font-bold text-slate-400 mt-2 uppercase tracking-widest italic">Recommended: 800x1000px (Portrait/A4 style)</p>
                    </div>

                    <div>
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Dignitary Photo</label>
                        @if($award->giver_image)
                        <div class="mb-4 rounded-full overflow-hidden border-4 border-white shadow-lg relative group w-48 h-48 mx-auto">
                            <img src="{{ asset($award->giver_image) }}" class="w-full h-full object-cover">
                        </div>
                        @endif
                        <input type="file" name="giver_image" accept="image/*"
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-black file:bg-brand-primary file:text-white hover:file:bg-brand-primary-dark cursor-pointer">
                        <p class="text-[10px] font-bold text-slate-400 mt-2 uppercase tracking-widest italic text-center">Recommended: Square 500x500px</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Status & Order -->
        <div class="space-y-8">
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 sticky top-10">
                <h3 class="text-lg font-black text-slate-900 mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-sliders text-blue-500"></i> Publishing
                </h3>

                <div class="space-y-6">
                    <div>
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Display Order</label>
                        <input type="number" name="order" value="{{ old('order', $award->order ?? 0) }}" required 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none font-black text-slate-900">
                        <p class="text-[10px] font-bold text-slate-400 mt-1 uppercase">Lower numbers appear first.</p>
                    </div>

                    <div>
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Status</label>
                        <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 focus:border-brand-primary outline-none font-bold text-slate-900 cursor-pointer">
                            <option value="published" {{ old('status', $award->status) === 'published' ? 'selected' : '' }}>Published (Live)</option>
                            <option value="draft" {{ old('status', $award->status) === 'draft' ? 'selected' : '' }}>Draft (Private)</option>
                        </select>
                    </div>

                    <div class="p-4 bg-emerald-50 rounded-2xl border border-emerald-100 flex items-center gap-4">
                        <div class="relative inline-block w-12 h-6 transition duration-200 ease-in-out bg-slate-200 rounded-full cursor-pointer">
                            <input type="checkbox" name="show_on_home" value="1" {{ old('show_on_home', $award->show_on_home) ? 'checked' : '' }} 
                                   class="absolute z-10 w-6 h-6 opacity-0 cursor-pointer peer">
                            <div class="absolute top-0 left-0 w-6 h-6 transition duration-200 ease-in-out bg-white border-2 border-slate-200 rounded-full peer-checked:translate-x-6 peer-checked:border-emerald-500"></div>
                            <div class="absolute top-0 left-0 w-full h-full transition duration-200 ease-in-out rounded-full peer-checked:bg-emerald-500"></div>
                        </div>
                        <div>
                            <p class="text-sm font-black text-emerald-900 uppercase tracking-tight">Show on Home</p>
                            <p class="text-[10px] font-bold text-emerald-600/70 uppercase tracking-widest italic">Featured spotlight</p>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-brand-primary hover:bg-brand-primary-dark text-white font-black py-4 rounded-2xl transition-all shadow-xl shadow-brand-primary/20 text-lg">
                        <i class="fa-solid fa-cloud-arrow-up mr-2"></i> Save Recognition
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
