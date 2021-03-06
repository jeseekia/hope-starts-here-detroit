@extends('layout')

@section('content')
<div class="panel panel-default post" id="show page">
  <div class="panel-body">

    @if(strlen($post->title)>0 || strlen($post->subtitle)>0)
      <article class="post-content">
    @else
      <article>
    @endif
    
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

      @if(strlen($post->title)>1)
      <h2 class="title">{{$post->title}}</h2>
      @endif

      @if(strlen($post->subtitle)>1)
      <h3>{{$post->subtitle}}</h3>
      @endif
      <p>
        {!!$post->body!!}
      </p>
      <a href="/posts/{{$post->slug}}">Read more</a>
    </article>
  </div>
</div>


@stop
