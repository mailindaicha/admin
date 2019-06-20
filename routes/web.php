<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard-2', function () {
    return view('dashboard-2');
});

Route::get('/input-festival', function () {
    return view('input-festival');
});

Route::get('/input-program', function () {
    return view('input-program');
});

Route::get('/input-kabar', function () {
    return view('input-kabar');
});

Route::get('/input-kabar', function () {
    return view('input-kabar');
});

Route::resource('festival', 'Festival');

Route::resource('program', 'Program');


Route::get('/input', function () {
    return view('input-festival');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/allfestival', 'festival@allfestival'); //aliasiscontroller-function



