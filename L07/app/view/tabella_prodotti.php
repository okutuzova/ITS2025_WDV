<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Quantita</th>
            <th>Prezzo</th>
        </tr>
    </thead>
    <tbody>
        <!-- must repeat lines for each prodotto -->
        <?php foreach  ($magazzino ->getProdotti() as $prodotto ) :    ?>
            <?php include '../app/view/riga_prodotti.php' ?>

        <?php endforeach ?>
    </tbody>
</table>