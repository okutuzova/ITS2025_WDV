<?php  define('TITOLO',value: 'WDV Spa'); ?>
<?php  include 'intestazione.php';  ?>


<h1><?= TITOLO ?></h1>

<p>Oggi è il <?= date('d/m/Y')  ?></p>
<p>Sono le ore <?= date('h:i:s')  ?></p>

<?php $materia = 'Programmazione PHP'  ?>

<h2><?= $materia ?></h2>

<?php $materia = 'Fondamenti di basi di dati'  ?>

<h2><?= $materia ?></h2>

<?php 

    echo __FILE__ .'<br>';
    echo __LINE__ .'<br>';

?>

<?php  include 'piedipagina.php';  ?>