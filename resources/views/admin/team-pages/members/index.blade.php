@extends('layouts.admin')

@section('title', 'Manage Members: ' . $team_page->title)

@section('content')

<div class="mb-6">
    <a href="{{ route('admin.team-pages.index') }}" class="text-slate-500 hover:text-indigo-600 font-bold text-sm flex items-center gap-2 mb-2 transition-colors">
        <i class="fa-solid fa-arrow-left"></i> Back to Pages
    </a>
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-black text-slate-900">Members of "{{ $team_page->title }}"</h2>
            <p class="text-sm font-bold text-slate-500 mt-1">Manage individual person cards for this page.</p>
        </div>
        <a href="{{ route('admin.team-pages.members.create', $team_page) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:shadow-indigo-500/40 transition-all flex items-center gap-2">
            <i class="fa-solid fa-user-plus"></i>
            Add Member
        </a>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4 w-16 text-center">#</th>
                    <th class="px-6 py-4">Member Info</th>
                    <th class="px-6 py-4">Group / Category</th>
                    <th class="px-6 py-4">Designation</th>
                    <th class="px-6 py-4">Social Links</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($members as $index => $member)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4 text-center font-bold text-slate-400">
                            {{ $member->order ?? ($index + 1) }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden bg-slate-100 shrink-0">
                                    @if($member->image)
                                        <img src="{{ asset($member->image) }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-slate-300">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <p class="font-bold text-slate-900 text-base leading-tight">{{ $member->name }}</p>
                                    @if($member->company_name)
                                        <p class="text-[10px] font-black uppercase text-slate-400 mt-0.5">{{ $member->company_name }}</p>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            @if($member->group_name)
                                <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-bold">{{ $member->group_name }}</span>
                            @else
                                <span class="text-slate-400 italic text-xs">Default</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-indigo-600">{{ $member->designation }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                @if($member->social_links)
                                    @foreach($member->social_links as $platform => $url)
                                        @if($url)
                                            <a href="{{ $url }}" target="_blank" title="{{ ucfirst($platform) }}" class="w-7 h-7 rounded bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-indigo-600 hover:text-white transition-all">
                                                <i class="fa-brands fa-{{ $platform }} text-xs"></i>
                                            </a>
                                        @endif
                                    @endforeach
                                @else
                                    <span class="text-slate-400 italic text-xs">None</span>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="{{ route('admin.team-pages.members.edit', [$team_page, $member]) }}" class="text-slate-600 hover:text-slate-700 font-bold bg-slate-100 hover:bg-slate-200 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.team-pages.members.destroy', [$team_page, $member]) }}" method="POST" onsubmit="return confirm('Remove this member?');">
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
                            <p>No members added to this page yet.</p>
                            <a href="{{ route('admin.team-pages.members.create', $team_page) }}" class="text-indigo-600 font-bold hover:underline mt-2 inline-block">Add first member</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
