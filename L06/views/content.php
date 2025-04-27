
<?php $name = isset($_GET['name_pokemon']) ? $_GET['name_pokemon'] : 'Bulbasaur'; ?>



<?php


    include ("./model/pokemon.php");
    $pokemon_list = file("./files/pokemon_full.csv");
   
    // here we say not to take the first line where the column headers are contained
    array_shift($pokemon_list);

    
    $container_pokemon = [];

    // echo "<pre>";
    // print_r($pokemon_list);
    // echo "</pre>";

    foreach ($pokemon_list as $row) {
        $row_exploded = explode(",", $row);
        $name_ = $row_exploded[1];
        $type1 = $row_exploded[2];
        $attack = $row_exploded[6];
        $defense = $row_exploded[7];

        $pokemon = new Pokemon($name_, $type1, $attack, $defense);
        
        // same as push
        // $container_pokemon [] = $pokemon;

        array_push($container_pokemon, $pokemon);

    }
 
    
    foreach ($container_pokemon as $pokemon) {
        if ($pokemon->name == $name) {
            $type1 = $pokemon->type1;
            $attack = $pokemon->attack ;
        }
    }
?>

<div id="content">
    <h2 class="pokemon-name"><?= $name ?></h2>
    <h2 class="pokemon-name">Type <?= $type1 ?></h2>
    <h2 class="pokemon-name"><?= $attack ?></h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, perspiciatis accusamus. Ea eos, iure nulla aspernatur molestiae sunt quisquam voluptate autem nisi laborum magnam vero, sequi fuga! Consequuntur quisquam provident, earum natus nostrum molestiae culpa, dolores a numquam vitae praesentium?</p>
    <img src="./img/2025-Shiny-Pikachu.webp" alt="Image Pikachu webp">
</div>