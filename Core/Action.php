<?php

namespace Core;


interface Action
{
    public function editFirstName($firstname);
    public function editLastName($lastname);
    public function editSex($sex);
    public function editAge($age);
}
