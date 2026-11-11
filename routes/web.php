<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('pages.index');
});

Route::name('pages.')->prefix('pages')->group(function () {
    Route::get('/', [RouteController::class, 'index'])->name('index');

    Route::get('/about-us', [RouteController::class, 'aboutUs'])->name('about-us');

    Route::get('/add', [RouteController::class, 'add'])->name('add');

    Route::get('/catalogue', [RouteController::class, 'catalogue'])->name('catalogue');

    Route::get('/checkout', [RouteController::class, 'checkout'])->name('checkout');

    Route::get('/detail', [RouteController::class, 'detail'])->name('detail');

    Route::get('/history', [RouteController::class, 'history'])->name('history');

    Route::get('/login', [RouteController::class, 'login'])->middleware('guest')->name('login');

    Route::get('/reserve', [RouteController::class, 'reserve'])->name('reserve');

    Route::get('/signup', [RouteController::class, 'signUp'])->middleware('guest')->name('signup');

    Route::get('/cart', [RouteController::class, 'cart'])->name('cart');
});

Route::middleware('guest')->group(function () {
    Route::redirect('/login', '/pages/login')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.store');
    Route::post('/register', [AuthController::class, 'register'])->middleware('throttle:5,1')->name('register.store');
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
