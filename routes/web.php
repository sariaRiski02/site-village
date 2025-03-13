<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/pemerintahan', function () {
    return view('gov');
})->name('gov');
