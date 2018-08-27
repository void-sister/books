@extends('app')

@section('title', 'Edit Author')

@section('h2', 'Edit')

@section('content')

<form action="{{ action('AuthorController@update', $author->id) }}" method="POST">
  <input type="hidden" name="_method" value="PUT" />
  {{ csrf_field() }}
  <div>
    <label for="name">Author's Name</label>
    <input type="text" id="name" name="name" value="{{ $author->name }}">
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection
