<?php

use Illuminate\Support\Facades\Route;

# Temporarily commented out the default route
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'contact')->name('contact');