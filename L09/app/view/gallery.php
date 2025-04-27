<h1>Gallery</h1>

<?php

    if (!isset($_SESSION['utente']))
    
        die('To see the gallery you must have a premium account');

?>
<div id="immagini">
<?php foreach ($piazze as $piazza): ?>
    <figure>
  <img
    src="<?= $piazza['foto'] ?>"
    alt="<?= $piazza['nome'] ?>" />
  <figcaption><?= $piazza['nome'] ?></figcaption>
</figure>

<?php endforeach; ?>
</div>
