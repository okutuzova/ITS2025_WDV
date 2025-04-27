<?php

    $pokemon_list = file('./files/pokemon.csv');
    sort($pokemon_list);

    // print_r($pokemon_list);
?>

<div id="sidebar">
    <h2 class="titolo">Pokemon List</h2>
    <ul>
        <?php foreach($pokemon_list as $pokemon): ?>
        <li><a href="?name_pokemon=<?= trim(str_replace('"', '', $pokemon)) ?>"title="Details Card Pokemon: <?= trim(str_replace('"', '', $pokemon)) ?>"><?= trim(str_replace('"', '', $pokemon)) ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>