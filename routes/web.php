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

// register
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/register2', function () {
    return view('register2');
})->name('register2');

Route::get('/app', function () {    
    return view('layouts/app');
});

Route::get('/loginadmin', function () {
    return view('./adminpanel/loginadmin');
});