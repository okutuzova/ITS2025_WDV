<?php

class Product{
    private $id;
    private $title;
    private $category;
    private $price;
    private $description;
    private $image;

    public function __construct($id, $title, $category, $price, $description, $image){
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
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

    public function getCategory() {
        return $this->category;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }
}