@extends('layouts.admin')

@section('title', 'Create Manual Invoice')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-black text-slate-900">Create Manual Invoice</h2>
            <p class="text-sm font-bold text-slate-500 mt-1">Generate an invoice manually for any user.</p>
        </div>
        <a href="{{ route('admin.submissions.index') }}" class="text-slate-500 hover:text-slate-800 font-bold text-sm bg-white border border-slate-200 px-4 py-2 rounded-xl transition-all">
            <i class="fa-solid fa-arrow-left mr-1"></i> Back to Submissions
        </a>
    </div>

    <form action="{{ route('admin.submissions.manual-store') }}" method="POST" enctype="multipart/form-data" class="space-y-8" 
          x-data="{ 
            userMode: 'existing', 
            selectedUser: '', 
            details: {
                company_name: '',
                designation: '',
                gstin: '',
                industry_sector: '',
                address: ''
            },
            async fetchUserDetails() {
                if(!this.selectedUser) return;
                try {
                    const resp = await fetch(`/admin/users/${this.selectedUser}/details`);
                    const data = await resp.json();
                    this.details.company_name = data.company_name || '';
                    this.details.designation = data.designation || '';
                    this.details.gstin = data.gstin || '';
                    this.details.industry_sector = data.industry_sector || '';
                    this.details.address = data.address || '';
                } catch(e) {
                    console.error('Failed to fetch user details', e);
                }
            }
          }">
        @csrf

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-100 bg-slate-50 flex justify-between items-center">
                <h3 class="text-lg font-black text-slate-900 flex items-center gap-2">
                    <i class="fa-solid fa-user text-brand-primary"></i> User & Design
                </h3>
            </div>
            <div class="p-6">
                <!-- Template Selection -->
                <div class="mb-8 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Invoice Branding Template</label>
                    <select name="invoice_template_id" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-bold text-slate-700 outline-none focus:border-brand-primary">
                        <option value="">Default Branding</option>
                        @foreach($templates as $tpl)
                            <option value="{{ $tpl->id }}" {{ $tpl->is_default ? 'selected' : '' }}>{{ $tpl->name }}</option>
                        @endforeach
                    </select>
                    <p class="text-[10px] text-slate-400 mt-2 font-bold italic">Select the professional look & feel for this specific invoice.</p>
                </div>

                <div class="mb-6 flex gap-4">
                    <button type="button" @click="userMode = 'existing'" :class="userMode === 'existing' ? 'bg-brand-primary text-white' : 'bg-slate-100 text-slate-600'" class="px-4 py-2 rounded-lg text-xs font-bold transition">Existing User</button>
                    <button type="button" @click="userMode = 'new'; details = {company_name:'', designation:'', gstin:'', industry_sector:'', address:''}" :class="userMode === 'new' ? 'bg-brand-primary text-white' : 'bg-slate-100 text-slate-600'" class="px-4 py-2 rounded-lg text-xs font-bold transition">Create New User</button>
                </div>

                <div x-show="userMode === 'existing'" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Select Existing User</label>
                        <select name="user_id" x-model="selectedUser" @change="fetchUserDetails()" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                            <option value="">-- Choose User --</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                            @endforeach
                        </select>
                        @error('user_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Payment Status</label>
                        <select name="payment_status" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                            <option value="completed">Paid / Completed</option>
                            <option value="pending">Pending</option>
                            <option value="awaiting_verification">Awaiting Verification</option>
                        </select>
                    </div>
                </div>

                <div x-show="userMode === 'new'" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Full Name</label>
                        <input type="text" name="new_user_name" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary" placeholder="e.g. John Doe">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Email Address</label>
                        <input type="email" name="new_user_email" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary" placeholder="e.g. john@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Phone Number</label>
                        <input type="text" name="new_user_phone" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary" placeholder="e.g. +91 9876543210">
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100" x-show="userMode === 'new'">
                    <h4 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-4">New User Details & Branding</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Company Name</label>
                            <input type="text" name="company_name" x-model="details.company_name" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary" placeholder="e.g. MSME Solutions Pvt Ltd">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Designation</label>
                            <input type="text" name="designation" x-model="details.designation" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary" placeholder="e.g. Director">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">GSTIN</label>
                            <input type="text" name="gstin" x-model="details.gstin" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary" placeholder="e.g. 07AAAAA0000A1Z5">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Industry Sector</label>
                            <input type="text" name="industry_sector" x-model="details.industry_sector" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary" placeholder="e.g. Manufacturing">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-slate-700 mb-2">Full Address</label>
                            <input type="text" name="address" x-model="details.address" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary" placeholder="Street, City, State, ZIP">
                        </div>
                    </div>
                </div>

                <!-- Existing User Summary Card -->
                <div class="mt-8 pt-6 border-t border-slate-100" x-show="userMode === 'existing' && selectedUser">
                    <div class="bg-emerald-50 border border-emerald-100 rounded-2xl p-6 flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-emerald-600 shadow-sm">
                            <i class="fa-solid fa-id-card-clip text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm font-black text-emerald-900 uppercase tracking-wide">User Profile Linked</h4>
                            <p class="text-xs text-emerald-700 mt-1 font-medium">Invoice will be generated using the saved details for this user (Company, GSTIN, Address, etc.).</p>
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div class="bg-white/50 p-2 rounded-lg">
                                    <span class="text-[9px] font-black text-slate-400 uppercase block">Company</span>
                                    <span class="text-[11px] font-bold text-slate-700" x-text="details.company_name || 'N/A'"></span>
                                </div>
                                <div class="bg-white/50 p-2 rounded-lg">
                                    <span class="text-[9px] font-black text-slate-400 uppercase block">GSTIN</span>
                                    <span class="text-[11px] font-bold text-slate-700" x-text="details.gstin || 'N/A'"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden" x-data="{ items: [{description: '', amount: 0}] }">
            <div class="px-6 py-4 border-b border-slate-100 bg-slate-50 flex justify-between items-center">
                <h3 class="text-lg font-black text-slate-900 flex items-center gap-2">
                    <i class="fa-solid fa-list-ul text-brand-primary"></i> Invoice Items
                </h3>
                <button type="button" @click="items.push({description: '', amount: 0})" class="px-4 py-2 bg-emerald-500 text-white rounded-lg text-xs font-bold hover:bg-emerald-600 transition">
                    <i class="fa-solid fa-plus mr-1"></i> Add Item
                </button>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
                            <div class="md:col-span-8">
                                <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Description</label>
                                <input type="text" :name="'items['+index+'][description]'" x-model="item.description" placeholder="e.g. Event Registration Fee" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                            </div>
                            <div class="md:col-span-3">
                                <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Amount (₹)</label>
                                <input type="number" :name="'items['+index+'][amount]'" x-model="item.amount" step="0.01" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary">
                            </div>
                            <div class="md:col-span-1">
                                <button type="button" @click="items.length > 1 ? items.splice(index, 1) : null" class="p-3.5 text-slate-400 hover:text-red-500 transition">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </template>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100 flex flex-wrap justify-between items-end gap-6" x-data="{ taxPercent: 18, taxLabel: 'GST' }">
                    <div class="flex flex-wrap items-center gap-6 flex-1">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="send_email" value="1" checked class="w-5 h-5 rounded border-slate-300 text-brand-primary focus:ring-brand-primary">
                            <span class="text-sm font-bold text-slate-600">Email Invoice to User</span>
                        </label>

                        <div class="w-48">
                            <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Custom Signature (Optional)</label>
                            <input type="file" name="signature" class="w-full text-[10px] text-slate-500 file:mr-2 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-[10px] file:font-black file:bg-brand-primary/10 file:text-brand-primary hover:file:bg-brand-primary/20">
                        </div>

                        <div class="flex gap-4">
                            <div class="w-24">
                                <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Tax Label</label>
                                <input type="text" name="tax_label" x-model="taxLabel" class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs font-bold outline-none focus:border-brand-primary">
                            </div>
                            <div class="w-24">
                                <label class="block text-[10px] font-black text-slate-400 uppercase mb-1">Tax %</label>
                                <input type="number" name="tax_percent" x-model="taxPercent" step="0.01" class="w-full px-3 py-2 rounded-lg border border-slate-200 text-xs font-bold outline-none focus:border-brand-primary">
                            </div>
                        </div>
                    </div>

                    <div class="text-right space-y-2">
                        <div class="flex justify-end gap-8 text-[10px] font-black text-slate-400 uppercase">
                            <span>Subtotal: ₹ <span x-text="items.reduce((acc, item) => acc + parseFloat(item.amount || 0), 0).toFixed(2)"></span></span>
                            <span><span x-text="taxLabel"></span> (<span x-text="taxPercent"></span>%): ₹ <span x-text="(items.reduce((acc, item) => acc + parseFloat(item.amount || 0), 0) * (taxPercent/100)).toFixed(2)"></span></span>
                        </div>
                        <p class="text-xs text-slate-400 font-bold uppercase mb-1">Grand Total</p>
                        <h4 class="text-4xl font-black text-slate-900">₹ <span x-text="(items.reduce((acc, item) => acc + parseFloat(item.amount || 0), 0) * (1 + taxPercent/100)).toLocaleString(undefined, {minimumFractionDigits: 2})"></span></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-8 py-4 bg-brand-primary text-white rounded-2xl font-bold text-sm hover:bg-brand-primary/90 transition shadow-lg shadow-brand-primary/20 flex items-center gap-2">
                <i class="fa-solid fa-file-invoice-dollar"></i> Generate & Save Invoice
            </button>
        </div>
    </form>
</div>
@endsection
