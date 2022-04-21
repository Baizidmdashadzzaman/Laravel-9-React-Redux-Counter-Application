<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CounterController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/count', [CounterController::class, 'index'])->name('count.index');
Route::get('/count-increment', [CounterController::class, 'increment'])->name('count.increment');
Route::get('/count-decrement', [CounterController::class, 'decrement'])->name('count.decrement');
Route::get('/count-increment-100', [CounterController::class, 'increment_100'])->name('count.increment.100');
Route::get('/count-decrement-100', [CounterController::class, 'decrement_100'])->name('count.decrement.100');