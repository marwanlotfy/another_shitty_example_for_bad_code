<?php

namespace Domain\Sales;

use Domain\Users\Promoter;
use Domain\Sales\Products\Product;
use Domain\Sales\Contracts\Priceable;
use Domain\Users\User;

class Order implements Priceable
{
    private $products = [];
    private $customer;
    private $promoter;

    public function getCost()
    {
        $cost = 0 ;
        foreach ($this->products as $product) {
            $cost += $product->getCost();
        }
        return $cost;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
        return $this;
    }

    public function setCustomer(User $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    public function setPromoter(Promoter $promoter)
    {
        $this->promoter = $promoter;
        return $this;
    }
}
