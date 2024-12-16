<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;

route::get("/", [SppController::class, 'index'])->name('index.index');
