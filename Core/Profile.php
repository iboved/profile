<?php

namespace Core;


abstract class Profile implements Action
{
    protected $firstName;
    protected $lastname;
    protected $sex;
    protected $age;
    protected $status;
    
    public function __construct($firstName, $lastName, $sex, $age)
    {
        $this->firstName = $firstName;
        $this->lastname = $lastName;
        $this->sex = $sex;
        $this->age = $age;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function getAge()
    {
        return $this->age;
    }
}
