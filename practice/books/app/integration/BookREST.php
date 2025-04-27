<?php 



require_once __DIR__ . '/../service/BookService.php';
class BookREST {
    private $service;

    public function __construct() {
        $this->service = new BookService();
    }
    
    public function getAllBooks() {
        $books = $this->service->getAllBooks();
        header('Content-Type: applization/json');
        echo json_encode($books);
    }
}