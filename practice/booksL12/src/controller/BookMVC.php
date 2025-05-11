<?php

class BookMVC {

    private $service;

    public function __construct() {
        $this->service = new BookService();
    }

    public function books() {
        require VIEW. 'header.php';
        $books = $this->service->getBooks();
        require VIEW. 'tabella.php';
        require VIEW. 'footer.php';
    }

    public function home() {
        require VIEW. 'header.php';
        require VIEW. 'home.php';
        require VIEW. 'footer.php';
    }

}