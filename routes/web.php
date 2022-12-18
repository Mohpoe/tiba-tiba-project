<?php

use App\Http\Controllers\LamanController;
use App\Http\Controllers\PenggunaController;
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

Route::middleware(['guest'])->group(function () {
  Route::get('/masuk', [LamanController::class, 'masukTampil'])->name('masuk.tampil');
  Route::post('/masuk', [LamanController::class, 'masukProses'])->name('masuk.proses');
});

Route::middleware(['login'])->group(function () {
  Route::get('/', [LamanController::class, 'beranda'])->name('beranda');
  Route::post('/keluar', [LamanController::class, 'keluar'])->name('keluar');
});

