<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-en');
});

Route::get('/id', function () {
    return view('home-id');
});

Route::get('/thank-you', function () {
    return view('thank_you-en');
});

Route::get('/thank-you/id', function () {
    return view('thank_you-id');
});