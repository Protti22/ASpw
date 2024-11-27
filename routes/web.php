<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('owners', [CarController::class, 'index']);
Route::get('owners/create', [CarController::class, 'create']);
Route::post('owners', [CarController::class, 'store']);
Route::get('owners/{id}/edit', [CarController::class, 'edit']);
Route::put('owners/{id}', [CarController::class, 'update']);
Route::delete('owners/{id}', [CarController::class, 'destroy']);