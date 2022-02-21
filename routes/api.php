<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
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

// // Rotas Públicas
// Route::get('register', [RegisterController::class, 'index']);
// Route::post('register', [RegisterController::class, 'store']);

// //Rotas Privadas
// Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'dashboard'], function () 
// {
//     Route::apiResource('product', ProductController::class);
//     Route::post('logout', [AuthController::class, 'logout']);
// });
