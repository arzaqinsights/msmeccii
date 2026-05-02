@extends('layouts.website')

@section('title', 'Verify Your Email')

@section('content')
<div class="min-h-[60vh] flex items-center justify-center py-20 bg-slate-50">
    <div class="max-w-md w-full px-6">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
            <div class="p-8 text-center bg-brand-primary text-white">
                <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4 backdrop-blur-md">
                    <i class="fa-solid fa-envelope-circle-check text-3xl"></i>
                </div>
                <h2 class="text-2xl font-black">Verify Email</h2>
                <p class="text-sm font-bold opacity-80 mt-1">We've sent a 6-digit OTP to your email address.</p>
            </div>

            <div class="p-8">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-600 rounded-2xl text-xs font-bold flex items-center gap-2">
                        <i class="fa-solid fa-circle-check text-base"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('otp.verify.post') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-4 text-center">Enter Verification Code</label>
                        <div class="flex justify-between gap-2" x-data="{ otp: ['', '', '', '', '', ''], focusNext(index, e) { if(e.target.value.length === 1 && index < 5) this.$refs['input' + (index + 1)].focus() } }">
                            <input type="text" name="otp" maxlength="6" required class="w-full text-center py-4 bg-slate-50 border border-slate-200 rounded-2xl outline-none focus:border-brand-primary focus:bg-white transition-all font-black text-2xl tracking-[1em] pl-4" placeholder="000000">
                        </div>
                        @error('otp') <p class="text-red-500 text-[10px] font-bold mt-2 text-center">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="w-full py-4 bg-brand-primary text-white rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-brand-dark transition-all shadow-lg shadow-brand-primary/20 flex items-center justify-center gap-2">
                        Verify Account <i class="fa-solid fa-check-double"></i>
                    </button>
                </form>

                <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                    <p class="text-xs font-bold text-slate-400 mb-4">Didn't receive the code?</p>
                    <form action="{{ route('otp.resend') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-brand-primary hover:text-brand-dark font-black text-xs uppercase tracking-widest transition-colors">
                            Resend New OTP
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
