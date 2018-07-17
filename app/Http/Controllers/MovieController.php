<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('movies.index', compact('movies')); //ruta je sada promenjena u resources/views/cars/index.blade.php
    }

    public function createMovie() {
        return view('movies/create-movie');
    }

    public function show($id) { // prosledjuje id trazenog reda
        $movie = Movie::find($id); // pronalazi red sa trazenim id iz tabele cars
        return view('movies.show', compact('movie'));
    }

    public function store() {
        $this->validate(request(), ['title' => 'required', 'genre' => 'required', 'director' => 'required', 'year' => 'required|gt:1900|lte:2018', 'storyline' => 'required|max:1000']);
        Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'director' => request('director'),
            'year' => request('year'),
            'storyline' => request('storyline')
        ]);
        //dd(request()->all());
        //dd('store');
        //return view('posts.store');
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->published = (bool) request('published');
        // $post->save();
        return redirect('/movies');
    }

}
