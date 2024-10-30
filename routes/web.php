<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;

Route::get('/', [ HomeController::class, 'index' ])->name('index');
Route::get('/locations/create', [ LocationController::class, 'create' ])->name('locations.create');
