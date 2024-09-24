<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\BicicletaController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\EstratoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\UserController;
use App\Models\Regional;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('users', UserController::class)->except(['show'])->names('users');
Route::resource('alquileres', AlquilerController::class)->except(['show'])->names('alquileres');
Route::resource('bicicletas', BicicletaController::class)->except(['show'])->names('bicicletas');
Route::resource('centros', CentroController::class)->except(['show'])->names('centros');
Route::resource('estratos', EstratoController::class)->except(['show'])->names('estratos');
Route::resource('eventos', EventoController::class)->except(['show'])->names('eventos');
Route::resource('regionales', RegionalController::class)->except(['show'])->names('regionales');

require __DIR__.'/auth.php';
