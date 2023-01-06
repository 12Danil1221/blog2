<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DorogiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dorogis', [DorogiController::class, 'index'])->name('dorogi.index');
Route::get('/dorogis/create', [DorogiController::class, 'create'])->name('dorogi.create');
Route::post('/dorogis', [DorogiController::class, 'store'])->name('dorogi.store');
Route::get('/dorogis/{dorogi}', [DorogiController::class, 'show'])->name('dorogi.show');
Route::get('/dorogis/{dorogi}/edit', [DorogiController::class, 'edit'])->name('dorogi.edit');
Route::patch('/dorogis/{dorogi}', [DorogiController::class, 'update'])->name('dorogi.update');
Route::delete('/dorogis/{dorogi}', [DorogiController::class, 'destroy'])->name('dorogi.delete');

