<?php

class BookCtrl {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }
}