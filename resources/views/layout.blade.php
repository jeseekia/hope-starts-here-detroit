<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hope Starts Here Detroit</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">
        <script src="//cdn.tinymce.com/4/tinymce.min.js" charset="utf-8"></script>
        <script type="text/javascript">
          tinymce.init({
            selector: 'textarea'
          });
        </script>

    </head>
    <body>

        <header class="jumbotron">

        </header>

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
              <nav>
                <ul class="nav nav-pills nav-justified">
                  <li role="presentation"><a href="/about">HOME</a></li>
                  <li role="presentation"><a href="/about">ABOUT</a></li>
                  <li role="presentation"><a href="/media">MEDIA</a></li>
                  <li role="presentation"><a href="/resources">RESOURCES</a></li>
                  <li role="presentation"><a href="/connect">CONNECT</a></li>
                </ul>
              </nav>

              @yield('content')
          </main>
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
