<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index() {
        return view('home.index')
            ->with('name', 'John')
            ->with('age', 30)
            ->with('country', 'USA')
            ->with('hobbies', ['tennis', 'books']);
        
    }
}
