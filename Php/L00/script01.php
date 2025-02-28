<?php

    // posso scrivere codice PHP - commento

    /*
        commento
        su più righe
    */


    $numero = 8;
    $salutoFinale = "";   
    // selezione 
    if ($numero % 2 == 0) { 
       $salutoFinale = 'Hello PHP';  
    } else {
        $salutoFinale = 'Non funziona';
    }
    
    // iterazione
    for ($i = 1; $i <= 6; $i++) {
        echo "<h$i>";
        echo $salutoFinale;
        echo "</h$i>";
    }


?>



