@extends('layouts.app')

@section('title')
    About Us
@endsection

@section('content')
<img class="rounded-full shadow-md my-12" src="{{ asset('images/logo-homedeve.png') }}" alt="Cameroon Flag" style="display: block; width: 20%">
    <h2 class="text-gray-700 mb-5">
        Built with <span class="text-pink-500">&hearts;</span> by Homedeve.
    </h2>
    <p >
        <a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('home') }}">Revenir à la page d'accueil</a>
    </p>
    {{ page_title('Inscription') }}
@endsection
