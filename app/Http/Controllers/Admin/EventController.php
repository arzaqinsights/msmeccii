<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'asc')->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $event = new Event();
        return view('admin.events.form', compact('event'));
    }

    public function store(Request $request)
    {
        return $this->saveEvent($request, new Event());
    }

    public function edit(Event $event)
    {
        return view('admin.events.form', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        return $this->saveEvent($request, $event);
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event eradicated.');
    }

    private function saveEvent(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'design_style' => 'required|in:standard,featured',
            'status' => 'required|in:published,draft',
        ]);

        $event->title = $request->title;
        $event->slug = $request->slug ?: Str::slug($request->title);
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->location = $request->location;
        $event->design_style = $request->design_style;
        $event->status = $request->status;
        $event->show_timer = $request->has('show_timer');
        $event->download_btn_text = $request->download_btn_text;
        
        // General top-level featured image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events'), $filename);
            $event->image = '/uploads/events/' . $filename;
        } elseif (!$event->exists || $request->image === null && $request->image_url) {
            $event->image = $request->image_url;
        }

        // Handle Download PDF/Video
        if ($request->hasFile('download_file')) {
            $file = $request->file('download_file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events/files'), $filename);
            $event->download_file = '/uploads/events/files/' . $filename;
        }

        $event->save();

        return redirect()->route('admin.events.index')->with('success', 'Event successfully secured in the database.');
    }
}
