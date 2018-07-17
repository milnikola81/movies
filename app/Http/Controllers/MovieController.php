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

    public function show($id) { // prosledjuje id trazenog reda
        $movie = Movie::find($id); // pronalazi red sa trazenim id iz tabele cars
        return view('movies.show', compact('movie'));
    }

}
