<?php

require_once __DIR__. '/../service/ProductService.php';

class ProductMVC {
    private $service;

    public function __construct() {
        $this->service = new ProductService();
    }

    public function showAllProducts() {
        $products = $this->service->getAllProducts();
        include __DIR__.'/../../public/assets/views/productList.php'; 
    }

}