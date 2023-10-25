<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/peliculas', [PeliculaController::class, 'index'])->name('pelicula.inicio');

Route::get('/peliculas/crear', [PeliculaController::class, 'create'])->name('pelicula.crear');

Route::post('/peliculas/guardar', [PeliculaController::class, 'store'])->name('pelicula.store');

Route::get('/peliculas/editar/{id}', [PeliculaController::class, 'edit'])->name('pelicula.edit');

Route::put('/peliculas/update/{id}', [PeliculaController::class, 'update'])->name('pelicula.update');

Route::get('/pelicula/delete/{id}', [PeliculaController::class, 'delete'])->name('pelicula.delete');