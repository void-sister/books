@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                      You are logged in! Now you can add, edit and delete books and authors. Enjoy)
                    </p>

                    <div class="list-group">
                      <a href="{{ route('books.index') }}" class="list-group-item list-group-item-action">List of all books</a>
                      <a href="{{ route('books.create') }}" class="list-group-item list-group-item-action">Add a book</a>
                      <a href="{{ route('authors.index') }}" class="list-group-item list-group-item-action">List of all authors</a>
                      <a href="{{ route('authors.create') }}" class="list-group-item list-group-item-action">Add an author</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
