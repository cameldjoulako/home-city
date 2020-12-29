@extends('base')

@section('title')
    About Us | {{ env('APP_NAME') }}
@endsection

@section('content')
<img src="/images/logo-homedeve.png" alt="Cameroon Flag" style="display: block; width: 20%">
    <p>
        Built with &hearts; by Homedeve.
    </p>
    <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection
