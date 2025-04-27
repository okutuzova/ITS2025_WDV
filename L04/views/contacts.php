<h2>Contatti</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet odio dolorum deleniti natus excepturi impedit placeat velit magnam error eum modi qui, illum laborum provident dicta laudantium veniam dolores. Quo, libero incidunt. Debitis placeat quam officia sunt, atque beatae inventore officiis, quae, voluptatem impedit aliquam?</p>


<?php
    $sedi = [
        "Torino" =>"Via Roma 1, 10001",
        "Milano" =>"Via dei Navigli 1, 10300",
        "Locri" =>"Via Caruso 16, 10289",
        "Napoli" =>"Via Armando 14, 10345",


    ]; 
?>

<h2>Sedi</h2>

<h3>Not Nice</h3>
<ul>
<?php 
foreach ($sedi as $citta => $indirizzo) {

    echo "<li>". $citta .": ".$indirizzo. "</li>";
}

?>
</ul>

<h3>Better</h3>
<ul>
    <?php foreach($sedi as $citta => $indirizzo): ?>
    <li>
        <?=$citta .": "?><?=$indirizzo?>
    </li>
    <?php endforeach;?>
</ul>


<?php doLogin("Olga", "222");?>