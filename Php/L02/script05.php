<?php

//Esercizio 7: Array
//Crea un array con almeno 5 elementi e stampa ciascun elemento utilizzando un ciclo for
// e poi usando un foreach.

//       0   1  2  3  4  5  6
$voti = [18,20,22,24,26,28,30];

$numero_voti = count( $voti );

foreach ($voti as $voto) {
    //echo  $voto ."\n";
}


for ($i=$numero_voti - 1; $i >= 0 ; $i--) { 
    echo $voti[$i] . ' - ';
}