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

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <a class="btn btn-small btn-success" href="{{ URL::to('authors/' . $author->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('authors/' . $author->id . '/edit') }}">Edit</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
