<?php

require_once SRC.'repos/BookDAO.php';

class BookService {
    private $dao;

    public function __construct() {
        $this->dao = new BookDAO();
    }

    public function getBooks() {
        return $this->dao->getBooks();
    }

    public function getBookById($id) {
        foreach($this->dao->getBooks() as $book) {
            if($book->id == $id) {
                return $book;
            }
        } 
        return null;
    }

}