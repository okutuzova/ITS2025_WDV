<!-- Esercizio 2: Variabili e Operazioni Aritmetiche
Crea uno script PHP che dichiara due variabili numeriche e stampa la somma, la differenza, il prodotto e il quoziente.
 -->

<?php


function addMyNums($a, $b) {
    return $a + $b;
}

function subtractMyNums($a, $b) {
    return $a - $b;
}

function multiplyMyNums($a, $b) {
    return $a * $b;
}   

function divideMyNums($a, $b) {
    return $a / $b;
}   

$a = 12;
$b = 4;

echo addMyNums(5, 6,), PHP_EOL;

echo subtractMyNums(10, 6,), PHP_EOL;

echo multiplyMyNums(5,6), PHP_EOL;

echo divideMyNums(5,0);
