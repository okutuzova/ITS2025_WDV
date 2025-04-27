<!-- Esercizio 4: Ciclo For -->
<!-- Crea uno script PHP che utilizza un ciclo for per stampare i numeri da 1 a 10. -->

<?php

for ($i = 0; $i < 10; $i++) {
    echo $i. "\n";
}

for ($i = 0; $i <= 10; $i++) {
    if ($i %2 == 0) {
        continue;
    }
    
}