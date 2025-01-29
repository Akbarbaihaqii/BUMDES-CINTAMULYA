<?php

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
use App\Http\Controllers\IndexController;

// Route untuk halaman Produk dan Layanan
Route::get('/produk', [IndexController::class,'produk']);
Route::get('/produk/{id}',[IndexController::class,'produk_detail']);
Route::get('/', [IndexController::class, 'index']);
Route::get('/tentang-kami', function () {
    return view('about');
});

