<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafAdministrasiController;
use App\Http\Controllers\AkunPenggunaController;
use App\Http\Controllers\CatatanMedisController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('home');
});

// Akun Pengguna
Route::resource('akun_pengguna', AkunPenggunaController::class);
Route::get('/akun_pengguna/{id}/delete', [AkunPenggunaController::class, 'delete'])->name('akun_pengguna.delete');

// Dokter
Route::resource('dokter', DokterController::class);
Route::get('/dokter/{id}/delete', [DokterController::class, 'delete'])->name('dokter.delete');

// Lainnya
Route::resource('staf_administrasi', StafAdministrasiController::class);
Route::resource('catatan_medis', CatatanMedisController::class);
Route::resource('pasien', PasienController::class);
