<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock Scissors Paper</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Rock Scissors Paper</h1>
    <ul>
        <li><a href="?symbol=rock"><img src="https://media.istockphoto.com/id/151905617/it/foto/rock.jpg?s=1024x1024&w=is&k=20&c=zxCQd3VQfY0iKbJt--drQJmRa9PKX6cDJ735cUlMqw8=" alt="">Rock</a></li>
        <li><a href="?symbol=scissors"><img src="https://img.freepik.com/vettori-gratuito/icona-dello-strumento-forbici_24877-82227.jpg?t=st=1740413795~exp=1740417395~hmac=db6664a276cefab0c77b3108fbe0cdcd05e0fe05b5fc4e333dd678cc3078939f&w=740" alt="">Scissors</a></li>
        <li><a href="?paper"><img src="https://img.freepik.com/vettori-premium/icona-della-lettera-di-scrittura-classica-cartoon-di-icona-vettoriale-della-lettera-di-scrittura-classica-per-il-web-design-isolato-su-sfondo-bianco_98402-45836.jpg?w=740" alt="">Paper</a></li>
    </ul>


    
<?php
$symbol = ['rock', 'scissors', 'paper'];
$userChoice = $_GET['symbol'] ?? null;
echo 'User choice '.$userChoice.'';
echo '<br>';
$index = array_rand($symbol);
$computerChoice = $symbol[$index];

$result = 'TIE';
 if ($computerChoice != $userChoice) {

    switch ($userChoice) {
        case 'rock':
            $result = ($computerChoice == 'scissors') ? 'User wins' : 'Machine wins';   

            break;
        case 'scissors':
            $result = ($computerChoice == 'paper') ? 'User wins' : 'Machine wins';   

            break;
        case 'paper':
            $result = ($computerChoice == 'rock') ? 'User wins' : 'Machine wins';   

            break;
    }
    
 }


echo 'Machine choice '.$computerChoice.'';
echo '<br>';
echo 'The result is: '. $result;
?> 

</body>
</html>



