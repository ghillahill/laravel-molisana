<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Molisana</title>
    </head>
    <body>
        <div class="container">
            <header>
                <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
            </header>
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="active">
                        <a href="{{url('/prodotti')}}">Prodotti</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                </ul>
            </div>
            @yield('content')
        </div>

        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
