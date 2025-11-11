<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('about')->group(function () {
    Route::get('/chong-kai-jun', function () {
        return view('about.chong-kai-jun');
    })->name('about.chong-kai-jun');

    Route::get('/lim-eng-seng', function () {
        return view('about.lim-eng-seng');
    })->name('about.lim-eng-seng');

    Route::get('/gan-jun-wei', function () {
        return view('about.gan-jun-wei');
    })->name('about.gan-jun-wei');

    Route::get('/chong-hong-xiong', function () {
        return view('about.chong-hong-xiong');
    })->name('about.chong-hong-xiong');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');