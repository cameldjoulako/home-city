@extends('base')

{{-- @section('title')
    Home City
@endsection --}}

@section('content')
    <h1>Hello from Douala - {{ date('d/M/Y') }}</h1>

    <p>
        It's Currently {{ date('h:i A') }}
    </p>
@endsection
