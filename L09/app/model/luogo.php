<?php

class Luogo {
    private $tipo;
    private $nome;
    private $indirizzo;
    private $foto;

    public function __construct($tipo, $nome) {
        $this -> tipo = $tipo;
        $this -> nome = $nome;    
    }

    // magic methods
    public function __get($nameplaceholderdynamic) {
        return $this -> $nameplaceholderdynamic;
    }
    public function __set($name, $value) {
        $this -> $name = $value;
    }

    public function didascalia() {
        return $this -> nome . ", " . $this -> indirizzo. ", ". $this -> tipo;
    }
}