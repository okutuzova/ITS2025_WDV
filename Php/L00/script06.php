<?php
//        0  1  2  3 ...
$voti = [18,20,22,24,26,28,30,27,25,23,21,30];


$totale = 0;

// for ($i = 0; $i < count($voti); $i++) {
//     $totale += $voti[$i];
// }

foreach ($voti as $voto) {
    $totale += $voto;
}


echo "Il totale è ". $totale .", la media artimetica è ";
echo $totale / count($voti);















?>