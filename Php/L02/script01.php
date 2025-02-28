<?php



$nome = readline("come ti chiami?");

switch ($nome) {
    case 'alessandro':
        echo 'La variabile $nome è = a ' . $nome;
        break;
    
    case 'giovanna':
        echo "Ciao $nome, benvenuta";
        break;
    
    default:
    echo "hello world";
        break;
}


/*
if ($nome == 'alessandro') {

    echo 'La variabile $nome è = a ' . $nome;

} else if ($nome == 'giovanna') {

    echo "Ciao $nome, benvenuta";

} else {
    echo "hello world";
    
}
*/






?>