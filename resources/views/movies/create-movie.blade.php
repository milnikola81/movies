@extends('layouts/master')

@section('title')
    Movies Laravel | Insert Movie
@endsection

@section('content')


<form method="POST" action="/movies">

{{ csrf_field() }}

    <!--
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    -->
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>
    @include('/partials/error-message', ['fieldName' => 'title'])

     <div class="form-group">
        <label for="genre">Genre</label>
        <input name="genre" type="text" class="form-control" id="genre">
    </div>
    @include('/partials/error-message', ['fieldName' => 'genre'])

     <div class="form-group">
        <label for="director">Director</label>
        <input name="director" type="text" class="form-control" id="director">
    </div>
    @include('/partials/error-message', ['fieldName' => 'director'])

     <div class="form-group">
        <label for="year">Year</label>
        <input name="year" type="number" class="form-control" id="year">
    </div>
    @include('/partials/error-message', ['fieldName' => 'year'])

    <div class="form-group">
        <label for="storyline">Body</label>
        <textarea name="storyline" class="form-control" id="storyline" rows="8"></textarea>
    </div>
    @include('/partials/error-message', ['fieldName' => 'storyline'])

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection