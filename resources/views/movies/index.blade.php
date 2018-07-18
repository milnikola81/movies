@extends('layouts/master')

@section('title')
    Movies Laravel | All Movies
@endsection

@section('content')
        <table>
            <tr>
                <!--
                <th>ID</th>
                -->
                <th>Title</th>
                <!--
                <th>Genre</th>
                <th>Director</th>
                <th>Year</th>
                -->
                <th>Storyline</th>
            </tr>
        @foreach($movies as $movie)
            <tr>
                <!--
                <td>{{ $movie->id }}</td>
                -->
                <td><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></td>
                <!--
                <td>{{ $movie->genre }}</td>
                <td>{{ $movie->director }}</td>
                <td>{{ $movie->year }}</td>
                -->
                <td>{{ $movie->storyline }}</td>
            </tr>
        @endforeach

        </table>

@endsection