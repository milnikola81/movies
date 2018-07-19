@extends('layouts/master')

@section('title')
    Movies Laravel | Single Movie
@endsection

@section('content')

        <table class='single-movie'>
            <tr>
                <th>Title:</th>
                <td>{{ $movie->title }}</td>
            </tr>
            <tr>
                <th>Genre:</th>
                <td><a href="/genres/{{ $movie->genre }}">{{ $movie->genre }}</a></td>
            </tr>
            <tr>
                <th>Director:</th>
                <td>{{ $movie->director }}</td>
            </tr>
            <tr>
                <th>Year:</th>
                <td>{{ $movie->year }}</td> 
            </tr>
            <tr>
                <th>Storyline:</th>
                <td>{{ $movie->storyline }}</td>
            </tr>

        </table>

        <p style="margin-top: 2rem">Comments:</p>

        @foreach($movie->comments as $comment)
        <div class="comment-wrapper">
            <div>{{ $comment->content }}</div>
            <div>{{ $comment->created_at }}</div>
        </div>
        @endforeach

        <form method="POST" action="/movies/{{$movie->id}}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="content">Create new comment:</label>
                <textarea name="content" class="form-control" id="content" rows="8"></textarea>
            </div>
            @include('/partials/error-message', ['fieldName' => 'content'])

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

@endsection