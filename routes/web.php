<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



/*Route::get('/', function () {
    return view('index');
    Route::resource('/books', BookController::class);
});*/
Route::prefix('book')->group(function(){
    Route::get('/',[BookController::class, 'index'])->name('book-index');
    Route::get('/create',[BookController::class, 'create'])->name('book-create');
    Route::post('/',[BookController::class, 'store'])->name('book-store');
    Route::get('/{id}/edit', [BookController::class, 'edit'])->where('id', '[0-9]+')->name('book-edit');
    Route::put('/{id}', [BookController::class, 'update'])->where('id', '[0-9]+')->name('book-update');
    Route::delete('/{id}', [BookController::class, 'destroy'])->where('id', '[0-9]+')->name('book-destroy');
    });
    Route::fallback(function(){
        return "Erro de rota!";
    });