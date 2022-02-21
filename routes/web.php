<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TagController;

use Illuminate\Support\Facades\Auth;




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
Auth::routes();

Route::get('/', function () {
    return view('site.home');
})->name('home');

// Rotas Públicas
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [RegisterController::class, 'index'])->name('register.index');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

//Rotas Privadas
Route::middleware('auth')->prefix('dashboard')->group( function () 
{
    Route::get('/', [DashboardController::class, 'index'])->name('index.dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('filter-tag', [TagController::class, 'filter'])->name('tag.filter');
    Route::post('filter-tag', [TagController::class, 'filter'])->name('tag.filter');

    Route::get('filter', [ProductController::class, 'filter'])->name('product.filter');
    Route::post('filter', [ProductController::class, 'filter'])->name('product.filter');

    Route::resource('product', ProductController::class);
    Route::resource('tag', TagController::class);

});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
