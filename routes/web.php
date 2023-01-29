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
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/fasilitas', function () {
    return view('user/fasilitas');
});
Route::get('/ajukan', function () {
    return view('user/ajukan');
});
Route::get('/status', function () {
    return view('user/status');
});
Route::get('/history', function () {
    return view('user/history');
});
Route::get('/profile', function () {
    return view('user/profile');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/tabel-fasilitas', function () {
    return view('admin/fasilitas');
});
Route::get('/tambah-fasilitas', function () {
    return view('admin/tambah-fasilitas');
});
Route::get('/pengajuan', function () {
    return view('admin/pengajuan');
});
Route::get('/rekap', function () {
    return view('admin/rekap');
});
Route::get('/user', function () {
    return view('admin/user');
});
Route::get('/profile-admin', function () {
    return view('admin/profile');
});