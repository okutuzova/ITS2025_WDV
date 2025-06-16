<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Score;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        $request->session()->forget('difficulty');
        return view('home');
    }

    // user name and start
    public function start()
    {
        return view('start');
    }
    public function storeName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        session([
            'player_name' => $request->input('name'),
            'score' => 0, // initialize the score to 0
        ]);
        return redirect()->route('start');
    }
    public function training()
    {
        $country = Country::inRandomOrder()->first();
        return view('training', [
            'country' => $country
        ]);
    }

    public function endGame(Request $request)
{
    $name = session('player_name');
    $score = session('score');

    if ($name && $score !== null) {
        Score::create([
            'name' => $name,
            'score' => $score,
        ]);
    }

    $request->session()->flush();

    return view('end', compact('name', 'score'));
}

}
