<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Models\Stone;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    // Inventory
    Route::get('/items', [ItemController::class, 'index']);
    Route::post('/items', [ItemController::class, 'store']);
    Route::get('/items/{item}', [ItemController::class, 'show']);
    Route::get('/items/barcode/{barcode}', [ItemController::class, 'lookup']);

    // Operations
    // Route::post('/items/{item}/cut', [OperationController::class, 'cut']); // Not implemented in V2 yet
    Route::post('/items/{item}/reserve', [ItemController::class, 'reserve']);
    Route::post('/items/{item}/sell', [ItemController::class, 'sell']);

    // Stones (Catalog)
    Route::get('/stones', function () {
        return Stone::all();
    });
});
