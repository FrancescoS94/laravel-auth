@extends('layouts.app')
@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @method('POST')
      <div class="form-group">
        <label for="exampleInputEmail1">Titolo</label>
        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" rows="3"></textarea>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
