<?php

require_once __DIR__. '/../app/repos/ProductDAOImp.php';
require_once __DIR__. '/../app/model/Product.php';

$title = $_POST['title'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];

$product = new Product(1, $title, $category, $price, $description, $image);
$dao = new ProductDAOImp();
$dao->saveProduct($product);

header('Location: index.php');
exit;
