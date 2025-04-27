<?php

$marks = [18, 20, 30, 25, 6, 30, 15, 24];

$total = 0;
// for ($i = 0; $i < count($marks); $i++ ) {
//     $total += $marks[$i];
// }

foreach ($marks as $mark) {
    $total += $mark;
}

echo "The average is: " . $total / count($marks);

?> 