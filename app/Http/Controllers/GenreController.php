<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenreController extends Controller
{
    public function show($genre) {
        $allMovies = Movie::all();
        $movies = $allMovies->where('genre', $genre);
        $latest_movies = Movie::where('genre', $genre)->orderBy('created_at', 'desc')->take(5)->get();
        return view('movies.index', compact('movies', 'latest_movies'));
    }
}
