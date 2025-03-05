<?php

class Canzone {

    public $titolo;
    public $cantante;

    public function __construct($titolo, $cantante) {
        $this->titolo = $titolo;
        $this->cantante = $cantante;
    }

    public function fullName(){
        return $this->titolo . ' - ' . $this->cantante;
    }


    public function listaitemizzami(){
        return '<li>' . $this->titolo . ' <strong>' . $this->cantante . '</strong>' . '</li>';
    }


}



