@extends('layouts.app')

@section('title', 'Show Book')

@section('content')

<p>Here will be the info about '{{ $book->title }}'</p>

<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>

@endsection
