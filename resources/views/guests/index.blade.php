@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-group">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-4 pt-3">
                    <div class="card">
                        <img class="card-img-top" src="{{Storage::url($post->img)}}" alt="{{$post->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{Str::substr($post->body, 0, 150). "..."}}</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><small class="text-muted">{{$post->user->name }} Last Update: {{$post->user->updated_at}}</small></p>
                            <a href="{{route('guest.posts.show', $post->slug)}}">Visualizza il Post</a>
                            @forelse ($post->tags as $tag)
                                <li>{{ $tag->name }}</li>
                                @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
