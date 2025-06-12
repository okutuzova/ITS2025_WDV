@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container"> 
<h1>🌍 Welcome to the World Countries Quiz</h1>
<p>Choose a quiz:</p>
<div style="margin-top: 40px; margin-bottom: 40px;">
        <a href="{{ route('quiz') }}" style="padding: 10px 20px; background-color: #3490dc; color: white; text-decoration: none; border-radius: 5px;">Capitals</a>
        <a href="{{ route('flags_quiz') }}" style="padding: 10px 20px; background-color:rgb(238, 140, 11); color: white; text-decoration: none; border-radius: 5px; margin-left: 20px;">Flags</a>
    </div>
</div>

<p>Choose a mode to start:</p>
<div style="margin-top: 40px;">
        <a href="{{ route('quiz') }}" style="padding: 10px 20px; background-color: #3490dc; color: white; text-decoration: none; border-radius: 5px;">Start Quiz</a>
        <a href="{{ route('training') }}" style="padding: 10px 20px; background-color: #38c172; color: white; text-decoration: none; border-radius: 5px; margin-left: 20px;">Training Mode</a>
    </div>
</div>
@endsection
    



