@extends('layouts.admin')

@section('title', $member->exists ? 'Edit Member' : 'Add Member')

@section('content')

<div class="mb-6">
    <a href="{{ route('admin.team-pages.members.index', $team_page) }}" class="text-slate-500 hover:text-indigo-600 font-bold text-sm flex items-center gap-2 mb-2 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to Members
    </a>
    <h2 class="text-2xl font-black text-slate-900">{{ $member->exists ? 'Edit Member: ' . $member->name : 'Add New Member to ' . $team_page->title }}</h2>
</div>

<div class="max-w-5xl">
    <form action="{{ $member->exists ? route('admin.team-pages.members.update', [$team_page, $member]) : route('admin.team-pages.members.store', $team_page) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($member->exists) @method('PUT') @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column: Basic Info -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-user-gear text-indigo-600"></i> Basic Information
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Full Name</label>
                            <input type="text" name="name" value="{{ old('name', $member->name) }}" required placeholder="e.g. Dr. Indrajit Ghosh" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Group / Category (Optional)</label>
                            <input type="text" name="group_name" value="{{ old('group_name', $member->group_name) }}" placeholder="e.g. Founders, Employees, Directors" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                            <p class="text-[10px] text-slate-400 mt-1 font-bold">Use this to group members on the page.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Designation</label>
                            <input type="text" name="designation" value="{{ old('designation', $member->designation) }}" required placeholder="e.g. Global Chairman & MD" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Company Name (Optional)</label>
                            <input type="text" name="company_name" value="{{ old('company_name', $member->company_name) }}" placeholder="e.g. MSME Chamber of Commerce" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Short Bio / Description</label>
                        <textarea name="description" rows="5" placeholder="Write a brief professional summary..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">{{ old('description', $member->description) }}</textarea>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-share-nodes text-indigo-600"></i> Social Profiles
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2"><i class="fa-brands fa-linkedin mr-1"></i> LinkedIn URL</label>
                            <input type="url" name="social_links[linkedin]" value="{{ old('social_links.linkedin', $member->social_links['linkedin'] ?? '') }}" placeholder="https://linkedin.com/in/username" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2"><i class="fa-brands fa-twitter mr-1"></i> Twitter URL</label>
                            <input type="url" name="social_links[twitter]" value="{{ old('social_links.twitter', $member->social_links['twitter'] ?? '') }}" placeholder="https://twitter.com/username" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2"><i class="fa-brands fa-facebook mr-1"></i> Facebook URL</label>
                            <input type="url" name="social_links[facebook]" value="{{ old('social_links.facebook', $member->social_links['facebook'] ?? '') }}" placeholder="https://facebook.com/username" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2"><i class="fa-brands fa-instagram mr-1"></i> Instagram URL</label>
                            <input type="url" name="social_links[instagram]" value="{{ old('social_links.instagram', $member->social_links['instagram'] ?? '') }}" placeholder="https://instagram.com/username" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Image & Order -->
            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-image text-indigo-600"></i> Profile Image
                    </h3>

                    <div class="mb-6">
                        @if($member->image)
                            <div class="mb-4 relative group">
                                <img src="{{ asset($member->image) }}" class="w-full aspect-square object-cover rounded-2xl border-4 border-slate-100 shadow-lg">
                                <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity rounded-2xl flex items-center justify-center">
                                    <span class="text-white font-bold text-xs">Current Image</span>
                                </div>
                            </div>
                        @endif
                        
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Upload New Image</label>
                        <div class="relative">
                            <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                            <div class="bg-slate-50 border-2 border-dashed border-slate-200 rounded-2xl p-6 text-center group-hover:border-indigo-500 transition-all">
                                <i class="fa-solid fa-cloud-arrow-up text-slate-300 text-3xl mb-2"></i>
                                <p class="text-xs font-bold text-slate-500">Click or drag to upload</p>
                                <p class="text-[10px] text-slate-400 mt-1">PNG, JPG up to 2MB</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Display Order</label>
                        <input type="number" name="order" value="{{ old('order', $member->order ?? 0) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        <p class="text-[10px] text-slate-400 mt-1 font-bold">Lower numbers appear first.</p>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-indigo-500/40 transition-all">
                        {{ $member->exists ? 'Save Member Updates' : 'Add Member to Page' }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
