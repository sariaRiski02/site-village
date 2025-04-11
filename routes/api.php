<?php

use App\Http\Controllers\AdsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('ads', [AdsController::class, 'get_ads']);
