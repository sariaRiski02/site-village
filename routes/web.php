<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\DashGeoController;
use App\Http\Controllers\DashGovController;
use App\Http\Controllers\DashDemoController;
use App\Http\Controllers\DashHomeController;
use App\Http\Controllers\DashNewsController;
use App\Http\Controllers\DashStoreController;
use App\Http\Controllers\structureController;
use App\Http\Controllers\DashMasterController;
use App\Http\Controllers\DashServiceController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/pemerintahan', 'gov')->name('gov');
Route::view('/demografi', 'demografy')->name('demo');
Route::view('/geografi', 'geografy')->name('geo');
Route::view('/berita', 'news')->name('news');
Route::view('/layanan', 'service')->name('service');


// structure 
Route::get('/struktur-pemerintah', [structureController::class, 'pemerintah'])->name('struct.gov');
Route::get('/struktur-bpd', [structureController::class, 'bpd'])->name('struct.bpd');

Route::prefix('/store')->group(function () {
    Route::view('/', 'store')->name('store');
});


Route::prefix('/admin')->group(function () {
    Route::get('/register', [adminController::class, 'register'])->name('register');
    Route::get('/login', [adminController::class, 'login'])->name('login');

    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashMasterController::class, 'index'])->name('master');

        Route::get('/beranda', [DashHomeController::class, 'index'])->name('dash.home');
        Route::post('/beranda', [DashHomeController::class, 'update'])->name('dash.home.add');
        Route::post('/toggle-bumdes', [DashHomeController::class, 'toggle_bumdes'])->name('toggle.bumdes');

        Route::get('/pemerintahan', [DashGovController::class, 'index'])->name('dash.gov');
        Route::get('/demografi', [DashDemoController::class, 'index'])->name('dash.demo');
        Route::get('/geografi', [DashGeoController::class, 'index'])->name('dash.geo');
        Route::get('/berita', [DashNewsController::class, 'index'])->name('dash.news');
        Route::get('/service', [DashServiceController::class, 'index'])->name('dash.service');
        Route::get('/store', [DashStoreController::class, 'index'])->name('dash.store');

        Route::post('/ads-add', [AdsController::class, 'ads_add'])->name('ads.add');
        Route::delete('/ads-delete/{id}', [AdsController::class, 'ads_delete'])->name('ads.delete');
        Route::put('/ads-publish/{id}', [AdsController::class, 'is_publish'])->name('ads.publish');
        Route::get('/ads-add-point/{id}', [AdsController::class, 'ads_point_add'])->name('ads.point.add');
    });
});



Route::view('/test', 'test');
