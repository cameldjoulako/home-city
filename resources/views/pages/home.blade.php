@extends('layouts.app')

@section('title')
    {{ env('APP_NAME') }}
@endsection

@section('content')
    <img src="{{ asset('images/cameroon-flag.jpeg') }}" alt="Cameroon Flag" class="rounded shadow-md h-32 mt-12">
    <h1 class="mt-5 text-3xl font-semi-bold text-indigo-600 sm:text-5xl">Hello from Douala - {{ date('d/M/Y') }}</h1>

    <p class="text-gray-800 text-lg">
        It's Currently {{ date('h:i A') }}
    </p>
@endsection
