@extends('layouts.admin')

@section('title', $template->id ? 'Edit Invoice Designer' : 'Create Invoice Designer')

@section('content')
<div class="space-y-8" x-data="invoiceBuilder({{ json_encode($config) }})">
    <!-- Header Section -->
    <div class="flex justify-between items-center bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-brand-primary rounded-2xl flex items-center justify-center text-white shadow-lg shadow-brand-primary/20">
                <i class="fa-solid fa-palette text-xl"></i>
            </div>
            <div>
                <h2 class="text-xl font-black text-slate-900 tracking-tight">Invoice Design Studio</h2>
                <p class="text-xs font-bold text-slate-400 mt-1 uppercase tracking-widest">Designing: {{ $template->name ?? 'New Template' }}</p>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.invoice-designer.index') }}" class="px-5 py-2.5 text-slate-500 font-bold text-sm hover:text-slate-900 transition">Back</a>
            <button @click="saveTemplate" class="px-8 py-3 bg-brand-primary text-white rounded-2xl font-black text-sm hover:bg-brand-primary/90 transition shadow-xl shadow-brand-primary/20 flex items-center gap-2">
                <i class="fa-solid fa-floppy-disk"></i> Save Design
            </button>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-8">
        <!-- Sidebar: Elements & Controls -->
        <div class="col-span-12 lg:col-span-4 space-y-6">
            
            <!-- Element Library -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-slate-50 bg-slate-50/50 flex justify-between items-center">
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-widest">Element Library</h3>
                    <span class="px-2 py-1 bg-brand-primary/10 text-brand-primary text-[8px] font-black rounded-lg uppercase">Add Blocks</span>
                </div>
                <div class="p-6 grid grid-cols-2 gap-4">
                    <button @click="addRow" class="flex flex-col items-center justify-center p-5 bg-slate-50 border-2 border-dashed border-slate-200 rounded-2xl hover:border-brand-primary hover:bg-brand-primary/5 transition group">
                        <i class="fa-solid fa-grip-lines text-slate-400 group-hover:text-brand-primary mb-2 text-lg"></i>
                        <span class="text-[10px] font-black text-slate-500 uppercase group-hover:text-brand-primary">New Row</span>
                    </button>
                    <button @click="addTable" class="flex flex-col items-center justify-center p-5 bg-slate-50 border-2 border-dashed border-slate-200 rounded-2xl hover:border-brand-primary hover:bg-brand-primary/5 transition group">
                        <i class="fa-solid fa-table text-slate-400 group-hover:text-brand-primary mb-2 text-lg"></i>
                        <span class="text-[10px] font-black text-slate-500 uppercase group-hover:text-brand-primary">Items Table</span>
                    </button>
                </div>
            </div>

            <!-- Global Branding -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-slate-50 bg-slate-50/50">
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-widest">Global Branding</h3>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Typography</label>
                        <select x-model="config.font_family" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-sm font-bold text-slate-700 outline-none focus:border-brand-primary">
                            <option value="Helvetica">Helvetica / Arial</option>
                            <option value="Times">Times New Roman</option>
                            <option value="Courier">Courier</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase mb-2">Primary Theme Color</label>
                        <div class="flex gap-3 p-3 bg-slate-50 rounded-2xl border border-slate-200">
                            <input type="color" x-model="config.primary_color" class="h-10 w-10 rounded-xl border-0 bg-transparent cursor-pointer">
                            <input type="text" x-model="config.primary_color" class="flex-1 bg-transparent border-0 outline-none text-sm font-mono font-bold text-brand-primary uppercase">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inspector (Dynamic) -->
            <div x-show="selected" x-transition class="bg-slate-900 rounded-3xl shadow-2xl overflow-hidden p-8 text-white relative">
                <button @click="selected = null" class="absolute top-6 right-6 text-slate-500 hover:text-white transition"><i class="fa-solid fa-xmark"></i></button>
                
                <h3 class="text-xs font-black text-emerald-400 uppercase tracking-[0.2em] mb-8">Block Inspector</h3>

                <div class="space-y-8">
                    <!-- Row Spacing -->
                    <div class="space-y-4">
                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest">Top Spacing (px)</label>
                        <input type="range" x-model="selectedRow.spacing_top" min="0" max="150" step="10" class="w-full accent-emerald-500">
                        <div class="flex justify-between text-[10px] font-black text-slate-600">
                            <span>0px</span>
                            <span class="text-emerald-400" x-text="selectedRow.spacing_top + 'px'"></span>
                            <span>150px</span>
                        </div>
                    </div>

                    <template x-if="selectedBlock">
                        <div class="space-y-8 pt-8 border-t border-slate-800">
                            <template x-if="selectedBlock.type === 'text'">
                                <div class="space-y-6">
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest">Content Editor</label>
                                        <textarea x-model="selectedBlock.content" rows="6" class="w-full bg-slate-800 border border-slate-700 rounded-2xl p-4 text-xs font-medium text-slate-200 outline-none focus:border-emerald-500 transition"></textarea>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="space-y-3">
                                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest">Size (pt)</label>
                                            <input type="number" x-model="selectedBlock.size" class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-xs font-black outline-none">
                                        </div>
                                        <div class="space-y-3">
                                            <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest">Align</label>
                                            <select x-model="selectedBlock.align" class="w-full bg-slate-800 border border-slate-700 rounded-xl p-3 text-xs font-black outline-none">
                                                <option value="left">Left</option>
                                                <option value="center">Center</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </template>

                            <template x-if="selectedBlock.type === 'image'">
                                <div class="space-y-6">
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest">Asset Source</label>
                                        <select x-model="selectedBlock.src" class="w-full bg-slate-800 border border-slate-700 rounded-xl p-4 text-xs font-black outline-none">
                                            <option value="logo">Company Logo</option>
                                            <option value="signature">Authorized Signature</option>
                                        </select>
                                    </div>
                                    <div class="space-y-3">
                                        <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest">Width (px)</label>
                                        <input type="number" x-model="selectedBlock.width" class="w-full bg-slate-800 border border-slate-700 rounded-xl p-4 text-xs font-black outline-none">
                                    </div>
                                </div>
                            </template>

                            <button @click="removeBlock" class="w-full py-4 bg-red-500/10 text-red-500 border border-red-500/20 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-red-500 hover:text-white transition">Delete Element</button>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Help Section -->
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
                <h3 class="text-[10px] font-black text-slate-900 uppercase tracking-widest mb-4">Quick Variables</h3>
                <div class="grid grid-cols-2 gap-2">
                    <template x-for="v in variables">
                        <button @click="copyVar(v.tag)" class="p-2 bg-slate-50 rounded-lg border border-slate-100 text-left hover:border-brand-primary transition group">
                            <code class="text-[9px] font-black text-brand-primary block" x-text="v.tag"></code>
                            <span class="text-[8px] font-bold text-slate-400 uppercase" x-text="v.label"></span>
                        </button>
                    </template>
                </div>
            </div>
        </div>

        <!-- Canvas: Real-time Preview -->
        <div class="col-span-12 lg:col-span-8">
            <div class="bg-white rounded-[40px] shadow-2xl border border-slate-200 p-12 min-h-[1000px] relative overflow-hidden" :style="{ fontFamily: config.font_family + ', sans-serif' }">
                
                <!-- Layout Canvas -->
                <div id="layout-canvas" class="space-y-4">
                    <template x-for="(row, rowIndex) in config.blocks" :key="row.id">
                        <div class="relative group p-2 rounded-2xl transition-all" 
                             :class="{ 'hover:bg-slate-50': row.type === 'row' }"
                             :style="{ marginTop: (row.spacing_top || 0) + 'px' }">
                            
                            <!-- Row Controls -->
                            <div class="absolute -left-12 top-0 opacity-0 group-hover:opacity-100 transition-all flex flex-col gap-2">
                                <button @click="moveRow(rowIndex, -1)" class="w-8 h-8 bg-white shadow-md rounded-full flex items-center justify-center text-slate-400 hover:text-brand-primary transition"><i class="fa-solid fa-chevron-up text-[10px]"></i></button>
                                <button @click="removeRow(rowIndex)" class="w-8 h-8 bg-white shadow-md rounded-full flex items-center justify-center text-red-400 hover:bg-red-50 transition"><i class="fa-solid fa-trash-can text-[10px]"></i></button>
                                <button @click="moveRow(rowIndex, 1)" class="w-8 h-8 bg-white shadow-md rounded-full flex items-center justify-center text-slate-400 hover:text-brand-primary transition"><i class="fa-solid fa-chevron-down text-[10px]"></i></button>
                            </div>

                            <template x-if="row.type === 'row'">
                                <div class="flex gap-6">
                                    <template x-for="(col, colIndex) in row.columns" :key="colIndex">
                                        <div :style="{ width: col.width }" 
                                             class="relative min-h-[50px] p-2 rounded-xl border border-dashed border-transparent hover:border-slate-300 transition cursor-pointer"
                                             @click.stop="selectCol(rowIndex, colIndex)">
                                            
                                            <div class="space-y-4">
                                                <template x-for="(block, blockIndex) in col.blocks" :key="blockIndex">
                                                    <div @click.stop="selectBlock(rowIndex, colIndex, blockIndex)" 
                                                         class="relative rounded-lg transition-all"
                                                         :class="isSelected(rowIndex, colIndex, blockIndex) ? 'ring-2 ring-brand-primary p-3 bg-white shadow-sm' : 'hover:bg-white/50 p-3'">
                                                        
                                                        <template x-if="block.type === 'text'">
                                                            <div :style="{ textAlign: block.align || 'left', color: block.color || 'inherit', fontSize: (block.size || 11) + 'pt', fontWeight: block.weight || 'normal' }" 
                                                                 class="prose prose-sm max-w-none leading-relaxed" 
                                                                 x-html="renderText(block.content)"></div>
                                                        </template>

                                                        <template x-if="block.type === 'image'">
                                                            <div :style="{ textAlign: block.align || 'left' }">
                                                                <div class="inline-block bg-slate-100 p-4 rounded-2xl border border-slate-200" :style="{ width: (block.width || 100) + 'px' }">
                                                                    <div class="flex flex-col items-center gap-2">
                                                                        <i class="fa-solid text-slate-400" :class="block.src === 'logo' ? 'fa-image' : 'fa-signature'"></i>
                                                                        <span class="text-[8px] font-black text-slate-500 uppercase tracking-tighter" x-text="block.src"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </template>
                                            </div>

                                            <button @click.stop="addBlock(rowIndex, colIndex)" class="mt-4 w-full py-2 bg-slate-50 border border-dashed border-slate-200 rounded-xl text-[9px] font-black text-slate-400 uppercase tracking-widest hover:text-brand-primary hover:border-brand-primary opacity-0 group-hover:opacity-100 transition-all">Add Element</button>
                                        </div>
                                    </template>
                                </div>
                            </template>

                            <template x-if="row.type === 'items_table'">
                                <div class="w-full border-t-2 pt-6" :style="{ borderTopColor: row.border_color || config.primary_color }">
                                    <table class="w-full">
                                        <thead>
                                            <tr :style="{ backgroundColor: row.header_bg || '#f8fafc' }">
                                                <th class="p-4 text-[10px] font-black uppercase text-left tracking-widest" :style="{ color: row.header_text || '#64748b' }">Item Description</th>
                                                <th class="p-4 text-[10px] font-black uppercase text-right tracking-widest" :style="{ color: row.header_text || '#64748b' }">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-slate-100">
                                                <td class="p-4 text-xs font-bold text-slate-500">Sample product or service name...</td>
                                                <td class="p-4 text-xs font-black text-slate-900 text-right">₹ 0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="mt-4 flex justify-end">
                                        <button @click.stop="selectRow(rowIndex)" class="text-[9px] font-black text-brand-primary uppercase hover:underline">Edit Table Styles</button>
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
function invoiceBuilder(initialConfig) {
    return {
        config: initialConfig,
        selected: null,
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
                spacing_top: 20,
                columns: [{ width: '100%', blocks: [] }]
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
                content: 'Double click to edit text',
                align: 'left',
                size: 11,
                color: '#0f172a'
            });
            this.selectBlock(rowIndex, colIndex, this.config.blocks[rowIndex].columns[colIndex].blocks.length - 1);
        },

        selectBlock(row, col, block) { this.selected = { row, col, block }; },
        selectCol(row, col) { this.selected = { row, col, block: null }; },
        selectRow(index) { this.selected = { row: index, col: 0, block: null }; },
        isSelected(row, col, block) { return this.selected && this.selected.row === row && this.selected.col === col && this.selected.block === block; },

        removeRow(index) { if (confirm('Delete this row?')) { this.config.blocks.splice(index, 1); this.selected = null; } },
        removeBlock() { if (this.selected && this.selected.block !== null) { this.config.blocks[this.selected.row].columns[this.selected.col].blocks.splice(this.selected.block, 1); this.selected = null; } },
        moveRow(index, direction) {
            const newIndex = index + direction;
            if (newIndex >= 0 && newIndex < this.config.blocks.length) {
                const row = this.config.blocks.splice(index, 1)[0];
                this.config.blocks.splice(newIndex, 0, row);
            }
        },

        copyVar(tag) { navigator.clipboard.writeText(tag); alert('Copied: ' + tag); },

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
