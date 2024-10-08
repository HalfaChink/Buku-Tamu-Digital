<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('./adminpanel/charts');
});

Route::get('/charts', function () {
    return view('./adminpanel/charts');
});

<<<<<<< HEAD
Route::get('/register', function () {
    return view('register');
=======
Route::get('/edit', function () {
    return view('./adminpanel/edit');
});

Route::get('/historytable', function () {
    return view('./adminpanel/historytable');
});

Route::get('/usertable', function () {
    return view('./adminpanel/usertable');
>>>>>>> af3bf4e3e906495339cf0e1de47735504e67c97c
});
