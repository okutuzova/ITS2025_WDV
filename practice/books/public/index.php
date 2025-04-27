<?php
require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/repos/BookDAOImp.php';
require_once __DIR__ . '/../app/presentation/BookMVC.php';
require_once __DIR__ . '/../app/integration/BookREST.php';

// $controller = new BookMVC();
// $controller->showAllBooks();

// $page = $_GET['page'] ?? 'mvc';

// if ($page == 'mvc') {
//     $mvc = new BookMVC();
//     $mvc->showAllBooks();

// } elseif ($page == 'rest') {
//     $rest = new BookREST();
//     $rest->getAllBooks();
// }
$dao = new BookDAOImp();
$books = $dao->findAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Catalogue</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    <div class="container">
    <h1>Books Catalogue</h1>
    <form action="addBook.php" method="post">
        <input type="text" name="title" placeholder="Title of the book" id="bookTitle"><br>
        <input type="text" name="author" placeholder="Author of the book" id="bookAuthor"><br>
        <input type="text" name="genre" placeholder="Genre of the book" id="bookGenre"><br>
        <input type="text" name="image" placeholder="Image of the book" id="bookImage"><br>
        <button>Add a book</button>

    
    </form>
    <h2>Books List</h2>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
            <strong>Title:</strong> <?php echo $book->__get('title'); ?><br>
            <strong>Author:</strong> <?php echo $book->__get('author'); ?><br>
            <strong>Genre:</strong> <?php echo $book->__get('genre'); ?><br>
            <strong>Image:</strong> <img src="<?php echo $book->__get('image'); ?>" alt="<?php echo $book->__get('title'); ?>" width="100"><br>
            <hr>
            </li>
            <?php endforeach; ?>
    </ul>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>