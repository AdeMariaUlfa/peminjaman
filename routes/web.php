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