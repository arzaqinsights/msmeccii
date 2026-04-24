<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\SiteSetting;

class HomeController extends Controller
{
    public function index()
    {
        $upcomingEvents = Event::where('status', 'published')
            ->where('event_date', '>=', now())
            ->orderBy('event_date', 'desc')
            ->get();

        $popupEvent = Event::where('status', 'published')
            ->where('show_as_popup', true)
            ->where('event_date', '>=', now())
            ->latest()
            ->first();

        $sectorSettings = SiteSetting::whereIn('key', ['sector_home_count', 'sector_home_layout'])->pluck('value', 'key')->toArray();

        // Gallery preview for home (8 latest images)
        $galleryImages = Gallery::latest()->limit(7)->get();

        // Latest blog articles for home (3 published)
        $latestArticles = Article::where('is_published', true)->latest('published_at')->limit(3)->get();

        // Hero Sliders
        $sliders = \App\Models\HomeSlider::where('is_active', true)->orderBy('order')->get();

        return view('website.home.index', compact('upcomingEvents', 'popupEvent', 'sectorSettings', 'galleryImages', 'latestArticles', 'sliders'));
    }
}
