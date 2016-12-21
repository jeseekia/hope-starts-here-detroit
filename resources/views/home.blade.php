@extends('layout')

@section('content')

  @foreach ($posts as $post)
    <article>
      <img src="{{$post->thumbnail}}" alt="" />
      <h2>{{$post->title}}</h2>
      <h3>{{$post->subtitle}}</h3>
      <p>
        {{$post->body}}
      </p>
      <a href="/posts/{{$post->slug}}">Read more</a>
    </article>
  @endforeach
@stop
