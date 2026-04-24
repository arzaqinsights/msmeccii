@extends('layouts.admin')

@section('title', $page->exists ? 'Edit Team Page' : 'Create Team Page')

@section('content')

<div class="mb-6">
    <a href="{{ route('admin.team-pages.index') }}" class="text-slate-500 hover:text-indigo-600 font-bold text-sm flex items-center gap-2 mb-2 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to List
    </a>
    <h2 class="text-2xl font-black text-slate-900">{{ $page->exists ? 'Edit Page: ' . $page->title : 'Create New Team Page' }}</h2>
</div>

<div class="max-w-4xl">
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <form action="{{ $page->exists ? route('admin.team-pages.update', $page) : route('admin.team-pages.store') }}" method="POST" class="p-8">
            @csrf
            @if($page->exists) @method('PUT') @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Page Title</label>
                    <input type="text" name="title" value="{{ old('title', $page->title) }}" required placeholder="e.g. Core Leadership" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                </div>
                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Custom Slug (Optional)</label>
                    <input type="text" name="slug" value="{{ old('slug', $page->slug) }}" placeholder="e.g. core-leadership" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                    <p class="text-[10px] text-slate-400 mt-1 font-bold">Leave blank to auto-generate from title.</p>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Description / Intro Text</label>
                <textarea name="description" rows="4" placeholder="Briefly describe the purpose of this team/group..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">{{ old('description', $page->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Status</label>
                    <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                        <option value="1" {{ old('status', $page->status) == 1 ? 'selected' : '' }}>Active (Visible in Menu)</option>
                        <option value="0" {{ old('status', $page->status) == 0 ? 'selected' : '' }}>Inactive (Hidden)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', $page->order ?? 0) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 font-bold text-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all">
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-6 border-t border-slate-100">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-xl shadow-lg hover:shadow-indigo-500/40 transition-all">
                    {{ $page->exists ? 'Update Page Configuration' : 'Create Team Page' }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
