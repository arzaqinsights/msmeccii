<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Event;
use App\Models\Form;
use App\Models\SiteSetting;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'settings' => SiteSetting::count(),
            'forms'    => Form::count(),
            'events'   => Event::count(),
            'users'    => User::count(),
        ];

        $gaId = config('services.google.analytics_id');
        $analyticsError = null;
        $activeUsersCount = 0;
        $analyticsData = null;
        $topPages = null;
        $topReferrers = null;
        $userTypes = null;
        $topCountries = null;
        $topBrowsers = null;
        $topOS = null;

        try {
            // Attempt to fetch data if property ID is correctly configured
            if (config('analytics.property_id')) {
                $period = \Spatie\Analytics\Period::days(7);
                
                // Fetch Total Visitors and PageViews for the last 7 Days
                $analyticsData = \Spatie\Analytics\Facades\Analytics::fetchTotalVisitorsAndPageViews($period);
                
                // Fetch Most Visited Pages
                $topPages = \Spatie\Analytics\Facades\Analytics::fetchMostVisitedPages($period, 6);
                
                // Fetch Top Referrers
                $topReferrers = \Spatie\Analytics\Facades\Analytics::fetchTopReferrers($period, 5);
                
                // Fetch User Demographics / Tech
                $userTypes = \Spatie\Analytics\Facades\Analytics::fetchUserTypes($period);
                $topBrowsers = \Spatie\Analytics\Facades\Analytics::fetchTopBrowsers($period, 5);
                $topCountries = \Spatie\Analytics\Facades\Analytics::fetchTopCountries($period, 6);
                $topOS = \Spatie\Analytics\Facades\Analytics::fetchTopOperatingSystems($period, 5);

                // Fetch Realtime Active Users
                try {
                    $realtimeResponse = \Spatie\Analytics\Facades\Analytics::getRealtimeReport([
                        'metrics' => ['activeUsers']
                    ]);
                    $activeUsersCount = $realtimeResponse->rows[0][0] ?? 0;
                } catch (\Exception $e) {
                    $activeUsersCount = 0;
                }
            }
        } catch (\Exception $e) {
            // Fails gracefully if Google Auth JSON is missing or misconfigured
            $analyticsError = "Google Analytics Data API Setup Required: " . $e->getMessage();
        }

        return view('admin.dashboard', compact(
            'stats', 'gaId', 'analyticsData', 'activeUsersCount', 'topPages', 
            'topReferrers', 'userTypes', 'topBrowsers', 'topCountries', 
            'topOS', 'analyticsError'
        ));
    }
}
