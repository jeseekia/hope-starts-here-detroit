@extends('layout')

@section('content')

  @foreach ($posts as $post)
  <div class="panel panel-default post" id="show page">
    <div class="panel-body">
      <article class="post-content">
        @if(strlen($post->thumbnail)<=6)

        @elseif($post->thumbnail)
          <?php $extension=substr($post->thumbnail,-4,4); $extension = strtolower($extension)?>
          @if($extension === ".jpg" || $extension === "jpeg" || $extension === ".png")
            <img src="/post-images/{{$post->thumbnail}}" alt="" />
          @else
            <video src="/post-images/{{$post->thumbnail}}" autoplay>

            </video>
          @endif
        @else
          <p>test 2</p>
        @endif
        <h2 class="title">{{$post->title}}</h2>
        <h3>{{$post->subtitle}}</h3>
        <p>
          {!!$post->body!!}
        </p>
        <a href="/posts/{{$post->slug}}">Read more</a>
      </article>
    </div>
  </div>
  @endforeach
@stop
