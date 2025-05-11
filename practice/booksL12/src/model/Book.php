<?php

class Book implements JsonSerializable {
    private $id, $title, $author, $genre, $image;
    public function __get($nomedellaproprietadagettare) {
        return $this->$nomedellaproprietadagettare;
    }
    public function __set($nomeProprieta, $valoreProp) {
        $this->$nomeProprieta = $valoreProp;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'genre' => $this->genre,
            'image' => $this->image
        ];
    }

}