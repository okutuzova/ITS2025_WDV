<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libri</title>
</head>
<body>
    <div class="container">
        <h1>Libri</h1>
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Prezzo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $libro): ?>
                    
                <tr>
                    <td><?=$libro->titolo ?></td>
                    <td><?=$libro->prezzo ?></td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</body>
</html>