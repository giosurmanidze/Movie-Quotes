<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::with('movie')->inRandomOrder()->get();

        return view('quotes.index', [
            'quotes' => $quotes
        ]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $quotes = Quote::where('movie_id', $id)->inRandomOrder()->get();

        return view('quotes.show', [
            'movie' => $movie,
            'quotes' => $quotes,
        ]);
    }
}
