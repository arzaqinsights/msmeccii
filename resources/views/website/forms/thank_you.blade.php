@extends('layouts.website')

@section('title', 'Submission Successful!')

@section('content')

<section class="pt-40 pb-20 bg-brand-light min-h-screen">
    <div class="container max-w-2xl mx-auto text-center">
        
        <div class="bg-white rounded-[2.5rem] p-10 md:p-16 shadow-2xl border border-slate-100 relative overflow-hidden">
            <!-- Animated Check Circle -->
            <div class="w-24 h-24 bg-emerald-500 rounded-full mx-auto flex items-center justify-center text-white text-4xl mb-8 shadow-lg shadow-emerald-200 animate-bounce">
                <i class="fa-solid fa-check"></i>
            </div>

            <h1 class="text-3xl md:text-4xl font-black text-slate-900 mb-4 uppercase tracking-tight">Application Transmitted!</h1>
            <p class="text-slate-500 font-medium text-lg mb-10 leading-relaxed">
                Thank you, your application for <span class="text-brand-primary font-black">{{ $submission->form->name }}</span> has been successfully processed and logged in our secure database.
            </p>

            <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100 text-left mb-10">
                <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6 border-b border-slate-200 pb-2">Record Confirmation</h3>
                
                <div class="space-y-4">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500 font-bold uppercase tracking-tighter">Reference ID</span>
                        <span class="text-slate-900 font-black">#REC-{{ str_pad($submission->id, 6, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500 font-bold uppercase tracking-tighter">Submission Date</span>
                        <span class="text-slate-900 font-black">{{ $submission->created_at->format('M d, Y') }}</span>
                    </div>
                    @if($submission->total_amount_paid > 0)
                        <div class="flex justify-between items-center text-sm pt-4 border-t border-slate-200">
                            <span class="text-slate-500 font-bold uppercase tracking-tighter">Amount Paid</span>
                            <span class="text-emerald-600 font-black text-xl">₹{{ number_format($submission->total_amount_paid, 2) }}</span>
                        </div>
                    @endif
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('account.dashboard') }}" class="flex-1 bg-brand-primary hover:bg-brand-primary-dark text-white font-black py-4 px-6 rounded-2xl transition-all shadow-lg flex items-center justify-center gap-2">
                    <i class="fa-solid fa-user-gear"></i> Go to Dashboard
                </a>
                @if($submission->payment_status === 'completed' || $submission->total_amount_paid == 0)
                    <a href="{{ route('invoice.download', $submission->id) }}" class="flex-1 bg-slate-900 hover:bg-black text-white font-black py-4 px-6 rounded-2xl transition-all shadow-lg flex items-center justify-center gap-2">
                        <i class="fa-solid fa-file-invoice"></i> Download Invoice
                    </a>
                @endif
            </div>

            @if($submission->payment_method === 'manual' && $submission->payment_status !== 'completed')
                <div class="mt-8 p-4 bg-amber-50 rounded-2xl border border-amber-100 flex gap-3 text-left">
                    <i class="fa-solid fa-circle-info text-amber-500 mt-1"></i>
                    <p class="text-[10px] font-bold text-amber-800 leading-relaxed uppercase tracking-tight">
                        Manual Verification Required: <span class="font-black">Your invoice will be available for download in your Account Dashboard once our team verifies your bank transfer receipt.</span>
                    </p>
                </div>
            @endif
            
            <p class="mt-8 text-xs font-bold text-slate-400 uppercase tracking-widest">
                <i class="fa-solid fa-shield-halved text-emerald-500 mr-1"></i> SSL SECURED SYSTEM
            </p>
        </div>

        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-brand-primary font-bold mt-8 transition-colors">
            <i class="fa-solid fa-arrow-left text-xs"></i> Back to Homepage
        </a>

    </div>
</section>

@endsection
