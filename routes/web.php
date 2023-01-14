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
Route::get('/usaha', function () {
    return view('usaha');
});
Route::get('/domisili', function () {
    return view('domisili');
});
Route::get('/berkas', function () {
    return view('berkas');
});
Route::get('/verifikasi', function () {
    return view('verifikasi');
});
Route::get('/berhasil', function () {
    return view('berhasil');
});
Route::get('/datadiri', function () {
    return view('kitas');
});
Route::get('/kitas', function () {
    return view('kitas');
});

