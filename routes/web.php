<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/about', function () {
    return view('aboutUs');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/contact', function () {
    return view('contact');
});
