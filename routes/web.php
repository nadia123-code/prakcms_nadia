<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafController;

Route::get('/', function () {
    return view('welcome');
});

// Routes Staf
Route::get('/staf', [StafController::class, 'index'])->name('staf.index');
Route::get('/staf/create', [StafController::class, 'create'])->name('staf.create');
Route::post('/staf', [StafController::class, 'store'])->name('staf.store');
Route::get('/staf/{id}', [StafController::class, 'show'])->name('staf.show');
Route::get('/staf/{id}/edit', [StafController::class, 'edit'])->name('staf.edit');

// Tambahkan route untuk update (PUT)
Route::put('/staf/{id}', [StafController::class, 'update'])->name('staf.update');

// Routes untuk delete
Route::get('/staf/{id}/delete', [StafController::class, 'confirmDelete'])->name('staf.delete');
Route::get('/staf/{id}/confirm-delete', [StafController::class, 'confirmDelete'])->name('staf.confirmDelete');
Route::delete('/staf/{id}', [StafController::class, 'destroy'])->name('staf.destroy');