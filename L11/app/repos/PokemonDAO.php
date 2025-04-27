<?php

interface PokemonDAO {
    const FIND_ALL = 'SELECT Id, Name, `Type 1`, `Type 2`, Generation, Legendary FROM pokemon.pokemon';

    public function getPokemon();
    public function getPokemonByID($id);
    public function getPokemonByName($name);
    public function getPokemonByType1($type1);
    public function getPokemonByType2($type2);
    public function getPokemonByGeneration($generation);
    public function getPokemonByLegendary($legendary);
}