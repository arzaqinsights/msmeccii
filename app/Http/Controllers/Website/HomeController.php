<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\SiteSetting;

class HomeController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('status', 'published')
            ->where('event_date', '>=', now())
            ->orderBy('event_date', 'asc')
            ->limit(3)
            ->get();

        if ($upcomingEvents->count() < 1) {
            $upcomingEvents = Event::where('status', 'published')
                ->latest()
                ->limit(3)
                ->get();
        }

        $popupEvent = Event::where('status', 'published')
            ->where('show_as_popup', true)
            ->where('event_date', '>=', now())
            ->latest()
            ->first();

        $sectorSettings = SiteSetting::whereIn('key', ['sector_home_count', 'sector_home_layout'])->pluck('value', 'key')->toArray();

        return view('website.home.index', compact('upcomingEvents', 'popupEvent', 'sectorSettings'));
    }
}
