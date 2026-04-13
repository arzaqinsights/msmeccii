@extends('layouts.auth')

@section('title', 'Corporate Registration')
@section('auth_image', 'register_bg.png')
@section('hero_title', 'Scale Globally.')

@section('content')
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-black text-slate-900 mb-2 tracking-tight">Apply for Membership</h2>
        <p class="text-slate-600 font-medium">Provide your enterprise details to join.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Full Name -->
            <div>
                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Full Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus 
                    class="form-input w-full p-3 border @error('name') border-red-400 @else  focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                @error('name')<p class="mt-1 text-xs font-bold text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Business Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required 
                    class="form-input w-full p-3 border @error('email') border-red-400 @else  focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                @error('email')<p class="mt-1 text-xs font-bold text-red-600">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Company -->
            <div>
                <label for="company_name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Company Name</label>
                <input id="company_name" type="text" name="company_name" value="{{ old('company_name') }}" required 
                    class="form-input w-full p-3 border @error('company_name') border-red-400 @else  focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                @error('company_name')<p class="mt-1 text-xs font-bold text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Designation -->
            <div>
                <label for="designation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Designation</label>
                <input id="designation" type="text" name="designation" value="{{ old('designation') }}" required placeholder="e.g. CEO" 
                    class="form-input w-full p-3 border @error('designation') border-red-400 @else  focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                @error('designation')<p class="mt-1 text-xs font-bold text-red-600">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Phone -->
            <div>
                <label for="phone_number" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Phone Number</label>
                <input id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}" required 
                    class="form-input w-full p-3 border @error('phone_number') border-red-400 @else  focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                @error('phone_number')<p class="mt-1 text-xs font-bold text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Industry selector -->
            <div>
                <label for="industry_sector" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Industry Sector</label>
                <select id="industry_sector" name="industry_sector" required 
                    class="form-select w-full p-3 border @error('industry_sector') border-red-400 @else  focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                    <option value="" disabled selected>Select Industry</option>
                    <option value="Packaging" {{ old('industry_sector') == 'Packaging' ? 'selected' : '' }}>Packaging</option>
                    <option value="Plastics" {{ old('industry_sector') == 'Plastics' ? 'selected' : '' }}>Plastics</option>
                    <option value="Environment & Waste" {{ old('industry_sector') == 'Environment & Waste' ? 'selected' : '' }}>Environment & Waste Mgmt</option>
                    <option value="Agriculture" {{ old('industry_sector') == 'Agriculture' ? 'selected' : '' }}>Agriculture</option>
                    <option value="Handicrafts" {{ old('industry_sector') == 'Handicrafts' ? 'selected' : '' }}>Handicrafts & Textiles</option>
                    <option value="Technology & IT" {{ old('industry_sector') == 'Technology & IT' ? 'selected' : '' }}>Technology & IT</option>
                    <option value="Other" {{ old('industry_sector') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('industry_sector')<p class="mt-1 text-xs font-bold text-red-600">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4 mt-4">
            <!-- Password -->
            <div>
                <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Secure Password</label>
                <input id="password" type="password" name="password" required 
                    class="form-input w-full p-3 border @error('password') border-red-400 @else  focus:border-brand-primary focus:ring-brand-primary/20 @enderror rounded-sm text-slate-900 transition-all outline-none focus:ring-4 font-medium ">
                @error('password')<p class="mt-1 text-xs font-bold text-red-600">{{ $message }}</p>@enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5 ml-1">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required 
                    class="form-input w-full p-3 border  focus:border-brand-primary rounded-sm text-slate-900 transition-all outline-none focus:ring-4 focus:ring-brand-primary/20 font-medium ">
            </div>
        </div>

        <button type="submit" class="w-full bg-brand-primary hover:bg-brand-primary-dark text-white font-black py-4 px-4 rounded-sm transition-all mt-8 tracking-wide uppercase">
            Submit Application
        </button>

        <div class="text-center mt-6">
            <p class="text-sm text-slate-600 font-medium">
                Already registered? 
                <a href="{{ route('login') }}" class="font-black text-slate-900 hover:text-brand-primary transition-colors ml-1 uppercase">Sign In</a>
            </p>
        </div>
    </form>
@endsection
