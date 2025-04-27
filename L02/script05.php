
<!-- Esercizio 5: Ciclo While -->
<!-- Scrivi uno script PHP che utilizza un ciclo while per stampare i numeri da 1 a 10. -->

<!-- Esercizio 7: Array -->
<!-- Crea un array con almeno 5 elementi e stampa ciascun elemento utilizzando un ciclo foreach. -->


<?php

$x = 0;
while ($x <= 10) {
    echo $x . "\n";
    $x++;
}


$votes = [18, 20, 65, 43, 89, 54];

$num_votes = count($votes); // count the number of elements in the array
// echo $num_votes;


// printing elements of the array one by one 
for ($i = 0; $i < $num_votes; $i++) {
    echo $votes[$i] . "\n";
}


foreach ($votes as $vote) {
    echo $vote . "-";
}

echo "\n";

// printing elements of the array one by one in reverse order
for ($i = $num_votes - 1; $i >= 0; $i--) {
    echo $votes[$i] . "\n";
}