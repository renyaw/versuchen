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
    return view('masyarakat/signup');
});

Route::get('/beranda', function () {
    return view('masyarakat/beranda');
});
Route::get('/sktm1', function () {
    return view('masyarakat/sktm1');
});
Route::get('/sktm2', function () {
    return view('masyarakat/sktm2');
});
Route::get('/dashboardpeg', function () {
    return view('kelurahan/dashboardpeg');
});
Route::get('/usaha', function () {
    return view('masyarakat/usaha');
});
Route::get('/domisili', function () {
    return view('masyarakat/domisili');
});
Route::get('/berkas', function () {
    return view('masyarakat/berkas');
});
Route::get('/verifikasi', function () {
    return view('kelurahan/verifikasi');
});
Route::get('/berhasil', function () {
    return view('masyarakat/berhasil');
});
Route::get('/datadiri', function () {
    return view('masyarakat/datadiri');
});
Route::get('/kitas', function () {
    return view('masyarakat/kitas');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/lihatberkas', function () {
    return view('/kelurahan/lihatberkas');
});
Route::get('/status', function () {
    return view('masyarakat/status');
});

