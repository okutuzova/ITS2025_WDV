<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdottiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodotti = Product::all();
        return view('home', ['titolo' => "Prodotti", 'prodotti' => $prodotti]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodotto = Product::find($id);
        return view('dettaglio', ['titolo'=>'Scheda' . $prodotto->nome, 'prodotto' => $prodotto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
