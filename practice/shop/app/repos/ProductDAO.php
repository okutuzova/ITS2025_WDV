<?php

interface ProductDAO {
    const FIND_ALL = 'SELECT * from products';

    public function findAll();

}