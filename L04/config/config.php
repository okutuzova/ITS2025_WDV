<?php



session_start(); // This command starts a session

// Constants Declaration
define ("TITOLO","My Personal Home Page");

function doLogin( $username, $password ) {
    $user = "Olga";
    $pass = "123";
    if ($user == $username && $pass == $password) {
        // echo "Logged In";
        $_SESSION ["username"] = $user;
        $_SESSION ["Logged"] = True;
        
    }
    else {
        // echo "Not Logged";
        $_SESSION ["Logged"] = False;
    }

}

// This command destroys the session without keeping data
// session_destroy();
?>