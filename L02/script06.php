<!-- Esercizio 6: Funzioni -->
<!-- Crea una funzione PHP che accetta due numeri come parametri e restituisce il loro prodotto. Chiama questa funzione e stampa il risultato. -->

<!-- Esercizio 8: Array Associativi
Crea un array associativo che contiene i nomi e le età di almeno 3 persone. Stampa ciascun nome e età utilizzando un ciclo foreach. -->


<?php 

function multiplyNumbers($a, $b) {
    return $a * $b;
}

echo multiplyNumbers(5, 6);

function fullName($person) {
    return $person['name'] . " " . $person['surname'];
}


// create arrays 
$person1 = array("name" => "Paperino", "surname",  "age" => 25);
$person2 = ["name"=> "Pippo", "surname" => "Paolino", "age"=>  20];
$person3 = ["name"=> "Paperone", "surname" => "Zio", "age"=>  67];

echo $person1['surname']; // will throw a warning that it is an undefined key

$persons = [$person1, $person2, $person3];

// foreach ($persons as $person) {
//     echo $person['name'] . " " . $person['surname'] . " " . $person['age'] . "\n";
// }


foreach ($persons as $person) {
    echo fullName($person). "/n";
}