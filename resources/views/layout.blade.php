<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Starts Here Detroit</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">

    </head>
    <body>

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
            <!-- <ul class="nav nav-pills">
              <li role="presentation" class="active"><a href="#">Home</a></li>
              <li role="presentation"><a href="#">Profile</a></li>
              <li role="presentation"><a href="#">Messages</a></li>
            </ul> -->
            <ul class="nav nav-pills nav-justified">
              <li role="presentation"><a href="/about">ABOUT</a></li>
              <li role="presentation"><a href="/media">MEDIA</a></li>
              <li role="presentation"><a href="/resources">RESOURCES</a></li>
              <li role="presentation"><a href="/connect">CONNECT</a></li>
            </ul>
          </nav>

          @yield('content')
        </div>

        <footer>
          <p>
            Copyright © 2016 Hope Starts Here: Detroit's Early Childhood Partnership
          </p>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    </body>
</html>
