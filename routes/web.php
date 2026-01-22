<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::resource('libro', LibroController::class);

// ruta para confirmar eliminacion
Route::get('libro/{libro}/destroy/confirmDestroy', [LibroController::class, 'confirmDestroy'])->name('libro.confirmDestroy');
