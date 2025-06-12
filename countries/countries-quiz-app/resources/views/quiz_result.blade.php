@extends('layouts.app')

@section('title', 'Quiz Result')

@section('content')
    <div class="container">
        <h1>Quiz Result</h1>
        <h2>{{ $result }}</h2>
        <a href="{{ route('quiz') }}" style="margin-top: 20px; display: inline-block;">
        ▶ Try another question
    </a>
        
    </div>
@endsection
