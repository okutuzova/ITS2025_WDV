<!-- Esercizio 9: Stringhe
Scrivi uno script PHP che dichiara una stringa e stampa il numero di caratteri in essa contenuti. -->

<?php

// count the length of the string
$string = " Hello World";
echo("The string has " . strlen(trim($string)) . " characters\n");