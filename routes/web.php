<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AboutController::class, 'index'])->name('about');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('loginSubmit');

Route::get('/app', [AppController::class, 'index'])->name('indexApp');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
