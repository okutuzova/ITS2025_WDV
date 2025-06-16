@extends('layouts.app')

@section('title', 'Training')

@section('content')
<div class="container">
<h1 class="mb-4 text-center">Training Mode</h1>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white"> 
        <h4 class="mb-0">{{ $country->name }}</h4>
        </div>
        <div class="card-body"> 
        <p><strong>Capital:</strong> {{ $country->capital }}</p>
        <p><strong>Population:</strong> {{ number_format($country->population) }}</p>
        <p><strong>Region:</strong> {{ $country->region }}</p>
        <div class="mt-3"> 
        <p><strong>Flag:</strong></p>
        <img src='/flags/{{ $country->alpha2Code }}.png' alt="Flag of {{ $country->name }}" class="img-fluid border rounded" style="max-height: 200px;">
    </div>
    </div>
    </div>

    <form method="GET" action="{{ route('training') }}" class="text-center">
        <button type="submit" class="btn btn-success">Next Country</button>
    </form>
</div>

    
@endsection