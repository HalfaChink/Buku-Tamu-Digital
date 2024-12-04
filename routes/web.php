<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditController;

Route::post('/login', [AdminController::class, 'login'])->name('login.submit');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/historytable', function () {
        return view('./adminpanel/historytable');
    });
    Route::get('/dashboard', function () {
        return view('./adminpanel/charts');
    });
    Route::get('/listadmin', [AdminController::class, 'list'])->name('listadmin');
    Route::get('/adminsignup', function () {
        return view('./pages/adminsignup');
    })->name('admin.signup.form');
    Route::get('/edit', [EditController::class, 'edit'])->name('edit');
    Route::get('/usertable', [UserController::class, 'index'])->name('usertable');
    Route::get('/carousel/edit', [EditController::class, 'edit'])->name('carousel.edit');
    Route::post('/adminsignup', [AdminController::class, 'signup'])->name('admin.signup');
    Route::post('/carousel/store', [EditController::class, 'store'])->name('carousel.store');
    Route::post('/carousel/update/{id}', [EditController::class, 'update'])->name('carousel.update');
    Route::post('/visitor/store', [EditController::class, 'store'])->name('visitor.store');
    Route::delete('/carousel/destroy/{id}', [EditController::class, 'destroy'])->name('carousel.destroy');
    Route::delete('/pengunjung/{id}', [UserController::class, 'destroy'])->name('pengunjung.destroy');
    Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::delete('/visitor/destroy/{id}', [EditController::class, 'destroy'])->name('visitor.destroy');
    Route::put('/visitor/update/{id}', [EditController::class, 'update'])->name('visitor.update');
});

Route::post('/pengunjung/store', [UserController::class, 'store'])->name('pengunjung.store');
Route::get('/chart-data', [UserController::class, 'chartData'])->name('chart.data');
Route::post('/logoutAdmin', [AdminController::class, 'logout'])->name('logoutAdmin');


Route::get('/', [EditController::class, 'dashboard'])->name('dashboard');
Route::get('/register', function () {
    return view('./pages/register');
})->name('register');
Route::get('/register2', function () {
    return view('./pages/register2');
})->name('register2');
Route::get('/app', function () {
    return view('layouts/app');
});
Route::get('/login', function () {
    return view('./pages/loginadmin');
})->name('login');
Route::get('/form', function () {
    return view('/layouts/form');
})->name('form');
