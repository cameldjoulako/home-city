@extends('base')

@section('title')
    {{ env('APP_NAME') }}
@endsection

@section('content')
    <h1>Hello from Douala - {{ date('d/M/Y') }}</h1>

    <p>
        It's Currently {{ date('h:i A') }}
    </p>
@endsection
