@extends('layout')

@section('content')
<article>
  <h2>{{$post->title}}</h2>
  <h3>{{$post->subtitle}}</h3>
  <p>
    {{$post->body}}
  </p>
</article>


@stop
