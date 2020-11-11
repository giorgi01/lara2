<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
Route::post('/create', [App\Http\Controllers\CarController::class, 'createCar'])->name('cars.create');
Route::get('/edit/{id}', [App\Http\Controllers\CarController::class, 'editCar'])->name('cars.edit');
Route::post('/update/{id}', [App\Http\Controllers\CarController::class, 'updateCar'])->name('cars.update');

