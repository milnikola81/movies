<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>

    <body>
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

    </body>

</html>