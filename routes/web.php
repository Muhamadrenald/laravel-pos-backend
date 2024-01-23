<?php

// use App\Http\Controllers\SoalController;
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
    Route::resource('user', UserController::class);
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    // Route::resource('soal', SoalController::class);
    // Route::resource('order', \App\Http\Controllers\OrderController::class);
});
