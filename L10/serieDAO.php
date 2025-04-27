<?php 

class SerieDAO {
    private $host = 'mysql:host=localhost:3306;dbname=fondamenti';
    private $username = 'ITS_2025';
    private $password = 'ITS_2025';

    private $db;

    public function __construct() {
        $this->db = new PDO($this->host, $this->username, $this->password);

    }

    public function saveSerie($serie) {
        // prepared statement
        $query = 'INSERT INTO serieTV (name, rating, genre, image) values (:name, :rating, :genre, :image)';
        $placeholder = $this->db->prepare($query);
        $placeholder->bindParam(':name', $serie->name);
        $placeholder->bindParam(':rating', $serie->rating);
        $placeholder->bindParam(':genre', $serie->genre);
        $placeholder->bindParam(':image', $serie->image);

        $placeholder->execute();
        
    }


}