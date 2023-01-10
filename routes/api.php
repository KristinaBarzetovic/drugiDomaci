<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClotheCategoryController;
use App\Http\Controllers\ClotheController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::apiResource('clothes', ClotheController::class)->only(['index', 'show']);

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/categories', [ClotheCategoryController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('clothes', ClotheController::class)->except(['index', 'show']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
