<?php

class Book {
    private $id;
    private $title;
    private $author;
    private $genre;
    private $image;


    public function __construct($id, $title, $author, $genre, $image) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->image = $image;
        
    }

    public function &__get($property) {
        return $this->$property;
    }

    public function __set($nome, $valore) {
        $this->$nome = $valore;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
    public function getGenre() {
        return $this->genre;
    }
    public function getImage() {
        return $this->image;
    }
}