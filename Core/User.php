<?php

namespace Core;


class User extends Profile
{
    public function __construct($firstName, $lastName, $sex, $age)
    {
        parent::__construct($firstName, $lastName, $sex, $age);
        $this->status = "Active user";
    }

    public function __destruct()
    {
        echo "Accout successfully deleted!<br/>";
    }

    public function editFirstName($firstname)
    {
        echo "Only Support can change your firstname. Please contact Support.<br/>";
    }

    public function editLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function editSex($sex)
    {
        echo "Only Support can change your gender. Please contact Support.<br/>";
    }

    public function editAge($age)
    {
        $this->age = $age;
    }
}
