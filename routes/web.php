<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('siswa', SiswaController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('sign-up', function() {
    return view('site.sign-up');
});

Route::get('classes', function() {
    return view('class.class-list');
});

Route::get('join-class', function() {
    return view('class.join-class');
});

Route::get('create-class', function() {
    return view('class.create-class');
});
