<?php 


    class Magazzino {

        private $prodotti;

        public function __construct() { 
            $this->prodotti = []; 
        }

        public function addProdotto($prodotto) {
            $this->prodotti[] = $prodotto; //adding an elemet on the last position of an array, used more often than a function
            // array_push($this->prodotti, $prodotto);
        }

        public function getProdotti() {
            return $this->prodotti;
        }


    }

?>