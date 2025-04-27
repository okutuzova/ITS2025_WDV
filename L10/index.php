<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo di Serie TV</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    <div class="container">
        <h1>SERIES FORM</h1>
        <form action="addSerie.php" method="post">
            <input type="text" name="name" placeholder="nome della serie" id="serieName"><br>
            <input type="text" name="rating" placeholder="rating della serie" id="serieRating"><br>
            <input type="text" name="genere" placeholder="genere della serie" id="serieGenere"><br>
            <input type="text" name="image" placeholder="image della serie" id="serieImage"><br>
            <button>Add serie</button>

        </form>
    </div>
    <script src="main2.js"></script>
</body>
</html>