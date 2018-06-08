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
    return view('layouts/master');
});

Route::get('/about', function () {

    return view('layouts/about');
});

Route::get('/home1column', function () {
	
    return view('layouts/home1column');
});

Route::get('/home-2-columns-with-sidebar', function () {
	
    return view('layouts/home-2-columns-with-sidebar');
});