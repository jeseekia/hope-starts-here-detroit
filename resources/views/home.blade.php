    @extends('layout')

    @section('content')
    <div id="home-page">
    <!--  -->

    <div id="the-latest" class="row">
      <div class="col-md-10 col-md-offset-1">
        <hr>
          <h1>
            The Latest from Hope Starts Here!
          </h1>
        <hr>
      </div>
    </div>
      @foreach ($posts->reverse() as $post)
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
      @endforeach
      </div>
    @stop
