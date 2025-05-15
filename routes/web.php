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
Route::resource('akunpengguna', AkunPenggunaController::class);
Route::get('/akunpengguna/{id}/delete', [AkunPenggunaController::class, 'delete'])->name('akunpengguna.delete');

// Dokter
Route::resource('dokter', DokterController::class);
Route::get('/dokter/{id}/delete', [DokterController::class, 'delete'])->name('dokter.delete');

// Pasien
Route::resource('pasien', PasienController::class);
Route::get('/pasien/{id}/delete', [PasienController::class, 'delete'])->name('pasien.delete');

// Staf Administrasi
Route::resource('stafadministrasi', StafAdministrasiController::class);
Route::get('/stafadministrasi/{id}/delete', [StafAdministrasiController::class, 'delete'])->name('stafadministrasi.delete');

// Catatan Medis
Route::resource('catatanmedis', CatatanMedisController::class);
Route::get('/catatanmedis/{id}/delete', [CatatanMedisController::class, 'delete'])->name('catatanmedis.delete');