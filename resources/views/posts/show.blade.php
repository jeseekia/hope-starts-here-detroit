@extends('layout')

@section('content')
<div class="panel panel-default" id="show">
  <div class="panel-body">
    <article>
      <img src="/post-images/{{$post->thumbnail}}" alt="" />
      <h2>{{$post->title}}</h2>
      <h3>{{$post->subtitle}}</h3>
      <p>
        {{$post->body}}
      </p>
      <a href="/posts/{{$post->slug}}">Read more</a>
    </article>
  </div>
</div>


@stop
