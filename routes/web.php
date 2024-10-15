<?php

use Illuminate\Support\Facades\Route;

// dashboard 
Route::get('/', function () {
    return view('./pages/dashboard');
})->name('dashboard');
// panel admin 
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
    return view('./pages/register');
})->name('register');

Route::get('/register2', function () {
    return view('./pages/register2');
})->name('register2');

Route::get('/app', function () {    
    return view('layouts/app');
});

Route::get('/loginadmin', function () {
    return view('./adminpanel/loginadmin');
})->name('loginAdmin');