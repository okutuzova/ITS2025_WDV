<?php

include 'canzone.php';

// $canzoni = file_get_contents('./hitlist2024.csv'); // the same as read, becomes a single string
$canzoni = file('./hitlist2024.csv'); // readline - array 

$scatolaCanzoni = [];

foreach ($canzoni as $riga) {
    
    $dueStringhe = explode(',', $riga); // split 
    $titolo = $dueStringhe[0];
    $cantanti = $dueStringhe[1];
   
    // The same as array_push syntactic sugar
    $scatolaCanzoni[] = new Canzone($titolo, $cantanti); // creating an object for each song and adding them in array
    
}

// foreach ($scatolaCanzoni as $canzone) {    
//     echo $canzone->riproduci() ."\n";
// }


// var_dump($canzoni);

// $song1 = new Canzone('Sinceramente', 'Annalisa');

// echo $song1->riproduci();



