@extends('app')

@section('title', 'Authors')

@section('h2', 'Authors List')

@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Book Id</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->book_id }}</td>
            <td>

              <div class="btn-toolbar mb-3" role="toolbar">
                <a class="btn btn-small btn-success" href="{{ url('/authors', $author->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ route('authors.edit', $author->id) }}">Edit</a>

                <form method="POST" action="{{ action('AuthorController@destroy', $author->id) }}" class="inline">
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
@endsection
