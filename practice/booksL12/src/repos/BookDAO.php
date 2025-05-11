<?php 
class BookDAO {

    private $connessione;

    public function __construct() {
        try {
            $this->connessione = new PDO(DSN, USER, PASS);
        } catch (PDOException $eccezione) {
            echo 'Errore di connessione: '. $eccezione->getMessage();
        }
    }

    public function getBooks() {
        $books = [];
        $richiesta = 'SELECT * FROM books;';
        $result = $this->connessione->query($richiesta);
        $result->setFetchMode(PDO::FETCH_CLASS, 'Book');
        while ($book = $result->fetch()) {
            $books[] = $book;
        } 
        return $books;
    }
}