<?php
$nome = "Paperino";
$eta = 55;


if ($eta >= 18) {
    echo "Sei maggiorenne!";
} else {
    echo "Sei minorenne!";
}

function messaggio($nome, $eta) {
    echo "Ciao, {$nome}! Hai {$eta} anni<br>";
}

for ($i = 0; $i < 11; $i++) {
    echo $i."\n";
}
?>