<?php 

class Connessione {

    private  $DATABASE = 'fondamenti';

    private  $HOST = 'mysql:host=localhost;dbname=fondamenti';
    private  $USER = 'ITS_2025';
    private  $PASS = 'ITS_2025';

    private $conn;

    public function getConnessione() {
        // singleton pattern
        if (!isset($this -> conn)) 
            $this -> connetti();
        
        return $this -> conn; // connection with the database
    }

    // added try-catch to control the connection - will throw an error in case connection fails.
    public function connetti() {
        try {
            $this -> conn = new PDO($this -> HOST, $this -> USER, $this -> PASS);
            // echo 'Connessione riuscita';
        } catch (PDOException $eccezione) {
            echo 'Connessione fallita: '.$eccezione->getMessage();
        }

        
    }
    
   public function disconnetti() {
    if (isset($this -> conn)) {
        unset($this -> conn);
        // echo 'Disconnessione riuscita';
    }
   }
}

$c = new Connessione();
$c->connetti();
