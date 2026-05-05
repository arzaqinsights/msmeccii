@extends('layouts.admin')

@section('title', $template->id ? 'Edit Invoice Designer' : 'Create Invoice Designer')

@section('content')
<div class="space-y-6" x-data="invoiceBuilder({{ json_encode($config) }}, {{ json_encode($presets) }})">
    <!-- Header Section -->
    <div class="flex justify-between items-center bg-white p-6 rounded-lg border border-slate-200 shadow-sm">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 bg-brand-primary rounded-lg flex items-center justify-center text-white shadow-lg">
                <i class="fa-solid fa-palette text-lg"></i>
            </div>
            <div>
                <h2 class="text-lg font-black text-slate-900 tracking-tight">Invoice Design Studio</h2>
                <p class="text-[10px] font-bold text-slate-400 mt-1 uppercase tracking-widest">Designing: {{ $template->name ?? 'New Template' }}</p>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <div class="flex items-center gap-1 bg-slate-100 p-1 rounded-lg mr-4">
                <button @click="undo" :disabled="historyIndex <= 0" class="w-8 h-8 flex items-center justify-center text-slate-500 hover:text-brand-primary disabled:opacity-30 disabled:hover:text-slate-500 transition">
                    <i class="fa-solid fa-rotate-left text-xs"></i>
                </button>
                <button @click="redo" :disabled="historyIndex >= history.length - 1" class="w-8 h-8 flex items-center justify-center text-slate-500 hover:text-brand-primary disabled:opacity-30 disabled:hover:text-slate-500 transition">
                    <i class="fa-solid fa-rotate-right text-xs"></i>
                </button>
            </div>
            <a href="{{ route('admin.invoice-designer.index') }}" class="px-4 py-2 text-slate-500 font-bold text-xs hover:text-slate-900 transition">Back</a>
            <button @click="saveTemplate" class="px-6 py-2 bg-brand-primary text-white rounded-lg font-black text-xs hover:bg-brand-primary/90 transition shadow-lg flex items-center gap-2">
                <i class="fa-solid fa-floppy-disk"></i> Save Design
            </button>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <!-- Sidebar: Elements & Controls -->
        <div class="col-span-12 lg:col-span-4 space-y-6">
            
            <!-- Element Library -->
            <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-slate-50 bg-slate-50/50 flex justify-between items-center">
                    <h3 class="text-[10px] font-black text-slate-900 uppercase tracking-widest">Element Library</h3>
                    <div class="flex gap-1">
                        <button @click="addRow" class="w-6 h-6 flex items-center justify-center bg-brand-primary/10 text-brand-primary rounded hover:bg-brand-primary hover:text-white transition" title="Add Row">
                            <i class="fa-solid fa-plus text-[10px]"></i>
                        </button>
                    </div>
                </div>
                <div class="p-4 grid grid-cols-2 gap-3">
                    <button @click="addRow" class="flex flex-col items-center justify-center p-3 bg-slate-50 border border-dashed border-slate-200 rounded-lg hover:border-brand-primary hover:bg-brand-primary/5 transition group">
                        <i class="fa-solid fa-grip-lines text-slate-400 group-hover:text-brand-primary mb-1 text-sm"></i>
                        <span class="text-[8px] font-black text-slate-500 uppercase">New Row</span>
                    </button>
                    <button @click="addTable" class="flex flex-col items-center justify-center p-3 bg-slate-50 border border-dashed border-slate-200 rounded-lg hover:border-brand-primary hover:bg-brand-primary/5 transition group">
                        <i class="fa-solid fa-table text-slate-400 group-hover:text-brand-primary mb-1 text-sm"></i>
                        <span class="text-[8px] font-black text-slate-500 uppercase">Items Table</span>
                    </button>
                </div>
            </div>

            <!-- Design Presets -->
            <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-slate-50 bg-amber-50/50">
                    <h3 class="text-[10px] font-black text-amber-900 uppercase tracking-widest">Design Presets</h3>
                </div>
                <div class="p-4 grid grid-cols-1 gap-2">
                    <template x-for="preset in presets" :key="preset.id">
                        <button @click="loadPreset(preset)" class="flex items-center justify-between p-3 bg-slate-50 border border-slate-100 rounded-lg hover:border-brand-primary hover:bg-white transition group">
                            <span class="text-[9px] font-black text-slate-700 uppercase" x-text="preset.name"></span>
                            <i class="fa-solid fa-magic-wand-sparkles text-slate-300 group-hover:text-brand-primary text-[10px]"></i>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Global Branding -->
            <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-slate-50 bg-slate-50/50">
                    <h3 class="text-[10px] font-black text-slate-900 uppercase tracking-widest">Branding</h3>
                </div>
                <div class="p-4 space-y-4">
                    <div>
                        <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Font Family</label>
                        <select x-model="config.font_family" @change="saveHistory" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-2 text-xs font-bold text-slate-700 outline-none focus:border-brand-primary">
                            <option value="Helvetica">Helvetica</option>
                            <option value="Times">Times New Roman</option>
                            <option value="Courier">Courier</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[9px] font-black text-slate-400 uppercase mb-1">Brand Color</label>
                        <div class="flex gap-2 p-2 bg-slate-50 rounded-lg border border-slate-200">
                            <input type="color" x-model="config.primary_color" @change="saveHistory" class="h-8 w-8 rounded border-0 bg-transparent cursor-pointer">
                            <input type="text" x-model="config.primary_color" @input="saveHistory" class="flex-1 bg-transparent border-0 outline-none text-xs font-mono font-bold text-brand-primary uppercase">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inspector (Dynamic) -->
            <div x-show="selected" x-transition class="bg-slate-900 rounded-lg shadow-xl overflow-hidden p-6 text-white relative">
                <button @click="selected = null" class="absolute top-4 right-4 text-slate-500 hover:text-white transition"><i class="fa-solid fa-xmark text-sm"></i></button>
                <h3 class="text-[10px] font-black text-emerald-400 uppercase tracking-widest mb-6">Settings</h3>

                <div class="space-y-6">
                    <div class="space-y-3">
                        <label class="block text-[9px] font-black text-slate-500 uppercase tracking-widest">Top Spacing (px)</label>
                        <input type="range" x-model="selectedRow.spacing_top" @input="saveHistory()" min="0" max="150" step="1" class="w-full accent-emerald-500">
                        <div class="flex justify-between text-[9px] font-black text-slate-600">
                            <span x-text="(selectedRow.spacing_top || 0) + 'px'"></span>
                        </div>
                    </div>
                    <div class="space-y-3 border-t border-slate-800 pt-4">
                        <label class="block text-[9px] font-black text-slate-500 uppercase tracking-widest">Bottom Spacing (px)</label>
                        <input type="range" x-model="selectedRow.spacing_bottom" @input="saveHistory()" min="0" max="150" step="1" class="w-full accent-emerald-500">
                        <div class="flex justify-between text-[9px] font-black text-slate-600">
                            <span x-text="(selectedRow.spacing_bottom || 0) + 'px'"></span>
                        </div>
                    </div>

                    <template x-if="selectedBlock">
                        <div class="space-y-6 pt-6 border-t border-slate-800">
                            <template x-if="selectedBlock.type === 'text'">
                                <div class="space-y-4">
                                    <div class="space-y-2">
                                        <label class="block text-[9px] font-black text-slate-500 uppercase tracking-widest">Content</label>
                                        <textarea x-model="selectedBlock.content" @input="saveHistory" rows="4" class="w-full bg-slate-800 border border-slate-700 rounded-lg p-3 text-xs font-medium text-slate-200 outline-none focus:border-emerald-500"></textarea>
                                    </div>
                                    <div class="space-y-4 pt-4 border-t border-slate-800">
                                        <label class="block text-[9px] font-black text-slate-500 uppercase tracking-widest">Text Formatting</label>
                                        <div class="flex flex-wrap gap-2">
                                            <button @mousedown.prevent @click="document.execCommand('bold')" class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center hover:bg-brand-primary transition" title="Bold">
                                                <i class="fa-solid fa-bold text-xs"></i>
                                            </button>
                                            <button @mousedown.prevent @click="document.execCommand('italic')" class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center hover:bg-brand-primary transition" title="Italic">
                                                <i class="fa-solid fa-italic text-xs"></i>
                                            </button>
                                            <button @mousedown.prevent @click="document.execCommand('underline')" class="w-8 h-8 bg-slate-800 rounded flex items-center justify-center hover:bg-brand-primary transition" title="Underline">
                                                <i class="fa-solid fa-underline text-xs"></i>
                                            </button>
                                            <div class="flex items-center gap-1 bg-slate-800 rounded p-1">
                                                <input type="color" @input="document.execCommand('foreColor', false, $event.target.value)" class="w-6 h-6 rounded border-0 bg-transparent cursor-pointer">
                                                <span class="text-[8px] font-black uppercase text-slate-500 mr-1">Color</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div>
                                            <label class="block text-[9px] font-black text-slate-500 uppercase mb-1">Size (pt)</label>
                                            <input type="number" x-model="selectedBlock.size" @input="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded-lg p-2 text-xs font-black outline-none">
                                        </div>
                                        <div>
                                            <label class="block text-[9px] font-black text-slate-500 uppercase mb-1">Align</label>
                                            <select x-model="selectedBlock.align" @change="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded-lg p-2 text-xs font-black outline-none">
                                                <option value="left">Left</option>
                                                <option value="center">Center</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="space-y-4 pt-4 border-t border-slate-800">
                                        <div class="space-y-3">
                                            <label class="block text-[9px] font-black text-slate-500 uppercase tracking-widest">Line Height (<span x-text="selectedBlock.line_height || 1.2"></span>)</label>
                                            <input type="range" x-model="selectedBlock.line_height" @input="saveHistory()" min="0.8" max="3.0" step="0.1" class="w-full accent-emerald-500">
                                        </div>
                                        <div class="space-y-3">
                                            <label class="block text-[9px] font-black text-slate-500 uppercase tracking-widest">Letter Spacing (<span x-text="selectedBlock.letter_spacing || 0"></span>px)</label>
                                            <input type="range" x-model="selectedBlock.letter_spacing" @input="saveHistory()" min="-1" max="10" step="0.5" class="w-full accent-emerald-500">
                                        </div>
                                        <div class="space-y-3">
                                            <label class="block text-[9px] font-black text-slate-500 uppercase tracking-widest">Bottom Spacing (<span x-text="selectedBlock.margin_bottom || 0"></span>px)</label>
                                            <input type="range" x-model="selectedBlock.margin_bottom" @input="saveHistory()" min="0" max="100" step="1" class="w-full accent-emerald-500">
                                        </div>
                                    </div>
                                </div>
                            </template>

                            <template x-if="selectedBlock.type === 'image'">
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-[9px] font-black text-slate-500 uppercase mb-1">Source</label>
                                        <select x-model="selectedBlock.src" @change="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded-lg p-3 text-xs font-black outline-none">
                                            <option value="logo">Logo</option>
                                            <option value="signature">Signature</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-[9px] font-black text-slate-500 uppercase mb-1">Width (px)</label>
                                        <input type="number" x-model="selectedBlock.width" @input="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded-lg p-3 text-xs font-black outline-none">
                                    </div>
                                </div>
                            </template>

                            <button @click="removeBlock" class="w-full py-3 bg-red-500/10 text-red-500 border border-red-500/20 rounded-lg text-[9px] font-black uppercase hover:bg-red-500 hover:text-white transition">Delete Element</button>
                        </div>
                    </template>

                    <template x-if="selectedRow && selectedRow.type === 'items_table'">
                        <div class="space-y-6 pt-6 border-t border-slate-800">
                            <h4 class="text-[9px] font-black text-emerald-400 uppercase tracking-widest">Table & Tax Settings</h4>
                            
                            <!-- Header Styles -->
                            <div class="space-y-3">
                                <label class="block text-[9px] font-black text-slate-500 uppercase">Header Style</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">BG Color</label>
                                        <input type="color" x-model="selectedRow.header_bg" @change="saveHistory" class="h-8 w-full rounded border-0 bg-transparent cursor-pointer">
                                    </div>
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Text Color</label>
                                        <input type="color" x-model="selectedRow.header_text" @change="saveHistory" class="h-8 w-full rounded border-0 bg-transparent cursor-pointer">
                                    </div>
                                </div>
                            </div>

                            <!-- Row Styles -->
                            <div class="space-y-3 border-t border-slate-800 pt-4">
                                <label class="block text-[9px] font-black text-slate-500 uppercase">Items Row Style</label>
                                <div class="grid grid-cols-3 gap-2">
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Size</label>
                                        <input type="number" x-model="selectedRow.row_size" @input="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded p-2 text-[10px] font-black outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Color</label>
                                        <input type="color" x-model="selectedRow.row_color" @change="saveHistory" class="h-8 w-full rounded border-0 bg-transparent cursor-pointer">
                                    </div>
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Weight</label>
                                        <select x-model="selectedRow.row_weight" @change="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded p-1.5 text-[8px] font-black outline-none">
                                            <option value="normal">Thin</option>
                                            <option value="bold">Bold</option>
                                            <option value="black">Black</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Tax & Footer Styles -->
                            <div class="space-y-3 border-t border-slate-800 pt-4">
                                <label class="block text-[9px] font-black text-slate-500 uppercase">Tax & Total Style</label>
                                <div class="grid grid-cols-2 gap-3 mb-3">
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Tax Label</label>
                                        <input type="text" x-model="selectedRow.tax_label" @input="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded p-2 text-[10px] font-black outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Tax (%)</label>
                                        <input type="number" x-model="selectedRow.tax_percent" @input="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded p-2 text-[10px] font-black outline-none">
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2">
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Size</label>
                                        <input type="number" x-model="selectedRow.footer_size" @input="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded p-2 text-[10px] font-black outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Color</label>
                                        <input type="color" x-model="selectedRow.footer_color" @change="saveHistory" class="h-8 w-full rounded border-0 bg-transparent cursor-pointer">
                                    </div>
                                    <div>
                                        <label class="block text-[8px] font-bold text-slate-600 uppercase mb-1">Weight</label>
                                        <select x-model="selectedRow.footer_weight" @change="saveHistory" class="w-full bg-slate-800 border border-slate-700 rounded p-1.5 text-[8px] font-black outline-none">
                                            <option value="normal">Thin</option>
                                            <option value="bold">Bold</option>
                                            <option value="900">Black</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Separated Help Sections -->
            <div class="space-y-4">
                <!-- Our Company Details -->
                <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-4 border-b border-slate-50 bg-slate-50/50">
                        <h3 class="text-[9px] font-black text-slate-900 uppercase tracking-widest">Our Company Tags</h3>
                    </div>
                    <div class="p-3 grid grid-cols-1 gap-1">
                        <template x-for="v in vendorVariables">
                            <button @click="copyVar(v.tag)" class="p-2 bg-slate-50 rounded-lg border border-slate-100 text-left hover:border-brand-primary transition flex justify-between items-center group">
                                <code class="text-[9px] font-black text-brand-primary" x-text="v.tag"></code>
                                <span class="text-[8px] font-bold text-slate-400 uppercase opacity-0 group-hover:opacity-100 transition" x-text="v.label"></span>
                            </button>
                        </template>
                    </div>
                </div>

                <!-- Client Details -->
                <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-4 border-b border-slate-50 bg-emerald-50/30">
                        <h3 class="text-[9px] font-black text-emerald-900 uppercase tracking-widest">Client (User) Tags</h3>
                    </div>
                    <div class="p-3 grid grid-cols-1 gap-1 max-h-[300px] overflow-y-auto">
                        <template x-for="v in userVariables">
                            <button @click="copyVar(v.tag)" class="p-2 bg-slate-50 rounded-lg border border-slate-100 text-left hover:border-emerald-500 transition flex justify-between items-center group">
                                <code class="text-[9px] font-black text-emerald-600" x-text="v.tag"></code>
                                <span class="text-[8px] font-bold text-slate-400 uppercase opacity-0 group-hover:opacity-100 transition" x-text="v.label"></span>
                            </button>
                        </template>
                    </div>
                </div>

                <!-- Invoice Details -->
                <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-4 border-b border-slate-50 bg-blue-50/30">
                        <h3 class="text-[9px] font-black text-blue-900 uppercase tracking-widest">Invoice Meta Tags</h3>
                    </div>
                    <div class="p-3 grid grid-cols-1 gap-1">
                        <template x-for="v in metaVariables">
                            <button @click="copyVar(v.tag)" class="p-2 bg-slate-50 rounded-lg border border-slate-100 text-left hover:border-blue-500 transition flex justify-between items-center group">
                                <code class="text-[9px] font-black text-blue-600" x-text="v.tag"></code>
                                <span class="text-[8px] font-bold text-slate-400 uppercase opacity-0 group-hover:opacity-100 transition" x-text="v.label"></span>
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Canvas: Real-time Preview -->
        <div class="col-span-12 lg:col-span-8">
            <div class="flex justify-center bg-slate-200/50 p-8 rounded-xl border border-slate-200 overflow-auto max-h-[calc(100vh-200px)]">
                <div class="bg-white shadow-[0_0_50px_rgba(0,0,0,0.1)] relative overflow-hidden" 
                     :style="{ 
                        fontFamily: config.font_family + ', sans-serif',
                        width: '210mm',
                        minHeight: '297mm',
                        padding: '15mm'
                     }">
                
                <div id="layout-canvas" class="space-y-2">
                    <template x-for="(row, rowIndex) in config.blocks" :key="row.id">
                        <div class="relative group p-1 rounded-lg transition-all" 
                             :class="{ 'hover:bg-slate-50': row.type === 'row' }"
                             :style="{ marginTop: (row.spacing_top || 0) + 'px', marginBottom: (row.spacing_bottom || 0) + 'px' }">
                            
                            <!-- Row Controls -->
                            <div class="absolute -left-10 top-0 opacity-0 group-hover:opacity-100 transition-all flex flex-col gap-1">
                                <button @click="moveRow(rowIndex, -1)" class="w-7 h-7 bg-white shadow border border-slate-100 rounded-lg flex items-center justify-center text-slate-400 hover:text-brand-primary transition"><i class="fa-solid fa-chevron-up text-[9px]"></i></button>
                                <button @click="removeRow(rowIndex)" class="w-7 h-7 bg-white shadow border border-slate-100 rounded-lg flex items-center justify-center text-red-400 hover:bg-red-50 transition"><i class="fa-solid fa-trash-can text-[9px]"></i></button>
                                <button @click="moveRow(rowIndex, 1)" class="w-7 h-7 bg-white shadow border border-slate-100 rounded-lg flex items-center justify-center text-slate-400 hover:text-brand-primary transition"><i class="fa-solid fa-chevron-down text-[9px]"></i></button>
                            </div>

                            <template x-if="row.type === 'row'">
                                <div class="flex gap-4">
                                    <template x-for="(col, colIndex) in row.columns" :key="colIndex">
                                        <div :style="{ width: col.width }" 
                                             class="relative min-h-[40px] p-2 rounded-lg border border-dashed border-transparent hover:border-slate-200 transition cursor-pointer"
                                             @click.stop="selectCol(rowIndex, colIndex)">
                                            
                                            <div class="space-y-2">
                                                <template x-for="(block, blockIndex) in col.blocks" :key="blockIndex">
                                                    <div @click.stop="selectBlock(rowIndex, colIndex, blockIndex)" 
                                                         class="relative rounded-lg transition-all"
                                                         :class="isSelected(rowIndex, colIndex, blockIndex) ? 'ring-1 ring-brand-primary p-2 bg-white shadow-sm' : 'hover:bg-white/80 p-2'">
                                                        
                                                        <template x-if="block.type === 'text'">
                                                            <div :style="{ 
                                                                    textAlign: block.align || 'left', 
                                                                    color: block.color || 'inherit', 
                                                                    fontSize: (block.size || 11) + 'pt', 
                                                                    fontWeight: block.weight || 'normal', 
                                                                    lineHeight: block.line_height || 1.2,
                                                                    letterSpacing: (block.letter_spacing || 0) + 'px',
                                                                    marginBottom: (block.margin_bottom || 0) + 'px'
                                                                 }" 
                                                                 class="outline-none focus:ring-1 focus:ring-brand-primary/20 rounded p-1 transition-all"
                                                                 contenteditable="true"
                                                                 x-init="$el.innerHTML = block.content"
                                                                 @input="block.content = $el.innerHTML; saveHistory()"
                                                                 @blur="saveHistory()"
                                                                 @keydown.enter="if(!event.shiftKey) { event.preventDefault(); document.execCommand('insertLineBreak'); }"
                                                                 x-effect="if (document.activeElement !== $el && $el.innerHTML !== block.content) $el.innerHTML = block.content"></div>
                                                        </template>

                                                        <template x-if="block.type === 'image'">
                                                            <div :style="{ textAlign: block.align || 'left' }">
                                                                <div class="inline-block bg-slate-50 p-2 rounded-lg border border-slate-200" :style="{ width: (block.width || 100) + 'px' }">
                                                                    <div class="flex flex-col items-center gap-1">
                                                                        <i class="fa-solid text-slate-400 text-xs" :class="block.src === 'logo' ? 'fa-image' : 'fa-signature'"></i>
                                                                        <span class="text-[7px] font-black text-slate-400 uppercase" x-text="block.src"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </template>
                                            </div>

                                            <button @click.stop="addBlock(rowIndex, colIndex)" class="mt-2 w-full py-1 bg-slate-50 border border-dashed border-slate-200 rounded-lg text-[8px] font-black text-slate-400 uppercase tracking-widest hover:text-brand-primary hover:border-brand-primary opacity-0 group-hover:opacity-100 transition-all">Add Block</button>
                                        </div>
                                    </template>
                                </div>
                            </template>

                            <template x-if="row.type === 'items_table'">
                                <div class="w-full border-t pt-4" :style="{ borderTopColor: row.border_color || config.primary_color }">
                                    <table class="w-full border-collapse border border-slate-300">
                                        <thead>
                                            <tr :style="{ backgroundColor: row.header_bg || '#f8fafc' }" class="border-b border-slate-300">
                                                <th class="p-3 text-[9px] font-black uppercase text-left tracking-wider outline-none focus:bg-white border-r border-slate-300" 
                                                    contenteditable="true"
                                                    @input="row.label_description = $event.target.innerText; saveHistory()"
                                                    x-effect="if (document.activeElement !== $el && $el.innerText !== row.label_description) $el.innerText = row.label_description"
                                                    :style="{ color: row.header_text || '#64748b' }">Description</th>
                                                <th class="p-3 text-[9px] font-black uppercase text-right tracking-wider outline-none focus:bg-white" 
                                                    contenteditable="true"
                                                    @input="row.label_amount = $event.target.innerText; saveHistory()"
                                                    :style="{ color: row.header_text || '#64748b' }">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-slate-300">
                                            <tr class="border-b border-slate-300">
                                                <td class="p-3 font-medium border-r border-slate-300" :style="{ fontSize: (row.row_size || 11) + 'pt', color: row.row_color || '#64748b', fontWeight: row.row_weight || 'normal' }">Sample item name...</td>
                                                <td class="p-3 text-right" :style="{ fontSize: (row.row_size || 11) + 'pt', color: row.row_color || '#0f172a', fontWeight: row.row_weight || 'black' }">₹ 100.00</td>
                                            </tr>
                                            <template x-if="(row.tax_percent || 0) > 0">
                                                <tr>
                                                    <td class="p-2 text-right uppercase" x-text="(row.tax_label || 'Tax') + ' (' + (row.tax_percent || 0) + '%)'" :style="{ fontSize: (row.footer_size || 10) + 'pt', color: row.footer_color || '#94a3b8', fontWeight: '900' }"></td>
                                                    <td class="p-2 text-right" x-text="'₹ ' + (100 * (row.tax_percent || 0)/100).toFixed(2)" :style="{ fontSize: (row.footer_size || 10) + 'pt', color: row.footer_color || '#0f172a', fontWeight: row.footer_weight || '900' }"></td>
                                                </tr>
                                            </template>
                                            <tr>
                                                <td class="p-2 text-right uppercase" :style="{ fontSize: (row.footer_size || 11) + 'pt', color: row.footer_color || '#94a3b8', fontWeight: '900' }">Total</td>
                                                <td class="p-2 text-right font-black" x-text="'₹ ' + (100 * (1 + (row.tax_percent || 0)/100)).toFixed(2)" :style="{ fontSize: ((row.footer_size || 11) + 2) + 'pt', color: row.footer_color || '#0f172a', fontWeight: row.footer_weight || '900' }"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="mt-2 flex justify-end">
                                        <button @click.stop="selectRow(rowIndex)" class="text-[8px] font-black text-brand-primary uppercase hover:underline">Edit Table & Tax</button>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function invoiceBuilder(initialConfig, presets) {
    return {
        config: initialConfig,
        presets: presets,
        selected: null,
        history: [],
        historyIndex: -1,
        
        init() {
            this.saveHistory();
        },

        saveHistory() {
            const currentState = JSON.stringify(this.config);
            if (this.historyIndex > -1 && currentState === this.history[this.historyIndex]) return;
            
            // Remove future states if we were in middle of undo
            this.history = this.history.slice(0, this.historyIndex + 1);
            this.history.push(currentState);
            this.historyIndex++;
            
            // Cap history at 50 steps
            if (this.history.length > 50) {
                this.history.shift();
                this.historyIndex--;
            }
        },

        undo() {
            if (this.historyIndex > 0) {
                this.historyIndex--;
                this.config = JSON.parse(this.history[this.historyIndex]);
            }
        },

        redo() {
            if (this.historyIndex < this.history.length - 1) {
                this.historyIndex++;
                this.config = JSON.parse(this.history[this.historyIndex]);
            }
        },

        vendorVariables: [
            { tag: '@{{ company_name }}', label: 'Company Name' },
            { tag: '@{{ company_address }}', label: 'Company Address' },
            { tag: '@{{ company_gstin }}', label: 'Company GSTIN' },
        ],
        userVariables: [
            { tag: '@{{ user_name }}', label: 'Full Name' },
            { tag: '@{{ user_email }}', label: 'Email ID' },
            { tag: '@{{ user_company_name }}', label: 'Company Name' },
            { tag: '@{{ user_designation }}', label: 'Designation' },
            { tag: '@{{ user_address }}', label: 'Full Address' },
            { tag: '@{{ user_city }}', label: 'City' },
            { tag: '@{{ user_pincode }}', label: 'Pincode' },
            { tag: '@{{ user_country }}', label: 'Country' },
            { tag: '@{{ user_gstin }}', label: 'GSTIN' },
            { tag: '@{{ user_website }}', label: 'Website' },
            { tag: '@{{ user_phone_number }}', label: 'Phone' },
            { tag: '@{{ user_industry_sector }}', label: 'Sector' },
            { tag: '@{{ user_membership_status }}', label: 'Status' },
        ],
        metaVariables: [
            { tag: '@{{ invoice_no }}', label: 'Invoice Number' },
            { tag: '@{{ date }}', label: 'Billing Date' },
            { tag: '@{{ total }}', label: 'Grand Total' },
            { tag: '@{{ subtotal }}', label: 'Subtotal' },
            { tag: '@{{ tax_amount }}', label: 'Tax Amount' },
            { tag: '@{{ tax_label }}', label: 'Tax Name (GST/VAT)' },
            { tag: '@{{ status }}', label: 'Payment Status' },
        ],
        
        get selectedRow() { return this.selected ? this.config.blocks[this.selected.row] : null; },
        get selectedBlock() {
            if (!this.selected || this.selected.block === null) return null;
            return this.config.blocks[this.selected.row].columns[this.selected.col].blocks[this.selected.block];
        },

        renderText(content) {
            if (!content) return '';
            return content.replace(/\n/g, '<br>');
        },

        addRow() {
            this.config.blocks.push({
                id: 'row_' + Date.now(),
                type: 'row',
                spacing_top: 10,
                columns: [{ width: '100%', blocks: [] }]
            });
            this.saveHistory();
        },

        addTable() {
            this.config.blocks.push({
                id: 'table_' + Date.now(),
                type: 'items_table',
                header_bg: '#f8fafc',
                header_text: '#64748b',
                border_color: '#e2e8f0',
                spacing_top: 20,
                tax_label: 'GST',
                tax_percent: 18
            });
            this.saveHistory();
        },

        addBlock(rowIndex, colIndex) {
            this.config.blocks[rowIndex].columns[colIndex].blocks.push({
                type: 'text',
                content: 'Sample text...',
                align: 'left',
                size: 10,
                color: '#0f172a'
            });
            this.selectBlock(rowIndex, colIndex, this.config.blocks[rowIndex].columns[colIndex].blocks.length - 1);
            this.saveHistory();
        },

        selectBlock(row, col, block) { this.selected = { row, col, block }; },
        selectCol(row, col) { this.selected = { row, col, block: null }; },
        selectRow(index) { this.selected = { row: index, col: 0, block: null }; },
        isSelected(row, col, block) { return this.selected && this.selected.row === row && this.selected.col === col && this.selected.block === block; },

        removeRow(index) { if (confirm('Delete row?')) { this.config.blocks.splice(index, 1); this.selected = null; this.saveHistory(); } },
        removeBlock() { if (this.selected && this.selected.block !== null) { this.config.blocks[this.selected.row].columns[this.selected.col].blocks.splice(this.selected.block, 1); this.selected = null; this.saveHistory(); } },
        moveRow(index, direction) {
            const newIndex = index + direction;
            if (newIndex >= 0 && newIndex < this.config.blocks.length) {
                const row = this.config.blocks.splice(index, 1)[0];
                this.config.blocks.splice(newIndex, 0, row);
                this.saveHistory();
            }
        },

        copyVar(tag) { navigator.clipboard.writeText(tag); alert('Copied: ' + tag); },

        loadPreset(preset) {
            if (confirm('Load "' + preset.name + '"? This will replace your current design.')) {
                this.config = JSON.parse(JSON.stringify(preset.config));
                this.selected = null;
                this.saveHistory();
            }
        },

        async saveTemplate() {
            const name = prompt('Template Name:', '{{ $template->name ?? 'New Layout' }}');
            if (!name) return;

            const formData = new FormData();
            formData.append('name', name);
            formData.append('config', JSON.stringify(this.config));
            formData.append('_token', '{{ csrf_token() }}');
            @if($template->id) formData.append('_method', 'PUT'); @endif

            try {
                const url = @if($template->id) "{{ route('admin.invoice-designer.update', $template->id) }}" @else "{{ route('admin.invoice-designer.store') }}" @endif;
                const resp = await fetch(url, { method: 'POST', body: formData, headers: { 'Accept': 'application/json' } });
                if (resp.ok) window.location.href = "{{ route('admin.invoice-designer.index') }}";
                else { const err = await resp.json(); alert('Error: ' + (err.message || 'Failed to save')); }
            } catch (e) { console.error(e); alert('Connection error'); }
        }
    }
}
</script>
@endsection
