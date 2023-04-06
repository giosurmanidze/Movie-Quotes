<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [QuoteController::class, 'index'])->name('quotes.index');
Route::get('movies/{id}/quotes', [QuoteController::class, 'show'])->name('quotes.show');
Route::get('movies/{quote}/quote', [QuoteController::class, 'single']);

Route::post('logout', [SessionsController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('admin/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('admin/login', [SessionsController::class, 'store'])->middleware('guest');


Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('update-quote', [AdminQuoteController::class, 'index']);
        Route::get('update-movie', [AdminMovieController::class, 'index']);
        Route::view('create-movie', 'components.create-movie');
        Route::view('create-quote', 'login.dashboard');
    });

    Route::post('quotes', [QuoteController::class, 'store']);
    Route::post('movies', [MovieController::class, 'store']);

    
    Route::controller(AdminQuoteController::class)->group(function () {
        Route::get('update-quotes/{quote}/edit', 'edit');
        Route::patch('quotes/{quote}', 'update');
        Route::delete('quotes/{quote}', 'destroy');
    });
    Route::controller(AdminMovieController::class)->group(function () {
        Route::get('update-movies/{movie}/edit', 'edit');
        Route::patch('movies/{movie}', 'update');
        Route::delete('movies/{movie}', 'destroy');
    });
});