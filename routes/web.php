<?php

use App\Http\Controllers\BookController;
use \App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', [ShopController::class, 'show']);

Route::get('/book/{book}', [BookController::class, 'show']);
Route::get('/books', [BookController::class, 'showList']);
