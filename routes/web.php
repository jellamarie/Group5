<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('resources/views/about.blade.php', function () {
    return view('about');
});

Route::get('resources/views/content.blade.php', function () {
    return view('content');
});
