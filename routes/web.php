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
Route::get('/produk', function () {
    return view('produk'); // Pastikan nama file blade adalah produk.blade.php
});

Route::get('/', [IndexController::class, 'index']);
Route::get('/tentang-kami', function () {
    return view('about');
});

