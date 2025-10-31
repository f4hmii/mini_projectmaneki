<?php

use Illuminate\Support\Facades\Route;
use App\Models\SiteSetting;
use App\Models\ContentBlock;

Route::get('/', function () {
    // Ambil baris pertama (satu-satunya) dari SiteSetting
    $settings = SiteSetting::firstOrCreate();

    // Ambil blok konten Akses Cepat dan Misi Kami
    $quick_access = ContentBlock::where('group_name', 'akses_cepat')->orderBy('sort_order')->get();
    $our_mission = ContentBlock::where('group_name', 'misi_kami_lp')->orderBy('sort_order')->get();

    return view('landingPage', [
        'settings' => $settings,
        'quick_access' => $quick_access,
        'our_mission' => $our_mission,
    ]);
});

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
