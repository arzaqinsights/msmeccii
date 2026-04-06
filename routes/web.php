<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/modern', function () {
    return view('modern');
});

Route::get('/traditional', function () {
    return view('traditional');
});
