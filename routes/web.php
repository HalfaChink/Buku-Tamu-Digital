<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditController;

Route::post('/loginadmin', [AdminController::class, 'login'])->name('loginAdmin.submit');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/historytable', function () {
        return view('./adminpanel/historytable');
    });
    Route::get('/dashboard', function () {
        return view('./adminpanel/charts');
    });
    Route::get('/edit', function () {
        return view('./adminpanel/edit');
    });
    Route::get('/listadmin', function () {
        return view('./adminpanel/listadmin');
    });
    Route::get('/carousel/edit', [EditController::class, 'edit'])->name('carousel.edit');
    Route::post('/carousel/store', [EditController::class, 'store'])->name('carousel.store');
    Route::post('/carousel/update/{id}', [EditController::class, 'update'])->name('carousel.update');
    Route::delete('/carousel/destroy/{id}', [EditController::class, 'destroy'])->name('carousel.destroy');
});

Route::post('/pengunjung/store', [UserController::class, 'store'])->name('pengunjung.store');
Route::post('/kunjungan/store', [KunjunganController::class, 'store'])->name('kunjungan.store');
Route::get('/chart-data', [UserController::class, 'chartData'])->name('chart.data');



Route::post('/logoutAdmin', [AdminController::class, 'logout'])->name('logoutAdmin');
// dashboard 
Route::get('/', [EditController::class, 'dashboard'])->name('dashboard');

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
