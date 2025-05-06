<?php
require_once __DIR__. '/../app/config/config.php';
require_once __DIR__. '/../app/repos/ProductDAOImp.php';
require_once __DIR__. '/../app/presentation/ProductMVC.php';
require_once __DIR__. '/../app/Integration/ProductREST.php';

$dao = new ProductDAOImp();
$products = $dao->findAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Catalogue</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    <div class="container">
    <h1>Products Catalogue</h1>
    <form action="addProduct.php" method="post">
        <input type="text" name="title" placeholder="Title of the product" id="productName"><br>
        <input type="text" name="category" placeholder="Category of the product" id="productBrand"><br>
        <input type="number" name="price" step="0.01" placeholder="Price of the product" id="productPrice"><br>
        <input type="text" name="image" placeholder="Image URL of the product" id="productImage"><br>
        <input type="text" name="description" placeholder="Description of the product" id="productDescription"><br>
        <button>Add a product to the catalogue</button>
    </form>
    <h2>Products List</h2>
    <ul>
        <?php foreach ($products as $product):?>
            <li>
            <strong>Title:</strong> <?php echo $product->__get('title');?><br>
            <strong>Category:</strong> <?php echo $product->__get('category');?><br>
            <strong>Price:</strong> <?php echo $product->__get('price');?><br>
            <strong>Description:</strong> <?php echo $product->__get('description');?><br>
            <strong>Image:</strong> <img src="<?php echo $product->__get('image');?>" alt="<?php echo $product->__get('title');?>" width="100"><br>
            <hr>
            </li>   
            <?php endforeach;?>
    </ul>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>