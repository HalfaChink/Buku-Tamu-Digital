<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('./adminpanel/charts');
});

Route::get('/charts', function () {
    return view('./adminpanel/charts');
});

<<<<<<< HEAD
// <<<<<<< HEAD
=======
Route::get('/register', function () {
    return view('/register');
});

>>>>>>> refs/remotes/origin/local
Route::get('/edit', function () {
    return view('./adminpanel/edit');
});

Route::get('/historytable', function () {
    return view('./adminpanel/historytable');
});

Route::get('/usertable', function () {
    return view('./adminpanel/usertable');
<<<<<<< HEAD
// >>>>>>> af3bf4e3e906495339cf0e1de47735504e67c97c
});

// register
Route::get('/register', function () {
    return view('register');
});

Route::get('/register2', function () {
    return view('register2');
=======
>>>>>>> refs/remotes/origin/local
});
