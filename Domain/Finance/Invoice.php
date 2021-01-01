<?php

namespace Domain\Finance;

use Domain\Sales\Order;

class Invoice  
{
    private $id;
    private $order;
    private $saledItems;
    private $createdTime;

    public function __construct(Order $order) 
    {
        $this->order = $order;
    }

}
