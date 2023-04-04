<?php

use App\Http\Controllers\SessionsController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [QuoteController::class, 'index'])->name('quotes.index');
Route::get('/movies/{id}/quotes', [QuoteController::class, 'show'])->name('quotes.show');

Route::get('admin/login', [SessionsController::class, 'create']);
Route::post('admin/login', [SessionsController::class, 'store']);