<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/create',[BookController::class,'create'])->name('books.create');
Route::post('/books/store',[BookController::class,'store'])->name('books.store');
Route::get('/book/{book}/show',[BookController::class,'show'])->name('book.show');
Route::get('book/{book}/edit',[BookController::class,'edit'])->name('book.edit');
Route::patch('/books/update',[BookController::class,'update'])->name('books.update');

