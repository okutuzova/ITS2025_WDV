<?php

include 'serie.php';
include 'serieDAO.php';
include 'serieCtrl.php';

$name = $_POST['name'];
$rating = $_POST['rating'];
$genere = $_POST['genere'];
$image = $_POST['image'];




$s = new Serie(1, $name, $rating, $genere, $image);
// var_dump($s);
// $ctrl = new SerieCtrl();
// $ctrl-> addSerie($s);

// $series = $ctrl->getSeries();
// var_dump($series);

$dao = new SerieDAO();
$dao->saveSerie($s);

header('Location: index.php');
