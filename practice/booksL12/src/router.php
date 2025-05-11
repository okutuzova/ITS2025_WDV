<?php

$page = 'home';

if ( isset($_GET['page']) ) {
    $page = $_GET['page'];
}

switch ($page) {
    case 'books':
       $ctrl = new BookMVC();
       $ctrl->books();
       break;
    case 'api':
       $ctrl = new BookREST();
       $ctrl->books();
       break;
    default:
       $ctrl = new BookMVC();
       $ctrl->home();
       break;
}