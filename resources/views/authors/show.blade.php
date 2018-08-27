@extends('app')

@section('title', 'Show Author')

@section('content')

<p>Here will be the list of the {{ $author->name }}'s books</p>

<a class="btn btn-primary" href="{{ url('/authors') }}">Back</a>

@endsection
