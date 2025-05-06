<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product):?>
            <li>
                <h3><?= $product->__get('title');?></h3>
                <p>Category: <?= $product->__get('category');?></p>
                <p>Price: <?= $product->__get('price');?></p>
                <p>Description: <?= $product->__get('description');?></p>
                <img src="<?= $product->__get('image'); ?>" width="100" alt="<?= $product->__get('title'); ?>">
            </li>
            <?php endforeach;?>
    </ul>
</body>
</html>