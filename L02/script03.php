<!-- Esercizio 3: Condizioni
Scrivi uno script PHP che controlla se una variabile numerica è positiva, negativa o zero e stampa un messaggio appropriato. -->


<?php 
$number = 1;

if ($number > 0) {
    echo "The number is positive";
} elseif ($number < 0) {
    echo "The number is negative";
} else {
    echo "It is a zero number";
} 