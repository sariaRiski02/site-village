<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

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
Route::view('/test', 'test');
