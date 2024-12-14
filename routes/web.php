<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

route::get("/", [SiswaController::class, 'index'])->name('index.index');
