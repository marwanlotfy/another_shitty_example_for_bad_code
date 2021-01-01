<?php

namespace Domain\Users;

use HasAccount;

class Promoter extends User
{
    use HasAccount;
    
    private $ssn;

    public function setSsn($ssn)
    {
        $this->ssn = $ssn;
        return $this;
    }
    
    public function getSsn()
    {
        return $this->ssn;
    }   
}
