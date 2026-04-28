<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$form = \App\Models\Form::with('fields')->latest()->first();
echo json_encode($form->toArray(), JSON_PRETTY_PRINT);
