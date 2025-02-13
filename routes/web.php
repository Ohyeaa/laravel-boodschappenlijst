<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;


Route::get('/items', [ItemController::class, 'index'])->name('items.index');

Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

Route::get('/items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');

Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');






Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

Route::post('/items', [ItemController::class, 'store'])->name('items.store');






Route::get('/items/{id}', function () {})->name('items.show');







Route::redirect('/', '/items');



Route::get('/laravel', function () {
    return view('laravel');
});