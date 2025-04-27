<?php 

if (isset($_SESSION["Logged"]) && $_SESSION["Logged"] == True) {

}
else {
    if (isset($_GET["username"]) && isset( $_GET["password"])) {
        doLogin($_GET["username"], $_GET["password"]);
    }

}



// _GET is a superglobal array

$vista = isset($_GET["view"]) ? $_GET["view"] :"Home";

// $vista = $_GET["view"] ?? "Home"; // the same as above, shortened (NULL Coalescence)

switch ($vista) {
    case 'contacts':
        include './views/contacts.php';
        break;
    
    default:
        include './views/home.php';
        break;
}
















?>