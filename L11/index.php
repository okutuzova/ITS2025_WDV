<?php require_once __DIR__ . '/app/config/config.php'; ?>

<?php require_once __DIR__ . '/app/presentation/PokemonMVC.php';?>

<?php
$ctrl = new PokemonMVC();
$ctrl->tabellaPokemon();