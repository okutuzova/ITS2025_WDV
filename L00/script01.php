<?php


    $number = 6;
    $greeting = "";

    if ($number % 2 == 0) {
        $greeting = 'Hello';

    } else {
        $greeting = '<h2>Does not work</h2>';
    }


    for ($i = 0; $i < 10; $i++) {
        echo "<h$i>";
        echo $greeting;
        echo "</h$i>";
    }
    
    
    ?>


