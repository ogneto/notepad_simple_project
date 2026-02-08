<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('templates.main_template');
});
