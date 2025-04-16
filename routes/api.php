<?php

use App\Http\Controllers\AdsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/add-point/{id}', [AdsController::class, 'add_point'])->name('api.add.point');
Route::delete('/delete-point/{id}', [AdsController::class, 'delete_point'])->name('api.delete.point');
