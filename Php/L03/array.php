<?php

//array monodimensionale

$frutti = [];

array_push($frutti,"fragole");
$frutti[] = "banane";
$frutti[] = "mele";
$frutti[] = "pere";
$frutti[] = "arance";

$numeroFrutti = count($frutti) ;

sort($frutti);

// for ($i=0; $i <$numeroFrutti; $i++){
//     echo $frutti[$i] . "\n";
// }

var_dump($frutti);














