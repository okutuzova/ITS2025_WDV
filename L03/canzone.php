<?php

class Canzone {

    public $titolo; // seems in PHP the sintaxys for public private is like this
    public $cantante;

    public function __construct($titolo, $cantante) {
        $this->titolo = $titolo;
        $this->cantante = $cantante;
    }

    public function fullName() {
        return $this->titolo . ' - '. $this->cantante;
    }

    public function listitemize() {
        return '<li>'. $this->titolo.'<strong>'.$this ;
    }

}

