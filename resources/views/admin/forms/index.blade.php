@extends('layouts.admin')

@section('title', 'Manage Forms')

@section('content')

<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Dynamic Forms</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Construct nomination and application forms visually.</p>
    </div>
    <a href="{{ route('admin.forms.create') }}" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:shadow-emerald-500/40 transition-all flex items-center gap-2">
        <i class="fa-solid fa-plus"></i>
        Create New Form
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">Form Document Name</th>
                    <th class="px-6 py-4">Total Fields</th>
                    <th class="px-6 py-4">Creation Date</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($forms as $form)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-bold text-slate-900 text-base">{{ $form->name }}</p>
                        </td>
                        <td class="px-6 py-4 font-black text-slate-800">
                            {{ $form->fields_count }} Input Fields
                        </td>
                        <td class="px-6 py-4 font-medium text-slate-500">
                            {{ $form->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="{{ route('admin.forms.edit', $form) }}" class="text-emerald-600 hover:text-emerald-700 font-bold bg-emerald-50 hover:bg-emerald-100 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-regular fa-pen-to-square mr-1"></i> Edit Blueprint
                                </a>
                                <form action="{{ route('admin.forms.destroy', $form) }}" method="POST" onsubmit="return confirm('Are you sure you want to completely delete this form?');">
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
                                <i class="fa-solid fa-list-check text-slate-400 text-2xl"></i>
                            </div>
                            <p>No dynamic forms exist yet.</p>
                            <a href="{{ route('admin.forms.create') }}" class="text-emerald-500 font-bold hover:underline mt-2 inline-block">Build your first form here</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($forms->hasPages())
        <div class="border-t border-slate-100 px-6 py-4">
            {{ $forms->links() }}
        </div>
    @endif
</div>

@endsection
