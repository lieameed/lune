<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::get('/', function () {
    return view('welcome');
});

Route::name('pages.')->prefix('pages')->group(function(){
route::get('/', [RouteController::class, 'index']) -> name('index');
route::get('/checkout', [RouteController::class, 'catalogue']) -> name('catalogue');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/history', function () {
    return view('history');
})->name('history');

