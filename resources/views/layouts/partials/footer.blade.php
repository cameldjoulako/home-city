<footer>
    <p class="text-gray-400">
        &copy; Copyrigth {{ date('Y') }} &middot;
        {{ config('app.name') }}
        @if (! Route::is('about'))
            &middot; <a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('about') }}"> About Us</a>
        @endif
    </p>
</footer>
