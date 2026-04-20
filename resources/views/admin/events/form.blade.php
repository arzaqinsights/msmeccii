@extends('layouts.admin')

@section('title', $event->exists ? 'Edit Event' : 'Schedule Event')

@section('content')

<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">{{ $event->exists ? 'Update Event: ' . $event->title : 'Schedule Platform Event' }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Control visual hierarchy and event information.</p>
    </div>
    <a href="{{ route('admin.events.index') }}" class="text-slate-500 hover:text-slate-800 font-bold text-sm bg-white border border-slate-200 px-4 py-2 rounded-xl shadow-sm">
        <i class="fa-solid fa-arrow-left-long mr-1"></i> Back to Events
    </a>
</div>

<form action="{{ $event->exists ? route('admin.events.update', $event) : route('admin.events.store') }}" method="POST" enctype="multipart/form-data" x-data="eventBuilder()">
    @csrf
    @if($event->exists) @method('PUT') @endif

    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-xl">
            <div class="flex items-center mb-2">
                <i class="fa-solid fa-triangle-exclamation text-red-500 mr-2"></i>
                <h4 class="text-red-800 font-black text-sm uppercase tracking-widest">Configuration Errors</h4>
            </div>
            <ul class="list-disc list-inside text-xs text-red-600 font-bold space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="flex flex-col xl:flex-row gap-6 items-start">
        
        <!-- Main Form Area -->
        <div class="w-full xl:w-3/4 space-y-6">
            
            <!-- Basics Section -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden p-8 space-y-6">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest border-b border-slate-50 pb-3">1. Basic Logistics</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Event Title</label>
                        <input type="text" name="title" value="{{ old('title', $event->title) }}" required 
                               class="w-full bg-slate-50 border border-slate-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20 p-3 rounded-xl outline-none font-bold text-slate-900 transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">URL Slug</label>
                        <input type="text" name="slug" value="{{ old('slug', $event->slug) }}" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Start Date & Time</label>
                        <input type="datetime-local" name="event_date" value="{{ old('event_date', $event->event_date ? $event->event_date->format('Y-m-d\TH:i') : '') }}" required 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">End Date (Optional)</label>
                        <input type="datetime-local" name="end_date" value="{{ old('end_date', $event->end_date ? $event->end_date->format('Y-m-d\TH:i') : '') }}" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Quick Location</label>
                        <input type="text" name="location" value="{{ old('location', $event->location) }}" placeholder="e.g. Jio World Convention Centre, Mumbai"
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                    </div>
                </div>

                <div class="pt-4">
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Banner Image / Hero Photo</label>
                    <div class="flex items-center space-x-4 mb-3">
                        @if($event->image)
                            <img src="{{ asset($event->image) }}" class="h-20 w-32 rounded-lg object-cover border border-slate-200 shadow-sm">
                        @endif
                        <input type="file" name="image" class="text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100 transition-all cursor-pointer">
                    </div>
                    <input type="hidden" name="image_url" value="{{ $event->image }}">
                </div>
            </div>

            <!-- EVENT BUILDER -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="bg-slate-900 p-4 flex items-center justify-between">
                    <h3 class="text-sm font-black text-white uppercase tracking-widest"><i class="fa-solid fa-layer-group text-purple-400 mr-2"></i> Event Content Builder</h3>
                    <div class="flex bg-white/10 p-1 rounded-lg">
                        <template x-for="tab in tabs">
                            <button type="button" @click="activeTab = tab.id" 
                                    :class="activeTab === tab.id ? 'bg-white text-slate-900' : 'text-white/60 hover:text-white'"
                                    class="px-4 py-1.5 rounded-md text-[10px] font-black uppercase tracking-widest transition-all"
                                    x-text="tab.label"></button>
                        </template>
                    </div>
                </div>

                <div class="p-8">
                    <!-- About Tab -->
                    <div x-show="activeTab === 'about'" class="space-y-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Summit Subtitle / Hook</label>
                            <input type="text" name="builder_content[about][subtitle]" x-model="content.about.subtitle"
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">About Description (Rich Content)</label>
                            <textarea name="builder_content[about][description]" x-model="content.about.description" rows="8" 
                                      class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 outline-none focus:border-purple-500 font-medium text-slate-700 leading-relaxed"></textarea>
                        </div>
                    </div>

                    <!-- Highlights Tab -->
                    <div x-show="activeTab === 'highlights'" class="space-y-4">
                        <div class="flex justify-between items-center mb-4">
                            <p class="text-xs font-bold text-slate-400">Add key reasons to attend or summit highlights.</p>
                            <button type="button" @click="addItem('highlights')" class="bg-purple-600 text-white px-3 py-1.5 rounded-lg text-xs font-black uppercase tracking-widest hover:bg-purple-700">
                                <i class="fa-solid fa-plus mr-1"></i> Add Highlight
                            </button>
                        </div>
                        <div class="grid grid-cols-1 gap-4">
                            <template x-for="(item, index) in content.highlights" :key="index">
                                <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 relative group">
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                        <div>
                                            <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Icon (FontAwesome)</label>
                                            <input type="text" :name="'builder_content[highlights]['+index+'][icon]'" x-model="item.icon" placeholder="fa-solid fa-users"
                                                   class="w-full bg-white border border-slate-200 rounded-lg p-2 text-xs font-mono">
                                        </div>
                                        <div class="md:col-span-3">
                                            <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Highlight Title</label>
                                            <input type="text" :name="'builder_content[highlights]['+index+'][title]'" x-model="item.title"
                                                   class="w-full bg-white border border-slate-200 rounded-lg p-2 text-xs font-bold">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Brief Description</label>
                                        <textarea :name="'builder_content[highlights]['+index+'][desc]'" x-model="item.desc" rows="2"
                                                  class="w-full bg-white border border-slate-200 rounded-lg p-2 text-xs"></textarea>
                                    </div>
                                    <button type="button" @click="removeItem('highlights', index)" class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <i class="fa-solid fa-xmark text-[10px]"></i>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Pricing Tab -->
                    <div x-show="activeTab === 'pricing'" class="space-y-4">
                        <div class="flex justify-between items-center mb-4">
                            <p class="text-xs font-bold text-slate-400">Define delegate/summits entry passes.</p>
                            <button type="button" @click="addItem('pricing')" class="bg-brand-primary text-white px-3 py-1.5 rounded-lg text-xs font-black uppercase tracking-widest">
                                <i class="fa-solid fa-plus mr-1"></i> Add Tier
                            </button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <template x-for="(item, index) in content.pricing" :key="index">
                                <div class="bg-indigo-50/50 border border-indigo-100 rounded-2xl p-6 relative group">
                                    <div class="mb-4">
                                        <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Access Level (e.g. Delegate, Sponsor)</label>
                                        <input type="text" :name="'builder_content[pricing]['+index+'][type]'" x-model="item.type"
                                               class="w-full bg-white border border-indigo-200 rounded-lg p-2.5 text-sm font-black text-indigo-900">
                                    </div>
                                    <div class="grid grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Price</label>
                                            <input type="text" :name="'builder_content[pricing]['+index+'][price]'" x-model="item.price" placeholder="45,000"
                                                   class="w-full bg-white border border-indigo-200 rounded-lg p-2.5 text-sm font-bold">
                                        </div>
                                        <div>
                                            <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Currency Symbol</label>
                                            <input type="text" :name="'builder_content[pricing]['+index+'][currency]'" x-model="item.currency" placeholder="INR"
                                                   class="w-full bg-white border border-indigo-200 rounded-lg p-2.5 text-sm font-bold text-slate-500">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Inclusions / Description</label>
                                        <textarea :name="'builder_content[pricing]['+index+'][desc]'" x-model="item.desc" rows="3" placeholder="e.g. Lunch, Networking, Certification"
                                                  class="w-full bg-white border border-indigo-200 rounded-lg p-2.5 text-xs"></textarea>
                                    </div>
                                    <button type="button" @click="removeItem('pricing', index)" class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <i class="fa-solid fa-xmark text-[10px]"></i>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Venue Tab -->
                    <div x-show="activeTab === 'venue'" class="space-y-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Venue Visual Name</label>
                            <input type="text" name="builder_content[venue][name]" x-model="content.venue.name" 
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Full Address & Details</label>
                            <textarea name="builder_content[venue][address]" x-model="content.venue.address" rows="3"
                                      class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-medium"></textarea>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Google Maps Embed URL / Link</label>
                            <input type="text" name="builder_content[venue][map_url]" x-model="content.venue.map_url" placeholder="https://www.google.com/maps/embed?pb=..."
                                   class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-mono text-xs text-slate-500">
                        </div>
                    </div>

                    <!-- Partners Tab -->
                    <div x-show="activeTab === 'partners'" class="space-y-4">
                        <div class="flex justify-between items-center mb-4">
                            <p class="text-xs font-bold text-slate-400">Add Sponsors, Partners, or Exhibitor logos.</p>
                            <button type="button" @click="addItem('partners')" class="bg-slate-900 text-white px-3 py-1.5 rounded-lg text-xs font-black uppercase tracking-widest">
                                <i class="fa-solid fa-plus mr-1"></i> Add Partner
                            </button>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <template x-for="(item, index) in content.partners" :key="index">
                                <div class="bg-white border border-slate-100 rounded-xl p-4 text-center relative group shadow-sm transition-all hover:border-brand-primary">
                                    <div class="h-20 flex items-center justify-center mb-3">
                                        <template x-if="item.logo">
                                            <img :src="item.logo" class="max-h-full max-w-full grayscale group-hover:grayscale-0 transition-all">
                                        </template>
                                        <template x-if="!item.logo">
                                            <i class="fa-solid fa-image text-slate-200 text-2xl"></i>
                                        </template>
                                    </div>
                                    <input type="text" :name="'builder_content[partners]['+index+'][name]'" x-model="item.name" placeholder="Logo Name"
                                           class="w-full bg-slate-50 border-0 text-[10px] font-black uppercase tracking-widest text-center outline-none">
                                    
                                    <div class="mt-2 relative">
                                        <button type="button" class="text-[9px] font-black text-blue-600 uppercase">Upload Logo</button>
                                        <input type="file" @change="uploadPartnerLogo($event, index)" class="absolute inset-0 opacity-0 cursor-pointer">
                                        <input type="hidden" :name="'builder_content[partners]['+index+'][logo]'" x-model="item.logo">
                                    </div>

                                    <button type="button" @click="removeItem('partners', index)" class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity translate-x-1/2 -translate-y-1/2 shadow-lg">
                                        <i class="fa-solid fa-xmark text-[8px]"></i>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- FAQ Tab -->
                    <div x-show="activeTab === 'faq'" class="space-y-4">
                        <div class="flex justify-between items-center mb-4">
                            <p class="text-xs font-bold text-slate-400">Common questions about the summit.</p>
                            <button type="button" @click="addItem('faq')" class="bg-slate-700 text-white px-3 py-1.5 rounded-lg text-xs font-black uppercase tracking-widest">
                                <i class="fa-solid fa-plus mr-1"></i> Add FAQ
                            </button>
                        </div>
                        <div class="space-y-4">
                            <template x-for="(item, index) in content.faq" :key="index">
                                <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 group">
                                    <div class="mb-3">
                                        <input type="text" :name="'builder_content[faq]['+index+'][q]'" x-model="item.q" placeholder="Question?" 
                                               class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-sm font-bold text-slate-900">
                                    </div>
                                    <div class="relative">
                                        <textarea :name="'builder_content[faq]['+index+'][a]'" x-model="item.a" rows="2" placeholder="Answer..."
                                                  class="w-full bg-white border border-slate-200 rounded-lg p-2.5 text-xs text-slate-600"></textarea>
                                        <button type="button" @click="removeItem('faq', index)" class="absolute top-2 right-2 text-red-300 hover:text-red-500 transition-colors">
                                            <i class="fa-solid fa-trash-can text-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Resources Tab (Original Attachments) -->
                    <div x-show="activeTab === 'resources'" class="space-y-4">
                        <div class="flex justify-between items-center mb-4">
                            <p class="text-xs font-bold text-slate-400">Downloadable PDFs, Brochures, or Videos.</p>
                            <button type="button" @click="addItem('resources')" class="bg-emerald-600 text-white px-3 py-1.5 rounded-lg text-xs font-black uppercase tracking-widest">
                                <i class="fa-solid fa-plus mr-1"></i> Add Resource
                            </button>
                        </div>
                        <div class="grid grid-cols-1 gap-3">
                            <template x-for="(item, index) in content.resources" :key="index">
                                <div class="bg-white border border-slate-200 rounded-xl p-4 flex gap-4 items-center group">
                                    <div class="flex-1">
                                        <input type="text" :name="'builder_content[resources]['+index+'][title]'" x-model="item.title" placeholder="Resource Title"
                                               class="w-full bg-slate-50 border-0 rounded-lg p-2 text-xs font-bold">
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex gap-2">
                                            <input type="text" :name="'builder_content[resources]['+index+'][url]'" x-model="item.url" readonly
                                                   class="flex-1 bg-slate-100 border border-slate-200 rounded-lg p-2 text-[10px] font-mono">
                                            <div class="relative overflow-hidden">
                                                <button type="button" class="bg-emerald-50 text-emerald-600 px-3 py-2 rounded-lg text-[10px] font-black uppercase border border-emerald-100">Upload</button>
                                                <input type="file" @change="uploadPartnerLogo($event, index, 'resources')" class="absolute inset-0 opacity-0 cursor-pointer">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" @click="removeItem('resources', index)" class="text-red-300 hover:text-red-500">
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Side: Publishing Parameters -->
        <div class="w-full xl:w-1/4 space-y-6 sticky top-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                <h3 class="text-lg font-black text-slate-900 mb-4 border-b border-slate-100 pb-3">Status</h3>
                <div class="space-y-4">
                    <!-- Design Strategy -->
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Display Strategy</label>
                        <select name="design_style" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-bold text-slate-900 cursor-pointer text-xs">
                            <option value="standard" {{ old('design_style', $event->design_style) === 'standard' ? 'selected' : '' }}>Standard Listing</option>
                            <option value="featured" {{ old('design_style', $event->design_style) === 'featured' ? 'selected' : '' }}>Featured Hero</option>
                        </select>
                    </div>

                    <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-purple-500 font-black text-slate-900 cursor-pointer">
                        <option value="published" {{ old('status', $event->status) === 'published' ? 'selected' : '' }}>Published Publicly</option>
                        <option value="draft" {{ old('status', $event->status) === 'draft' ? 'selected' : '' }}>Hidden Draft Array</option>
                    </select>

                    <label class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl cursor-pointer border border-slate-100">
                        <input type="checkbox" name="show_timer" value="1" {{ $event->show_timer ? 'checked' : '' }} class="w-4 h-4 text-purple-600 rounded">
                        <span class="text-xs font-bold text-slate-700">Live Countdown Timer</span>
                    </label>

                    <label class="flex items-center gap-3 p-3 {{ (isset($currentPopup) && $currentPopup && !$event->show_as_popup) ? 'bg-slate-100 opacity-60 cursor-not-allowed' : 'bg-slate-50 cursor-pointer' }} rounded-xl border border-slate-100">
                        <input type="checkbox" name="show_as_popup" value="1" 
                               {{ $event->show_as_popup ? 'checked' : '' }} 
                               {{ (isset($currentPopup) && $currentPopup && !$event->show_as_popup) ? 'disabled' : '' }}
                               class="w-4 h-4 text-purple-600 rounded">
                        <span class="text-xs font-bold text-slate-700">Homepage Popup Mode</span>
                    </label>
                    
                    @if(isset($currentPopup) && $currentPopup)
                        <div class="px-3 py-2 bg-amber-50 rounded-lg border border-amber-100">
                            <p class="text-[9px] font-black text-amber-700 uppercase tracking-widest leading-tight">
                                <i class="fa-solid fa-lock mr-1"></i> Feature Locked
                            </p>
                            <p class="text-[10px] font-bold text-amber-900 mt-1">Currently assigned to: <br> "{{ $currentPopup->title }}"</p>
                            <p class="text-[8px] text-amber-600 font-medium mt-1">* Please turn off the popup from the above event to enable this toggle.</p>
                        </div>
                    @endif

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-slate-900 hover:bg-black text-white font-black py-4 rounded-xl transition-all shadow-xl shadow-slate-900/10 flex justify-center items-center gap-2">
                             <i class="fa-solid fa-save"></i> Save Event
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-purple-900 rounded-2xl p-6 text-white shadow-xl shadow-purple-900/20">
                <i class="fa-solid fa-circle-info text-2xl text-purple-300 mb-3 block"></i>
                <h4 class="text-xs font-black uppercase tracking-widest border-b border-purple-800 pb-2 mb-3">Live Page URL</h4>
                @if($event->exists)
                    <a href="{{ route('events.show', $event->slug) }}" target="_blank" class="text-[10px] font-mono break-all text-purple-200 block hover:text-white transition-colors underline">
                        {{ route('events.show', $event->slug) }}
                    </a>
                @else
                    <p class="text-[10px] text-purple-300 italic">Page will be available after saving.</p>
                @endif
            </div>
        </div>

    </div>
</form>

<script>
    function eventBuilder() {
        return {
            activeTab: 'about',
            tabs: [
                { id: 'about', label: 'About' },
                { id: 'highlights', label: 'Highlights' },
                { id: 'pricing', label: 'Pricing' },
                { id: 'venue', label: 'Venue' },
                { id: 'partners', label: 'Partners' },
                { id: 'faq', label: 'FAQ' },
                { id: 'resources', label: 'Resources' },
            ],
            // Default content structure
            content: {
                about: {
                    subtitle: @json($event->builder_content['about']['subtitle'] ?? ''),
                    description: @json($event->builder_content['about']['description'] ?? ''),
                },
                highlights: @json($event->builder_content['highlights'] ?? []),
                pricing: @json($event->builder_content['pricing'] ?? []),
                venue: {
                    name: @json($event->builder_content['venue']['name'] ?? ''),
                    address: @json($event->builder_content['venue']['address'] ?? ''),
                    map_url: @json($event->builder_content['venue']['map_url'] ?? ''),
                },
                partners: @json($event->builder_content['partners'] ?? []),
                faq: @json($event->builder_content['faq'] ?? []),
                resources: @json($event->builder_content['resources'] ?? []),
            },
            addItem(section) {
                if (section === 'highlights') this.content.highlights.push({ icon: 'fa-solid fa-star', title: '', desc: '' });
                if (section === 'pricing') this.content.pricing.push({ type: 'Standard Delegate', price: '0', currency: 'INR', desc: '' });
                if (section === 'partners') this.content.partners.push({ name: '', logo: '' });
                if (section === 'faq') this.content.faq.push({ q: '', a: '' });
                if (section === 'resources') this.content.resources.push({ title: '', url: '' });
            },
            removeItem(section, index) {
                this.content[section].splice(index, 1);
            },
            async uploadPartnerLogo(event, index, type = 'partners') {
                const file = event.target.files[0];
                if (!file) return;

                const formData = new FormData();
                formData.append('file', file);
                formData.append('_token', '{{ csrf_token() }}');

                try {
                    const response = await fetch('{{ route('admin.events.upload-attachment') }}', {
                        method: 'POST',
                        body: formData
                    });
                    const data = await response.json();
                    if (data.success) {
                        if (type === 'partners') {
                            this.content.partners[index].logo = data.path;
                            if(!this.content.partners[index].name) this.content.partners[index].name = data.name;
                        } else {
                            this.content.resources[index].url = data.path;
                            if(!this.content.resources[index].title) this.content.resources[index].title = data.name;
                        }
                    }
                } catch (e) {
                    console.error(e);
                    alert('Upload failed.');
                }
            }
        }
    }
</script>

@endsection
