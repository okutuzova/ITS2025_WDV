<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class FlagQuizController extends Controller
{
    public function flags_quiz(Request $request)
    {
        $correct = Country::inRandomOrder()->first();
        $wrongOptions = Country::where('alpha2Code', '!=', $correct->alpha2Code)
            ->inRandomOrder()
            ->limit(3)
            ->get();
    
        $options = $wrongOptions->push($correct)->shuffle();
    
        session(['correct_flag' => $correct->alpha2Code]);
    
        // keep the level 
        if ($request->has('difficulty')) {
            session(['difficulty' => $request->input('difficulty')]);
        }
    
        return view('flags_quiz', [
            'country' => $correct->name,
            'options' => $options,
            'result' => session('result'),
        ]);
    }

    public function checkFlag(Request $request)
    {
        if ($request->input('expired') === '1') {
            return redirect()->route('flags_quiz')->with('result', "⏰ Time's up! No answer selected.");
        }
        $userAnswer = $request->input('answer');
        // dd($request->all());
        $correct = session('correct_flag'); // correct flag from the session;
        // dd($correct);
        // $result = $userAnswer === $correct
            // ? 'Correct!' 
            // : "Incorrect! The correct answer is: {$correct}";

            if ($userAnswer === $correct) {
                $result = 'Correct!';
                session(['score' => session('score') + 1]);
            } else {
                $result = 'Incorrect! The correct flag was: <img src="/flags/' . $correct . '.png" style="height: 20px;"> ';
            }

        return redirect()->route('flags_quiz')->with('result', $result);
        
    }
}
