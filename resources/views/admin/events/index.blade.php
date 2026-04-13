@extends('layouts.admin')

@section('title', 'Manage Events')

@section('content')

<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-black text-slate-900">Global Events Dashboard</h2>
        <p class="text-sm font-bold text-slate-500 mt-1">Schedule and customize event displays across the platform.</p>
    </div>
    <a href="{{ route('admin.events.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-xl shadow-lg hover:shadow-purple-500/40 transition-all flex items-center gap-2">
        <i class="fa-solid fa-calendar-plus"></i>
        Schedule New Event
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">Event Details</th>
                    <th class="px-6 py-4">Design Rules</th>
                    <th class="px-6 py-4">Scheduled For</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($events as $event)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-bold text-slate-900 text-base">{{ $event->title }}</p>
                            @if($event->status == 'published')
                                <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded font-bold uppercase mt-1 inline-block">Published</span>
                            @else
                                <span class="text-[10px] bg-slate-100 text-slate-500 px-2 py-0.5 rounded font-bold uppercase mt-1 inline-block">Draft</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if($event->design_style == 'featured')
                                <div class="flex items-center gap-2 text-purple-600 font-bold text-xs uppercase bg-purple-50 px-3 py-1.5 rounded-lg inline-flex border border-purple-100">
                                    <i class="fa-solid fa-star"></i> Featured Banner
                                </div>
                            @else
                                <div class="flex items-center gap-2 text-slate-500 font-bold text-xs uppercase bg-slate-50 px-3 py-1.5 rounded-lg inline-flex border border-slate-200">
                                    <i class="fa-regular fa-square"></i> Standard Card
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <p class="font-black text-slate-800">{{ $event->event_date->format('M d, Y') }}</p>
                            <p class="text-xs text-slate-400 font-medium">at {{ $event->event_date->format('h:i A') }}</p>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="{{ route('admin.events.edit', $event) }}" class="text-purple-600 hover:text-purple-700 font-bold bg-purple-50 hover:bg-purple-100 px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-regular fa-pen-to-square mr-1"></i> Edit Conf
                                </a>
                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this event?');">
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
                                <i class="fa-solid fa-calendar-xmark text-slate-400 text-2xl"></i>
                            </div>
                            <p>No events are currently scheduled.</p>
                            <a href="{{ route('admin.events.create') }}" class="text-purple-600 font-bold hover:underline mt-2 inline-block">Schedule event here</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($events->hasPages())
        <div class="border-t border-slate-100 px-6 py-4">
            {{ $events->links() }}
        </div>
    @endif
</div>

@endsection
