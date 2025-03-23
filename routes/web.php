<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;

Route::get('/', [homeController::class, 'index'])->name('home');

Route::get('/pemerintahan', function () {
    return view('gov');
})->name('gov');

Route::get('/demografi', function () {
    return view('demografy');
})->name('demo');

Route::get('/geografi', function () {
    return view('geografy');
})->name('geo');
Route::get('/berita', function () {
    return view('news');
})->name('news');
Route::get('/layanan', function () {
    return view('service');
})->name('service');

Route::prefix('/store')->group(function () {
    Route::view('/', 'store')->name('store');
});


Route::prefix('/admin')->group(function () {
    Route::get('/register', [adminController::class, 'register']);
    Route::get('/login', [adminController::class, 'login']);

    Route::prefix('/dashboard')->group(function () {
        Route::get('/', function () {
            return view('dash-master');
        })->name('master');
    });
});
