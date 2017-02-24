<!DOCTYPE html>
<!-- Used for pages requiring login-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hope Starts Here Detroit</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">


    <!-- Scripts -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      tinymce.init({
        selector: 'textarea',
        allow_script_urls: true,
        extended_valid_elements : 'script[type|src],iframe[src|style|width|height|scrolling|marginwidth|marginheight|frameborder]',
        valid_elements : '*[*]',
        plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
      });
    </script>


    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <div id="login-nav" class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Hope Starts Here Detroit') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <!-- <li><a href="{{ url('/register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <a href="/home">
        <header class="jumbotron
          @if(Request::is('home'))
            home-header
          @elseif(Request::is('about'))
            about-header
          @elseif(Request::is('media'))
            media-header
          @elseif(Request::is('connect'))
            connect-header
          @elseif(Request::is('resources'))
            resources-header
          @else
            home-header
          @endif
          ">
        </header>
        </a>
        <div class="container">
          <main>
            <img src="/images/hsh_cslewis_quote.jpg" alt="">
            <div id="follow-flag">
                <a href="https://www.facebook.com/HopeStartsHereDetroit/?fref=ts" target="_blank"><img src="images/fb_side_of_page.jpg"/></a>
            </div>
<!--
              <a class="logo-a" href="/">
                <img class="logo" src="/images/hsh-logo.png" alt="Hope Starts Here Detroit logo" />
              </a> -->
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <nav>
                    <ul class="nav nav-pills nav-justified">
                      <li role="presentation"><a href="/about">ABOUT</a></li>
                      <li role="presentation"><a href="/resources">RESOURCES</a></li>
                      <li role="presentation"><a href="/media">MEDIA</a></li>
                      <li role="presentation"><a href="/connect">CONNECT</a></li>
                    </ul>
                  </nav>
                </div>
              </div>

              @yield('content')
          </main>
        </div>

    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
