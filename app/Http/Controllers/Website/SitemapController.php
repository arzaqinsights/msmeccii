<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\Event;
use App\Models\Form;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [];

        // Static URLS
        $staticUrls = [
            '/', '/about/what-is-msmeccii', '/about/chairman', '/about/leadership',
            '/contact-us', '/privacy-policy', '/terms-and-conditions', '/join', 
            '/sectors', '/events'
        ];

        foreach ($staticUrls as $url) {
            $urls[] = [
                'loc' => url($url),
                'lastmod' => Carbon::now()->startOfMonth()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => ($url === '/') ? '1.0' : '0.8',
            ];
        }

        // Sectors
        foreach (config('sectors.sectors') ?? [] as $sector) {
            $urls[] = [
                'loc' => url('/sectors/' . $sector['slug']),
                'lastmod' => Carbon::now()->startOfMonth()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ];
        }

        // Events
        $events = Event::where('status', 'published')->get();
        foreach ($events as $event) {
            $urls[] = [
                'loc' => url('/events/' . $event->slug),
                'lastmod' => $event->updated_at->toAtomString(),
                'changefreq' => 'daily',
                'priority' => '0.9',
            ];
        }

        // Forms / Memberships
        $forms = Form::where('status', 'published')->get();
        foreach ($forms as $form) {
            $urls[] = [
                'loc' => url('/join/application/' . $form->slug),
                'lastmod' => $form->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ];
        }

        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"/>');
        
        foreach ($urls as $url) {
            $urlXml = $xml->addChild('url');
            $urlXml->addChild('loc', htmlspecialchars($url['loc']));
            $urlXml->addChild('lastmod', $url['lastmod']);
            $urlXml->addChild('changefreq', $url['changefreq']);
            $urlXml->addChild('priority', $url['priority']);
        }

        return response($xml->asXML(), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
