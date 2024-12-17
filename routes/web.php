<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SppController;
use App\Http\Controllers\PetugasAuthController;

// route::get("/", [SppController::class, 'index'])->name('index.login');
Route::get('/', [PetugasAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PetugasAuthController::class, 'login']);
Route::post('/logout', [PetugasAuthController::class, 'logout'])->name('logout');

// Dashboard setelah login
Route::middleware('auth')->group(function () {
    Route::get('/cast.dashboard',);
});
