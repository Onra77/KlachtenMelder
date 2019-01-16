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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">7
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
                    <!-- <a href="welcome">Home</a> -->
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
        <script src="{{ asset('js/main.js') }}"></script>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>

    <footer>
        &copy; 2018 - <script type="text/javascript">document.write(new Date().getFullYear());</script>
    </footer>
</html>