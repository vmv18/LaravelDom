<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;   
use App\Http\Controllers\AuthorController; 

Route::get('/', function () {

    return view('welcome');
});

Route::get('/dashboard', [BookController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/books/{book}', [BookController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('books.show'); 

Route::get('/authors/{author}', [AuthorController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('authors.show'); 



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
