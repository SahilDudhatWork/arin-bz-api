<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BusinessController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AmenityController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ProductAvailabilityController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductInquiryController;
use App\Http\Controllers\Api\ProductMediaController;
use App\Http\Controllers\Api\UserController;

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
Route::post('/send-otp', [BusinessController::class, 'sendOtp']);
Route::post('/check-otp', [BusinessController::class, 'checkOtp']);
Route::post('/businesses', [BusinessController::class, 'store']); // Create a new business
Route::put('/businesses/{business}', [BusinessController::class, 'update']); // Update a business
Route::get('categories', [CategoryController::class, 'index']); // Get all categories
Route::post('categories', [CategoryController::class, 'store']); // Create a category
Route::get(
    'amenities',
    [AmenityController::class, 'index']
); // Get all amenities
Route::post('amenities', [AmenityController::class, 'store']); // Create a amenities
Route::get('cities', [CityController::class, 'index']); // Create a amenities

Route::middleware('auth:business')->group(function () {
    Route::get('/business-profile', [BusinessController::class, 'profile']);
    Route::put('/business-profile', [BusinessController::class, 'updateProfile']);
    Route::post('/upload-profile-image', [BusinessController::class, 'updateProfilePic']);
    Route::delete('/remove-profile-image', [BusinessController::class, 'removeProfilePic']);

    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/businesses', [BusinessController::class, 'index']); // Get all businesses
    Route::get('/businesses/{business}', [BusinessController::class, 'show']); // Get a single business
    Route::delete('/businesses/{business}', [BusinessController::class, 'destroy']); // Delete a business


    Route::post('products', [ProductController::class, 'store']); // Create a products
    Route::get('product-count', [ProductController::class, 'productCount']); // Create a products
    Route::get('/products/{product}', [ProductController::class, 'show']); // Get a single products
    Route::put('/products/{product}', [ProductController::class, 'update']); // Update a products

    Route::post('/products/{productId}/upload-images', [ProductMediaController::class, 'uploadImages']);

    Route::post('/product-availability', [ProductAvailabilityController::class, 'store']);
    Route::get('/get-all-inquiries', [ProductInquiryController::class, 'index']);
    Route::get('/inquiries-by-product', [ProductInquiryController::class, 'inquiriesByProduct']);
    Route::get('/product/{productId}/inquiries', [ProductInquiryController::class, 'getInquiriesByProduct']);
    Route::get('/inquiries/{id}', [ProductInquiryController::class, 'show']);
    Route::get('/generateQrCode', [BusinessController::class, 'generateQrCode']);
});

Route::prefix('user')->group(function () {
    Route::post('/register', [UserController::class, 'store']); // Register a new user
    Route::put('/update/{id}', [UserController::class, 'update']); // Update user details
    Route::post('/login', [UserController::class, 'login']); // User login
    Route::post('/check-otp', [UserController::class, 'checkOtp']); // Check OTP
    Route::middleware('auth:api')->group(function () {

        Route::get('/get-all-products', [ProductController::class, 'getAllProduct']);
        Route::post('/create-inquiry', [ProductInquiryController::class, 'store']);
    });
    Route::get('/get-search-products', [ProductController::class, 'getSearchProduct']);
});
