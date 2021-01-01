<?php

use Domain\Finance\TranscationableAccount;

trait HasAccount
{
    private $financialAccount;

    public function setFinancialAccount(TranscationableAccount $financialAccount)
    {
        $this->financialAccount = $financialAccount;
        return $this;
    }
    
    public function getFinancialAccount()
    {
        return $this->financialAccount;
    }
}