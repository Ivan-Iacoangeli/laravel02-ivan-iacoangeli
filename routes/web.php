<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class , 'home'])->name('homepage');

Route::get('/anime' , [PublicController::class , 'anime'])->name('anime');

Route::get('/manga' , [PublicController::class , 'manga']) ->name('manga');

Route::get('/le-nostre-statuette' , [PublicController::class , 'statuette'])->name('statuetta');

// ROTTE PARAMETRICHE
Route::get('/anime/dettaglio/{title}' , [PublicController::class , 'detAnime'])->name('det.anime');

Route::get('/manga/dettaglio/{title}' , [PublicController::class , 'detManga'])->name('det.manga');