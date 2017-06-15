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
    return view('pages.first');
});

Route::get('dva', function () {
    return view('pages.dva');
});

Route::get('/tri', function () {
    return view('pages.tri');
});

Route::get('/cetri', function () {
    return view('pages.cetri');
});
