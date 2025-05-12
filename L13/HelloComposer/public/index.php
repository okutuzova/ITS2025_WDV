<?php

require '../vendor/autoload.php';

use App\model\Libro;
use App\controller\LibriController;
$ctrl = new LibriController();
$ctrl->addLibro(1, "Harry Potter and the Philosopher's Stone", 15);
$ctrl->addLibro(2, "Harry Potter and the Chamber of Secrets", 10);


// $libri = $ctrl->getLibri();

// foreach ($libri as $libro) {
//     echo $libro->titolo . "<br>";
// }

$ctrl->index();