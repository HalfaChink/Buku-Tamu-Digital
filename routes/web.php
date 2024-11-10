<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::post('/loginadmin', [AdminController::class, 'login'])->name('loginAdmin.submit');


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/historytable', function () {
        return view('./adminpanel/historytable');
    });
    Route::get('/charts', function () {
        return view('./adminpanel/charts');
    });
    Route::get('/edit', function () {
        return view('./adminpanel/edit');
    });
    Route::get('/listadmin', function () {
        return view('./adminpanel/listadmin');
    });
    Route::get('/usertable', [UserController::class, 'index'])->name('usertable');
});

Route::post('/pengunjung/store', [UserController::class, 'store'])->name('pengunjung.store');
Route::post('/kunjungan/store', [KunjunganController::class, 'store'])->name('kunjungan.store');
Route::get('/chart-data', [UserController::class, 'chartData'])->name('chart.data');



Route::post('/logoutAdmin', [AdminController::class, 'logout'])->name('logoutAdmin');
// dashboard 
Route::get('/', function () {
    return view('./pages/dashboard');
})->name('dashboard');

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

//Login Admin

Route::get('/adminsignup', function () {
    return view('./pages/adminsignup');
})->name('adminsignup');

Route::get('/loginadmin', function () {
    return view('./pages/loginadmin');
})->name('loginadmin');

Route::get('/form', function () {
    return view('/layouts/form');
})->name('form');
