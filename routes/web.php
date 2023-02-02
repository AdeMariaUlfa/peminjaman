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


Route::get('/registerPage', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('user/profile');
});
Route::get('/profile-admin', function () {
    return view('admin/profile');
});


Route::get('/', [LoginController::class, 'loginPage'])->name('loginPage');;
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');
Route::resource('fasilitas', FasilitasController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::get('user/fasilitas', [LoginController::class,'userFasilitas'])->name('user.fasilitas');
Route::get('/status', [PeminjamanController::class,'statusPeminjaman'])->name('user.status');
Route::get('/history', [PeminjamanController::class,'historyPeminjaman'])->name('user.history');
Route::get('/rekapAdmin', [PeminjamanController::class, 'rekapAdmin'])->name('admin.rekapAdmin');
Route::get('/user', [LoginController::class, 'allUser'])->name('admin.user');
Route::get('/setuju/{peminjaman}', [PeminjamanController::class, 'setuju'])->name('admin.setuju');
Route::get('/tolak/{peminjaman}', [PeminjamanController::class, 'tolak'])->name('admin.tolak');
Route::get('/selesai/{peminjaman}', [PeminjamanController::class, 'selesai'])->name('user.selesai');
