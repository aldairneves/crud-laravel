<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



/*Route::get('/', function () {
    return view('index');
    Route::resource('/books', BookController::class);
});*/

Route::get('/',[BookController::class, 'index']);
Route::get('/show',[BookController::class, 'show']);
Route::get('/create',[BookController::class, 'create']);
