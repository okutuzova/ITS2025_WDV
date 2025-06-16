<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CapitalQuizController extends Controller
{
    public function quiz(Request $request)
    {
        // choose a random country
        $correct = Country::inRandomOrder()->first();
        
        // choose 3 random capitals
        $wrongOptions = Country::where('alpha2Code', '!=', $correct->alpha2Code)
            ->inRandomOrder()
            ->limit(3)
            ->pluck('capital');
            
        // join the correct capital with the wrong ones
        $options = $wrongOptions->push($correct->capital)->shuffle();

       // save an answer to the session
        session(['correct_capital' => $correct->capital]);

        if ($request->has('difficulty')) {
            session(['difficulty' => $request->input('difficulty')]);
        }

        return view('quiz', [
            'country' => $correct->name,
            'options' => $options,
        ]);

    }

    // method to check the answer of a user and return the response
    public function checkAnswer(Request $request)
    {
        if ($request->input('expired') === '1') {
            return redirect()->route('quiz')->with('result', "⏰ Time's up! No answer selected.");
        }

        $userAnswer = $request->input('answer');
        $correct = session('correct_capital'); // correct answer from the session
        // $result = $userAnswer === $correct 
        //     ? 'Correct!' 
        //     : "Incorrect! The correct answer is: {$correct}";

            if ($userAnswer === $correct) {
                $result = 'Correct!';
                session(['score' => session('score') + 1]);
            } else {
                $result = 'Incorrect! The correct answer was: ' . $correct;
            }
            

        return redirect()->route('quiz')->with('result', $result);
    }
}
