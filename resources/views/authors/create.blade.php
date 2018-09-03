@extends('layouts.app')

@section('title', 'Create Author')

@section('content')

<form method="POST" action="{{ action('AuthorController@store') }}">
  {{ csrf_field() }}
  <div>
    <label for="name">Author's Name</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
  </div>
  <button type="submit" class="btn btn-success">Create</button>
</form>

<br>
  <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>

@endsection
