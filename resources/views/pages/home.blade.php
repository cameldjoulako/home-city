<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home City</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body class="antialiased">
        <h1>Hello from Douala - {{ date('d/M/Y') }}</h1>

        <p>
            It's Currently {{ date('h:i A') }}
        </p>

        <footer>
            <p>&copy; Copyrigth {{ date('Y') }} &middot; Camel Djoulako &middot; <a href="/about-us">About Us</a> </p>
        </footer>
    </body>
</html>