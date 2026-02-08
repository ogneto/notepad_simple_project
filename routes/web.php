<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckIfUserIsLogged;
use App\Http\Middleware\CheckIfUserIsNotLogged;
use Illuminate\Support\Facades\Route;



Route::middleware(CheckIfUserIsLogged::class)->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'loginSubmit'])->name('loginSubmit');
});


Route::middleware(CheckIfUserIsNotLogged::class)->group(function () {
    Route::get('/app', [AppController::class, 'index'])->name('indexApp');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
