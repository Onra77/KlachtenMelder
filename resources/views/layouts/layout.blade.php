<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Z-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width = device-width, initial-scale=1">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

        <!-- <title>KlachtenMelder</title> -->
        <title>@yield('title', 'KlachtenMelder')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
      
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        

        <!-- Links -->
        <link rel="preload" as="01.jpg" href="/img/01.jpg">
        <link rel="preload" as="02.jpg" href="/img/02.jpg">
        <link rel="preload" as="03.jpg" href="/img/03.jpg">
        <link rel="preload" as="04.jpg" href="/img/04.jpg">
        <link rel="preload" as="05.jpg" href="/img/05.jpg">
        <link rel="preload" as="06.jpg" href="/img/06.jpg">
        <link rel="preload" as="07.jpg" href="/img/07.jpg">
        <link rel="preload" as="08.jpg" href="/img/08.jpg">
        <link rel="preload" as="09.jpg" href="/img/09.jpg">
        <link rel="preload" as="10.jpg" href="/img/10.jpg">
       
    </head>
    <body>
            @include('nav') 

   

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
                
            @include('title') 
          
         </div>     
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div id="wrapper">
                
        <div id="content">
        
            @yield('content')

        </div>
        </div>  
        </div>  
        
        <!-- Scripts -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        
        <!-- <script>
            document.getElementById("wrapper").style.height = //content height +"px";
        </script> -->

        <script>
        $(document).ready(function() {
        var urls = ['/img/03.jpg', '/img/08.jpg', '/img/06.jpg', '/img/04.jpg', '/img/05.jpg', '/img/02.jpg', '/img/07.jpg', '/img/01.jpg', '/img/09.jpg', '/img/10.jpg'];
            var cout = 1;
            $('body').css('background-image', 'url("' + urls[0] + '")');
            setInterval(function() {
            $('body').css('background-image', 'url("' + urls[cout] + '")');
            cout == urls.length-1 ? cout = 0 : cout++;
        }, 200000);
        });
        </script>
             
    </body>
    <div id="footer">
    <footer>
        &copy; 2018 - <script type="text/javascript">document.write(new Date().getFullYear());</script>
    </footer>
    </div>
   
</html>