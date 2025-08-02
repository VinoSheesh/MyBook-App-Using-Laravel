<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::prefix('books')->group(function(){
    Route::get('/',[BookController::class, 'index'])->name('buku.index');
    Route::get('/create', [BookController::class, 'create'])->name ('buku.create');
    Route::post('/', [BookController::class, 'store'])->name('buku.store');
    Route::get('/{id}/edit', [BookController::class, 'edit'])->name('buku.edit');
    Route::put('/{id}', [BookController::class, 'update'])->name('buku.update');
    Route::delete('/{id}', [BookController::class, 'destroy'])->name('buku.destroy');
    Route::get('/{id}', [BookController::class, 'show'])->name('buku.show');
});
