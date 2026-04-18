<?php
$config = include 'config/sectors.php';
$missingCount = 0;
foreach($config['sectors'] as $s) {
    if(!file_exists('public/'.$s['thumbnail'])) {
        echo 'MISSING: ' . $s['thumbnail'] . PHP_EOL;
        $missingCount++;
    }
}
echo "Total Missing: " . $missingCount . PHP_EOL;
