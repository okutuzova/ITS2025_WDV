<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link Pico -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    <div class="container">
        <h1>{{ $titolo }}</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Prezzo</th>
                    <th>Giacenza</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodotti as $prodotto)
                <tr>
                    <td>{{ $prodotto->nome }}</td>
                    <td>{{ $prodotto->categoria }}</td>
                    <td>{{ $prodotto->prezzo }}€</td>
                    <td>{{ $prodotto->giacenza }}</td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</body>
</html>