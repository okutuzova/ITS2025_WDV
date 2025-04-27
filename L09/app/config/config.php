<?php 

//constants
define('TITOLO', 'Titolo del sito');

// constants for the paths
define('ASSETS','./public/assets/');
define('CSS','./public/assets/css/');
define('JS','./public/assets/js/');
define('VIEW','./app/view/');


// variables
$autore = "Olga";
$menu_nav = [
    ['nome' => 'home', 'collegamento' => '?'],
    ['nome' => 'gallery', 'collegamento' => '?page=gallery'],
    ['nome' => 'luoghi', 'collegamento' => '?page=luoghi'],
    ['nome' => 'calc', 'collegamento' => '?page=calc'],
    // ['nome' => 'login', 'collegamento' => '?page=login'],
    // ['nome' => 'logout', 'collegamento' => '?page=logout'],
];

$piazze = [
    ['nome' => 'piazza Vittorio', 'foto' => 'https://www.rivistabc.com/wp-content/uploads/2019/03/2d1c1225-9a29-4491-b108-81092ac1ef7e-desktop-e1552315555936.jpg'],
    ['nome' => 'piazza San Carlo', 'foto' => 'https://issimoissimo.com/wp-content/uploads/elementor/thumbs/issimo-travel-guidetp-torino-qk4pd4zw6b0q9pfmf0srzz5l9ynyfbkfzn1p2voau4.webp'],
    ['nome' => 'piazza Statuto', 'foto' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/23/03/38/torino-centro-storico.jpg?w=1200&h=1200&s=1'],
    ['nome' => 'piazza Castello', 'foto' => 'https://images.placesonline.com/photos/torino_guida__1604937504.jpg'],
    ['nome' => 'piazza di Mestieri', 'foto' => 'https://piazzadeimestieri.it/wp21/wp-content/uploads/2021/03/Planimetria-PdM-1-1024x681.jpg'],
];

include './app/model/luogo.php';
include './app/repos/luogoDAO.php';

// $luoghiOOP = [
//     new Luogo('Museo', 'Museo Egizio'), 
//     new Luogo('Museo', 'Museo di Cinema'), 
//     new Luogo('Piazza', 'piazza Vittorio'), 
//     new Luogo('Piazza', 'piazza San Carlo'), 
//     new Luogo('Monumento', 'Mole Antonelliana'), 
//     new Luogo('Piazza', 'piazza Statuto'), 
//     new Luogo('Piazza', 'piazza Castello'), 
//     new Luogo('Piazza', 'piazza di Mestieri'), 
// ];
$dao = new LuogoDAO();
$luoghiOOP = $dao->getLuoghi();


// session start, a memory space on the server
session_start(); // this must happen before any output instruction

//custom functions

function login($user, $pass) {
    if ($user == 'olga' && $pass == '12345'){
        return true;
    }
    return false;
}

if (isset($_POST['username']) && 
    isset($_POST['password']) && 
    $_POST['username'] != trim('') && 
    $_POST['password'] != trim('')  
    ){
    $logged = login($_POST['username'], $_POST['password']);
    // var_dump($logged);

    if ($logged) {
        $_SESSION['utente'] = $_POST['username']; // store the logged user in the session
    }
}