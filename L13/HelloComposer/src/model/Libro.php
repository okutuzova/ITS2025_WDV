<?php

namespace App\model;

class Libro {

    private $id;
    private $titolo;
    private $prezzo;

    public function __construct() {
    //    echo "Ogetto Libro Costruito";
    }

    public function __get($nomeProprieta) {
        return $this->$nomeProprieta;
    }

    public function __set($nomeProprieta, $valore) {
        $this->$nomeProprieta = $valore;
    }





    


}