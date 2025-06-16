<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Paesi Quiz')</title>
    <!-- Pico CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">


    <!-- Personal Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if (!request()->routeIs(['home', 'start', 'endGame']))
    <header class="bg-light py-3 border-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('start') }}" class="btn btn-outline-primary">
                ⬅ Back to Start
            </a>
            @if(session('player_name'))
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <a href="{{ route('leaderboard') }}" class="btn btn-outline-success">
                    🏆 View Leaderboard
                </a>
                <span class="text-nowrap">
                    👤 {{ session('player_name') }} | ⭐ {{ session('score') }} points
                </span>
                <form method="POST" action="{{ route('endGame') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">
                        🔚 End Game
                    </button>
                </form>
            </div>
            @else
            <div></div> <!-- Empty space to the right -->
            @endif
        </div>
    </header>
    @else
    <!-- Hiding header if not needed -->
    @endif

    <div class="container mt-5">
        @yield('content')
    </div>
    <div class="container-fluid">
        @yield('result')
    </div>

    @yield('scripts')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>