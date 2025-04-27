<?php 

$cities = ["Torino", "Milano", "Roma", "Napoli", "Locri"];
foreach ($cities as $city) {
    echo "Citta: $city <br>";
}


$numbers = [5, 24, 45, 1, 25, 7];
sort($numbers);
foreach ($numbers as $number) {
    echo "Number: $number <br>";
}

function upperName($name) {    
    return strtoupper($name);
    
}
echo upperName("olga");

