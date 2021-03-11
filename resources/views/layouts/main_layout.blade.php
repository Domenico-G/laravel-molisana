<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Molisana</title>
        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        {{-- style --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    
    <body> 
        <header>
            @include('components.menu')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('components.footer')
        </footer>
    </body>
</html>