<?php 

class SerieCtrl {
    private $series = [];

    public function addSerie($serie) {
        $this->series[]= $serie;
        // the same
        // array_push($series, $serie);
    }

    public function getSeries() {
        return $this->series;
    }

    

}