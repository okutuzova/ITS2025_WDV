<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function quiz()
    {
        // choose a random country
        $correct = Country::inRandomOrder()->first();
        // choose 2 random capitals
        $wrongOptions = Country::where('alpha2Code', '!=', $correct->alpha2Code)
            ->inRandomOrder()
            ->limit(2)
            ->pluck('capital');
        
        // join the correct capital with the wrong ones
        $options = $wrongOptions->push($correct->capital);

        // shuffle the options
        $options = $options->shuffle();

        return view('quiz', [
            'country' => $correct->name,
            'correctCapital' => $correct->capital,
            'options' => $options,
        ]);

    }
    public function training()
    {
        $country = Country::inRandomOrder()->first();
        return view('training', [
            'country' => $country
        ]);
    }

    public function flags_quiz()
    {
        // Пока временно — просто возвращаем заглушку
        return view('flags_quiz');
    }

    // method to check the answer of a user and return the response
    public function checkAnswer(Request $request)
    {
    
        $userAnswer = $request->input('answer');
        $correct = $request->input('correct');
        $result = $userAnswer == $correct ? 'Correct!' : 'Incorrect! The correct answer is ' . $correct;

        return view('quiz_result', [
            'result' => $result
        ]);
       
        
    }
}
