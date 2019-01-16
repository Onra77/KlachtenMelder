<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

        <!-- <title>KlachtenMelder</title> -->
        <title>@yield('title', 'KlachtenMelder')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
      
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    KlachtenMelder
                </div>
                @yield('content')
                <div class="links">
                    <a href="klacht">Klacht</a>
                    <a href="overzicht">Overzicht</a>
                    <a href="info">Info</a>
                    <a href="faq">faq</a>
                    <a href="contact">contact</a>
                    <a href="disclaimer">disclaimer</a>
                </div>
                </div>
        </div>
        
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}">

        <script>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </script>

        
        <script>
        $(document).ready(function() {
  var urls = ['/img/02.jpg', 'img/08.jpg', 'img/03.jpg', 'img/04.jpg', 'img/05.jpg', 'img/06.jpg', 'img/07.jpg', 'img/01.jpg', 'img/09.jpg', 'img/10.jpg'];

  var cout = 1;
  $('body').css('background-image', 'url("' + urls[0] + '")');
  setInterval(function() {
    $('body').css('background-image', 'url("' + urls[cout] + '")');
    cout == urls.length-1 ? cout = 0 : cout++;
  }, 5000);

});
        </script>

    </body>

    <footer>
        &copy; 2018 - <script type="text/javascript">document.write(new Date().getFullYear());</script>
    </footer>
</html>