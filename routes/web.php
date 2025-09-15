<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/welcome', function () {
    return view('welcome');
});


// Homepage
Route::get('/', function () {
    return view('pages.home');
});

// About page
Route::get('/about', function () {
    return view('pages.about');
});

// Contact page
Route::get('/contact', function () {
    return view('pages.contact');
});


