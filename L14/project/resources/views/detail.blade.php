@extends('index')

@section('content')

<h1>Gioco {{ $gioco->game }}</h1>
<article>
    <header>{{ $gioco->game }}</header>
    <ul>
        <li>Genre {{$gioco->genre}}</li>
        <li>Publisher {{$gioco->publisher}}</li>
        <li>Original Platform {{$gioco->original_platform}}</li>
        <li>Year {{$gioco->year}}</li>
        <li><a href="https://google.com/search?q={{ $gioco->game }}">Cerca</a></li>
    </ul>
    <footer>WDV Production Inc.</footer>
</article>
@endsection