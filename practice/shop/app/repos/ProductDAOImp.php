<?php

require_once __DIR__. '/../repos/ProductDAO.php';
require_once __DIR__. '/../repos/Connessione.php';
require_once __DIR__. '/../model/Product.php';

class ProductDAOImp implements ProductDAO {
    private $connessione;

    public function __construct() {
        $this->connessione = new Connessione();
    }

    public function findAll() {
       $result = $this->connessione->getConn()->query(ProductDAO::FIND_ALL);
       $products = []; 

       while ($record = $result->fetch(PDO::FETCH_ASSOC)) {
           $product = new Product(
               $record['id'], 
               $record['title'], 
               $record['category'], 
               $record['price'], 
               $record['description'],
               $record['image']
           );
           $products[] = $product;
       }

       return $products;
    }

    public function saveProduct(Product $product) {
        $sql = 'INSERT INTO products (title, category, price, description, image) 
                VALUES (:title, :category, :price, :description, :image)';
        $stmt = $this->connessione->getConn()->prepare($sql);
        $stmt->bindParam(':title', $product->__get('title'));
        $stmt->bindParam(':category', $product->__get('category'));
        $stmt->bindParam(':price', $product->__get('price'));
        $stmt->bindParam(':description', $product->__get('description'));
        $stmt->bindParam(':image', $product->__get('image'));
        $stmt->execute(); 
    }
}