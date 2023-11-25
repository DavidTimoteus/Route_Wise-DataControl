<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;

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
// LOGIN
Route::get('/', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// REGISTRASI
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

// DASHBOARD
Route::group(['middleware' => ['auth', 'cekjabatan:admin,driver,kepala gudang,pemilik toko']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// DATA PENGGUNA
Route::get('/data_pengguna', [PenggunaController::class, 'index'])->name('data_pengguna');
Route::get('/create_pengguna', [PenggunaController::class, 'create'])->name('create_pengguna');
Route::post('/simpan_pengguna', [PenggunaController::class, 'store'])->name('simpan_pengguna');
Route::get('/edit_pengguna/{id}', [PenggunaController::class, 'edit'])->name('edit_pengguna');
Route::post('/update_pengguna/{id}', [PenggunaController::class, 'update'])->name('update_pengguna');
Route::get('/hapus_pengguna/{id}', [PenggunaController::class, 'destroy'])->name('hapus_pengguna');

// DATA KRITERIA
Route::get('/Data_Kriteria', [KriteriaController::class, 'index'])->name('Data_Kriteria');
Route::get('/create_kriteria', [KriteriaController::class, 'create'])->name('create_kriteria');
Route::post('/simpan_kriteria', [KriteriaController::class, 'store'])->name('simpan_kriteria');
Route::get('/edit_kriteria/{id}', [KriteriaController::class, 'edit'])->name('edit_kriteria');
Route::post('/update_kriteria/{id}', [KriteriaController::class, 'update'])->name('update_kriteria');
Route::get('/hapus_kriteria/{id}', [KriteriaController::class, 'destroy'])->name('hapus_kriteria');

// DATA ALTERNATIF
Route::get('/data_alternatif', [AlternatifController::class, 'index'])->name('data_alternatif');
Route::get('/create_alternatif', [AlternatifController::class, 'create'])->name('create_alternatif');
Route::post('/simpan_alternatif', [AlternatifController::class, 'store'])->name('simpan_alternatif');
Route::get('/edit_alternatif/{id}', [AlternatifController::class, 'edit'])->name('edit_alternatif');
Route::post('/update_alternatif/{id}', [AlternatifController::class, 'update'])->name('update_alternatif');
Route::get('/hapus_alternatif/{id}', [AlternatifController::class, 'destroy'])->name('hapus_alternatif');
