<?php

class AutomobileDAO {
    private $connessione;

    public function __construct() {
        try
        {
            $this->connessione = new PDO(DSN, USER, PASS);
        } catch (PDOException $eccezione) {
            echo 'Errore di connessione: '. $eccezione->getMessage();
        }
    }
       
    public function getAutomobili() {
        $automobili = [];

        // make a query to DB 
        // get results
        // transform in objects autombiles
        // push in array
        // return array
        $richiesta = 'SELECT * FROM automobili';
        $result = $this->connessione->query($richiesta);
        $result->setFetchMode(PDO::FETCH_CLASS, 'Automobile');
        while ($auto = $result->fetch()) {
            $automobili[] = $auto;
        }        

        return $automobili;
        
    }
}