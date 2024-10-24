<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KunjunganController;

Route::post('/kunjungan', [KunjunganController::class, 'store'])->name('kunjungan.store');

Route::get('/historytable', [KunjunganController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
=======
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

Route::get('/usertable', function () {
    return view('./adminpanel/usertable');
});

Route::get('/listadmin', function () {
    return view('./adminpanel/listadmin');
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

