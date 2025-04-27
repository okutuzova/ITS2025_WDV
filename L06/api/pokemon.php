
<?php


    include ("../model/pokemon.php");
    $pokemon_list = file("../files/pokemon_full.csv");
   
    // here we say not to take the first line where the column headers are contained
    array_shift($pokemon_list);

    
    $container_pokemon = [];

    // echo "<pre>";
    // print_r($pokemon_list);
    // echo "</pre>";

    foreach ($pokemon_list as $row) {
        $row_exploded = explode(",", $row);
        $name = $row_exploded[1];
        $type1 = $row_exploded[2];
        $attack = $row_exploded[6];
        $defense = $row_exploded[7];

        $pokemon = new Pokemon($name, $type1, $attack, $defense);
        
        // same as push
        // $container_pokemon [] = $pokemon;

        array_push($container_pokemon, $pokemon);

    }

    // producing a json and indicating JSON as MIME type
    header("content-type: application/json");
    echo json_encode($container_pokemon);