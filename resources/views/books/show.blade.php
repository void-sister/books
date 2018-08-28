@extends('app')

@section('title', 'Show Book')

@section('content')

<p>Here will be the info about '{{ $book->title }}'</p>

<a class="btn btn-primary" href="{{ url('/books') }}">Back</a>

@endsection
