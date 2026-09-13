<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::get('/', function () {
    return view('welcome');
});

Route::name('pages.')->prefix('pages')->group(function () {
    Route::get('/', [RouteController::class, 'index'])->name('index');

    Route::get('/about-us', [RouteController::class, 'aboutUs'])->name('about-us');

    Route::get('/add', [RouteController::class, 'add'])->name('add');

    Route::get('/catalogue', [RouteController::class, 'catalogue'])->name('catalogue');

    Route::get('/checkout', [RouteController::class, 'checkout'])->name('checkout');

    Route::get('/detail', [RouteController::class, 'detail'])->name('detail');

    Route::get('/history', [RouteController::class, 'history'])->name('history');

    Route::get('/login', [RouteController::class, 'login'])->name('login');

    Route::get('/reserve', [RouteController::class, 'reserve'])->name('reserve');

    Route::get('/signup', [RouteController::class, 'signUp'])->name('signup');

    Route::get('/cart', [RouteController::class, 'cart'])->name('cart');
});

