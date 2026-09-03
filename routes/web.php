<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::get('/', function () {
    return view('welcome');
});

Route::name('pages.')->prefix('pages')->group(function(){
route::get('/', [RouteController::class, 'index']) -> name('index');
route::get('/checkout', [RouteController::class, 'catalog']) -> name('catalogue');
});