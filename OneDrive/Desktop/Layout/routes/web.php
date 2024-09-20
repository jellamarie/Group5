<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chapters', function () {
    return view('chapters');
});

Route::get('/contact', function () {
    return view('contact');
});

