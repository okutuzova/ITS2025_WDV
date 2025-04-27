<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
</head>
<body>
    <h1>Books</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <h3><?= $book->__get('title'); ?></h3>
                <p>Author: <?= $book->__get('author'); ?></p>
                <p>Genre: <?= $book->__get('genre'); ?></p>
               
                <img src="<?= $book->__get('image'); ?>" width="100">
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>