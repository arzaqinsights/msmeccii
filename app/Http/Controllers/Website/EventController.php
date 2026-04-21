<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 'published')
            ->orderBy('event_date', 'asc')
            ->paginate(12);
            
        return view('website.events.index', compact('events'));
    }

    public function show($slug)
    {
        // Fixing duplicate variable names from original route
        $event = Event::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
            
        return view('website.events.show', compact('event'));
    }
}
