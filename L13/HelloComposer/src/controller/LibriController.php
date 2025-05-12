<?php

namespace App\controller;
use App\model\Libro;

class LibriController {

    private $libri = [];

    public function addLibro($id, $titolo, $prezzo) {
        $libro1 = new Libro(); // create object
        $libro1->id = $id;
        $libro1->titolo = $titolo;
        $libro1->prezzo = $prezzo;
        $this->libri[] = $libro1; // add to the array of libri
    }

    // receive libri from the array
    public function getLibri() {
        return $this->libri; 
    }

    public function index() {
        $books = $this->getLibri();
        // var_dump($books);
        include '../src/view/libri.php';
    } 


}