<?php

use Illuminate\Support\Facades\Route;

Route::get('/login',[
    App\Http\Controllers\AuthController::class,
    'index'
])->name('login');
