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
              <li role="presentation"><a href="/about">About</a></li>
              <li role="presentation"><a href="/media">Media</a></li>
              <li role="presentation"><a href="/resources">Resources</a></li>
              <li role="presentation"><a href="/connect">Connect</a></li>
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
