@extends('app')

@section('title', 'Edit Book')

@section('h2', 'Edit')

@section('content')

<form action="{{ action('BookController@update', $book->id) }}" method="POST">
  <input type="hidden" name="_method" value="PUT" />

  {{ csrf_field() }}
  <div>
    <label for="author_id">Author</label>
    <select name="author_id" id="author_id">
      @foreach ($authors as $author)
        <option value="{{ $author->id }}"
          @if ($author->id == $book->author_id)
            selected="selected"
          @endif
          >{{ $author->name }}</option>
      @endforeach
    </select>
  </div>

  <div>
    <label for="title">Book Title</label>
    <input type="text" id="title" name="title" value="{{ $book->title }}">
  </div>
  <button type="submit" class="btn btn-success">Edit</button>
</form>

<br>
  <a class="btn btn-primary" href="{{ url('/books') }}">Back</a>

@endsection
