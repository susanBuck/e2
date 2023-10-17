<?php

class Catalog
{
    # Properties
    public $products = [];

    # Methods
    public function __construct(string $dataSource)
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
        return $this->products[$id];
    }

    public function searchByName(string $term)
    {
        $results = [];
        foreach ($this->products as $product) {
            if (strstr($product['name'], $term)) {
                $results[] = $product;
            }
        }

        return $results;
    }
}