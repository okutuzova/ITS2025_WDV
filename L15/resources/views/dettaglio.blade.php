@extends('app')

@section('content')
<article>
    <h1>{{ $prodotto->nome }}</h1>
    <h2>Categoria: {{ $prodotto->categoria }}</h2>
    <p>Prezzo: {{ $prodotto->prezzo }}</p>
    <p>Giacenza: {{ $prodotto->giacenza }}</p>
</article>
@endsection