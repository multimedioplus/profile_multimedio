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
    return view('website.index');
});
Route::get('/dokumentasi', function () {
    return view('website.dokumentasi');
});
Route::get('/portofolio', function () {
    return view('website.portofolio');
});
Route::get('/testimoni', function () {
    return view('website.testimoni');
});
Route::get('/program-studi', function () {
    return view('website.program_studi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
