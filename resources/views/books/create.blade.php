@extends('layouts.app')

@section('title', 'Create Book')

@section('content')

<form method="POST" action="{{ action('BookController@store') }}">
  {{ csrf_field() }}
  <div>
    <label for="author_id">Choose Author</label>
    <select name="author_id" id="author_id">
      @foreach ($authors as $author)
        <option value="{{ $author->id }}">{{ $author->name }}</option>
      @endforeach
    </select>
  </div>

  <div>
    <label for="title">Book Title</label>
    <input type="text" id="title" name="title" value="{{ old('title') }}">
  </div>
  <button type="submit" class="btn btn-success">Create</button>
</form>

<br>
  <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>

@endsection
