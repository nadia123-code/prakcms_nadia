<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafAdministrasiController;
use App\Http\Controllers\AkunPenggunaController;
use App\Http\Controllers\CatatanMedisController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

// Routes Resource
Route::resource('staf_administrasi', StafAdministrasiController::class);
Route::resource('akun_pengguna', AkunPenggunaController::class);
Route::resource('catatan_medis', CatatanMedisController::class);
Route::resource('dokter', DokterController::class);
Route::resource('pasien', PasienController::class);
Route::get('/', function () {
    return view('home');
});
