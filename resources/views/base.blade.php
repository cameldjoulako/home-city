<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title', env('APP_NAME'))</title>

    </head>
    <body class="">
        @yield('content')

        <footer>
            <p>
                &copy; Copyrigth {{ date('Y') }} &middot;
                {{ config('app.name') }}
                @if (! Route::is('about'))
                    &middot;<a href="{{ route('about') }}">About Us</a>
                @endif
            </p>
        </footer>
    </body>
</html>
