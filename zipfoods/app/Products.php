<?php

namespace App;

class Products
{
    # Properties
    private $products = [];

    # Methods
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);
        $this->products = json_decode($json, true);
    }

    public function getAll()
    {
        return $this->products;
    }

    public function getById(int $id)
    {
        return $this->products[$id] ?? null;
    }

    public function getBySku(string $sku)
    {
        $productId = array_search($sku, array_column($this->products, 'sku', 'id'));
        return $this->getById($productId);
    }
}