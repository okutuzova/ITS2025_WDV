<?php

class Serie {
    private $id;
    private $name;
    private $rating;
    private $genre;
    private $image;

    // constructor method
    public function __construct($id, $name, $rating, $genre, $image) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> rating = $rating;
        $this -> genre = $genre;
        $this -> image = $image;

    }


    public function &__get($nomeProprieta) {
        return $this -> $nomeProprieta;
    }



}