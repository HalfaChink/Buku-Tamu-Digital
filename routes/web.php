<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('./adminpanel/index');
});

Route::get('/charts', function () {
    return view('./adminpanel/charts');
});

Route::get('/register', function () {
    return view('register');
});
