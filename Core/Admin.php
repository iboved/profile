<?php

namespace Core;


class Admin extends Profile
{
    public function __construct($firstName, $lastName, $sex, $age)
    {
        parent::__construct($firstName, $lastName, $sex, $age);
        $this->status = "Administrator";
    }

    public function editFirstName($firstname, User $user = null)
    {
        if (isset($user)) {
            $user->firstName = $firstname;
        } else
            $this->firstName = $firstname;
    }

    public function editLastName($lastname,  User $user = null)
    {
        if (isset($user)) {
            $user->lastname = $lastname;
        } else $this->lastname = $lastname;
    }

    public function editSex($sex,  User $user = null)
    {
        if (isset($user)) {
            $user->sex = $sex;
        } else $this->sex = $sex;
    }

    public function editAge($age,  User $user = null)
    {
        if (isset($user)) {
            $user->age = $age;
        } else $this->age = $age;
    }

    public function ban(User $user)
    {
        $user->status = "Banned!";
    }


    public function unban(User $user)
    {
        $user->status = "Active user";
    }

    public function delete(User $user)
    {
        unset($user);
    }
}
