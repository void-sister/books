@extends('app')

@section('title', 'Books')

@section('h2', 'Books List')

@section('content')

<div class="btn-toolbar mb-2" role="toolbar">
  <a class="btn btn-small btn-primary" href="{{ url('/authors') }}">All Authors</a>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Author</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>

              <div class="btn-toolbar mb-3" role="toolbar">
                <a class="btn btn-small btn-success" href="{{ url('/books', $book->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ route('books.edit', $book->id) }}">Edit</a>

                <form method="POST" action="{{ action('BookController@destroy', $book->id) }}" class="inline">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <input type="submit" class="btn btn-danger" value="Delete">
                </form>

              </div>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a class="btn btn-small btn-primary" href="{{ route('books.create') }}">Add Book</a>
@endsection
