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

    public function edit(Movie $id)
    {
        return view('components.edit-movie', ['movie' => $id]);
    }

    public function update(CreateMovieRequest $request, Movie $id)
    {

        $validatedData = $request->validated();

        $id->update($validatedData);

        return redirect('/');
    }

    public function destroy(Movie $id)
    {
        $id->quotes()->delete();
        $id->delete();

        return back();
    }
}