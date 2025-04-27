<?php

// constants
define("ALIQUOTA_IVA",0.22);

// variables
$nome = "Mario";

// this is a procedure
function scrivi() {
    global $nome;
    return 'Hello ' . $nome;
}

// this is a function
function prezzoIvato($prezzoImponibile) {
    return ($prezzoImponibile * ALIQUOTA_IVA) + $prezzoImponibile;
}

// echo scrivi();
echo prezzoIvato(1000);