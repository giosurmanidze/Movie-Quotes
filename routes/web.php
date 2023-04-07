<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', [QuoteController::class, 'index'])->name('quotes.index');
Route::get('movies/{id}/quotes', [QuoteController::class, 'show'])->name('quotes.show');
Route::get('movies/{quote}/quote', [QuoteController::class, 'single'])->name('quotes.single');

Route::post('logout', [SessionsController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('admin/login', [SessionsController::class, 'create'])->middleware('guest')->name('sessions.create');
Route::post('admin/login', [SessionsController::class, 'store'])->middleware('guest')->name('sessions.store');


Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('update-quote', [AdminQuoteController::class, 'index'])->name('quotes.index');
        Route::get('update-movie', [AdminMovieController::class, 'index'])->name('movies.index');
        Route::view('create-movie', 'components.create-movie')->name('movies.create');
        Route::view('create-quote', 'login.dashboard')->name('quotes.create');
    });

    Route::post('quotes', [QuoteController::class, 'store'])->name('quotes.store');
    Route::post('movies', [MovieController::class, 'store'])->name('movies.store');


    Route::controller(AdminQuoteController::class)->name('update-quotes.')->group(function () {
        Route::get('update-quotes/{id}/edit', 'edit')->name('edit');
        Route::patch('quotes/{quote}', 'update')->name('update');
        Route::delete('quotes/{quote}', 'destroy')->name('destroy');
    });
    Route::controller(AdminMovieController::class)->name('update-movies.')->group(function () {
        Route::get('update-movies/{id}/edit', 'edit')->name('edit');
        Route::patch('movies/{movie}', 'update')->name('update');
        Route::delete('movies/{movie}', 'destroy')->name('destroy');
    });
});