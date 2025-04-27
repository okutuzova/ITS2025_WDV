<?php

include 'canzone.php';

$canzone1 = new Canzone('Yellow Submarine', 'Beatles');
$canzone2 = new Canzone('Miglior Micio', 'mici e bici');
echo $canzone1->fullName();
echo "\n";
echo $canzone2->fullName();

$lettura = file(filename:"https://raw.githubusercontent.com/maboglia/ProgrammingResources/refs/heads/master/tabelle/musica/hitlist2023.csv");


$playlist = [];

foreach ($lettura as $riga) {
    $parole = explode(',', $riga);
    $playlist[] = new Canzone($parole[0], $parole[1]);
}



foreach ($playlist as $pezzo) {
    echo $pezzo->fullName(). '\n';
}



header('Content-type:application/json');

// echo '<ul>';
// foreach ($playlist as $pezzo) {
//     echo $pezzo->listitemize(). '\n';
// }
// echo '</ul>';