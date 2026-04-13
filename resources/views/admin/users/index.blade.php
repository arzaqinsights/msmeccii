@extends('layouts.admin')

@section('title', 'User Database')

@section('content')

<div class="mb-6 flex justify-between items-end">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Platform Users</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Manage global users, memberships, and application history.</p>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-xs text-slate-500 uppercase tracking-widest font-black">
                    <th class="p-4 pl-6">Profile Details</th>
                    <th class="p-4">Business Info</th>
                    <th class="p-4">Contact</th>
                    <th class="p-4">Applications</th>
                    <th class="p-4">Joined Date</th>
                    <th class="p-4 pr-6 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm text-slate-700 divide-y divide-slate-100">
                @forelse($users->where('role', 'user') as $user)
                    <tr class="hover:bg-slate-50/50 transition-colors group">
                        <td class="p-4 pl-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full {{ $user->role === 'admin' ? 'bg-purple-100 text-purple-700' : 'bg-brand-primary/10 text-brand-primary' }} flex items-center justify-center font-black relative border {{ $user->role === 'admin' ? 'border-purple-200' : 'border-brand-primary/20' }}">
                                    {{ substr($user->name, 0, 1) }}
                                    @if($user->role === 'admin')
                                        <div class="absolute -bottom-1 -right-1 text-xs text-purple-600 bg-white rounded-full leading-none p-[1px] shadow-sm"><i class="fa-solid fa-crown"></i></div>
                                    @endif
                                </div>
                                <div>
                                    <h3 class="font-black text-slate-900">{{ $user->name }}</h3>
                                    <p class="text-[10px] uppercase font-bold tracking-wider text-slate-400 mt-0.5">{{ $user->role }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">
                            <span class="font-bold text-slate-800 block">{{ $user->company_name ?: 'N/A' }}</span>
                            <span class="text-xs font-medium text-slate-500">{{ $user->designation ?: 'Independent' }}</span>
                        </td>
                        <td class="p-4">
                            <div class="flex flex-col gap-1">
                                <span class="font-medium text-slate-600"><i class="fa-regular fa-envelope text-slate-400 w-4"></i> {{ $user->email }}</span>
                                <span class="text-xs font-medium text-slate-500"><i class="fa-solid fa-phone text-slate-400 w-4"></i> {{ $user->phone_number ?: 'Not Provided' }}</span>
                            </div>
                        </td>
                        <td class="p-4">
                            @if($user->submissions_count > 0)
                                <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-green-50 border border-green-200 text-green-700 text-xs font-bold">
                                    <i class="fa-solid fa-file-lines"></i> {{ $user->submissions_count }} Forms
                                </div>
                            @else
                                <span class="text-xs font-bold text-slate-400 bg-slate-100 px-2 py-1 rounded-md">None</span>
                            @endif
                        </td>
                        <td class="p-4 text-xs font-bold text-slate-500">
                            {{ $user->created_at->format('M d, Y') }}
                        </td>
                        <td class="p-4 pr-6 text-right">
                            <a href="{{ route('admin.users.show', $user->id) }}" class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-slate-100 text-slate-500 hover:bg-brand-primary hover:text-white transition-all shadow-sm group-hover:shadow relative outline-none focus:ring-2 focus:ring-brand-primary/50" title="View Full Profile">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-8 text-center text-slate-500 py-16">
                            <div class="flex flex-col items-center justify-center">
                                <i class="fa-solid fa-users-slash text-4xl mb-3 text-slate-300"></i>
                                <span class="font-bold text-slate-600 block mb-1">No users found.</span>
                                <span class="text-sm">The platform currently has absolutely no registered users.</span>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($users->hasPages())
        <div class="p-4 border-t border-slate-200 bg-slate-50">
            {{ $users->links() }}
        </div>
    @endif
</div>

@endsection
