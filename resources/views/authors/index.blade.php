@extends('layouts.app')

@section('title', 'Authors')

@section('content')

<table class="table table-striped table-bordered">
    <thead>
        <tr>
          @auth
            <td>ID</td>
          @endauth
            <td>Author's Name</td>
          @auth
            <td>Books Count</td>
          @endauth
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($authors as $author)
        <tr>
          @auth
            <td>{{ $author->id }}</td>
          @endauth
            <td>{{ $author->name }}</td>
          @auth
            <td>{{ $author->books->count() }}</td>
          @endauth
            <td>

              <div class="btn-toolbar mb-3" role="toolbar">
                <a class="btn btn-small btn-success" href="{{ route('authors.show', $author->id) }}">Show</a>

                @auth
                  <a class="btn btn-small btn-info" href="{{ route('authors.edit', $author->id) }}">Edit</a>
                  <form method="POST" action="{{ action('AuthorController@destroy', $author->id) }}" class="inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                @endauth

              </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $authors->links() }}

<br>
@auth
<a class="btn btn-small btn-primary" href="{{ route('authors.create') }}">Add Author</a>
@endauth

@endsection
