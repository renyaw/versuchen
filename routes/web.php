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

Route::get('/', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/sktm1', function () {
    return view('sktm1');
});
Route::get('/sktm2', function () {
    return view('sktm2');
});
Route::get('/dashboardpeg', function () {
    return view('dashboardpeg');
});

