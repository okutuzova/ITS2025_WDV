<?php 

class Connessione {
    private $conn;
    private function connetti() {
        $dsn = 'mysql:host='.HOST.';dbname='.DBNAME.';';
        $this->conn = new PDO ($dsn, USER, PASS);
        
    }
    private function disconnetti() {

    }
    public function getConn() {
        if ($this->conn == null) $this->connetti();
        return $this->conn;

    }
}