<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/items', function () {

})->name('items.index');


Route::get('/items/create', function () {

})->name('items.create');


Route::post('/items', function () {

})->name('items.store');


Route::get('/items/{id}', function () {
    
})->name('items.show');


