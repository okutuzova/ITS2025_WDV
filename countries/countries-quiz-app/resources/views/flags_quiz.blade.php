@extends('layouts.app')

@section('title', 'Flags Quiz')

@section('content')
    <div class="container">
        <h1>Flags Quiz</h1>
        <h2>Which of these is the flag of <strong>{{ $country->name }}</strong> ?</h2>
        <form method="POST" action="{{ route('flags.check') }}"></form>
        @csrf
        <input type="hidden" name="correct" value="{{ $correctFlag }}">
        <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        @foreach($options as $option)
        <button type="submit" name="answer" value="{{ $option }}" style="border: none; background: none;">
            
        <img src='/flags/{{ $option->alpha2Code }}.png' alt="Immagini Bandiera">    
        </button>
        @endforeach
    </div>
            </form>
        

<br>

<a href="{{ route('home') }}">Back to Home</a>

    </div>
    @endsection