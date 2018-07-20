<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //protected $latest_movies;

    public function index() {
        $movies = Movie::all();
        $latest_movies = Movie::latest()->take(5)->get();
        return view('movies.index', compact('movies', 'latest_movies')); //ruta je sada promenjena u resources/views/cars/index.blade.php
    }

    public function createMovie() {
        return view('movies/create-movie');
    }

    public function show($id) { // prosledjuje id trazenog reda
        $movie = Movie::find($id); // pronalazi red sa trazenim id iz tabele movies
        return view('movies.show', compact('movie'));
    }

    public function store() {
        $this->validate(request(), ['title' => 'required', 'genre' => 'required', 'director' => 'required', 'year' => 'required|before:tomorrow|after:1900|before:2019', 'storyline' => 'required|max:1000']);
        Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'director' => request('director'),
            'year' => request('year'),
            'storyline' => request('storyline')
        ]);
        return redirect('/movies');
    }

}
