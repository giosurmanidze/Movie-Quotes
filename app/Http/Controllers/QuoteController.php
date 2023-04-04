<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quote = Quote::with('movie')->get()->random();

        auth()->logout();
        return view('quotes.index', [
            'quote' => $quote
        ]);
    }

    public function show($id)
    {

        $quotes = Quote::with('movie')->where('movie_id', $id)->inRandomOrder()->get();

        return view('quotes.show', ['quotes' => $quotes]);
    }
}