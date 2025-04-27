<?php


require_once __DIR__ .'/../repos/BookDAO.php';
require_once __DIR__ . '/../repos/Connessione.php';
require_once __DIR__ . '/../model/Book.php';


class BookDAOImp implements BookDAO {
    private $connessione;

    public function __construct() {
        $this->connessione = new Connessione();
    }

    public function findAll() {
        $result = $this->connessione->getConn()->query(BookDAO::FIND_ALL);
        $books = [];
    
        while ($record = $result->fetch(PDO::FETCH_ASSOC)) {
            // Создание объекта Book с передачей параметров в конструктор
            $book = new Book($record['id'], $record['title'], $record['author'], $record['genre'], $record['image']);
            $books[] = $book;
        }
    
        return $books;
    }
    public function saveBook(Book $book) {
        $sql = "INSERT INTO books (title, author, genre, image) VALUES (:title, :author, :genre, :image)";
        
        // preparation
        $stmt = $this->connessione->getConn()->prepare($sql);
    
        // set params
        $stmt->bindParam(':title', $book->__get('title'));
        $stmt->bindParam(':author', $book->__get('author'));
        $stmt->bindParam(':genre', $book->__get('genre'));
        $stmt->bindParam(':image', $book->__get('image'));
    
        // execute request
        $stmt->execute();
    }
}