<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $data = \Spatie\Analytics\Facades\Analytics::fetchTotalVisitorsAndPageViews(\Spatie\Analytics\Period::days(7));
    print_r($data);
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
