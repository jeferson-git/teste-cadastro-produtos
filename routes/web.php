<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;


use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site.home');
});

// Rotas Públicas
Route::post('login', [AuthController::class, 'login']);
Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store']);

//Rotas Privadas
Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'dashboard'], function () 
{
    Route::resource('product', ProductController::class);
    Route::post('logout', [AuthController::class, 'logout']);
});
