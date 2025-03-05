<?php

$capoluoghi = [

    //    0         1                  2
    ['piemonte', 'torino', ['cuneo','asti','alessandria']],//0
    ['lombardia','milano',['como','monza','lecco']],//1
    ['liguria','genova',['savona','imperia','la spezia']],//2
];

// echo count($capoluoghi);
echo '<ul>';
echo "\n";
for ($i=0; $i < count($capoluoghi); $i++) { //ciclo le righe
    
    echo '<li>'. $capoluoghi[$i][0] .'</li>';//nome regione
    echo "\n";
    
    echo '<li>' . $capoluoghi[$i][1] . "</li>";//nome capoluogo
    echo "\n";
    echo '<li><ul>';
    for ($j=0; $j < count($capoluoghi[$i][2]); $j++) { //ciclo le colonne
        echo '<li>'. $capoluoghi[$i][2][$j] . '</li>';
        echo "\n";
    }
    echo '</ul></li>';
    echo "\n";

}
echo '</ul>';









