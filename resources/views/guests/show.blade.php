@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-4 pt-3">
            <div class="card ml-3">
                  <img class="card-img-top" src="{{Storage::url($post->img)}}" alt="{{$post->title}}">
                  <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                    <p class="card-text"><small class="text-muted">{{$post->user->name}} Last Update: {{$post->user->updated_at}}</small></p>
                  </div>
              </div>
        </div>
    </div>
@endsection
