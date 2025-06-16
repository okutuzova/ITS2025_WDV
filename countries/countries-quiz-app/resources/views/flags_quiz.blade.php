@extends('layouts.app')

@section('title', 'Flags Quiz')

@section('content')
<div class="container">
    <h1 class="mb-4">Flags Quiz</h1>
    <h2 class="mb-4">Which of these is the flag of <strong>{{ $country }}</strong>?</h2>

    <form id="flags-form" method="POST" action="{{ route('flags.check') }}">
        @csrf

        @if(session('difficulty') === 'hard')
            <div class="alert alert-warning">
                ⏳ Time left: <strong><span id="timer">10</span></strong> sec
            </div>
            <input type="hidden" name="expired" id="expired" value="0">
        @endif

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($options as $option)
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn p-0 border-0 bg-transparent quiz-btn" name="answer" value="{{ $option->alpha2Code }}">
                        <div class="card shadow-sm" style="width: 100%; max-width: 220px;">
                            <img src="/flags/{{ $option->alpha2Code }}.png" class="card-img-top img-fluid" alt="Flag">
                        </div>
                    </button>
                </div>
            @endforeach
        </div>
    </form>
</div>
@endsection

@section('result')
@if($result)
<div class="container mt-4">
    <div class="alert alert-info">
        <strong>{!! $result !!}</strong>
    </div>
</div>
@endif
@endsection

@section('scripts')
@if(session('difficulty') === 'hard')
    <script src="{{ asset('js/flags-timer.js') }}"></script>
@endif
@endsection
