@extends('layout')

@section('content')

  @foreach ($posts as $post)
  <div class="panel panel-default">
    <div class="panel-body">
      <article>
        <img src="{{$post->thumbnail}}" alt="" />
        <h2>{{$post->title}}</h2>
        <h3>{{$post->subtitle}}</h3>
        <p>
          {{$post->body}}
        </p>
        <a href="/posts/{{$post->slug}}">Read more</a>
      </article>
    </div>
  </div>
  @endforeach
@stop
