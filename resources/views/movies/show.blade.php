@extends('layouts/master')

@section('title')
    Movies Laravel | Single Movie
@endsection

@section('content')

        <table>
            <tr>
                <!--
                <th>ID</th>
                -->
                <th>Title</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Year</th>              
                <th>Storyline</th>
            </tr>

            <tr>
                <!--
                <td>{{ $movie->id }}</td>
                -->
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->genre }}</td>
                <td>{{ $movie->director }}</td>
                <td>{{ $movie->year }}</td>             
                <td>{{ $movie->storyline }}</td>
            </tr>

@endsection