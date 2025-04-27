<?php


// array 

$frutti = [] ;

// adding elements to the array
array_push($frutti,"mela");
array_push($frutti,"pera"); ;

// another way to add an element
$frutti[] = "banana";
$frutti[] = "arance";
$frutti[] = "kiwi";
$frutti[] = "papaya";

// var_dump($frutti);

// This one will count number of fruits and assign to a variable
$fruitNumber = count($frutti);


// To sort the array in alphabetical order, you can use the sort() function:
sort($frutti);

for ($i = 0; $i < $fruitNumber; $i++) {
  echo $frutti[$i]."\n";
}


