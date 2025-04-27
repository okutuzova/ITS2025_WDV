<?php

interface BookDAO {
    const FIND_ALL = 'SELECT * from books';

    public function findAll();
  
}