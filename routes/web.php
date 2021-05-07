<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController AS UserAuthCtrl;
# Web Controllers
use App\Http\Controllers\Website\ProductController AS WebProductCtrl;
use App\Http\Controllers\Website\CartController AS WebCartCtrl;

# CMS Controllers
use App\Http\Controllers\CMS\ProductController AS CMSProductCtrl;

Route::get('/login',                                [   UserAuthCtrl::class,    'index'             ])->middleware('guest')->name('login');
Route::post('/login/verify',                        [   UserAuthCtrl::class,    'verify'            ])->middleware('guest')->name('login.verify');
Route::get('/logout',                               [   UserAuthCtrl::class,    'logout'            ])->name('logout');

Route::get('/signup',                               [   UserAuthCtrl::class,    'signup'            ])->middleware('guest')->name('signup');
Route::post('/signup/verify',                       [   UserAuthCtrl::class,    'register'          ])->middleware('guest')->name('signup.verify');

Route::group(['middleware' => 'user'], function () {

    # Web Routes
    Route::get('/',                                 [   WebProductCtrl::class,  'home'              ])->middleware('customer')->name('home');

    # CMS Routes
    Route::get('/cms/products',                     [   CMSProductCtrl::class,  'index'             ])->middleware('admin')->name('cms.products');
    ##[ CREATE ]
    Route::get('/cms/products/add',                 [   CMSProductCtrl::class,  'productAdd'        ])->middleware('admin')->name('cms.products.add');
    Route::post('/cms/products/store',              [   CMSProductCtrl::class,  'productStore'      ])->middleware('admin')->name('cms.products.store');
    ##[ UPATE ]
    Route::get('/cms/products/edit/{id}',           [   CMSProductCtrl::class,  'productEdit'       ])->middleware('admin')->name('cms.products.edit');
    Route::post('/cms/products/update/{id}',        [   CMSProductCtrl::class,  'productUpdate'     ])->middleware('admin')->name('cms.products.update');
    ##[ Destroy ]
    Route::get('/cms/products/destroy/{id}',        [   CMSProductCtrl::class,  'productDestroy'    ])->middleware('admin')->name('cms.products.destroy');

    Route::get('/cart',                             [   WebCartCtrl::class,     'cart'               ])->middleware('customer')->name('cart');
    Route::get('/cart/add/{id}',                    [   WebCartCtrl::class,     'add'                ])->middleware('customer')->name('cart.add');
});





