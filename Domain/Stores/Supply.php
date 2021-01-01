<?php

namespace Domain\Stores;

class Supply  
{
    private $batches = [];
    private $shippingCost;

    public function getSupplyCost()
    {
        $cost = $this->shippingCost;
        foreach ($this->batches as $batch) {
            $cost += $batch->getCost();
        }
    }

}
