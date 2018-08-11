@extends('app')

@section('title', 'Create Author')

@section('h2', 'Create Author')

@section('content')
  <form>
      <div class="form-group col-md-6">
        <label for="name">Author's Name</label>
        <input type="text" class="form-control" id="name">
      </div>
      <!-- можно вывести список книг - на будущее -->
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection
