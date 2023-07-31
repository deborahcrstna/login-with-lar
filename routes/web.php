<?php

use App\Http\Controllers\ProdutoController;

Route::middleware('auth')->group(function () {
    Route::resource('produtos', ProdutoController::class);
});

Auth::routes();

Route::get('/', [ProdutoController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


