<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [QuoteController::class, 'index'])->name('quotes.index');
Route::get('movies/{id}/quotes', [QuoteController::class, 'show'])->name('quotes.show');

Route::post('logout', [SessionsController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('admin/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('admin/login', [SessionsController::class, 'store'])->middleware('guest');

Route::get('admin/dashboard', [DashboardController::class, 'login'])->middleware('admin');
Route::post('admin/quotes', [QuoteController::class, 'store'])->middleware('admin');