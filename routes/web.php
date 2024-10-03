<?php

use App\Http\Controllers\CollectionOutputController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/qa', function () {
    return view('qa');
})->name('q&a');


Route::get('/', [OrderController::class, 'index'])->name('orders');
Route::get('/collection', [CollectionOutputController::class, 'output'])->name('collection');