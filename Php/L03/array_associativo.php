<?php


$regioni = [

    [
        "Regione" => "Piemonte",
        "Capoluogo" => "Torino",
        "Comuni" => [
            "Asti", "Alessandria", "Cuneo"
        ]
    ],

    [
        "Regione" => "Toscana",
        "Capoluogo" => "Firenze",
        "Comuni" => [
            "Pisa", "Lucca", "Siena", "Livorno"
        ]
    ],

    [
        "Regione" => "Puglia",
        "Capoluogo" => "Bari",
        "Comuni" => [
            "Taranto", "Foggia", "Lecce", "Brindisi"
        ]
    ],


];

foreach ($regioni as $regione) {

$stringa = <<<EOD
<ul>
    <li>$regione[Regione]</li>
    <li>$regione[Capoluogo]</li>

</ul>
EOD;
    echo $stringa;

}











