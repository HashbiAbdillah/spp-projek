<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PetugasAuthController;
use App\Http\Controllers\PwtugasController;

route::get("/spp", [SppController::class, 'index'])
->name('index.index');

Route::get('/', [PetugasAuthController::class, 'LoginForm'])->name('login');
Route::post('/submit', [PetugasAuthController::class, 'submitLoginForm'])->name('login');
Route::post('/logout', [PetugasAuthController::class, 'logout'])->name('logout');

route::get("/daftar", [PetugasAuthController::class, 'daftarform'])->name('tampil.daftar');
route::post("/daftar/submit", [PetugasAuthController::class, 'daftarsubmit'])->name('submit.daftar');
route::get("/petugas", [PwtugasController::class, 'tampilpetugas'])->name('petugas.listpetugas');
route::get('/petugas/{id_petugas}/edit', [PwtugasController::class, 'editpetugas'])->name('tampil.edit');
route::put('/petugas/{id_pwtugas}/update', [PwtugasController::class, 'updatepetugas'])->name('petugas.update');