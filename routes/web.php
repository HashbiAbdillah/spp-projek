<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PetugasAuthController;

route::get("/daftar", [PetugasAuthController::class, 'daftarform'])->name('tampil.daftar');
route::post("/daftar/submit", [PetugasAuthController::class, 'daftarsubmit'])->name('submit.daftar');
Route::get('/', [PetugasAuthController::class, 'LoginForm'])->name('login');
Route::post('/', [PetugasAuthController::class, 'submitLoginForm'])->name('login');
Route::post('/logout', [PetugasAuthController::class, 'logout'])->name('logout');

route::get("/spp", [SppController::class, 'index'])->name('index.index');