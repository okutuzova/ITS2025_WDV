@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
<div class="container">
    
    <h2 class="mb-4">🌍 What is the capital of <strong>{{ $country }}</strong>?</h2>

    <form id="quiz-form" method="POST" action="{{ route('quiz') }}">
        @csrf

        @if(session('difficulty') === 'hard')
            <div class="alert alert-warning d-inline-block">
                ⏳ Time left: <strong><span id="timer">10</span></strong> sec
            </div>
            <input type="hidden" name="expired" id="expired" value="0">
        @endif

        <div class="row row-cols-1 row-cols-md-2 g-3">
            @foreach ($options as $option)
                <div class="col">
                    <button type="submit" class="btn btn-outline-primary w-100 py-3 quiz-btn" name="answer" value="{{ $option }}">
                        {{ $option }}
                    </button>
                </div>
            @endforeach
        </div>
    </form>
</div>
@endsection

@section('result')
@if (session('result'))
    <div class="container mt-4">
        <div class="alert alert-info">
            <strong>{{ session('result') }}</strong>
        </div>
    </div>
@endif
@endsection

@section('scripts')
@if(session('difficulty') === 'hard')
<script src="{{ asset('js/capitals-timer.js') }}"></script>
@endif
@endsection
