<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title')
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- App CSS -->
        <link rel="stylesheet" href="/css/app.css" >

        <!-- Movies CSS -->
        <link rel="stylesheet" href="/css/movies.css" >

        
       
    </head>

    <body>
        <div class="blog-masthead">
            <div class="container">
                <nav class="nav">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/movies">Movies</a>
                    <a class="nav-link" href="/movies/create-movie">Add</a>
                </nav>
            </div>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-sm-8 blog-main">

                @yield('content')

                </div>

                <div class="col-sm-3 offset-sm-1 blog-sidebar">

                @yield('sidebar')

                </div>

            </div>
        
        </div>

        @include('partials.footer')

    </body>
</html>