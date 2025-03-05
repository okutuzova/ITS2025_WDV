<?php

$sedi = [
    "Torino" => "Via Roma 1, 10100",
    "Milano" => "Via dei Navigli 1, 20100",
    "Roma" => "Via Torino 1, 00100",
    "Napoli" => "Via Diego Armando 1, 90100",
];

?>

<h2>Sedi</h2>

<h3>E' brutta</h3>
<ul>
    <?php
    foreach ($sedi as $citta => $indirizzo) {
        echo "<li>" . $citta . ": " . $indirizzo . "</li>";
        }
        ?>
</ul>

<h3>E' più bella</h3>

<ul>
    <?php  foreach($sedi as $citta => $indirizzo):  ?>
    <li><?=$citta?> <?=$indirizzo?></li>
    <?php  endforeach; ?>
</ul>