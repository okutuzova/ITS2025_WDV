@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <div class="container">
        <h1>Quiz</h1>
        <h2>🌍 What is the capital of <strong>{{ $country }}</strong>?</h2>
        <form method="POST" action="{{ route('quiz') }}">
        @csrf
        <input type="hidden" name="correct" value="{{ $correctCapital }}">
        @foreach ($options as $option)
            <div style="margin: 15px;">
                <button type="submit" name="answer" value="{{ $option }}"
                    style="padding: 10px 20px; font-size: 16px;">
                    {{ $option }}
                </button>
            </div>
        @endforeach
    </form>

    <br>
    <a href="{{ route('home') }}">← Back to Home</a>

    </div>





    
</body>
</html>