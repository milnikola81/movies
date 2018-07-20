<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenreController extends Controller
{
    public function show($genre) {

        $movies = Movie::where('genre', $genre)->get();
        $latest_movies = Movie::where('genre', $genre)->latest()->take(5)->get();
        return view('movies.index', compact('movies', 'latest_movies'));
    }
}
