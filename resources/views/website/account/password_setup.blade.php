@extends('layouts.website')

@section('title', 'Secure Your Account')

@section('content')
<div class="min-h-[60vh] flex items-center justify-center py-20 bg-slate-50">
    <div class="max-w-md w-full px-6">
        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
            <div class="p-8 text-center bg-brand-primary text-white">
                <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4 backdrop-blur-md">
                    <i class="fa-solid fa-shield-halved text-3xl"></i>
                </div>
                <h2 class="text-2xl font-black">Set Your Password</h2>
                <p class="text-sm font-bold opacity-80 mt-1">Please create a permanent password to secure your account.</p>
            </div>

            <div class="p-8">
                <form action="{{ route('password.setup.update') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-1">New Password</label>
                        <div class="relative group">
                            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-brand-primary transition-colors"></i>
                            <input type="password" name="password" required class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl outline-none focus:border-brand-primary focus:bg-white transition-all font-bold text-slate-900" placeholder="••••••••">
                        </div>
                        @error('password') <p class="text-red-500 text-[10px] font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2 ml-1">Confirm Password</label>
                        <div class="relative group">
                            <i class="fa-solid fa-circle-check absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-brand-primary transition-colors"></i>
                            <input type="password" name="password_confirmation" required class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl outline-none focus:border-brand-primary focus:bg-white transition-all font-bold text-slate-900" placeholder="••••••••">
                        </div>
                    </div>

                    <button type="submit" class="w-full py-4 bg-brand-primary text-white rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-brand-dark transition-all shadow-lg shadow-brand-primary/20 flex items-center justify-center gap-2">
                        Complete Setup <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        
        <p class="text-center mt-8 text-xs font-bold text-slate-400">
            Secure processing by MSMECCII Security Systems
        </p>
    </div>
</div>
@endsection
