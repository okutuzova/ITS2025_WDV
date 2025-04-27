<?php 
require_once __DIR__ . '/../repos/PokemonDAO.php';
require_once __DIR__ . '/../repos/Connessione.php';  
require_once __DIR__ . '/../model/Pokemon.php';

class PokemonDAOImp implements PokemonDAO {
   
    // private $connessione = new Connessione();

    private $connessione;
    public function __construct() {
        $this->connessione = new Connessione();
    }
    public function getPokemon() {
        $result = $this->connessione->getConn()->query(PokemonDAO::FIND_ALL);
        $pokemons = [];

        while ($record = $result->fetch(PDO::FETCH_ASSOC)) {
            $id = $record['Id'];
            $name = $record['Name'];
            $type1 = $record['Type 1'];
            $type2 = $record['Type 2'];
            $generation = $record['Generation'];
            $legendary = $record['Legendary'];

            $pokemon = new Pokemon();
            $pokemon->id = $id;
            $pokemon->name = $name;
            $pokemon->type1 = $type1;
            $pokemon->type2 = $type2;
            $pokemon->generation = $generation;
            $pokemon->legendary = $legendary;

            $pokemons[] = $pokemon;


        }
        return $pokemons;
    }

    public function getPokemonByID($id) {

    }
    public function getPokemonByName($name) {

    }
    public function getPokemonByType1($type1) {

    }
    public function getPokemonByType2($type2) {

    }
    public function getPokemonByGeneration($generation) {

    }

    public function getPokemonByLegendary($isLegendary) {

    }
}