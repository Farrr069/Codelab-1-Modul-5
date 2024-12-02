<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate; // Import Authenticate Middleware

// Route untuk mendapatkan informasi user
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum')); // Gunakan middleware Sanctum

// Route untuk posts - mengakses PostController menggunakan apiResource
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
