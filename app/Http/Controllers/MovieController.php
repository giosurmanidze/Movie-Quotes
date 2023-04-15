<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function store(CreateMovieRequest $request)
    {
        $data = $request->validated();

        $movie = Movie::create([
            'title_ka' => $data['title_ka'],
            'title_en' => $data['title_en'],
        ]);

        return redirect("admin/dashboard/update-movie");
    }


    public function show(Movie $movie)
    {
        return view('quotes.show', ['movie' => $movie->load('quotes')]);
    }
}
