<?php

use Illuminate\Support\Facades\Route;

Route::get('/login',[
    App\Http\Controllers\AuthController::class,
    'index'
])->name('login');


Route::get('/',[
    App\Http\Controllers\Website\ProductController::class,
    'home'
])->name('home');

Route::get('/cms/products',[
    App\Http\Controllers\CMS\ProductController::class,
    'index'
])->name('cms.products');
