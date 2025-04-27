<?php

require_once __DIR__ . '/../app/repos/BookDAOImp.php';
require_once __DIR__ . '/../app/model/Book.php';

// include 'book.php';
// include 'BookCtrl.php';
// include 'BookDAO.php';

$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$image = $_POST['image'];

$book = new Book(1, $title, $author, $genre, $image);
$dao = new BookDAOImp();
$dao->saveBook($book);

header('Location: index.php');
exit;