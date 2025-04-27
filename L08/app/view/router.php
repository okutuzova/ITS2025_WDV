<?php

$pagina = isset($_GET['page']) ? $_GET['page'] : 'home'; // ternary operator

switch ($pagina) {
    case 'gallery':
        include VIEW . 'gallery.php';
        break;
    case 'calc':
        include VIEW . 'calcolatrice.php';
        break;
    case 'login':
        include VIEW . 'login.php';
        break;
    case 'logout':
        unset($_SESSION['utente']); // reset the variable of the session so that new login must be made
        header('location: ?'); // redirect to the home page
        break;
    

    default:
        include VIEW. 'home.php';
        break;
    

}