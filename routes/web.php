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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('public/home');
});
Route::get('/services', function () {
    return view('public/services');
});
Route::get('/about-us', function () {
    return view('public/about');
});
Route::get('/contact-us', function () {
    return view('public/contact');
});

