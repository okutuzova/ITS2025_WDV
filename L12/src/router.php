<?php

$page = 'home';

if ( isset( $_GET['page'] ) ) {
    $page = $_GET['page'];
}

switch ( $page ) {
    case 'automobili':
        $ctrl = new AutosaloneMVC();
        $ctrl->automobili();
        break;
    case 'api':
        $ctrl = new AutosaloneREST();
        $ctrl->automobili();
        break;
    default:
       $ctrl = new AutosaloneMVC();
       $ctrl->home();
       break;
}