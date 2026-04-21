{{-- Advanced Block Builder Component --}}
<div x-data="blockBuilder()" class="space-y-4">
    <input type="hidden" name="content" :value="JSON.stringify(blocks)">

    <!-- Block List -->
    <template x-for="(block, index) in blocks" :key="block.id">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden group relative transition-all duration-200" :class="activeBlock === index ? 'ring-2 ring-brand-primary/40 border-brand-primary/20' : 'hover:border-slate-200'">
            
            <!-- Block Header -->
            <div class="px-5 py-3 bg-slate-50 border-b border-slate-100 flex items-center justify-between cursor-move" @click="activeBlock = (activeBlock === index ? null : index)">
                <div class="flex items-center gap-3">
                    <span class="w-6 h-6 rounded-md bg-slate-200 text-slate-500 text-[10px] font-black flex items-center justify-center" x-text="index + 1"></span>
                    <i class="text-slate-400 text-xs" :class="blockIcon(block.type)"></i>
                    <span class="text-[11px] font-bold text-slate-500 uppercase tracking-widest" x-text="blockLabel(block.type)"></span>
                </div>
                <div class="flex items-center gap-1.5 opacity-0 group-hover:opacity-100 transition-opacity">
                    <button type="button" @click.stop="moveBlock(index, -1)" :disabled="index === 0" class="w-7 h-7 rounded-lg bg-white border border-slate-200 text-slate-400 flex items-center justify-center hover:bg-slate-100 disabled:opacity-30 transition text-[10px]"><i class="fa-solid fa-arrow-up"></i></button>
                    <button type="button" @click.stop="moveBlock(index, 1)" :disabled="index === blocks.length - 1" class="w-7 h-7 rounded-lg bg-white border border-slate-200 text-slate-400 flex items-center justify-center hover:bg-slate-100 disabled:opacity-30 transition text-[10px]"><i class="fa-solid fa-arrow-down"></i></button>
                    <button type="button" @click.stop="duplicateBlock(index)" class="w-7 h-7 rounded-lg bg-white border border-slate-200 text-blue-400 flex items-center justify-center hover:bg-blue-50 transition text-[10px]"><i class="fa-solid fa-copy"></i></button>
                    <button type="button" @click.stop="removeBlock(index)" class="w-7 h-7 rounded-lg bg-white border border-red-200 text-red-400 flex items-center justify-center hover:bg-red-50 transition text-[10px]"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>

            <!-- Block Content -->
            <div class="p-5">
                <!-- HEADING -->
                <template x-if="block.type === 'heading'">
                    <div class="space-y-3">
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="flex gap-2">
                                <template x-for="lvl in ['h1','h2','h3','h4']">
                                    <button type="button" @click="block.level = lvl" class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-wider transition-all border" :class="block.level === lvl ? 'bg-brand-primary text-white border-brand-primary shadow-sm' : 'bg-slate-50 text-slate-500 border-slate-200 hover:bg-slate-100'" x-text="lvl"></button>
                                </template>
                            </div>
                            
                            <div class="w-px h-6 bg-slate-200"></div>

                            <!-- Rich Text Toolbar -->
                            <div class="flex items-center gap-1 p-1 bg-slate-100 rounded-lg border border-slate-200">
                                <button type="button" @mousedown.prevent="document.execCommand('bold', false, null)" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Bold"><i class="fa-solid fa-bold text-xs"></i></button>
                                <button type="button" @mousedown.prevent="document.execCommand('underline', false, null)" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Underline"><i class="fa-solid fa-underline text-xs"></i></button>
                                <div class="w-px h-4 bg-slate-300 mx-1"></div>
                                <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#ef4444')" class="w-5 h-5 rounded-full bg-red-500 hover:ring-2 ring-red-200 mx-0.5" title="Red Text"></button>
                                <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#3b82f6')" class="w-5 h-5 rounded-full bg-blue-500 hover:ring-2 ring-blue-200 mx-0.5" title="Blue Text"></button>
                                <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#10b981')" class="w-5 h-5 rounded-full bg-emerald-500 hover:ring-2 ring-emerald-200 mx-0.5" title="Green Text"></button>
                                <button type="button" @mousedown.prevent="let c = prompt('Enter HEX color code (e.g. #ff0000):'); if(c) document.execCommand('foreColor', false, c);" class="w-5 h-5 rounded-full bg-slate-900 flex items-center justify-center text-white text-[8px] hover:ring-2 ring-slate-200 mx-0.5" title="Custom Color"><i class="fa-solid fa-plus"></i></button>
                                <div class="w-px h-4 bg-slate-300 mx-1"></div>
                                <button type="button" @mousedown.prevent="document.execCommand('removeFormat', false, null)" class="w-7 h-7 rounded bg-white text-slate-500 flex items-center justify-center hover:text-red-500 transition" title="Remove Formatting"><i class="fa-solid fa-eraser text-xs"></i></button>
                            </div>
                        </div>
                        
                        <div contenteditable="true" 
                             x-init="$el.innerHTML = block.content" 
                             @input="block.content = $el.innerHTML"
                             @blur="block.content = $el.innerHTML"
                             class="w-full bg-slate-50 border-0 rounded-xl p-4 focus:ring-2 focus:ring-brand-primary placeholder:text-slate-400 outline-none transition-all"
                             :class="block.level === 'h1' ? 'text-3xl font-black' : (block.level === 'h2' ? 'text-2xl font-black' : (block.level === 'h3' ? 'text-xl font-bold' : 'text-lg font-bold'))"></div>
                    </div>
                </template>

                <!-- PARAGRAPH -->
                <template x-if="block.type === 'paragraph'">
                    <div>
                        <!-- Rich Text Toolbar -->
                        <div class="mb-2 flex items-center gap-1 p-1 bg-slate-100 rounded-lg w-max border border-slate-200">
                            <button type="button" @mousedown.prevent="document.execCommand('bold', false, null)" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Bold"><i class="fa-solid fa-bold text-xs"></i></button>
                            <button type="button" @mousedown.prevent="document.execCommand('underline', false, null)" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Underline"><i class="fa-solid fa-underline text-xs"></i></button>
                            <button type="button" @mousedown.prevent="let url = prompt('Enter Link URL (e.g., https://example.com):'); if(url) document.execCommand('createLink', false, url);" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Add Link"><i class="fa-solid fa-link text-xs"></i></button>
                            <div class="w-px h-4 bg-slate-300 mx-1"></div>
                            <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#ef4444')" class="w-5 h-5 rounded-full bg-red-500 hover:ring-2 ring-red-200 mx-0.5" title="Red Text"></button>
                            <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#3b82f6')" class="w-5 h-5 rounded-full bg-blue-500 hover:ring-2 ring-blue-200 mx-0.5" title="Blue Text"></button>
                            <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#10b981')" class="w-5 h-5 rounded-full bg-emerald-500 hover:ring-2 ring-emerald-200 mx-0.5" title="Green Text"></button>
                            <button type="button" @mousedown.prevent="let c = prompt('Enter HEX color code (e.g. #ff0000):'); if(c) document.execCommand('foreColor', false, c);" class="w-5 h-5 rounded-full bg-slate-900 flex items-center justify-center text-white text-[8px] hover:ring-2 ring-slate-200 mx-0.5" title="Custom Color"><i class="fa-solid fa-plus"></i></button>
                            <div class="w-px h-4 bg-slate-300 mx-1"></div>
                            <button type="button" @mousedown.prevent="document.execCommand('removeFormat', false, null)" class="w-7 h-7 rounded bg-white text-slate-500 flex items-center justify-center hover:text-red-500 transition" title="Remove Formatting"><i class="fa-solid fa-eraser text-xs"></i></button>
                        </div>
                        
                        <div contenteditable="true" 
                             x-init="$el.innerHTML = block.content" 
                             @input="block.content = $el.innerHTML"
                             @blur="block.content = $el.innerHTML"
                             class="w-full bg-slate-50 border-0 rounded-xl p-4 text-base text-slate-700 leading-relaxed focus:ring-2 focus:ring-brand-primary placeholder:text-slate-400 min-h-[100px] outline-none transition-all"></div>
                    </div>
                </template>

                <!-- IMAGE -->
                <template x-if="block.type === 'image'">
                    <div class="space-y-3">
                        <div x-show="block.url" class="relative rounded-xl overflow-hidden border border-slate-200">
                            <img :src="block.url" class="w-full max-h-[400px] object-cover">
                            <button type="button" @click="block.url = ''" class="absolute top-3 right-3 w-8 h-8 bg-red-500 text-white rounded-lg flex items-center justify-center hover:bg-red-600 transition shadow-lg text-xs"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div x-show="!block.url" class="border-2 border-dashed border-slate-200 rounded-xl p-8 text-center hover:border-brand-primary/40 transition cursor-pointer relative">
                            <input type="file" accept="image/*" @change="uploadBlockImage($event, index)" class="absolute inset-0 opacity-0 cursor-pointer z-10">
                            <div>
                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-slate-300 mb-3 block"></i>
                                <p class="text-sm font-bold text-slate-500">Click or drag an image here</p>
                                <p class="text-[10px] text-slate-400 mt-1">JPG, PNG, WEBP up to 5MB</p>
                            </div>
                        </div>
                        <input type="text" x-model="block.caption" class="w-full bg-slate-50 border-0 rounded-lg p-3 text-sm text-slate-500 italic focus:ring-2 focus:ring-brand-primary placeholder:text-slate-400" placeholder="Image caption (optional)">
                        <select x-model="block.size" class="bg-slate-50 border border-slate-200 rounded-lg p-2 text-xs font-bold text-slate-600">
                            <option value="full">Full Width</option>
                            <option value="medium">Medium (75%)</option>
                            <option value="small">Small (50%)</option>
                        </select>
                    </div>
                </template>

                <!-- LIST -->
                <template x-if="block.type === 'list'">
                    <div class="space-y-3">
                        <div class="flex flex-wrap items-center gap-4 mb-2">
                            <div class="flex gap-2">
                                <button type="button" @click="block.style = 'unordered'" class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-wider transition-all border" :class="block.style === 'unordered' ? 'bg-brand-primary text-white border-brand-primary' : 'bg-slate-50 text-slate-500 border-slate-200'">
                                    <i class="fa-solid fa-list-ul mr-1"></i> Bullets
                                </button>
                                <button type="button" @click="block.style = 'ordered'" class="px-3 py-1.5 rounded-lg text-[10px] font-black uppercase tracking-wider transition-all border" :class="block.style === 'ordered' ? 'bg-brand-primary text-white border-brand-primary' : 'bg-slate-50 text-slate-500 border-slate-200'">
                                    <i class="fa-solid fa-list-ol mr-1"></i> Numbered
                                </button>
                            </div>

                            <div class="w-px h-6 bg-slate-200"></div>

                            <!-- Rich Text Toolbar -->
                            <div class="flex items-center gap-1 p-1 bg-slate-100 rounded-lg border border-slate-200">
                                <button type="button" @mousedown.prevent="document.execCommand('bold', false, null)" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Bold"><i class="fa-solid fa-bold text-xs"></i></button>
                                <button type="button" @mousedown.prevent="document.execCommand('underline', false, null)" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Underline"><i class="fa-solid fa-underline text-xs"></i></button>
                                <button type="button" @mousedown.prevent="let url = prompt('Enter Link URL (e.g., https://example.com):'); if(url) document.execCommand('createLink', false, url);" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Add Link"><i class="fa-solid fa-link text-xs"></i></button>
                                <div class="w-px h-4 bg-slate-300 mx-1"></div>
                                <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#ef4444')" class="w-5 h-5 rounded-full bg-red-500 hover:ring-2 ring-red-200 mx-0.5" title="Red Text"></button>
                                <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#3b82f6')" class="w-5 h-5 rounded-full bg-blue-500 hover:ring-2 ring-blue-200 mx-0.5" title="Blue Text"></button>
                                <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#10b981')" class="w-5 h-5 rounded-full bg-emerald-500 hover:ring-2 ring-emerald-200 mx-0.5" title="Green Text"></button>
                                <button type="button" @mousedown.prevent="let c = prompt('Enter HEX color code (e.g. #ff0000):'); if(c) document.execCommand('foreColor', false, c);" class="w-5 h-5 rounded-full bg-slate-900 flex items-center justify-center text-white text-[8px] hover:ring-2 ring-slate-200 mx-0.5" title="Custom Color"><i class="fa-solid fa-plus"></i></button>
                                <div class="w-px h-4 bg-slate-300 mx-1"></div>
                                <button type="button" @mousedown.prevent="document.execCommand('removeFormat', false, null)" class="w-7 h-7 rounded bg-white text-slate-500 flex items-center justify-center hover:text-red-500 transition" title="Remove Formatting"><i class="fa-solid fa-eraser text-xs"></i></button>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <template x-for="(item, i) in block.items" :key="i">
                                <div class="flex items-start gap-2">
                                    <span class="text-xs font-bold text-slate-400 w-6 text-center shrink-0 mt-3" x-text="block.style === 'ordered' ? (i+1)+'.' : '•'"></span>
                                    <div contenteditable="true" 
                                        x-init="$el.innerHTML = block.items[i]" 
                                        @input="block.items[i] = $el.innerHTML"
                                        @blur="block.items[i] = $el.innerHTML"
                                        class="flex-1 bg-slate-50 border-0 rounded-lg p-3 text-sm text-slate-700 min-h-[44px] focus:ring-2 focus:ring-brand-primary outline-none transition-all"></div>
                                    <button type="button" @click="block.items.splice(i, 1)" class="w-8 h-8 rounded-lg text-red-400 hover:bg-red-50 flex items-center justify-center transition text-xs shrink-0 mt-1.5"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                            </template>
                        </div>
                        <button type="button" @click="block.items.push('')" class="text-xs font-bold text-brand-primary hover:text-brand-dark flex items-center gap-1 mt-1 transition">
                            <i class="fa-solid fa-plus text-[10px]"></i> Add Item
                        </button>
                    </div>
                </template>

                <!-- QUOTE -->
                <template x-if="block.type === 'quote'">
                    <div class="space-y-3 border-l-4 border-brand-primary pl-4">
                        <!-- Rich Text Toolbar -->
                        <div class="flex items-center gap-1 p-1 bg-slate-100 rounded-lg w-max border border-slate-200">
                            <button type="button" @mousedown.prevent="document.execCommand('bold', false, null)" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Bold"><i class="fa-solid fa-bold text-xs"></i></button>
                            <button type="button" @mousedown.prevent="document.execCommand('underline', false, null)" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Underline"><i class="fa-solid fa-underline text-xs"></i></button>
                            <button type="button" @mousedown.prevent="let url = prompt('Enter Link URL (e.g., https://example.com):'); if(url) document.execCommand('createLink', false, url);" class="w-7 h-7 rounded bg-white text-slate-700 shadow-sm border border-slate-200 flex items-center justify-center hover:bg-slate-50 transition" title="Add Link"><i class="fa-solid fa-link text-xs"></i></button>
                            <div class="w-px h-4 bg-slate-300 mx-1"></div>
                            <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#ef4444')" class="w-5 h-5 rounded-full bg-red-500 hover:ring-2 ring-red-200 mx-0.5" title="Red Text"></button>
                            <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#3b82f6')" class="w-5 h-5 rounded-full bg-blue-500 hover:ring-2 ring-blue-200 mx-0.5" title="Blue Text"></button>
                            <button type="button" @mousedown.prevent="document.execCommand('foreColor', false, '#10b981')" class="w-5 h-5 rounded-full bg-emerald-500 hover:ring-2 ring-emerald-200 mx-0.5" title="Green Text"></button>
                            <button type="button" @mousedown.prevent="let c = prompt('Enter HEX color code (e.g. #ff0000):'); if(c) document.execCommand('foreColor', false, c);" class="w-5 h-5 rounded-full bg-slate-900 flex items-center justify-center text-white text-[8px] hover:ring-2 ring-slate-200 mx-0.5" title="Custom Color"><i class="fa-solid fa-plus"></i></button>
                            <div class="w-px h-4 bg-slate-300 mx-1"></div>
                            <button type="button" @mousedown.prevent="document.execCommand('removeFormat', false, null)" class="w-7 h-7 rounded bg-white text-slate-500 flex items-center justify-center hover:text-red-500 transition" title="Remove Formatting"><i class="fa-solid fa-eraser text-xs"></i></button>
                        </div>
                        
                        <div contenteditable="true" 
                             x-init="$el.innerHTML = block.content" 
                             @input="block.content = $el.innerHTML"
                             @blur="block.content = $el.innerHTML"
                             class="w-full bg-slate-50 border-0 rounded-xl p-4 text-lg italic text-slate-700 leading-relaxed focus:ring-2 focus:ring-brand-primary placeholder:text-slate-400 min-h-[80px] outline-none transition-all"></div>
                        <input type="text" x-model="block.author" class="w-full bg-slate-50 border-0 rounded-lg p-3 text-sm font-bold text-slate-600 focus:ring-2 focus:ring-brand-primary placeholder:text-slate-400 inline-block mt-2" placeholder="— Attribution / Author (optional)">
                    </div>
                </template>

                <!-- DIVIDER -->
                <template x-if="block.type === 'divider'">
                    <div class="py-2 flex items-center justify-center">
                        <div class="w-full border-t-2 border-dashed border-slate-200"></div>
                        <span class="px-4 text-[10px] font-bold text-slate-400 uppercase whitespace-nowrap">Section Break</span>
                        <div class="w-full border-t-2 border-dashed border-slate-200"></div>
                    </div>
                </template>

                <!-- CODE / HTML -->
                <template x-if="block.type === 'code'">
                    <div>
                        <textarea x-model="block.content" rows="6" class="w-full bg-slate-900 text-green-400 font-mono text-sm rounded-xl p-5 border-0 focus:ring-2 focus:ring-brand-primary resize-y" placeholder="Paste HTML, embed code, or raw content..."></textarea>
                    </div>
                </template>

                <!-- SPACER -->
                <template x-if="block.type === 'spacer'">
                    <div class="flex items-center gap-3">
                        <label class="text-xs font-bold text-slate-500">Height:</label>
                        <select x-model="block.height" class="bg-slate-50 border border-slate-200 rounded-lg p-2 text-xs font-bold text-slate-600">
                            <option value="small">Small (16px)</option>
                            <option value="medium">Medium (32px)</option>
                            <option value="large">Large (64px)</option>
                            <option value="xlarge">Extra Large (96px)</option>
                        </select>
                    </div>
                </template>

                <!-- GALLERY -->
                <template x-if="block.type === 'gallery'">
                    <div class="space-y-3">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <template x-for="(img, gi) in block.images" :key="gi">
                                <div class="relative rounded-xl overflow-hidden border border-slate-200 aspect-square group/img">
                                    <img :src="img" class="w-full h-full object-cover">
                                    <button type="button" @click="block.images.splice(gi, 1)" class="absolute top-2 right-2 w-6 h-6 bg-red-500 text-white rounded-md flex items-center justify-center opacity-0 group-hover/img:opacity-100 transition text-[10px]"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                            </template>
                            <!-- Add more images -->
                            <div class="border-2 border-dashed border-slate-200 rounded-xl aspect-square flex flex-col items-center justify-center text-center hover:border-brand-primary/40 transition cursor-pointer relative">
                                <input type="file" accept="image/*" multiple @change="uploadGalleryImages($event, index)" class="absolute inset-0 opacity-0 cursor-pointer z-10">
                                <i class="fa-solid fa-plus text-xl text-slate-300 mb-1"></i>
                                <p class="text-[10px] font-bold text-slate-400">Add More</p>
                            </div>
                        </div>
                        <select x-model="block.columns" class="bg-slate-50 border border-slate-200 rounded-lg p-2 text-xs font-bold text-slate-600">
                            <option value="2">2 Columns</option>
                            <option value="3">3 Columns</option>
                            <option value="4">4 Columns</option>
                        </select>
                    </div>
                </template>
            </div>
        </div>
    </template>

    <!-- Empty State -->
    <div x-show="blocks.length === 0" class="bg-white rounded-2xl border-2 border-dashed border-slate-200 p-16 text-center">
        <i class="fa-solid fa-cubes-stacked text-5xl text-slate-200 mb-4 block"></i>
        <h4 class="text-lg font-black text-slate-600 mb-2">Start Building Your Article</h4>
        <p class="text-sm text-slate-400 mb-6">Add content blocks below to compose your article.</p>
    </div>

    <!-- Add Block Panel -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6">
        <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-4"><i class="fa-solid fa-plus-circle mr-1 text-brand-primary"></i> Add Content Block</label>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
            <button type="button" @click="addBlock('heading')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-brand-primary/40 hover:bg-brand-primary/5 transition-all group">
                <i class="fa-solid fa-heading text-xl text-slate-400 group-hover:text-brand-primary transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-brand-primary">Heading</span>
            </button>
            <button type="button" @click="addBlock('paragraph')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-blue-400/40 hover:bg-blue-50/30 transition-all group">
                <i class="fa-solid fa-paragraph text-xl text-slate-400 group-hover:text-blue-500 transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-blue-500">Text</span>
            </button>
            <button type="button" @click="addBlock('image')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-emerald-400/40 hover:bg-emerald-50/30 transition-all group">
                <i class="fa-solid fa-image text-xl text-slate-400 group-hover:text-emerald-500 transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-emerald-500">Image</span>
            </button>
            <button type="button" @click="addBlock('gallery')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-violet-400/40 hover:bg-violet-50/30 transition-all group">
                <i class="fa-solid fa-images text-xl text-slate-400 group-hover:text-violet-500 transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-violet-500">Gallery</span>
            </button>
            <button type="button" @click="addBlock('list')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-amber-400/40 hover:bg-amber-50/30 transition-all group">
                <i class="fa-solid fa-list text-xl text-slate-400 group-hover:text-amber-500 transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-amber-500">List</span>
            </button>
            <button type="button" @click="addBlock('quote')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-rose-400/40 hover:bg-rose-50/30 transition-all group">
                <i class="fa-solid fa-quote-left text-xl text-slate-400 group-hover:text-rose-500 transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-rose-500">Quote</span>
            </button>
            <button type="button" @click="addBlock('code')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-slate-400/40 hover:bg-slate-50/30 transition-all group">
                <i class="fa-solid fa-code text-xl text-slate-400 group-hover:text-slate-700 transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-slate-700">HTML/Code</span>
            </button>
            <button type="button" @click="addBlock('divider')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-slate-300/60 hover:bg-slate-50/30 transition-all group">
                <i class="fa-solid fa-minus text-xl text-slate-400 group-hover:text-slate-600 transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-slate-600">Divider</span>
            </button>
            <button type="button" @click="addBlock('spacer')" class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-100 hover:border-indigo-300/60 hover:bg-indigo-50/30 transition-all group">
                <i class="fa-solid fa-arrows-up-down text-xl text-slate-400 group-hover:text-indigo-500 transition"></i>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-wider group-hover:text-indigo-500">Spacer</span>
            </button>
        </div>
    </div>

    <!-- Block Count Summary -->
    <div x-show="blocks.length > 0" class="text-center py-2">
        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest"><span x-text="blocks.length"></span> content blocks</span>
    </div>
</div>

<script>
function blockBuilder() {
    return {
        blocks: {!! isset($article) && $article->content ? $article->content : '[]' !!},
        activeBlock: null,
        uploadUrl: "{{ route('admin.articles.upload-image') }}",
        csrfToken: "{{ csrf_token() }}",

        addBlock(type) {
            let block = { id: Date.now() + Math.random(), type: type };
            switch (type) {
                case 'heading': block.content = ''; block.level = 'h2'; break;
                case 'paragraph': block.content = ''; break;
                case 'image': block.url = ''; block.caption = ''; block.size = 'full'; break;
                case 'gallery': block.images = []; block.columns = '3'; break;
                case 'list': block.items = ['', '']; block.style = 'unordered'; break;
                case 'quote': block.content = ''; block.author = ''; break;
                case 'code': block.content = ''; break;
                case 'divider': break;
                case 'spacer': block.height = 'medium'; break;
            }
            this.blocks.push(block);
            this.activeBlock = this.blocks.length - 1;
        },

        removeBlock(index) {
            if (confirm('Remove this block?')) {
                this.blocks.splice(index, 1);
                this.activeBlock = null;
            }
        },

        moveBlock(index, direction) {
            let newIdx = index + direction;
            if (newIdx < 0 || newIdx >= this.blocks.length) return;
            let temp = this.blocks[index];
            this.blocks[index] = this.blocks[newIdx];
            this.blocks[newIdx] = temp;
            this.activeBlock = newIdx;
        },

        duplicateBlock(index) {
            let clone = JSON.parse(JSON.stringify(this.blocks[index]));
            clone.id = Date.now() + Math.random();
            this.blocks.splice(index + 1, 0, clone);
        },

        async uploadBlockImage(event, index) {
            const file = event.target.files[0];
            if (!file) return;
            const formData = new FormData();
            formData.append('file', file);
            try {
                const res = await fetch(this.uploadUrl, {
                    method: 'POST',
                    headers: { 'X-CSRF-TOKEN': this.csrfToken },
                    body: formData
                });
                const data = await res.json();
                if (data.location) { this.blocks[index].url = data.location; }
            } catch (err) { alert('Upload failed. Try again.'); }
        },

        async uploadGalleryImages(event, index) {
            const files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                const formData = new FormData();
                formData.append('file', files[i]);
                try {
                    const res = await fetch(this.uploadUrl, {
                        method: 'POST',
                        headers: { 'X-CSRF-TOKEN': this.csrfToken },
                        body: formData
                    });
                    const data = await res.json();
                    if (data.location) { this.blocks[index].images.push(data.location); }
                } catch (err) { console.error(err); }
            }
        },

        blockIcon(type) {
            return { heading: 'fa-solid fa-heading', paragraph: 'fa-solid fa-paragraph', image: 'fa-solid fa-image', gallery: 'fa-solid fa-images', list: 'fa-solid fa-list', quote: 'fa-solid fa-quote-left', code: 'fa-solid fa-code', divider: 'fa-solid fa-minus', spacer: 'fa-solid fa-arrows-up-down' }[type] || 'fa-solid fa-cube';
        },

        blockLabel(type) {
            return { heading: 'Heading', paragraph: 'Text Block', image: 'Image', gallery: 'Image Gallery', list: 'List', quote: 'Blockquote', code: 'HTML / Embed', divider: 'Divider', spacer: 'Spacer' }[type] || type;
        }
    };
}
</script>
