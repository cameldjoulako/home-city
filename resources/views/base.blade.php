<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', 'Home City')</title>

    </head>
    <body class="">
        @yield('content')

        <footer>
            <p>&copy; Copyrigth {{ date('Y') }} &middot; Camel Djoulako &middot; <a href="/about-us">About Us</a> </p>
        </footer>
    </body>
</html>
