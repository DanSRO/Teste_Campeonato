<?php

use App\Http\Controllers\AtletaController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\ChaveLutaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultadoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('atletas.home');
Route::get('/campeonatos', [HomeController::class, 'home'])->name('campeonatos.home');


Route::get('/campeonatos/search', [CampeonatoController::class, 'search']);
Route::get('/campeonatos/create', [CampeonatoController::class, 'create'])->name('campeonatos.create');
Route::post('/campeonatos/store', [CampeonatoController::class, 'store'])->name('campeonatos.store');
Route::get('/campeonatos/index', [CampeonatoController::class, 'index'])->name('campeonatos.index');

Route::get('/atletas/create', [AtletaController::class, 'create'])->name('atletas.create');
Route::post('/atletas/store', [AtletaController::class, 'store'])->name('atletas.store');
// Route::get('/atletas/{id}', [AtletaController::class, 'show'])->name('atletas.show');
Route::get('/atletas/index', [AtletaController::class, 'index'])->name('atletas.index');

Route::get('/chaveLuta', [ChaveLutaController::class, 'index']);
Route::get('/chaveLuta/show', [ChaveLutaController::class, 'show']);

Route::get('/resultado', [ResultadoController::class, 'index']);
Route::get('/resultado/show', [ResultadoController::class, 'show']);

Route::get('/campeonatos.detalhes/{id}', [CampeonatoController::class, 'detalhes'])->name('campeonatos.detalhes');
