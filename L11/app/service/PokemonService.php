<?php
require_once __DIR__ . '/../repos/PokemonDAOImp.php';

class PokemonService {
    private $dao;

    public function __construct() {
        $this->dao = new PokemonDAOImp();
    }

    public function getPokemon() {
        return $this->dao->getPokemon();
    }
}