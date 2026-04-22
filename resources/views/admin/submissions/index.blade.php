@extends('layouts.admin')

@section('title', isset($form) ? "Leads: " . $form->name : 'All Form Leads')

@section('content')

<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-black text-slate-900">{{ isset($form) ? "Leads for " . $form->name : 'Global Lead Database' }}</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">
            @if(isset($form))
                Viewing all data captured through the {{ $form->name }} interface.
            @else
                Aggregated submissions across all published forms.
            @endif
        </p>
    </div>
    @if(isset($form))
        <a href="{{ route('admin.forms.index') }}" class="text-slate-500 hover:text-slate-800 font-bold text-sm bg-white border border-slate-200 px-4 py-2 rounded-xl transition-all">
            <i class="fa-solid fa-arrow-left mr-1"></i> Back to Forms
        </a>
    @endif
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 text-slate-500 text-[10px] uppercase font-black tracking-widest border-b border-slate-200">
                <tr>
                    <th class="px-6 py-4">Lead Information</th>
                    <th class="px-6 py-4">Source Form</th>
                    <th class="px-6 py-4">Revenue</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Date</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 italic-fields">
                @forelse($submissions as $sub)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center border border-slate-200 shadow-sm overflow-hidden">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($sub->user->name ?? 'User') }}&background=f1f5f9&color=64748b" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <p class="font-bold text-slate-900">{{ $sub->user->name ?? 'Guest User' }}</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-tighter">{{ $sub->user->email ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-brand-primary/10 text-brand-primary text-[10px] font-black uppercase rounded-lg">
                                {{ $sub->form->name ?? 'Unknown' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 font-black text-slate-900">
                            ₹{{ number_format($sub->total_amount_paid, 2) }}
                        </td>
                        <td class="px-6 py-4">
                            @if($sub->payment_status === 'completed' || $sub->total_amount_paid == 0)
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-700">
                                    <i class="fa-solid fa-circle-check text-[10px]"></i> {{ $sub->total_amount_paid == 0 ? 'Success (Free)' : 'Paid' }}
                                </span>
                            @elseif($sub->payment_status === 'awaiting_verification')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700 border border-amber-200">
                                    <i class="fa-solid fa-hourglass-half text-[10px]"></i> Verification Pending
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700">
                                    <i class="fa-solid fa-clock text-[10px]"></i> {{ ucfirst($sub->payment_status) }}
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-slate-500 font-medium">
                            {{ $sub->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                @if($sub->payment_status === 'awaiting_verification')
                                    <form action="{{ route('admin.submissions.mark-as-paid', $sub) }}" method="POST" onsubmit="return confirm('Confirm payment receipt?');" class="inline">
                                        @csrf
                                        <button type="submit" class="p-2 text-amber-500 hover:text-white transition-colors bg-white hover:bg-amber-500 rounded-lg border border-amber-200 shadow-sm" title="Mark as Paid">
                                            <i class="fa-solid fa-hand-holding-dollar"></i>
                                        </button>
                                    </form>
                                @endif
                                <a href="{{ route('admin.submissions.show', $sub) }}" class="p-2 text-slate-400 hover:text-brand-primary transition-colors bg-white hover:bg-brand-primary/5 rounded-lg border border-slate-200">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <form action="{{ route('admin.submissions.destroy', $sub) }}" method="POST" onsubmit="return confirm('Delete this lead?');" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-2 text-slate-400 hover:text-red-500 transition-colors bg-white hover:bg-red-50 rounded-lg border border-slate-200">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-slate-500">
                            No submissions found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($submissions->hasPages())
        <div class="border-t border-slate-100 px-6 py-4">
            {{ $submissions->links() }}
        </div>
    @endif
</div>

@endsection
