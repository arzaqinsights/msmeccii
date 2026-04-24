@extends('layouts.admin')

@section('title', 'Manage Team Pages')

@section('content')

<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Team & Person Pages</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Create dynamic pages like "Our Team", "Core Leadership", etc.</p>
    </div>
    <a href="{{ route('admin.team-pages.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:shadow-indigo-500/40 transition-all flex items-center gap-2">
        <i class="fa-solid fa-plus"></i>
        Create New Page
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">Page Title</th>
                    <th class="px-6 py-4">Slug</th>
                    <th class="px-6 py-4">Members Count</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($pages as $page)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-bold text-slate-900 text-base">{{ $page->title }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <code class="text-xs bg-slate-100 px-2 py-1 rounded text-slate-600">/about/{{ $page->slug }}</code>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-slate-900">{{ $page->members->count() }} Members</span>
                        </td>
                        <td class="px-6 py-4">
                            @if($page->status)
                                <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded font-bold uppercase inline-block">Active</span>
                            @else
                                <span class="text-[10px] bg-red-100 text-red-700 px-2 py-0.5 rounded font-bold uppercase inline-block">Inactive</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="{{ route('admin.team-pages.members.index', $page) }}" class="text-indigo-600 hover:text-indigo-700 font-bold bg-indigo-50 hover:bg-indigo-100 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-solid fa-users mr-1"></i> Manage Members
                                </a>
                                <a href="{{ route('admin.team-pages.edit', $page) }}" class="text-slate-600 hover:text-slate-700 font-bold bg-slate-100 hover:bg-slate-200 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.team-pages.destroy', $page) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this page and all its members?');">
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
                        <td colspan="5" class="px-6 py-12 text-center text-slate-500 font-medium">
                            <p>No team pages created yet.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
