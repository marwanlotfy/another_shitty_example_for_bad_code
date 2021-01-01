<?php

namespace Domain\Sales\Products;

use Domain\Sales\Contracts\Priceable;

class Product implements Priceable
{
    private $id;
    private $modelNumber;
    private $barCode;
    private $color;
    private $size;
    private $price;
    private static $storedQuantity;

    public function setId($id)
    {
        $this->id = $id;
        return $this; 
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getStoredQuantity()
    {
        return Self::$storedQuantity;
    }

    public function getCost()
    {
        return $this->price;
    }
}
