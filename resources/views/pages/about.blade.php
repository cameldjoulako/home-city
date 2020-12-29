@extends('base')

@section('title')
    About Us | {{ env('APP_NAME') }}
@endsection

@section('content')
    <p>
        Built with &hearts; by Homedeve.
    </p>
    <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection
