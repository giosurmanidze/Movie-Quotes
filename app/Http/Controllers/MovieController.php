<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function store(CreateMovieRequest $request)
    {
        $movie = Movie::create([
            'title' => $request->validated()['title']
        ]);

        return back();
    }
}
