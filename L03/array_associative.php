<?php

$regioni = [
    ['Regione' => 'piemonte', 'Capoluogo' => 'torino', 'Comuni' => ['cuneo', 'asti', 'alessandria']],
    ['Regione' => 'lombardia', 'Capoluogo' => 'milano', 'Comuni' => ['monza','como','lecca']],
    ['Regione' => 'liguria', 'Capoluogo' => 'genova', 'Comuni' => ['la spezia', 'imperia', 'savona']],
    ['Regione'=> 'calabria', 'Capoluogo' => 'catanzaro', 'Comuni' => ['cosenza', 'crotone', 'reggio calabria']]
   
    ];


foreach ($regioni as $region) {
    echo $region['Regione'];
    echo "\n";  
    echo $region['Capoluogo'];
    echo "\n";
}


foreach ($regioni as $region) {
    $stringa = <<<EOT
    <ul>
    <li>$region[Regione]</li>   
    <li>$region[Capoluogo]</li>
    </ul>
    EOT;
    echo $stringa;

    
    echo "\n";  
        
}