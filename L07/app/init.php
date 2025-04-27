<?php

include '../app/model/Prodotto.php';
include '../app/controller/Magazzino.php';


session_start();
if (isset($_SESSION['magazzino']) ) {
    // il magazzino esiste gia quindi uso quello che ce 
    $magazzino = $_SESSION['magazzino'];

} else {
    //il magazzino non esiste ancora quindi lo creao e poi lo uso 
    
    $magazzino = new Magazzino(); //constructing an object of magazzino with a container inside
    $_SESSION['magazzino'] = $magazzino;
}
