<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\VolumeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/all', [HomeController::class, 'all'])->name('all');

Route::get('/manga', [MangaController::class, 'index'])->name('manga');
Route::get('/manga/{id}', [MangaController::class, 'show'])->name('manga.show');

Route::get('/genres', [GenreController::class, 'index'])->name('genre');
Route::get('/types', [TypeController::class, 'index'])->name('type');
Route::get('/collections', [CollectionController::class, 'index'])->name('collection');
Route::get('/volumes', [VolumeController::class, 'index'])->name('volumes');



