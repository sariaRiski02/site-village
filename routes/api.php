<?php

use App\Http\Controllers\AdsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/add-point', [AdsController::class, 'add_point'])->name('api.add.point');
