<?php

namespace Core;


class User extends Profile
{
    public function __construct($firstName, $lastName, $sex, $age)
    {
        parent::__construct($firstName, $lastName, $sex, $age);
        $this->status = "Active user";
    }

    public function editFirstName($firstname)
    {
        $this->firstName = $firstname;
    }

    public function editLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function editSex($sex)
    {
        echo "You can not change your gender, please contact Support";
    }

    public function editAge($age)
    {
        $this->age = $age;
    }
}
