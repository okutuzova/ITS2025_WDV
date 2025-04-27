<?php

class Prodotto {

    private $nome;
    private $quantita;
    private $prezzo;

    public function __construct($nome, $quantita, $prezzo) { //new prodotto("Scarpe da tennis", 10, 90.00)
        $this->nome = $nome; // 'this' is a self referencing pointer, puntatore auto-riferenziante
        $this->quantita = $quantita;
        $this->prezzo = $prezzo;
    }


    // this one will adapt to any property, magic method needs to be declared only once. 
    public function __get($name){
        return $this->$name;
    }

    // this one will adapt to any property, magic method needs to be declared only once. 
    public function __set($name, $value){ 
        $this->$name=$value; 
    }


}