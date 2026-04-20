@extends('layouts.admin')

@section('title', $template->exists ? 'Edit Template' : 'Create Template')

@section('content')
<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">{{ $template->exists ? 'Edit Template: ' . $template->name : 'Create New Template' }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Design a unique invoice branding experience with live preview.</p>
    </div>
    <div class="flex gap-2">
        <a href="{{ route('admin.invoice-designer.index') }}" class="bg-white border border-slate-200 text-slate-500 font-black px-6 py-2.5 rounded-xl transition-all text-sm">Cancel</a>
        <button type="submit" form="designer-form" class="bg-emerald-600 hover:bg-emerald-700 text-white font-black px-6 py-2.5 rounded-xl transition-all shadow-lg text-sm flex items-center gap-2">
            <i class="fa-solid fa-floppy-disk"></i> {{ $template->exists ? 'Update Template' : 'Save Template' }}
        </button>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-2 gap-8" x-data='invoiceDesigner(@json($config))'>
    
    <!-- Left: Settings Panel -->
    <div class="space-y-6">
        <form id="designer-form" action="{{ $template->exists ? route('admin.invoice-designer.update', $template) : route('admin.invoice-designer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($template->exists) @method('PUT') @endif
            
            <!-- Basic Info -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 mb-6">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest border-b border-slate-50 pb-3 mb-4">Template Settings</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-2">Internal Template Name</label>
                        <input type="text" name="name" value="{{ old('name', $template->name) }}" required placeholder="e.g. Standard Tax Invoice" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="is_default" id="is_default" value="1" {{ $template->is_default ? 'checked' : '' }} class="w-4 h-4 rounded text-emerald-600 focus:ring-emerald-500">
                        <label for="is_default" class="text-xs font-bold text-slate-600">Set as Global Default</label>
                    </div>
                </div>
            </div>

            <!-- Branding & Type -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 space-y-6">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest border-b border-slate-50 pb-3">Branding & Layout</h3>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-2">Invoice Type</label>
                        <select name="config[type]" x-model="config.type" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-xs">
                            <option value="tax">Tax Invoice</option>
                            <option value="normal">Normal Receipt</option>
                            <option value="proforma">Proforma Invoice</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-2">Primary Color</label>
                        <div class="flex gap-2">
                            <input type="color" name="config[primary_color]" x-model="config.primary_color" class="h-10 w-10 rounded-lg border border-slate-200 p-1 cursor-pointer">
                            <input type="text" x-model="config.primary_color" class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-3 outline-none text-xs font-mono font-bold">
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-2">Template Logo</label>
                    <div class="flex items-center gap-4">
                        <template x-if="config.logo_url">
                            <div class="h-16 w-32 bg-slate-50 border border-slate-200 rounded-lg overflow-hidden flex items-center justify-center p-2 relative group">
                                <img :src="config.logo_url" class="max-h-full max-w-full object-contain">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <i class="fa-solid fa-camera text-white"></i>
                                </div>
                            </div>
                        </template>
                        <div class="flex-1">
                            <input type="file" name="logo" class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-black file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                            <p class="text-[10px] text-slate-400 mt-1">PNG/JPG. Recommended: 300x120px.</p>
                            <input type="hidden" name="config[logo_url]" x-model="config.logo_url">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Company Details -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 mt-6 space-y-4">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest border-b border-slate-50 pb-3">Company Information</h3>
                
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Company Name</label>
                    <input type="text" name="config[company_name]" x-model="config.company_name" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">GSTIN (Optional)</label>
                        <input type="text" name="config[gstin]" x-model="config.gstin" placeholder="07AAAAA0000A1Z5" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">PAN Card</label>
                        <input type="text" name="config[pan]" x-model="config.pan" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Registered Address</label>
                    <textarea name="config[address]" x-model="config.address" rows="3" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-medium text-slate-900 text-xs resize-none"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Support Email</label>
                        <input type="email" name="config[email]" x-model="config.email" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Contact Phone</label>
                        <input type="text" name="config[phone]" x-model="config.phone" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-bold text-slate-900 text-sm">
                    </div>
                </div>
            </div>

            <!-- Legal & Footer -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 mt-6 space-y-4">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest border-b border-slate-50 pb-3">Legal & Bank Details</h3>
                
                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Bank Details (Optional)</label>
                    <textarea name="config[bank_details]" x-model="config.bank_details" placeholder="A/C No: ...&#10;IFSC: ..." rows="2" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-medium text-slate-900 text-xs resize-none"></textarea>
                </div>

                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Terms & Conditions</label>
                    <textarea name="config[terms]" x-model="config.terms" rows="3" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-medium text-slate-900 text-[10px] resize-none"></textarea>
                </div>

                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">Footer Copyright/Note</label>
                    <input type="text" name="config[footer_text]" x-model="config.footer_text" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 outline-none focus:border-emerald-500 font-medium text-slate-900 text-xs">
                </div>
            </div>
        </form>
    </div>

    <!-- Right: Preview Panel (Identical logic as before but reactive to 'config') -->
    <div class="sticky top-6">
        <div class="bg-slate-800 rounded-t-2xl p-4 flex items-center justify-between">
            <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-widest flex items-center gap-2">
                <i class="fa-solid fa-eye text-emerald-400"></i> Active Layout Preview
            </h3>
            <div class="flex gap-1">
                <div class="w-2 h-2 rounded-full bg-red-500"></div>
                <div class="w-2 h-2 rounded-full bg-amber-500"></div>
                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
            </div>
        </div>
        
        <div class="bg-slate-200 p-8 rounded-b-2xl overflow-auto max-h-[850px] border border-slate-300 shadow-inner">
            <div class="bg-white shadow-2xl mx-auto p-10 min-h-[700px] w-full" style="font-family: Arial, sans-serif; color: #334155;">
                <div class="flex justify-between items-start mb-8 border-b-2 pb-6" :style="{ borderBottomColor: config.primary_color + '20' }">
                    <div>
                        <template x-if="config.logo_url">
                            <img :src="config.logo_url" class="h-12 w-auto mb-2">
                        </template>
                        <template x-if="!config.logo_url">
                            <div class="text-2xl font-black text-slate-900 mb-2 uppercase">MSME<span :style="{ color: config.primary_color }">CCII</span></div>
                        </template>
                        <h1 class="text-xl font-black uppercase tracking-tight m-0" :style="{ color: config.primary_color }" x-text="config.type === 'tax' ? 'Tax Invoice' : (config.type === 'normal' ? 'Payment Receipt' : 'Proforma Invoice')"></h1>
                        <p class="text-[10px] font-bold text-slate-400 mt-1">#INV-2024-000123</p>
                    </div>
                    <div class="text-right">
                        <div class="text-xs font-black text-slate-900" x-text="config.company_name"></div>
                        <div class="text-[10px] text-slate-500 whitespace-pre-wrap leading-relaxed mt-1" x-text="config.address"></div>
                        <template x-if="config.type === 'tax' && config.gstin">
                            <div class="text-[9px] font-black text-slate-400 mt-1 uppercase" x-text="'GSTIN: ' + config.gstin"></div>
                        </template>
                    </div>
                </div>

                <!-- Template Content (Simulated) -->
                <div class="grid grid-cols-2 gap-8 mb-10">
                    <div>
                        <div class="text-[9px] font-black text-slate-300 uppercase mb-1">Invoiced To</div>
                        <div class="text-xs font-black text-slate-900">John Doe</div>
                        <div class="text-[10px] text-slate-500 mt-0.5">john@example.com</div>
                    </div>
                    <div class="text-right">
                        <div class="text-[9px] font-black text-slate-300 uppercase mb-1">Payment Status</div>
                        <div class="text-xs font-black text-emerald-600 uppercase">Paid - Razorpay</div>
                        <div class="text-[10px] text-slate-500 mt-0.5">20 Apr, 2024</div>
                    </div>
                </div>

                <table class="w-full mb-8 border-collapse">
                    <thead>
                        <tr class="bg-slate-50" :style="{ borderBottom: '2px solid ' + config.primary_color }">
                            <th class="text-left py-3 px-2 text-[9px] font-black text-slate-500 uppercase">Item Description</th>
                            <th class="text-right py-3 px-2 text-[9px] font-black text-slate-500 uppercase" x-text="config.type === 'tax' ? 'Rate' : 'Amount'"></th>
                            <template x-if="config.type === 'tax'">
                                <th class="text-right py-3 px-2 text-[9px] font-black text-slate-500 uppercase">Tax</th>
                            </template>
                            <th class="text-right py-3 px-2 text-[9px] font-black text-slate-500 uppercase">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-100">
                            <td class="py-4 px-2 text-xs font-bold text-slate-800">Sample Item / Registration Title</td>
                            <td class="text-right py-4 px-2 text-xs font-bold text-slate-800" x-text="config.type === 'tax' ? '₹ 847.46' : '₹ 1,000.00'"></td>
                            <template x-if="config.type === 'tax'">
                                <td class="text-right py-4 px-2 text-xs font-bold text-slate-800">18%</td>
                            </template>
                            <td class="text-right py-4 px-2 text-xs font-black text-slate-900">₹ 1,000.00</td>
                        </tr>
                    </tbody>
                </table>

                <div class="flex justify-end mb-10">
                    <div class="w-1/2 space-y-2">
                        <template x-if="config.type === 'tax'">
                            <div class="flex justify-between text-xs font-bold text-slate-500 italic">
                                <span>Subtotal</span>
                                <span>₹ 847.46</span>
                            </div>
                        </template>
                        <template x-if="config.type === 'tax'">
                            <div class="flex justify-between text-xs font-bold text-slate-500 italic">
                                <span>Tax (IGST 18%)</span>
                                <span>₹ 152.54</span>
                            </div>
                        </template>
                        <div class="flex justify-between text-sm font-black p-3 rounded-lg" :style="{ backgroundColor: config.primary_color + '10', color: config.primary_color }">
                            <span x-text="config.type === 'tax' ? 'Total Payable' : 'Amount Received'"></span>
                            <span>₹ 1,000.00</span>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100 mt-auto grid grid-cols-2 gap-8">
                     <div>
                        <div class="text-[9px] font-black text-slate-300 uppercase mb-2">Terms & Notes</div>
                        <div class="text-[8px] text-slate-400 leading-normal whitespace-pre-wrap" x-text="config.terms"></div>
                    </div>
                    <div class="text-right">
                        <template x-if="config.bank_details">
                            <div class="mb-4 text-left inline-block">
                                <div class="text-[9px] font-black text-slate-300 uppercase mb-2">Bank Details</div>
                                <div class="text-[9px] text-slate-500 font-bold leading-normal whitespace-pre-wrap" x-text="config.bank_details"></div>
                            </div>
                        </template>
                         <div class="pt-4">
                            <div class="text-[9px] font-black text-slate-900 uppercase">Authorized Signatory</div>
                            <div class="mt-2 h-8 w-24 border-b border-slate-200 ml-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function invoiceDesigner(initialConfig) {
        return {
            config: initialConfig,
        }
    }
</script>
@endsection
