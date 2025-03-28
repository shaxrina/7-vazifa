<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::post(uri: '/register', action: [UserController::class, 'register']);
Route::post(uri: '/upload-avatar', action: [UploadController::class, 'uploadAvatar']);
Route::post(uri: '/add-product', action: [ProductController::class, 'addProduct']);


