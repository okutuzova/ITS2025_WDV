<?php

require_once __DIR__.'/../config/config.php';

class Connessione {
    private $conn;

    private function connetti() {
        $dsn = 'mysql:host=' . HOST . ';dbname=' . DBNAME;
        $this->conn = new PDO($dsn, USER, PASS);
    }

    public function getConn() {
        if ($this->conn == null) {
            $this->connetti();
        }
        return $this->conn;

    }
}