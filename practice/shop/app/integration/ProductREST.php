<?php

require_once __DIR__ . '/../service/ProductService.php';

class ProductREST {
    private $service;

    public function __construct() {
        $this->service = new ProductService();
    }

    public function getAllProducts() {
        $products = $this->service->getAllProducts();
        header('Content-Type: application/json');
        echo json_encode($products); 
    }

}