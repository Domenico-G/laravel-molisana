<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Molisana</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <header>
        @include('components.menu')
    </header>

    <body> 
        @yield('content')
    </body>


    <footer>
        @include('components.footer')
    </footer>
</html>