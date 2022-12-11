<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\BookStoreController;
use App\Http\Controllers\Api\V1\DummyProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::group(['prefix' => 'v1', 'middleware' => ['auth:sanctum']], function () {
    Route::apiResource('books', BookStoreController::class);
});

// Route to test Interface Wrapper
Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('products', DummyProductController::class);
});

