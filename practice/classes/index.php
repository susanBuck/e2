<?php

require 'Catalog.php';

$catalog = new Catalog('products.json');

$product = $catalog->getById(9);

var_dump($catalog->searchByName('ee'));