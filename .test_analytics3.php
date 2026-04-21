<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $period = \Spatie\Analytics\Period::days(7);
    
    echo "Testing TotalVisitors:\n";
    $analyticsData = \Spatie\Analytics\Facades\Analytics::fetchTotalVisitorsAndPageViews($period);
    echo get_class($analyticsData) . " - Count: " . $analyticsData->count() . "\n";

    echo "Testing UserTypes:\n";
    $userTypes = \Spatie\Analytics\Facades\Analytics::fetchUserTypes($period);
    echo get_class($userTypes) . " - Count: " . $userTypes->count() . "\n";

    echo "Testing TopBrowser:\n";
    $topBrowsers = \Spatie\Analytics\Facades\Analytics::fetchTopBrowsers($period, 5);
    echo get_class($topBrowsers) . " - Count: " . $topBrowsers->count() . "\n";

    echo "Testing TopCountries:\n";
    $topCountries = \Spatie\Analytics\Facades\Analytics::fetchTopCountries($period, 6);
    echo get_class($topCountries) . " - Count: " . $topCountries->count() . "\n";
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
