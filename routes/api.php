<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AmenityController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductMediaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});

Route::post('/login', [BusinessController::class, 'login']);
Route::post('/check-otp', [BusinessController::class, 'checkOtp']);

Route::middleware('auth:business')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/businesses', [BusinessController::class, 'index']); // Get all businesses
    Route::post('/businesses', [BusinessController::class, 'store']); // Create a new business
    Route::get('/businesses/{business}', [BusinessController::class, 'show']); // Get a single business
    Route::put('/businesses/{business}', [BusinessController::class, 'update']); // Update a business
    Route::delete('/businesses/{business}', [BusinessController::class, 'destroy']); // Delete a business
    Route::get('categories', [CategoryController::class, 'index']); // Get all categories
    Route::post('categories', [CategoryController::class, 'store']); // Create a category
    Route::get(
        'amenities',
        [AmenityController::class, 'index']
    ); // Get all amenities
    Route::post('amenities', [AmenityController::class, 'store']); // Create a amenities

    Route::post('products', [ProductController::class, 'store']); // Create a products
    Route::get('/products/{product}', [ProductController::class, 'show']); // Get a single products
    Route::put('/products/{product}', [ProductController::class, 'update']); // Update a products

    Route::post('/products/{productId}/upload-images', [ProductMediaController::class, 'uploadImages']);
});
