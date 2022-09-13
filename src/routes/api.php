<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], static function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);

Route::post('/purchase', [UserController::class, 'purchase']);

Route::get('/invoices', [InvoiceController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles', [ArticleController::class, 'store']);


