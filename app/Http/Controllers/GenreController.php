<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenreController extends Controller
{
    public function show($genre) {
        $allMovies = Movie::all();
        $movies = $allMovies->where('genre', $genre);
        return view('movies.index', compact('movies'));
    }
}
