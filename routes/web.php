<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
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


Route::get('/register', function () {
    return view('register');
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


Route::get('/', [LoginController::class, 'loginPage'])->name('loginPage');;
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');
Route::resource('fasilitas', FasilitasController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::get('user/fasilitas', [LoginController::class,'userFasilitas'])->name('user.fasilitas');
Route::get('/status', [PeminjamanController::class,'statusPeminjaman'])->name('user.status');
Route::get('/history', [PeminjamanController::class,'historyPeminjaman'])->name('user.history');
