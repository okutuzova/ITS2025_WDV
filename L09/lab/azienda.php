<?php

class Azienda {
    // constants
    const ALIQUOTA_IVA = 0.22;

    private $nome;

    public function __construct($nome) { // new Azienda('ITS');
        $this -> nome = $nome;
    }

    public function scrivi() {
        return 'Hello ' . $this -> nome;
    }
    
}

// this is a reference to an object
$azienda1 = new Azienda('ITS');
$azienda2 = new Azienda('Ferrari');

echo $azienda1->scrivi();
echo $azienda2->scrivi();
