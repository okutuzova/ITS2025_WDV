<?php

require_once __DIR__ . '/../repos/BookDAOImp.php';


class BookService {
    private $bookDao;

    public function __construct() {
        $this->bookDao = new BookDAOImp();
    }

    public function getAllBooks() {
        return $this->bookDao->findAll();
    }
}