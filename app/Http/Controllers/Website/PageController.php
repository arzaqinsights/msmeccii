<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function terms()
    {
        return view('website.terms');
    }

    public function privacy()
    {
        return view('website.privacy');
    }

    public function contact()
    {
        return view('website.contact.index'); // Fixing the duplicate contact views
    }

    public function about()
    {
        // Growth Stats (moved from home page)
        $delegates = \App\Models\GrowthRecord::where('group', 'conference')->where('category', 'delegates')->orderBy('year')->get();

        return view('website.about.what_is', compact('delegates'));
    }

    public function chairman()
    {
        return view('website.about.chairman');
    }

    public function leadership()
    {
        return view('website.about.leadership');
    }

    public function news()
    {
        return view('website.news.index');
    }

    public function gallery()
    {
        // Fetch unique categories and their latest image to show as cover
        $categories = \App\Models\Gallery::selectRaw('category, count(*) as image_count, max(id) as latest_id')
            ->groupBy('category')
            ->get();
            
        foreach ($categories as $cat) {
            $cat->cover = \App\Models\Gallery::find($cat->latest_id)->image_path;
        }

        // Apply Custom Ordering
        $site = \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        $savedOrder = isset($site['gallery_category_order']) ? json_decode($site['gallery_category_order'], true) : [];
        
        if (!empty($savedOrder)) {
            $categories = $categories->sortBy(function($cat) use ($savedOrder) {
                $pos = array_search($cat->category, $savedOrder);
                return $pos === false ? 999 : $pos;
            })->values();
        }

        return view('website.gallery.index', compact('categories'));
    }

    public function galleryShow($categoryEncoded)
    {
        $category = base64_decode($categoryEncoded);
        $images = \App\Models\Gallery::where('category', $category)->latest()->get();

        if ($images->isEmpty()) {
            abort(404);
        }

        return view('website.gallery.show', compact('images', 'category'));
    }

    public function service($slug)
    {
        return view('website.services.' . $slug);
    }
    
    public function join()
    {
        return view('website.join.index');
    }

    public function teamPage($slug)
    {
        $page = \App\Models\TeamPage::where('slug', $slug)->where('status', true)->firstOrFail();
        $members = $page->members()->orderBy('order')->get();
        return view('website.team.show', compact('page', 'members'));
    }
}
