@extends('layouts.admin')

@section('title', 'Lead Details: #' . str_pad($submission->id, 6, '0', STR_PAD_LEFT))

@section('content')

<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900 line-clamp-1">Submission &mdash; {{ $submission->user->name ?? 'Guest' }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-1 uppercase tracking-widest"><i class="fa-solid fa-file-contract mr-1"></i> Form: {{ $submission->form->name }}</p>
    </div>
    <div class="flex gap-2">
        <a href="{{ route('invoice.download', $submission->id) }}" class="bg-slate-900 border border-slate-800 text-white font-bold text-xs py-2.5 px-4 rounded-xl shadow-lg flex items-center gap-2 hover:bg-black transition-all">
            <i class="fa-solid fa-file-pdf"></i> Download Invoice
        </a>
        <a href="{{ route('admin.forms.submissions', $submission->form_id) }}" class="text-slate-500 hover:text-slate-800 font-bold text-xs bg-white border border-slate-200 py-2.5 px-4 rounded-xl flex items-center gap-2">
            <i class="fa-solid fa-arrow-left"></i> Back to Leads
        </a>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
    
    <!-- Left: Payload & Form Data -->
    <div class="xl:col-span-2 space-y-6">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="bg-slate-50 border-b border-slate-200 px-6 py-4 flex justify-between items-center">
                <h3 class="text-xs font-black text-slate-900 uppercase tracking-widest flex items-center gap-2">
                    <i class="fa-solid fa-database text-brand-primary"></i> Captured Intelligence
                </h3>
            </div>
            
            <div class="p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    @foreach($submission->data as $id => $value)
                        @php
                            $field = $submission->form->fields->where('field_identifier', $id)->first();
                        @endphp
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">
                                {{ $field->label ?? 'Unknown Field ('.$id.')' }}
                            </label>
                            <div class="text-sm font-bold text-slate-800 break-words bg-slate-50 p-3 rounded-xl border border-slate-100 min-h-[44px] flex items-center">
                                @if(is_array($value))
                                    {{ implode(', ', $value) }}
                                @elseif(Str::startsWith($value, '/uploads/'))
                                    <a href="{{ asset($value) }}" target="_blank" class="text-brand-primary hover:underline flex items-center gap-2">
                                        <i class="fa-solid fa-file-arrow-down"></i> View Attachment
                                    </a>
                                @else
                                    {{ $value ?: 'Null' }}
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Right: Payment & Status -->
    <div class="space-y-6">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="bg-slate-900 px-6 py-4">
                <h3 class="text-xs font-black text-white uppercase tracking-widest flex items-center gap-2">
                    <i class="fa-solid fa-receipt text-emerald-400"></i> Financial Record
                </h3>
            </div>
            
            <div class="p-6 space-y-4">
                <div class="flex justify-between items-center py-2 border-b border-slate-50">
                    <span class="text-xs font-bold text-slate-400 uppercase">Grand Total</span>
                    <span class="text-2xl font-black text-slate-900">₹{{ number_format($submission->total_amount_paid, 2) }}</span>
                </div>
                
                <div class="flex justify-between items-center py-2 border-b border-slate-50">
                    <span class="text-xs font-bold text-slate-400 uppercase">Payment Status</span>
                    @if($submission->payment_status === 'completed' || $submission->total_amount_paid == 0)
                        <span class="px-2 py-1 bg-emerald-100 text-emerald-700 text-[10px] font-black uppercase rounded-lg">Paid & Secured</span>
                    @elseif($submission->payment_status === 'awaiting_verification')
                        <span class="px-2 py-1 bg-amber-100 text-amber-700 text-[10px] font-black uppercase rounded-lg border border-amber-200">Awaiting Verification</span>
                    @else
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-700 text-[10px] font-black uppercase rounded-lg">{{ strtoupper($submission->payment_status) }}</span>
                    @endif
                </div>

                <div class="flex justify-between items-center py-2 border-b border-slate-50">
                    <span class="text-xs font-bold text-slate-400 uppercase">Payment Method</span>
                    <span class="text-xs font-black text-slate-900 uppercase">
                        {{ $submission->payment_method === 'manual' ? 'Bank Transfer' : 'Razorpay Gateway' }}
                    </span>
                </div>

                @if($submission->payment)
                    <div class="pt-4 space-y-3">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Razorpay Order ID</label>
                            <code class="text-[11px] block bg-slate-50 p-2 rounded-lg border border-slate-100 text-slate-600 font-mono">{{ $submission->payment->razorpay_order_id }}</code>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Transaction ID</label>
                            <code class="text-[11px] block bg-slate-50 p-2 rounded-lg border border-slate-100 text-slate-600 font-mono">{{ $submission->payment->razorpay_payment_id ?: 'Pending Transaction' }}</code>
                        </div>
                    </div>
                @endif
                @if($submission->payment_status === 'awaiting_verification')
                    <div class="pt-4 mt-4 border-t border-slate-100">
                        <form action="{{ route('admin.submissions.mark-as-paid', $submission) }}" method="POST" onsubmit="return confirm('Manually verify this payment?');">
                            @csrf
                            <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-black py-3 rounded-xl shadow-lg shadow-emerald-600/20 flex items-center justify-center gap-2 transition-all">
                                <i class="fa-solid fa-check-double"></i> Verify & Mark as Paid
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </div>

        <div class="bg-brand-primary/5 border border-brand-primary/20 rounded-2xl p-6">
            <h4 class="text-xs font-black text-brand-primary uppercase tracking-widest mb-4">Meta Information</h4>
            <div class="space-y-2">
                <p class="text-xs text-slate-600 font-bold flex justify-between">
                    <span>Submitted On:</span>
                    <span class="text-slate-900">{{ $submission->created_at->format('M d, Y') }}</span>
                </p>
                <p class="text-xs text-slate-600 font-bold flex justify-between">
                    <span>At Time:</span>
                    <span class="text-slate-900">{{ $submission->created_at->format('h:i A') }}</span>
                </p>
                <p class="text-xs text-slate-600 font-bold flex justify-between">
                    <span>Internal UID:</span>
                    <span class="text-slate-900">#{{ $submission->id }}</span>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
