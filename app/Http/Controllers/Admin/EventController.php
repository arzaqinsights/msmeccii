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
        
        // General top-level featured image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events'), $filename);
            $event->image = '/uploads/events/' . $filename;
        } elseif (!$event->exists || $request->image === null && $request->image_url) {
            $event->image = $request->image_url;
        }

        // Process Builder Content securely
        if ($request->has('builder_content')) {
            $builderArray = json_decode($request->builder_content, true);
            if (is_array($builderArray)) {
                $event->builder_content = $this->processBuilderBlocks($builderArray, $request);
            } else {
                $event->builder_content = [];
            }
        }

        $event->save();

        return redirect()->route('admin.events.index')->with('success', 'Event successfully secured in the database.');
    }

    private function processBuilderBlocks($blocks, Request $request) 
    {
        foreach($blocks as &$block) {
            if (isset($block['id']) && $request->hasFile("builder_image_{$block['id']}")) {
                $file = $request->file("builder_image_{$block['id']}");
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/events'), $filename);
                
                if (!isset($block['content'])) $block['content'] = [];
                $block['content']['image_url'] = '/uploads/events/' . $filename;
            }

            if (isset($block['id']) && $request->hasFile("builder_bg_{$block['id']}")) {
                $file = $request->file("builder_bg_{$block['id']}");
                $filename = time() . '_bg_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/events'), $filename);
                $block['bg_image'] = '/uploads/events/' . $filename;
            }

            // Recursive traversal for nested structural columns/blocks
            if (isset($block['blocks']) && is_array($block['blocks'])) {
                $block['blocks'] = $this->processBuilderBlocks($block['blocks'], $request);
            }
        }
        return $blocks;
    }
}
