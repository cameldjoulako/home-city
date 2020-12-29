<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title> @yield('title', env('APP_NAME'))</title>

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
       <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')
       </main>

        <footer>
            <p class="text-gray-400">
                &copy; Copyrigth {{ date('Y') }} &middot;
                {{ config('app.name') }}
                @if (! Route::is('about'))
                    &middot; <a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('about') }}"> About Us</a>
                @endif
            </p>
        </footer>
    </body>
</html>
