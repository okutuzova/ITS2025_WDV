<?php

$capoluoghi = [
    ['piemonte', 'torino'],
    ['lombardia', 'milano'],
    ['veneto', 'venezia'],
    ['toscana', 'firenze'],
    ['campania', 'napoli'],
    ['puglia', 'bari'],
    ['sicilia', 'palermo'],
    ['sardegna', 'cagliari'],
    ['liguria', 'genova'],
    ['emilia-romagna', 'bologna'],
    ['calabria', 'catanzaro'],
    ['molise', 'campobasso'],
    ['lazio', 'roma'],
    ['abruzzo', 'l\'aquila'],
    ['umbria', 'perugia'],
    ['marche', 'ancona'],
    ['trentino-alto adige', 'trento'],
    ['friuli-venezia giulia', 'trieste'],
    ['valle d\'aosta', 'aosta'],
    ['basilicata', 'potenza']
    ];

// echo count($capoluoghi); // 20 is the output

for ($i = 0; $i < count($capoluoghi); $i++) { // loop for the rows
    for ($j = 0; $j < count($capoluoghi[$i]); $j++) { // loop for the columns
        echo $capoluoghi[$i][$j]."\t";
    }   
    echo "\n";
}


sort($capoluoghi); // sort the array in alphabetical order by the first element



// This one will handle tabulation
for ($i = 0; $i < count($capoluoghi); $i++) { // loop for the rows
    echo str_pad($capoluoghi[$i][0], 30) . str_pad($capoluoghi[$i][1], 15) . "\n";
}



$capoluoghiComuni = [
    ['piemonte', 'torino', ['cuneo', 'asti', 'alessandria']],
    ['lombardia', 'milano', ['monza','como','lecca']],
    ['liguria', 'genova', ['la spezia', 'imperia', 'savona']]
    
];

echo '<ul>';
for ($i = 0; $i < count($capoluoghiComuni); $i++) {     
    echo '<li>'. $capoluoghiComuni[$i][0].'</li>'; // take piemonte
    echo "\n";
    echo '<li>'. $capoluoghiComuni[$i][1].'</li>'; // take torino
    echo "\n";
    echo '<ul>';
    for ($j = 0; $j < count($capoluoghiComuni[$i][2]); $j++) { 
       
        echo '<li>'. $capoluoghiComuni[$i][2][$j].'</li>'; // take every element of the nested array cuneo, asti, alessandria
        echo "\n";
        
    }
    echo "</ul>";
    echo "\n";   
        
    }
    echo "</ul>";