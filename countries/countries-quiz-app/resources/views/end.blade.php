@extends('layouts.app')

@section('title', 'Game Over')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card text-center shadow-lg p-4" style="max-width: 500px; width: 100%;">
        <div class="card-body">
            <h1 class="card-title text-success">🎉 Game Over!</h1>
            <p class="card-text">Thanks for playing, <strong>{{ $name }}</strong>!</p>
            <p class="card-text">Your final score is: <strong>{{ $score }}</strong> ⭐</p>
            <a href="{{ route('home') }}" class="btn btn-primary mt-3">🔁 Play Again</a>
        </div>
    </div>
</div>
@endsection
