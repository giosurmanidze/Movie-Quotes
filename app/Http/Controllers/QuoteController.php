<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quote = Quote::with('movie')->get()?->random();

        return view('quotes.index', [
            'quote' => $quote
        ]);
    }

    public function show($id)
    {
        $quotes = Quote::with('movie')->where('movie_id', $id)->inRandomOrder()->get();

        return view('quotes.show', ['quotes' => $quotes]);
    }
    

    public function single(Quote $quote)
    {
        return view('quotes.single', [
            'quote' => $quote
        ]);
    }


    public function store(CreateQuoteRequest $request)
    {
        $validatedData = $request->validated();


        $path = $request->file('image')->store('quotes_images');

        $quote = new Quote();
        $quote->movie_id = $validatedData['movie_id'];
        $quote->quote = $validatedData['quote'];
        $quote->movie_img = $path;
        
        
        $quote->save();

        return back();
    }
}