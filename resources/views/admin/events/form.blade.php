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

<form action="{{ $event->exists ? route('admin.events.update', $event) : route('admin.events.store') }}" method="POST" enctype="multipart/form-data" 
      x-data="eventBuilder()" @submit="prepareSubmit">
    @csrf
    @if($event->exists) @method('PUT') @endif

    <!-- Hidden Output for Builder Content Array -->
    <input type="hidden" name="builder_content" x-model="builderJson">

    <div class="flex flex-col xl:flex-row gap-6 items-start">
        
        <!-- Main Form Area -->
        <div class="w-full xl:w-3/4 space-y-6">
            
            <!-- Standard Database Mapping Parameters -->
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

                <!-- Logistics (For DB Indexing/Sorting) -->
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
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2"><i class="fa-solid fa-cloud-arrow-up mr-1"></i> Thumbnail/Meta Image</label>
                        
                        <div class="flex items-center space-x-4 mb-3">
                            <!-- Preview if exists -->
                            @if($event->image)
                                <img src="{{ asset($event->image) }}" class="h-16 w-16 rounded-lg object-cover border border-slate-200 shadow-sm">
                            @else
                                <div class="h-16 w-16 bg-slate-100 border border-slate-200 rounded-lg flex items-center justify-center text-slate-300">
                                    <i class="fa-regular fa-image text-xl"></i>
                                </div>
                            @endif
                            <input type="file" name="image" class="text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:tracking-wider file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100 transition-all cursor-pointer">
                        </div>
                        <input type="text" name="image_url" value="{{ old('image', $event->image) }}" placeholder="Or paste standard URL here"
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 outline-none focus:border-purple-500 text-xs font-medium text-slate-700">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Short Description / SEO Meta Extract</label>
                        <textarea name="description" rows="3" 
                                  class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-medium text-slate-900 resize-none text-xs">{{ old('description', $event->description) }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Custom Event Page Builder (Vue/Alpine Engine) -->
            <div>
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-black text-slate-900 flex items-center gap-2"><i class="fa-solid fa-layer-group text-brand-primary"></i> Page Builder Layout Engine</h3>
                    
                    <div class="flex items-center gap-2">
                        <button type="button" @click="addBlock('hero_timer')" class="bg-indigo-50 border border-indigo-200 text-indigo-700 hover:bg-indigo-100 px-3 py-1.5 rounded-lg text-xs font-bold transition-all shadow-sm">
                            <i class="fa-solid fa-stopwatch mr-1"></i> Add Timer Section
                        </button>
                        <button type="button" @click="addBlock('split_text_image')" class="bg-emerald-50 border border-emerald-200 text-emerald-700 hover:bg-emerald-100 px-3 py-1.5 rounded-lg text-xs font-bold transition-all shadow-sm">
                            <i class="fa-solid fa-columns mr-1"></i> Add Split Block (Row/Col)
                        </button>
                    </div>
                </div>

                <div class="space-y-6">
                    <template x-for="(block, index) in blocks" :key="block.id">
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden transition-all hover:border-slate-300">
                            
                            <!-- Block Header (Controls) -->
                            <div class="bg-slate-50 border-b border-slate-200 p-4 flex justify-between items-center">
                                <div class="flex items-center gap-3">
                                    <div class="h-8 w-8 rounded-full bg-white border border-slate-200 shadow-sm flex items-center justify-center text-slate-500 font-black text-xs" x-text="index + 1"></div>
                                    <div>
                                        <h4 class="font-bold text-slate-800 text-sm capitalize" x-text="block.type.replace('_', ' ')"></h4>
                                        <p class="text-[10px] text-slate-400 font-medium max-w-sm truncate" x-text="'UUID: ' + block.id"></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <!-- Common Visual Settings -->
                                    <select x-model="block.bg_color" class="bg-white border border-slate-200 text-xs font-bold rounded-lg p-1 outline-none focus:border-brand-primary">
                                        <option value="bg-white">White Background</option>
                                        <option value="bg-slate-50">Light Grey Background</option>
                                        <option value="bg-slate-900">Dark Background</option>
                                        <option value="bg-brand-primary">Brand Primary Color</option>
                                    </select>
                                    <select x-model="block.padding" class="bg-white border border-slate-200 text-xs font-bold rounded-lg p-1 outline-none focus:border-brand-primary">
                                        <option value="py-20">Standard Padding</option>
                                        <option value="py-32">Large Padding</option>
                                        <option value="py-10">Small Padding</option>
                                        <option value="py-0">No Padding</option>
                                    </select>
                                    <button type="button" @click="removeBlock(index)" class="text-red-400 hover:text-red-600 transition-colors bg-white border border-red-100 p-1.5 rounded flex items-center justify-center shadow-sm">
                                        <i class="fa-solid fa-trash-can text-sm"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Block Internals -->
                            <div class="p-6">

                                <!-- HERO TIMER BLOCK -->
                                <template x-if="block.type === 'hero_timer'">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <!-- Content -->
                                        <div class="space-y-4">
                                            <div>
                                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Impact Title</label>
                                                <input type="text" x-model="block.content.title" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary font-bold text-sm">
                                            </div>
                                            <div>
                                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Subtitle</label>
                                                <input type="text" x-model="block.content.subtitle" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary text-sm font-medium">
                                            </div>
                                            <div>
                                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1 text-red-500"><i class="fa-regular fa-clock"></i> Show Live Countdown?</label>
                                                <select x-model="block.content.show_timer" class="w-full bg-red-50 border border-red-200 text-red-700 rounded-lg p-2 outline-none focus:border-red-500 font-bold text-sm">
                                                    <option value="yes">Yes, count down to event date</option>
                                                    <option value="no">No, hide timer</option>
                                                </select>
                                                <p class="mt-1 text-[10px] text-slate-400">Timer naturally leverages the Official Event Date & Time set at the top!</p>
                                            </div>
                                        </div>
                                        <!-- Design/Image -->
                                        <div class="space-y-4 border-l border-slate-100 pl-6">
                                            <div>
                                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Link URL</label>
                                                <input type="text" x-model="block.content.link_url" placeholder="/join" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary font-medium text-xs">
                                            </div>
                                            <div>
                                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Button Text</label>
                                                <input type="text" x-model="block.content.button_text" placeholder="Register Now" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary font-bold text-xs">
                                            </div>
                                            
                                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200">
                                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-2"><i class="fa-solid fa-image"></i> Block Background / Cover Image</label>
                                                
                                                <div class="mb-2" x-show="block.content.image_url">
                                                    <img :src="block.content.image_url" class="h-24 w-full object-cover rounded-lg border border-slate-300 shadow-sm">
                                                </div>
                                                
                                                <div class="flex flex-col gap-2 relative z-50">
                                                    <input :name="'builder_image_' + block.id" type="file" class="text-xs text-slate-500 file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-white file:border file:border-slate-300 file:shadow-sm file:text-slate-700 hover:file:bg-slate-50 transition-all cursor-pointer bg-white p-1 rounded-lg w-full border border-slate-200 z-50">
                                                    <input type="text" x-model="block.content.image_url" placeholder="Or manual URL" class="w-full text-[10px] font-medium text-slate-600 bg-white border border-slate-200 rounded-lg p-1.5 focus:border-brand-primary outline-none">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <!-- SPLIT TEXT IMAGE BLOCK (Row/Col Configs) -->
                                <template x-if="block.type === 'split_text_image'">
                                    <div class="space-y-4">
                                        <!-- Direction Setup -->
                                        <div class="bg-indigo-50 p-4 rounded-xl border border-indigo-100 flex items-center justify-between mb-6">
                                            <div>
                                                <span class="text-xs font-black text-indigo-800 uppercase tracking-wide block"><i class="fa-solid fa-arrows-left-right"></i> Layout Direction</span>
                                                <span class="text-[10px] font-medium text-indigo-600">Dictates how content stacks dynamically on Desktop (Flex Rule)</span>
                                            </div>
                                            <select x-model="block.direction" class="bg-white border border-indigo-200 text-indigo-800 text-xs font-bold rounded-lg p-2 outline-none focus:border-indigo-500 shadow-sm">
                                                <option value="row">Image Left \ Text Right (Row)</option>
                                                <option value="row-reverse">Text Left \ Image Right (Row Reverse)</option>
                                                <option value="col">Stacked Columns (Centered)</option>
                                            </select>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <!-- Subblock: Text -->
                                            <div class="space-y-3 relative z-10">
                                                <div>
                                                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Heading</label>
                                                    <input type="text" x-model="block.content.heading" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary font-black text-sm text-slate-900">
                                                </div>
                                                <div>
                                                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Paragraph Text</label>
                                                    <textarea x-model="block.content.text" rows="5" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary font-medium text-sm text-slate-700 resize-none"></textarea>
                                                </div>
                                                <div class="grid grid-cols-2 gap-4">
                                                    <div>
                                                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Button Text</label>
                                                        <input type="text" x-model="block.content.btn_text" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary font-bold text-xs">
                                                    </div>
                                                    <div>
                                                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Button Link</label>
                                                        <input type="text" x-model="block.content.btn_link" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary font-bold text-xs">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Subblock: Image -->
                                            <div class="space-y-3 relative z-50">
                                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1"><i class="fa-solid fa-image"></i> Local Image Upload</label>
                                                <div class="mb-2" x-show="block.content.image_url">
                                                    <img :src="block.content.image_url" class="h-32 w-full object-contain rounded-lg border border-slate-200 p-2 shadow-sm bg-slate-50">
                                                </div>
                                                <input :name="'builder_image_' + block.id" type="file" class="text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-white file:border file:border-slate-300 file:shadow-xs hover:file:bg-slate-50 transition-all cursor-pointer bg-slate-50 p-1.5 rounded-lg w-full border border-slate-200 relative z-50">
                                                
                                                <label class="block text-[10px] font-bold text-slate-400 normal-case mb-1 mt-3">Or specify dynamic image URL string</label>
                                                <input type="text" x-model="block.content.image_url" placeholder="https://..." class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 outline-none focus:border-brand-primary text-xs font-medium text-slate-500">
                                            </div>
                                        </div>
                                    </div>
                                </template>

                            </div>
                        </div>
                    </template>
                    
                    <template x-if="blocks.length === 0">
                        <div class="text-center bg-slate-50 border-2 border-dashed border-slate-300 rounded-2xl p-12">
                            <i class="fa-regular fa-clone text-4xl text-slate-300 mb-3 block"></i>
                            <h4 class="text-lg font-black text-slate-900 mb-1">Canvas is Empty</h4>
                            <p class="text-sm font-medium text-slate-500">Use the buttons above to inject structural layout rows directly into this Event.</p>
                        </div>
                    </template>
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
                    <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-black py-4 rounded-xl transition-all shadow-lg shadow-purple-500/20 text-center drop-shadow-sm flex justify-center items-center gap-2">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Save Architecture
                    </button>
                    <p class="text-[10px] text-center text-slate-400 font-bold mt-2 uppercase tracking-widest"><i class="fa-solid fa-server text-purple-500 mr-1"></i> Data Push to CDN</p>
                </div>
            </div>
        </div>

    </div>
</form>

<script>
    function eventBuilder() {
        let initialBlocks = @json($event->exists ? $event->builder_content : []);
        if (!initialBlocks || !Array.isArray(initialBlocks)) {
            initialBlocks = [];
        }

        return {
            blocks: initialBlocks,
            builderJson: '',
            
            generateUUID() {
                return 'eb_' + Math.random().toString(36).substr(2, 9);
            },

            addBlock(type) {
                this.blocks.push({
                    id: this.generateUUID(),
                    type: type,
                    bg_color: 'bg-white',
                    padding: 'py-20',
                    direction: 'row', 
                    content: { show_timer: 'yes' }
                });
            },

            removeBlock(index) {
                this.blocks.splice(index, 1);
            },

            prepareSubmit() {
                this.builderJson = JSON.stringify(this.blocks);
            }
        }
    }
</script>

@endsection
