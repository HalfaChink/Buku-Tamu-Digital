<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/dashboard');
});

Route::get('/charts', function () {
    return view('./adminpanel/charts');
});


Route::get('/edit', function () {
    return view('./adminpanel/edit');
});

Route::get('/historytable', function () {
    return view('./adminpanel/historytable');
});

Route::get('/usertable', function () {
    return view('./adminpanel/usertable');
});

Route::get('/loginadmin', function () {
    return view('./adminpanel/loginadmin');
});

Route::get('/register', function () {
    return view('/register');
});