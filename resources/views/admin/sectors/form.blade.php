@extends('layouts.admin')

@section('title', $sector->exists ? 'Edit Sector Page' : 'Build Sector Page')

@section('content')

<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">{{ $sector->exists ? 'Edit Dynamic Sector Page' : 'Build Dynamic Sector Page' }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Construct the global landing page layout for this sector block by block.</p>
    </div>
    <a href="{{ route('admin.sectors.index') }}" class="text-slate-500 hover:text-slate-800 font-bold text-sm bg-white border border-slate-200 px-4 py-2 rounded-xl">
        <i class="fa-solid fa-arrow-left-long mr-1"></i> Back to Sectors
    </a>
</div>

<!-- Alpine.js component wrapping the form -->
<form action="{{ $sector->exists ? route('admin.sectors.update', $sector) : route('admin.sectors.store') }}" method="POST" enctype="multipart/form-data"
      x-data="sectorBuilder()" @submit="prepareSubmit">
    @csrf
    @if($sector->exists) @method('PUT') @endif

    <!-- Hidden input to store JSON output string of blocks -->
    <input type="hidden" name="blocks_data" x-model="blocksJson">

    <div class="flex flex-col xl:flex-row gap-6 items-start">
        
        <!-- Left Side: Core Sector Details -->
        <div class="w-full xl:w-1/3 bg-white p-6 rounded-2xl shadow-sm border border-slate-200 sticky top-6">
            <h3 class="text-lg font-black text-slate-900 mb-4 border-b border-slate-100 pb-3">Core Identifier</h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Sector Title</label>
                    <input type="text" name="title" value="{{ old('title', $sector->title) }}" required 
                           class="w-full bg-slate-50 border border-slate-200 focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/20 p-3 rounded-xl outline-none font-bold text-slate-900 transition-all">
                    @error('title')<p class="text-xs text-red-500 mt-1 font-bold">{{ $message }}</p>@enderror
                </div>
                
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">URL Extension (Slug) <span class="text-slate-400 font-medium lowercase normal-case">(optional)</span></label>
                    <div class="flex">
                        <span class="bg-slate-100 border border-slate-200 border-r-0 rounded-l-xl px-3 py-3 text-slate-400 font-bold text-sm flex items-center">msmeccii.in/sectors/</span>
                        <input type="text" name="slug" value="{{ old('slug', $sector->slug) }}" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-r-xl p-3 outline-none focus:border-brand-primary font-bold text-slate-900">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Short Preview Desc</label>
                    <textarea name="description" rows="3" 
                              class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-brand-primary font-medium text-slate-900 resize-none">{{ old('description', $sector->description) }}</textarea>
                </div>

                <div>
                    <div class="flex justify-between items-end mb-1">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider">Thumb Image Upload</label>
                    </div>
                    @if($sector->thumbnail)
                        <div class="mb-3 rounded-xl overflow-hidden border border-slate-200 shadow-sm relative group">
                            <img src="{{ asset($sector->thumbnail) }}" alt="Preview" class="w-full h-32 object-cover">
                            <div class="absolute bottom-0 w-full bg-black/60 backdrop-blur-md px-3 py-2 text-[10px] font-bold text-white uppercase tracking-wider flex justify-between items-center group-hover:bg-brand-primary/90 transition-colors">
                                Current Active Banner
                                <i class="fa-solid fa-circle-check text-green-400"></i>
                            </div>
                        </div>
                    @endif
                    <input type="file" name="thumbnail" accept="image/*"
                           class="w-full bg-slate-50 border border-slate-200 focus:border-brand-primary p-2.5 rounded-xl outline-none font-bold text-slate-900 transition-all text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-brand-primary/10 file:text-brand-primary hover:file:bg-brand-primary/20">
                    <p class="text-[10px] text-slate-400 font-bold mt-1">Upload high-res image for the sector's main banner.</p>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Page Status</label>
                    <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-brand-primary font-bold text-slate-900 cursor-pointer">
                        <option value="active" {{ old('status', $sector->status) === 'active' ? 'selected' : '' }}>Published Live</option>
                        <option value="inactive" {{ old('status', $sector->status) === 'inactive' ? 'selected' : '' }}>Private Draft</option>
                    </select>
                </div>

                <div class="pt-4 border-t border-slate-100">
                    <button type="submit" class="w-full bg-slate-900 hover:bg-brand-primary text-white font-black py-4 rounded-xl transition-all shadow-lg text-center drop-shadow-sm flex justify-center items-center gap-2">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Save Sector Page
                    </button>
                    <p class="text-[10px] text-center text-slate-400 font-bold mt-2 uppercase tracking-widest"><i class="fa-solid fa-lock text-brand-primary mr-1"></i> Auto-Sequenced Elements</p>
                </div>
            </div>
        </div>

        <!-- Right Side: Dynamic Block Builder -->
        <div class="w-full xl:w-2/3 bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col">
            <div class="bg-slate-950 p-4 border-b border-slate-800 flex justify-between items-center z-10">
                <h3 class="text-sm font-black text-white uppercase tracking-widest flex items-center gap-2">
                    <i class="fa-solid fa-diagram-project text-brand-primary"></i> Page Structure Builder
                </h3>
                <div class="flex gap-2">
                    <button type="button" @click="addBlock('heading')" class="text-xs bg-slate-800 hover:bg-slate-700 text-white font-bold py-1.5 px-3 rounded-lg transition-colors border border-slate-700">
                        + Heading
                    </button>
                    <button type="button" @click="addBlock('text')" class="text-xs bg-slate-800 hover:bg-slate-700 text-white font-bold py-1.5 px-3 rounded-lg transition-colors border border-slate-700">
                        + Paragraph Text
                    </button>
                    <button type="button" @click="addBlock('image')" class="text-xs bg-brand-primary hover:bg-brand-primary-dark text-white font-bold py-1.5 px-3 rounded-lg transition-colors border border-brand-primary/50">
                        + Image Hero
                    </button>
                </div>
            </div>

            <!-- Builder Area -->
            <div class="p-6 bg-slate-50 min-h-[500px]">
                
                <template x-if="blocks.length === 0">
                    <div class="border-2 border-dashed border-slate-300 rounded-2xl p-12 text-center text-slate-500 bg-white">
                        <i class="fa-solid fa-wand-magic-sparkles text-3xl mb-3 text-slate-300"></i>
                        <p class="font-bold text-lg">Empty Canvas</p>
                        <p class="text-sm font-medium mt-1">Use the top buttons to inject structural blocks into this page.</p>
                    </div>
                </template>

                <div class="space-y-4">
                    <template x-for="(block, index) in blocks" :key="block.id">
                        <!-- Block Capsule -->
                        <div class="bg-white border text-left rounded-xl shadow-sm relative overflow-hidden transition-all group"
                             :class="{
                                'border-blue-200': block.type === 'heading',
                                'border-slate-200': block.type === 'text',
                                'border-brand-primary/30': block.type === 'image'
                             }">
                            
                            <!-- Block Header (Drag handle aesthetic) -->
                            <div class="bg-slate-50 px-4 py-2 border-b border-slate-100 flex justify-between items-center cursor-move"
                                 :class="{
                                    'bg-blue-50/50': block.type === 'heading',
                                    'bg-brand-primary/5': block.type === 'image'
                                 }">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-grip-vertical text-slate-300"></i>
                                    <span class="text-xs font-black uppercase tracking-widest"
                                          :class="{
                                            'text-blue-500': block.type === 'heading',
                                            'text-slate-500': block.type === 'text',
                                            'text-brand-primary': block.type === 'image'
                                          }" x-text="block.type">
                                    </span>
                                </div>
                                
                                <div class="flex gap-2">
                                    <!-- Move Up -->
                                    <button @click.prevent="moveUp(index)" x-show="index > 0" class="text-slate-400 hover:text-slate-800 transition-colors bg-white w-6 h-6 rounded-md shadow-sm border border-slate-200 flex items-center justify-center">
                                        <i class="fa-solid fa-arrow-up text-[10px]"></i>
                                    </button>
                                    <!-- Move Down -->
                                    <button @click.prevent="moveDown(index)" x-show="index < blocks.length - 1" class="text-slate-400 hover:text-slate-800 transition-colors bg-white w-6 h-6 rounded-md shadow-sm border border-slate-200 flex items-center justify-center">
                                        <i class="fa-solid fa-arrow-down text-[10px]"></i>
                                    </button>
                                    <!-- Delete -->
                                    <button @click.prevent="removeBlock(index)" class="text-red-400 hover:text-red-600 hover:bg-red-50 transition-colors ml-2 p-1 rounded">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Block Content Area -->
                            <div class="p-4">
                                <!-- Heading Input -->
                                <template x-if="block.type === 'heading'">
                                    <input type="text" x-model="block.value" placeholder="Type large section title here..." 
                                           class="w-full text-2xl font-black text-slate-900 border-none px-0 py-2 focus:ring-0 placeholder-slate-300 outline-none">
                                </template>

                                <!-- Text Input -->
                                <template x-if="block.type === 'text'">
                                    <textarea x-model="block.value" placeholder="Type paragraph content..." rows="3"
                                              class="w-full text-base font-medium text-slate-600 border border-slate-200 rounded-lg p-3 outline-none focus:border-brand-primary placeholder-slate-300"></textarea>
                                </template>

                                <!-- Image Input -->
                                <template x-if="block.type === 'image'">
                                    <div>
                                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-2">Image URL OR Direct File Upload</label>
                                        
                                        <!-- Image Value Visual Preview -->
                                        <template x-if="block.value && block.value.trim() !== ''">
                                            <div class="mb-3 rounded-lg overflow-hidden border border-brand-primary/20 shadow-sm inline-block relative group bg-slate-100">
                                                <img :src="block.value.includes('http') ? block.value : '{{ url('/') }}/' + block.value.replace(/^\/+/, '')" 
                                                     class="h-32 w-auto object-cover rounded-lg group-hover:scale-105 transition-transform" 
                                                     onerror="this.style.display='none'">
                                                <div class="absolute top-2 left-2 bg-black/70 text-white text-[10px] px-2 py-1 rounded font-bold backdrop-blur-sm shadow-sm flex items-center gap-1">
                                                    <i class="fa-solid fa-eye text-brand-primary"></i> Live DB Data
                                                </div>
                                            </div>
                                        </template>

                                        <div class="flex flex-col sm:flex-row gap-4">
                                            <div class="flex-1 flex gap-2 items-center">
                                                <div class="bg-brand-primary/10 text-brand-primary w-11 h-11 rounded-lg flex items-center justify-center border border-brand-primary/20 shrink-0">
                                                    <i class="fa-solid fa-link"></i>
                                                </div>
                                                <input type="text" x-model="block.value" placeholder="Paste image link..." 
                                                       class="w-full border border-slate-200 rounded-lg p-3 font-medium text-slate-700 outline-none focus:border-brand-primary placeholder-slate-300 shadow-sm">
                                            </div>
                                            
                                            <div class="flex items-center justify-center font-bold text-slate-300 text-xs uppercase tracking-widest"><i class="fa-solid fa-arrows-alt-h mr-1 text-[10px]"></i> OR</div>
                                            
                                            <div class="flex-1">
                                                <input type="file" :name="'block_images[' + block.id + ']'" accept="image/*"
                                                       class="w-full bg-white border border-slate-200 focus:border-brand-primary p-3 rounded-lg outline-none font-bold text-slate-900 transition-all text-sm file:mr-4 file:py-1.5 file:px-3 file:rounded file:border-0 file:text-xs file:font-semibold file:bg-brand-primary/10 file:text-brand-primary hover:file:bg-brand-primary/20 hover:border-brand-primary/40 cursor-pointer shadow-sm">
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

    </div>
</form>

<script>
    function sectorBuilder() {
        return {
            // Load existing sections if editing, otherwise empty array
            blocks: @json($sector->exists ? $sector->sections->pluck('content') : []),
            blocksJson: '',
            
            addBlock(type) {
                this.blocks.push({
                    id: Date.now() + Math.random().toString(36).substring(2, 9),
                    type: type,
                    value: ''
                });
            },
            removeBlock(index) {
                this.blocks.splice(index, 1);
            },
            moveUp(index) {
                if (index > 0) {
                    const temp = this.blocks[index];
                    this.blocks[index] = this.blocks[index - 1];
                    this.blocks[index - 1] = temp;
                }
            },
            moveDown(index) {
                if (index < this.blocks.length - 1) {
                    const temp = this.blocks[index];
                    this.blocks[index] = this.blocks[index + 1];
                    this.blocks[index + 1] = temp;
                }
            },
            prepareSubmit() {
                // Stringify the reactive array before submitting the standard form
                this.blocksJson = JSON.stringify(this.blocks);
            }
        }
    }
</script>
@endsection
