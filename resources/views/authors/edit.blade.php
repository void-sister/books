@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')

<form action="{{ action('AuthorController@update', $author->id) }}" method="POST">
  <input type="hidden" name="_method" value="PUT" />

  {{ csrf_field() }}
  <div>
    <label for="name">Author's Name</label>
    <input type="text" id="name" name="name" value="{{ $author->name }}">
  </div>
  <button type="submit" class="btn btn-success">Edit</button>
</form>

<br>
  <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>


@endsection
