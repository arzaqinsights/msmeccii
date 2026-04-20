@extends('layouts.admin')

@section('title', 'Invoice Templates')

@section('content')
<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Invoice Templates</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Manage multiple invoice designs for different forms and services.</p>
    </div>
    <a href="{{ route('admin.invoice-designer.create') }}" class="bg-emerald-600 hover:bg-emerald-700 text-white font-black px-6 py-2.5 rounded-xl transition-all shadow-lg text-sm flex items-center gap-2">
        <i class="fa-solid fa-plus"></i> Create New Template
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-100">
                    <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">Template Name</th>
                    <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">Type</th>
                    <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">Status</th>
                    <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @forelse($templates as $template)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="font-bold text-slate-900">{{ $template->name }}</div>
                            <div class="text-[10px] text-slate-400 font-medium uppercase mt-0.5">Updated {{ $template->updated_at->diffForHumans() }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded-md text-[10px] font-black uppercase tracking-tighter {{ ($template->config['type'] ?? 'tax') === 'tax' ? 'bg-emerald-50 text-emerald-600' : 'bg-blue-50 text-blue-600' }}">
                                {{ $template->config['type'] ?? 'tax' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if($template->is_default)
                                <span class="bg-slate-900 text-white text-[9px] font-black px-2 py-1 rounded-full uppercase tracking-widest">Default</span>
                            @else
                                <span class="text-slate-300 text-[9px] font-black uppercase">—</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.invoice-designer.edit', $template) }}" class="h-8 w-8 flex items-center justify-center rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-900 hover:text-white transition-all shadow-sm">
                                    <i class="fa-solid fa-pen-nib text-xs"></i>
                                </a>
                                <form action="{{ route('admin.invoice-designer.destroy', $template) }}" method="POST" onsubmit="return confirm('Delete this template?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="h-8 w-8 flex items-center justify-center rounded-lg bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition-all shadow-sm">
                                        <i class="fa-solid fa-trash-can text-xs"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center">
                            <div class="text-slate-300 mb-2 rotate-12 inline-block">
                                <i class="fa-solid fa-file-invoice-dollar text-4xl"></i>
                            </div>
                            <div class="text-sm font-bold text-slate-400">No templates found. Create your first design!</div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($templates->hasPages())
        <div class="px-6 py-4 bg-slate-50 border-t border-slate-100">
            {{ $templates->links() }}
        </div>
    @endif
</div>
@endsection
