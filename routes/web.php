<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [QuoteController::class, 'index'])->name('quotes.index');
Route::get('movies/{id}/quotes', [QuoteController::class, 'show'])->name('quotes.show');

Route::get('admin/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('admin/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'distroy'])->middleware('auth');

Route::get('admin/dashboard', [DashboardController::class, 'create'])->middleware(['auth', 'admin']);