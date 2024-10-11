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
// =======
// <<<<<<< HEAD
// >>>>>>> 9dd77ea129763191aaa19edb55c7b27861f39804

// >>>>>>> refs/remotes/origin/local
>>>>>>> df76aea924b3de843c5440dfad904a078c14e6d1
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
});

Route::get('/app', function () {    
    return view('layouts/app');
});

Route::get('/register2', function () {
    return view('register2');

});

Route::get('/loginadmin', function () {
    return view('./adminpanel/loginadmin');
});