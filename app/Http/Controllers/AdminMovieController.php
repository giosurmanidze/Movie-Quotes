<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
    public function index()
    {
        return view('components.update-movie', [
            'movies' => Movie::all()
        ]);
    }

    public function edit(Movie $movie)
    {
        return view('components.edit-movie', ['movie' => $movie]);
    }

    public function update(CreateMovieRequest $request, Movie $movie)
    {

        $validatedData = $request->validated();

        $movie->update($validatedData);

        return redirect('/');
    }

    public function destroy(Movie $movie)
    {
        $movie->quotes()->delete();
        $movie->delete();

        return back();
    }
}
