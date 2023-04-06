<?php

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

Route::middleware(['admin'])->group(function () {
    Route::view('admin/dashboard/create-quote', 'login.dashboard');
    Route::post('admin/quotes', [QuoteController::class, 'store']);

    Route::view('admin/dashboard/create-movie', 'components.create-movie');
    Route::post('admin/movies', [MovieController::class, 'store']);

    Route::get('admin/dashboard/update-quote', [AdminQuoteController::class, 'index']);
    Route::get('admin/update-quotes/{quote}/edit', [AdminQuoteController::class, 'edit']);
    Route::patch('admin/quotes/{quote}', [AdminQuoteController::class, 'update']);
    Route::delete('admin/quotes/{quote}', [AdminQuoteController::class, 'distroy']);
    
});