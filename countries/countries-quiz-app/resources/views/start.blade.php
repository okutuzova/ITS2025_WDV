@extends('layouts.app')

@section('title', 'Start Game')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-4 text-center">Welcome to the Geography Quiz</h1>
                <form method="POST" action="{{ route('storeName') }}">
                    @csrf
                    <div class="mb-3">
                    <label for="name" class="form-label">Enter your name to start:</label>
                    <input type="text" id="name" name="name" required placeholder="Your name" class="form-control">
                    </div>
                    
                    <div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary w-50">Continue</button>
    <button type="reset" class="btn btn-secondary w-50">Reset</button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
@endsection