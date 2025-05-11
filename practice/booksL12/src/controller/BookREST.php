<?php


class BookREST {
    private $service;

    public function __construct() {
        $this->service = new BookService();
    }

    public function books() {
        header('Content-Type: application/json');

        echo json_encode($this->service->getBooks());
    }
}