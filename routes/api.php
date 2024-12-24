<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\DriverController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy']);
    Route::put('/vehicles/{id}', [VehicleController::class, 'update']);
});




Route::get('/vehicles', [VehicleController::class, 'index']);
Route::get('/vehicles/{id}', [VehicleController::class, 'show']);
//Route::put('/vehicles/{id}', [VehicleController::class, 'update']);

Route::post('/drivers', [DriverController::class, 'store']);
Route::get('/drivers', [DriverController::class, 'index']);
