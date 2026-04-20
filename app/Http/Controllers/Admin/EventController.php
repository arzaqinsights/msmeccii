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
        $currentPopup = Event::where('show_as_popup', true)->first();
        return view('admin.events.form', compact('event', 'currentPopup'));
    }

    public function store(Request $request)
    {
        return $this->saveEvent($request, new Event());
    }

    public function edit(Event $event)
    {
        $currentPopup = Event::where('show_as_popup', true)->where('id', '!=', $event->id)->first();
        return view('admin.events.form', compact('event', 'currentPopup'));
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

    public function uploadAttachment(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:20480', // 20MB max
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events/attachments'), $filename);
            return response()->json([
                'success' => true,
                'path' => '/uploads/events/attachments/' . $filename,
                'name' => $file->getClientOriginalName()
            ]);
        }

        return response()->json(['success' => false], 400);
    }

    private function saveEvent(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:event_date',
            'design_style' => 'required|in:standard,featured',
            'status' => 'required|in:published,draft',
        ]);

        $event->title = $request->title;
        $event->short_description = $request->short_description;
        $event->slug = $request->slug ?: Str::slug($request->title);
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->design_style = $request->design_style;
        $event->status = $request->status;
        $event->show_timer = $request->has('show_timer');
        $event->show_as_popup = $request->has('show_as_popup');
        $event->download_btn_text = $request->download_btn_text;
        $event->builder_content = $request->builder_content;
        
        // General top-level featured image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events'), $filename);
            $event->image = '/uploads/events/' . $filename;
        } elseif (!$event->exists || $request->image === null && $request->image_url) {
            $event->image = $request->image_url;
        }

        // Handle Legacy Download PDF/Video (if still used)
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
