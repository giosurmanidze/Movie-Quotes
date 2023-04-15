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
        $quote = Quote::with('movie')->get();

        $quote = $quote->isEmpty() ? null : $quote->random();

        return view('quotes.index', [
            'quote' => $quote
        ]);
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

        $quote = new Quote();
        $quote->movie_id = $validatedData['movie_id'];
        $quote->quote_ka = $validatedData['quote_ka'];
        $quote->quote_en = $validatedData['quote_en'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('quotes_images');
            $quote->movie_img = $path;
        }

        $quote->save();

        return redirect("admin/dashboard/update-quote");
    }
}
