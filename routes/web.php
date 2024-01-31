<?php

// use App\Http\Controllers\SoalController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
// use App\Models\Soal;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});

// Route::get('/', function () {
//     return view('pages.auth.register');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);
    // user
    Route::resource('user', UserController::class);
    // product
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    // soal
    // Route::resource('soal', SoalController::class);
    Route::resource('order', \App\Http\Controllers\OrderController::class);
});
