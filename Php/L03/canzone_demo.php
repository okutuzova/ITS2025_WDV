<?php

include 'canzone.php';

$canzone1 = new Canzone('coca cola', 'mici e bici');

//echo $canzone1->fullName();

$lettura = file('https://raw.githubusercontent.com/maboglia/ProgrammingResources/refs/heads/master/tabelle/musica/hitlist2024.csv');

$playlist = [];

foreach ($lettura as $riga) {
    $parole =  explode(',', $riga);

    $playlist[] = new Canzone($parole[0],$parole[1]);

}

header('Content-type: application/json');
echo json_encode($playlist);
// echo '<ul>';
// foreach ($playlist as $pezzo) {
//     echo $pezzo->listaitemizzami() ."\n";
// }
// echo '</ul>';
