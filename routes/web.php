<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/dashboard');
});

Route::get('/charts', function () {
    return view('./adminpanel/charts');
});

<<<<<<< HEAD
=======
// <<<<<<< HEAD
>>>>>>> 9dd77ea129763191aaa19edb55c7b27861f39804

// >>>>>>> refs/remotes/origin/local
Route::get('/edit', function () {
    return view('./adminpanel/edit');
});

Route::get('/historytable', function () {
    return view('./adminpanel/historytable');
});

Route::get('/usertable', function () {
    return view('./adminpanel/usertable');
// <<<<<<< HEAD
// >>>>>>> af3bf4e3e906495339cf0e1de47735504e67c97c
});

// register
Route::get('/register', function () {
    return view('register');
});

Route::get('/app', function () {    
    return view('layouts/app');
});

Route::get('/register2', function () {
    return view('register2');

// >>>>>>> refs/remotes/origin/local
});

Route::get('/loginadmin', function () {
    return view('./adminpanel/loginadmin');
});

Route::get('/register', function () {
    return view('/register');
});