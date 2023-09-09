<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cannabiss', [App\Http\Controllers\CannabisController::class, 'index'])->name('cannabiss');

Route::get('/test/{cannabis}', [App\Http\Controllers\CannabisController::class, 'cannabis']);

Route::get('/register', [App\Http\Controllers\CannabisController::class, 'register']);

Route::post('/register', [App\Http\Controllers\CannabisController::class, 'store']);

//削除
Route::delete('/cannabis/{cannabis}', [App\Http\Controllers\CannabisController::class, 'destroy']);
//編集
Route::get('/edit/{cannabis}', [App\Http\Controllers\CannabisController::class, 'edit']);

Route::post('/update', [App\Http\Controllers\CannabisController::class, 'update']);

