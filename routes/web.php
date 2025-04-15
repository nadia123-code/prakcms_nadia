<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafAdministrasiController;

// Home (opsional, redirect ke staf)
Route::get('/', function () {
    return redirect('/staf-administrasi');
});

// Route untuk Staf Administrasi
Route::prefix('staf-administrasi')->group(function () {
    Route::get('/', [StafAdministrasiController::class, 'index'])->name('staf.index');
    Route::get('/create', [StafAdministrasiController::class, 'create'])->name('staf.create');
    Route::post('/', [StafAdministrasiController::class, 'store'])->name('staf.store');
    Route::get('/{id}', [StafAdministrasiController::class, 'show'])->name('staf.show');
    Route::get('/{id}/edit', [StafAdministrasiController::class, 'edit'])->name('staf.edit');
    Route::put('/{id}', [StafAdministrasiController::class, 'update'])->name('staf.update');
    Route::delete('/{id}', [StafAdministrasiController::class, 'destroy'])->name('staf.destroy');
    Route::get('/staf-administrasi/{id}/delete', [StafAdministrasiController::class, 'delete'])->name('staf.delete');

});
