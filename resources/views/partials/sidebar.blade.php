

<div class="sidebar-module">
    <h4>Last 5 movies</h4>
    <ol class="list-unstyled">
        @foreach($latest_movies as $movie)
        <li><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></li>
        @endforeach
    </ol>
</div>
<!-- <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
    </ol>
</div> -->