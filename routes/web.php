<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafAdministrasiController;
use App\Http\Controllers\AkunPenggunaController;
use App\Http\Controllers\CatatanMedisController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ImageController; 
use App\Http\Controllers\LoginController;

// Halaman Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman setelah login
Route::get('/home', function () {
    return view('home'); 
})->middleware('auth')->name('home');

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

Route::get('/pendaftaran-akun-pasien', function () {
    return 'Selamat datang di halaman Pendaftaran Akun Pasien Klinik!';
})->middleware('check.patient.age');

Route::get('/upload', [ImageController::class, 'create'])->name('image.create');
Route::post('/upload', [ImageController::class, 'store'])->name('image.store');
Route::delete('/upload/{id}', [ImageController::class, 'destroy'])->name('image.destroy');