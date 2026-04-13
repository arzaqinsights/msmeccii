@extends('layouts.admin')

@section('title', $event->exists ? 'Edit Event' : 'Schedule Event')

@section('content')

<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">{{ $event->exists ? 'Re-Configure Event' : 'Schedule Platform Event' }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Control visual hierarchy and event information.</p>
    </div>
    <a href="{{ route('admin.events.index') }}" class="text-slate-500 hover:text-slate-800 font-bold text-sm bg-white border border-slate-200 px-4 py-2 rounded-xl shadow-sm">
        <i class="fa-solid fa-arrow-left-long mr-1"></i> Back to Events
    </a>
</div>

<form action="{{ $event->exists ? route('admin.events.update', $event) : route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($event->exists) @method('PUT') @endif

    <div class="flex flex-col xl:flex-row gap-6 items-start">
        
        <!-- Main Form Area -->
        <div class="w-full xl:w-3/4 space-y-6">
            
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden p-8 space-y-6">
                <!-- Title & Slug -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Event Title</label>
                        <input type="text" name="title" value="{{ old('title', $event->title) }}" required 
                               class="w-full bg-slate-50 border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20 p-3 rounded-xl outline-none font-bold text-slate-900 transition-all">
                        @error('title')<p class="text-xs text-red-500 mt-1 font-bold">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">URL Slug <span class="text-slate-400 font-medium normal-case">(optional)</span></label>
                        <input type="text" name="slug" value="{{ old('slug', $event->slug) }}" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                    </div>
                </div>

                <!-- Logistics -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-t border-slate-100 pt-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2"><i class="fa-regular fa-clock mr-1"></i> Official Event Date & Time</label>
                        <input type="datetime-local" name="event_date" value="{{ old('event_date', $event->event_date ? $event->event_date->format('Y-m-d\TH:i') : '') }}" required 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                        @error('event_date')<p class="text-xs text-red-500 mt-1 font-bold">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2"><i class="fa-solid fa-location-dot mr-1"></i> Physical/Virtual Location</label>
                        <input type="text" name="location" value="{{ old('location', $event->location) }}" placeholder="e.g. New Delhi Convention Center"
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                    </div>
                </div>

                <!-- Description & Basic Meta Image -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-t border-slate-100 pt-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2"><i class="fa-solid fa-cloud-arrow-up mr-1"></i> Banner Image</label>
                        
                        <div class="flex items-center space-x-4 mb-3">
                            @if($event->image)
                                <img src="{{ asset($event->image) }}" class="h-16 w-16 rounded-lg object-cover border border-slate-200 shadow-sm">
                            @else
                                <div class="h-16 w-16 bg-slate-100 border border-slate-200 rounded-lg flex items-center justify-center text-slate-300">
                                    <i class="fa-regular fa-image text-xl"></i>
                                </div>
                            @endif
                            <input type="file" name="image" class="text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-wider file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100 transition-all cursor-pointer">
                        </div>
                        <input type="text" name="image_url" value="{{ old('image', str_starts_with((string)$event->image, 'http') ? $event->image : '') }}" placeholder="Or paste standard URL here"
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 outline-none focus:border-purple-500 text-xs font-medium text-slate-700">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Event Details</label>
                        <textarea name="description" rows="5" 
                                  class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-medium text-slate-900 resize-none text-sm">{{ old('description', $event->description) }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Enhanced Standard Settings -->
            <div class="bg-indigo-50 border border-indigo-100 rounded-2xl p-8 shadow-sm">
                <h3 class="text-sm font-black text-indigo-900 uppercase tracking-widest mb-6 border-b border-indigo-200 pb-2"><i class="fa-solid fa-wand-magic-sparkles"></i> Engagement Options</h3>
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Timer -->
                    <label class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-slate-200 cursor-pointer hover:border-brand-primary transition-all">
                        <input type="checkbox" name="show_timer" value="1" {{ old('show_timer', $event->show_timer) ? 'checked' : '' }} class="w-5 h-5 text-brand-primary rounded focus:ring-brand-primary">
                        <div>
                            <span class="font-bold text-slate-900 block">Show Live Countdown Timer</span>
                            <span class="text-xs font-medium text-slate-500">Automatically displays a ticking timer targeting the official event date</span>
                        </div>
                    </label>

                    <!-- File Download -->
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                        <span class="font-bold text-slate-900 block mb-2"><i class="fa-solid fa-file-arrow-down text-brand-primary"></i> Attatch Downloadable File (PDF/Video)</span>
                        <span class="text-xs font-medium text-slate-500 block mb-4">Users can download this file directly from the event page.</span>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Upload File</label>
                                @if($event->download_file)
                                    <div class="mb-2 w-full text-xs bg-slate-100 p-2 rounded-lg text-slate-600 truncate border border-slate-200">
                                        Current: {{ basename($event->download_file) }}
                                    </div>
                                @endif
                                <input type="file" name="download_file" class="w-full text-xs bg-slate-50 border border-slate-200 p-2 rounded-lg outline-none">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Download Button Text</label>
                                <input type="text" name="download_btn_text" value="{{ old('download_btn_text', $event->download_btn_text) }}" placeholder="e.g. Download Brochure" class="w-full bg-slate-50 border border-slate-200 text-sm font-bold p-2.5 rounded-lg outline-none focus:border-brand-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Side: Design Parameters & Publishing -->
        <div class="w-full xl:w-1/4 bg-white p-6 rounded-2xl shadow-sm border border-slate-200 sticky top-6">
            <h3 class="text-lg font-black text-slate-900 mb-4 border-b border-slate-100 pb-3">Publishing Engine</h3>
            
            <div class="space-y-6">
                <!-- Design Toggles -->
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-3">Index Display Strategy</label>
                    <div class="space-y-3">
                        <label class="relative flex cursor-pointer p-4 rounded-xl border border-slate-200 hover:border-purple-500 transition-all has-[:checked]:border-purple-500 has-[:checked]:bg-purple-50">
                            <div class="flex items-center h-5">
                                <input type="radio" name="design_style" value="standard" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500" {{ old('design_style', $event->design_style) === 'standard' || !$event->exists ? 'checked' : '' }}>
                            </div>
                            <div class="ml-3 text-sm">
                                <span class="font-bold text-slate-900 block"><i class="fa-regular fa-square"></i> Standard Event</span>
                                <span class="text-slate-500 font-medium text-[10px]">Populates logically into dynamic grid loops natively.</span>
                            </div>
                        </label>
                        
                        <label class="relative flex cursor-pointer p-4 rounded-xl border border-slate-200 hover:border-purple-500 transition-all has-[:checked]:border-purple-500 has-[:checked]:bg-purple-50">
                            <div class="flex items-center h-5">
                                <input type="radio" name="design_style" value="featured" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500" {{ old('design_style', $event->design_style) === 'featured' ? 'checked' : '' }}>
                            </div>
                            <div class="ml-3 text-sm">
                                <span class="font-bold text-purple-700 block"><i class="fa-solid fa-star"></i> Featured Banner</span>
                                <span class="text-slate-500 font-medium text-[10px]">Forces extraction onto Homepage's primary viewport.</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Platform Visibility</label>
                    <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-black text-slate-900 cursor-pointer">
                        <option value="published" {{ old('status', $event->status) === 'published' ? 'selected' : '' }}>Published Publicly</option>
                        <option value="draft" {{ old('status', $event->status) === 'draft' ? 'selected' : '' }}>Hidden Draft Array</option>
                    </select>
                </div>

                <!-- Submit Action -->
                <div class="pt-4 border-t border-slate-100">
                    <button type="submit" class="w-full bg-brand-primary hover:bg-brand-primary-light text-white font-black py-4 rounded-xl transition-all shadow-lg shadow-brand-primary/20 text-center drop-shadow-sm flex justify-center items-center gap-2">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Save Event
                    </button>
                </div>
            </div>
        </div>

    </div>
</form>

@endsection
