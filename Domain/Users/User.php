<?php

namespace Domain\Users;

use Domain\Finance\TranscationableAccount;

abstract class User  
{
    private $id;
    private $name;
    private $address;
    private $gender;
    private $phone;
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }
    
    public function getGender()
    {
        return $this->gender;
    }
    
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
    
    public function getPhone()
    {
        return $this->phone;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    
    public function getAddress()
    {
        return $this->address;
    }
}
