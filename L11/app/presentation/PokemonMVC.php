<?php 
require_once __DIR__ . '/../service/PokemonService.php';

class PokemonMVC {
    private $service;

    public function __construct() {
        $this->service = new PokemonService();
    }

    public function tabellaPokemon() {
        foreach ($this->service->getPokemon() as $pokemon) {
            echo '<h3>'.$pokemon->name.'</h3>';
        }
    }


}