<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;

Route::get('/', function () {
    return view('welcome');
});

// Lista todas las mascotas
Route::get('/', [MascotaController::class, 'index'])->name('mascotas.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::resource('mascotas', MascotaController::class);







// Lista todas las mascotas
Route::get('/mascotas', [MascotaController::class, 'index'])->name('mascotas.index');

// Muestra formulario para crear una mascota
Route::get('/mascotas/create', [MascotaController::class, 'create'])->name('mascotas.create');

// Recibe el formulario y devuelve al usuario a la lista de mascotas
Route::post('/mascotas', [MascotaController::class, 'store'])->name('mascotas.store');

// Elimina una mascota
Route::delete('/mascotas/{id}', [MascotaController::class, 'destroy'])->name('mascotas.destroy');

// Abre formulario de edición de una mascota
Route::get('/mascotas/{id}/edit', [MascotaController::class, 'edit'])->name('mascotas.edit');

// Guarda los cambios sobre una mascota
Route::put('/mascotas/{id}', [MascotaController::class, 'update'])->name('mascotas.update');

require __DIR__.'/auth.php';
