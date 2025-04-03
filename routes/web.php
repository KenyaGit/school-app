<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocentenController;
use App\Http\Controllers\VakkenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docentens', [DocentenController::class, 'index']);
// Route::get('/docentens/{docenten}', [DocentenController::class, 'show']);

Route::get('/vakkens', [VakkenController::class, 'index']);
// Route::get('/vakkens/{vakken}', [VakkenController::class, 'show']);