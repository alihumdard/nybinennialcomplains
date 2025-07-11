<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landingpage');
});

Route::get('/checkoutpage', function () {
    return view('pages.checkoutpage');
});

Route::get('/confirmation', function () {
    return view('pages.confirmation');
});

// Dashboard Pages
Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('dashboard');

Route::get('/acount', function () {
    return view('pages.admin.acount');
})->name('acount');

Route::get('/filter', function () {
    return view('pages.admin.filter');
})->name('filter');
