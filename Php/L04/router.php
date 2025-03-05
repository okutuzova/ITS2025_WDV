<?php

 $pagina = isset($_GET['view']) ? $_GET['view'] : 'home' ;
//$pagina = $_GET['view'] ?? 'home' ;//it's the same: NULL COALESCENS

switch ($pagina) {
    case 'contacts':
        include './views/contacts.php';
        break;
        
        default:
        include './views/home.php';
        break;
}





