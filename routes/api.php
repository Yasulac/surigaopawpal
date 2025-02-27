<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RehomingController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']); // No authentication needed for registration
Route::middleware('auth:sanctum')->post('/rehoming', [RehomingController::class, 'store']);
Route::middleware('auth:sanctum')->get('/rehoming', [RehomingController::class, 'index']);
// Logout route - requires authentication
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

// Routes requiring authentication (auth:sanctum middleware)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::prefix('admin')->group(function () {
        Route::get('users', [UserController::class, 'index']);
        Route::put('users/{id}', [UserController::class, 'update']);
        Route::delete('users/{id}', [UserController::class, 'destroy']);
        Route::post('/users', [UserController::class, 'store']);
    });

    Route::post('/rehoming', [RehomingController::class, 'store']);
    Route::get('/rehoming', [RehomingController::class, 'index']); // Fetch all submitted dogs
    Route::get('/submitted-dog', function (Request $request) {
        return response()->json(['dog' => $request->user()->submittedDog]);
    });
});

// Publicly accessible test route
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

// CORS - Ensure this is properly configured in the CORS middleware
Route::options('{any}', function () {
    return response()->json([], 200)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
})->where('any', '.*');

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
