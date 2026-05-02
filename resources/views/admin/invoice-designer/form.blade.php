@extends('layouts.admin')

@section('title', $template->id ? 'Edit Invoice Layout' : 'Create Invoice Layout')

@section('content')
<div class="max-w-[1600px] mx-auto" x-data="invoiceBuilder({{ json_encode($config) }})">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight">Invoice Layout Builder</h2>
            <p class="text-slate-500 font-bold mt-1 flex items-center gap-2">
                <i class="fa-solid fa-wand-magic-sparkles text-brand-primary"></i> 
                Drag, drop and design your professional invoice with live variables.
            </p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.invoice-designer.index') }}" class="px-6 py-3 bg-white border border-slate-200 text-slate-600 rounded-2xl font-bold text-sm hover:bg-slate-50 transition">Cancel</a>
            <button @click="saveTemplate" class="px-8 py-3.5 bg-brand-primary text-white rounded-2xl font-black text-sm hover:bg-brand-primary/90 transition shadow-xl shadow-brand-primary/20 flex items-center gap-2">
                <i class="fa-solid fa-floppy-disk"></i> Save Design
            </button>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-8 items-start">
        <!-- Sidebar: Elements & Variables -->
        <div class="col-span-3 space-y-6 sticky top-8">
            <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="p-5 border-b border-slate-50 bg-slate-50/50">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest">Available Elements</h3>
                </div>
                <div class="p-4 grid grid-cols-2 gap-3">
                    <button @click="addRow" class="flex flex-col items-center justify-center p-4 bg-slate-50 border border-dashed border-slate-200 rounded-2xl hover:border-brand-primary hover:bg-brand-primary/5 transition group">
                        <i class="fa-solid fa-grip-lines text-slate-400 group-hover:text-brand-primary mb-2"></i>
                        <span class="text-[10px] font-black text-slate-500 group-hover:text-brand-primary uppercase">New Row</span>
                    </button>
                    <button @click="addTable" class="flex flex-col items-center justify-center p-4 bg-slate-50 border border-dashed border-slate-200 rounded-2xl hover:border-brand-primary hover:bg-brand-primary/5 transition group">
                        <i class="fa-solid fa-table text-slate-400 group-hover:text-brand-primary mb-2"></i>
                        <span class="text-[10px] font-black text-slate-500 group-hover:text-brand-primary uppercase">Items Table</span>
                    </button>
                </div>
            </div>

            <!-- Global Styles -->
            <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="p-5 border-b border-slate-50 bg-slate-50/50">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest">Global Styles</h3>
                </div>
                <div class="p-5 space-y-4">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">Main Font</label>
                        <select x-model="config.font_family" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-bold outline-none focus:border-brand-primary">
                            <option value="Helvetica">Helvetica / Arial</option>
                            <option value="Times">Times New Roman</option>
                            <option value="Courier">Courier</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">Primary Color</label>
                        <div class="flex gap-2">
                            <input type="color" x-model="config.primary_color" class="h-10 w-10 rounded-lg border border-slate-200 p-1 cursor-pointer">
                            <input type="text" x-model="config.primary_color" class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-3 outline-none text-xs font-mono font-bold">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Variables -->
            <div class="bg-slate-900 rounded-3xl shadow-xl overflow-hidden p-6 text-white">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-4">Live Variables</h3>
                <p class="text-[10px] text-slate-500 mb-4 font-bold">Click to copy placeholder</p>
                <div class="space-y-2 max-h-60 overflow-y-auto pr-2 custom-scrollbar">
                    <template x-for="v in variables">
                        <button @click="copyVar(v.tag)" class="w-full flex items-center justify-between p-2 bg-slate-800 rounded-lg hover:bg-slate-700 transition group">
                            <span class="text-[10px] font-mono text-emerald-400" x-text="v.tag"></span>
                            <span class="text-[9px] font-bold text-slate-500 uppercase group-hover:text-white" x-text="v.label"></span>
                        </button>
                    </template>
                </div>
            </div>
        </div>

        <!-- Main Canvas -->
        <div class="col-span-6 space-y-6">
            <div class="bg-white rounded-[40px] shadow-2xl border border-slate-200 min-h-[1000px] p-12 overflow-hidden relative" :style="{ fontFamily: config.font_family + ', sans-serif' }">
                <!-- Drop Zone for Blocks -->
                <div id="layout-canvas" class="space-y-4 min-h-[900px]">
                    <template x-for="(row, rowIndex) in config.blocks" :key="row.id">
                        <div class="group relative p-2 rounded-2xl hover:bg-brand-primary/5 transition-all" 
                             :style="{ marginTop: (row.spacing_top || 0) + 'px' }">
                            
                            <!-- Row Controls -->
                            <div class="absolute -left-12 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col gap-2">
                                <button @click="moveRow(rowIndex, -1)" class="w-8 h-8 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-400 hover:text-brand-primary shadow-sm"><i class="fa-solid fa-chevron-up"></i></button>
                                <button @click="removeRow(rowIndex)" class="w-8 h-8 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-400 hover:text-red-500 shadow-sm"><i class="fa-solid fa-trash"></i></button>
                                <button @click="moveRow(rowIndex, 1)" class="w-8 h-8 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-400 hover:text-brand-primary shadow-sm"><i class="fa-solid fa-chevron-down"></i></button>
                            </div>

                            <!-- Row Content -->
                            <template x-if="row.type === 'row'">
                                <div class="flex gap-4">
                                    <template x-for="(col, colIndex) in row.columns" :key="colIndex">
                                        <div :style="{ width: col.width }" class="border border-dashed border-transparent hover:border-brand-primary/30 rounded-xl p-2 min-h-[50px] relative cursor-pointer" @click.stop="selectCol(rowIndex, colIndex)">
                                            
                                            <div class="space-y-4">
                                                <template x-for="(block, blockIndex) in col.blocks" :key="blockIndex">
                                                    <div @click.stop="selectBlock(rowIndex, colIndex, blockIndex)" 
                                                         class="relative p-2 rounded-lg hover:ring-2 hover:ring-brand-primary transition cursor-move"
                                                         :class="{ 'ring-2 ring-brand-primary': isSelected(rowIndex, colIndex, blockIndex) }">
                                                        
                                                        <!-- Text Block -->
                                                        <template x-if="block.type === 'text'">
                                                            <div :style="{ textAlign: block.align || 'left', color: block.color || 'inherit', fontSize: (block.size || 12) + 'pt', fontWeight: block.weight || 'normal' }" 
                                                                 class="prose prose-sm max-w-none" 
                                                                 x-html="renderText(block.content)"></div>
                                                        </template>

                                                        <!-- Image Block -->
                                                        <template x-if="block.type === 'image'">
                                                            <div :style="{ textAlign: block.align || 'left' }">
                                                                <div class="inline-block bg-slate-50 p-2 rounded-lg border border-slate-100" :style="{ width: (block.width || 100) + 'px' }">
                                                                    <template x-if="block.src === 'logo'">
                                                                        <div class="text-[8px] font-black text-slate-400 uppercase text-center">Company Logo</div>
                                                                    </template>
                                                                    <template x-if="block.src === 'signature'">
                                                                        <div class="text-[8px] font-black text-slate-400 uppercase text-center">Authorized Signature</div>
                                                                    </template>
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </template>
                                            </div>

                                            <button @click.stop="addBlock(rowIndex, colIndex)" class="mt-2 w-full py-2 border border-dashed border-slate-200 rounded-lg text-[9px] font-black text-slate-400 uppercase hover:border-brand-primary hover:text-brand-primary opacity-0 group-hover:opacity-100 transition-opacity">Add Block</button>
                                        </div>
                                    </template>
                                </div>
                            </template>

                            <template x-if="row.type === 'items_table'">
                                <div class="w-full border-t-2 pt-4" :style="{ borderTopColor: row.border_color || config.primary_color }">
                                    <table class="w-full text-left">
                                        <thead>
                                            <tr :style="{ backgroundColor: row.header_bg || '#f8fafc' }">
                                                <th class="p-3 text-[10px] font-black uppercase" :style="{ color: row.header_text || '#64748b' }">Description</th>
                                                <th class="p-3 text-[10px] font-black uppercase text-right" :style="{ color: row.header_text || '#64748b' }">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-slate-100">
                                                <td class="p-3 text-xs font-bold text-slate-600 italic">Sample Item Placeholder</td>
                                                <td class="p-3 text-xs font-black text-slate-900 text-right">₹ 1,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </template>

                        </div>
                    </template>
                </div>
            </div>
        </div>

        <!-- Right: Inspector -->
        <div class="col-span-3 space-y-6 sticky top-8">
            <template x-if="selected">
                <div class="bg-white rounded-3xl shadow-xl border border-slate-200 overflow-hidden">
                    <div class="p-5 border-b border-slate-50 bg-slate-50/50 flex justify-between items-center">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-widest">Block Settings</h3>
                        <button @click="selected = null" class="text-slate-400 hover:text-slate-600"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    
                    <div class="p-6 space-y-6">
                        <!-- Spacing -->
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Spacing Top (px)</label>
                            <input type="number" x-model="selectedRow.spacing_top" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-sm font-bold outline-none">
                        </div>

                        <template x-if="selectedBlock">
                            <div class="space-y-6">
                                <!-- Type specific controls -->
                                <template x-if="selectedBlock.type === 'text'">
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Content (Supports HTML)</label>
                                            <textarea x-model="selectedBlock.content" rows="6" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-medium outline-none focus:border-brand-primary"></textarea>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Size (pt)</label>
                                                <input type="number" x-model="selectedBlock.size" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-bold outline-none">
                                            </div>
                                            <div>
                                                <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Align</label>
                                                <select x-model="selectedBlock.align" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-bold outline-none">
                                                    <option value="left">Left</option>
                                                    <option value="center">Center</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Color</label>
                                            <div class="flex gap-2">
                                                <input type="color" x-model="selectedBlock.color" class="h-10 w-10 rounded-lg border border-slate-200 p-1 cursor-pointer">
                                                <input type="text" x-model="selectedBlock.color" class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-3 outline-none text-xs font-mono font-bold">
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <template x-if="selectedBlock.type === 'image'">
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Image Source</label>
                                            <select x-model="selectedBlock.src" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-bold outline-none">
                                                <option value="logo">Company Logo</option>
                                                <option value="signature">Authorized Signature</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Width (px)</label>
                                            <input type="number" x-model="selectedBlock.width" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-bold outline-none">
                                        </div>
                                        <div>
                                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Align</label>
                                            <select x-model="selectedBlock.align" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-bold outline-none">
                                                <option value="left">Left</option>
                                                <option value="center">Center</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                </template>

                                <button @click="removeBlock" class="w-full py-3 bg-red-50 text-red-600 rounded-xl text-xs font-black uppercase hover:bg-red-100 transition">Remove Block</button>
                            </div>
                        </template>

                        <template x-if="selectedRow.type === 'items_table'">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Header BG Color</label>
                                    <input type="color" x-model="selectedRow.header_bg" class="h-10 w-full rounded-lg border border-slate-200 p-1 cursor-pointer">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Header Text Color</label>
                                    <input type="color" x-model="selectedRow.header_text" class="h-10 w-full rounded-lg border border-slate-200 p-1 cursor-pointer">
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Border Color</label>
                                    <input type="color" x-model="selectedRow.border_color" class="h-10 w-full rounded-lg border border-slate-200 p-1 cursor-pointer">
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </template>

            <div class="bg-brand-primary rounded-3xl p-6 text-white shadow-xl shadow-brand-primary/20">
                <h4 class="text-xs font-black uppercase tracking-widest mb-2 opacity-60">Pro Tip</h4>
                <p class="text-sm font-bold leading-relaxed">Use <span class="font-mono text-brand-primary bg-white px-1 rounded">@{{ var_name }}</span> anywhere to inject dynamic data from the submission.</p>
            </div>
        </div>
    <!-- Help & Documentation Section -->
    <div class="mt-16 bg-white rounded-[40px] shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-8 border-b border-slate-50 bg-slate-50/30">
            <h3 class="text-xl font-black text-slate-900 flex items-center gap-3">
                <i class="fa-solid fa-circle-question text-brand-primary"></i>
                Design & Variable Documentation
            </h3>
            <p class="text-sm font-bold text-slate-500 mt-1">Learn how to use dynamic placeholders to personalize your invoices.</p>
        </div>
        
        <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Vendor Details -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-brand-primary/10 rounded-xl flex items-center justify-center text-brand-primary">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <h4 class="text-sm font-black text-slate-800 uppercase tracking-wider">Vendor (Our) Details</h4>
                </div>
                <div class="space-y-4">
                    <p class="text-xs text-slate-500 font-medium leading-relaxed">These tags pull information from your **Global Settings** or the **Template Config**. Use them to show your company identity.</p>
                    <div class="bg-slate-50 rounded-2xl border border-slate-100 divide-y divide-slate-100 overflow-hidden">
                        <div class="p-4 flex justify-between items-center group cursor-pointer hover:bg-white transition" @click="copyVar('{{ company_name }}')">
                            <code class="text-[10px] font-black text-brand-primary bg-white px-2 py-1 rounded-lg border border-slate-200">@{{ company_name }}</code>
                            <span class="text-[10px] font-bold text-slate-400 group-hover:text-slate-700">Company Legal Name</span>
                        </div>
                        <div class="p-4 flex justify-between items-center group cursor-pointer hover:bg-white transition" @click="copyVar('{{ company_address }}')">
                            <code class="text-[10px] font-black text-brand-primary bg-white px-2 py-1 rounded-lg border border-slate-200">@{{ company_address }}</code>
                            <span class="text-[10px] font-bold text-slate-400 group-hover:text-slate-700">Registered Office Address</span>
                        </div>
                        <div class="p-4 flex justify-between items-center group cursor-pointer hover:bg-white transition" @click="copyVar('{{ company_gstin }}')">
                            <code class="text-[10px] font-black text-brand-primary bg-white px-2 py-1 rounded-lg border border-slate-200">@{{ company_gstin }}</code>
                            <span class="text-[10px] font-bold text-slate-400 group-hover:text-slate-700">GST Registration Number</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Details -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-600">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h4 class="text-sm font-black text-slate-800 uppercase tracking-wider">Client (User) Details</h4>
                </div>
                <div class="space-y-4">
                    <p class="text-xs text-slate-500 font-medium leading-relaxed">These tags are replaced automatically with the details of the **User** receiving the invoice.</p>
                    <div class="bg-emerald-50/30 rounded-2xl border border-emerald-100 divide-y divide-emerald-100 overflow-hidden">
                        <div class="p-4 flex justify-between items-center group cursor-pointer hover:bg-white transition" @click="copyVar('{{ user_name }}')">
                            <code class="text-[10px] font-black text-emerald-600 bg-white px-2 py-1 rounded-lg border border-emerald-100">@{{ user_name }}</code>
                            <span class="text-[10px] font-bold text-slate-400 group-hover:text-slate-700">Client's Full Name</span>
                        </div>
                        <div class="p-4 flex justify-between items-center group cursor-pointer hover:bg-white transition" @click="copyVar('{{ user_address }}')">
                            <code class="text-[10px] font-black text-emerald-600 bg-white px-2 py-1 rounded-lg border border-emerald-100">@{{ user_address }}</code>
                            <span class="text-[10px] font-bold text-slate-400 group-hover:text-slate-700">Billing Address</span>
                        </div>
                        <div class="p-4 flex justify-between items-center group cursor-pointer hover:bg-white transition" @click="copyVar('{{ user_email }}')">
                            <code class="text-[10px] font-black text-emerald-600 bg-white px-2 py-1 rounded-lg border border-emerald-100">@{{ user_email }}</code>
                            <span class="text-[10px] font-bold text-slate-400 group-hover:text-slate-700">Registered Email ID</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pro Tips Card -->
        <div class="m-8 p-6 bg-slate-900 rounded-[30px] flex items-center justify-between text-white shadow-2xl shadow-slate-900/20">
            <div class="flex items-center gap-6">
                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-2xl">
                    💡
                </div>
                <div>
                    <h5 class="text-sm font-black uppercase tracking-widest text-emerald-400">Pro Design Tip</h5>
                    <p class="text-xs font-medium text-slate-400 mt-1">You can combine tags in a single text block: <br><span class="text-white font-mono">Bill To: @{{ user_name }} (@{{ user_email }})</span></p>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="px-4 py-2 bg-white/5 border border-white/10 rounded-xl text-[10px] font-black uppercase tracking-tighter">
                    Full HTML Support Enabled
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function invoiceBuilder(initialConfig) {
    return {
        config: initialConfig,
        selected: null, // { row, col, block }
        variables: [
            { tag: '{{ company_name }}', label: 'Our Company' },
            { tag: '{{ company_address }}', label: 'Our Address' },
            { tag: '{{ company_gstin }}', label: 'Our GSTIN' },
            { tag: '{{ user_name }}', label: 'Client Name' },
            { tag: '{{ user_address }}', label: 'Client Address' },
            { tag: '{{ user_email }}', label: 'Client Email' },
            { tag: '{{ invoice_no }}', label: 'Invoice #' },
            { tag: '{{ date }}', label: 'Billing Date' },
            { tag: '{{ total }}', label: 'Grand Total' },
            { tag: '{{ status }}', label: 'Payment Status' },
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
            // Replace line breaks for visual preview
            return content.replace(/\n/g, '<br>');
        },

        addRow() {
            const id = 'row_' + Date.now();
            this.config.blocks.push({
                id: id,
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

        selectBlock(row, col, block) {
            this.selected = { row, col, block };
        },

        selectCol(row, col) {
            this.selected = { row, col, block: null };
        },

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
            alert('Copied: ' + tag);
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
    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: rgba(0,0,0,0.1); }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 10px; }
</style>
@endsection
