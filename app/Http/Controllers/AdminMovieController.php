<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
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

    public function update(UpdateMovieRequest $request, Movie $movie)
    {

        $validatedData = $request->validated();

        $movie->update($validatedData);

        return redirect('/');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return back();
    }
}
