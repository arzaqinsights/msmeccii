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

    <form action="{{ route('admin.submissions.manual-store') }}" method="POST" class="space-y-8">
        @csrf

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-100 bg-slate-50">
                <h3 class="text-lg font-black text-slate-900 flex items-center gap-2">
                    <i class="fa-solid fa-user text-brand-primary"></i> User Details
                </h3>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Select User</label>
                        <select name="user_id" class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-brand-primary select2">
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

                <div class="mt-8 pt-6 border-t border-slate-100 flex justify-between items-center">
                    <div class="flex items-center gap-4">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="send_email" value="1" checked class="w-5 h-5 rounded border-slate-300 text-brand-primary focus:ring-brand-primary">
                            <span class="text-sm font-bold text-slate-600">Email Invoice to User</span>
                        </label>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-slate-400 font-bold uppercase mb-1">Grand Total</p>
                        <h4 class="text-3xl font-black text-slate-900">₹ <span x-text="items.reduce((acc, item) => acc + parseFloat(item.amount || 0), 0).toLocaleString()"></span></h4>
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
