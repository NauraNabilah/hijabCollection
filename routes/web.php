<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;

Route::get('/', [HomeController::class, 'showHome'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/product', function () {
    return view('product');
})->name('product');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');
// Route::get('/gallery', function () {
//     return view('gallery');
// })->middleware('auth')->name('gallery');

// Route::post('/login', 'Auth\LoginController@login')->name('login');
// Route::middleware('web')->post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries');
Route::get('/galleries/hapus/{gambar}', [GalleryController::class, 'deleteImage']);
Route::get('/upload', [GalleryController::class, 'upload']);
Route::post('/upload/proses', [GalleryController::class, 'proses_upload']);

Route::resource('categories', KategoriController::class);


