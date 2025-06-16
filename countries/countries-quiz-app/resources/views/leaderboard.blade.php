@extends('layouts.app')

@section('title', 'Leaderboard')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">🏆 Leaderboard</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered text-center align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Player</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scores->take(10) as $index => $score)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $score->name }}</td>
                        <td>{{ $score->score }} pts</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
