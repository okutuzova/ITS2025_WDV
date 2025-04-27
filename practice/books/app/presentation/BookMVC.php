<?php

require_once __DIR__ . '/../service/BookService.php';


class BookMVC {
    private $service;

    public function __construct() {
        $this->service = new BookService();
    }

    public function showAllBooks() {
        $books = $this->service->getAllBooks();
        // foreach($books as $book) {
        //     echo 'Title: '.$book->getTitle().'<br>';
        //     echo 'Author: '.$book->getAuthor().'<hr>';
        //     echo 'Genre: '.$book->getGenre().'<hr>';
        //     echo 'Image: '.$book->getImage().'<hr>';
        // }
        include __DIR__ . '/../../public/assets/views/books_list.php';
    }
}