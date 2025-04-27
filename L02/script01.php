<!-- Esercizio 1: Hello World
Scrivi uno script PHP che stampa "Hello, World!" sullo schermo. -->


<?php

$name = readline("Enter your name: ");
echo "Hello $name\n";


// If EXAMPLE

// if ($name == "Pippo") {
//     echo "You are a friend of mine\n";
// } else if ($name == "Pluto") {
//     echo "You are a friend of mine\n";
// } else {
//     echo "You are not a friend of mine\n";
// }



// SWITCH EXAMPLE


switch ($name) {    
    case "Pippo":
    case "Pluto":
        echo "You are a friend of mine\n";
        break;
    default:
        echo "You are not a friend of mine\n";
        break;
}