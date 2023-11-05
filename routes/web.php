<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\ChaveLutaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultadoController;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('atletas.home');
Route::get('/campeonatos', [HomeController::class, 'home'])->name('campeonatos.home');

Route::get('/area_atleta/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/area_atleta/login', [AuthController::class, 'login'])->name('logar');
Route::post('/area_atleta/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/area_atleta/area_restrita', [AtletaController::class, 'area_restrita'])->name('area_atleta.area_restrita');//->middleware('auth');

Route::get('/campeonatos/search', [CampeonatoController::class, 'search'])->name('busca.campeonatos');
Route::get('/campeonatos/create', [CampeonatoController::class, 'create'])->name('campeonatos.create');
Route::post('/campeonatos/store', [CampeonatoController::class, 'store'])->name('campeonatos.store');
Route::get('/campeonatos/index', [CampeonatoController::class, 'index'])->name('campeonatos.index');
Route::get('/campeonatos/show/{id}', [CampeonatoController::class, 'show'])->name('campeonatos.show');

Route::get('/atletas/create', [AtletaController::class, 'create'])->name('atletas.create');
Route::post('/atletas/store', [AtletaController::class, 'store'])->name('atletas.store');
Route::get('/atletas/show/{id}', [AtletaController::class, 'show'])->name('atletas.show');
Route::get('/atletas/index', [AtletaController::class, 'index'])->name('atletas.index');

Route::get('/chaveLuta', [ChaveLutaController::class, 'index']);
Route::get('/chaveLuta/show/{id}', [ChaveLutaController::class, 'show']);

Route::get('/resultado', [ResultadoController::class, 'index']);
Route::get('/resultados/show', [ResultadoController::class, 'show'])->name('resultado');

Route::get('/campeonatos/detalhes/{id}', [CampeonatoController::class, 'detalhes'])->name('detalhes.campeonatos');

Route::get('/painel/painel', [UserController::class, 'index'])->name('user.index');
Route::get('/painel/cadastrar', [UserController::class, 'create'])->name('user.create');
Route::post('/painel/cadastrar', [UserController::class, 'store'])->name('user.store');
Route::get('/painel/filtrar', [UserController::class, 'filter'])->name('user.filter');



