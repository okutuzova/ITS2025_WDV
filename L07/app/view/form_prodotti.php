
<form action="" method="post">

    <input type="text" name="nomeProdotto" placeholder="Nome prodotto"><br>
    <input type="number" name="qtaProdotto" placeholder="Quantita prodotto"><br>
    <input type="number" step="0.50" name="prezzoProdotto" placeholder="prezzo prodotto"><br>
    <input type="submit" value="Aggiungi prodotto">
</form>

<!-- If a name is passed means a product to be added -->

<?php

    if (isset($_POST["nomeProdotto"])) {

        $nome = $_POST["nomeProdotto"];
        $qta = $_POST["qtaProdotto"];
        $prezzo = $_POST["prezzoProdotto"];

        $p = new Prodotto($nome, $qta, $prezzo);
        $magazzino ->addProdotto($p);



    }

?>