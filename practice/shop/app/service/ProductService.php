<?php

require_once __DIR__. '/../repos/ProductDAOImp.php';

class ProductService {
    private $productDao;

    public function __construct() {
        $this->productDao = new ProductDAOImp();
    }

    public function getAllProducts() {
        return $this->productDao->findAll();
    }
}