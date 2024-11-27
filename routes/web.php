<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('cars', [CarController::class, 'index']);
Route::get('cars/create', [CarController::class, 'create']);
Route::post('cars', [CarController::class, 'store']);
Route::get('cars/{id}/edit', [CarController::class, 'edit']);
Route::put('cars/{id}', [CarController::class, 'update']);
Route::delete('cars/{id}', [CarController::class, 'destroy']);

Route::get('owners', [OwnerController::class, 'index']);
Route::get('owners/create', [OwnerController::class, 'create']);
Route::post('owners', [OwnerController::class, 'store']);
Route::get('owners/{id}/edit', [OwnerController::class, 'edit']);
Route::put('owners/{id}', [OwnerController::class, 'update']);
Route::delete('owners/{id}', [OwnerController::class, 'destroy']);
