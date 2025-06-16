@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mt-5"> 
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-4">
            <h1>🌍 Welcome to the World Countries Quiz</h1>
            </div>
            <div class="col-md-6">
                
                @if(session('player_name'))
    <h2 class="mb-4 text-center">Hello, {{ session('player_name') }}!</h2>
    <form method="GET" action="{{ route('quiz') }}" class="mb-4">
        <div class="mb-3">
        <label for="difficulty" class="form-label">Select difficulty:</label>
        <select id="difficulty-capitals" name="difficulty" class="form-select" required>
            <option value="easy">Easy</option>
            <option value="hard">Hard (10 sec timer)</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Start Capitals Quiz</button>
    </form>

    <form method="GET" action="{{ route('flags_quiz') }}" class="mb-4">
        <div class="mb-3"> 
        <label for="difficulty" class="form-label">Select difficulty:</label>
        <select id="difficulty-flags" name="difficulty" class="form-select" required>
            <option value="easy">Easy</option>
            <option value="hard">Hard (10 sec timer)</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Start Flags Quiz</button>
        
    </form>
    @endif



<div class="text-center mt-4">

        <a href="{{ route('training') }}" class="btn btn-success mb-2 w-100">Training Mode</a>
    </div>
</div>
</div>
</div>
@endsection
    



