<?php

class Canzone {

    public $titolo;
    public $cantanti;

    // every song will have a title and a singer
    public function __construct($titolo, $cantanti) {
        $this->titolo = $titolo;
        $this->cantanti = $cantanti;
    }

    public function riproduci() {
        return $this->titolo;
    }


}