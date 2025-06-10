<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Capitale</th>
                        <th>Sigla</th>
                        <th>Regione</th>
                        <th>Bandiera</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->name }}</td>
                            <td>{{ $country->capital }}</td>
                            <td>{{ $country->alpha3Code }}</td>
                            <td>{{ $country->region }}</td>
                            <td><img src='/flags/{{ $country->alpha2Code }}.png' alt="Immagini Bandiera"></td>
                        </tr>
                    
                    @endforeach
                </tbody>
            </table>
        
    </div>
</body>
</html>