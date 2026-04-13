@extends('layouts.admin')

@section('title', 'Sector Management')

@section('content')

<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Industry Sectors</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Manage global industry pathways and their dynamic landing pages.</p>
    </div>
    <a href="{{ route('admin.sectors.create') }}" class="bg-brand-primary hover:bg-brand-primary-dark text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:shadow-brand-primary/40 transition-all flex items-center gap-2">
        <i class="fa-solid fa-plus"></i>
        Build Sector Page
    </a>
</div>

<div class="bg-indigo-50 border border-indigo-100 rounded-2xl p-6 shadow-sm mb-8">
    <h3 class="text-sm font-black text-indigo-900 uppercase tracking-widest mb-4 border-b border-indigo-200 pb-2"><i class="fa-solid fa-desktop"></i> Homepage Render Configuration</h3>
    
    <form action="{{ route('admin.sectors.settings') }}" method="POST" class="flex flex-col md:flex-row gap-6 items-end">
        @csrf
        
        <div class="w-full md:w-1/3">
            <label class="block text-[10px] font-bold text-indigo-500 uppercase tracking-wider mb-2">Display Mode</label>
            <select name="sector_home_layout" class="w-full bg-white border border-indigo-200 rounded-xl p-3 outline-none focus:border-indigo-500 font-bold text-indigo-900 shadow-sm cursor-pointer">
                <option value="grid" {{ (isset($settings['sector_home_layout']) && $settings['sector_home_layout'] == 'grid') ? 'selected' : '' }}>Standard CSS Grid (Stacked Rows)</option>
                <option value="scroll" {{ (isset($settings['sector_home_layout']) && $settings['sector_home_layout'] == 'scroll') ? 'selected' : '' }}>Interactive Slider (Left to Right)</option>
            </select>
        </div>
        
        <div class="w-full md:w-1/3">
            <label class="block text-[10px] font-bold text-indigo-500 uppercase tracking-wider mb-2">Card Limit Count</label>
            <input type="number" name="sector_home_count" value="{{ $settings['sector_home_count'] ?? 8 }}" min="1" max="24" class="w-full bg-white border border-indigo-200 rounded-xl p-3 outline-none focus:border-indigo-500 font-bold text-indigo-900 shadow-sm">
        </div>
        
        <div class="w-full md:w-1/3">
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-6 py-3 rounded-xl shadow-md transition-all">
                Update Live Feed
            </button>
        </div>
    </form>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">Sector Identifier</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Content Nodes</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($sectors as $sector)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-bold text-slate-900 text-base">{{ $sector->title }}</p>
                            <p class="text-xs text-slate-400 font-medium">/{{ $sector->slug }}</p>
                        </td>
                        <td class="px-6 py-4">
                            @if($sector->status == 'active')
                                <span class="px-3 py-1 bg-green-100 text-green-700 font-bold rounded-md text-xs uppercase">Live</span>
                            @else
                                <span class="px-3 py-1 bg-slate-100 text-slate-500 font-bold rounded-md text-xs uppercase">Draft</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-black text-slate-800">
                            {{ $sector->sections_count }} Blocks
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="{{ route('admin.sectors.edit', $sector) }}" class="text-brand-primary hover:text-brand-primary-dark font-bold bg-brand-primary/10 hover:bg-brand-primary/20 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-regular fa-pen-to-square mr-1"></i> Edit Builder
                                </a>
                                <form action="{{ route('admin.sectors.destroy', $sector) }}" method="POST" onsubmit="return confirm('Are you sure you want to completely delete this sector and its dynamic page?');">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-bold bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition-colors">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-slate-500 font-medium">
                            <div class="inline-flex w-16 h-16 bg-slate-100 rounded-full items-center justify-center mb-4">
                                <i class="fa-solid fa-cubes text-slate-400 text-2xl"></i>
                            </div>
                            <p>No sector pages have been built yet.</p>
                            <a href="{{ route('admin.sectors.create') }}" class="text-brand-primary font-bold hover:underline mt-2 inline-block">Build your first sector</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($sectors->hasPages())
        <div class="border-t border-slate-100 px-6 py-4">
            {{ $sectors->links() }}
        </div>
    @endif
</div>

@endsection
