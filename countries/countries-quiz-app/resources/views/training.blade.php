@extends('layouts.app')

@section('title', 'Training')

@section('content')
<h1>Training Mode</h1>

    <div style="padding-bottom: 10px;">
        <h2>Country: {{ $country->name }}</h2>
        <p><strong>Capital:</strong> {{ $country->capital }}</p>
        <p><strong>Population:</strong> {{ $country->population }}</p>
        <p><strong>Region:</strong> {{ $country->region }}</p>
        <p><strong>Flag:</strong></p>
        <img src='/flags/{{ $country->alpha2Code }}.png' alt="Immagini Bandiera">
    </div>

    <form method="GET" action="{{ route('training') }}">
        <button type="submit">Next Country</button>
    </form>

    <br>
    <a href="{{ route('home') }}">← Back to Home</a>
@endsection