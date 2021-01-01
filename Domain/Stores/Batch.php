<?php

namespace Domain\Stores;

use Domain\Users\Supplier;

class Batch  
{
    private $supplier;
    private $cost;
    private $products = [];

    public function getSupplier()
    {
        return $this->supplier;
    }

    public function setSupplier(Supplier $supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }
    
    

    public function getCost()
    {
        return $this->cost;
    }

    public function getEstimatedSalePrice()
    {
        $price = 0;
        foreach ($this->products as $product) {
            $price += $product->getCost() * $product->getStoredQuantity();
        }
        return $price;
    }
}
