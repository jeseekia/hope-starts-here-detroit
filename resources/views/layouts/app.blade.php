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
        selector: 'textarea'
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

        <header class="jumbotron">
          <div id="follow-flag">
              <p class="follow-flag-text">
                  f<br/>
                  o<br/>
                  l<br/>
                  l<br/>
                  o<br/>
                  w<br/>
                  <br/>
                  u<br/>
                  s<br/>
                  !
              </p>
              <a href="https://www.facebook.com/HopeStartsHereDetroit/?fref=ts" target="_blank"><img src="http://static.tumblr.com/jy33kqh/Omqogezyr/fb-f-logo__white_29.png"/></a>
          </div>
        </header>

        <div class="container">
          <a class="logo-a" href="/">
            <img class="logo" src="/images/hsh-logo.png" alt="Hope Starts Here Detroit logo" />
          </a>
          <nav>
            <ul class="nav nav-pills nav-justified">
              <li role="presentation"><a href="/about">ABOUT</a></li>
              <li role="presentation"><a href="/media">MEDIA</a></li>
              <li role="presentation"><a href="/resources">RESOURCES</a></li>
              <li role="presentation"><a href="/connect">CONNECT</a></li>
            </ul>
          </nav>

          @yield('content')
        </div>

    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
