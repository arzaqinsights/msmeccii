@extends('layouts.admin')

@section('title', 'Growth Statistics Management')

@section('content')
<div class="space-y-8" x-data="{ openGroup: 'conference' }">
    
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-black text-slate-900">Growth Stats Builder</h1>
            <p class="text-slate-500 font-medium">Manage Conferences and Awards data.</p>
        </div>
        <button @click="$dispatch('open-modal', 'add-stat')" class="bg-brand-primary text-white px-6 py-3 rounded-xl font-bold text-sm shadow-lg shadow-brand-primary/20 hover:-translate-y-0.5 transition-all">
            <i class="fa-solid fa-plus mr-2"></i> Add New Stat
        </button>
    </div>

    <!-- Group Tabs -->
    <div class="flex gap-2 p-1 bg-slate-100 rounded-2xl w-fit">
        <button @click="openGroup = 'conference'" :class="openGroup === 'conference' ? 'bg-white text-slate-900 shadow-sm' : 'text-slate-500'" class="px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-widest transition-all">Conferences</button>
        <button @click="openGroup = 'award'" :class="openGroup === 'award' ? 'bg-white text-slate-900 shadow-sm' : 'text-slate-500'" class="px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-widest transition-all">Awards</button>
    </div>

    <!-- Grid of Stats -->
    <div class="space-y-12">
        @foreach($records as $group => $groupRecords)
        <div x-show="openGroup === '{{ $group }}'" x-cloak class="space-y-6">
            <h2 class="text-lg font-black text-slate-900 uppercase tracking-widest border-l-4 border-brand-accent pl-4">{{ ucfirst($group) }}s</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($groupRecords as $record)
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 flex flex-col justify-between group h-full">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ $record->sub_category ?: $record->category }}</span>
                                <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button @click="$dispatch('open-modal', 'edit-stat-{{ $record->id }}')" class="w-8 h-8 rounded-lg bg-blue-50 text-blue-500 flex items-center justify-center text-xs hover:bg-blue-500 hover:text-white transition-all">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <form action="{{ route('admin.growth.destroy', $record->id) }}" method="POST" onsubmit="return confirm('Delete this record?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="w-8 h-8 rounded-lg bg-rose-50 text-rose-500 flex items-center justify-center text-xs hover:bg-rose-500 hover:text-white transition-all">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 mb-1">{{ $record->value }}</h3>
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">{{ $record->year }}</span>
                                <span class="text-[10px] font-medium text-slate-400">•</span>
                                <span class="text-[10px] font-bold text-brand-primary uppercase tracking-widest">{{ $record->label ?: $record->category }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Modal -->
                    <x-modal name="edit-stat-{{ $record->id }}" title="Edit Stat">
                        <form action="{{ route('admin.growth.update', $record->id) }}" method="POST" class="p-6 space-y-4">
                            @csrf @method('PUT')
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Group</label>
                                    <select name="group" class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm">
                                        <option value="conference" {{ $record->group == 'conference' ? 'selected' : '' }}>Conference</option>
                                        <option value="award" {{ $record->group == 'award' ? 'selected' : '' }}>Award</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Category</label>
                                    <input type="text" name="category" value="{{ $record->category }}" required class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Sub Category (e.g. 1st Excellence Award)</label>
                                <input type="text" name="sub_category" value="{{ $record->sub_category }}" class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Year</label>
                                    <input type="text" name="year" value="{{ $record->year }}" required class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Value</label>
                                    <input type="text" name="value" value="{{ $record->value }}" required class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Label</label>
                                <input type="text" name="label" value="{{ $record->label }}" class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm">
                            </div>
                            <div class="pt-4">
                                <button type="submit" class="w-full bg-brand-primary text-white py-4 rounded-xl font-bold transition-all hover:scale-[1.02]">Update Stat</button>
                            </div>
                        </form>
                    </x-modal>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

    <!-- Add Modal -->
    <x-modal name="add-stat" title="Add New Growth Stat">
        <form action="{{ route('admin.growth.store') }}" method="POST" class="p-6 space-y-4">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Group</label>
                    <select name="group" required class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-primary">
                        <option value="conference">Conference</option>
                        <option value="award">Award</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Category</label>
                    <input type="text" name="category" required placeholder="delegates/speakers..." class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-primary">
                </div>
            </div>
            <div>
                <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Sub Category (e.g. 1st Excellence Award)</label>
                <input type="text" name="sub_category" placeholder="Optional" class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-primary">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Year</label>
                    <input type="text" name="year" required placeholder="e.g. 2024" class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-primary">
                </div>
                <div>
                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Value</label>
                    <input type="text" name="value" required placeholder="e.g. 8000+" class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-primary">
                </div>
            </div>
            <div>
                <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Label</label>
                <input type="text" name="label" placeholder="e.g. Delegates" class="w-full bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-brand-primary">
            </div>
            <div class="pt-4">
                <button type="submit" class="w-full bg-brand-primary text-white py-4 rounded-xl font-bold transition-all hover:scale-[1.02]">Save Stat</button>
            </div>
        </form>
    </x-modal>

</div>
@endsection
