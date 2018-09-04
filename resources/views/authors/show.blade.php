@extends('layouts.app')

@section('title', 'Show Author')

@section('content')

<h3>List of the {{ $author->name }}'s books</h3>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
          @auth
          <td>ID</td>
          @endauth
          <td>Title</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
          <tr>
            @auth
              <td>{{ $book->id }}</td>
            @endauth
              <td>{{ $book->title }}</td>
              <td>

                <div class="btn-toolbar mb-3" role="toolbar">
                  <a class="btn btn-small btn-success" href="{{ route('books.show', $book->id) }}">Show</a>
                </div>
              </td>
          </tr>
      @endforeach

    </tbody>
</table>

<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>

@endsection
