@extends('layouts.admin')

@section('title', $template->id ? 'Edit Invoice Designer' : 'Create Invoice Designer')

@section('content')
<div class="h-[calc(100vh-140px)] -m-8 overflow-hidden bg-slate-50 flex flex-col" x-data="invoiceBuilder({{ json_encode($config) }})">
    <!-- Top Header Bar -->
    <div class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center z-30 shadow-sm">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 bg-brand-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-brand-primary/20">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>
            <div>
                <h2 class="text-lg font-black text-slate-900 tracking-tight leading-none">Design Studio</h2>
                <p class="text-[10px] font-bold text-slate-400 mt-1 uppercase tracking-widest">Building: {{ $template->name ?? 'New Layout' }}</p>
            </div>
        </div>
        
        <div class="flex items-center gap-4">
            <div class="flex items-center bg-slate-100 rounded-xl p-1 gap-1">
                <button @click="zoom -= 0.1" class="w-8 h-8 flex items-center justify-center text-slate-500 hover:bg-white hover:text-brand-primary rounded-lg transition"><i class="fa-solid fa-minus text-xs"></i></button>
                <span class="px-3 text-[10px] font-black text-slate-500" x-text="Math.round(zoom * 100) + '%'"></span>
                <button @click="zoom += 0.1" class="w-8 h-8 flex items-center justify-center text-slate-500 hover:bg-white hover:text-brand-primary rounded-lg transition"><i class="fa-solid fa-plus text-xs"></i></button>
            </div>
            <div class="h-6 w-[1px] bg-slate-200"></div>
            <a href="{{ route('admin.invoice-designer.index') }}" class="px-5 py-2.5 text-slate-500 font-bold text-xs hover:text-slate-900 transition">Discard</a>
            <button @click="saveTemplate" class="px-6 py-2.5 bg-brand-primary text-white rounded-xl font-black text-xs hover:bg-brand-primary/90 transition shadow-lg shadow-brand-primary/20 flex items-center gap-2">
                <i class="fa-solid fa-cloud-arrow-up"></i> Publish Design
            </button>
        </div>
    </div>

    <div class="flex-1 flex overflow-hidden">
        <!-- Left Sidebar: Element Library -->
        <div class="w-72 bg-slate-900 flex flex-col border-r border-slate-800 z-20 overflow-y-auto custom-scrollbar">
            <div class="p-6">
                <h3 class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-6">Elements</h3>
                <div class="grid grid-cols-2 gap-3">
                    <button @click="addRow" class="flex flex-col items-center justify-center p-4 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/10 hover:border-brand-primary transition group">
                        <div class="w-8 h-8 bg-brand-primary/20 rounded-lg flex items-center justify-center text-brand-primary mb-2 group-hover:scale-110 transition">
                            <i class="fa-solid fa-grip-lines"></i>
                        </div>
                        <span class="text-[9px] font-black text-slate-400 uppercase">New Row</span>
                    </button>
                    <button @click="addTable" class="flex flex-col items-center justify-center p-4 bg-white/5 border border-white/10 rounded-2xl hover:bg-white/10 hover:border-brand-primary transition group">
                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center text-blue-400 mb-2 group-hover:scale-110 transition">
                            <i class="fa-solid fa-table"></i>
                        </div>
                        <span class="text-[9px] font-black text-slate-400 uppercase">Items Table</span>
                    </button>
                </div>

                <div class="mt-10">
                    <h3 class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-4">Branding</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-[9px] font-bold text-slate-500 uppercase mb-2">Typography</label>
                            <select x-model="config.font_family" class="w-full bg-white/5 border border-white/10 rounded-xl p-3 text-xs font-bold text-slate-300 outline-none focus:border-brand-primary transition">
                                <option value="Helvetica">Helvetica / Arial</option>
                                <option value="Times">Times New Roman</option>
                                <option value="Courier">Courier</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[9px] font-bold text-slate-500 uppercase mb-2">Primary Color</label>
                            <div class="flex gap-2">
                                <input type="color" x-model="config.primary_color" class="h-10 w-10 rounded-lg border-0 bg-transparent p-1 cursor-pointer">
                                <input type="text" x-model="config.primary_color" class="flex-1 bg-white/5 border border-white/10 rounded-xl px-3 outline-none text-xs font-mono font-bold text-brand-primary">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <h3 class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-4">Dynamic Variables</h3>
                    <div class="space-y-2">
                        <template x-for="v in variables">
                            <button @click="copyVar(v.tag)" class="w-full group flex items-center justify-between p-3 bg-white/5 border border-white/10 rounded-xl hover:bg-brand-primary/10 hover:border-brand-primary transition text-left">
                                <span class="text-[10px] font-mono text-emerald-400" x-text="v.tag"></span>
                                <i class="fa-solid fa-copy text-[10px] text-slate-600 group-hover:text-brand-primary transition"></i>
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Center: Interactive Canvas -->
        <div class="flex-1 overflow-y-auto bg-slate-200 p-12 custom-scrollbar flex flex-col items-center">
            <div id="canvas-container" 
                 class="bg-white shadow-[0_32px_64px_-15px_rgba(0,0,0,0.2)] rounded-sm min-h-[1122px] w-[794px] transition-all origin-top relative"
                 :style="{ fontFamily: config.font_family + ', sans-serif', transform: 'scale(' + zoom + ')' }">
                
                <!-- Watermark / Guide -->
                <div class="absolute inset-0 border-[20px] border-slate-50/50 pointer-events-none"></div>

                <div id="layout-canvas" class="p-12 space-y-4 relative z-10">
                    <template x-for="(row, rowIndex) in config.blocks" :key="row.id">
                        <div class="group relative rounded-xl transition-all" 
                             :class="{ 'hover:ring-2 hover:ring-brand-primary/30 p-2': row.type === 'row' }"
                             :style="{ marginTop: (row.spacing_top || 0) + 'px' }">
                            
                            <!-- Enhanced Row Actions -->
                            <div class="absolute -right-16 top-0 opacity-0 group-hover:opacity-100 transition-all flex flex-col gap-1 translate-x-4 group-hover:translate-x-0">
                                <button @click="moveRow(rowIndex, -1)" class="w-10 h-10 bg-white shadow-xl rounded-xl flex items-center justify-center text-slate-400 hover:text-brand-primary transition"><i class="fa-solid fa-chevron-up text-xs"></i></button>
                                <button @click="removeRow(rowIndex)" class="w-10 h-10 bg-white shadow-xl rounded-xl flex items-center justify-center text-red-400 hover:bg-red-50 transition"><i class="fa-solid fa-trash-can text-xs"></i></button>
                                <button @click="moveRow(rowIndex, 1)" class="w-10 h-10 bg-white shadow-xl rounded-xl flex items-center justify-center text-slate-400 hover:text-brand-primary transition"><i class="fa-solid fa-chevron-down text-xs"></i></button>
                            </div>

                            <template x-if="row.type === 'row'">
                                <div class="flex gap-6">
                                    <template x-for="(col, colIndex) in row.columns" :key="colIndex">
                                        <div :style="{ width: col.width }" 
                                             class="relative min-h-[40px] rounded-lg border border-dashed border-transparent hover:border-slate-200 transition p-2"
                                             @click.stop="selectCol(rowIndex, colIndex)">
                                            
                                            <div class="space-y-4">
                                                <template x-for="(block, blockIndex) in col.blocks" :key="blockIndex">
                                                    <div @click.stop="selectBlock(rowIndex, colIndex, blockIndex)" 
                                                         class="relative group/block rounded-lg transition-all"
                                                         :class="isSelected(rowIndex, colIndex, blockIndex) ? 'ring-2 ring-brand-primary p-2' : 'hover:bg-slate-50 p-2'">
                                                        
                                                        <template x-if="block.type === 'text'">
                                                            <div :style="{ textAlign: block.align || 'left', color: block.color || 'inherit', fontSize: (block.size || 11) + 'pt', fontWeight: block.weight || 'normal' }" 
                                                                 class="whitespace-pre-wrap leading-relaxed" 
                                                                 x-html="renderText(block.content)"></div>
                                                        </template>

                                                        <template x-if="block.type === 'image'">
                                                            <div :style="{ textAlign: block.align || 'left' }">
                                                                <div class="inline-block bg-slate-100/50 p-4 rounded-2xl border border-slate-200/50 backdrop-blur-sm" :style="{ width: (block.width || 100) + 'px' }">
                                                                    <div class="flex flex-col items-center gap-2">
                                                                        <i class="fa-solid" :class="block.src === 'logo' ? 'fa-image text-blue-400' : 'fa-signature text-emerald-400'"></i>
                                                                        <span class="text-[8px] font-black text-slate-400 uppercase" x-text="block.src"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </template>
                                            </div>

                                            <button @click.stop="addBlock(rowIndex, colIndex)" class="mt-4 w-full py-2 bg-slate-50 border border-dashed border-slate-200 rounded-lg text-[8px] font-black text-slate-400 uppercase tracking-widest hover:bg-white hover:text-brand-primary hover:border-brand-primary opacity-0 group-hover:opacity-100 transition-all">
                                                <i class="fa-solid fa-plus mr-1"></i> Add Element
                                            </button>
                                        </div>
                                    </template>
                                </div>
                            </template>

                            <template x-if="row.type === 'items_table'">
                                <div class="w-full mt-6">
                                    <div class="rounded-2xl overflow-hidden border" :style="{ borderColor: row.border_color || '#e2e8f0' }">
                                        <table class="w-full border-collapse">
                                            <thead>
                                                <tr :style="{ backgroundColor: row.header_bg || '#f8fafc' }">
                                                    <th class="p-4 text-[10px] font-black uppercase text-left tracking-widest" :style="{ color: row.header_text || '#64748b' }">Item Description</th>
                                                    <th class="p-4 text-[10px] font-black uppercase text-right tracking-widest" :style="{ color: row.header_text || '#64748b' }">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b" :style="{ borderColor: row.border_color || '#f1f5f9' }">
                                                    <td class="p-4 text-xs font-bold text-slate-600">Dynamic Order Items will appear here...</td>
                                                    <td class="p-4 text-xs font-black text-slate-900 text-right">₹ 0.00</td>
                                                </tr>
                                                <tr x-show="true">
                                                    <td class="p-4 text-right text-[10px] font-black uppercase text-slate-400">Total Amount</td>
                                                    <td class="p-4 text-right text-lg font-black text-slate-900">₹ 0.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex justify-end mt-2">
                                        <button @click.stop="selectRow(rowIndex)" class="text-[9px] font-black text-brand-primary uppercase hover:underline">Edit Table Styles</button>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Documentation Area (Sleek) -->
            <div class="w-[794px] mt-12 bg-white rounded-3xl border border-slate-200 p-10 shadow-sm">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 bg-brand-primary/10 rounded-2xl flex items-center justify-center text-brand-primary">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-slate-900 tracking-tight">Designer Documentation</h3>
                        <p class="text-sm font-bold text-slate-400 mt-1 uppercase tracking-widest">Mastering the Design Studio</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-10">
                    <div class="space-y-6">
                        <h4 class="text-xs font-black text-slate-900 uppercase tracking-widest flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span> Vendor Variables
                        </h4>
                        <div class="space-y-3">
                            <template x-for="v in variables.slice(0,3)">
                                <div class="flex items-center justify-between p-3 bg-slate-50 rounded-xl border border-slate-100 group">
                                    <code class="text-[10px] font-black text-brand-primary" x-text="v.tag"></code>
                                    <span class="text-[9px] font-bold text-slate-400 uppercase" x-text="v.label"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h4 class="text-xs font-black text-slate-900 uppercase tracking-widest flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> Client Variables
                        </h4>
                        <div class="space-y-3">
                            <template x-for="v in variables.slice(3,6)">
                                <div class="flex items-center justify-between p-3 bg-emerald-50/50 rounded-xl border border-emerald-100 group">
                                    <code class="text-[10px] font-black text-emerald-600" x-text="v.tag"></code>
                                    <span class="text-[9px] font-bold text-slate-400 uppercase" x-text="v.label"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar: Inspector (Dark Mode) -->
        <div class="w-80 bg-white border-l border-slate-200 z-20 flex flex-col overflow-y-auto custom-scrollbar">
            <template x-if="selected">
                <div class="flex-1 flex flex-col">
                    <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                        <div>
                            <h3 class="text-sm font-black text-slate-900 tracking-tight">Element Inspector</h3>
                            <p class="text-[9px] font-black text-slate-400 uppercase mt-0.5 tracking-widest" x-text="selectedBlock ? selectedBlock.type : 'Row Settings'"></p>
                        </div>
                        <button @click="selected = null" class="w-8 h-8 flex items-center justify-center text-slate-400 hover:text-slate-900 hover:bg-white rounded-lg transition"><i class="fa-solid fa-xmark"></i></button>
                    </div>

                    <div class="p-6 space-y-8">
                        <!-- Spacing -->
                        <div class="space-y-3">
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Layout Spacing</label>
                            <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100">
                                <i class="fa-solid fa-arrows-up-down text-slate-400"></i>
                                <input type="range" x-model="selectedRow.spacing_top" min="0" max="200" step="10" class="flex-1 accent-brand-primary">
                                <span class="text-xs font-black text-slate-600 w-10 text-right" x-text="selectedRow.spacing_top + 'px'"></span>
                            </div>
                        </div>

                        <template x-if="selectedBlock">
                            <div class="space-y-8">
                                <template x-if="selectedBlock.type === 'text'">
                                    <div class="space-y-6">
                                        <div class="space-y-3">
                                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Content Editor</label>
                                            <textarea x-model="selectedBlock.content" rows="8" class="w-full bg-slate-50 border border-slate-200 rounded-2xl p-4 text-xs font-medium outline-none focus:ring-4 focus:ring-brand-primary/5 focus:border-brand-primary transition"></textarea>
                                        </div>
                                        
                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="space-y-3">
                                                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Font Size</label>
                                                <input type="number" x-model="selectedBlock.size" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-black outline-none">
                                            </div>
                                            <div class="space-y-3">
                                                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Alignment</label>
                                                <div class="flex bg-slate-50 p-1 rounded-xl border border-slate-100">
                                                    <button @click="selectedBlock.align = 'left'" :class="selectedBlock.align === 'left' ? 'bg-white text-brand-primary shadow-sm' : 'text-slate-400'" class="flex-1 py-2 rounded-lg transition"><i class="fa-solid fa-align-left text-[10px]"></i></button>
                                                    <button @click="selectedBlock.align = 'center'" :class="selectedBlock.align === 'center' ? 'bg-white text-brand-primary shadow-sm' : 'text-slate-400'" class="flex-1 py-2 rounded-lg transition"><i class="fa-solid fa-align-center text-[10px]"></i></button>
                                                    <button @click="selectedBlock.align = 'right'" :class="selectedBlock.align === 'right' ? 'bg-white text-brand-primary shadow-sm' : 'text-slate-400'" class="flex-1 py-2 rounded-lg transition"><i class="fa-solid fa-align-right text-[10px]"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-y-3">
                                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Text Color</label>
                                            <div class="flex gap-3 bg-slate-50 p-3 rounded-2xl border border-slate-100">
                                                <input type="color" x-model="selectedBlock.color" class="h-8 w-8 rounded-lg border-0 bg-transparent cursor-pointer">
                                                <input type="text" x-model="selectedBlock.color" class="flex-1 bg-transparent border-0 outline-none text-xs font-mono font-bold text-slate-600">
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <template x-if="selectedBlock.type === 'image'">
                                    <div class="space-y-6">
                                        <div class="space-y-3">
                                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Asset Type</label>
                                            <select x-model="selectedBlock.src" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 text-xs font-bold text-slate-600 outline-none">
                                                <option value="logo">Company Logo</option>
                                                <option value="signature">Authorized Signature</option>
                                            </select>
                                        </div>
                                        <div class="space-y-3">
                                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Image Width (px)</label>
                                            <input type="number" x-model="selectedBlock.width" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 text-xs font-black outline-none">
                                        </div>
                                    </div>
                                </template>

                                <div class="pt-6 border-t border-slate-100">
                                    <button @click="removeBlock" class="w-full py-4 bg-red-50 text-red-500 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-red-500 hover:text-white transition group flex items-center justify-center gap-2">
                                        <i class="fa-solid fa-trash-can group-hover:animate-bounce"></i> Delete Block
                                    </button>
                                </div>
                            </div>
                        </template>

                        <template x-if="selectedRow.type === 'items_table'">
                            <div class="space-y-6">
                                <div class="space-y-3">
                                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Header Theme</label>
                                    <div class="flex gap-3 bg-slate-50 p-3 rounded-2xl border border-slate-100">
                                        <input type="color" x-model="selectedRow.header_bg" class="h-8 w-8 rounded-lg border-0 bg-transparent cursor-pointer">
                                        <div class="flex-1 text-[10px] font-bold text-slate-500">Background Color</div>
                                    </div>
                                    <div class="flex gap-3 bg-slate-50 p-3 rounded-2xl border border-slate-100">
                                        <input type="color" x-model="selectedRow.header_text" class="h-8 w-8 rounded-lg border-0 bg-transparent cursor-pointer">
                                        <div class="flex-1 text-[10px] font-bold text-slate-500">Text Color</div>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">Grid Borders</label>
                                    <div class="flex gap-3 bg-slate-50 p-3 rounded-2xl border border-slate-100">
                                        <input type="color" x-model="selectedRow.border_color" class="h-8 w-8 rounded-lg border-0 bg-transparent cursor-pointer">
                                        <div class="flex-1 text-[10px] font-bold text-slate-500">Border Color</div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </template>
            
            <template x-if="!selected">
                <div class="flex-1 flex flex-col items-center justify-center p-10 text-center">
                    <div class="w-16 h-16 bg-slate-50 rounded-3xl flex items-center justify-center text-slate-300 mb-6 border border-slate-100">
                        <i class="fa-solid fa-mouse-pointer text-2xl"></i>
                    </div>
                    <h4 class="text-sm font-black text-slate-900 tracking-tight">Nothing Selected</h4>
                    <p class="text-xs text-slate-400 font-medium mt-2 leading-relaxed">Click any element on the canvas to customize its properties here.</p>
                </div>
            </template>
        </div>
    </div>
</div>

<script>
function invoiceBuilder(initialConfig) {
    return {
        config: initialConfig,
        selected: null,
        zoom: 0.8,
        variables: [
            { tag: '@{{ company_name }}', label: 'Our Company' },
            { tag: '@{{ company_address }}', label: 'Our Address' },
            { tag: '@{{ company_gstin }}', label: 'Our GSTIN' },
            { tag: '@{{ user_name }}', label: 'Client Name' },
            { tag: '@{{ user_address }}', label: 'Client Address' },
            { tag: '@{{ user_email }}', label: 'Client Email' },
            { tag: '@{{ invoice_no }}', label: 'Invoice #' },
            { tag: '@{{ date }}', label: 'Billing Date' },
            { tag: '@{{ total }}', label: 'Grand Total' },
            { tag: '@{{ status }}', label: 'Payment Status' },
        ],
        
        get selectedRow() {
            return this.selected ? this.config.blocks[this.selected.row] : null;
        },
        
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
                spacing_top: 20,
                columns: [
                    { width: '100%', blocks: [] }
                ]
            });
        },

        addTable() {
            this.config.blocks.push({
                id: 'table_' + Date.now(),
                type: 'items_table',
                header_bg: '#f8fafc',
                header_text: '#64748b',
                border_color: '#e2e8f0',
                spacing_top: 40
            });
        },

        addBlock(rowIndex, colIndex) {
            this.config.blocks[rowIndex].columns[colIndex].blocks.push({
                type: 'text',
                content: 'New Text Block',
                align: 'left',
                size: 11,
                color: '#0f172a'
            });
            this.selectBlock(rowIndex, colIndex, this.config.blocks[rowIndex].columns[colIndex].blocks.length - 1);
        },

        selectBlock(row, col, block) { this.selected = { row, col, block }; },
        selectCol(row, col) { this.selected = { row, col, block: null }; },
        selectRow(index) { this.selected = { row: index, col: 0, block: null }; },

        isSelected(row, col, block) {
            return this.selected && this.selected.row === row && this.selected.col === col && this.selected.block === block;
        },

        removeRow(index) {
            if (confirm('Delete this entire row?')) {
                this.config.blocks.splice(index, 1);
                this.selected = null;
            }
        },

        removeBlock() {
            if (this.selected && this.selected.block !== null) {
                this.config.blocks[this.selected.row].columns[this.selected.col].blocks.splice(this.selected.block, 1);
                this.selected = null;
            }
        },

        moveRow(index, direction) {
            const newIndex = index + direction;
            if (newIndex >= 0 && newIndex < this.config.blocks.length) {
                const row = this.config.blocks.splice(index, 1)[0];
                this.config.blocks.splice(newIndex, 0, row);
            }
        },

        copyVar(tag) {
            navigator.clipboard.writeText(tag);
            alert('Copied placeholder: ' + tag);
        },

        async saveTemplate() {
            const name = prompt('Template Name:', '{{ $template->name ?? 'New Layout' }}');
            if (!name) return;

            const formData = new FormData();
            formData.append('name', name);
            formData.append('config', JSON.stringify(this.config));
            formData.append('_token', '{{ csrf_token() }}');
            @if($template->id)
                formData.append('_method', 'PUT');
            @endif

            try {
                const url = @if($template->id) "{{ route('admin.invoice-designer.update', $template->id) }}" @else "{{ route('admin.invoice-designer.store') }}" @endif;
                const resp = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: { 'Accept': 'application/json' }
                });
                
                if (resp.ok) {
                    window.location.href = "{{ route('admin.invoice-designer.index') }}";
                } else {
                    const err = await resp.json();
                    alert('Error: ' + (err.message || 'Failed to save'));
                }
            } catch (e) {
                console.error(e);
                alert('Connection error');
            }
        }
    }
}
</script>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 5px; height: 5px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(0,0,0,0.1); border-radius: 10px; }
    .w-72.custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); }
    
    [x-cloak] { display: none !important; }
    
    input[type="range"] {
        -webkit-appearance: none;
        height: 4px;
        border-radius: 2px;
        background: #e2e8f0;
    }
</style>
@endsection
