<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {width: 100px;height: 70px;}
    </style>
</head>
<body>
    
    <h1>Pietra Forbici Carta</h1>
    <div id="immagini">
        <a href="?simbolo=pietra"><img src="https://www.galleriailvicolo.it/wp-content/uploads/2021/01/sessione_studio-073.png" alt=""></a>
        <a href="?simbolo=forbici"><img src="https://evoluzionecarta.com/881-large_default/forbici-per-tessuto.jpg" alt=""></a>
        <a href="?simbolo=carta"><img src="https://cdn.vectorstock.com/i/1000v/53/74/old-paper-scroll-vector-31615374.jpg" alt=""></a>
    </div>

    <?php
        //             0         1         2
        $simboli = ['pietra', 'carta', 'forbici'];

        $indice = array_rand($simboli);// 0,1,2
        //                     0,1,2   
        $sceltaPC = $simboli[$indice];
        $sceltaUmano = $_GET['simbolo'];

        $result = 'PAREGGIO';
        
        if ($sceltaPC != $sceltaUmano){
            switch ($sceltaUmano) {
                case 'pietra':
                    $result = ($sceltaPC == 'forbici') ? 'Vince UMANO':'Vince PC';
                    break;
                case 'forbici':
                    $result = ($sceltaPC == 'carta') ? 'Vince UMANO':'Vince PC';
                    break;
                case 'carta':
                    $result = ($sceltaPC == 'pietra') ? 'Vince UMANO':'Vince PC';
                    break;
            }
        }
        
        echo 'L\'umano ha scelto '.$sceltaUmano.'';
        echo '<br>';
        echo 'La macchina ha scelto '.$sceltaPC.'';
        echo '<br>';
        echo 'Il risultato è '.$result.'';

    ?>


</body>
</html>