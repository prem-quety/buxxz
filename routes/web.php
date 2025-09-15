<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', [StoreController::class, 'index'])->name('store.index');
Route::get('/products/{product}', [StoreController::class, 'show'])->name('store.show');
