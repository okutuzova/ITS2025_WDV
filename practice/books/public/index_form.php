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
    </div>
    <script src="main.js"></script>
</body>
</html>